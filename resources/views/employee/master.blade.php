<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- Tell the browser to be responsive to screen width -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('/') }}admin/assets/images/favicon.png">
    <title>Elite Admin Template - The Ultimate Multipurpose admin template</title>
    <!-- chartist CSS -->
    <link href="{{ asset('/') }}admin/assets/node_modules/morrisjs/morris.css" rel="stylesheet">
    <link href="{{ asset('/') }}admin/dist/css/pages/ecommerce.css" rel="stylesheet">
    <link href="{{ asset('/') }}fontawesome/css/fontawesome.css" rel="stylesheet">
    <link href="{{ asset('/') }}fontawesome/css/brands.css" rel="stylesheet">
    <link href="{{ asset('/') }}fontawesome/css/solid.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('/') }}admin/assets/node_modules/html5-editor/bootstrap-wysihtml5.css" />
    <!-- Custom CSS -->
    <link href="{{ asset('/') }}admin/dist/css/style.min.css" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body class="skin-default fixed-layout">
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    <div class="preloader">
        <div class="loader">
            <div class="loader__figure"></div>
            <p class="loader__label">Elite admin</p>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Main wrapper - style you can find in pages.scss -->
    <!-- ============================================================== -->
    <div id="main-wrapper">
        <!-- ============================================================== -->
        <!-- Topbar header - style you can find in pages.scss -->
        <!-- ============================================================== -->
        <header class="topbar">
            <nav class="navbar top-navbar navbar-expand-md navbar-dark">
                <!-- ============================================================== -->
                <!-- Logo -->
                <!-- ============================================================== -->
                <div class="navbar-header">
                    <a class="navbar-brand" href="index.html">
                        <!-- Logo icon --><b>
                            <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                            <!-- Dark Logo icon -->
                            <img src="{{ asset('/') }}admin/assets/images/logo-icon.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo icon -->
                            <img src=".{{ asset('/') }}admin/assets/images/logo-light-icon.png" alt="homepage"
                                class="light-logo" />
                        </b>
                        <!--End Logo icon -->
                        <!-- Logo text --><span>
                            <!-- dark Logo text -->
                            <img src="{{ asset('/') }}admin/assets/images/logo-text.png" alt="homepage"
                                class="dark-logo" />
                            <!-- Light Logo text -->
                            <img src="{{ asset('/') }}admin/assets/images/logo-light-text.png" class="light-logo"
                                alt="homepage" /></span> </a>
                </div>
                <!-- ============================================================== -->
                <!-- End Logo -->
                <!-- ============================================================== -->
                <div class="navbar-collapse">
                    <!-- ============================================================== -->
                    <!-- toggle and nav items -->
                    <!-- ============================================================== -->
                    <ul class="navbar-nav me-auto">
                        <!-- This is  -->
                        <li class="nav-item"> <a class="nav-link nav-toggler d-block d-md-none waves-effect waves-dark"
                                href="javascript:void(0)"><i class="ti-menu"></i></a> </li>
                        <li class="nav-item"> <a
                                class="nav-link sidebartoggler d-none d-lg-block d-md-block waves-effect waves-dark"
                                href="javascript:void(0)"><i class="icon-menu"></i></a> </li>
                        <!-- ============================================================== -->
                    </ul>
                    <!-- ============================================================== -->
                    <!-- User profile and search -->
                    <!-- ============================================================== -->
                </div>
            </nav>
        </header>
        <!-- ============================================================== -->
        <!-- End Topbar header -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <aside class="left-sidebar">
            <!-- Sidebar scroll-->
            <div class="scroll-sidebar">
                <!-- User Profile-->
                <div class="user-profile">
                    <div class="user-pro-body">
                        <div><img src="{{ asset('/') }}admin/assets/images/users/2.jpg" alt="user-img"
                                class="img-circle"></div>
                        <div class="dropdown">
                            <a href="javascript:void(0)" class="dropdown-toggle u-dropdown link hide-menu"
                                data-bs-toggle="dropdown" role="button" aria-haspopup="true"
                                aria-expanded="false">{{ auth()->user()->name }} <span class="caret"></span></a>
                            <div class="dropdown-menu animated flipInY">
                                <!-- text-->
                                <a href="{{ route('profile.show') }}" class="dropdown-item"><i class="ti-user"></i> My
                                    Profile</a>
                                <a href="" class="dropdown-item"
                                    onclick="event.preventDefault(); document.getElementById('logoutForm').submit();"><i
                                        class="fa fa-power-off"></i> Logout</a>
                                <form action="{{ route('logout') }}" method="POST" id="logoutForm">
                                    @csrf
                                </form>
                                <!-- text-->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Sidebar navigation-->
                <nav class="sidebar-nav">
                    <ul id="sidebarnav">
                        <li>
                            {{-- <div class="hide-menu text-center">
                                <div id="eco-spark"></div>
                                <small>TOTAL EARNINGS - JUNE 2020</small>
                                <h4>$2,478.00</h4>
                            </div> --}}
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa-brands fa-product-hunt"></i><span
                                    class="hide-menu">Category</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('employee.category-add') }}">Add Category</a></li>
                                <li><a href="{{ route('employee.category-list') }}">Category List</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa-brands fa-product-hunt"></i><span
                                    class="hide-menu">Brand</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('emloyee.brand-add') }}">Add Brand</a></li>
                                <li><a href="{{ route('emloyee.brand-list') }}">Brand List</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa-brands fa-product-hunt"></i><span
                                    class="hide-menu">Product</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('employee.product-add') }}">Add Product</a></li>
                                <li><a href="{{ route('employee.product-list') }}">Product List</a></li>
                            </ul>
                        </li>
                        <li> <a class="has-arrow waves-effect waves-dark" href="javascript:void(0)"
                                aria-expanded="false"><i class="fa-brands fa-product-hunt"></i><span
                                    class="hide-menu">Blog</span></a>
                            <ul aria-expanded="false" class="collapse">
                                <li><a href="{{ route('employee.blog-add') }}">Add Blog</a></li>
                                <li><a href="{{ route('employee.blog-list') }}">Blog List</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav>
                <!-- End Sidebar navigation -->
            </div>
            <!-- End Sidebar scroll-->
        </aside>
        <!-- ============================================================== -->
        <!-- End Left Sidebar - style you can find in sidebar.scss  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Page wrapper  -->
        <!-- ============================================================== -->
        <div class="page-wrapper">
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            <div class="container-fluid">
                <!-- ============================================================== -->
                <!-- Bread crumb and right sidebar toggle -->

                <div class="row page-titles">
                    <div class="col-md-5 align-self-center">
                        <h4 class="text-themecolor">Employee Dashboard</h4>
                    </div>
                    <div class="col-md-7 align-self-center text-end">
                        <div class="d-flex justify-content-end align-items-center">
                            <ol class="breadcrumb justify-content-end">
                                <li class="breadcrumb-item"><a href="javascript:void(0)">@yield('title')</a></li>
                                <li class="breadcrumb-item active">@yield('sectionname')</li>
                            </ol>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                @yield('body')
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
            </div>
            <!-- ============================================================== -->
            <!-- End Container fluid  -->
            <!-- ============================================================== -->
        </div>
        <!-- ============================================================== -->
        <!-- End Page wrapper  -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- footer -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- End footer -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    <script src="{{ asset('/') }}admin/assets/node_modules/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap tether Core JavaScript -->
    <script src="{{ asset('/') }}admin/assets/node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- slimscrollbar scrollbar JavaScript -->
    <script src="{{ asset('/') }}admin/dist/js/perfect-scrollbar.jquery.min.js"></script>
    <!--Wave Effects -->
    <script src="{{ asset('/') }}admin/dist/js/waves.js"></script>
    <!--Menu sidebar -->
    <script src="{{ asset('/') }}admin/dist/js/sidebarmenu.js"></script>
    <!--stickey kit -->
    <script src="{{ asset('/') }}admin/assets/node_modules/sticky-kit-master/dist/sticky-kit.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/node_modules/sparkline/jquery.sparkline.min.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/') }}admin/dist/js/custom.min.js"></script>
    <script src="{{ asset('/') }}admin/assets/node_modules/jquery-sparkline/jquery.sparkline.min.js"></script>
    <!-- ============================================================== -->
    <!-- This page plugins -->
    <!-- ============================================================== -->
    <!--morris JavaScript -->
    <script src="{{ asset('/') }}admin/assets/node_modules/raphael/raphael-min.js"></script>
    <script src="{{ asset('/') }}admin/assets/node_modules/morrisjs/morris.min.js"></script>
    <!--Custom JavaScript -->
    <script src="{{ asset('/') }}admin/dist/js/ecom-dashboard.js"></script>

    <!-- wysuhtml5 Plugin JavaScript -->
    <script src="{{ asset('/') }}admin/assets/node_modules/html5-editor/wysihtml5-0.3.0.js"></script>
    <script src="{{ asset('/') }}admin/assets/node_modules/html5-editor/bootstrap-wysihtml5.js"></script>
    <script>
        $(document).ready(function() {

            $('.textarea_editor').wysihtml5();


        });
    </script>
    <script>
        $(document).ready(function() {
            var titleDescriptionCounter = 1;

            $("#add-title-description").click(function() {
                var newTitleDescriptionPair = `
                    <div class="title-description-pair">
                        <input type="text" class="form-control is-valid" name="description_title[]" placeholder="Description Title" required>
                        <textarea class="textarea_editor form-control is-valid mb-3" name="description_detail[]" rows="3" placeholder="Enter description ..." required></textarea>
                    </div>
                `;
                $("#title-description-fields").append(newTitleDescriptionPair);
                titleDescriptionCounter++;
            });
            $("#add-image").click(function() {
                var newTitleDescriptionPair = `
                            <div class="image">
                                <label class="form-label" for="validationServer02">Product Image</label>
                                <input type="file" class="form-control is-valid" name="image[]" id="validationServer02"
                                    placeholder="Image">
                                <div class="valid-feedback">
                                    @error('image')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                `;
                $("#image-field").append(newTitleDescriptionPair);
                titleDescriptionCounter++;
            });
        });
    </script>
</body>

</html>
