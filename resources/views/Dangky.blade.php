@extends('layout.master')

@section('main-content')
<div class="container">
    <br />
    <h1 class="text-center">Đăng ký</h1>
    <div class="row vertical-offset">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin đăng ký</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" class="form" method="post" action="{{route('Dangky.DangkySubmit')}}">
                        @csrf
                        <fieldset>
                            <div class=" form-group">
                                <label for="username">Tên</label>
                                <input class="form-control" placeholder="Nhập tên người dùng" name="hoten" value="{{(old('hoten'))}}" type="text">
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
                                <label for="username">SĐT</label>
                                <input class="form-control" placeholder="Nhập SĐT" name="sdt" value="{{(old('sdt'))}}" type="text">
                            </div>
                            <div class="form-group">
                                <label class="control-label">Công ty</label>
                                <input type="text" class="form-control" placeholder="Nhập tên công ty" name="congty" value="{{(old('congty'))}}">
                            </div>
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input class="form-control" placeholder="Nhập Email" name="email" value="{{(old('email'))}}" type="text">
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
                                
                            </div>
                            <div class="form-group">
                                <label for="username">Địa chỉ</label>
                                <input class="form-control" placeholder="Nhập địa chỉ" name="diachi" value="{{(old('diachi'))}}" type="text">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Đăng ký"><br />
                            <h5 class="text-center"><a href="/login" class="text-left">Đăng nhập</a></h5>


                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<br />
@endsection