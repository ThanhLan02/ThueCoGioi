<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\danhgia;
use App\Models\hoadon;
use App\Models\danhgia_taixe;
use App\Models\thietbi;
use App\Models\taixe;
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
                $danhthucn = hoadon::where('NguoiNhan',Session::get('user'))->sum('TongTien');
                $danhthucnformat = number_format($danhthucn,0);
                $doanhthu = hoadon::sum('TongTien');
                $doanhthucnformat = number_format($doanhthu,0);
                $sodon = hoadon::count();
                $sodonphantram = hoadon::count() / 10000;
                $dg1 = danhgia::count();
                $dg2 = danhgia_taixe::count();
                $sodanhgia = $dg1 + $dg2;
                return view('admin.index',compact('danhthucnformat','doanhthucnformat','sodon','sodanhgia','sodonphantram'))->with('success','Vao trang admin');
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
