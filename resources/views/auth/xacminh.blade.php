@extends('layout.master')

@section('main-content')
<div class="container">
    <br />
    <h1 class="text-center">Xác minh</h1>
    <div class="row vertical-offset">
        <div class="col-md-4 col-md-offset-4">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Thông tin Xác minh</h3>
                </div>
                <div class="panel-body">
                    <form accept-charset="UTF-8" role="form" method="post" action="{{( route('auth.xacminhstore') )}}">
                        @csrf
                            <div class="form-group">
                                <label for="ma">Mã xác minh đã gửi qua mail</label>
                                <input class="form-control" placeholder="Nhập mã xác nhận" name="ma" type="text" value="">
                                <input class="form-control" name="email" type="text" value="{{$mailuser}}" style="display: none;">
                            </div>
                            <input class="btn btn-lg btn-success btn-block" type="submit" value="Xác Minh"><br />
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection