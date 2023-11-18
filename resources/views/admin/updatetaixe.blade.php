@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> Tài xế<span></span></h4>
                <div class="form">
                    <form action="{{route('admin.updatetx',$taixe->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên tài xế</label>
                            <input type="text" class="form-control" placeholder="Nhập tên tài xế" name="TenTX" value="{{$taixe->TenTX}}">
                            @if ($errors->has('TenTX'))
                            <span class="error-message">* {{ $errors->first('TenTX') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Giới tính</label>
                            <select name="GioiTinh" id="">
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">SĐT</label>
                            <input type="text" class="form-control" placeholder="Nhập SĐT" name="SDT" value="{{$taixe->SDT}}">
                            @if ($errors->has('SDT'))
                            <span class="error-message">* {{ $errors->first('SDT') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Địa chỉ</label>
                            <input type="text" class="form-control" placeholder="Nhập địa chỉ" name="DiaChi" value="{{$taixe->DiaChi}}">
                            @if ($errors->has('DiaChi'))
                            <span class="error-message">* {{ $errors->first('DiaChi') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Email</label>
                            <input type="text" class="form-control" placeholder="Nhập Email" name="Email" value="{{$taixe->Email}}">
                            @if ($errors->has('Email'))
                            <span class="error-message">* {{ $errors->first('Email') }}</span>
                            @endif
                        </div>

                        <div class="form-group">
                            <label for="inputPhoto" class="col-form-label">Anh</label>
                            <!-- <div class="input-group">
                                <span class="input-group-btn">
                                    <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
                                        <i class="fa fa-picture-o"></i> Choose
                                    </a>
                                </span>
                                <input id="thumbnail" class="form-control" type="text" name="Anh" value="{{old('Anh')}}">
                             -->
                            <input type="file" name="Anh" value="{{$taixe->Anh}}">
                        </div>
                        @if ($errors->has('Anh'))
                        <span class="error-message">* {{ $errors->first('Anh') }}</span>
                        @endif
                        <div class="form-group">
                            <label for="exampleInputEmail1">Mô tả</label>
                            <input type="text" class="form-control" placeholder="Nhập mô tả tài xế" name="MoTa" value="{{$taixe->MoTa}}">
                            @if ($errors->has('MoTa'))
                            <span class="error-message">* {{ $errors->first('MoTa') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá thuê</label>
                            <input type="text" class="form-control" placeholder="Nhập giá cho thuê" name="GiaThue" value="{{$taixe->GiaThue}}">
                            @if ($errors->has('GiaThue'))
                            <span class="error-message">* {{ $errors->first('GiaThue') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="exampleInputEmail1">Giá Khuyến Mãi</label>
                            <input type="text" class="form-control" placeholder="Nhập giá cho thuê" name="GiaKM" value="{{$taixe->GiaKM}}">
                        </div>
                        <div class="form-group">
                            <label for="exampleFormControlTextarea1">Khuyến Mãi</label>
                            <select name="KhuyenMai_ID" id="" class="form-group">
                                @foreach($khuyenmais as $khuyenmai)
                                <option value="{{$khuyenmai->id}}">{{$khuyenmai->TenKM}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Cập nhật Tài xế</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection