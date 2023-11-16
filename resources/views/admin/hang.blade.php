@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">HÃNG THIẾT BỊ</h1>
    <p class="mb-4">Quản lý hãng
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý hãng thiết bị</h6>
            <br />
            <a href="/hangcreate" class="btn btn-info">Thêm hãng mới</a>
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
                        @foreach($hangs as $hang)
                        <tr>
                            <td>{{$hang->id}}</td>
                            <td>{{$hang->TenHang}}</td>

                            <td><a href="{{( route('admin.updatehang',$hang->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fas fa-pencil-alt"></i></a> |
                                            <a href="{{( route('admin.deletehang',$hang->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fas fa-trash"></i></a>
                                        </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$hangs->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection