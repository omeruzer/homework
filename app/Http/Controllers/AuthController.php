<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator as FacadesValidator;


class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function loginPost()
    {
        $this->validate(request(), [
            'email'     => 'required|email',
            'password'  => 'required'

        ]);

        $credentials = [
            'email' => htmlspecialchars(request('email')),
            'password' => htmlspecialchars(request('password')),
            'isAdmin' => 0
        ];

        if (Auth::attempt($credentials)) {
            request()->session()->regenerate();

            return redirect()->intended('/');
        } else {
            $errors = ['email' => 'Email veya Parola Hatalı'];
            return back()->withErrors($errors)->withInput();
        }
    }


    public function register()
    {
        return view('register');
    }

    public function registerPost()
    {

        $rules = FacadesValidator::make(request()->all(), [
            'name' => 'required|min:5|max:60',
            'scholl_no' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:5|max:15'
        ]);

        if ($rules->fails()) {
            return redirect()->route('register')->withErrors($rules)->withInput();
        }

        $name       =   htmlspecialchars(request('name'));
        $email      =   htmlspecialchars(request('email'));
        $password   =   htmlspecialchars(request('password'));
        $schollNo   =   htmlspecialchars(request('scholl_no'));

        $user = User::create([

            'name'      =>  $name,
            'email'     =>  $email,
            'password'  =>  Hash::make($password),
            'scholl_no' => $schollNo,

        ]);
        Auth::login($user);

        return redirect()->route('home');
    }


    public function info()
    {

        $info = User::where('id', Auth::id())->first();


        return view('info', compact('info'));
    }

    public function infoPost()
    {

        $this->validate(request(), [
            'name' => 'required',
            'scholl_no' => 'required',
            'email' => 'required',
        ]);

        User::where('id', Auth::id())->update([
            'name' => request('name'),
            'scholl_no' => request('scholl_no'),
            'email' => request('email'),
        ]);

        return redirect()->back()->with('message', 'İşlem Başarıyla Gerçekleşti')->with('message_type', 'success')->withInput();
    }

    public function logout()
    {

        Auth::logout();
        request()->session()->flush();
        request()->session()->regenerate();
        return redirect()->route('home');
    }

    public function password()
    {
        return view('password');
    }

    public function passwordPost(){

        $this->validate(request(),[
            'password' => 'required',
            'newPassword' => 'required|confirmed|min:5|max:15',
        ]);

        $pass = htmlspecialchars(request('password'));

        $newPass = htmlspecialchars(request('newPassword'));

        $password = User::where('id',auth()->id())->firstOrCreate();

        
        if(Hash::check($pass, $password->password)){

            $passUpdate = User::where('id',auth()->id())->update([
                'password' => Hash::make($newPass)
            ]);

            if($passUpdate){
                return redirect()->back()->with('message','İşlem Başarıyla Gerçekleşti')->with('message_type','success');
            }
        }else{
            return redirect()->back()->with('message','Eski Şifre Doğru Değil')->with('message_type','danger');
        }

    }
}
