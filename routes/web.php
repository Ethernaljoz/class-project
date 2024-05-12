<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {return view('welcome');})->name('home');

Route::get('/login',[AuthController::class,'login'])->name('login');

Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');

Route::post('/login',[AuthController::class,'loginPost'])->name('login.post'); 











Route::get('/manager',[OrderController::class,'getOrder'])->name('manager.index');

Route::get('/manager/order', function () {return view('manager.manager');})->name('manage');




// ALL CLIENT ROUTES
Route::middleware(['auth','user-access:user'])->group(function(){

    Route::get('/client',[ProductController::class,'index'])->name('client.index');
    Route::get('/client/add/{id}',[ProductController::class,'addToCart'])->name('client.add');
    Route::get('/client/cart',[ProductController::class,'getCart'])->name('client.cart');
    Route::get('/client/reduce/{id}',[ProductController::class,'getReduceByOne'])->name('client.reduceByOne');
    Route::get('/client/remove/{id}',[ProductController::class,'getRemoveItem'])->name('client.remove');
    Route::post('/client/order',[ProductController::class,'postCart'])->name('client.order');
    // Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');


});

// ALL MANAGER ROUTES
Route::middleware(['auth','user-access:manager'])->group(function(){
    // Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');

        
});


// ALL ADMIN ROUTES
Route::get('/admin/register',[AuthController::class,'register'])->name('admin.register');
Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');
Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/edit/{id}',[AdminController::class,'editForm'])->name('admin.editForm');
    Route::post('/admin/edit/{id}',[AdminController::class,'edit'])->name('admin.edit');
    Route::delete('/admin/delete',[AdminController::class,'delete'])->name('admin.delete');
    // Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');
});


