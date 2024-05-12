<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class OrderController extends Controller
{
    //
    public function getOrder(){
        $orders = Order::all() ;
        
        // $orders = Auth::user()->orders ;
        $orders->transform(function($orders, $key){
            $orders->cart = unserialize($orders->cart);
            return $orders;
        });
        
       

        return view('manager.index',['orders'=>$orders]);
    }
}
