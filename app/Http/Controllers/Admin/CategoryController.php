<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function index(){

        if(!auth()->check()){
            return redirect()->route('admin.login')->with('mesaj')->with('message','2.')->with('message_type','warning');
        }

        $shop_id = Shop::where('user_id',Auth::id())->first();

        $categories = Category::where('shop_id',$shop_id->user_id)->get();


        return view('admin.category',compact("categories"));
    }

    public function add(){
        $this->validate(request(),[
            'name'=>'required'
        ]);

        $shop_id = Shop::where('user_id',Auth::id())->first();

        Category::create([
            'shop_id' =>$shop_id->id,
            'name'=>request('name'),
        ]);

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }

    public function remove($id){

        Category::where('id',$id)->delete();

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }

    public function edit($id){
        $category = Category::where('id',$id)->first();

        return view('admin.categoryEdit',compact('category'));
    }

    public function editPost($id){
        $category = Category::where('id',$id)->update([
            'name'=>request('name')
        ]);

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }

}