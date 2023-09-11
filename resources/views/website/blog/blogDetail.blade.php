@extends('website.blog.masterBlog')

@section('body')
    <div class="sticky-header-next-sec  ec-breadcrumb section-space-mb">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="row ec_breadcrumb_inner">
                        <div class="col-md-6 col-sm-12">
                            <h2 class="ec-breadcrumb-title">Blog Page</h2>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <!-- ec-breadcrumb-list start -->
                            <ul class="ec-breadcrumb-list">
                                <li class="ec-breadcrumb-item"><a href="{{route('home')}}">Home</a></li>
                                <li class="ec-breadcrumb-item active">Blog Page</li>
                            </ul>
                            <!-- ec-breadcrumb-list end -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Ec breadcrumb end -->

    <!-- Ec Blog page -->
    <section class="ec-page-content section-space-p">
        <div class="container">
            <div class="row">
                <div class="ec-blogs-rightside col-lg-12 col-md-12">

                    <!-- Blog content Start -->
                    <div class="ec-blogs-content">
                        <div class="ec-blogs-inner">
                            <div class="ec-blog-main-img">
                                <img class="blog-image" src="{{asset($blog->image)}}" alt="Blog" />
                            </div>
                            <div class="ec-blog-date mb-3">
                                <p class="date">{{ $blog->created_at->format('d F') }} </p>
                            </div>
                            <div class="ec-blog-detail">
                                <h3 class="ec-blog-title mb-3">{{$blog->title}}</h3>
                                <p>{!! $blog->long_description !!}</p>
                            </div>
                        </div>
                    </div>
                    <!--Blog content End -->
                </div>
            </div>
        </div>
    </section>
@endsection
