<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\quyen;
use App\Models\hang;
use App\Models\Khuyenmai;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Http\Requests\HangRequest;
use App\Http\Requests\KhuyenMaiRequest;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class KhuyenMaiController extends Controller
{
    protected $model;
    public function __construct(Khuyenmai $model)
    {
        $this->model=$model;
    }
    public function index(){

        $khuyenmais = Khuyenmai::paginate(15);
        return view('admin.khuyenmai',compact('khuyenmais'));
    }
    public function khuyenmaicreate(){
        return view('admin.khuyenmaicreate');
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
    public function khuyenmaistore(KhuyenMaiRequest $request){
        if($this->createu($request))
        {
            return redirect()->route('admin.khuyenmai')->with('Success','Thêm thành công');
        }
        else
        {
            return redirect()->route('admin.khuyenmai')->with('error','Thêm không thành công');
        }
        //dd($request->all());

        // dd($request->all());
        // $data=$request->all();
        // // dd($data);
        // $status=Khuyenmai::create($data);
        // // dd($status);
        // if($status){
        //     request()->session()->flash('success','Thêm thành công');
        // }
        // else{
        //     request()->session()->flash('error','Thêm không thành công');
        // }
        // return redirect()->route('admin.khuyenmai');
    }
    public function updatekhuyenmai($id)
    {
        $Khuyenmai=Khuyenmai::findOrFail($id);
        //$hang = hang::find($MaHang);
        return view('admin.updatekhuyenmai')->with('Khuyenmai',$Khuyenmai);
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
    public function updatekm(Request $request, $id)
    {
        // if($this->updateu($id,$request))
        // {
        //     return redirect()->route('admin.users')->with('Success','Cập nhật thành công');
        // }
        // else
        // {
        //     return redirect()->route('admin.users')->with('error','Cập nhật không thành công');
        // }
        $Khuyenmai=Khuyenmai::findOrFail($id);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        
        $status=$Khuyenmai->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật không thành công');
        }
        return redirect()->route('admin.khuyenmai');
    }
    public function deletekhuyenmai($id)
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


        $Khuyenmai = Khuyenmai::find($id);

        if ($Khuyenmai) {
            $Khuyenmai->delete();
            return redirect()->route('admin.khuyenmai')->with('Success','Xóa thành công');
        } else {
            return redirect()->route('admin.khuyenmai')->with('Success','Xóa không thành công');
        }
    }
}
