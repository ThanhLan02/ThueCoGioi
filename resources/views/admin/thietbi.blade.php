@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">THIẾT BỊ</h1>
    <p class="mb-4">Quản lý thiết bị
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý thiết bị</h6>
            <br />
            <a href="/thietbicreate" class="btn btn-info">Thêm thiết bị mới</a>
        </div>
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
                            <th>Người Tạo</th>
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
                            <th>Người Tạo</th>
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
                            <td><img src="./img/{{$thietbi->Anh}}" alt="" style="width: 200px;height: 200px;"></td>
                            <td>{{$thietbi->GiaThue}}</td>
                            <td>{{$thietbi->GiaKM}}</td>
                            <td>{{$thietbi->TinhTrang}}</td>
                            <td>{{$thietbi->Loai_ID}}</td>
                            <td>{{$thietbi->Hang_ID}}</td>
                            <td>{{$thietbi->KhuyenMai_ID}}</td>
                            <td>{{$thietbi->SoSao}}</td>
                            <td>{{$thietbi->SoDanhGIa}}</td>
                            <td>{{$thietbi->NguoiDung_ID}}</td>
                            <td><a href="{{( route('admin.updatethietbi',$thietbi->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fas fa-pencil-alt"></i></a> |
                                            <a href="{{( route('admin.deletethietbi',$thietbi->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$thietbis->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection