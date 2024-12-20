<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Slider;
use App\Models\Category;
use App\Models\About;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PageHomeController extends Controller
{
    public function index() {

        $slider = Slider::where('status', '1')->first();
        $categories = Category::where('status', '1')->get();
        $about = About::where('id', '1')->first();

        return view("frontend.pages.index", compact('slider',
         'categories', 'about'));
    }
}
