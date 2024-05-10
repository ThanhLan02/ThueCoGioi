<!-- HEADER -->
<header>
	<!-- TOP HEADER -->
	<div id="top-header">
		<div class="container">
			<ul class="header-links pull-left">
				<li><a href="#"><i class="fa fa-phone"></i> 0904613293</a></li>
				<li><a href="#"><i class="fa fa-envelope-o"></i> tranthanhlanth9@email.com</a></li>
				<li><a href="#"><i class="fa fa-map-marker"></i> 75 Tô Hiệu, Hiệp Tân, Tân Phú, TPHCM</a></li>
			</ul>
			<ul class="header-links pull-right">
				<li><a href="#"><i class="fa fa-dollar"></i> VND</a></li>

				@if(Session::has('username'))
				<li><a href="/hoso/{{Session::get('user')}}"><i class="fa fa-user"></i> {{Session::get('username')}}</a></li>
				@else
				<li><a href="/login"><i class="fa fa-key"></i>Đăng nhập</a></li>
				@endif
				<li><i class="fa fa-key"></i> <a href="/logout">Logout</a></li>


			</ul>
		</div>
	</div>
	<!-- /TOP HEADER -->

	<!-- MAIN HEADER -->
	<div id="header">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<!-- LOGO -->
				<div class="col-md-3">
					<div class="header-logo">
						<a href="{{( route('Trangchu.index') )}}" class="logo">
							<img src="{{asset('./img/logo.png')}}" alt="">
						</a>
					</div>
				</div>
				<!-- /LOGO -->

				<!-- SEARCH BAR -->
				<div class="col-md-6">
					<div class="header-search">
						<form>
							<select class="input-select">
								<option value="0">Thiết bị</option>
								<option value="1">Tài xế</option>
							</select>
							<input class="input" placeholder="Search here">
							<button class="search-btn">Search</button>
						</form>
					</div>
				</div>
				<!-- /SEARCH BAR -->

				<!-- ACCOUNT -->
				<div class="col-md-3 clearfix">
					<div class="header-ctn">
						<!-- Wishlist -->
						<div>
							<a href="/duyetdon">
								<i class="fa fa-heart-o"></i>
								<span>Duyệt đơn</span>
								
							</a>
						</div>
						<!-- /Wishlist -->

						<!-- Cart -->
						<div>
							<a  href="/giohang">
								<i class="fa fa-shopping-cart"></i>
								<span>Your Cart</span>
								@if(Session::has('soluong'))
									<div class="qty">{{Session::get('soluong')}}</div>
								@else
									<div class="qty">0</div>
								@endif
								
							</a>
							
						</div>
						<!-- /Cart -->

						<!-- Menu Toogle -->
						<div class="menu-toggle">
							<a href="#">
								<i class="fa fa-bars"></i>
								<span>Menu</span>
							</a>
						</div>
						<!-- /Menu Toogle -->
					</div>
				</div>
				<!-- /ACCOUNT -->
			</div>
			<!-- row -->
		</div>
		<!-- container -->
	</div>
	<!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->