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

        if(!auth()->check()){
            return redirect()->route('admin.login')->with('mesaj')->with('message','2.')->with('message_type','warning');
        }
        
        $shop_id = Shop::where('user_id',Auth::id())->first();

        $orders = Order::where('shop_id',$shop_id->user_id)->get();

        return view('admin.order',compact('orders'));
    }

    public function detail($id){

        $order= Order::with('getCart.getCartProduct.getProduct')->where('id',$id)->first();


        return view('admin.orderDetail',compact('order'));
    }

    public function delivery($id){

        Order::where('id',$id)->update([
            'isCompleted' => 1
        ]);

        return redirect()->back()->with('message', 'Sipariş Teslim Edildi')->with('message_type', 'success');

    }

}
