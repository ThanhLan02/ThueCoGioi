<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\reset_code;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
use App\Http\Requests\DoimatkhauRequest;
use Illuminate\Support\Facades\Hash;
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
    public function quenmatkhau()
    {
        return view('auth.quenmatkhau');
    }
    public function quenmatkhaustore(Request $request)
    {
        $users = User::all();
        foreach($users as $item)
        {
            if($item->email == $request->input('email'))
            {
                $randomNumber = random_int(1000, 9999);
                $reset_code = new reset_code();
                $reset_code->code = $randomNumber;
                $reset_code->save();
                $mailuser = $request->input('email');
                Mail::send('auth.guimaxacminh',compact('randomNumber'), function($email) use($mailuser){
                    $email->subject('Mã xác nhận');
                    $email->to($mailuser,'Mã Xác Nhận');
                });
                return view('auth.xacminh',compact('mailuser'));
            }
        }
        return redirect()->back()->with('Error','Email không chính xác');
    }
    public function xacminhstore(Request $request)
    {
        $find = reset_code::where('code',$request->input('code'))->get();
        $mail = $request->input('email');
        if($find)
        {
            Session::put('emaildoimatkhau',$request->input('email'));
            $xoa = reset_code::all();
            foreach($xoa as $item)
            {
                $x = reset_code::findOrFail($item->id);
                $x->delete();
            }
            return view('auth.doimatkhau',compact('mail'));
        }
    }
    public function doimatkhau()
    {
        return view('auth.doimatkhau');
    }
    public function doimatkhaustore(DoimatkhauRequest $request)
    {
        $user = User::where('email',Session::get('emaildoimatkhau'))->first();
        $user->password = Hash::make($request->input('password'));
        $user->save();
        return redirect()->route('auth.login')->with('success','Đổi mật khẩu thành công');
    }
}
