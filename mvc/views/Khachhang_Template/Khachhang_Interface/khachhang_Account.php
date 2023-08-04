<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from htmldemo.net/james/james/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 10:19:58 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>My account || James </title>
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
    <script src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/js/vendor/modernizr-2.8.3.min.js"></script>
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
        <div class="mainmenu-area home2 product-items">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3">
                        <div class="logo">
                            <a href="index.html">
                                <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/logo.png" alt="">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-9">
                        <div class="mainmenu">
                            <nav>
                                <ul>
                                    <li><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/">Home</a></li>

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
    <!-- my account area start -->
    <div class="account-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="location">
                        <ul>
                            <li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
                            <li><strong> my account</strong></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-3">
                    <div class="product-sidebar">
                        <div class="sidebar-title">
                            <h2>Shopping Options</h2>
                        </div>
                        <div class="single-sidebar">
                            <div class="single-sidebar-title">
                                <h3>Category</h3>
                            </div>
                            <div class="single-sidebar-content">
                                <ul>
                                    <li><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_sanPhamByGender/<?= $data['danhmuc_men']['id_gioitinh'] ?>"><?= $data['danhmuc_men']['ten_danhmuc'] ?></a></li>
                                    <li><a href="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_sanPhamByGender/<?= $data['danhmuc_women']['id_gioitinh'] ?>"><?= $data['danhmuc_women']['ten_danhmuc'] ?></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="banner-left">
                            <a href="#">
                                <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/product/banner_left.jpg" alt="">
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="my-account-accordion">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingOne">
                                    <h4 class="panel-title">
                                        <a role="button" data-bs-toggle="collapse" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <i class="fa fa-list-ol"></i>
                                            Order history and details
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne" data-bs-parent="#accordion">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                <div class="account-title">
                                                    <h4>Here are the orders you've placed since your account was created.</h4>
                                                </div>
                                                <div class="order-history">
                                                    <table class="table text-center">
                                                        <thead>
                                                            <tr>
                                                                <th scope="col">Full name</th>
                                                                <th scope="col">Phonenumber</th>
                                                                <th scope="col">Address</th>
                                                                <th scope="col">Grand total</th>
                                                                <th scope="col">Date</th>
                                                                <th scope="col">Status</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>
                                                            <?php foreach ($data['bill'] as  $bill) : ?>
                                                                <tr>
                                                                    <td><?= $bill['tenkh'] ?></td>
                                                                    <td><?= $bill['sdt'] ?></td>
                                                                    <td><?= $bill['diachi'] ?></td>
                                                                    <td>$<?= $bill['total'] ?></td>
                                                                    <td><?= $bill['ngay_tao'] ?></td>
                                                                    <td><?= $bill['status'] ?></td>
                                                                </tr>
                                                            <?php endforeach ?>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="headingFour">
                                    <h4 class="panel-title">
                                        <a class="collapsed" role="button" data-bs-toggle="collapse" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                                            <i class="fa fa-user"></i>
                                            Your personal information
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour" data-bs-parent="#accordion">
                                    <div class="panel-body">
                                        <div class="col-md-12">
                                            <div class="delivery-details">
                                                <form action="http://localhost/duan1_Nhom12_WD18202/khachhang/updateKhachhangProfileFeature?id=<?= $data['role']['id'] ?>" enctype="multipart/form-data" method="post">
                                                    <div class="list-style">
                                                        <div class="account-title">
                                                            <h4>Please be sure to update your personal information if it has changed. </h4>
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Your Avatar <em>*</em> </label>
                                                            <img style="border-radius: 5px;" src="/duan1_Nhom12_WD18202/public/img/<?= $data['role']['anh'] ?>" width="200" alt="">
                                                            <input type="hidden" name="img" value="<?= $data['role']['anh'] ?>">
                                                            <br>
                                                            <br>
                                                            <label>Change avatar <em>*</em> </label>
                                                            <input type="file" name="img">
                                                            <p style="color: red;"><?= $data['errors']['img'] ?? '' ?></p>
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Full Name <em>*</em> </label>
                                                            <input type="text" name="fullname" value="<?= $data['role']['tenkh'] ?>" placeholder="Full Name">
                                                            <p style="color: red;"><?= $data['errors']['fullname'] ?? '' ?></p>
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Phonenumber <em>*</em> </label>
                                                            <input type="text" name="phonenumber" value="<?= $data['role']['sdt'] ?>" placeholder="Phonenumber">
                                                            <p style="color: red;"><?= $data['errors']['phonenumber'] ?? '' ?></p>
                                                        </div>

                                                        <div class="form-name">
                                                            <label>Email <em>*</em> </label>
                                                            <input type="email" name="email" value="<?= $data['role']['email'] ?>" placeholder="Email">
                                                            <p style="color: red;"><?= $data['errors']['email'] ?? '' ?></p>
                                                        </div>

                                                        <div class="form-name">
                                                            <label>Address <em>*</em> </label>
                                                            <input type="text" name="address" value="<?= $data['role']['diachi'] ?>" placeholder="Address">
                                                            <p style="color: red;"><?= $data['errors']['address'] ?? '' ?></p>
                                                        </div>

                                                        <div class="form-name">
                                                            <label>City <em>*</em> </label>
                                                            <input type="text" name="city" value="<?= $data['role']['thanhpho'] ?>" placeholder="City">
                                                        </div>
                                                        <div class="form-name">
                                                            <label>Post Code <em>*</em> </label>
                                                            <input type="number" name="post_code" value="<?= $data['role']['postcode'] ?>" placeholder="Post Code">
                                                        </div>

                                                        <div class="save-button">
                                                            <button type="submit" name="btn_updateProfileShop">Update</button>
                                                        </div>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="account-button">
                            <div class="home"> <a href="index.html"> home</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- my account area end -->
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

<!-- Mirrored from htmldemo.net/james/james/my-account.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 10:19:58 GMT -->

</html>