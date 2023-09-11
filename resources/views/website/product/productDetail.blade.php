@extends('website.blog.masterBlog')

@section('body')
    {{-- <div class="product-container">
        <div class="brands-list">
            <h2>Brands</h2>
            <ul>
                @foreach ($brands as $brand)
                    <li>{{ $brand->name }}</li>
                @endforeach
            </ul>
        </div>
        <div class="product-images">
            @php
                $imageUrls = explode(',', $product->image);
                $countImages = count($imageUrls);
            @endphp
            <img class="product-main-image" src="{{ asset($imageUrls[0]) }}" alt="Main Product Image">
            <div class="product-thumbnails">
                @for ($i = 0; $i < $countImages; $i++)
                    <img class="product-thumbnail" src="{{ asset($imageUrls[$i]) }}" alt="Thumbnail 1">
                @endfor
            </div>
        </div>
        <div class="product-info">
            <h1>{{ $product->name }}</h1>
            <p>{{ $product->category->name }}</p>
            <p>{{ $product->price }}</p>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">Title</th>
                        <th scope="col">Description</th>
                </thead>
                <tbody>
                    @php
                        $titles = explode(',', $product['description_title']);
                        $details = explode(',', $product['description_detail']);
                    @endphp

                    @for ($i = 0; $i < count($titles); $i++)
                        <tr>
                            <td>{{ $titles[$i] }} </td>
                            <td>T{!! $details[$i] !!}</td>
                        </tr>
                    @endfor

                </tbody>
            </table>
        </div>
    </div> --}}

    <!-- Related Product Start -->
    {{-- <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <h2 class="ec-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
                @foreach ($relatedProduct as $product)
                    <div class="col-lg-3 col-md-6 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-product-hover"></div>
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="{{ route('product.detail', ['id' => $product->id]) }}" class="image">
                                        <img class="main-image" src="{{ asset(explode(',', $product->image)[0]) }}"
                                            alt="Product" />
                                        @if (count(explode(',', $product->image)) > 1)
                                            <img class="hover-image" src="{{ asset(explode(',', $product->image)[1]) }}"
                                                alt="Product" />
                                        @endif
                                    </a>
                                </div>
                            </div>
                            <div class="ec-pro-content">
                                <h5 class="ec-pro-title"><a
                                        href="{{ route('product.detail', ['id' => $product->id]) }}">{{ $product->name }}</a>
                                </h5>
                                <h6 class="ec-pro-stitle"><a
                                        href="shop-left-sidebar-col-3.html">{{ $product->category->name }}</a>
                                </h6>
                                <div class="ec-pro-rat-price">
                                    <div class="ec-pro-rat-pri-inner">
                                        <span class="ec-price">
                                            <span class="new-price">{{ $product->price }}</span>
                                        </span>
                                        <span class="ec-price">
                                            <span class="new-price">{{ $product->price }}</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section> --}}
    <!-- Related Product end -->
    <!-------------------------------------------------------------------!>


                                                <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Products</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="ec-breadcrumb-item active">Products</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Sart Single product -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-pro-rightside ec-common-rightside col-lg-9 order-lg-last col-md-12 order-md-first">

                    <!-- Single product content Start -->
                    <div class="single-pro-block">
                        <div class="single-pro-inner">
                            <div class="row">
                                <div class="single-pro-img">
                                    <div class="single-product-scroll">
                                        @php
                                            $imageUrls = explode(',', $product->image);
                                            $countImages = count($imageUrls);
                                        @endphp
                                        <div class="single-product-cover">
                                            @foreach ($imageUrls as $imageUrl)
                                                <div class="single-slide zoom-image-hover">
                                                    <img class="img-responsive" src="{{ asset($imageUrl) }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                        <div class="single-nav-thumb">
                                            @foreach ($imageUrls as $imageUrl)
                                                <div class="single-slide">
                                                    <img class="img-responsive" src="{{ asset($imageUrl) }}" alt="">
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                                <div class="single-pro-desc">
                                    <div class="single-pro-content">
                                        <h5 class="ec-single-title">{{ $product->name }}</h5>
                                        <div class="ec-single-price-stoke">
                                            <div class="ec-single-price">
                                                <span class="new-price">{{ number_format($product->price, 0) }} Tk</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--Single product content End -->
                    <!-- Single product tab start -->
                    <div class="ec-single-pro-tab">
                        <div class="ec-single-pro-tab-wrapper">
                            <div class="ec-single-pro-tab-nav">
                                <ul class="nav nav-tabs">
                                    <li class="nav-item">
                                        <a class="nav-link active" data-bs-toggle="tab" data-bs-target="#ec-spt-nav-details"
                                            role="tablist">Product Detail</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="tab-content  ec-single-pro-tab-content">
                                <div id="ec-spt-nav-details" class="tab-pane fade show active">
                                    <div class="ec-single-pro-tab-desc">
                                        <table class="table">
                                            <thead>
                                                <tr>
                                                    <th scope="col">Title</th>
                                                    <th scope="col">Description</th>
                                            </thead>
                                            <tbody style="font-size: 14px;">
                                                {{-- @php
                                                    $titles = explode(',', $product['description_title']);
                                                    $details = explode(',', $product['description_detail']);
                                                @endphp --}}

                                                {{-- @for ($i = 0; $i < count($titles); $i++)
                                                    <tr>
                                                        <td class="border">{{ $titles[$i] }} </td>
                                                        <td>{!! $details[$i] !!}</td>
                                                    </tr>
                                                @endfor --}}
                                                @php
                                                    $titles = json_decode($product->description_title, true);
                                                    $details = json_decode($product->description_detail, true);
                                                @endphp

                                                @if (is_array($titles) && is_array($details) && count($titles) === count($details))
                                                    @for ($i = 0; $i < count($titles); $i++)
                                                        <tr>
                                                            <td class="border" style="width: 170px;">{{ $titles[$i] }}</td>
                                                            {{-- <td>{!! ($details[$i]) !!}</td> --}}
                                                            <td>{!! nl2br($details[$i]) !!}</td>
                                                        </tr>
                                                    @endfor
                                                @else
                                                    <tr>
                                                        <td colspan="2">No data available</td>
                                                    </tr>
                                                @endif

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- product details description area end -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="ec-pro-leftside ec-common-leftside col-lg-3 order-lg-first col-md-12 order-md-last">
                    <div class="ec-sidebar-wrap">
                        <!-- Sidebar Category Block -->
                        <div class="ec-sidebar-block">
                            <div class="ec-sb-title">
                                <h3 class="ec-sidebar-title">Brands</h3>
                            </div>
                            <div class="ec-sb-block-content">
                                <ul>

                                    <li>
                                        @foreach ($brands as $brand)
                                            <div class="ec-sidebar-block-item"><a
                                                    href="{{ route('brand.show-product', ['id' => $brand->id]) }}">{{ $brand->name }}</a>
                                            </div>
                                        @endforeach
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Sidebar Category Block -->
                    </div>
                </div>
                <!-- Sidebar Area Start -->
            </div>
        </div>
    </section>
    <!-- End Single product -->

    <!-- Related Product Start -->
    <section class="section ec-releted-product section-space-p">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <div class="section-title">
                        <h2 class="ec-bg-title">Related products</h2>
                        <h2 class="ec-title">Related products</h2>
                        <p class="sub-title">Browse The Collection of Top Products</p>
                    </div>
                </div>
            </div>
            <div class="row margin-minus-b-30">
                <!-- Related Product Content -->
                @foreach ($relatedProduct as $product)
                    <div class="col-lg-2 col-md-4 col-sm-6 col-xs-6 ec-product-content">
                        <div class="ec-product-inner">
                            <div class="ec-product-hover"></div>
                            <div class="ec-pro-image-outer">
                                <div class="ec-pro-image">
                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}" class="image">
                                        <img class="main-image" src="{{ asset(explode(',', $product->image)[0]) }}"
                                            alt="Product" />
                                        @if (count(explode(',', $product->image)) > 1)
                                            <img class="hover-image" src="{{ asset(explode(',', $product->image)[1]) }}"
                                                alt="Product" />
                                        @endif
                                    </a>
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
                                            <span class="new-price">{{ $product->price }}TK</span>
                                        </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Related Product end -->
@endsection

