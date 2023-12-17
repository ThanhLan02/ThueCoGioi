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
use App\Models\chitiethd_taixe;
use App\Models\chitiethd_thietbi;
use App\Models\giohang_taixe;
use App\Models\giohang_thietbi;
use App\Models\hoadon;
use App\Models\taixe;
use App\Models\thietbi;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Mail;
class ThueController extends Controller
{
    public function giohang(){

        $ghthietbis = giohang_thietbi::where('NguoiDung_ID',Session::get('user'))->get();
        $ghtaixes = giohang_taixe::where('NguoiDung_ID',Session::get('user'))->get();
        return view('giohang',compact('ghthietbis','ghtaixes'));
    }
    public function thanhtoan(){
        $total = DB::table('giohang_thietbi')->sum('TongTien');
        $total2 = DB::table('giohang_taixe')->sum('TongTien');
        $kq = $total + $total2;
        $format = number_format($kq,0);
        return view('thanhtoan',compact('kq','format'));
    }
    public function thanhtoanstore(Request $request){
        $currentDate = Carbon::now()->format('Y-m-d');
        $hoadon = new hoadon();
        $hoadon->NgayLap = $currentDate;
        $hoadon->NguoiNhan = Session::get('user');
        $hoadon->SDT = $request->input('SDT');
        $hoadon->DiaChi = $request->input('DiaChi');
        $hoadon->TongTien = $request->input('TongTien');
        $hoadon->TinhTrang = '0';
        $hoadon->save();
        $hd = hoadon::latest()->first();
        
        
        $ghtb = DB::table('giohang_thietbi')->where('NguoiDung_ID', Session::get('user'))->get();
        $ghtx = DB::table('giohang_taixe')->where('NguoiDung_ID', Session::get('user'))->get();

        foreach ($ghtb as $item)
        {
            $tb = thietbi::find($item->ThietBi_ID);
            $chitiethd_thietbi = new chitiethd_thietbi();
            $chitiethd_thietbi->HoaDon_ID = $hd->id;
            $chitiethd_thietbi->ThietBi_ID = $item->ThietBi_ID;
            $chitiethd_thietbi->NCT_ID = $tb->NguoiDung_ID;
            $chitiethd_thietbi->soluong = $item->SoLuong;
            $chitiethd_thietbi->dongia = $item->TongTien;
            $chitiethd_thietbi->TinhTrang = '0';
            $chitiethd_thietbi->save();
            $xoatb = giohang_thietbi::find($item->id);
            $xoatb->delete();
        }
        foreach ($ghtx as $item)
        {
            $tx = taixe::find($item->TaiXe_ID);
            $chitiethd_taixe = new chitiethd_taixe();
            $chitiethd_taixe->HoaDon_ID = $hd->id;
            $chitiethd_taixe->TaiXe_ID = $item->TaiXe_ID;
            $chitiethd_taixe->NCT_ID = $tx->NguoiDung_ID;
            $chitiethd_taixe->dongia = $item->TongTien;
            $chitiethd_taixe->TinhTrang = '0';
            $chitiethd_taixe->save();
            $xoatx = giohang_taixe::find($item->id);
            $xoatx->delete();
        }
        return redirect()->route('Trangchu.index')->with('success','Thanh toán thành công');
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
        $sl = giohang_thietbi::count() + giohang_taixe::count();
        return redirect()->back()->with('success','Thêm thành công');
    }
    public function themgiotaixe(Request $request){
        $id = $request->input('taixe_id');
        $taixe = taixe::findOrFail($id);
        //dd($thietbiId);
        $giohang_taixe = new giohang_taixe();
        $giohang_taixe->TaiXe_ID = $id;
        $giohang_taixe->TaiXe_Ten = $taixe->TenTX;
        $giohang_taixe->TaiXe_Gia = $taixe->GiaKM;
        $giohang_taixe->TaiXe_Anh = $taixe->Anh;
        $giohang_taixe->TongTien = $taixe->GiaKM;
        $giohang_taixe->NguoiDung_ID = Session::get('user');
        $giohang_taixe->save();
        $sl = giohang_thietbi::count() + giohang_taixe::count();
        Session::put('soluong',$sl);
        return redirect()->back()->with('success','Thêm thành công');
    }
    public function deleteghtb($id)
    {
        $giohang_thietbi = giohang_thietbi::find($id);

        if ($giohang_thietbi) {
            $giohang_thietbi->delete();
            return redirect()->back()->with('Success','Xóa thành công');
        } else {
            return redirect()->back()->with('Success','Xóa không thành công');
        }
    }
    public function deleteghtx($id)
    {
        $giohang_taixe = giohang_taixe::find($id);

        if ($giohang_taixe) {
            $giohang_taixe->delete();
            return redirect()->back()->with('Success','Xóa thành công');
        } else {
            return redirect()->back()->with('Success','Xóa không thành công');
        }
    }
    function checkduyettb($HoaDon_ID)
    {
        $cthdtbs = DB::table('chitiethd_thietbi')->where('HoaDon_ID', $HoaDon_ID)->get();
        foreach($cthdtbs as $t)
        {
            if($t->TinhTrang == 0)
            {
                return false;
            }
        }
        return true;
    }
    function checkduyettx($HoaDon_ID)
    {
        $cthdtxs = DB::table('chitiethd_taixe')->where('HoaDon_ID', $HoaDon_ID)->get();
        foreach($cthdtxs as $t)
        {
            if($t->TinhTrang == 0)
            {
                return false;
            }
        }
        return true;
    }
    public function donhang()
    {
        $hoadons = DB::table('hoadon')->where('NguoiNhan', Session::get('user'))->get();
        return view('donhang',compact('hoadons'));
    }
    
    public function duyetdon()
    {
        $cthdtbs = DB::table('chitiethd_thietbi')->join('hoadon', 'chitiethd_thietbi.HoaDon_ID', '=', 'hoadon.id')
        ->join('thietbi', 'chitiethd_thietbi.ThietBi_ID', '=', 'thietbi.id')
        ->where('NCT_ID', Session::get('user'))
        ->select('chitiethd_thietbi.id', 'chitiethd_thietbi.HoaDon_ID','chitiethd_thietbi.ThietBi_ID','chitiethd_thietbi.soluong','chitiethd_thietbi.dongia','chitiethd_thietbi.TinhTrang', 'thietbi.TenTB AS TenTB', 'hoadon.NguoiNhan AS NguoiNhan')
        ->get();
        $cthdtxs = DB::table('chitiethd_taixe')->join('hoadon', 'chitiethd_taixe.HoaDon_ID', '=', 'hoadon.id')
        ->join('taixe', 'chitiethd_taixe.TaiXe_ID', '=', 'taixe.id')
        ->where('NCT_ID', Session::get('user'))
        ->select('chitiethd_taixe.id', 'chitiethd_taixe.HoaDon_ID','chitiethd_taixe.TaiXe_ID','chitiethd_taixe.dongia','chitiethd_taixe.TinhTrang', 'taixe.TenTX AS TenTX', 'hoadon.NguoiNhan AS NguoiNhan')
        ->get();
        return view('duyetdon',compact('cthdtbs','cthdtxs'));
    }
    public function duyetdontb($id)
    {
        $chitiethd_thietbi=chitiethd_thietbi::findOrFail($id);
        $chitiethd_thietbi->TinhTrang = "1";
        $chitiethd_thietbi->save();

        $kt = true;
        $hoadons = DB::table('hoadon')->where('id', $chitiethd_thietbi->HoaDon_ID)->get();
        foreach($hoadons as $temp)
        {
            $check = $this->checkduyettb($temp->id);
            $check2 = $this->checkduyettx($temp->id);
            if(($check == false) || ($check2 == false))
            {
                $kt = false;
            }
        }
        if($kt == true)
        {
            $hd = hoadon::findOrFail($chitiethd_thietbi->HoaDon_ID);
            $hd->TinhTrang = "1";
            $hd->save();
            $cthdtb = chitiethd_thietbi::where('HoaDon_ID',$hd->id)->get();
            $cthdtx = chitiethd_taixe::where('HoaDon_ID',$hd->id)->get();
            $nn = User::findOrFail($hd->NguoiNhan);
            $mailuser = $nn->email;
            Mail::send('guihoadon',compact('hd','cthdtb','cthdtx'), function($email) use($mailuser){
                $email->subject('Xác nhận thuê');
                $email->to($mailuser,'test');
            });
        }
        return redirect()->back()->with('Success','duyệt thành công');
    }
    public function xoadontb($id)
    {
        $chitiethd_thietbi=chitiethd_thietbi::findOrFail($id);
        $chitiethd_thietbi->TinhTrang = "-1";
        $chitiethd_thietbi->save();
        return redirect()->back()->with('Success','Hủy thành công');
    }
    public function duyetdontx($id)
    {
        
        $chitiethd_taixe=chitiethd_taixe::findOrFail($id);
        $chitiethd_taixe->TinhTrang = "1";
        $chitiethd_taixe->save();

        $kt = true;
        $hoadons = DB::table('hoadon')->where('id', $chitiethd_taixe->HoaDon_ID)->get();
        foreach($hoadons as $temp)
        {
            $check = $this->checkduyettb($temp->id);
            $check2 = $this->checkduyettx($temp->id);
            if(($check == false) || ($check2 == false))
            {
                $kt = false;
            }
        }
        if($kt == true)
        {
            $hd = hoadon::findOrFail($chitiethd_taixe->HoaDon_ID);
            $hd->TinhTrang = "1";
            $hd->save();
        }

        return redirect()->back()->with('Success','duyệt thành công');
    }
    
    public function xoadontx($id)
    {
        $chitiethd_taixe=chitiethd_taixe::findOrFail($id);
        $chitiethd_taixe->TinhTrang = "-1";
        $chitiethd_taixe->save();
        return redirect()->back()->with('Success','Hủy thành công');
    }
    public function huydon($id)
    {
        $hoadon=hoadon::findOrFail($id);
        $hoadon->TinhTrang = "-1";
        $hoadon->save();
        $cttbs = DB::table('chitiethd_thietbi')->where('HoaDon_ID', $hoadon->id)->get();
        $cttxs = DB::table('chitiethd_taixe')->where('HoaDon_ID', $hoadon->id)->get();
        foreach($cttbs as $item)
        {
            $ct=chitiethd_thietbi::findOrFail($item->id);
            $ct->Tinhtrang = "-1";
            $ct->save();
        }
        foreach($cttxs as $item)
        {
            $ct=chitiethd_taixe::findOrFail($item->id);
            $ct->Tinhtrang = "-1";
            $ct->save();
        }
        return redirect()->back()->with('Success','Hủy thành công');
    }
}
