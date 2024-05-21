<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class ManagerController extends Controller
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

    // public function getOneOrder($id){
       
    //     $order = Order::find($id) ;
    //     $id = $order->user->id;
        
    //     $orders = Auth::user()->orders ;
    //     $orders->transform(function($orders, $key){
    //         $orders->cart = unserialize($orders->cart);
    //         return $orders;
    //     });

    //     $order = unserialize($order->cart);
        
       

    //     return view('manager.test',['order'=>$order,'id']);
    // }


    public function index()
        {
            // $users = User::all();

            $users = User::where('is_online', true)->get();
            return view('manager.dashboard',compact('users'));
        }

    public function servir(Request $request)

        {
            $order = Order::find($request->id);
            $order->servir = true;
            $order->save();
            // return redirect(route('manager.index'));
        }
    public function payer(Request $request)

        {
            $order = Order::find($request->id);
            $order->payer = true;
            $order->save();
            // return redirect(route('manager.index'));
        }


        public function deconnexion(Request $request)
        {
            $user = User::find($request->id);
            $user->is_online = false;
            $user->save();
            // Auth::setUser($user)->logout();
            // auth()->logout();
            
        }


}
