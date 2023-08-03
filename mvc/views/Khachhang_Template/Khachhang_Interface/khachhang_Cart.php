<!doctype html>
<html class="no-js" lang="">

<!-- Mirrored from htmldemo.net/james/james/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 11 Jul 2023 10:19:59 GMT -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title> Cart || James </title>
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
                                                    <input type="text" value="<?php if(isset($_GET['search'])){ echo $_GET['search']; } ?>" name="search">
                                                    <button type="submit"> <i class="fa fa-search"></i> </button>
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">
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
                                            <span><?php
                                                    if (isset($data['count_sp'][0]['COUNT(sanpham.id)'])) {
                                                        echo $data['count_sp'][0]['COUNT(sanpham.id)'];
                                                    } else {
                                                        echo $data['count_sp'][0] = 0;;
                                                    }
                                                    ?></span> </a>
                                        <div class="cart-info">
                                            <ul>
                                                <?php
                                                if (isset($_SESSION['product']['id']) && is_array($_SESSION['product']['id'])) {
                                                    $ids = $_SESSION['product']['id'];
                                                }
                                                ?>
                                                <?php foreach ($data['select_session_limit'] as $select) : ?>
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
                                    <li><a href="index.html">Home</a></li>

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
    <!-- cart item area start -->
    <form action="http://localhost/duan1_Nhom12_WD18202/khachhang/khachhang_checkout" method="post">
        <div class="shopping-cart" style="padding: 0;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="location">
                            <ul>
                                <li><a href="index.html" title="go to homepage">Home<span>/</span></a> </li>
                                <li><strong> Shopping cart</strong></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <h4 class="text-center" style="color: red;">
                    <?php
                    if (isset($_GET['msg'])) {
                        echo htmlspecialchars($_GET['msg']);
                    }
                    ?>
                </h4>

                <div class="row">
                    <div class="col-md-12">
                        <div class="table-responsive">
                            <table class="table-bordered table table-hover">
                                <thead>
                                    <tr>
                                        <th class="">ID</th>
                                        <th class="cart-product-name">Product Name</th>
                                        <th class="cart-item-img">Image</th>
                                        <th class="unit-price">Price</th>
                                        <th class="quantity">Qty</th>
                                        <th class="subtotal">Total</th>
                                        <th class="remove-icon"></th>
                                    </tr>
                                </thead>
                                <tbody class="text-center">
                                    <?php
                                    if (isset($_SESSION['product']['id']) && is_array($_SESSION['product']['id'])) {
                                        $ids = $_SESSION['product']['id'];
                                    }
                                    ?>

                                    <?php foreach ($data['select_session'] as $index => $select) : ?>
                                        <tr>
                                            <td><?= $select['id'] ?>
                                                <input type="hidden" value="<?= $select['id'] ?>" name="products[<?= $index ?>][id]">
                                            </td>
                                            <td class="cart-product-name">
                                                <a href="single-product.html"><?= $select['ten_sanpham'] ?></a>
                                                <input type="hidden" value="<?= $select['ten_sanpham'] ?>" name="products[<?= $index ?>][ten_sanpham]">
                                            </td>
                                            <td class="cart-item-img">
                                                <a href="single-product.html">
                                                    <img src="/duan1_Nhom12_WD18202/public/img/<?= $select['anh'] ?>" width="200" alt="">
                                                    <input type="hidden" value="<?= $select['anh'] ?>" name="products[<?= $index ?>][img]">
                                                </a>
                                            </td>

                                            <td class="unit-price">
                                                <span>$</span>
                                                <input type="number" class="price-input" value="<?= $select['gia'] ?>" style="border: none; background: none;" readonly name="products[<?= $index ?>][price]">
                                            </td>
                                            <td class="quantity">
                                                <span></span>
                                                <?php
                                                if (isset($ids[$select['id']])) {
                                                    $quantity = $ids[$select['id']];
                                                } else {
                                                    $quantity = 1;
                                                }
                                                ?>
                                                <input type="number" class="quantity-input" min="1" value="<?= $quantity ?>" name="products[<?= $index ?>][quantity]">
                                            </td>
                                            <td class="subtotal">
                                                <span>$</span>
                                                <input type="number" class="subtotal-input" value="<?= $select['gia'] ?>" style="width: 100px; border: none; background: none;" readonly name="products[<?= $index ?>][total_price]">
                                            </td>
                                            <td class="remove-icon">
                                                <a href="/duan1_Nhom12_WD18202/khachhang/khachhang_cart&remove=<?= $select['id'] ?>">
                                                    <img src="/duan1_Nhom12_WD18202/public/khachhang/htmldemo.net/james/james/img/cart/btn_remove.png" alt="">
                                                </a>
                                            </td>
                                        </tr>
                                    <?php endforeach ?>
                                </tbody>
                            </table>

                            <div class="shopping-button">
                                <div class="continue-shopping">
                                    <a href="http://localhost/duan1_Nhom12_WD18202/khachhang"><button type="button">continue shopping</button></a>
                                </div>
                                <div class="shopping-cart-left">
                                    <button type="submit" name="btn_updateCart">Update Shopping Cart</button>
                                    <a href="http://localhost/duan1_Nhom12_WD18202/khachhang/clearCart" method="post">
                                        <button type="button" name="btn_clearAll">Clear Shopping Cart</button>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4">

                    </div>
                    <div class="col-md-4" style="position: relative; bottom: 15px;">
                        <div class="totals">
                            <h3>Grand Total <span id="grandTotalSpan">$0.00</span></h3>
                            <input type="hidden" id="grandTotalInput" value="0.00" readonly name="grand_price">
                            <div class="shopping-button">
                                <button type="submit" name="btn_checkout">proceed to checkout</button>
                            </div>
                            <a href="#">Checkout with Multiple Addresses</a>
                        </div>
                    </div>
                </div>
            </div>
    </form>
    <!-- cart item area end -->
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

<script>
    // JavaScript code here
    const priceInputs = document.querySelectorAll('.price-input');
    const quantityInputs = document.querySelectorAll('.quantity-input');
    const subtotalInputs = document.querySelectorAll('.subtotal-input');

    if (priceInputs.length !== quantityInputs.length || priceInputs.length !== subtotalInputs.length) {
        console.error('Number of price inputs, quantity inputs, or subtotal inputs does not match.');
    } else {
        priceInputs.forEach(input => {
            input.addEventListener('change', updateSubtotal);
        });

        quantityInputs.forEach(input => {
            input.addEventListener('change', updateSubtotal);
        });
    }

    function updateSubtotal() {
        const productRows = document.querySelectorAll('tbody tr');
        let total = 0;

        productRows.forEach((row, index) => {
            const priceInput = row.querySelector('.price-input');
            const quantityInput = row.querySelector('.quantity-input');
            const subtotalInput = row.querySelector('.subtotal-input');

            const price = parseFloat(priceInput?.value || 0);
            const quantity = parseFloat(quantityInput?.value || 0);

            if (subtotalInput) {
                const subtotal = price * quantity;
                subtotalInput.value = subtotal.toFixed(2);
                total += subtotal;
            }
        });

        const grandTotalSpan = document.getElementById('grandTotalSpan');
        const grandTotalInput = document.getElementById('grandTotalInput');

        grandTotalSpan.textContent = "$" + total.toFixed(2);
        grandTotalInput.value = total.toFixed(2);
    }

    const removeButtons = document.querySelectorAll('.remove-icon a');
    removeButtons.forEach(button => {
        button.addEventListener('click', removeProduct);
    });

    function removeProduct(event) {}

    updateSubtotal();
</script>

</html>