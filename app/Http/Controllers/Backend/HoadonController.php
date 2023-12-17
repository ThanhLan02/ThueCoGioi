<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\chitiethd_taixe;
use App\Models\chitiethd_thietbi;
use App\Models\hoadon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HoadonController extends Controller
{
    protected $model;
    public function __construct(hoadon $model)
    {
        $this->model=$model;
    }
    public function index(){

        $hoadons = hoadon::paginate(15);
        $userid = Auth::user()->id;
        return view('admin.hoadon',compact('hoadons','userid'));
    }
    public function chitiethoadon($id){
        $chitiethd_thietbis = chitiethd_thietbi::where('HoaDon_ID',$id)->paginate(5);
        $chitiethd_taixes = chitiethd_taixe::where('HoaDon_ID',$id)->paginate(5);
        return view('admin.chitiethoadon',compact('chitiethd_thietbis','chitiethd_taixes'));
    }
}
