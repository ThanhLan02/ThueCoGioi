@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">LOẠI THIẾT BỊ</h1>
    <p class="mb-4">Quản lý loại
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý loại thiết bị</h6>
            <br />
            <a href="/loaicreate" class="btn btn-info">Thêm loại mới</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Mã</th>
                            <th>Tên</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($loais as $loai)
                        <tr>
                            <td>{{$loai->id}}</td>
                            <td>{{$loai->TenLoai}}</td>

                            <td><a href="{{( route('admin.updateloai',$loai->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fas fa-pencil-alt"></i></a> |
                                            <a href="{{( route('admin.deleteloai',$loai->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$loais->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection