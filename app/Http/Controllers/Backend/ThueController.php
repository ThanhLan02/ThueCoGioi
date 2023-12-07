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
use App\Models\giohang_taixe;
use App\Models\giohang_thietbi;
use App\Models\taixe;
use App\Models\thietbi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ThueController extends Controller
{
    public function giohang(){

        $ghthietbis = giohang_thietbi::where('NguoiDung_ID',Session::get('user'))->get();
        $ghtaixes = giohang_taixe::where('NguoiDung_ID',Session::get('user'));
        return view('giohang',compact('ghthietbis','ghtaixes'));
    }
    public function themgiothietbi(Request $request){
        $thietbiId = $request->input('thietbi_id');
        $thietbi = thietbi::findOrFail($thietbiId);
        //dd($thietbiId);
        $giohang_thietbi = new giohang_thietbi();
        $giohang_thietbi->ThietBi_ID = $thietbiId;
        $giohang_thietbi->ThietBi_Ten = $thietbi->TenTB;
        $giohang_thietbi->ThietBi_Gia = $thietbi->GiaKM;
        $giohang_thietbi->ThietBi_Anh = $thietbi->Anh;
        $giohang_thietbi->SoLuong = '1';
        $giohang_thietbi->TongTien = $thietbi->GiaKM;
        $giohang_thietbi->NguoiDung_ID = Session::get('user');
        $giohang_thietbi->save();
        return redirect()->route('Trangchu.index')->with('Thành công','Thêm thành công');
    }
    public function themgiotaixe(Request $request){
        $id = $request->input('taixe_id');
        $taixe = taixe::findOrFail($id);
        //dd($thietbiId);
        $giohang_thietbi = new giohang_thietbi();
        $giohang_thietbi->ThietBi_ID = $id;
        $giohang_thietbi->ThietBi_Ten = $taixe->TenTB;
        $giohang_thietbi->ThietBi_Gia = $taixe->GiaKM;
        $giohang_thietbi->ThietBi_Anh = $taixe->Anh;
        $giohang_thietbi->TongTien = $taixe->GiaKM;
        $giohang_thietbi->NguoiDung_ID = Session::get('user');
        $giohang_thietbi->save();
        return redirect()->route('Trangchu.index')->with('Thành công','Thêm thành công');
    }
}
