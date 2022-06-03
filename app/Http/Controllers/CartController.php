<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Gloudemans\Shoppingcart\Facades\Cart as Carts;

class CartController extends Controller
{
    public function index()
    {

        $products = Carts::content();

        return view('cart', compact('products'));
    }

    public function add(Request $request)
    {

        if(!auth()->check()){
            return redirect()->route('login')->with('mesaj')->with('message','Alışveriş yapmak için giriş yapmalısınız')->with('message_type','warning');
        }

        $product = Product::find($request->id);

        $cartitem = Carts::add($product->id, $product->name, 1, $product->price,['options' => ['shop_id' => $product->shop_id]]);


        if (Auth::check()) {
            $active_cart_id = session('active_cart_id');

            if (!isset($active_cart_id)) {
                $active_cart = Cart::create([
                    'user_id' => Auth::id()
                ]);
                $active_cart_id = $active_cart->id;
                session()->put('active_cart_id', $active_cart_id);
            }

            CartProduct::updateOrCreate(
                ['cart_id' => $active_cart_id, 'product_id' => $product->id],
                ['qty' => $cartitem->qty, 'total' => $product->price]
            );
        }

        return redirect()->back()->with('message', 'Ürün Sepete Eklendi')->with('message_type', 'success');
    }

    public function emptycart()
    {
        Carts::destroy();

        return redirect()->back()->with('message', 'Sepet Boşaltıldı')->with('message_type', 'success');
    }

    public function removecart($rowId)
    {

        if (Auth::check()) {
            $active_cart_id = session('active_cart_id');
            $cartitem = Carts::get($rowId);
            CartProduct::where('cart_id', $active_cart_id)->where('product_id', $cartitem->id)->delete();
        }

        Carts::remove($rowId);
        return redirect()->back()->with('message', 'Ürün Kaldırıldı')->with('message_type', 'success');
    }

    public function decrease($rowId){

        if(Auth::check()){
            $active_cart_id = session('active_cart_id');
            $cartitem = Carts::get($rowId);
            $qty = $cartitem->qty-1;

            if($qty == 0){
                CartProduct::where('cart_id',$active_cart_id)->where('product_id',$cartitem->id)->delete();
            }else{
                CartProduct::where('cart_id',$active_cart_id)->where('product_id',$cartitem->id)->update([
                    'qty' => $qty
                ]); 
            }

        }

        $urun = Carts::get($rowId);
        $qty = $urun->qty-1;
        Carts::update($rowId,$qty);
        
        return redirect()->route('cart');
        
    }

    public function increase($rowId){


        if(Auth::check()){
            $active_cart_id = session('active_cart_id');
            $cartitem = Carts::get($rowId);
            $qty = $cartitem->qty+1;

            CartProduct::where('cart_id',$active_cart_id)->where('product_id',$cartitem->id)->update([
                'qty' => $qty
            ]); 
        }

        $urun = Carts::get($rowId);
        $qty = $urun->qty+1;
        Carts::update($rowId,$qty);
        return redirect()->route('cart');
    }
}
