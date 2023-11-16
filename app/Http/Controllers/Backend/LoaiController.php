<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quyen;
use App\Models\hang;
use App\Models\loaixe;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\HangRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class LoaiController extends Controller
{
    protected $model;
    public function __construct(loaixe $model)
    {
        $this->model=$model;
    }
    public function index(){

        $loais= loaixe::paginate(15);
        return view('admin.loai',compact('loais'));
    }
    public function loaicreate(){
        return view('admin.loaicreate');
    }
    public function createu(Request $request)
    {
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send','updated_at','created_at']);
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
    public function loaistore(Request $request){
        // if($this->createu($request))
        // {
        //     return redirect()->route('admin.hang')->with('Success','Thêm 1 hãng thành công');
        // }
        // else
        // {
        //     return redirect()->route('admin.hang')->with('error','Thêm hãng không thành công');
        // }
        //dd($request->all());
        $this->validate($request,
        [
            'tenloai'=>'string|required',
        ]);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        $status=loaixe::create($data);
        // dd($status);
        if($status){
            request()->session()->flash('success','Thêm thành công');
        }
        else{
            request()->session()->flash('error','Thêm không thành công');
        }
        return redirect()->route('admin.loai');
    }
    public function updateloai($id)
    {
        $loaixe=loaixe::findOrFail($id);
        //$hang = hang::find($MaHang);
        return view('admin.updateloai')->with('loaixe',$loaixe);
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
    public function updatel(Request $request, $id)
    {
        // if($this->updateu($id,$request))
        // {
        //     return redirect()->route('admin.users')->with('Success','Cập nhật thành công');
        // }
        // else
        // {
        //     return redirect()->route('admin.users')->with('error','Cập nhật không thành công');
        // }
        $loaixe=loaixe::findOrFail($id);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        
        $status=$loaixe->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật không thành công');
        }
        return redirect()->route('admin.loai');
    }
    public function deleteloai($id)
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


        $loaixe = loaixe::find($id);

        if ($loaixe) {
            $loaixe->delete();
            return redirect()->route('admin.loai')->with('Success','Xóa thành công');
        } else {
            return redirect()->route('admin.loai')->with('Success','Xóa không thành công');
        }
    }
}
