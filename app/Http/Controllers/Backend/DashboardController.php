<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class DashboardController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        if(Session::get('user') == 1)
        {
            return view('admin.index')->with('success','Vao trang admin');
        }else
        {
            return redirect()->route('Trangchu.index')->with('error','Bạn không có quyền truy cập vào trang này!!');
        }
        
    }
}
