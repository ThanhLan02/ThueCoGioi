@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> Loại thiết bị<span></span></h4>
                <div class="form">
                    <form action="{{route('admin.updatel',$loaixe->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Loại</label>
                            <input type="text" class="form-control" placeholder="Nhập tên loại" name="tenloai" value="{{($loaixe->TenLoai)}}">
                            @if ($errors->has('tenloai'))
                            <span class="error-message">* {{ $errors->first('tenloai') }}</span>
                            @endif
                        </div>
                        
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Cập nhật loại</button>
                </div>
                <br />
                </form>
            </div>
        </div>
    </div>
</div>
@endsection