<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Order;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    public function index(){

        if(!auth()->check()){
            return redirect()->route('admin.login')->with('mesaj')->with('message','2.')->with('message_type','warning');
        }else{
            if(Auth::user()->isAdmin!=1){
                Auth::logout();
                return redirect()->route('admin.login');
            }
        }


        $shop_id = Shop::where('user_id',Auth::id())->first();

        $categories = Category::where('shop_id',$shop_id->user_id)->count();

        $products = Product::where('shop_id',$shop_id->user_id)->count();

        $waitOrder = Order::where('shop_id',$shop_id->user_id)->where('isCompleted',0)->count();
        $completedOrder = Order::where('shop_id',$shop_id->user_id)->where('isCompleted',1)->count();


        return view('admin.home',compact('categories','products','waitOrder','completedOrder'));
    }
}
