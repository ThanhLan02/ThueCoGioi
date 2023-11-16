<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .error-message{
            color: red;
        }
    </style>
</head>

<body>
    <?php
    include "./templates/header.blade.php";
    ?>
    <div class="container">
        <br/>
    <h1 class="text-center">Đăng Nhập</h1>
    <div class="row vertical-offset">
    	<div class="col-md-4 col-md-offset-4">
    		<div class="panel panel-default">
			  	<div class="panel-heading">
			    	<h3 class="panel-title">Thông tin đăng nhập</h3>
			 	</div>
			  	<div class="panel-body">
			    	<form accept-charset="UTF-8" role="form" method="post" action="{{( route('auth.dologin') )}}">
                        @csrf
                    <fieldset>
                    <!-- @if ($errors->any())
                        <div class="alert alert-danger">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif -->
			    	  	<div class="form-group">
                          <label for="username">Email</label>
			    		    <input class="form-control" placeholder="Email" name="email" type="text" value="{{ old('email')}}">
                            @if ($errors->has('email'))
                                <span class="error-message">* {{ $errors->first('email') }}</span>
                            @endif
			    		</div>
			    		<div class="form-group">
                        <label for="password">Mật khẩu</label>
			    			<input class="form-control" placeholder="password" name="password" type="password">
                            @if ($errors->has('password'))
                                <span class="error-message">* {{ $errors->first('password') }}</span>
                            @endif
                        </div>
			    		<div class="checkbox">
			    	    	<label>
			    	    		<input name="remember" type="checkbox" value="Remember Me"> Remember Me
			    	    	</label>
			    	    </div>
			    		<input class="btn btn-lg btn-success btn-block" type="submit" value="Login"><br/>
                        <h5 class="text-center"><a href="#" class="text-left">Quên mật khẩu</a> - <a href="dangky.php" class="text-right">Đăng ký</a></h5>
                        
                        
			    	</fieldset>
			      	</form>
			    </div>
			</div>
		</div>
	</div>
</div>
    <!-- jQuery Plugins -->
    <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
    <script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ URL::asset('js/slick.min.js') }}"></script>
    <script src="{{ URL::asset('js/nouislider.min.js') }}"></script>
    <script src="{{ URL::asset('js/jquery.zoom.min.js') }}"></script>
    <script src="{{ URL::asset('js/main.js') }}"></script>
    <script src="{{ URL::asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.26.1/axios.min.js" integrity="sha512-bPh3uwgU5qEMipS/VOmRqynnMXGGSRv+72H/N260MQeXZIK4PG48401Bsby9Nq5P5fz7hy5UGNmC/W1Z51h2GQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php
    include "./templates/footer.blade.php";
    ?>
</body>

</html>