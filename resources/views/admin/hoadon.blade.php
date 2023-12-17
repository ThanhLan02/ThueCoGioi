@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">ĐƠN HÀNG</h1>
    <p class="mb-4">Quản lý đơn hàng
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý đơn hàng thuê</h6>
            <br />
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Mã</th>
                        <th>Ngày Lập</th>
                        <th>Người nhận</th>
                        <th>Số Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>Mã</th>
                        <th>Ngày Lập</th>
                        <th>Người nhận</th>
                        <th>Số Điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Tổng tiền</th>
                        <th>Tình trạng</th>
                        <th>Action</th>
                    </tr>
                    </tfoot>
                    <tbody>
                        @foreach($hoadons as $item)
                        <tr>
                        <td><a href="{{$item->id}}/chitiethoadon">{{$item->id}}</a></td>
                        <td>{{$item->NgayLap}}</td>
                        <td> <a href="/hoso/{{$item->NguoiNhan}}">{{$item->nhan->hoten}}</a></td>
                        <td>{{$item->SDT}}</td>
                        <td>{{$item->DiaChi}}</td>
                        <td>{{$item->TongTien}}</td>
                        @if($item->TinhTrang == 0)
                        <td>Đang chờ duyệt</td>
                        @elseif ($item->TinhTrang == -1)
                        <td>Đã Hủy</td>
                        @else
                        <td>Đã duyệt</td>
                        @endif
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$hoadons->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection