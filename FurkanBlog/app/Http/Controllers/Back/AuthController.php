<?php

namespace App\Http\Controllers\Back;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

//Model
use App\Models\Admin;

//Auth kütüphanesini kullanacağımız için gerekli komut satırı
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('back.login');
    }
    public function loginPost(Request $request)
    {
        if(Auth::attempt(['email' => $request->user_mail, 'password' => $request->user_pass])){
            // giriş başarılı ise
            return redirect()->route('admin.dashboard');
        }
        //değil ise
        return redirect()->back()->withErrors('Email veya Şifre Hatalı');
    }
    public function logout()
    {
        Auth::logout();

        return view('back.login');
    }
}
