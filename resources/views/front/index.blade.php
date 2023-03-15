<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
            <!-- ========== Meta Tags ========== -->
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <meta name="description" content="Examin - Education and LMS Template">

            <!-- ========== Page Title ========== -->
            <title>Examin - Education and LMS Template</title>

            <!-- ========== Favicon Icon ========== -->
            <link rel="shortcut icon" href="assets/img/favicon.png" type="image/x-icon">

            <!-- ========== Start Stylesheet ========== -->
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
            <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
            <link href="assets/css/flaticon-set.css" rel="stylesheet" />
            <link href="assets/css/elegant-icons.css" rel="stylesheet" />
            <link href="assets/css/magnific-popup.css" rel="stylesheet" />
            <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
            <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
            <link href="assets/css/animate.css" rel="stylesheet" />
            <link href="assets/css/bootsnav.css" rel="stylesheet" />
            <link href="style.css" rel="stylesheet">
            <link href="assets/css/responsive.css" rel="stylesheet" />
            <!-- ========== End Stylesheet ========== -->

            <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
            <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
            <!--[if lt IE 9]>
            <script src="assets/js/html5/html5shiv.min.js"></script>
            <script src="assets/js/html5/respond.min.js"></script>
            <![endif]-->

            <!-- ========== Google Fonts ========== -->
            <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet"> -->
           
    </head>
    <body class="antialiased">
        <!-- Preloader Start -->
        <div class="se-pre-con"></div>
        <!-- Preloader Ends -->

        <!-- Start Header Top 
        ============================================= -->
        <div class="top-bar-area address-two-lines bg-dark text-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 address-info">
                        <div class="info box">
                            <ul>
                                <li>
                                    <span><i class="fas fa-map"></i> Address</span>California, TX 70240
                                </li>
                                <li>
                                    <span><i class="fas fa-envelope-open"></i> Email</span>Info@gmail.com
                                </li>
                                <li>
                                    <span><i class="fas fa-phone"></i> Contact</span>+123 456 7890
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="user-login text-right col-md-4">
                        @if (Route::has('login'))
                                @auth
                                    <a href="{{ url('/home') }}" >Home</a>
                                @else
                                    <a href="{{ route('login') }}" ><i class="fas fa-user"></i>Log in</a>

                                    @if (Route::has('register'))
                                        <a href="{{ route('register') }}"><i class="fas fa-edit"></i>Register</a>
                                    @endif
                                @endauth
                        @endif
                    </div>
                </div>
            </div>
        </div>
        <!-- End Header Top -->
        
        <!-- Header 
        ============================================= -->
        <header id="home">

            <!-- Start Navigation -->
            <nav class="navbar navbar-default navbar-sticky bootsnav">

                <!-- Start Top Search -->
                <div class="container">
                    <div class="row">
                        <div class="top-search">
                            <div class="input-group">
                                <form action="#">
                                    <input type="text" name="text" class="form-control" placeholder="Search">
                                    <button type="submit">
                                        <i class="fas fa-search"></i>
                                    </button>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Top Search -->

                <div class="container">

                    <!-- Start Atribute Navigation -->
                    <div class="attr-nav">
                        <ul>
                            <li class="search"><a href="#"><i class="fa fa-search"></i></a></li>
                        </ul>
                    </div>        
                    <!-- End Atribute Navigation -->

                    <!-- Start Header Navigation -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-menu">
                            <i class="fa fa-bars"></i>
                        </button>
                        <a class="navbar-brand" href="index.html">
                            <img src="assets/img/logo.png" class="logo" alt="Logo">
                        </a>
                    </div>
                    <!-- End Header Navigation -->

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="navbar-menu">
                        <ul class="nav navbar-nav navbar-right" data-in="#" data-out="#">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Home</a>
                                <ul class="dropdown-menu">
                                    <li><a href="index.html">Home Version One</a></li>
                                    <li><a href="index-2.html">Home Version Two</a></li>
                                    <li><a href="index-3.html">Home Version Three</a></li>
                                    <li><a href="index-4.html">Home Version Four</a></li>
                                    <li><a href="index-5.html">Home Version Five</a></li>
                                    <li><a href="index-6.html">Home Version Six</a></li>
                                    <li><a href="index-7.html">Home Version Serven <span class="badge">New</span></a></li>
                                    <li><a href="index-onepage.html">Onepage Version One</a></li>
                                    <li><a href="index-2-onepage.html">Onepage Version Two</a></li>
                                    <li><a href="index-3-onepage.html">Onepage Version Three</a></li>
                                    <li><a href="index-4-onepage.html">Onepage Version Four</a></li>
                                    <li><a href="index-5-onepage.html">Onepage Version Five</a></li>
                                    <li><a href="index-6-onepage.html">Onepage Version Six</a></li>
                                </ul>
                            </li>
                            <li class="dropdown megamenu-fw">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">Pages</a>
                                <ul class="dropdown-menu megamenu-content" role="menu">
                                    <li>
                                        <div class="row">
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Gallery</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="gallery-2-colum.html">Gallery Two Colum</a></li>
                                                        <li><a href="gallery-3-colum.html">Gallery Three Colum</a></li>
                                                        <li><a href="gallery-4-colum.html">Gallery Four Colum</a></li>
                                                        <li><a href="gallery-6-colum.html">Gallery Six Colum</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Advisor</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="advisor-carousel.html">Advisor Carousel</a></li>
                                                        <li><a href="advisor-2-colum.html">Advisor Two Colum</a></li>
                                                        <li><a href="advisor-3-colum.html">Advisor Three Colum</a></li>
                                                        <li><a href="advisor-carousel-2.html">Advisor Carousel Two</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">User Pages</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="profile.html">Profile</a></li>
                                                        <li><a href="edit-profile.html">Edit Profile</a></li>
                                                        <li><a href="login.html">login</a></li>
                                                        <li><a href="register.html">register</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                            <div class="col-menu col-md-3">
                                                <h6 class="title">Other Pages</h6>
                                                <div class="content">
                                                    <ul class="menu-col">
                                                        <li><a href="about-us.html">About Us</a></li>
                                                        <li><a href="faq.html">Faq</a></li>
                                                        <li><a href="pricing-table.html">Pricing Table</a></li>
                                                        <li><a href="contact.html">Contact</a></li>
                                                        <li><a href="404.html">Error Page</a></li>
                                                    </ul>
                                                </div>
                                            </div><!-- end col-3 -->
                                        </div><!-- end row -->
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Courses</a>
                                <ul class="dropdown-menu">
                                    <li><a href="courses.html">Courses Carousel One</a></li>
                                    <li><a href="courses-2.html">Courses Grid One</a></li>
                                    <li><a href="courses-3.html">Courses Grid Two</a></li>
                                    <li><a href="courses-4.html">Courses Carousel Two</a></li>
                                    <li><a href="course-details.html">Course Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Teachers</a>
                                <ul class="dropdown-menu">
                                    <li><a href="teachers.html">Advisor</a></li>
                                    <li><a href="teachers-details.html">Advisor Details</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle active" data-toggle="dropdown" >Event</a>
                                <ul class="dropdown-menu">
                                    <li><a href="event.html">Event Mixed Colum</a></li>
                                    <li><a href="event-2.html">Event Grid Colum</a></li>
                                    <li><a href="event-3.html">Event Carousel</a></li>
                                </ul>
                            </li>
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" >Blog</a>
                                <ul class="dropdown-menu">
                                    <li><a href="blog-standard.html">Blog Standard</a></li>
                                    <li><a href="blog-left-sidebar.html">Blog Left Sidebar</a></li>
                                    <li><a href="blog-right-sidebar.html">Blog Right Sidebar</a></li>
                                    <li><a href="blog-single-standard.html">Single Standard</a></li>
                                    <li><a href="blog-single-left-sidebar.html">Single Left Sidebar</a></li>
                                    <li><a href="blog-single-right-sidebar.html">Single Right Sidebar</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="contact.html">contact</a>
                            </li>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div>

            </nav>
            <!-- End Navigation -->

        </header>
        <!-- End Header -->

        <!-- Start Banner 
        ============================================= -->
        <div class="banner-area content-top-heading less-paragraph text-normal">
            <div id="bootcarousel" class="carousel slide animate_text carousel-fade" data-ride="carousel">

                <!-- Wrapper for slides -->
                <div class="carousel-inner text-light carousel-zoom">
                    <div class="item active">
                        <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/2440x1578.png);"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h3 data-animation="animated slideInLeft">Reach you career</h3>
                                                <h1 data-animation="animated slideInUp">Learn from best online training course</h1>
                                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/2440x1578.png);"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h3 data-animation="animated slideInLeft">We're glade to see you</h3>
                                                <h1 data-animation="animated slideInUp">explore our brilliant graduates</h1>
                                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="slider-thumb bg-fixed" style="background-image: url(assets/img/2440x1578.png);"></div>
                        <div class="box-table shadow dark">
                            <div class="box-cell">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-8">
                                            <div class="content">
                                                <h3 data-animation="animated slideInLeft">The goal of education</h3>
                                                <h1 data-animation="animated slideInUp">Join the bigest comunity of eduka</h1>
                                                <a data-animation="animated slideInUp" class="btn btn-light border btn-md" href="#">Learn more</a>
                                                <a data-animation="animated slideInUp" class="btn btn-theme effect btn-md" href="#">View Courses</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End Wrapper for slides -->

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#bootcarousel" data-slide="prev">
                    <i class="fa fa-angle-left"></i>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#bootcarousel" data-slide="next">
                    <i class="fa fa-angle-right"></i>
                    <span class="sr-only">Next</span>
                </a>

            </div>
        </div>
        <!-- End Banner -->

        <!-- jQuery Frameworks
        ============================================= -->
        <script src="assets/js/jquery-1.12.4.min.js"></script>
        <script src="assets/js/bootstrap.min.js"></script>
        <script src="assets/js/equal-height.min.js"></script>
        <script src="assets/js/jquery.appear.js"></script>
        <script src="assets/js/jquery.easing.min.js"></script>
        <script src="assets/js/jquery.magnific-popup.min.js"></script>
        <script src="assets/js/modernizr.custom.13711.js"></script>
        <script src="assets/js/owl.carousel.min.js"></script>
        <script src="assets/js/wow.min.js"></script>
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <script src="assets/js/count-to.js"></script>
        <script src="assets/js/loopcounter.js"></script>
        <script src="assets/js/jquery.nice-select.min.js"></script>
        <script src="assets/js/bootsnav.js"></script>
        <script src="assets/js/main.js"></script>
    </body>
</html>