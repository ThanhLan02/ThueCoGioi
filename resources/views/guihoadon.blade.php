<div>
    <div style="background-color:#c5ffff;text-align: center;border-color: green; border-style: solid;
  border-width: 5px;">
        <h4 style="text-align: center">Cảm ơn quý khách đã sử dụng dịch vụ của chúng tôi,<br>
            Đơn thuê của quý khách đã được duyệt thành công</h4>

    </div>

    <h2>Phiếu xác nhận Thanh toán: <b style="border-color: red; border-style: solid;color:red">ĐÃ THANH TOÁN</b></h2>
    Mã đơn: <b> {{$hd->id}} </b> <br>
    Ngày lập: <b> {{$hd->NgayLap}} </b><br>
    Địa chỉ: <b> {{$hd->DiaChi}} </b><br>
    <div style="background-color:#ddd;margin-top:8px">
        <div style="margin-left:8px">
        <b> Thiết bị </b><br>
            <table class="table">
                <tr>
                    <th>Mã đơn</th>
                    <th>Thiết bị</th>
                    <th>số lượng</th>
                    <th>Đơn giá</th>
                </tr>
                @foreach($cthdtb as $item)
                <tr>
                    <td>{{$item->HoaDon_ID}}</td>
                    <td> {{$item->thietbi->TenTB}}</td>
                    <td>{{$item->soluong}}</td>
                    <td>{{number_format($item->dongia,0)}}</td>


                </tr>@endforeach
                
            </table>

            <b> Tài xế </b><br>
            <table class="table">
                <tr>
                    <th>Mã đơn</th>
                    <th>Tài xế</th>
                    <th>Đơn giá</th>
                </tr>
                @foreach($cthdtx as $item)
                <tr>
                    <td>{{$item->HoaDon_ID}}</td>
                    <td> {{$item->taixe->TenTX}}</td>
                    <td>{{number_format($item->dongia,0)}}</td>
                </tr>@endforeach
                
            </table>
            Tổng Tiền: <b> {{number_format($hd->TongTien,0)}} </b><br>
        </div>
    </div>

</div>