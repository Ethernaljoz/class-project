<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;

Route::get('/', function () {return view('welcome');})->name('home');

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');

Route::post('/login',[AuthController::class,'loginPost'])->name('login.post'); 



Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');
Route::get('/register',[AuthController::class,'register'])->name('register');


Route::get('/client',[ProductController::class,'index'])->name('home.index');
Route::get('/client/add/{id}',[ProductController::class,'addToCart'])->name('client.add');
Route::get('/client/cart',[ProductController::class,'getCart'])->name('client.cart');


// ALL CLIENT ROUTES
Route::middleware(['auth','user-access:user'])->group(function(){
        
});

// ALL MANAGER ROUTES
Route::middleware(['auth','user-access:manager'])->group(function(){
        
});


// ALL ADMIN ROUTES
Route::middleware(['auth','user-access:admin'])->group(function(){
        
});


