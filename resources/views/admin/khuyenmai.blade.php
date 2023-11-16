@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">KHUYẾN MÃI THIẾT BỊ</h1>
    <p class="mb-4">Quản lý khuyến mãi
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý khuyến mãi thiết bị</h6>
            <br />
            <a href="/khuyenmaicreate" class="btn btn-info">Thêm khuyến mãi mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giá trị</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Giá trị</th>
                            <th>Ngày bắt đầu</th>
                            <th>Ngày kết thúc</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($khuyenmais as $khuyenmai)
                        <tr>
                            <td>{{$khuyenmai->id}}</td>
                            <td>{{$khuyenmai->TenKM}}</td>
                            <td>{{$khuyenmai->GiaTriKM}}</td>
                            <td>{{$khuyenmai->NgayBD}}</td>
                            <td>{{$khuyenmai->NgayKT}}</td>
                            <td><a href="{{( route('admin.updatekhuyenmai',$khuyenmai->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fas fa-pencil-alt"></i></a> |
                                            <a href="{{( route('admin.deletekhuyenmai',$khuyenmai->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$khuyenmais->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection