@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <!-- Page Heading -->
    <h1 class="h3 mb-2 text-gray-800">TÀI XẾ</h1>
    <p class="mb-4">Quản lý tài xế
    </p>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Quản lý tài xế</h6>
            <br />
            <a href="/taixecreate" class="btn btn-info">Thêm tài xế mới</a>
        </div>
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
                            <th>Người Tạo</th>
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
                            <th>Người Tạo</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($taixes as $taixe)
                        @php
                        $sub_KM_info=DB::table('khuyenmai')->select('TenKM')->where('id',$taixe->KhuyenMai_ID)->get();
                        // dd($sub_cat_info);
                        $sub_ND_info=DB::table('users')->select('hoten')->where('id',$taixe->NguoiDung_ID)->get();
                        @endphp
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
                            <td>Đang duyệt</td>
                            @else
                            <td>Đã duyệt</td>
                            @endif
                            <td>{{$taixe->SoSao}}</td>
                            <td>{{$taixe->SoDanhGia}}</td>
                            <td>{{$taixe->user->hoten}}</td>
                            <td><a href="{{( route('admin.updatetaixe',$taixe->id) )}}" class="btn btn-sm rounded-0 btn-success" title="update"><i class="fas fa-pencil-alt"></i></a>
                                <a href="{{( route('admin.deletetaixe',$taixe->id) )}}" class="btn btn-sm rounded-0 btn-danger" title="delete"><i class="fas fa-trash"></i></a>
                                <form action="{{route('admin.duyettx',$taixe->id)}}" method="post">
                                    @csrf
                                    <button type="submit" name="send" value="send" class="btn btn-primary align-center">Duyệt</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
        {{$taixes->links('pagination::bootstrap-4')}}
    </div>

</div>
@endsection