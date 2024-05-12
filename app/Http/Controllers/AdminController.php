<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //

    public function index()
    {
        $users = User::all();
        return view('admin.index',compact('users'));
    }

    public function editForm(User $user)
    {
        return view('admin.edit',['user'=>$user]);
    }

    public function delete(User $user)
    {
       $user->delete();
       return redirect(route('admin.index'));
       
    }
}
