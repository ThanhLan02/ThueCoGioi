@extends('layout.master')

@section('main-content')
<div class="container">
    <br />
    <h2 class="fw-bolder text-center">Giỏ hàng</h2>
    <center>
        <hr class="bg-warning" style="width:5em;height:3px;opacity:1">
    </center>

    <div class="card rounded-0 shadow">
        <h3 class="fw-bolder">Thuê Thiết bị</h3>
        <div class="card-body">
            <div class="container-fluid">

                <table class="table">
                    <tr>
                    <th>Nguoi thue</th>
                        <th>Tên Thiết bị</th>
                        <th>Ảnh</th>
                        <th>Số Lượng</th>
                        <th>Giá</th>
                        <th>Người cho thuê</th>
                        <th>Action</th>
                    </tr>
                    @foreach($ghthietbis as $thietbi)
                    <tr><td><a href="/hoso/{{$thietbi->NguoiDung_ID}}">{{$thietbi->user->hoten}}</a></td>
                        <td><a href="/{{$thietbi->ThietBi_ID}}/chitietthietbi">{{$thietbi->ThietBi_Ten}} </a></td>
                        <td><img src="./img/{{$thietbi->ThietBi_Anh}}" alt="" style="width: 300px;height: 300px;"></td>
                        <td>{{$thietbi->SoLuong}}</td>
                        <td>{{$thietbi->TongTien}} VNĐ</td>

                        <td><a href="/hoso/{{$thietbi->thietbi->user->id}}">{{$thietbi->thietbi->user->hoten}}</a></td>
                        <td><a href="" class="btn btn-sm rounded-0 btn-danger" title="Thuê">Cập nhật</i></a>
                            <form action="{{route('thuethietbi.deleteghtb',$thietbi->id)}}" method="post">
                                @csrf
                                <button type="submit" name="send" value="send" class="btn btn-primary align-center">Xóa</button>
                            </form>
                        </td>

                    </tr>
                    @endforeach
                    <tr>

                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th></th>
                        <th>500.000 VNĐ</th>
                        <th>&nbsp;</th>
                    </tr>
                </table>

            </div>
        </div>
        <h3 class="fw-bolder">Thuê Tài Xế</h3>
        <div class="card rounded-0 shadow">
            <div class="card-body">
                <div class="container-fluid">

                    <table class="table">
                        <tr>
                            <th>Tên tài xế</th>
                            <th>Ảnh</th>
                            <th>Giá</th>
                            <th>Người cho thuê</th>
                            <th>Action</th>
                        </tr>
                        @foreach($ghtaixes as $taixe)
                        <tr>
                            <td><a href="/{{$taixe->TaiXe_ID}}/chitiettaixe">{{$taixe->TaiXe_Ten}} </a></td>
                            <td><img src="./img/{{$taixe->TaiXe_Anh}}" alt="" style="width: 300px;height: 300px;"></td>
                            <td>{{$taixe->TongTien}} VNĐ</td>

                            <td>{{$taixe->taixe->user->hoten}}</td>
                            <td>
                                <form action="{{route('thuethietbi.deleteghtx',$taixe->id)}}" method="post">
                                    @csrf
                                    <button type="submit" name="send" value="send" class="btn btn-primary align-center">Xóa</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach
                        <tr>

                            <th>&nbsp;</th>
                            <th>&nbsp;</th>

                            <th>500.000 VNĐ</th>
                            <th>&nbsp;</th>
                        </tr>
                    </table>

                </div>
            </div>
            <div class="card-footer text-center ">
                <a href="" class="btn btn-success rounded-0">Xóa toàn bộ</a>

                <a href="/thanhtoan" class="btn btn-danger rounded-0">XÁC NHẬN THUÊ</a>
                <a href="/index" class="btn btn-warning rounded-0">Tiếp tục thuê</a>
                <a href="donhangthue.php" class="btn btn-info rounded-0">Các đơn đã thuê</a>
            </div>
        </div>

    </div>
</div>
<br />
<br />
@endsection