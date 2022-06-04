<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){

        $shop_id = Shop::where('user_id',Auth::id())->first();

        $products = Product::where('shop_id',$shop_id->user_id)->get();


        return view('admin.product',compact('products'));
    }

}
