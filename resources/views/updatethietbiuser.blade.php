@extends('layout.master')

@section('main-content')
<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> Thiết bị<span></span></h4>
                <div class="form">
                    <form action="{{route('thietbiuser.updatetbu',$thietbi->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="">Tên Thiết bị</label>
                            <input type="text" class="form-control" placeholder="Nhập tên Thiết bị" name="TenTB" value="{{$thietbi->TenTB}}">
                            @if ($errors->has('TenTB'))
                            <span class="error-message">* {{ $errors->first('TenTB') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Mô tả</label>
                            <input type="text" class="form-control" placeholder="Nhập mô tả" name="MoTa" value="{{$thietbi->MoTa}}">
                            @if ($errors->has('MoTa'))
                            <span class="error-message">* {{ $errors->first('MoTa') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="inputPdf" class="col-form-label">File chi tiết</label>
                            <input type="file" name="File" value="{{$thietbi->File}}">
                            @if ($errors->has('File'))
                        <span class="error-message">* {{ $errors->first('File') }}</span>
                        @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="inputPhoto" class="col-form-label">File Ảnh</label>
                            <input type="file" name="Anh" value="{{$thietbi->Anh}}">
                            @if ($errors->has('Anh'))
                        <span class="error-message">* {{ $errors->first('Anh') }}</span>
                        @endif
                        </div>
                        
                        <div class="form-group">
                            <label for="">Giá thuê</label>
                            <input type="text" class="form-control" placeholder="Nhập giá cho thuê" name="GiaThue" value="{{$thietbi->GiaThue}}">
                            @if ($errors->has('GiaThue'))
                            <span class="error-message">* {{ $errors->first('GiaThue') }}</span>
                            @endif
                        </div>
                        <div class="form-group">
                            <label for="">Giá Khuyến Mãi</label>
                            <input type="text" class="form-control" placeholder="Nhập giá cho thuê" name="GiaKM" value="{{$thietbi->GiaKM}}">
                        </div>
                        <div class="form-group">
                            <label for="">Loại</label>
                            <select name="Loai_ID" id="" class="form-group">
                                @foreach($loais as $loai)
                                <option value="{{$loai->id}}">{{$loai->TenLoai}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Hãng</label>
                            <select name="Hang_ID" id="" class="form-group">
                                @foreach($hangs as $hang)
                                <option value="{{$hang->id}}">{{$hang->TenHang}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="">Khuyến Mãi</label>
                            <select name="KhuyenMai_ID" id="" class="form-group">
                                @foreach($khuyenmais as $khuyenmai)
                                <option value="{{$khuyenmai->id}}">{{$khuyenmai->TenKM}}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Cập nhật Thiết bị</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
<br />
<br />
<br />
@endsection