<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/',[HomeController::class,'index'])->name('home');
Route::get('/shop/{id}',[ShopController::class,'index'])->name('shop');
Route::get('/cart',[CartController::class,'index'])->name('cart');
Route::get('/login',[AuthController::class,'login'])->name('login');
Route::post('/loginPost',[AuthController::class,'loginPost'])->name('loginPost');
Route::get('/logout',[AuthController::class,'logout'])->name('logout');
Route::get('/register',[AuthController::class,'register'])->name('register');
Route::post('/registerPost',[AuthController::class,'registerPost'])->name('registerPost');
Route::get('/info',[AuthController::class,'info'])->name('info');
Route::post('/infoPost',[AuthController::class,'infoPost'])->name('infoPost');
Route::get('/password',[AuthController::class,'password'])->name('password');
Route::post('/passwordPost',[AuthController::class,'passwordPost'])->name('passwordPost');
Route::post('/addcart',[CartController::class,'add'])->name('addCart');
Route::post('/emptycart',[CartController::class,'emptycart'])->name('emptycart');
Route::delete('/removecart/{rowId}',[CartController::class,'removecart'])->name('removecart');
Route::post('/increase/{rowId}', [CartController::class, 'increase'])->name('increase');
Route::post('/decrease/{rowId}', [CartController::class, 'decrease'])->name('decrease');
Route::get('/confirm',[PaymentController::class,'confirm'])->name('confirm');
Route::post('/topay',[PaymentController::class,'toPay'])->name('toPay');


Route::group(['prefix'=>'admin'],function(){
    Route::get('/',[AdminHomeController::class,'index'])->name('admin.home');
});