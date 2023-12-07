@extends('layout.master')

@section('main-content')
<div class="container">
    <br/>
        <h2 class="fw-bolder text-center">Giỏ hàng</h2>
        <center>
            <hr class="bg-warning" style="width:5em;height:3px;opacity:1">
        </center>
        
        <div class="card rounded-0 shadow">
        <h3 class="fw-bolder">Thuê Thiết bị</h3>
            <div class="card-body">
                <div class="container-fluid">
                    <form action="cart.php" method="post" id="cart-form">
                        <table class="table">
                            <tr>
                                <th>Tên Thiết bị</th>
                                <th>Ảnh</th>
                                <th>Số Lượng</th>
                                <th>Giá</th>
                                <th>Người cho thuê</th>
                                <th>Action</th>
                            </tr>
                            @foreach($ghthietbis as $thietbi)
                            <tr>
                                <td>{{$thietbi->ThietBi_Ten}}</td>
                                <td><img src="./img/{{$thietbi->ThietBi_Anh}}" alt="" style="width: 300px;height: 300px;"></td>
                                <td>{{$thietbi->SoLuong}}</td>
                                <td>{{$thietbi->TongTien}} VNĐ</td>

                                <td>{{$thietbi->thietbi->user->hoten}}</td>
                                <td><a href="" class="btn btn-sm rounded-0 btn-danger" title="Thuê">Thuê</i></a></td>
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
                    </form>
                </div>
            </div>
            <h3 class="fw-bolder">Thuê Tài Xế</h3>
            <div class="card rounded-0 shadow">
                <div class="card-body">
                    <div class="container-fluid">
                        <form action="cart.php" method="post" id="cart-form">
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
                                    <td>{{$taixe->TaiXe_Ten}}</td>
                                    <td><img src="./img/{{$taixe->TaiXe_Anh}}" alt="" style="width: 300px;height: 300px;"></td>
                                    <td>{{$taixe->TongTien}} VNĐ</td>

                                    <td>{{$taixe->taixe->user->hoten}}</td>
                                    <td><a href="" class="btn btn-sm rounded-0 btn-danger" title="Thuê">Thuê</i></a></td>
                                </tr>
                                @endforeach
                                <tr>

                                    <th>&nbsp;</th>
                                    <th>&nbsp;</th>

                                    <th>500.000 VNĐ</th>
                                    <th>&nbsp;</th>
                                </tr>
                            </table>
                        </form>
                    </div>
                </div>
                <div class="card-footer text-center ">
                    <a href="cart.php?action=clear" class="btn btn-success rounded-0">Xóa toàn bộ</a>

                    <input type="submit" name="checkout" value="XÁC NHẬN THUÊ" class="btn btn-danger rounded-0" form="cart-form">
                    <a href="Index.php" class="btn btn-warning rounded-0">Tiếp tục thuê</a>
                    <a href="donhangthue.php" class="btn btn-info rounded-0">Các đơn đã thuê</a>
                </div>
            </div>

        </div>
    </div>
    <br />
<br />
@endsection