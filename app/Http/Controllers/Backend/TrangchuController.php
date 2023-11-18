<?php

namespace App\Http\Controllers\Backend;
use App\Models\thietbi;
use App\Models\taixe;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrangchuController extends Controller
{
    public function __construct()
    {
        
    }
    public function index(){
        $thietbis1 = thietbi::paginate(10);
        $taixes1 = taixe::paginate(10);

        $thietbis2 = thietbi::paginate(3);
        $taixes2 = taixe::paginate(3);
        return view('index',compact('thietbis1','taixes1','thietbis2','taixes2'));
    }
    public function thietbitaixe(){
        $thietbis = thietbi::all();
        $taixes = taixe::all();
        return view('thietbitaixe',compact('thietbis','taixes'));
    }
    public function chitietthietbi($id)
    {
        $thietbis = thietbi::paginate(5);
        $thietbi = thietbi::findOrFail($id);
        return view('chitietthietbi',compact('thietbis'))->with('thietbi',$thietbi);
    }
    public function chitiettaixe($id)
    {
        $taixes = taixe::paginate(5);
        $taixe = taixe::findOrFail($id);
        return view('chitiettaixe',compact('taixes'))->with('taixe',$taixe);
    }
}
