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
        $slider = new Slider();
        return view('backend.pages.slider.edit', compact('slider'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        if($request->hasFile('image')) {
            $image = $request->image;
            $fileName = $request->title;
            $downloadFile = 'img/slider/';
            $imageUrl = uploadfile($image,$fileName,$downloadFile);

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
        $slider = Slider::where('id',$id)->firstOrFail();

        if($request->hasFile('image')) {

            deletefile($slider->image);
            $image = $request->image;
            $fileName = $request->title;
            $downloadFile = 'img/slider/';
            $imageUrl = uploadfile($image,$fileName,$downloadFile);

        } else {
            $image = NULL;
        }

        $slider->update([
            'title'=>$request->title,
            'image'=>$imageUrl ?? NULL,
            'description'=>$request->description,
            'link'=>$request->link,
            'status'=>$request->status
        ]);
        return back()->withSuccess('Updated Successfully');
    }

    //delete
    public function delete(Request $request)
    {
        $slider = Slider::where('id',$request->id)->firstOrFail();

        deletefile($slider->image);
        $slider->delete();
        return response(['error'=>false, 'message'=>"Deleted Successfully"]);
    }
    public function status(Request $request) {

        $update = $request->status;
        $updatecheck = $update == 'false' ? "0" : "1";
        Slider::where('id',$request->id)->update(['status'=>$updatecheck]);
        return response(['error'=>false, 'status' => $update]);
    }
}
