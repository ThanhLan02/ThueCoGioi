<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Document</title>
    <title>Electro - HTML Ecommerce Template</title>

		

</head>
<body>
    <?php
    include "./templates/header.blade.php";
    ?>

		<!-- NAVIGATION -->
		<nav id="navigation">
			<!-- container -->
			<div class="container">
				<!-- responsive-nav -->
				<div id="responsive-nav">
					<!-- NAV -->
					<ul class="main-nav nav navbar-nav">
						<li class="active"><a href="#">Trang Chủ</a></li>
						<li><a href="#">Khuyến Mãi</a></li>
						<li><a href="#">Xe cơ giới</a></li>
						<li><a href="#">Tài xế</a></li>
						<li><a href="#">About</a></li>
					</ul>
					<!-- /NAV -->
				</div>
				<!-- /responsive-nav -->
			</div>
			<!-- /container -->
		</nav>
		<!-- /NAVIGATION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop001.png" alt="">
							</div>
							<div class="shop-body">
								<h3>ALL<br>PRODUCTS</h3>
								<a href="alldevice.php" class="cta-btn">Thuê ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop002.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Thiết Bị<br>Cơ Giới</h3>
								<a href="#" class="cta-btn">Thuê ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->

					<!-- shop -->
					<div class="col-md-4 col-xs-6">
						<div class="shop">
							<div class="shop-img">
								<img src="./img/shop003.png" alt="">
							</div>
							<div class="shop-body">
								<h3>Tài Xế<br>Cơ Giới</h3>
								<a href="#" class="cta-btn">Thuê ngay <i class="fa fa-arrow-circle-right"></i></a>
							</div>
						</div>
					</div>
					<!-- /shop -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Thiết bị & Tài xế</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Thiết bị</a></li>
									<li><a data-toggle="tab" href="#tab1">Tài Xế</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product001.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
												<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">5.000.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product002.png" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="#">Xe cẩu thùng 12 Tấn</a></h3>
												<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">4.500.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product003.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="detail.php">Cẩu trục bánh lốp 110 Tấn</a></h3>
												<h4 class="product-price">3.000.000 VNĐ <del class="product-old-price">3.000.000 VNĐ</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product004.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Tài Xế</p>
												<h3 class="product-name"><a href="detail.php">Trần Thanh Tuến</a></h3>
												<h4 class="product-price">500.000 VNĐ<del class="product-old-price">400.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product005.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="detail.php">Cẩu trục bánh lốp 80 Tấn</a></h3>
												<h4 class="product-price">6.000.000 VNĐ<del class="product-old-price">5.000.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">Thiết bị & Tài xế HOT</h3>
							<div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Thiết bị</a></li>
									<li><a data-toggle="tab" href="#tab1">Tài Xế</a></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12">
						<div class="row">
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product001.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
												<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">5.000.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product002.png" alt="">
												<div class="product-label">
													<span class="new">NEW</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="#">Xe cẩu thùng 12 Tấn</a></h3>
												<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">4.500.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star-o"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product003.png" alt="">
												<div class="product-label">
													<span class="sale">-30%</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 110 Tấn</a></h3>
												<h4 class="product-price">3.000.000 VNĐ <del class="product-old-price">3.000.000 VNĐ</del></h4>
												<div class="product-rating">
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product004.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Tài Xế</p>
												<h3 class="product-name"><a href="#">Trần Thanh Tuến</a></h3>
												<h4 class="product-price">500.000 VNĐ<del class="product-old-price">400.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->

										<!-- product -->
										<div class="product">
											<div class="product-img">
												<img src="./img/product005.png" alt="">
											</div>
											<div class="product-body">
												<p class="product-category">Thiết bị</p>
												<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 80 Tấn</a></h3>
												<h4 class="product-price">6.000.000 VNĐ<del class="product-old-price">5.000.000 VNĐ</del></h4>
												<div class="product-rating">
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
													<i class="fa fa-star"></i>
												</div>
												<div class="product-btns">
													<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
													<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
												</div>
											</div>
											<div class="add-to-cart">
												<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> Thêm vào giỏ hàng</button>
											</div>
										</div>
										<!-- /product -->
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Thiết Bị & Tài Xế HOT</h4>
							<div class="section-nav">
								<div id="slick-nav-3" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-3">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product003.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product002.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Thiết Bị & Tài Xế Mới</h4>
							<div class="section-nav">
								<div id="slick-nav-4" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-4">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product002.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product003.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product004.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product005.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

					<div class="clearfix visible-sm visible-xs"></div>

					<div class="col-md-4 col-xs-6">
						<div class="section-title">
							<h4 class="title">Khuyến Mãi</h4>
							<div class="section-nav">
								<div id="slick-nav-5" class="products-slick-nav"></div>
							</div>
						</div>

						<div class="products-widget-slick" data-nav="#slick-nav-5">
							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product003.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product002.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>

							<div>
								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product004.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product005.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- /product widget -->

								<!-- product widget -->
								<div class="product-widget">
									<div class="product-img">
										<img src="./img/product001.png" alt="">
									</div>
									<div class="product-body">
										<p class="product-category">Thiết bị cơ giới</p>
										<h3 class="product-name"><a href="#">Cẩu trục bánh lốp 25 Tấn</a></h3>
										<h4 class="product-price">5.000.000 VNĐ <del class="product-old-price">6.000.000 VNĐ</del></h4>
									</div>
								</div>
								<!-- product widget -->
							</div>
						</div>
					</div>

				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

		<!-- NEWSLETTER -->
		<div id="newsletter" class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<div class="col-md-12">
						<div class="newsletter">
							<p>Sign Up for the <strong>NEWSLETTER</strong></p>
							<form>
								<input class="input" type="email" placeholder="Enter Your Email">
								<button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
							</form>
							<ul class="newsletter-follow">
								<li>
									<a href="#"><i class="fa fa-facebook"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-twitter"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-instagram"></i></a>
								</li>
								<li>
									<a href="#"><i class="fa fa-pinterest"></i></a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /NEWSLETTER -->
        <?php
    include "./templates/footer.blade.php";
    ?>

        <!-- jQuery Plugins -->
        <script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/bootstrap.min.js') }}"></script>
		<script src="{{ URL::asset('js/slick.min.js') }}"></script>
		<script src="{{ URL::asset('js/nouislider.min.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.zoom.min.js') }}"></script>
		<script src="{{ URL::asset('js/main.js') }}"></script>
</body>
</html>