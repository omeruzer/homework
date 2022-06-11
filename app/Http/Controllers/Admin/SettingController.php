<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Shop;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    public function index(){

        $shop = Shop::where('user_id',Auth::id())->first();

        return view('admin.setting',compact('shop'));
    }

    public function edit(Request $request){

        $this->validate(request(),[
            'name'=>'required',
            'img'=>'required',
            'desc'=>'required',
        ]);

        $shop = Shop::where('user_id',Auth::id())->update([
            'img'=>$request->img,
            'name'=>$request->name,
            'desc'=>$request->desc,
        ]);

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success');
    }
}
