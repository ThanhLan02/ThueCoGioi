@extends('layout.master')

@section('main-content')
<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> hồ sơ<span></span></h4>
                <div class="form">
                    <form action="{{route('Hoso.updatehosoec',$User->id)}}" method="post">
                        @csrf
                        <div class=" form-group">
                                <label for="username">Tên</label>
                                <input class="form-control"  name="hoten" value="{{$User->hoten}}" type="text">
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
                                <input type="date" class="form-control"name="ngaysinh" value="{{$User->ngaysinh}}">
                            </div>
                            <div class="form-group">
                                <label for="username">SĐT</label>
                                <input class="form-control" placeholder="Nhập SĐT" name="sdt" value="{{$User->sdt}}" type="text">
                            </div>
                            <div class="form-group">
                            <label for="inputPhoto" class="col-form-label">Ảnh</label>
                            <input type="file" name="Anh" value="{{$User->anh}}">
                        </div>
                            <div class="form-group">
                                <label class="control-label">Công ty</label>
                                <input type="text" class="form-control" placeholder="Nhập tên công ty" name="congty" value="{{$User->congty}}">
                            </div>
                            <div class="form-group">
                                <label for="username">Email</label>
                                <input class="form-control" placeholder="Nhập Email" name="email" value="{{$User->email}}" type="text">
                                @if ($errors->has('email'))
                                <span class="error-message">* {{ $errors->first('email') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="username">Địa chỉ</label>
                                <input class="form-control" placeholder="Nhập địa chỉ" name="diachi" value="{{$User->diachi}}" type="text">
                            </div>
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Cập nhật hồ sơ</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<br />
@endsection