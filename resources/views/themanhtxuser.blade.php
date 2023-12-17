@extends('layout.master')

@section('main-content')
<hr/>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10">
            <div class="form_main">
                <h4 class="heading"><strong>Thêm </strong> ảnh mới {{$taixe->TenTX}}<span></span></h4>
                <div class="form">
                    <form action="/{{$taixe->id}}/themanhtxuserstore" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="inputPhoto" class="col-form-label">Ảnh</label>
                            <input type="file" name="anh">
                        </div>
                        @if ($errors->has('anh'))
                        <span class="error-message">* {{ $errors->first('Anh') }}</span>
                        @endif
                        <button type="submit" name="send" value="send" class="btn btn-primary align-center">Thêm ảnh mới</button>
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