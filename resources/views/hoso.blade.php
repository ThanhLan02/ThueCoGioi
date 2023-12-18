@extends('layout.master')

@section('main-content')
<div class="container">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                            <li class="breadcrumb-item active" aria-current="page">User Profile</li>
                        </ol>
                    </nav>
                </div>
            </div>

            <div class="row">
                <div class="col-lg-4">
                    <div class="card mb-4">
                        <div class="card-body text-center">
                            <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-chat/ava3.webp" alt="avatar" class="rounded-circle img-fluid" style="width: 150px;">
                            <br/>
                            
                            <h3 class="my-3">{{$User->hoten}}</h3>
                            <div class="d-flex justify-content-center mb-2">
                            <button type="button" class="btn btn-success ms-1"><a href="/{{$User->id}}/updatehoso">Cập nhật hồ sơ </a></button>
                                <button type="button" class="btn btn-outline-primary ms-1"><a href="/thietbiuser">Quản lý cho thuê thiết bị</a></button>
                                <button type="button" class="btn btn-outline-primary ms-1"><a href="/taixeuser">Quản lý cho thuê tài xế</a></button>
                                <button type="button" class="btn btn-outline-primary ms-1"><a href="/donhang">Lịch sử giao dịch </a></button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="card mb-4">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">Tên</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="font-size: 20px;">{{$User->hoten}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">Giới tính</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="font-size: 20px;">{{$User->gioitinh}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">Công ty</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="font-size: 20px;">{{$User->congty}}</p>
                                </div> 
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">Email</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="font-size: 20px;">{{$User->email}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">SĐT</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="font-size: 20px;">{{$User->sdt}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">Địa chỉ</p>
                                </div>
                                <div class="col-sm-9">
                                    <p class="text-muted mb-0" style="font-size: 20px;">{{$User->diachi}}</p>
                                </div>
                            </div>
                            <hr>
                            <div class="row">
                                <div class="col-sm-3">
                                    <p class="mb-0" style="font-size: 25px;">Mật khẩu</p>
                                </div>
                                <div class="col-sm-9">
                                    <input type="password" name="pass" style="border-top-style: hidden;border-bottom-style: hidden;border-left-style: hidden;border-right-style: hidden;" value="{{$User->password}}">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<br />
<br />
<br />
@endsection