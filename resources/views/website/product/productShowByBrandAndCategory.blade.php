@extends('website.blog.masterBlog')

@section('body')
    <!-- Ec breadcrumb start -->
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            {{-- <h2 class="ec-breadcrumb-title">Category:{{ $category->name }}</h2> --}}
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                                <li class="ec-breadcrumb-item active">Shop</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Shop page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-shop-rightside col-lg-12 col-md-12">
                    <!-- Shop Top Start -->
                    <div class="ec-pro-list-top d-flex">
                        <div class="col-md-6 ec-grid-list">
                            <div class="ec-gl-btn">
                                <button class="btn sidebar-toggle-icon"><i class="fi-rr-filter"></i></button>
                                <button class="btn btn-grid-50 active"><i class="fi-rr-apps"></i></button>
                                <button class="btn btn-list-50"><i class="fi-rr-list"></i></button>
                            </div>
                        </div>
                    </div>
                    <!-- Shop Top End -->

                    <!-- Shop content Start -->
                    <div class="shop-pro-content">
                        <div class="shop-pro-inner">
                            <div class="row">
                                @foreach ($filteredProducts as $product)
                                    <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6 mb-6 col-5 pro-gl-content">
                                        <div class="ec-product-inner">
                                            <div class="ec-pro-image-outer">
                                                <div class="ec-pro-image">
                                                    <a href="{{ route('product.detail', ['slug' => $product->slug]) }}"
                                                        class="image">
                                                        <img class="main-image"
                                                            src="{{ asset(explode(',', $product->image)[0]) }}"
                                                            alt="Product" />
                                                        @if (count(explode(',', $product->image)) > 1)
                                                            <img class="hover-image"
                                                                src="{{ asset(explode(',', $product->image)[1]) }}"
                                                                alt="Product" />
                                                        @endif
                                                    </a>
                                                </div>
                                            </div>
                                            <div class="ec-pro-content">
                                                <h5 class="ec-pro-title"><a
                                                        href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{ $product->name }}</a>
                                                </h5>
                                                <span class="ec-price">
                                                    <span class="new-price">{{ $product->price }}Tk</span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                        <!-- Ec Pagination Start -->
                        {{-- <div class="ec-pro-pagination">
                            <span>Showing 1-12 of 21 item(s)</span>
                            <ul class="ec-pro-pagination-inner">
                                <li><a class="active" href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">4</a></li>
                                <li><a href="#">5</a></li>
                                <li><a class="next" href="#">Next <i class="ecicon eci-angle-right"></i></a></li>
                            </ul>
                        </div> --}}
                        <!-- Ec Pagination End -->
                    </div>
                    <!--Shop content End -->
                </div>
                <!-- Sidebar Area Start -->
                <div class="filter-sidebar-overlay"></div>
                <div class="ec-shop-leftside filter-sidebar">
                    <div class="ec-sidebar-heading">
                        <h1>Filter Products By</h1>
                        <a class="filter-cls-btn" href="javascript:void(0)">×</a>
                    </div>
                    <div class="ec-sidebar-wrap">
                        <form action="{{ route('products.filter') }}" method="get">
                            <!-- ... (Checkbox inputs for categories and brands as previously discussed) -->
                            <!-- Sidebar Category Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Category</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            @foreach ($categories as $category)
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox" name="category[]"
                                                        id="category-{{ $category->id }}" value="{{ $category->id }}"
                                                         />
                                                    <!-- Add an ID to the checkbox -->
                                                    <label for="category-{{ $category->id }}"
                                                        style="margin-left: 24px;">{{ $category->name }}</label>
                                                    <!-- Add a 'for' attribute to link the label to the checkbox -->
                                                    <span class="checked"></span>
                                                </div>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- Sidebar Brand Block -->
                            <div class="ec-sidebar-block">
                                <div class="ec-sb-title">
                                    <h3 class="ec-sidebar-title">Brand</h3>
                                </div>
                                <div class="ec-sb-block-content">
                                    <ul>
                                        <li>
                                            @foreach ($brands as $brand)
                                                <div class="ec-sidebar-block-item">
                                                    <input type="checkbox" name="brand[]" id="brand-{{ $brand->id }}"
                                                        value="{{ $brand->id }}" />
                                                    <!-- Add an ID to the checkbox -->
                                                    <label for="brand-{{ $brand->id }}"
                                                        style="margin-left: 24px;">{{ $brand->name }}</label>
                                                    <!-- Add a 'for' attribute to link the label to the checkbox -->
                                                    <span class="checked"></span>
                                                </div>
                                            @endforeach
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <button class="btn btn-primary" type="submit">Apply Filters</button>
                        </form>
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- End Shop page -->
@endsection
