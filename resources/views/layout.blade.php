<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- PAGE TITLE -->
    <title>DO</title>

    <!-- FAVICON AND APPLE TOUCHSCREEN ICONS -->
    <link rel="shortcut icon" href="images/favicon.ico">
    <link rel="apple-touch-icon" href="images/apple-touch-icon.png">

    <!-- ******************************
            STYLESHEETS
    *********************************** -->

    <!-- DEFAULT AND BOOTSTRAP STYLESHEET -->
    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">

    <!-- FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,600' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,300,700' rel='stylesheet' type='text/css'>

    <!-- FONT ICONS -->
    <link rel="stylesheet" href="/css/font-awesome.min.css" />
    <link rel="stylesheet" href="/css/simple-line-icons.css" />
    <link rel="stylesheet" href="/css/pe-icon-7-stroke.css" />
    <link rel="stylesheet" href="/css/themify-icons.css" />

    <!-- PLUGINS DEFAULT STYSHEETS-->
    <link rel="stylesheet" href="/css/magnific-popup.css">
    <link rel="stylesheet" href="/css/slider-pro.css">
    <link rel="stylesheet" href="/css/owl.carousel.css">
    <link rel="stylesheet" href="/css/owl.theme.css">
    <link rel="stylesheet" href="/css/owl.transitions.css">
    <link rel="stylesheet" href="/css/jquery.mmenu.all.css">
    <link rel="stylesheet" href="/css/animate.min.css">


    <!-- MAIN STYLESHEETS -->
    <link rel="stylesheet" href="/css/main.css">
    <link rel="stylesheet" href="/css/responsive.css" />

    <!-- MODERNIZER -->
    <script src="/js/modernizr-2.8.3.min.js"></script>


    <!--[if lt IE 9]>
    <script src="/js/html5shiv.min.js"></script>
    <script src="/js/respond.min.js"></script>
    <script src="/js/selectivizr-min.js"></script>
    <script src="/js/nwmatcher.js"></script>
    <script src="/js/IE9.js"></script>
    <![endif]-->
</head>

<body class="do-homepage-one">
<!-- PRELOADER -->
<div class="preloader">
    <div class="do-loader">&nbsp;</div>
</div>
<!-- START THE MAIN CONTENT HERE -->

<!--================================
    HEADER
=================================-->
<header>
    <!-- Navigation Menu start-->
    <nav class="navbar do-main-menu" role="navigation">
        <div class="container">

            <!-- Navbar Toggle -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Logo -->
                <a class="navbar-brand" href="index.html"><img class="logo" src="images/logo.png" alt="DO"></a>

            </div>
            <!-- Navbar Toggle End -->

            <!-- navbar-collapse start-->
            <div id="nav-menu" class="navbar-collapse do-menu-wrapper collapse" role="navigation">
                <ul class="nav navbar-nav do-menus">
                    <li class="active">
                        <a href="index.html">Home</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="homepage-2.html">HOMEPAGE 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="about_us.html">About us</a>
                    </li>
                    <li>
                        <a href="blog_creative.html">Blog</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog_creative.html">Blog Creative</a>
                            </li>
                            <li>
                                <a href="blog_masonry.html">Blog Reguler</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">Pages</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="blog_single.html">Blog Single</a>
                            </li>
                            <li>
                                <a href="portfolio-single-one.html">portfolio single 1</a>
                            </li>
                            <li>
                                <a href="portfolio-single-two.html">portfolio Single 2</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="portfolio-1px.html">Portfolio</a>
                        <ul class="sub-menu">
                            <li>
                                <a href="portfolio-2col.html">2 Column</a>
                            </li>
                            <li>
                                <a href="portfolio-3col.html">3 Column</a>
                            </li>
                            <li>
                                <a href="portfolio-4col.html">4 Column</a>
                            </li>
                            <li>
                                <a href="portfolio-with-space.html">With Space</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="contact_us.html">Contact</a>
                    </li>
                </ul>
            </div>
            <!-- navbar-collapse end-->

            <!-- SIDE MENU BTN -->
            <div class="do-side-menu-opener">
                <button class="do-side-menu-button" id="do-side-menu-open-button"></button>
            </div>
            <!-- SIDE MENU BTN END -->

        </div>
    </nav>
    <!-- Navigation Menu end-->
</header>
<!-- HEADER END -->

@yield('content')


<!--================================
    VIDEO SECTION
=================================-->
<section class="do-custom-video-section do-testimonial-section">
    <!-- Background Video -->
    <div class="do-custom-bg-video-wrapper">
        <video autoplay loop poster="images/poster.jpg" id="bgvid">
            <!-- <source src="video.webm" type="video/webm"> -->
            <source src="video.mp4" type="video/mp4">
        </video>
    </div>
    <!-- Background Video End -->

    <div class="do-parallax-overlay"></div>

    <div class="do-testimonial-wrapper">
        <div class="container">
            <div class="row">

                <!-- SECTION HEADING -->
                <div class="do-section-heading do-section-heading-light">
                    <h1>CLIENT SAYS</h1>
                </div>
                <!-- SECTION HEADING END -->

                <!-- Testimonial Slider -->
                <div id="do-testimonial" class="owl-carousel do-testimonial">

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Like what you see? Buy this theme with the click of a button and let us know what you</p>
                        <span>ADRIAN</span>
                        <img src="images/signature.png" alt="">
                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <span>ADRIAN</span>
                        <img src="images/signature-2.png" alt="">
                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <span>ADRIAN</span>
                        <img src="images/signature-3.png" alt="">
                    </div>
                    <!-- Slides End -->

                    <!-- Slides -->
                    <div class="do-testimonial-slides">
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right.</p>
                        <span>ADRIAN</span>
                        <img src="images/signature.png" alt="">
                    </div>
                    <!-- Slides End -->
                </div>
                <!-- Testimonial Slider End -->
            </div>
        </div>
    </div>
</section>
<!-- VIDEO SECTION END-->

<!--================================
    SOCIAL LINK SECTION
=================================-->
<section class="do-social-link-section">
    <div class="container">
        <div class="row">
            <a href="#" class="do-facebook">
                    <span>
                        <i class="ti-facebook"></i>
                    </span>
                FACEBOOK
            </a>

            <a href="#" class="do-twitter">
                    <span>
                        <i class="ti-twitter-alt"></i>
                    </span>
                TWITTER
            </a>

            <a href="#" class="do-vimeo">
                    <span>
                        <i class="ti-vimeo-alt"></i>
                    </span>
                vImeo
            </a>

            <a href="#" class="do-dribbble">
                    <span>
                        <i class="ti-dribbble"></i>
                    </span>
                drIbble
            </a>

            <a href="#" class="do-behance">
                    <span>
                        <i class="fa fa-behance"></i>
                    </span>
                behance
            </a>
        </div>
    </div>

<!--================================
    FOOTER SECTION
=================================-->
<footer class="do-footer">
    <div class="container">
        <div class="row">
            <!-- FOOTER TOP -->
            <div class="do-footer-top">
                <!-- About Widget -->
                <div class="do-footer-widget do-footer-about-widget col-md-3 col-sm-6 col-xs-12">
                    <div class="do-footer-logo-wrapper">
                        <a href="#">
                            <img src="images/logo-footer.png" alt="">
                        </a>
                    </div>

                    <div class="do-company-address">
                        <ul>
                            <li>
                                <i class="fa fa-map-marker"></i>
                                10/45 Beer Street Heaven, California Floor, USA 1208
                            </li>
                            <li>
                                <i class="fa fa-phone"></i>
                                +1 [09] 45 069 007
                            </li>
                            <li>
                                <i class="fa fa-envelope-o"></i>
                                mail@themebeer.com
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- About Widget End -->

                <!-- Link Widget -->
                <div class="do-footer-widget do-footer-link-widget col-md-3 col-sm-6 col-xs-12">
                    <h3 class="do-footer-widget-header">USEFUL LINKS</h3>
                    <ul>
                        <li><a href="#">Account Create</a></li>
                        <li><a href="#">Company Philoshophy</a></li>
                        <li><a href="#">Corporate Culture</a></li>
                        <li><a href="#">Portfolio</a></li>
                        <li><a href="#">Client Management</a></li>
                    </ul>
                </div>
                <!-- Link Widget End -->

                <!-- About Link Widget -->
                <div class="do-footer-widget do-about-link-widget col-md-3 col-sm-6 col-xs-12">
                    <h3 class="do-footer-widget-header">ABOUT OFFICE</h3>
                    <ul>
                        <li><a href="#">About History</a></li>
                        <li><a href="#">Company Philoshophy</a></li>
                        <li><a href="#">Corporate Profile</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Somewhere in</a></li>
                    </ul>
                </div>
                <!-- About Link Widget End -->

                <!-- Flickr Widget -->
                <div class="do-footer-widget do-flickr-widget col-md-3 col-sm-6 col-xs-12">
                    <h3 class="do-footer-widget-header">flickr photo</h3>
                    <div id="flickr-gallery"></div>
                </div>
                <!-- Flickr Widget End -->
            </div>
            <!-- FOOTER TOP END -->

            <!-- FOOTER BOTTOM -->
            <div class="do-footer-bottom">
                <a href="#" class="do-footer-author-name">ThemebeER</a>
            </div>
            <!-- FOOTER BOTTOM END -->
        </div>
    </div>
</footer>
<!-- FOOTER SECTION END-->








<!-- *******************************
            SCRIPTS
************************************ -->
<!-- JQUERY -->
<script src="/js/jquery-1.11.3.min.js"></script>

<!-- PLUGINS -->
<script src="/js/plugins.js"></script>

<!-- CUSTOM SCRIPTS -->
<script src="/js/main.js"></script>

</body>
</html>
