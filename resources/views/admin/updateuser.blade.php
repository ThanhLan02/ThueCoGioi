@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> Người dùng <span></span></h4>
                <div class="form">
                    <form action="{{route('admin.update',$user->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên người dùng</label>
                            <input type="text" class="form-control" placeholder="Nhập tên người dùng" name="hoten" value="{{$user->hoten}}">
                            @if ($errors->has('hoten'))
                            <span class="error-message">* {{ $errors->first('hoten') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Giới tính</label>
                            <select name="gioitinh" id="">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ngày sinh</label>
                            <input type="date" class="form-control" placeholder="Nhập ngày sinh" name="ngaysinh" value="{{$user->ngaysinh}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">SĐT</label>
                            <input type="text" class="form-control" placeholder="Nhập SĐT" name="sdt" value="{{$user->sdt}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ảnh</label>
                            <input class="form-control rounded-0" type="file" name="anh" value="{{$user->anh}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Công ty</label>
                            <input type="text" class="form-control" placeholder="Nhập tên công ty" name="congty" value="{{$user->congty}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" placeholder="Nhập Email" name="email" value="{{$user->email}}">
                            @if ($errors->has('email'))
                            <span class="error-message">* {{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="diachi" value="{{$user->diachi}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Quyền</label>
                            <select name="quyen_id" id="" class="form-group">
                                @foreach($quyens as $quyen)
                                <option value="{{$quyen->id}}">{{$quyen->tenquyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Update người dùng</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection