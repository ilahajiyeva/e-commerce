<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function about() {
        $about = About::where('id', 1)->first();
        return view('frontend.pages.about', compact('about'));
    }
    public function contact() {
        return view('frontend.pages.contact');
    }
    public function products(Request $request,$slug = null) {

        $category = request()->segment(1) ?? null;

        $size = $request->size ?? null;
        $color = $request->color ?? null;

        $startprice = $request->start_price ?? null;
        $endprice = $request->end_price ?? null;

        $order = $request->order ?? 'id';
        $sort = $request->sort ?? 'desc';


        $products = Product::where('status', '1')
        ->select(['id','name','slug','image','short_text','size','price','color','category_id'])
        ->where(function($q) use($size, $color,$startprice,$endprice) {
            if(!empty($size)) {
                 $q->where('size', $size);
            }
            if(!empty($color)) {
                 $q->where('color', $color);
            }
            if(!empty($startprice) && $endprice) {
                $q->whereBetween('price', [$startprice,$endprice]);
           }
            return $q;

        })->with('category:id,name,slug')
        ->whereHas('category', function($q) use($category,$slug){
            if(!empty($slug)) {
                $q->where('slug', $slug);
           }
        });

        $minprice = $products->min('price');
        $maxprice = $products->max('price');

        $sizelists = Product::where('status', '1')
        ->orderBy('size', 'desc')
        ->groupBy('size')->pluck('size')->toArray();

        $colorlists = Product::where('status', '1')
        ->groupBy('color')->pluck('color')->toArray();

        $products = $products->orderBy($order,$sort)->paginate(21);

        return view('frontend.pages.products',
        compact('products','minprice','maxprice','sizelists','colorlists'));
    }
    public function saleproducts() {
        return view('frontend.pages.products');
    }
    public function prdctdetail($slug) {
        $product = Product::where('slug', $slug)
        ->where('status', '1')->firstOrFail();

        $products = Product::where('id','!=',$product->id)
        ->where('category_id', $product->category_id)
        ->where('status', '1')
        ->limit(6)->get();
        return view('frontend.pages.product', compact('product','products'));
    }
}
