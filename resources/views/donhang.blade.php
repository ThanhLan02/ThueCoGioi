@extends('layout.master')

@section('main-content')

<div class="container">
    <br/>
    <h3 class="fw-bolder text-center">Đơn hàng</h3>
    <center>
        <hr class="bg-warning" style="width:5em;height:3px;opacity:1">
    </center>

    <div class="card rounded-0 shadow">
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
                        <td>{{$item->id}}</td>
                        <td>{{$item->NgayLap}}</td>
                        <td> <a href="/hoso/{{$item->NguoiNhan}}">{{Session::get('username')}}</a></td>
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

                        @if($item->TinhTrang == 0)
                        <td>
                            
                            <form action="{{route('thuethietbi.huydon',$item->id)}}" method="get">
                                @csrf
                                <button type="submit" name="send" value="send" class="btn btn-danger">-Hủy-</button>
                            </form>
                        </td>
                        @else
                        <td></td>
                        @endif
                    </tr>
                    @endforeach
                </tbody>
            </table>

        </div>


    </div>
</div>
<br />

@endsection