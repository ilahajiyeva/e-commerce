<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        return view('frontend.pages.about');
    }
    public function contact() {
        return view('frontend.pages.contact');
    }
    public function products() {
        return view('frontend.pages.products');
    }
    public function saleproducts() {
        return view('frontend.pages.products');
    }
    public function prdctdetail() {
        return view('frontend.pages.product');
    }
    public function cart() {
        return view('frontend.pages.cart');
    }
}
