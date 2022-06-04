<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Order;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function index(){
        $shop_id = Shop::where('user_id',Auth::id())->first();

        $orders = Order::where('shop_id',$shop_id->user_id)->get();

        return view('admin.order',compact('orders'));
    }

}
