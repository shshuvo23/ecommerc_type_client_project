@extends('website.master')

@section('body')
    <!-- Main Slider Start -->
    <div class="ec-main-slider section ">
        <div class="ec-slider">
            @foreach ($sliders as $slider)
                <div class="ec-slide-item d-flex slide-1">
                    <img src="{{ asset($slider->image) }}" alt="">
                </div>
            @endforeach
        </div>
    </div>
    <!-- Main Slider End -->

    <!-- Ec Brand Section Start -->
    <section class="section ec-brand-section section-space-ptb-100">
        <div class="container">
            <div class="row">
                <div class="">
                    <h1 class="ec-title mb-5 mx-5">Brands</h1>
                </div>
                <div class="ec-brand-outer">
                    <ul class="ec-brand-inner">
                        @foreach ($brands as $brand)
                            <li class="ec-brand-item col-lg-2 col-md-4 col-sm-4">
                                <div class="ec-brand-img"><a
                                        href="{{ route('brand.show-product', ['id' => $brand->id]) }}"><img alt="brand"
                                            title="brand" src="{{ asset($brand->image) }}" /></a></div>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Ec Brand Section End -->

    <!-- Product tab Area Start -->
    <section class="section ec-product-tab section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 section-title-block">
                    <div class="section-title">
                        <h2 class="ec-title">Featured Products</h2>
                    </div>
                </div>

            </div>
            <div class="row m-tb-minus-15">
                <div class="col">
                    <div class="tab-content">
                        <div class="row">
                            @foreach ($products as $product)
                                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                    <div class="ec-product-inner">
                                        <div class="ec-product-hover"></div>
                                        <div class="ec-pro-image-outer">
                                            <div class="ec-pro-image">
                                                <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                    class="image">
                                                    <img class="main-image"
                                                        src="{{ asset(explode(',', $product->image)[0]) }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset(explode(',', $product->image)[0]) }}"
                                                        alt="Product" />

                                                    @if (count(explode(',', $product->image)) > 1)
                                                        <img class="hover-image"
                                                            src="{{ asset(explode(',', $product->image)[1]) }}"
                                                            alt="Product" />
                                                    @endif
                                                </a>
                                                {{-- <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                    class="image">
                                                    <img class="main-image"
                                                        src="{{ asset(explode(',', $product->image)[0]) }}"
                                                        alt="Product" />
                                                    <img class="hover-image"
                                                        src="{{ asset(explode(',', $product->image)[0]) }}"
                                                        alt="Product" />

                                                    @if (count(explode(',', $product->image)) > 1)
                                                        <img class="hover-image"
                                                            src="{{ asset(explode(',', $product->image)[1]) }}"
                                                            alt="Product" />
                                                    @endif
                                                    <img class="main-image"
                                                        src="{{ asset(explode(',', $product->image)[0]) }}"
                                                        alt="Product" />
                                                    @if (count(explode(',', $product->image)) > 1)
                                                        <img class="hover-image"
                                                            src="{{ asset(explode(',', $product->image)[1]) }}"
                                                            alt="Product" />
                                                    @else
                                                        <img class="main-image"
                                                            src="{{ asset(explode(',', $product->image)[0]) }}"
                                                            alt="Product" />
                                                    @endif

                                                </a> --}}
                                            </div>
                                        </div>
                                        <div class="ec-pro-content">
                                            <h5 class="ec-pro-title"><a
                                                    href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                            </h5>
                                            <h6 class="ec-pro-stitle"><a
                                                    href="shop-left-sidebar-col-3.html">{{ $product->category->name }}</a>
                                            </h6>
                                            <div class="ec-pro-rat-price">
                                                <div class="ec-pro-rat-pri-inner">
                                                    <span class="ec-price">
                                                        <span class="new-price">{{ number_format($product->price, 0) }}
                                                            Tk</span>
                                                    </span>
                                                    <span class="ec-price">
                                                        <span class="new-price">{{ number_format($product->price, 0) }}
                                                            Tk</span>
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                            {{-- <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/40_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/40_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Google nest
                                                wireless</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Multimedia
                                                Speakers</a></h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$180.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$180.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/41_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/41_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Earbuds 3nd
                                                generation wireless</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Accessories</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$159.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$159.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/42_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/42_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Apple iPhone 13
                                                128 GB, Starlight</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Phone</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$1590.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$1590.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/43_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/43_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Sharp Air
                                                Purifier for Homes</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Accessories</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$599.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$599.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/44_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/44_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Wireless
                                                blutooth headphone</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Headphone</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$65.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$65.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/45_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/45_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">Laptop i7
                                                processor 1TB, 6GB</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Laptop</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$1900.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$1900.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                                <div class="ec-product-inner">
                                    <div class="ec-product-hover"></div>
                                    <div class="ec-pro-image-outer">
                                        <div class="ec-pro-image">
                                            <a href="product-left-sidebar.html" class="image">
                                                <img class="main-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/46_1.jpg"
                                                    alt="Product" />
                                                <img class="hover-image"
                                                    src="{{ asset('/') }}website/assets/images/product-image/46_2.jpg"
                                                    alt="Product" />
                                            </a>
                                        </div>
                                    </div>
                                    <div class="ec-pro-content">
                                        <h5 class="ec-pro-title"><a href="product-left-sidebar.html">LED torch
                                                light</a></h5>
                                        <h6 class="ec-pro-stitle"><a href="shop-left-sidebar-col-3.html">Lighting</a>
                                        </h6>
                                        <div class="ec-pro-rat-price">
                                            <div class="ec-pro-rat-pri-inner">
                                                <span class="ec-price">
                                                    <span class="new-price">$45.00</span>
                                                </span>
                                                <span class="ec-price">
                                                    <span class="new-price">$45.00</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ec Product tab Area End -->
    <!-- START Blog Style -->
    <section class="ec-card-blog section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title mb-3">
                        <h2 class="ec-title">Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-t-15">
                @foreach ($blogs as $blog)
                    <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                        <article class="ec-full-blog">
                            <div class="ec-card-bg">
                                <div class="ec-wrapper">
                                    <div class="ec-card-main bg-img-1">
                                        <div class="ec-card-layer">
                                            <img src="{{ asset($blog->image) }}" alt="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="ec-card-head">
                                <span class="ec-date-box">
                                    <span class="ec-date-day"> {{ $blog->created_at->format('d') }}</span>
                                    <span class="ec-date-month"> {{ $blog->created_at->format('F') }}</span>
                                </span>
                            </div>
                            <div class="ec-card-info">
                                <h5>{{ $blog->title }}</h5>
                                <a href="{{ route('blog.detail', ['slug' => $blog->slug]) }}"
                                    class="btn btn-with-icon">READ
                                    MORE</a>
                            </div>
                        </article>
                    </div>
                @endforeach
                {{-- <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
                    <article class="ec-full-blog">
                        <div class="ec-card-bg">
                            <div class="ec-wrapper">
                                <div class="ec-card-main bg-img-2">
                                    <div class="ec-card-layer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-card-head">
                            <span class="ec-date-box">
                                <span class="ec-date-day">06</span>
                                <span class="ec-date-month">JAN</span>
                            </span>
                        </div>
                        <div class="ec-card-info">
                            <h5>Harvick Gets What He Needs, Johnson Among Those</h5>
                            <p>
                                <a href="#" class="ec-icon-link mr-3">BY: Stark Mike</a>|&nbsp;&nbsp;
                                <a href="#" class="ec-icon-link"><i class="fa fa-comments-o"></i>Comment:
                                    48</a>
                            </p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque vero libero
                                voluptatibus earum...</p>
                            <a href="#" class="btn btn-with-icon">READ MORE</a>
                        </div>
                    </article>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 m-auto">
                    <article class="ec-full-blog">
                        <div class="ec-card-bg">
                            <div class="ec-wrapper">
                                <div class="ec-card-main bg-img-3">
                                    <div class="ec-card-layer"></div>
                                </div>
                            </div>
                        </div>
                        <div class="ec-card-head">
                            <span class="ec-date-box">
                                <span class="ec-date-day">22</span>
                                <span class="ec-date-month">JAN</span>
                            </span>
                        </div>
                        <div class="ec-card-info">
                            <h5>This Is The Summer Of The Rogue Power Couple in 2021</h5>
                            <p>
                                <a href="#" class="ec-icon-link mr-3">BY: Lionardo Jahson</a>|&nbsp;&nbsp;
                                <a href="#" class="ec-icon-link"><i class="fa fa-comments-o"></i>Comment:
                                    35</a>
                            </p>
                            <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Doloremque vero libero
                                voluptatibus earum...</p>
                            <a href="#" class="btn btn-with-icon">READ MORE</a>
                        </div>
                    </article>
                </div> --}}
            </div>
        </div>
    </section>
    <!--/END Blog Style -->
@endsection
