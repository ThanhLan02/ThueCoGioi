@extends('layout.master')

@section('main-content')
<hr/>
<div class="container">
    <section style="background-color: #eee;">
        <div class="container py-5">
            <div class="row">
                <div class="col">
                    <nav aria-label="breadcrumb" class="bg-light rounded-3 p-3 mb-4">
                        <ol class="breadcrumb mb-0">
                            <li class="breadcrumb-item"><a href="#">Trang chủ</a></li>
                            <li class="breadcrumb-item"><a href="#">Người dùng</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Quản lý thiết bị</li>
                        </ol>
                    </nav>
                </div>
            </div>
            <a href="/thietbiusercreate" class="btn btn-info">Thêm thiết bị mới</a>
            <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Mô Tả</th>
                            <th>File PDF</th>
                            <th>Ảnh</th>
                            <th>Giá Thuê</th>
                            <th>Giá KM</th>
                            <th>Tình trạng</th>
                            <th>Mã Loại</th>
                            <th>Mã Hãng</th>
                            <th>Mã Khuyến Mãi</th>
                            <th>Số Sao</th>
                            <th>Số Đánh Giá</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                        <th>Mã</th>
                            <th>Mô Tả</th>
                            <th>Tên</th>
                            <th>File PDF</th>
                            <th>Ảnh</th>
                            <th>Giá Thuê</th>
                            <th>Giá KM</th>
                            <th>Tình trạng</th>
                            <th>Mã Loại</th>
                            <th>Mã Hãng</th>
                            <th>Mã Khuyến Mãi</th>
                            <th>Số Sao</th>
                            <th>Số Đánh Giá</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($thietbis as $thietbi)
                        <tr>
                            <td>{{$thietbi->id}}</td>
                            <td>{{$thietbi->TenTB}}</td>
                            <td>{{$thietbi->MoTa}}</td>
                            <td>{{$thietbi->File}}</td>
                            <td><img src="./img/{{$thietbi->Anh}}" alt="" style="width: 200px;height: 120px;"></td>
                            <td>{{$thietbi->GiaThue}}</td>
                            <td>{{$thietbi->GiaKM}}</td>
                            <td>{{$thietbi->TinhTrang}}</td>
                            <td>{{$thietbi->loai->TenLoai}}</td>
                            <td>{{$thietbi->hang->TenHang}}</td>
                            <td>{{$thietbi->khuyenmai->TenKM}}</td>
                            <td>{{$thietbi->SoSao}}</td>
                            <td>{{$thietbi->SoDanhGIa}}</td>
                            <td><a href="{{( route('thietbiuser.updatethietbiuser',$thietbi->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fa fa-pencil"></i></a>
                                            <a href="{{( route('thietbiuser.deletethietbiuser',$thietbi->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fa fa-trash"></i></a>
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