@extends('layout.master')

@section('main-content')
<div class="container">
    <br />
    <h1 class="text-center">Đổi mật khẩu</h1>
    <div class="row vertical-offset">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Đổi mật khẩu</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="{{( route('auth.doimatkhaustore') )}}">
                        @csrf
                            <div class="form-group">
                                <label for="ma">Mật khẩu</label>
                                <input class="form-control" placeholder="Nhập mật khẩu" name="password" type="password" value="">
                                @if ($errors->has('password'))
                                <span class="error-message">* {{ $errors->first('password') }}</span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="ma">Nhập lại Mật khẩu</label>
                                <input class="form-control" placeholder="Nhập lại mật khẩu" name="repassword" type="password" value="">
                                @if ($errors->has('repassword'))
                                <span class="error-message">* {{ $errors->first('repassword') }}</span>
                                @endif
                            </div>
                            <input class="form-control" name="email" type="text" value="{{$mail}}" style="display: none;">
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Đổi mật khẩu"><br />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection