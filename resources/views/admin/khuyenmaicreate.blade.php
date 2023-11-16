@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Thêm </strong> Khuyến mãi thiết bị mới<span></span></h4>
                <div class="form">
                    <form action="{{( route('admin.khuyenmaistore') )}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Khuyến Mãi</label>
                            <input type="text" class="form-control" placeholder="Nhập tên khuyến mãi" name="tenkm" value="{{(old('tenkm'))}}">
                            @if ($errors->has('tenkm'))
                            <span class="error-message">* {{ $errors->first('tenkm') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá trị Khuyến Mãi</label>
                            <input type="text" class="form-control" placeholder="Nhập giá trị khuyến mãi" name="giatrikm" value="{{(old('giatrikm'))}}">
                            @if ($errors->has('giatrikm'))
                            <span class="error-message">* {{ $errors->first('giatrikm') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày bắt đầu</label>
                            <input type="date" class="form-control"  name="ngaybd" value="{{(old('ngaybd'))}}">
                            @if ($errors->has('ngaybd'))
                            <span class="error-message">* {{ $errors->first('ngaybd') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Ngày kết thúc</label>
                            <input type="date" class="form-control" name="ngaykt" value="{{(old('ngaykt'))}}">
                            @if ($errors->has('ngaykt'))
                            <span class="error-message">* {{ $errors->first('ngaykt') }}</span>
                            @endif
                        </div>
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Thêm khuyến mãi mới</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection