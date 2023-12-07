<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quyen;
use App\Models\hang;
use App\Models\taixe;
use App\Models\loaixe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\TaixeRequest;
use App\Http\Requests\HangRequest;
use App\Http\Requests\ThietBiRequest;
use App\Models\Khuyenmai;
use App\Models\thietbi;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
class ThietbiUserController extends Controller
{
    protected $model;
    public function __construct(thietbi $model)
    {
        $this->model=$model;
    }
    public function index(){

        $thietbis = thietbi::where('NguoiDung_ID', Session::get('user'))->paginate(10);
        $userid = Auth::user()->id;
        return view('thietbiuser',compact('thietbis','userid'));
    }
    public function thietbiusercreate(){
        $userid = Auth::user()->id;
        $nguoidungs = User::paginate(15);
        $khuyenmais = Khuyenmai::paginate(15);
        $loais = loaixe::paginate(15);
        $hangs = hang::paginate(15);
        return view('thietbiusercreate',compact('userid','khuyenmais','nguoidungs','loais','hangs'));
    }
    public function createu(Request $request)
    {
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            //dd($payload);
            $model = $this->model->create($payload);
            $model->fresh();
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();die();
            return false;
        }
    }
    public function thietbiuserstore(ThietBiRequest $request){
        if($this->createu($request))
        {
            return redirect()->route('thietbiuser.thietbiuser')->with('Success','Thêm thành công');
        }
        else
        {
            return redirect()->back()->with('error','Thêm không thành công');
        }
    }
    public function updatethietbiuser($id)
    {
        $thietbi=thietbi::findOrFail($id);
        $userid = Auth::user()->id;
        $nguoidungs = User::paginate(15);
        $khuyenmais = Khuyenmai::paginate(15);
        $loais = loaixe::paginate(15);
        $hangs = hang::paginate(15);
        //$hang = hang::find($MaHang);
        return view('updatethietbiuser',compact('userid','khuyenmais','nguoidungs','loais','hangs'))->with('thietbi',$thietbi);
    }
    public function updateu($id, Request $request)
    {
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);

            $model = $this->model->findByID($id);
            $model = $this->model->update($payload);
            //dd($model);
            //dd($payload);
            DB::commit();
            return true;
        }catch(\Exception $e){
            DB::rollBack();
            echo $e->getMessage();die();
            return false;
        }
    }
    public function updatetbu(Request $request, $id)
    {
        // if($this->updateu($id,$request))
        // {
        //     return redirect()->route('admin.users')->with('Success','Cập nhật thành công');
        // }
        // else
        // {
        //     return redirect()->route('admin.users')->with('error','Cập nhật không thành công');
        // }
        $thietbi=thietbi::findOrFail($id);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        
        $status=$thietbi->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật không thành công');
        }
        return redirect()->route('thietbiuser.thietbiuser');
    }
    public function deletethietbiuser($id)
    {
        // $delete=User::findorFail($id);
        // $status=$delete->delete();
        // if($status){
        //     request()->session()->flash('success','Xóa thành công');
        // }
        // else{
        //     request()->session()->flash('error','Xóa không thành công');
        // }
        // return redirect()->route('admin.users');


        $thietbi = thietbi::find($id);

        if ($thietbi) {
            $thietbi->delete();
            return redirect()->route('admin.thietbi')->with('Success','Xóa thành công');
        } else {
            return redirect()->route('admin.thietbi')->with('Success','Xóa không thành công');
        }
    }
}
