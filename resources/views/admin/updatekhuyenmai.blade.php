@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> khuyến mãi thiết bị<span></span></h4>
                <div class="form">
                    <form action="{{route('admin.updatekm',$Khuyenmai->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên khuyến mãi</label>
                            <input type="text" class="form-control" placeholder="Nhập tên hãng" name="tenkm" value="{{($Khuyenmai->TenKM)}}">
                            @if ($errors->has('tenkm'))
                            <span class="error-message">* {{ $errors->first('tenkm') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá trị Khuyến Mãi</label>
                            <input type="text" class="form-control" placeholder="Nhập giá trị khuyến mãi" name="giatrikm" value="{{($Khuyenmai->GiaTriKM)}}">
                            @if ($errors->has('giatrikm'))
                            <span class="error-message">* {{ $errors->first('giatrikm') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày bắt đầu</label>
                            <input type="date" class="form-control"  name="ngaybd" value="{{($Khuyenmai->NgayBD)}}">
                            @if ($errors->has('ngaybd'))
                            <span class="error-message">* {{ $errors->first('ngaybd') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày kết thúc</label>
                            <input type="date" class="form-control" name="ngaykt" value="{{($Khuyenmai->NgayKT)}}">
                            @if ($errors->has('ngaykt'))
                            <span class="error-message">* {{ $errors->first('ngaykt') }}</span>
                            @endif
                        </div>
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Cập nhật Hãng</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection