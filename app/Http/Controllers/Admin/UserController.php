<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(){

        if(request()->isMethod('POST')){
            $this->validate(request(),[
                'email' => 'required|email',
                'password' => "required"
            ]);

            $credentials = [
                'email' => request('email'),
                'password' => request('password'),
                'isAdmin' => 1,
            ];
    
            if(Auth::attempt($credentials)){
                return redirect()->route('admin.home');
            }else{
                return redirect()->back()->withErrors([
                    'email' => 'E-mail veya Şifre Hatalı!'
                ])->withInput();
            }
        }

        Auth::logout();
        request()->session()->flush();
        request()->session()->regenerate();

    return view('admin.login');
    }

    public function logout(){
        Auth::logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('admin.login');
    }
}
