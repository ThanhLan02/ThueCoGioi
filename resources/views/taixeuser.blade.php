@extends('layout.master')

@section('main-content')
<hr />
<div class="container">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý tài xế</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <a href="/taixeusercreate" class="btn btn-info">Thêm tài xế mới</a>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Địa Chỉ</th>
                                <th>Email</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Giá Thuê</th>
                                <th>Giá KM</th>
                                <th>Mã Khuyến Mãi</th>
                                <th>Trạng Thái</th>
                                <th>Số Sao</th>
                                <th>Số Đánh Giá</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Mã</th>
                                <th>Tên</th>
                                <th>Giới tính</th>
                                <th>SĐT</th>
                                <th>Địa Chỉ</th>
                                <th>Email</th>
                                <th>Ảnh</th>
                                <th>Mô tả</th>
                                <th>Giá Thuê</th>
                                <th>Giá KM</th>
                                <th>Mã Khuyến Mãi</th>
                                <th>Trạng Thái</th>
                                <th>Số Sao</th>
                                <th>Số Đánh Giá</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($taixes as $taixe)
                            <tr>
                                <td>{{$taixe->id}}</td>
                                <td>{{$taixe->TenTX}}</td>
                                <td>{{$taixe->GioiTinh}}</td>
                                <td>{{$taixe->SDT}}</td>
                                <td>{{$taixe->DiaChi}}</td>
                                <td>{{$taixe->Email}}</td>
                                <td><img src="./img/{{$taixe->Anh}}" alt="" style="width: 200px;height: 200px;"></td>
                                <td>{{$taixe->MoTa}}</td>
                                <td>{{$taixe->GiaThue}}</td>
                                <td>{{$taixe->GiaKM}}</td>
                                <td>{{$taixe->khuyenmai->TenKM}}</td>
                                @if($taixe->TrangThai == 0)
                                <td>Đang chờ duyệt</td>
                                @else
                                <td>Đã duyệt</td>
                                @endif
                                <td>{{$taixe->SoSao}}</td>
                                <td>{{$taixe->SoDanhGia}}</td>
                                <td><a href="{{( route('taixeuser.updatetaixeuser',$taixe->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fa fa-pencil"></i></a>
                                    <a href="{{( route('taixeuser.deletetaixeuser',$taixe->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fa fa-trash"></i></a>
                                    <a href="{{( route('taixeuser.themanhtxuser',$taixe->id) )}}" class="btn btn-sm rounded-0 btn-primary" >Thêm ảnh</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </section>
</div>
<br />
<br />
<br />
@endsection