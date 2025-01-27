<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\SliderRequest;
use App\Models\Slider;
use Illuminate\Http\Request;
use ImageResize;
use Str;

class SliderController extends Controller
{
    //home page
    public function index()
    {
        $sliders = Slider::get();
        return view('backend.pages.slider.index', compact('sliders'));
    }

    //create
    public function create()
    {
        return view('backend.pages.slider.edit');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->getClientOriginalExtension();
            $fileName = time()."-".Str::slug($request->title).".".$path;
            $downloadFile = 'img/slider/';

            if($path == 'pdf' || $path == 'svg' || $path == 'webp' || $path == 'jiff') {
                $image->move(public_path($downloadFile),$fileName.".".$path);
                $imageUrl = $downloadFile.$fileName.'.'.$path;
            } else {
                $image = ImageResize::make($image);
                $image->encode('webp', 75)->save($downloadFile.$fileName.'.webp');
                $imageUrl = $downloadFile.$fileName.'.webp';
            }

        } else {
            $image = NULL;
        }

        Slider::create([
            'title'=>$request->title,
            'image'=>$imageUrl ?? NULL,
            'description'=>$request->description,
            'link'=>$request->link,
            'status'=>$request->status
        ]);
        return back()->withSuccess('Created Successfully');
    }

    //show
    public function show(string $id)
    {

    }

    //edit
    public function edit(string $id)
    {
        $slider = Slider::where('id',$id)->first();
        return view('backend.pages.slider.edit',compact('slider'));
    }

    //update
    public function update(Request $request, string $id)
    {
        if($request->hasFile('image')) {
            $image = $request->image;
            $path = $image->getClientOriginalExtension();
            $fileName = time()."-".Str::slug($request->title).".".$path;
            $downloadFile = 'img/slider/';

            if($path == 'pdf' || $path == 'svg' || $path == 'webp' || $path == 'jiff') {
                $image->move(public_path($downloadFile),$fileName.".".$path);
                $imageUrl = $downloadFile.$fileName.'.'.$path;
            } else {
                $image = ImageResize::make($image);
                $image->encode('webp', 75)->save($downloadFile.$fileName.'.webp');
                $imageUrl = $downloadFile.$fileName.'.webp';
            }

        } else {
            $image = NULL;
        }

        Slider::where('id',$id)->update([
            'title'=>$request->title,
            'image'=>$imageUrl ?? NULL,
            'description'=>$request->description,
            'link'=>$request->link,
            'status'=>$request->status
        ]);
        return back()->withSuccess('Updated Successfully');
    }

    //delete
    public function delete(string $id)
    {
        $slider = Slider::where('id',$id)->firstOrFail();

        if(file_exists($slider->image)){
            if(!empty($slider->image)) {
                unlink($slider->image);
            }
        }

        $slider->delete();
        return back()->withSuccess('Deleted Successfully');
    }
}
