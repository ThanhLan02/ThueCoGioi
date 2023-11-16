@extends('admin.layout.master')

@section('main-content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Cập nhật </strong> Hãng thiết bị mới<span></span></h4>
                <div class="form">
                    <form action="{{route('admin.updateh',$hang->id)}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Tên Hãng</label>
                            <input type="text" class="form-control" placeholder="Nhập tên hãng" name="tenhang" value="{{(old('tenhang'))}}">
                            @if ($errors->has('tenhang'))
                            <span class="error-message">* {{ $errors->first('tenhang') }}</span>
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