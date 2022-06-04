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

        $shop_id = Shop::where('user_id',Auth::id())->first();

        $categories = Category::where('shop_id',$shop_id->user_id)->get();


        return view('admin.category',compact("categories"));
    }

}
