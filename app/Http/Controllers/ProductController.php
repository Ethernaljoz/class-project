<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;


class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::all();
        return view('client.index',['products'=> $products]);
    }


    public function addToCart(Request $request, $id){
        $product = Product::find($id);
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->add($product, $product->id);

        $request->session()->put('cart',$cart);
        return redirect(route('home.index'));
    }

    public function getCart(){
        if(!Session::has('cart')){

            return view('client.cart',['products'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart= new Cart($oldCart);
        return view('client.cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }





}