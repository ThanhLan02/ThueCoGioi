<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class DashboardController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        if(Session::get('user') > 1)
        {
            $find = User::find(Session::get('user'));
            if($find->quyen_id == 1)
            {
                return view('admin.index')->with('success','Vao trang admin');
            }
            else
            {
                return redirect()->route('Trangchu.index')->with('error','Bạn không có quyền truy cập vào trang này!!');
            }
        }
        // if(Auth::id() > 0)
        // {
        //     $find = User::find(Auth::user()->id);
        //     if($find->quyen_id == 1)
        //     {
        //         return redirect()->route('admin.index')->with('success','Vao trang admin');
        //     }
        //     else
        //     {
        //         return redirect()->route('Trangchu.index')->with('error','Bạn không có quyền truy cập vào trang này!!');;
        //     }
        // }
    }
}
