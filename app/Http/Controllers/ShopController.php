<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($id){
        $shop = Shop::where('id',$id)->first();

        $categories = Category::where('shop_id',$id)->get();

        $products = Product::where('category_id',$id)->get();

        return view('shop',compact('shop','categories','products'));
    }
}
