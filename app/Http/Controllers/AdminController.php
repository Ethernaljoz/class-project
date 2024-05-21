<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Hash;

class AdminController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    public function editForm(Request $request)
    {
        $user = User::find($request->id);
        return view('admin.edit',['user'=>$user]);
    }

    public function delete(User $user)
    {
       $user->delete();
       return redirect(route('admin.index'));
       
    }
    public function update(Request $request)
    {
       $user = User::find($request->id);
       $user->name = $request->name;
       $user->email = $request->email;
       $user->password= Hash::make($request->password);
       $user->save();
       return redirect(route('admin.index'));
       
    }
}
