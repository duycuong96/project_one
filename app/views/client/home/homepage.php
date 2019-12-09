<!doctype html>
<div class="no-js" lang="zxx">

    <!-- Mirrored from preview.freethemescloud.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:04:25 GMT -->

    <head>
        <meta charset="utf-8">
        <base href="<?= BASE_URL ?>">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>MeGo - Thuê xe du lịch tự lái</title>
        <meta name="description" content="Live Preview Of Oswan eCommerce HTML5 Template">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="./public/assets/img/logo/icon.png">
        <!-- link icon -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <!-- all css here -->
        <link rel="stylesheet" href="./public/assets/css/bootstrap.min.css">
        <link rel="stylesheet" href="./public/assets/css/animate.css">
        <link rel="stylesheet" href="./public/assets/css/owl.carousel.min.css">
        <link rel="stylesheet" href="./public/assets/css/chosen.min.css">
        <link rel="stylesheet" href="./public/assets/css/icofont.css">
        <link rel="stylesheet" href="./public/assets/css/themify-icons.css">
        <link rel="stylesheet" href="./public/assets/css/font-awesome.min.css">
        <link rel="stylesheet" href="./public/assets/css/meanmenu.min.css">
        <link rel="stylesheet" href="./public/assets/css/bundle.css">
        <link rel="stylesheet" href="./public/assets/css/style.css">
        <link rel="stylesheet" href="./public/assets/css/responsive.css">
        <script src="./public/assets/js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <div class="wrapper">

            <!-- header start -->
            <header>
                <div class="header-area transparent-bar ptb-55">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-4 col-4">
                                <div class="logo-small-device">
                                    <a href="<?= BASE_URL ?>"><img alt="" src="./public/assets/img/logo/megologo.png"></a>
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-8 col-8">
                                <div class="header-contact-menu-wrapper pl-45">
                                    <div class="header-contact">
                                        <p>LIÊN HỆ VỚI CHÚNG TÔI +01254 265 987</p>
                                    </div>
                                    <div class="menu-wrapper text-center">
                                        <button class="menu-toggle">
                                            <img class="s-open" alt="" src="./public/assets/img/icon-img/menu.png">
                                            <img class="s-close" alt="" src="./public/assets/img/icon-img/menu-close.png">
                                        </button>
                                        <div class="main-menu">
                                            <nav>
                                                <ul>
                                                    <li><a href="<?= BASE_URL ?>">Trang chủ</a></li>
                                                    <li><a href="categories">loại xe</a>
                                                        <ul>
                                                            <?php
                                                            foreach ($cate as $cates) { ?>
                                                                <li><a href="<?= BASE_URL . 'category?id=' . $cates->id ?>"><?= $cates->name ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li><a href="">Hãng xe</a>
                                                        <ul>
                                                            <?php
                                                            foreach ($maker as $makers) { ?>
                                                                <li><a href="<?= BASE_URL . 'maker?id=' . $makers->id ?>"><?= $makers->name ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li><a href="">Địa điểm thuê xe</a>
                                                        <ul>
                                                            <?php
                                                            foreach ($loca as $locas) { ?>
                                                                <li><a href=""><?= $locas->name ?></a></li>
                                                            <?php } ?>
                                                        </ul>
                                                    </li>
                                                    <li><a href="<?= BASE_URL ?>contact">Liên hệ</a></li>
                                                </ul>
                                            </nav>

                                        </div>
                                    </div>
                                </div>
                                <div class="header-cart cart-small-device">
                                    <?php if ($_SESSION['AUTH'] != null) { ?>
                                        <button class="icon-cart">
                                            <i class="ti-shopping-cart"></i>
                                            <span class="count-style">02</span>
                                            <span class="count-price-add">$295.95</span>
                                        </button>
                                    <?php } ?>
                                </div>
                            </div>
                            <div class="mobile-menu-area col-12">
                                <div class="mobile-menu">
                                    <nav id="mobile-menu-active">
                                        <ul class="menu-overflow">
                                            <li><a href="index.html">HOME</a></li>
                                            <li><a href="#">pages</a>
                                                <ul>
                                                    <li><a href="about-us.html">about us</a></li>
                                                    <li><a href="cart.html">cart page</a></li>
                                                    <li><a href="checkout.html">checkout</a></li>
                                                    <li><a href="wishlist.html">wishlist</a></li>
                                                    <li><a href="login-register.html">login</a></li>
                                                    <li><a href="contact.html">contact</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">shop</a>
                                                <ul>
                                                    <li><a href="#">shop grid</a>
                                                        <ul>
                                                            <li><a href="shop-grid-2-col.html"> grid 2 column</a></li>
                                                            <li><a href="shop.html"> grid 3 column</a></li>
                                                            <li><a href="shop-grid-4-col.html"> grid 4 column</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">shop list</a>
                                                        <ul>
                                                            <li><a href="shop-list.html"> list 1 column</a></li>
                                                            <li><a href="shop-list-2-col.html"> list 2 column</a></li>
                                                            <li><a href="shop-list-box.html"> list box style</a></li>
                                                        </ul>
                                                    </li>
                                                    <li><a href="#">product details</a>
                                                        <ul>
                                                            <li><a href="product-details.html">tab style</a></li>
                                                            <li><a href="product-details-sticky.html">sticky style</a></li>
                                                            <li><a href="product-details-gallery.html">gallery style</a></li>
                                                            <li><a href="product-details-fixed-img.html">fixed image style</a></li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li><a href="#">BLOG</a>
                                                <ul>
                                                    <li><a href="blog.html">blog page</a></li>
                                                    <li><a href="blog-sidebar.html">blog sidebar</a></li>
                                                    <li><a href="blog-sidebar-2.html">blog sidebar 2</a></li>
                                                    <li><a href="blog-details.html">blog details</a></li>
                                                </ul>
                                            </li>
                                            <li><a href="contact.html"> Contact us</a></li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-cart-wrapper">
                        <div class="header-cart">
                            <button class="icon-cart">
                                <a title="Giỏ hàng" href="<?= BASE_URL ?>cart">
                                    <i class="ti-shopping-cart"></i>
                                    <span class="count-style"><?= $total_car = getTotalProductInCart() ?></span>
                                    <span class="count-price-add">$ <?= $total = getCartTotalPrice() ?></span>
                                </a>
                                <a title="<?= $_SESSION['AUTH']['name'] ?>" href="<?= BASE_URL ?>account">
                                    <i style="float: right; margin-left:15px" style="margin-left: 30px;" class="ti-user"></i>
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </header>
            <div class="overview-area pt-135" style="margin-top:40px">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-content">

                                <h3>CÙNG BẠN TRÊN MỌI HÀNH TRÌNH</h3>
                                <br>

                                <div class="">
                                    <div class="col-md-8">
                                        <div class="car-rental">
                                            <form>
                                                <div class="form-group">
                                                    <label for="">Chọn địa điểm</label>
                                                    <select class="form-control">
                                                        <option value="" hidden="">Chọn điểm nhận xe</option>
                                                        <?php foreach ($loca as $location) { ?>
                                                            <option value="<?= $location->id ?>"><?= $location->name ?></option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Ngày nhận xe</label>
                                                    <input class="form-control" type="date">
                                                </div>
                                                <div class="form-group">
                                                    <label for="">Ngày trả xe</label>
                                                    <input class="form-control" type="date">
                                                </div>
                                                <div class="form-group">
                                                    <button class="btn-lg btn-warning btn-block " type="submit">TÌM XE</button>
                                                </div>
                                            </form>
                                        </div>


                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12">
                            <div class="overview-img">
                                <img class="tilter" src="./public/assets/img/banner/banner-1.png" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="banner-area pt-135 pb-120">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>THUÊ XE MÁY TẠI</h2>
                        <hr>
                    </div>
                    <div class="row">
                        <?php foreach ($loca as $locas) { ?>
                            <div class="col-md-4">
                                <div class="banner-wrapper mb-30">
                                    <a href="#"><img src="<?= $locas->image ?>" alt="image"></a>
                                    <div class="banner-content">
                                        <h2><?= $locas->name ?></h2>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="product-area pb-190">
                <div class="container">
                    <div class="section-title text-center mb-50">
                        <h2>XE DÀNH CHO BẠN</h2>
                    </div>
                    <div class="product-tab-list text-center mb-80 nav product-menu-mrg" role="tablist">
                        <a class="active" href="#home1" data-toggle="tab">
                            <h4>HONDA</h4>
                        </a>
                        <a href="#home2" data-toggle="tab">
                            <h4>YAMAHA</h4>
                        </a>
                    </div>
                    <div class="tab-content jump">
                        <div class="tab-pane active" id="home1">
                            <div class="product-slider-active owl-carousel">
                                <?php foreach ($cars as $car) { ?>
                                    <div class="product-wrapper">
                                        <div class="product-img">
                                            <a href="<?= BASE_URL . 'detail?id=' . $car->id ?>">
                                                <img src="<?= IMAGE_URL . $car->feature_image ?>" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li><?= $car->getCateName(); ?></li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Add To Cart" href="<?= BASE_URL . 'add-cart?id=' . $car->id ?>">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="<?= BASE_URL . 'detail?id=' . $car->id ?>"><?= $car->name ?></a></h4>
                                                    <span><?= $car->getLocaName() ?></span>
                                                </div>
                                                <div class="product-price">
                                                    <span><?= $car->price ?> đ/ngày</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                <?php } ?>
                            </div>
                        </div>
                        <div class="tab-pane" id="home2">
                            <div class="product-slider-active owl-carousel">
                                <?php foreach ($cars as $car) { ?>
                                    <div class="product-wrapper mb-30">
                                        <div class="product-img">
                                            <a href="<?= BASE_URL . 'detail?id=' . $car->id ?>">
                                                <img src="<?= IMAGE_URL . $car->feature_image ?>" alt="">
                                            </a>
                                            <div class="product-item-dec">
                                                <ul>
                                                    <li>2018</li>
                                                    <li>MANUAL</li>
                                                    <li>PETROL</li>
                                                    <li>250 CC</li>
                                                </ul>
                                            </div>
                                            <div class="product-action">
                                                <a class="action-plus-2" title="Đặt hàng" href="<?= BASE_URL . 'add-cart?id=' . $car->id ?>">
                                                    <i class=" ti-shopping-cart"></i>
                                                </a>
                                                <a class="action-cart-2" title="Wishlist" href="#">
                                                    <i class=" ti-heart"></i>
                                                </a>
                                                <a class="action-reload" title="Quick View" data-toggle="modal" data-target="#exampleModal" href="#">
                                                    <i class=" ti-zoom-in"></i>
                                                </a>
                                            </div>
                                            <div class="product-content-wrapper">
                                                <div class="product-title-spreed">
                                                    <h4><a href="<?= BASE_URL . 'detail?id=' . $car->id ?>"><?= $car->name ?></a></h4>
                                                    <span>150 CC</span>
                                                </div>
                                                <div class="product-price">
                                                    <span>200,000 đ/ngày</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter-area">
            <div class="container">
                <div class="newsletter-wrapper-all theme-bg-2">
                    <div class="row">
                        <div class="col-lg-5 col-12 col-md-12">
                            <div class="newsletter-img bg-img" style="background-image: url(./public/assets/img/banner/newsletter-bg.png)">
                                <img alt="image" src="./public/assets/img/team/newsletter-img.png">
                            </div>
                        </div>
                        <div class="col-lg-7 col-12 col-md-12">
                            <div class="newsletter-wrapper text-center">
                                <div class="newsletter-title">
                                    <h3>ĐĂNG KÝ NHẬN TIN MỚI NHẤT</h3>
                                </div>
                                <div id="mc_embed_signup" class="subscribe-form">
                                    <form action="" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                                        <div id="mc_embed_signup_scroll" class="mc-form">
                                            <input type="email" value="" name="EMAIL" class="email" placeholder="Nhập email ..." required>
                                            <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                                            <div class="mc-news" aria-hidden="true"><input type="text" name="b_6bbb9b6f5827bd842d9640c82_05d85f18ef" tabindex="-1" value=""></div>
                                            <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer>
            <div class="footer-top pt-210 pb-98 theme-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="footer-widget mb-30">
                                <div class="footer-logo">
                                    <a href="<?= BASE_URL ?>">
                                        <img src="./public/assets/img/logo/megologo.png" alt="">
                                    </a>
                                </div>
                                <div class="footer-about">
                                    <p><span>MEGO</span> là website trực tuyến cho thuê và chia sẻ xe máy tự lái dành cho các khách du lịch trong nước </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="footer-widget mb-30 pl-60">
                                <div class="footer-widget-title">
                                    <h3>Tìm hiểu thêm</h3>
                                </div>
                                <div class="quick-links">
                                    <ul>
                                        <li><a href="">Giới thiệu</a></li>
                                        <li><a href="">Liên hệ</a></li>
                                        <li><a href="">Bảng giá</a></li>
                                        <li><a href="">Chính sách</a></li>
                                        <li><a href="">Blog</a></li>
                                        <li><a href="">Hướng dẫn</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-12">
                            <div class="footer-widget mb-30">
                                <div class="footer-widget-title">
                                    <h3>Liên hệ</h3>
                                </div>
                                <div class="food-info-wrapper">
                                    <div class="food-address">
                                        <div class="food-info-title">
                                            <span>Địa chỉ</span>
                                        </div>
                                        <div class="food-info-content">
                                            <p>123, Nguyễn Trãi, Thanh Xuân, Hà Nội</p>
                                        </div>
                                    </div>
                                    <div class="food-address">
                                        <div class="food-info-title">
                                            <span>Số điện thoại</span>
                                        </div>
                                        <div class="food-info-content">
                                            <p>+090 12568 369 987</p>
                                            <p>+090 12568 369 987</p>
                                        </div>
                                    </div>
                                    <div class="food-address">
                                        <div class="food-info-title">
                                            <span>Email</span>
                                        </div>
                                        <div class="food-info-content">
                                            <a href="#">info@mego.vn</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom ptb-35 black-bg">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 col-12">
                            <div class="copyright">
                                <p>©Copyright, 2019 All Rights Reserved by <a href="#">FPOLY</a></p>
                            </div>
                        </div>
                        <div class="col-md-4 col-12">
                            <div class="footer-payment-method">
                                <a href="#"><img alt="" src="./public/assets/img/icon-img/payment.png"></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- modal -->

</div>











<!-- all js here -->
<script src="./public/assets/js/vendor/jquery-1.12.0.min.js"></script>
<script src="./public/assets/js/popper.js"></script>
<script src="./public/assets/js/bootstrap.min.js"></script>
<script src="./public/assets/js/isotope.pkgd.min.js"></script>
<script src="./public/assets/js/imagesloaded.pkgd.min.js"></script>
<script src="./public/assets/js/jquery.counterup.min.js"></script>
<script src="./public/assets/js/waypoints.min.js"></script>
<script src="./public/assets/js/ajax-mail.js"></script>
<script src="./public/assets/js/owl.carousel.min.js"></script>
<script src="./public/assets/js/plugins.js"></script>
<script src="./public/assets/js/main.js"></script>
</body>

<!-- Mirrored from preview.freethemescloud.com/oswan/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 07 Nov 2019 16:08:50 GMT -->

</div>