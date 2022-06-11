<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PaymentController;
use App\Http\Controllers\ShopController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/shop/{id}', [ShopController::class, 'index'])->name('shop');
Route::get('/cart', [CartController::class, 'index'])->name('cart');
Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/loginPost', [AuthController::class, 'loginPost'])->name('loginPost');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
Route::get('/register', [AuthController::class, 'register'])->name('register');
Route::post('/registerPost', [AuthController::class, 'registerPost'])->name('registerPost');
Route::get('/info', [AuthController::class, 'info'])->name('info');
Route::post('/infoPost', [AuthController::class, 'infoPost'])->name('infoPost');
Route::get('/password', [AuthController::class, 'password'])->name('password');
Route::post('/passwordPost', [AuthController::class, 'passwordPost'])->name('passwordPost');
Route::post('/addcart', [CartController::class, 'add'])->name('addCart');
Route::post('/emptycart', [CartController::class, 'emptycart'])->name('emptycart');
Route::delete('/removecart/{rowId}', [CartController::class, 'removecart'])->name('removecart');
Route::post('/increase/{rowId}', [CartController::class, 'increase'])->name('increase');
Route::post('/decrease/{rowId}', [CartController::class, 'decrease'])->name('decrease');
Route::get('/confirm', [PaymentController::class, 'confirm'])->name('confirm');
Route::post('/topay', [PaymentController::class, 'toPay'])->name('toPay');


Route::group(['prefix' => 'admin'], function () {

    Route::match(['get', 'post'], '/login', [UserController::class, 'login'])->name('admin.login');
    Route::get('/logout', [UserController::class, 'logout'])->name('admin.logout');


    Route::group(['middleware' => 'auth'], function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('admin.home');

        //CATEGORY
        Route::get('/category', [CategoryController::class, 'index'])->name('admin.category');
        Route::post('/category/add', [CategoryController::class, 'add'])->name('admin.category.add');
        Route::get('/category/remove/{id}', [CategoryController::class, 'remove'])->name('admin.category.remove');
        Route::get('/category/edit/{id}', [CategoryController::class, 'edit'])->name('admin.category.edit');
        Route::post('/category/edit/{id}', [CategoryController::class, 'editPost'])->name('admin.category.editPost');

        //PRODUCT
        Route::get('/products', [ProductController::class, 'index'])->name('admin.product');
        Route::post('/product/add', [ProductController::class, 'add'])->name('admin.product.add');
        Route::get('/product/remove/{id}', [ProductController::class, 'remove'])->name('admin.product.remove');
        Route::get('/product/edit/{id}', [ProductController::class, 'edit'])->name('admin.product.edit');
        Route::post('/product/edit/{id}', [ProductController::class, 'editPost'])->name('admin.product.editPost');
        

        //ORDER
        Route::get('/order', [OrderController::class, 'index'])->name('admin.order');
        Route::get('/order/{id}', [OrderController::class, 'detail'])->name('admin.order.detail');
        Route::get('/order/delivery/{id}', [OrderController::class, 'delivery'])->name('admin.order.delivery');
        
        // SETTING
        Route::get('/setting', [SettingController::class, 'index'])->name('admin.setting');
        Route::post('/setting/edit', [SettingController::class, 'edit'])->name('admin.setting.edit');

    });
});
