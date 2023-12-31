<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from htmldemo.net/james/james/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 10:20:02 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Home || James </title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/favicon.ico">

    <!-- Google Fonts
        ============================================ -->
    <link href='https://fonts.googleapis.com/css?family=Norican' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/font-awesome.min.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/owl.carousel.css">
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/owl.theme.css">
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/owl.transitions.css">
    <!-- jquery-ui CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/jquery-ui.css">
    <!-- meanmenu CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/meanmenu.min.css">
    <!-- nivoslider CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/lib/css/nivo-slider.css">
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/lib/css/preview.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/animate.css">
    <!-- magic CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/magic.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/normalize.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/main.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <!-- Add your site or application content here -->
    <!-- header area start -->
    <header>
        <div class="top-link">
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 offset-lg-3 col-md-9 d-none d-md-block">
                        <div class="call-support">
                            <p>Call support free: <span> (800) 123 456 789</span></p>
                        </div>
                    </div>
                    <div class="col-lg-2 col-md-3 position-relative">
                        <div class="dashboard">
                            <div class="account-menu">
                                <ul>
                                    <li class="search">
                                        <a href="#">
                                            <i class="fa fa-search"></i>
                                        </a>
                                        <ul class="search">
                                            <li>
                                                <form action="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_shop" method="get">
                                                    <input type="text" value="<?php if (isset($_GET['search'])) {
                                                                                    echo $_GET['search'];
                                                                                } ?>" name="search">
                                                    <button type="submit"> <i class="fa fa-search"></i> </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="fa fa-bars"></i>
                                        </a>
                                        <ul>
                                            <?php
                                            if (isset($_SESSION['id'])) {
                                                echo '
                                                        <li>
                                                            <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_account">
                                                            Profile
                                                            </a>
                                                        </li>
                                                            ';
                                            } else {
                                                echo '
                                                            <li style="display: none;"></li>
                                                        ';
                                            }
                                            ?>

                                            <?php
                                            if (isset($_SESSION['id'])) {
                                                if ($data['role']['vaitro'] == 1) {
                                                    echo '
                                                            <li>
                                                                <a href="http://localhost/duan1_Nhom12_WD18202/admin">
                                                                Admin
                                                                </a>
                                                            </li>
                                                        ';
                                                } elseif ($data['role']['vaitro'] == 0) {
                                                    echo '
                                                            <li style="display: none;"></li>
                                                        ';
                                                }
                                            } else {
                                                echo '
                                                        <li style="display: none;"></li>
                                                    ';
                                            }
                                            ?>

                                            <?php
                                            if (isset($_SESSION['id'])) {
                                                echo '
                                                        <li style="display: none;"></li>
                                                    ';
                                            } else {
                                                echo '
                                                    <li><a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_login">Log in</a></li>
                                                    ';
                                            }
                                            ?>


                                            <?php
                                            if (isset($_SESSION['id'])) {
                                                echo '
                                                        <li><a href="http://localhost/duan1_Nhom12_WD18202/admin/admin_login/logOutFeature">Log Out</a></li>
                                                    ';
                                            } else {
                                                echo '
                                                        <li style="display: none;"></li>
                                                    ';
                                            }
                                            ?>
                                        </ul>
                                    </li>
                                </ul>
                            </div>

                            <div class="cart-menu">
                                <ul>
                                    <li><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_cart"> <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/icon-cart.png" alt="">
                                            <span>
                                                <?php
                                                if (isset($data['count_sp'][0])) {
                                                    echo $data['count_sp'][0]['COUNT(sanpham.id)'];
                                                } else {
                                                    echo $data['count_sp'][0] = 0;
                                                }
                                                ?>
                                            </span> </a>
                                        <div class="cart-info">
                                            <ul>
                                                <?php
                                                if (isset($_SESSION['product']['id']) && is_array($_SESSION['product']['id'])) {
                                                    $ids = $_SESSION['product']['id'];
                                                }
                                                ?>
                                                <?php foreach ($data['select_session'] as $select) : ?>
                                                    <li>
                                                        <div class="cart-img">
                                                            <img src="/duan1_Nhom12_WD18202/public/img/<?= $select['anh'] ?>" width="80" alt="">
                                                        </div>
                                                        <div class="cart-details">
                                                            <a href="#"><?= $select['ten_sanpham'] ?></a>
                                                            <?php
                                                            if (isset($ids[$select['id']])) {
                                                                $quantity = $ids[$select['id']];
                                                            } else {
                                                                $quantity = 1;
                                                            }
                                                            ?>
                                                            <p>x<?= $quantity ?></p>
                                                        </div>
                                                    </li>
                                                <?php endforeach ?>

                                            </ul>
                                            <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_cart" class="checkout">go to cart</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="mainmenu-area home2 bg-color-tr product-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/">
                                <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="">Home</a></li>

                                    <li class="mega-men"><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_sanPhamByGender/<?= $data['danhmuc_men']['id_gioitinh'] ?>"><?= $data['danhmuc_men']['ten_danhmuc'] ?></a>
                                        <div class="sub-menu pages">
                                            <span>
                                                <?php foreach ($data['loaihang_men'] as $lh) : ?>
                                                    <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_Loaihang/<?= $lh['id_loaihang'] ?>"><?= $lh['ten_loaihang'] ?></a>
                                                <?php endforeach ?>
                                            </span>
                                        </div>
                                    </li>

                                    <li class="mega-men"><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_sanPhamByGender/<?= $data['danhmuc_women']['id_gioitinh'] ?>"><?= $data['danhmuc_women']['ten_danhmuc'] ?></a>
                                        <div class="sub-menu pages">
                                            <span>
                                                <?php foreach ($data['loaihang_women'] as $lh) : ?>
                                                    <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_Loaihang/<?= $lh['id_loaihang'] ?>"><?= $lh['ten_loaihang'] ?></a>
                                                <?php endforeach ?>
                                            </span>
                                        </div>
                                    </li>

                                    <li><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_shop">All Products</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                    <div class="col-sm-12">
                        <div class="mobile-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.html">Home</a>
                                        <ul>
                                            <li><a href="index.html">Home 1</a></li>
                                            <li><a href="index-2.html">Home 2</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Women</a>
                                        <ul>
                                            <li><a href="#">Dresses</a>
                                                <ul>
                                                    <li><a href="#">Coctail</a></li>
                                                    <li><a href="#">day</a></li>
                                                    <li><a href="#">evening</a></li>
                                                    <li><a href="#">sports</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shoes</a>
                                                <ul>
                                                    <li><a href="#">Sports</a></li>
                                                    <li><a href="#">run</a></li>
                                                    <li><a href="#">sandals</a></li>
                                                    <li><a href="#">boots</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">handbags</a>
                                                <ul>
                                                    <li><a href="#">Blazers</a></li>
                                                    <li><a href="#">table</a></li>
                                                    <li><a href="#">coats</a></li>
                                                    <li><a href="#">kids</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">clothing</a>
                                                <ul>
                                                    <li><a href="#">T-shirts</a></li>
                                                    <li><a href="#">coats</a></li>
                                                    <li><a href="#">Jackets</a></li>
                                                    <li><a href="#">jeans</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Men</a>
                                        <ul>
                                            <li><a href="#">Bags</a>
                                                <ul>
                                                    <li><a href="#">Bootees bag</a></li>
                                                    <li><a href="#">Blazers</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">clothing</a>
                                                <ul>
                                                    <li><a href="#">coats</a></li>
                                                    <li><a href="#">T-shirts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Lingerie</a>
                                                <ul>
                                                    <li><a href="#">Bands</a></li>
                                                    <li><a href="#">Furniture</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Foorwear</a>
                                        <ul>
                                            <li><a href="#">footwear men</a>
                                                <ul>
                                                    <li><a href="#">gifts</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">footwear women</a>
                                                <ul>
                                                    <li><a href="#">boots</a></li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Jewellery</a>
                                        <ul>
                                            <li><a href="#">Rings</a></li>
                                        </ul>
                                    </li>
                                    <li><a href="shop.html">Accessories</a></li>
                                    <li><a href="#">Pages</a>
                                        <ul>
                                            <li><a href="about-us.html">About us</a></li>
                                            <li><a href="blog.html">Blog</a></li>
                                            <li><a href="blog-details.html">Blog Details</a></li>
                                            <li><a href="cart.html">Cart</a></li>
                                            <li><a href="checkout.html">Checkout</a></li>
                                            <li><a href="contact.html">Contact</a></li>
                                            <li><a href="my-account.html">My account</a></li>
                                            <li><a href="shop.html">Shop</a></li>
                                            <li><a href="shop-list.html">Shop list</a></li>
                                            <li><a href="single-product.html">Single Shop</a></li>
                                            <li><a href="wishlist.html">Wishlist</a></li>
                                            <li><a href="login.html">login page</a></li>
                                            <li><a href="register.html">register page</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header area end -->
    <!-- slider area start -->
    <div class="slider-area home2">
        <div class="bend niceties preview-2">
            <div id="nivoslider" class="slides">
                <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/slider/slider-3.jpg" alt="" title="#slider-direction-1" />
                <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/slider/slider-4.jpg" alt="" title="#slider-direction-2" />
            </div>
            <!-- direction 1 -->
            <div id="slider-direction-1" class="t-cn slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb slider-1">
                    <div class="title-container s-tb-c title-compress">
                        <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/slider/slider-logo.png" alt="">
                        <h1 class="title1">Academy of sport</h1>
                        <h2 class="title2">sports center james</h2>
                        <h3 class="title3">Lorem Ipsum is simply dummy text of the printing</h3>
                        <a href="#"><span>read more</span></a>
                    </div>
                </div>
            </div>
            <!-- direction 2 -->
            <div id="slider-direction-2" class="slider-direction">
                <div class="slider-progress"></div>
                <div class="slider-content t-lfl s-tb slider-2">
                    <div class="title-container s-tb-c">
                        <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/slider/slider-logo.png" alt="">
                        <h1 class="title1">Academy of sport</h1>
                        <h2 class="title2">sports center james</h2>
                        <h3 class="title3">Lorem Ipsum is simply dummy text of the printing</h3>
                        <a href="#"><span>read more</span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- slider area end -->
    <!-- service area start -->
    <div class="service-area">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="single-service" style="visibility: hidden;">
                        <div class="sirvice-img">
                            <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/service/icon-1.png" alt="">
                        </div>
                        <div class="service-info">
                            <h3>FREE SHIPPING</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="single-service">
                        <div class="sirvice-img">
                            <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/service/icon-1.png" alt="">
                        </div>
                        <div class="service-info">
                            <h3>FREE SHIPPING</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4" style="visibility: hidden;">
                    <div class="single-service">
                        <div class="sirvice-img">
                            <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/service/icon-1.png" alt="">
                        </div>
                        <div class="service-info">
                            <h3>FREE SHIPPING</h3>
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- service area end -->
    <!-- sell area start -->
    <div class="sell-area home2">
        <div class="sell-heading">
            <h2>Best seller</h2>
            <p>Subcribe to the Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat</p>
        </div>
        <div class="sell-slider">

            <?php foreach ($data['random_5sp'] as $rd_5sp) : ?>
                <div class="single-product">
                    <div class="level-pro-new">
                        <span>new</span>
                    </div>
                    <div class="product-img">
                        <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/<?= $rd_5sp['id'] ?>">
                            <img src="/duan1_Nhom12_WD18202/public/img/<?= $rd_5sp['anh'] ?>" alt="" class="">
                        </a>
                    </div>
                    <div class="actions">
                        <form action="http://localhost/duan1_Nhom12_WD18202/khachhang/Theme" style="width: 250px" method="post">
                            <input type="hidden" name="product_id" value="<?= $rd_5sp['id'] ?>">
                            <button type="submit" class="cart-btn" name="btn_addToCart" title="Add to cart">add to cart</button>
                        </form>
                        <ul class="add-to-link">
                            <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                            <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                        </ul>
                    </div>
                    <div class="product-price">
                        <div class="product-name">
                            <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/<?= $rd_5sp['id'] ?>" title="Fusce aliquam"><?= $rd_5sp['ten_sanpham'] ?></a>
                        </div>
                        <div class="price-rating">
                            <span>$<?= $rd_5sp['gia'] ?></span>
                            <div class="ratings">
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star"></i>
                                <i class="fa fa-star-half-o"></i>
                            </div>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
    <!-- sell area end -->
    <!-- feature products area start -->
    <div class="features-product home2">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="product-title">
                        <h2>featured products</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="features-home2-slider">

                    <?php foreach ($data['random_new8sp'] as $rd_8sp) : ?>
                        <div class="col">
                            <div class="single-product">
                                <div class="level-pro-new">
                                    <span>new</span>
                                </div>
                                <div class="product-img">
                                    <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/<?= $rd_8sp['id'] ?>">
                                        <img src="/duan1_Nhom12_WD18202/public/img/<?= $rd_8sp['anh'] ?>" alt="" class="">
                                    </a>
                                </div>
                                <div class="actions">
                                    <form action="http://localhost/duan1_Nhom12_WD18202/khachhang/Theme" style="width: 250px" method="post">
                                        <input type="hidden" name="product_id" value="<?= $rd_8sp['id'] ?>">
                                        <button type="submit" class="cart-btn" name="btn_addToCart" title="Add to cart">add to cart</button>
                                    </form>
                                    <ul class="add-to-link">
                                        <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                        <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product-price">
                                    <div class="product-name">
                                        <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/<?= $rd_8sp['id'] ?>" title="Fusce aliquam"><?= $rd_8sp['ten_sanpham'] ?></a>
                                    </div>
                                    <div class="price-rating">
                                        <span>$<?= $rd_8sp['gia'] ?></span>
                                        <div class="ratings">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    <?php endforeach ?>

                </div>
            </div>
        </div>
    </div>
    <!-- feature products area end -->
    <!-- sell off product area start -->
    <div class="sell-off-product home2">
        <div class="product-title">
            <h2>sale off</h2>
        </div>
        <div class="container-fluid">
            <div class="sell-off-slider">

                <?php foreach ($data['select_4sp'] as $slt_4sp) : ?>
                    <div class="single-product">
                        <div class="level-pro-sale">
                            <span>sale</span>
                        </div>
                        <div class="product-img">
                            <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/<?= $slt_4sp['id'] ?>">
                                <img src="/duan1_Nhom12_WD18202/public/img/<?= $slt_4sp['anh'] ?>" alt="" class="">
                            </a>
                        </div>
                        <div class="actions">
                            <form action="http://localhost/duan1_Nhom12_WD18202/khachhang/Theme" style="width: 250px" method="post">
                                <input type="hidden" name="product_id" value="<?= $slt_4sp['id'] ?>">
                                <button type="submit" class="cart-btn" name="btn_addToCart" title="Add to cart">add to cart</button>
                            </form>
                            <ul class="add-to-link">
                                <li><a class="modal-view" data-target="#productModal" data-bs-toggle="modal" href="#"> <i class="fa fa-search"></i></a></li>
                                <li><a href="#"> <i class="fa fa-heart-o"></i></a></li>
                                <li><a href="#"> <i class="fa fa-refresh"></i></a></li>
                            </ul>
                        </div>
                        <div class="product-price">
                            <div class="product-name">
                                <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_chitietSP/<?= $slt_4sp['id'] ?>" title="Fusce aliquam"><?= $slt_4sp['ten_sanpham'] ?></a>
                            </div>
                            <div class="price-rating">
                                <span>$<?= $slt_4sp['gia'] ?></span>
                                <div class="ratings">
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star"></i>
                                    <i class="fa fa-star-half-o"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>

            </div>
        </div>
    </div>
    <!-- sell off product area end -->
    <!-- new products area start -->

    <!-- new products area end -->
    <!-- another banner area start -->
    <div class="another-banner-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="big-banner">
                        <a href="#">
                            <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/banner/banner-10.jpg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- another banner area end -->
    <!-- blog area start -->

    <!-- blog area end -->
    <!-- newsleter area start -->
    <div class="newsleter-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="newsleter">
                        <h3>newsletter</h3>
                        <p>Subscribe to the james mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <div class="Subscribe">
                            <form action="#">
                                <input type="text" title="Sign up">
                                <button type="submit" title="Subscribe">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="follow">
                        <h3>follow</h3>
                        <p>Subscribe to the james mailing list to receive updates on new arrivals, special offers and other discount information.</p>
                        <ul class="follow-link">
                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-rss"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- newsleter area end -->
    <!-- footer top area start -->
    <div class="footer-top-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-contact">
                        <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/logo-white.png" alt="">
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</p>
                        <ul class="address">
                            <li>
                                <span class="fa fa-fax"></span>
                                (800) 123 456 789
                            </li>
                            <li>
                                <span class="fa fa-phone"></span>
                                (800) 123 456 789
                            </li>
                            <li>
                                <span class="fa fa-envelope-o"></span>
                                admin@bootexperts.com
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-tweets">
                        <div class="footer-title">
                            <h3>Latest tweets</h3>
                        </div>
                        <div class="twitter-feed">
                            <div class="twitter-article">
                                <div class="twitter-img">
                                    <a href="#">
                                        <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/twitter/twitter-1.png" alt="">
                                    </a>
                                </div>
                                <div class="twitter-text">
                                    <p>Raboda Fashion #Magento #Theme comes up with pure white and grey, which great show your products. Check it: </p>
                                    <a href="#">https://t.co/iu0OYBwti8</a>
                                    <div class="twitter-time">
                                        <a href="#">16h</a>
                                    </div>
                                </div>
                            </div>
                            <div class="twitter-article">
                                <div class="twitter-img">
                                    <a href="#">
                                        <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/twitter/twitter-1.png" alt="">
                                    </a>
                                </div>
                                <div class="twitter-text">
                                    <p>Raboda Fashion #Magento #Theme comes up with pure white and grey, which great show your products. Check it: </p>
                                    <a href="#">https://t.co/iu0OYBwti8</a>
                                    <div class="twitter-time">
                                        <a href="#">16h</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-support">
                        <div class="footer-title">
                            <h3>Our support</h3>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="#">Sitemap</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Your Account</a></li>
                                <li><a href="#">Advanced Search</a></li>
                                <li><a href="contact.html">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-info">
                        <div class="footer-title">
                            <h3>Our information</h3>
                        </div>
                        <div class="footer-menu">
                            <ul>
                                <li><a href="about-us.html">About Us</a></li>
                                <li><a href="#">Customer Service</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Site Map</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer top area end -->
    <!-- footer area start -->
    <footer class="footer-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="footer-copyright">
                        <p>Copyright &copy; 2022 <a href="#"> Bootexperts</a>. All Rights Reserved</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="payment-icon">
                        <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/payment.png" alt="">
                    </div>
                </div>
            </div>
        </div>
        <a href="#" id="scrollUp"><i class="fa fa fa-arrow-up"></i></a>
    </footer>
    <!-- footer area end -->
    <!-- quickview product start -->
    <div id="quickview-wrapper">
        <!-- Modal -->
        <div class="modal fade" id="productModal" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-bs-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-product">
                            <div class="product-images">
                                <div class="main-image images">
                                    <img alt="" src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/product/quick-view.jpg">
                                </div>
                            </div>

                            <div class="product-info">
                                <h1>Diam quis cursus</h1>
                                <div class="price-box">
                                    <p class="price"><span class="special-price"><span class="amount">$132.00</span></span></p>
                                </div>
                                <a href="shop.html" class="see-all">See all features</a>
                                <div class="quick-add-to-cart">
                                    <form method="post" class="cart">
                                        <div class="numbers-row">
                                            <input type="number" id="french-hens" value="3">
                                        </div>
                                        <button class="single_add_to_cart_button" type="submit">Add to cart</button>
                                    </form>
                                </div>
                                <div class="quick-desc">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                </div>
                                <div class="share-post">
                                    <div class="share-title">
                                        <h3>share this product</h3>
                                    </div>
                                    <div class="share-social">
                                        <ul>
                                            <li><a href="#"> <i class="fa fa-facebook"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-twitter"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-pinterest"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-google-plus"></i> </a></li>
                                            <li><a href="#"> <i class="fa fa-linkedin"></i> </a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- quickview product start -->
    <!-- jquery
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/jquery-price-slider.js"></script>
    <!-- nivoslider JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/lib/js/jquery.nivo.slider.js"></script>
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/lib/home.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/owl.carousel.min.js"></script>
    <!-- elevatezoom JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/jquery.elevatezoom.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/jquery.scrollUp.min.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/main.js"></script>
</body>

<!-- Mirrored from htmldemo.net/james/james/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 10:20:04 GMT -->

</html>