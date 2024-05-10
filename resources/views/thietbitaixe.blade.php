@extends('layout.master')

@section('main-content')
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
                <li><a href="#">Xe Cơ giới</a></li>
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

<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <ul class="breadcrumb-tree">
                    <li><a href="#">Trang Chủ</a></li>
                    <li class="active"><a href="#">Tất cả thiết bị & tài xế</a></li>
                    <!-- <li><a href="#">Accessories</a></li>
							<li class="active">Headphones (227,490 Results)</li> -->
                </ul>
            </div>
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
    <!-- container -->
    <div class="container">
        <!-- row -->
        <div class="row">
            <!-- ASIDE -->
            <div id="aside" class="col-md-3">
                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">Danh mục</h3>
                    <div class="checkbox-filter">

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-1">
                            <label for="category-1">
                                <span></span>
                                <a href="/thietbiall">Thiết bị cơ giới</a>
                                <small>({{$s1}})</small>
                            </label>
                        </div>

                        <div class="input-checkbox">
                            <input type="checkbox" id="category-2">
                            <label for="category-2">
                                <span></span>
                                <a href="/taixeall">Tài xế</a>
                                <small>({{$s2}})</small>
                            </label>
                        </div>
                    </div>
                </div>
                <!-- /aside Widget -->



                <!-- aside Widget -->
                <div class="aside">
                    <h3 class="aside-title">HOT</h3>
                    @foreach($hot as $item)
                    <div class="product-widget">
                        <div class="product-img">
                            <img src="./img/{{$item->Anh}}" alt="">
                        </div>
                        <div class="product-body">
                            <p class="product-category"><a href="">{{$item->loai->TenLoai}} </a></p>
                            <h3 class="product-name"><a href="/{{$item->id}}/chitietthietbi">{{$item->TenTB}}</a></h3>
                            <h4 class="product-price">{{number_format($item->GiaKM, 0)}} VNĐ<del class="product-old-price">{{number_format($item->GiaThue, 0)}} VNĐ</del></h4>
                        </div>
                    </div>
                    @endforeach
                    
                </div>
                <!-- /aside Widget -->
            </div>
            <!-- /ASIDE -->

            <!-- STORE -->
            <div id="store" class="col-md-9">

                <!-- store products -->
                <div class="row">
                    <!-- product -->
                    @foreach($thietbis as $thietbi)
                    <form action="{{ route('thuethietbi.themgiohang') }}" method="POST">
                        @csrf
                        <div class="col-md-4 col-xs-6" style="height: 520px;">
                            <div class="product">
                                <div class="product-img">
                                    <img src="./img/{{$thietbi->Anh}}" alt="">
                                    <div class="product-label">
                                        <span class="sale">{{$thietbi->khuyenmai->TenKM }}</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">{{$thietbi->loai->TenLoai}}</p>
                                    <h3 class="product-name"><a href="/{{$thietbi->id}}/chitietthietbi">{{$thietbi->TenTB}}</a></h3>
                                    <h4 class="product-price">{{number_format($thietbi->GiaKM,0)}} VNĐ <del class="product-old-price">{{number_format($thietbi->GiaThue,0)}} VNĐ</del></h4>
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
                                    <div class="form-group" style="display: none;">
                                        <input type="text" class="form-control" name="thietbi_id" value="{{$thietbi->id}}">
                                    </div>
                                    <button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i>
                                        Thêm vào giỏ hàng </button>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        <!-- /product -->
                        <!-- product -->
                        @foreach($taixes as $taixe)
                        <form action="{{ route('thuethietbi.themgiohangtx') }}" method="POST">
                            @csrf
                            <div class="col-md-4 col-xs-6" style="height: 520px;">
                                <div class="product">
                                    <div class="product-img">
                                        <img src="./img/{{$taixe->Anh}}" alt="">
                                        <div class="product-label">
                                            <span class="sale">{{$taixe->khuyenmai->TenKM}}</span>
                                            <span class="new">NEW</span>
                                        </div>
                                    </div>
                                    <div class="product-body">
                                        <p class="product-category">TÀI XẾ</p>
                                        <h3 class="product-name"><a href="/{{$taixe->id}}/chitiettaixe">{{$taixe->TenTX}}</a></h3>
                                        <h4 class="product-price">{{number_format($taixe->GiaKM,0)}} VNĐ <del class="product-old-price">{{number_format($taixe->GiaThue,0)}} VNĐ</del></h4>
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
                                        <div class="form-group" style="display: none;">
                                            <input type="text" class="form-control" name="taixe_id" value="{{$taixe->id}}">
                                        </div>
                                        <button class="add-to-cart-btn" type="submit"><i class="fa fa-shopping-cart"></i>
                                            Thêm vào giỏ hàng </button>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                            <!-- /product -->

                </div>
                <!-- /store products -->
                <!-- /store bottom filter -->
            </div>
            <!-- /STORE -->
        </div>
        <!-- /row -->
    </div>
    <!-- /container -->
</div>
<!-- /SECTION -->

@endsection