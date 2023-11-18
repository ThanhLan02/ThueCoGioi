@extends('layout.master')

@section('main-content')
    <?php
    $file = './img/SCC550A单行本-英文-20180507.pdf';
    ?>
    <div class="container">
        <div class="card">
            <div class="container-fliud">
                <div class="wrapper row">
                    <div class="preview col-md-6">

                        <div class="preview-pic tab-content">
                            <div class="tab-pane active" id="pic-1"><img src="{{asset('./img/product004.png')}}" /></div>
                            <div class="tab-pane" id="pic-2"><img src="{{asset('./img/product004.png')}}" /></div>
                            <div class="tab-pane" id="pic-3"><img src="{{asset('./img/product004.png')}}" /></div>
                            <div class="tab-pane" id="pic-4"><img src="{{asset('./img/product004.png')}}" /></div>
                            <div class="tab-pane" id="pic-5"><img src="{{asset('./img/product004.png')}}" /></div>
                        </div>
                        <ul class="preview-thumbnail nav nav-tabs">
                            <li class="active"><a data-target="#pic-1" data-toggle="tab"><img src="{{asset('./img/product004.png')}}" /></a></li>
                            <li><a data-target="#pic-2" data-toggle="tab"><img src="{{asset('./img/product004.png')}}" /></a></li>
                            <li><a data-target="#pic-3" data-toggle="tab"><img src="{{asset('./img/product004.png')}}" /></a></li>
                            <li><a data-target="#pic-4" data-toggle="tab"><img src="{{asset('./img/product004.png')}}" /></a></li>
                            <li><a data-target="#pic-5" data-toggle="tab"><img src="{{asset('./img/product004.png')}}" /></a></li>
                        </ul>

                    </div>
                    <div class="details col-md-6">
                        <h3 class="product-title">{{$taixe->TenTX}}</h3>
                        <div class="rating">
                            <div class="stars">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <span class="review-no">{{$taixe->SoDanhGia}}</span>
                        </div>
                        <p class="product-description">{{$taixe->MoTa}}</p>
                        <h4 class="price">Giá thuê: <span>{{$taixe->GiaThue}} VNĐ/Ngày</span></h4>
                        <p class="vote"><strong>91%</strong> Đánh giá cao thiết bị này <strong>(87 votes)</strong></p>
                        <!-- <h5 class="sizes">sizes:
							<span class="size" data-toggle="tooltip" title="small">s</span>
							<span class="size" data-toggle="tooltip" title="medium">m</span>
							<span class="size" data-toggle="tooltip" title="large">l</span>
							<span class="size" data-toggle="tooltip" title="xtra large">xl</span>
						</h5>
						<h5 class="colors">colors:
							<span class="color orange not-available" data-toggle="tooltip" title="Not In store"></span>
							<span class="color green"></span>
							<span class="color blue"></span>
						</h5> -->
                        <div class="action">
                            <button class="add-to-cart btn btn-default" type="button">Thêm vào giỏ</button>
                            <?php


                            if (file_exists($file)) {
                                echo '<a href="' . $file . '" target="_blank"><button class="add-to-cart btn btn-default" type="button">Xem file chi tiết</button></a>';
                            } else {
                                echo 'File not found.';
                            }

                            ?>
                            <button class="like btn btn-default" type="button"><span class="fa fa-heart"></span></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <br />
        <hr />
        <h1>Mô tả chi tiết thiết bị</h1>
        <div style="font-size: 23px;">
            <p><strong>Tên thiết bị : {{$taixe->TenTX}}</strong></p>
            <p><strong>Mô tả : {{$taixe->MoTa}}</strong></p>
            <p><strong>Giá gốc thiết bị : {{$taixe->GiaThue}} VNĐ/ngày</strong></p>
            <p><strong>Chương trình khuyến mãi : {{$taixe->khuyenmai->TenKM}}</strong></p>
            <p><strong>Giá khuyến mãi : {{$taixe->GiaKM}} VNĐ/ngày</strong></p>
            <p><strong>Số sao : {{$taixe->SoSao}}</strong></p>
            <p><strong>Số người đánh giá : {{$taixe->SoDanhGia}}</strong></p>
        </div>

        <!-- Products tab & slick -->
        <h1 class="title">Một số Tài xế khác</h1>
        <div class="col-md-12">
            <div class="row">
                <div class="products-tabs">
                    <!-- tab -->
                    <div id="tab1" class="tab-pane active">
                        <div class="products-slick" data-nav="#slick-nav-1">
                            @foreach($taixes as $tb)
                            <!-- product -->
                            <div class="product">
                                <div class="product-img">
                                    <img src="{{asset('./img/product002.png')}}" alt="">
                                    <div class="product-label">
                                        <span class="sale">-30%</span>
                                        <span class="new">NEW</span>
                                    </div>
                                </div>
                                <div class="product-body">
                                    <p class="product-category">Tài Xế</p>
                                    <h3 class="product-name"><a href="#">{{$tb->TenTX}}</a></h3>
                                    <h4 class="product-price">{{$tb->GiaKM}} VNĐ <del class="product-old-price">{{$tb->GiaThue}} VNĐ</del></h4>
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
                            @endforeach
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
    <br />
    <br />
    <br />
@endsection