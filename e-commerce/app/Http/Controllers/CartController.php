<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{

    public function index() {

        $cart_item = session('cart',[]);
        $total_price = 0;

        foreach($cart_item as $item) {
            $total_price += $item['price']*$item['qty'];
        }
        return view('frontend.pages.cart', compact('cart_item','total_price'));
    }
    public function add(Request $request) {

        $productID = $request->product_id;
        $size = $request->size;
        $qty = $request->qty;

        $product = Product::find($productID);
        if(!$product){
            return back()->withError('Məhsul Tapılamdı');
        }

        $cart_item = session('cart',[]);
        if(array_key_exists($productID,$cart_item)) {
            $cart_item[$productID]['qty'] += $qty;
        } else {
            $cart_item[$productID] = [
                'image' => $product->image,
                'name' => $product->name,
                'price' => $product->price,
                'qty' => $qty ?? 1,
                'size' => $size
            ];
        }
        session(['cart'=>$cart_item]);

        return back()->withSuccess('Məhsul Səbətə Əlavə Olundu.');
    }
    public function remove(Request $request) {

        $productID = $request->product_id;
        $cartItem = session('cart',[]);
        if(array_key_exists($productID,$cartItem)) {
            unset($cartItem[$productID]);
        }
        session(['cart'=>$cartItem]);
        return back()->withSuccess('Məhsul Səbətdən Qaldırıldı.');
    }
}
