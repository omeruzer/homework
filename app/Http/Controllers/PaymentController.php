<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Gloudemans\Shoppingcart\Facades\Cart as Carts;

use Illuminate\Http\Request;

class PaymentController extends Controller
{
    public function confirm(){

        if(Carts::count()==0){
            return redirect()->back()->with('message', 'Sepetinizde Ürün Yok')->with('message_type', 'warning');
        }

        Carts::destroy();
        
        return view('confirm');
    }

    public function toPay(){

        $shop_id = Carts::content()->first()->options['options']['shop_id'];

        Order::create([
            'shop_id'=>$shop_id,
            'cart_id'=>session('active_cart_id'),
            'amount'=> Carts::subtotal(),
            'name'=>request('name'),
            'email'=>request('email'),
            'scholl_no'=>request('schollNo'),
        ]);

        session()->forget('active_cart_id');

        return redirect()->route('confirm');

    }
}
