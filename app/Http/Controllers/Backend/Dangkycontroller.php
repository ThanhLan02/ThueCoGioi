<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quyen;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use App\Http\Requests\AuthRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class Dangkycontroller extends Controller
{
    protected $model;
    public function __construct(User $model)
    {
        $this->model=$model;
    }
    public function Dangky(){

        if(Auth::id() > 0)
        {
            return redirect()->route('Trangchu.index');
        }

        return view('Dangky');
    }
    public function DangkySubmit(Request $request){
        // return $request->all();
        $this->validate($request,[
            'hoten'=>'string|required|min:3',
            'email'=>'string|required|unique:users,email',
            'password'=>'required|min:6',
            'repassword'=>'required|min:6|same:password',
        ]);
        $data=$request->all();
        //dd($data);
        $check=$this->create($data);
        
        if($check){
            request()->session()->flash('success','Đăng ký thành công');
            return redirect()->route('auth.login')->with('success','Đăng ký thành công');
        }
        else{
            request()->session()->flash('error','Đăng ký thất bại!');
            return back()->with('error','Đăng ký thất bại!');
        }
    }
    public function create(array $data){
        return User::create([
            'hoten'=>$data['hoten'],
            'gioitinh'=>$data['gioitinh'],
            'ngaysinh'=>$data['ngaysinh'],
            'sdt'=>$data['sdt'],
            'anh'=>'user.jpg',
            'congty'=>$data['congty'],
            'email'=>$data['email'],
            'password'=>Hash::make($data['password']),
            'diachi'=>$data['diachi'],
            'quyen_id'=>'2',
            'trangthai'=>'1',
            'status'=>'active'
            ]);
    }
}
