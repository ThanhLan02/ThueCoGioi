<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class HosoController extends Controller
{
    public function __construct()
    {
        
    }
    public function hoso($id)
    {
        $User = User::findOrFail($id);
        return view('hoso')->with('User',$User);
    }
    public function updatehoso($id)
    {
        $User=User::findOrFail($id);
        return view('updatehoso',compact('User'));
    }
    public function updatehosoec($id,Request $request)
    {
        $User=User::findOrFail($id);
        $User->hoten = $request->input('hoten');
        $User->gioitinh = $request->input('gioitinh');
        $User->ngaysinh = $request->input('ngaysinh');
        $User->sdt = $request->input('sdt');
        $User->anh = $request->input('anh');
        $User->congty = $request->input('congty');
        $User->email = $request->input('email');  
        $User->diachi = $request->input('diachi'); 
        $User->save();
        return redirect()->route('Hoso.hoso',$id)->with('success','Đổi thông tin thành công');
    }
}
