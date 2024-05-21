<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\AdminController;

Route::get('/', function () {return view('welcome');})->name('home');
Route::get('/error', function () {return view('error');})->name('error');

Route::get('/login',[AuthController::class,'login'])->name('login');


Route::post('/login',[AuthController::class,'loginPost'])->name('login.post'); 





Route::middleware(['auth'])->group(function(){
    
    Route::get('/logout/{id}',[AuthController::class,'logout'])->middleware('auth')->name('logout');
});









// ALL CLIENT ROUTES
Route::middleware(['auth','user-access:user'])->group(function(){
    
    Route::get('/client',[ProductController::class,'index'])->name('client.index');
    Route::get('/client/add/{id}',[ProductController::class,'addToCart'])->name('client.add');
    Route::get('/client/cart',[ProductController::class,'getCart'])->name('client.cart');
    Route::get('/client/reduce/{id}',[ProductController::class,'getReduceByOne'])->name('client.reduceByOne');
    Route::get('/client/increase/{id}',[ProductController::class,'getAddByOne'])->name('client.addByOne');
    Route::get('/client/remove/{id}',[ProductController::class,'getRemoveItem'])->name('client.remove');
    Route::post('/client/order',[ProductController::class,'postCart'])->name('client.order');
    // Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');
    
    
});



// ALL ADMIN ROUTES
Route::middleware(['auth','user-access:admin'])->group(function(){
    Route::get('/admin/dashboard', [AdminController::class,'index'])->name('admin.index');
    Route::get('/admin/edit/{id}',[AdminController::class,'editForm'])->name('admin.editForm');
    Route::put('/admin/edit/{id}',[AdminController::class,'update'])->name('admin.edit');
    Route::delete('/admin/delete/{user}',[AdminController::class,'delete'])->name('admin.delete');
    Route::get('/admin/register',[AuthController::class,'register'])->name('admin.register');
    Route::post('/register',[AuthController::class,'registerPost'])->name('register.post');
    // Route::get('/logout',[AuthController::class,'login'])->middleware('auth')->name('logout');
});




Route::middleware(['auth','user-access:manager'])->group(function(){
        
    Route::get('/manager',[ManagerController::class,'getOrder'])->name('manager.index');
    Route::put('/manager/servir',[ManagerController::class,'servir'])->name('manager.servir');
    Route::put('/manager/payer',[ManagerController::class,'payer'])->name('manager.payer');
    Route::get('/manager/dashboard',[ManagerController::class,'index'])->name('manager.dashboard');
    Route::patch('/manager/deconnection',[ManagerController::class,'deconnexion'])->name('manager.deconnection');
});

