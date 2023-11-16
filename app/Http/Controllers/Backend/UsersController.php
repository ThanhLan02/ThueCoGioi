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

class UsersController extends Controller
{
    protected $model;
    public function __construct(User $model)
    {
        $this->model=$model;
    }
    public function index(){

        $users = User::paginate(15);
        return view('admin.users',compact('users'));
    }
    public function create(){

        $quyens = quyen::paginate(15);
        return view('admin.create',compact('quyens'));
    }
    public function createu(Request $request)
    {
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send','repassword']);
            // $carbonDate = Carbon::createFromFormat('d/m/Y',$payload['ngaysinh']);
            // $payload['ngaysinh'] = $carbonDate->format('Y-m-d');
            $payload['password'] = Hash::make($payload['password']);

            $model = $this->model->create($payload);
            $model->fresh();
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
    // public function createuser(array $payl = [])
    // {
    //     $model = $this->model->create($payl);
    //     return $model->fresh();
    // }
    public function store(UpdateUserRequest $request){
        if($this->createu($request))
        {
            return redirect()->route('admin.users')->with('Success','Thêm 1 người dùng thành công');
        }
        else
        {
            return redirect()->route('admin.users')->with('error','Thêm người dùng không thành công');
        }
        //dd($request->all());
    }
    public function updateuser($id)
    {
        $user=User::findOrFail($id);
        $quyens = quyen::paginate(15);
        return view('admin.updateuser',compact('quyens'))->with('user',$user);
    }
    public function updateu($id, Request $request)
    {
        DB::beginTransaction();
        try{
            $payload = $request->except(['_token','send']);
            //dd($payload);
            
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
    public function update(UpdateUserRequest $request, $id)
    {
        // if($this->updateu($id,$request))
        // {
        //     return redirect()->route('admin.users')->with('Success','Cập nhật thành công');
        // }
        // else
        // {
        //     return redirect()->route('admin.users')->with('error','Cập nhật không thành công');
        // }
        $user=User::findOrFail($id);
        // dd($request->all());
        $data=$request->all();
        // dd($data);
        
        $status=$user->fill($data)->save();
        if($status){
            request()->session()->flash('success','Cập nhật thành công');
        }
        else{
            request()->session()->flash('error','Cập nhật không thành công');
        }
        return redirect()->route('admin.users');
    }
    public function deleteuser($id)
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


        $user = User::find($id);

        if ($user) {
            $user->delete();
            return redirect()->route('admin.users')->with('Success','Xóa 1 người dùng thành công');
        } else {
            return redirect()->route('admin.users')->with('Success','Xóa không thành công');
        }
    }
}
