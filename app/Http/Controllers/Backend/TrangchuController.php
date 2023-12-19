<?php

namespace App\Http\Controllers\Backend;
use App\Models\thietbi;
use App\Models\taixe;
use App\Models\danhgia;
use App\Models\danhgia_taixe;
use App\Models\giohang_taixe;
use App\Models\giohang_thietbi;
use App\Http\Controllers\Controller;
use App\Models\anh_tb;
use App\Models\anh_tx;
use App\Models\hang;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Mail;
class TrangchuController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        //$thietbis1 = thietbi::paginate(10);
        $thietbis1 = thietbi::where('TinhTrang', '=', 1)->paginate(10);
        $taixes1 = taixe::where('TrangThai', '=', 1)->paginate(10);
        $thietbis2 = thietbi::where('TinhTrang', '=', 1)->paginate(3);
        $taixes2 = taixe::where('TrangThai', '=', 1)->paginate(3);
        $sl = giohang_thietbi::where('NguoiDung_ID',Session::get('user'))->count() + giohang_taixe::where('NguoiDung_ID',Session::get('user'))->count();
        Session::put('soluong',$sl);
        return view('index',compact('thietbis1','taixes1','thietbis2','taixes2'));
    }
    public function thietbitaixe(){
        $thietbis = thietbi::all();
        $taixes = taixe::all();
        $s1 = thietbi::where('TinhTrang',1)->count();
        $s2 = taixe::where('TrangThai',1)->count();
        $tong = $s1+$s2;
        $hang = hang::all();
        $hot = thietbi::where('SoSao',5)->get();
        return view('thietbitaixe',compact('thietbis','taixes','tong','s1','s2','hang','hot'));
    }
    public function thietbiall(){
        $thietbis = thietbi::paginate(6);
        $s1 = thietbi::where('TinhTrang',1)->count();
        $s2 = taixe::where('TrangThai',1)->count();
        $tong = $s1+$s2;
        $hang = hang::all();
        $hot = taixe::where('SoSao',5)->get();
        return view('thietbiall',compact('thietbis','tong','s1','s2','hang','hot'));
    }
    public function hangthietbiall($id){
        $thietbis = thietbi::where('Hang_ID',$id)->paginate(6);
        $s1 = thietbi::where('TinhTrang',1)->count();
        $s2 = taixe::where('TrangThai',1)->count();
        $tong = $s1+$s2;
        $hang = hang::all();
        $hot = taixe::where('SoSao',5)->get();
        return view('hangthietbiall',compact('thietbis','tong','s1','s2','hang','hot','id'));
    }
    public function taixeall(){
        $taixes = taixe::paginate(6);
        $s1 = thietbi::where('TinhTrang',1)->count();
        $s2 = taixe::where('TrangThai',1)->count();
        $tong = $s1+$s2;
        $hang = hang::all();
        $hot = thietbi::where('SoSao',5)->get();
        return view('taixeall',compact('taixes','tong','s1','s2','hang','hot'));
    }
    public function chitietthietbi($id)
    {
        $thietbis = thietbi::paginate(5);
        $thietbi = thietbi::findOrFail($id);
        $danhgias = danhgia::where('ThietBi_ID',$id)->get();
        $anh_tb = anh_tb::where('ThietBi_ID',$id)->get();
        $SoSao = danhgia::where('ThietBi_ID',$id)->sum('SoSao');
        $SoDanhGia = danhgia::where('ThietBi_ID',$id)->count();
        return view('chitietthietbi',compact('thietbis','anh_tb','danhgias','SoSao','SoDanhGia'))->with('thietbi',$thietbi);
    }
    public function chitiettaixe($id)
    {
        $taixes = taixe::paginate(5);
        $taixe = taixe::findOrFail($id);
        $danhgias = danhgia_taixe::where('TaiXe_ID',$id)->get();
        $anh_tx = anh_tx::where('TaiXe_ID',$id)->get();
        $SoSao = danhgia_taixe::where('TaiXe_ID',$id)->sum('SoSao');
        $SoDanhGia = danhgia_taixe::where('TaiXe_ID',$id)->count();
        return view('chitiettaixe',compact('taixes','danhgias','anh_tx','SoSao','SoDanhGia'))->with('taixe',$taixe);
    }
    public function danhgiathietbi($id,Request $request)
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $danhgia = new danhgia();
        $danhgia->NguoiDung_ID = Session::get('user');
        $danhgia->SoSao = $request->input('sosao');
        $danhgia->BinhLuan = $request->input('binhluan');
        $danhgia->NgayLap = $currentDate;
        $danhgia->ThietBi_ID = $id;
        $danhgia->save();

        $thietbi = thietbi::findOrFail($id);
        $thietbi->SoSao = danhgia::where('ThietBi_ID',$id)->sum('SoSao');
        $thietbi->SoDanhGia = danhgia::where('ThietBi_ID',$id)->count();
        $thietbi->save();

        return redirect()->back()->with('success','Đánh giá thành công');
    }
    public function danhgiataixe($id,Request $request)
    {
        $currentDate = Carbon::now()->format('Y-m-d');
        $danhgia = new danhgia_taixe();
        
        $danhgia->NguoiDung_ID = Session::get('user');
        $danhgia->SoSao = $request->input('sosao');
        $danhgia->BinhLuan = $request->input('binhluan');
        $danhgia->NgayLap = $currentDate;
        $danhgia->TaiXe_ID = $id;

        $danhgia->save();

        $taixe = taixe::findOrFail($id);
        $taixe->SoSao = danhgia_taixe::where('TaiXe_ID',$id)->sum('SoSao');
        $taixe->SoDanhGia = danhgia_taixe::where('TaiXe_ID',$id)->count();
        $taixe->save();
        return redirect()->back()->with('success','Đánh giá thành công');
    }
    public function guimail()
    {
        $name = 'test send mail';
        Mail::send('emailtest',compact('name'), function($email){
            $email->to('0795690005l@gmail.com','test');
        });
    }
}
