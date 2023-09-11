<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">

    <title>Ekka</title>
    <meta name="keywords"
        content="apparel, catalog, clean, ecommerce, ecommerce HTML, electronics, fashion, html eCommerce, html store, minimal, multipurpose, multipurpose ecommerce, online store, responsive ecommerce template, shops" />
    <meta name="description" content="Best ecommerce html template for single and multi vendor store.">
    <meta name="author" content="ashishmaraviya">

    <!-- site Favicon -->
    <link rel="icon" href="{{ asset('/') }}website/assets/images/favicon/favicon-5.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="{{ asset('/') }}website/assets/images/favicon/favicon-5.png" />
    <meta name="msapplication-TileImage" content="{{ asset('/') }}website/assets/images/favicon/favicon-5.png" />

    <!-- css Icon Font -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/vendor/ecicons.min.css" />

    <!-- css All Plugins Files -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/animate.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/swiper-bundle.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/jquery-ui.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/countdownTimer.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/slick.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/plugins/bootstrap.css" />


    <!-- Main Style -->
    <link rel="stylesheet" href="{{ asset('/') }}website/assets/css/demo5.css" />
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const thumbnails = document.querySelectorAll(".product-thumbnail");
            const mainImage = document.querySelector(".product-main-image");

            thumbnails.forEach((thumbnail) => {
                thumbnail.addEventListener("click", () => {
                    mainImage.src = thumbnail.src;
                    mainImage.alt = thumbnail.alt;
                });
            });
        });
    </script>


</head>

<body>
    <div id="ec-overlay">
        <div class="ec-ellipsis">
            <div></div>
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>

    <!-- Header start  -->
    <header class="ec-header">
        <!--Ec Header Top Start -->
        <div class="header-top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col header-top-res d-lg-none">
                        <div class="ec-header-bottons">
                            <!-- Header menu Start -->
                            <a href="#ec-mobile-menu" class="ec-header-btn ec-side-toggle d-lg-none">
                                <i class="ecicon eci-bars"></i>
                            </a>
                            <!-- Header menu End -->
                        </div>
                    </div>
                    <!-- Header Top responsive Action -->
                </div>
            </div>
        </div>
        <!-- Ec Header Top  End -->
        <!-- Ec Header Bottom  Start -->
        <div class="ec-header-bottom d-none d-lg-block">
            <div class="container position-relative">
                <div class="row">
                    <div class="ec-flex">
                        <!-- Ec Header Logo Start -->
                        <div class="align-self-center ec-header-logo ">
                            <div class="header-logo">
                                <a href="{{ route('home') }}"><img
                                        src="{{ asset('/') }}website/assets/images/logo/logo-5.png"
                                        alt="Site Logo" /><img class="dark-logo"
                                        src="{{ asset('/') }}website/assets/images/logo/dark-logo-5.png"
                                        alt="Site Logo" style="display: none;" /></a>
                            </div>
                        </div>
                        <!-- Ec Header Logo End -->

                        <!-- Ec Header Search Start -->
                        <div class="align-self-center ec-header-search">
                            <div class="header-search">
                                <form class="ec-search-group-form" action="{{ route('product.search') }}"
                                    method="GET">
                                    <div class="ec-search-select-inner">
                                        {{-- <div class="ec-search-cat-title">All</div>
                                        <ul class="ec-search-cat-block">
                                            @foreach ($categories as $category)
                                                <li><a href="#">{{ $category->name }}</a></li>
                                            @endforeach
                                        </ul> --}}
                                    </div>
                                    <input class="form-control" placeholder="Search Here..." name="query"
                                        type="text">
                                    <button class="search_submit" type="submit"><i
                                            class="ecicon eci-search"></i></button>
                                </form>
                            </div>
                        </div>
                        <!-- Ec Header Search End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Header Button End -->
        <!-- Header responsive Bottom  Start -->
        <div class="ec-header-bottom d-lg-none">
            <div class="container position-relative">
                <div class="row ">

                    <!-- Ec Header Logo Start -->
                    <div class="col">
                        <div class="header-logo">
                            <a href="index.html"><img src="{{ asset('/') }}website/assets/images/logo/logo-5.png"
                                    alt="Site Logo" /><img class="dark-logo"
                                    src="{{ asset('/') }}website/assets/images/logo/dark-logo-5.png" alt="Site Logo"
                                    style="display: none;" /></a>
                        </div>
                    </div>
                    <!-- Ec Header Logo End -->
                    <!-- Ec Header Search Start -->
                    <div class="col align-self-center ec-header-search">
                        <div class="header-search">
                            <form class="ec-search-group-form" action="#">
                                <div class="ec-search-select-inner">
                                    <div class="ec-search-cat-title">All</div>
                                    <ul class="ec-search-cat-block">
                                        @foreach ($categories as $category)
                                            <li><a href="">{{ $category->name }}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                                <input class="form-control" placeholder="Search Here..." type="text">
                                <button class="search_submit" type="submit"><i class="ecicon eci-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <!-- Ec Header Search End -->
                </div>
            </div>
        </div>
        <!-- Header responsive Bottom  End -->
        <!-- EC Main Menu Start -->
        <div id="ec-main-menu-desk" class="sticky-nav">
            <div class="container position-relative">
                <div class="row">
                    <div class="col ec-category-block">
                        <div class="ec-cat-menu">
                            <div class="ec-category-toggle">
                                <span class="ec-category-icon"></span>
                                <span class="ec-category-title">all categories</span>
                            </div>
                            <div class="ec-category-content">
                                <div id="ec-category-menu" class="ec-category-menu">
                                    <ul class="ec-category-wrapper">

                                        @foreach ($categories as $category)
                                            <li><a title="" class="ec-cat-menu-link"
                                                    href="{{ route('category.show-product', ['id' => $category->id]) }}">{{ $category->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col ec-main-menu-block align-self-center d-none d-lg-block p-0">
                        <div class="ec-main-menu">
                            <ul>
                                <li class="dropdown"><a href="{{ route('home') }}">Home</a>
                                </li>

                                <li class="dropdown"><a href="javascript:void(0)">Brand</a>
                                    <ul class="sub-menu">
                                        @foreach ($brands as $brand)
                                            <li><a
                                                    href="{{ route('brand.show-product', ['id' => $brand->id]) }}">{{ $brand->name }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ route('blog.all') }}">All Blog</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Ec Main Menu End -->
        <!-- Ekka Menu Start -->
        <div id="ec-mobile-menu" class="ec-side-cart ec-mobile-menu">
            <div class="ec-menu-title">
                <span class="menu_title">My Menu</span>
                <button class="ec-close">×</button>
            </div>
            <div class="ec-menu-inner">
                <div class="ec-menu-content">
                    <ul>
                        <li class="dropdown"><a href="{{ route('home') }}">Home</a>
                        </li>

                        <li class="dropdown"><a href="javascript:void(0)">Brand</a>
                            <ul class="sub-menu">
                                @foreach ($brands as $brand)
                                    <li><a href="">{{ $brand->name }}</a></li>
                                @endforeach
                            </ul>
                        </li>
                        <li class="dropdown"><a href="javascript:void(0)">Blog</a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('blog.all') }}">ALL Blog</a></li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- Ekka Menu End -->
    </header>
    <!-- Header End  -->
    @yield('body')
    <!-- Footer Start -->
    <footer class="ec-footer">
        <div class="footer-container">
            <div class="footer-top section-space-footer-p">
                <div class="container">
                    <div class="col-sm-12 col-lg-12 ec-footer-contact">
                        <div class="ec-footer-widget">
                            <div class="ec-footer-logo" style="margin-left: 480px"><a href="#"><img
                                        src="{{ asset('/') }}website/assets/images/logo/footer-logo-5.png"
                                        alt=""><img class="dark-footer-logo"
                                        src="{{ asset('/') }}website/assets/images/logo/dark-logo-5.png"
                                        alt="Site Logo" style="display: none;" /></a></div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.Lorem Ipsum is
                                simply dummy text of the printing and typesetting industry.Lorem Ipsum is simply dummy
                                text of the printing and typesetting industry.Lorem Ipsum is simply dummy text of the
                                printing and typesetting industry.Lorem Ipsum is simply dummy text of the printing and
                                typesetting industry.</p>
                        </div>
                    </div>
                    {{-- <div class="row">
                        <div class="col-sm-12 col-lg-5 ec-footer-contact">
                            <div class="ec-footer-widget">
                                <div class="ec-footer-logo"><a href="#"><img
                                            src="{{ asset('/') }}website/assets/images/logo/footer-logo-5.png"
                                            alt=""><img class="dark-footer-logo"
                                            src="{{ asset('/') }}website/assets/images/logo/dark-logo-5.png"
                                            alt="Site Logo" style="display: none;" /></a></div>
                                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-3 ec-footer-info">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Information</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="about-us.html">About us</a></li>
                                        <li class="ec-footer-link"><a href="track-order.html">Delivery
                                                Information</a></li>
                                        <li class="ec-footer-link"><a href="privacy-policy.html">Policy & policy
                                            </a></li>
                                        <li class="ec-footer-link"><a href="terms-condition.html">Terms &
                                                conditions</a></li>
                                        <li class="ec-footer-link"><a href="contact-us.html">Contact us</a></li>
                                        <li class="ec-footer-link"><a href="#">Returns</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-2 ec-footer-account">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Customer Service</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link"><a href="#">Site Map</a></li>
                                        <li class="ec-footer-link"><a href="wishlist.html">Wish List</a></li>
                                        <li class="ec-footer-link"><a href="#">Brands</a></li>
                                        <li class="ec-footer-link"><a href="offer.html">Gift Certificates</a></li>
                                        <li class="ec-footer-link"><a href="#">Affiliate</a></li>
                                        <li class="ec-footer-link"><a href="offer.html">Specials</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4 ec-footer-news">
                            <div class="ec-footer-widget">
                                <h4 class="ec-footer-heading">Newsletter</h4>
                                <div class="ec-footer-links">
                                    <ul class="align-items-center">
                                        <li class="ec-footer-link">Sign up for our e-mail to get latest news.</li>
                                    </ul>
                                    <div class="ec-subscribe-form">
                                        <form id="ec-newsletter-form" name="ec-newsletter-form" method="post"
                                            action="#">
                                            <div id="ec_news_signup" class="ec-form">
                                                <input class="ec-email" type="email" required=""
                                                    placeholder="Enter your email" name="ec-email" value="" />
                                                <button id="ec-news-btn" class="button btn-primary" type="submit"
                                                    name="subscribe" value="">subscribe</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-footer-widget ec-share">
                                <ul>
                                    <li class="ec-share-link"><a href="#"><img
                                                src="assets/images/icons/iphone.png" alt="" /></a></li>
                                    <li class="ec-share-link"><a href="#"><img
                                                src="assets/images/icons/google.png" alt="" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Footer Copyright Start -->
                        <div class="col footer-copy">
                            <div class="footer-bottom-copy">
                                <div class="ec-copy">© 2023 <a class="site-name" href="#">Ekka</a>. All
                                    Rights Reserved
                                </div>
                            </div>
                        </div>
                        <!-- Footer Copyright End -->
                        <!-- Footer payment -->
                        <div class="col footer-bottom-right">
                            <div class="footer-bottom-payment d-flex justify-content-end">
                                <div class="payment-link">
                                    <img src="assets/images/icons/payment.png" alt="">
                                </div>

                            </div>
                        </div>
                        <!-- Footer payment -->
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->

    <!-- Modal -->
    <div class="modal fade" id="ec_quickview_modal" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <button type="button" class="btn-close qty_close" data-bs-dismiss="modal"
                    aria-label="Close"></button>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md-5 col-sm-12 col-xs-12">
                            <!-- Swiper -->
                            <div class="qty-product-cover">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/39_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/39_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/40_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/40_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/41_1.jpg"
                                        alt="">
                                </div>
                            </div>
                            <div class="qty-nav-thumb">
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/39_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/39_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/40_1.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/40_2.jpg"
                                        alt="">
                                </div>
                                <div class="qty-slide">
                                    <img class="img-responsive" src="assets/images/product-image/41_1.jpg"
                                        alt="">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 col-sm-12 col-xs-12">
                            <div class="quickview-pro-content">
                                <h5 class="ec-quick-title"><a href="product-left-sidebar.html">Trainers with
                                        broguing slogan</a></h5>
                                <div class="ec-quickview-rating">
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star fill"></i>
                                    <i class="ecicon eci-star"></i>
                                </div>

                                <div class="ec-quickview-desc">Lorem Ipsum is simply dummy text of the printing and
                                    typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever
                                    since the 1500s,</div>
                                <div class="ec-quickview-price">
                                    <span class="old-price">$200.00</span>
                                    <span class="new-price">$159.00</span>
                                </div>

                                <div class="ec-pro-variation">
                                    <div class="ec-pro-variation-inner ec-pro-variation-color">
                                        <span>Color</span>
                                        <div class="ec-pro-variation-content">
                                            <ul>
                                                <li><span style="background-color:#202020;"></span></li>
                                                <li><span style="background-color:#0d4fcf;"></span></li>
                                                <li><span style="background-color:#f93434;"></span></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="ec-quickview-qty">
                                    <div class="qty-plus-minus">
                                        <input class="qty-input" type="text" name="ec_qtybtn" value="1" />
                                    </div>
                                    <div class="ec-quickview-cart ">
                                        <button class="btn btn-primary">Add To Cart</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal end -->

    <!-- Vendor JS -->
    <script src="{{ asset('/') }}website/assets/js/vendor/jquery-3.5.1.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/vendor/popper.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/vendor/bootstrap.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/vendor/modernizr-3.11.2.min.js"></script>

    <!--Plugins JS-->
    <script src="{{ asset('/') }}website/assets/js/plugins/swiper-bundle.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/countdownTimer.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/scrollup.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/jquery.zoom.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/slick.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/infiniteslidev2.js"></script>
    <script src="{{ asset('/') }}website/assets/js/vendor/jquery.magnific-popup.min.js"></script>
    <script src="{{ asset('/') }}website/assets/js/plugins/jquery.sticky-sidebar.js"></script>

    <!-- Main Js -->
    <script src="{{ asset('/') }}website/assets/js/vendor/index.js"></script>
    <script src="{{ asset('/') }}website/assets/js/demo-5.js"></script>

</body>

</html>
