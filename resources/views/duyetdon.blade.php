@extends('layout.master')

@section('main-content')

<div class="container">
    <br />
    <h3 class="fw-bolder text-center">Duyệt đơn hàng</h3>
    <center>
        <hr class="bg-warning" style="width:5em;height:3px;opacity:1">
    </center>

    <div class="card rounded-0 shadow">

        <h3 class="fw-bolder">Thiết bị</h3>
        <div class="card-body">
            <div class="container-fluid">
                <table class="table">
                    <tr>
                        <th>Mã đơn</th>
                        <th>Mã Thiết bị</th>
                        <th>số lượng</th>
                        <th>Đơn giá</th>
                        <th>Người Thuê</th>
                        <th>Tình Trạng</th>
                        <th>Action</th>
                    </tr>
                    @foreach($cthdtbs as $item)
                    <tr>
                        <td>{{$item->HoaDon_ID}}</td>
                        <td> <a href="/{{$item->ThietBi_ID}}/chitietthietbi">{{$item->thietbi->TenTB}}</a></td>
                        <td>{{$item->soluong}}</td>
                        <td>{{$item->dongia}}</td>
                        <td><a href="/hoso/{{$item->hd->NguoiNhan}}">{{$item->hd->nhan->hoten}}</a></td>
                        @if($item->TinhTrang == 0)
                        <td>Đang chờ duyệt</td>
                        @elseif($item->TinhTrang == -1)
                        <td>Đã hủy</td>
                        @else
                        <td>Đã duyệt</td>
                        @endif

                        @if($item->TinhTrang == 0)
                        <td>
                            <form action="{{route('thuethietbi.duyetdontb',$item->id)}}" method="post">
                                @csrf
                                <button type="submit" name="send" value="send" class="btn btn-success">Duyệt</button>
                            </form>
                            <form action="{{route('thuethietbi.xoadontb',$item->id)}}" method="post">
                                @csrf
                                <button type="submit" name="send" value="send" class="btn btn-danger">-Hủy-</button>
                            </form>
                        </td>
                        @else
                        <td></td>
                        @endif


                    </tr>@endforeach
                </table>
                {{$cthdtbs->links('pagination::bootstrap-4')}}
            </div>
        </div>
        <h3 class="fw-bolder">Tài Xế</h3>
        <div class="card-body">
            <div class="container-fluid">
                <table class="table">
                    <tr>
                        <th>Mã đơn</th>
                        <th>Tên Tài Xế</th>
                        <th>Giá</th>
                        <th>Người Thuê</th>
                        <th>Tình Trạng</th>
                        <th>Action</th>
                    </tr>
                    @foreach($cthdtxs as $item)
                    <tr>

                        <td>{{$item->HoaDon_ID}}</td>
                        <td> <a href="/{{$item->TaiXe_ID}}/chitiettaixe">{{$item->taixe->TenTX}}</a></td>
                        <td>{{$item->dongia}}</td>
                        <td><a href="/hoso/{{$item->hd->NguoiNhan}}">{{$item->hd->nhan->hoten}}</a></td>
                        @if($item->TinhTrang == 0)
                        <td>Đang chờ duyệt</td>
                        @else
                        <td>Đã duyệt</td>
                        @endif
                        @if($item->TinhTrang == 0)
                        <td>

                            <form action="{{route('thuethietbi.duyetdontx',$item->id)}}" method="post">
                                @csrf
                                <button type="submit" name="send" value="send" class="btn btn-success">Duyệt</button>
                            </form>
                            <form action="{{route('thuethietbi.xoadontx',$item->id)}}" method="post">
                                @csrf
                                <button type="submit" name="send" value="send" class="btn btn-danger">-Hủy-</button>
                            </form>
                        </td>
                        @else
                        <td></td>
                        @endif


                    </tr>@endforeach
                </table>
                {{$cthdtxs->links('pagination::bootstrap-4')}}
            </div>
        </div>

    </div>
</div>
<br />

@endsection