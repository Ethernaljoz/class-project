<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;

class AuthController extends Controller
{
    //

    // REGISTER FUNCTION

    public function register()
    {
        return view('admin.register');
    }

    public function registerPost(Request $request)
    {
        $request->validate([
            'name'=>'required',
            'email'=>'required|email|unique:users',
            'password'=>'required',
        ]);

       $data['name'] = $request->name;
       $data['email'] = $request->email;
       $data['password'] = Hash::make($request->password);

       $user = user::create($data);

       if(!$user){
            return redirect(route('register'));
       }
        
        return redirect(route('admin.index'));
    }

    
    // LOGIN FUNCTION
    public function login(){
        return view('auth.login');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email'=>'required|email',
            'password'=>'required',
        ]);

        // $credentials = $request->only('email','password');

        if(Auth::attempt( $request->only('email','password'))){
            $request->session()->regenerate();
            $user = Auth::user();
            $user->is_online = true ;
            $user->save();
            if(  Auth::user()->role== 'user'){

                return redirect()->intended(route('client.index'));
            }
            if( Auth::user()->role== 'manager'){
                return redirect(route('manager.index'));
            }
            if( Auth::user()->role== 'admin'){
                return redirect()->intended(route('admin.index'));
            }
        }
        return redirect(route('login'));

    }

    public function logout(Request $request){
        // $user = Auth::user();
        // $user->is_online = false ;
        // $user->save();

        $user = User::find($request->id);
        $user->is_online = false ;
        $user->save();
        Auth::setUser($user);
        auth()->logout();
        // Auth::guard('web')->logout();
        
        $request->session()->invalidate();
        return redirect('login');
    }
}
