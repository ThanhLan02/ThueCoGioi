<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quyen;
use App\Models\hang;
use App\Models\taixe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\TaixeRequest;
use App\Http\Requests\HangRequest;
use App\Models\Khuyenmai;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
class TaixeController extends Controller
{
    protected $model;
    public function __construct(taixe $model)
    {
        $this->model=$model;
    }
    public function index(){

        $taixes = taixe::paginate(15);
        $khuyenmais = Khuyenmai::paginate(15);
        $nguoidungs = User::paginate(15);
        $userid = Auth::user()->id;
        return view('admin.taixe',compact('taixes','userid','khuyenmais','nguoidungs'));
    }
    public function taixecreate(){
        $userid = Auth::user()->id;
        $nguoidungs = User::paginate(15);
        $khuyenmais = Khuyenmai::paginate(15);
        return view('admin.taixecreate',compact('userid','khuyenmais','nguoidungs'));
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
    public function taixestore(TaixeRequest $request){
        if($this->createu($request))
        {
            return redirect()->route('admin.taixe')->with('Success','Thêm thành công');
        }
        else
        {
            return redirect()->route('admin.taixe')->with('error','Thêm không thành công');
        }
    }
    public function updatetaixe($id)
    {
        $taixe=taixe::findOrFail($id);
        $userid = Auth::user()->id;
        $nguoidungs = User::paginate(15);
        $khuyenmais = Khuyenmai::paginate(15);
        //$hang = hang::find($MaHang);
        return view('admin.updatetaixe',compact('userid','khuyenmais','nguoidungs'))->with('taixe',$taixe);
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
    public function updatetx(Request $request, $id)
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
        return redirect()->route('admin.taixe');
    }
    public function deletetaixe($id)
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


        $taixe = taixe::find($id);

        if ($taixe) {
            $taixe->delete();
            return redirect()->route('admin.taixe')->with('Success','Xóa thành công');
        } else {
            return redirect()->route('admin.taixe')->with('Success','Xóa không thành công');
        }
    }
}
