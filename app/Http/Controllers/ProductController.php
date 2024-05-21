<?php

namespace App\Http\Controllers;
use App\Models\Product;
use App\Models\Order;
use App\Models\Cart;
use Illuminate\Http\Request;
use Session;
use Auth;


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
        return redirect()->back();
        // return redirect(route('client.index'));
    }

    public function getCart(){
        if(!Session::has('cart')){

            return view('client.cart',['products'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart= new Cart($oldCart);
        return view('client.cart',['products'=> $cart->items, 'totalPrice'=>$cart->totalPrice]);
    }
    
    public function postCart(Request $request){
        if(!Session::has('cart')){

            return view('client.cart',['products'=> null]);
        }
        $oldCart = Session::get('cart');
        $cart= new Cart($oldCart);

        $order = new Order();
        $order->cart = serialize($cart);
        Auth::user()->orders()->save($order);



        Session::forget('cart');
        return redirect()->route('client.index')->with('success','successfully');
    }

    public function getReduceByOne($id){
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->reduceByOne($id);

        if(count($cart->items) > 0){

            Session::put('cart',$cart);
        }else{
            Session::forget('cart');

        }
        
        return redirect()->route('client.cart');
    }

    public function getAddByOne($id){
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->addByOne($id);
        Session::put('cart',$cart);
        // if(count($cart->items) > 0){

        //     Session::put('cart',$cart);
        // }else{
        //     Session::forget('cart');

        // }
        
        return redirect()->route('client.cart');
    }
    
    public function getRemoveItem($id){
        $oldCart = Session::has('cart')? Session::get('cart'): null;
        $cart = new Cart($oldCart);
        $cart->removeItem($id);
        if(count($cart->items) > 0){

            Session::put('cart',$cart);
        }else{
            Session::forget('cart');

        }
        return redirect()->route('client.cart');
    }
    




}
