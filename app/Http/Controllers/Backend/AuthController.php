<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    public function __construct()
    {
        
    }
    public function login(){
        
        if(Auth::id() > 0)
        {
            $find = User::find(Auth::user()->id);
            if($find->quyen_id == 1)
            {
                return redirect()->route('admin.index');
            }
            else
            {
                return redirect()->route('Trangchu.index');
            }
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
            $find = User::find(Auth::user()->id);
            Session::put('user',Auth::user()->id);
            Session::put('username',$find->hoten);
            //dd($find->quyen_id);
            $userId = Auth::user()->id;
            if($find->quyen_id != 1)
            {
                return redirect()->route('Trangchu.index')->with('success','Đăng nhập thành công');
            }
            else
            {
                return redirect()->route('admin.index')->with('success','Đăng nhập thành công');
            }
            
        }
        return redirect()->route('auth.login')->with('error','Đăng nhập thất bại!! Email hoặc mật khẩu không chính xác');
    }
    public function logout(Request $request)
    {
        Auth::logout();
        Session::forget('user');
        $request->session()->invalidate();
 
        $request->session()->regenerateToken();
        return redirect()->route('auth.login');
    }
}
