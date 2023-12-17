<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quyen;
use App\Models\hang;
use App\Models\taixe;
use App\Models\anh_tx;
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

class TaixeUserController extends Controller
{
    protected $model;
    public function __construct(taixe $model)
    {
        $this->model=$model;
    }
    public function index(){

        $taixes = taixe::where('NguoiDung_ID', Session::get('user'))->paginate(10);
        $userid = Auth::user()->id;
        return view('taixeuser',compact('taixes','userid'));
    }
    public function taixeusercreate(){
        $userid = Auth::user()->id;
        $nguoidungs = User::all();
        $khuyenmais = Khuyenmai::all();
        return view('taixeusercreate',compact('userid','khuyenmais','nguoidungs'));
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
    public function taixeuserstore(TaixeRequest $request){
        if($this->createu($request))
        {
            return redirect()->route('taixeuser.taixeuser')->with('Success','Thêm thành công');
        }
        else
        {
            return redirect()->route('taixeuser.taixeuser')->with('error','Thêm không thành công');
        }
    }
    public function updatetaixeuser($id)
    {
        $taixe=taixe::findOrFail($id);
        $userid = Auth::user()->id;
        $nguoidungs = User::paginate(15);
        $khuyenmais = Khuyenmai::all();
        //$hang = hang::find($MaHang);
        return view('updatetaixeuser',compact('userid','khuyenmais','nguoidungs'))->with('taixe',$taixe);
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
        $taixe=taixe::findOrFail($id);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        
        $status=$taixe->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật không thành công');
        }
        return redirect()->route('taixeuser.taixeuser');
    }
    public function deletethietbiuser($id)
    {
        $taixe = taixe::find($id);

        if ($taixe) {
            $taixe->delete();
            return redirect()->route('taixeuser.taixeuser')->with('Success','Xóa thành công');
        } else {
            return redirect()->route('taixeuser.taixeuser')->with('Success','Xóa không thành công');
        }
    }
    public function themanhtxuser($id){
        $taixe=taixe::findOrFail($id);
        return view('themanhtxuser',compact('taixe'));
    }
    public function themanhtxuserstore($id,Request $request){
        $anh_tb = new anh_tx();
        $anh_tb->TaiXe_ID = $id;
        $anh_tb->anh = $request->input('anh');
        $anh_tb->save();
        return redirect()->back()->with('Success','Thêm thành công');
    }
}
