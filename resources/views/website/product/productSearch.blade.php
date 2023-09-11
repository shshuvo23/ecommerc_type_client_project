@extends('website.blog.masterBlog')

@section('body')
    <div class="container">
        <!-- Shop content Start -->
        <div class="shop-pro-content">
            <div class="shop-pro-inner">
                <div class="row">
                    @if (count($products) > 0)
                        <h1>Search results for "{{ $query }}"</h1>
                        <ul>
                            @foreach ($products as $product)
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
                                                    href="{{ route('product.detail', ['slug' => $product->slug]) }}">{{$product->name}}</a></h5>
                                            <span class="ec-price">
                                                <span class="new-price">{{ $product->price }}Tk</span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </ul>
                    @else
                        <h1>No results found for "{{ $query }}" Search again with correct keyword</h1>
                    @endif

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
@endsection
