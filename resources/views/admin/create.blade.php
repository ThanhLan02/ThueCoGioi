@extends('admin.layout.master')

@section('main-content')

<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Thêm </strong> Người dùng mới <span></span></h4>
                <div class="form">
                    <form action="{{( route('admin.store') )}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên người dùng</label>
                            <input type="text" class="form-control" placeholder="Nhập tên người dùng" name="hoten" value="{{(old('hoten'))}}">
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
                            <input type="date" class="form-control" placeholder="Nhập ngày sinh" name="ngaysinh" value="{{(old('ngaysinh'))}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">SĐT</label>
                            <input type="text" class="form-control" placeholder="Nhập SĐT" name="sdt" value="{{(old('sdt'))}}">
                        </div>
                        <div class="form-group">
                            <label class="control-label">Ảnh</label>
                            <input class="form-control rounded-0" type="file" name="anh" value="{{(old('anh'))}}">
                        </div>

                        <div class="form-group">
                            <label class="control-label">Công ty</label>
                            <input type="text" class="form-control" placeholder="Nhập tên công ty" name="congty" value="{{(old('congty'))}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" placeholder="Nhập Email" name="email" value="{{(old('email'))}}">
                            @if ($errors->has('email'))
                            <span class="error-message">* {{ $errors->first('email') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Nhập Pasword" name="password">
                            @if ($errors->has('password'))
                            <span class="error-message">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nhập lại Mật khẩu</label>
                            <input type="password" class="form-control" placeholder="Nhập lại Pasword" name="repassword">
                            @if ($errors->has('repassword'))
                            <span class="error-message">* {{ $errors->first('repassword') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="diachi" value="{{(old('diachi'))}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Quyền</label>
                            <select name="quyen_id" id="" class="form-group">
                                @foreach($quyens as $quyen)
                                <option value="{{$quyen->id}}">{{$quyen->tenquyen}}</option>
                                @endforeach
                            </select>
                        </div>
                        <input type="text" class="form-control" name="trangthai" value="1" style="display: none;">
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Thêm người dùng</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>

</div>

</div>
</div>
</div>
@endsection