<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function __construct()
    {
        
    }
    public function login(){
        if(Auth::id() > 0)
        {
            return redirect()->route('admin.index');
        }

        return view('auth.login');
    }
    public function dologin(AuthRequest $request){  
        $credentials = [
            'email' => $request->input('email'),
            'password' => $request->input('password')
        ];
        if(Auth::attempt($credentials)){
            //$role = Auth::user()->quyen_id;
            return redirect()->route('admin.index')->with('success','Đăng nhập thành công');
        }
        return redirect()->route('auth.login')->with('error','Đăng nhập thất bại!! Email hoặc mật khẩu không chính xác');
    }
    public function logout(Request $request)
    {
        Auth::logout();
 
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}
