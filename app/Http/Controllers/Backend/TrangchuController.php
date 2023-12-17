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
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use Carbon\Carbon;
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
        $sl = giohang_thietbi::count() + giohang_taixe::count();
        Session::put('soluong',$sl);
        return view('index',compact('thietbis1','taixes1','thietbis2','taixes2'));
    }
    public function thietbitaixe(){
        $thietbis = thietbi::all();
        $taixes = taixe::all();
        return view('thietbitaixe',compact('thietbis','taixes'));
    }
    public function thietbiall(){
        $thietbis = thietbi::all();
        return view('thietbiall',compact('thietbis'));
    }
    public function taixeall(){
        $taixes = taixe::all();
        return view('taixeall',compact('taixes'));
    }
    public function chitietthietbi($id)
    {
        $thietbis = thietbi::paginate(5);
        $thietbi = thietbi::findOrFail($id);
        $danhgias = danhgia::all();
        $anh_tb = anh_tb::where('ThietBi_ID',$id)->get();
        return view('chitietthietbi',compact('thietbis','anh_tb','danhgias'))->with('thietbi',$thietbi);
    }
    public function chitiettaixe($id)
    {
        $taixes = taixe::paginate(5);
        $taixe = taixe::findOrFail($id);
        $danhgias = danhgia_taixe::all();
        return view('chitiettaixe',compact('taixes','danhgias'))->with('taixe',$taixe);
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
        return redirect()->back()->with('success','Đánh giá thành công');
    }
}
