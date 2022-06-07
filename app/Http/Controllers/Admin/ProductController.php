<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    public function index(){

        $shop_id = Shop::where('user_id',Auth::id())->first();

        $products = Product::where('shop_id',$shop_id->user_id)->get();

        $categories = Category::where('shop_id',$shop_id->user_id)->get();


        return view('admin.product',compact('products','categories'));
    }

    public function add(){
        $this->validate(request(),[
            'name'=>'required',
            'img'=>'required',
            'category_id'=>'required',
            'price'=>'required'
        ]);

        $shop_id = Shop::where('user_id',Auth::id())->first();

        Product::create([
            'shop_id' =>$shop_id->id,
            'name'=>request('name'),
            'img'=>request('img'),
            'category_id'=>request('category_id'),
            'price'=>request('price')
        ]);

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }

    public function remove($id){

        Product::where('id',$id)->delete();

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }

    public function edit($id){
        $product = Product::where('id',$id)->first();

        $shop_id = Shop::where('user_id',Auth::id())->first();

        $categories = Category::where('shop_id',$shop_id->user_id)->get();

        return view('admin.productEdit',compact('product','categories'));
    }

    public function editPost($id){
        $product = Product::where('id',$id)->update([
            'name'=>request('name'),
            'img'=>request('img'),
            'category_id'=>request('category_id'),
            'price'=>request('price')
        ]);

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }


}
