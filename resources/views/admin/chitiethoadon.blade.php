@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">CHI TIẾT ĐƠN HÀNG</h1>
    <p class="mb-4">Quản lý chi tiết đơn hàng
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý chi tiết đơn hàng thuê</h6>
            <br />
        </div>
        <div class="card-body">
        <h7 class="m-0 font-weight-bold text-primary">Thiết bị</h7>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Thiết bị</th>
                        <th>Ảnh</th>
                        <th>số lượng</th>
                        <th>Đơn giá</th>
                        <th>Người Thuê</th>
                        <th>Tình Trạng</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                    <th>Mã đơn</th>
                        <th>Thiết bị</th>
                        <th>Ảnh</th>
                        <th>số lượng</th>
                        <th>Đơn giá</th>
                        <th>Người Thuê</th>
                        <th>Tình Trạng</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($chitiethd_thietbis as $item)
                    <tr>
                        <td>{{$item->HoaDon_ID}}</td>
                        <td> <a href="/{{$item->ThietBi_ID}}/chitietthietbi">{{$item->thietbi->TenTB}}</a></td>
                        <td><img style="width: 200px;height: 200px;" src="{{asset('./img')}}/{{$item->thietbi->Anh}}" alt=""></td>
                        <td>{{$item->soluong}}</td>
                        <td>{{$item->dongia}}</td>
                        <td><a href="/hoso/{{$item->NguoiNhan}}">{{$item->user->hoten}}</a></td>
                        @if($item->TinhTrang == 0)
                        <td>Đang chờ duyệt</td>
                        @else
                        <td>Đã duyệt</td>
                        @endif
                    </tr>@endforeach
                    </tbody>
                </table>

            </div>
            {{$chitiethd_thietbis->links('pagination::bootstrap-4')}}
            <h7 class="m-0 font-weight-bold text-primary">Tài xế</h7>
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tài xế</th>
                        <th>Ảnh</th>
                        <th>Đơn giá</th>
                        <th>Người Thuê</th>
                        <th>Tình Trạng</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                    <th>Mã đơn</th>
                        <th>Thiết bị</th>
                        <th>Ảnh</th>
                        <th>Đơn giá</th>
                        <th>Người Thuê</th>
                        <th>Tình Trạng</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($chitiethd_taixes as $item)
                    <tr>
                        <td>{{$item->HoaDon_ID}}</td>
                        <td> <a href="/{{$item->TaiXe_ID}}/chitiettaixe">{{$item->taixe->TenTX}}</a></td>
                        <td><img style="width: 200px;height: 200px;" src="{{asset('./img')}}/{{$item->taixe->Anh}}" alt=""></td>
                        <td>{{$item->dongia}}</td>
                        <td><a href="/hoso/{{$item->NguoiNhan}}">{{$item->user->hoten}}</a></td>
                        @if($item->TinhTrang == 0)
                        <td>Đang chờ duyệt</td>
                        @else
                        <td>Đã duyệt</td>
                        @endif
                    </tr>@endforeach
                    </tbody>
                </table>

            </div>
            {{$chitiethd_taixes->links('pagination::bootstrap-4')}}
        </div>
        
    </div>

</div>
@endsection