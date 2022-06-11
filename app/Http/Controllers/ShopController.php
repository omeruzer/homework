<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function index($id){
        $shop = Shop::where('id',$id)->first();

        $categories = Category::with('getProducts')->where('shop_id',$id)->get();

        $today = Carbon::today()->format('d/m/Y');

        return view('shop',compact('shop','categories','today'));
    }
}
