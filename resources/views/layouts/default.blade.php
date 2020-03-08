<!DOCTYPE html>
<html lang="en">

<head>

    <!-- META -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="keywords" content="" />
    <meta name="author" content="" />
    <meta name="robots" content="" />
    <meta name="description" content="" />

    <!-- FAVICONS ICON -->
    <link rel="icon" href="images/favicon.ico" type="image/x-icon" />
    <link rel="shortcut icon" type="image/x-icon" href="images/favicon.png" />

    <!-- PAGE TITLE HERE -->
    <title>Contruction-New</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <!-- FONTAWESOME STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/fontawesome/css/font-awesome.min.css" />
    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/flaticon.min.css">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.min.css">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/loader.min.css">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="css/skin/skin-1.css">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">



    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/settings.css">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="plugins/revolution/revolution/css/navigation.css">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>

</head>

<body>

<div class="page-wraper">

    <!-- HEADER START -->
    <header class="site-header header-style-1 ">
        <!-- TOP BAR START -->
        <div class="top-bar">
            <div class="container">
                <div class="row">
                    <div class="wt-topbar-right clearfix">
                        <ul class="social-bx list-inline pull-right">
                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-twitter"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-rss"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-youtube"></a></li>
                            <li><a href="javascript:void(0);" class="fa fa-instagram"></a></li>
                        </ul>
                        <ul class="list-unstyled e-p-bx pull-right">
                            <li><i class="fa fa-envelope"></i>mail@startuprr.com</li>
                            <li><i class="fa fa-phone"></i>(888) 123-4567</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN BAR START -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg-primary">
                <div class="container">
                    <!-- SITE LOGO -->
                    <div class="logo-header mostion header-skew">
                        <a href="index.html">
                            <img src="images/logo.png" width="230" height="67" alt="" />
                        </a>
                    </div>
                    <!-- NAV TOGGLE BUTTON -->
                    <button data-target=".header-nav" data-toggle="collapse" type="button" class="navbar-toggle collapsed">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- SITE Search AREA -->
                    <div class="site-search">
                        <form action="#">
                            <div class="input-group">
                                <input name="site-search" type="text" class="form-control" placeholder="Type to search">
                                <span class="input-group-btn">
                                        <button type="button" class="site-button"><i class="fa fa-search"></i></button>
                                    </span>
                            </div>
                        </form>
                    </div>
                    <!-- MAIN NAV -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class=" nav navbar-nav">
                            <li class="sub-menu">
                                <a href="javascript:;">Home<i class=""></i></a>
                            </li>

                            <li>
                                <a href="{{route('service')}}">SERVICES<i class="fa fa-chevron-down"></i></a>
                                <ul class="sub-menu">
                                    <li><a href="product.html">Exploration et Exploitation minière et Pétrolière </a></li>
                                    <li><a href="product.html">Bâtiments et Travaux Publics </a></li>
                                    <li><a href="product.html">Ingénierie en Electricité et Télécom </a></li>
                                    <li><a href="product.html">Forage, Hydraulique et Géophysique </a></li>
                                    <li><a href="product.html">Agriculture et Agro-industrie </a></li>
                                    <li><a href="product.html">Eau, Sol et Environnement </a></li>
                                    <li><a href="product.html">Commerce, Import-Export </a></li>
                                    <li><a href="product.html">Formation et Encadrement Technique </a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="javascript:;">PROJET<i class=""></i></a>

                            </li>

                            <li class="submenu-direction">
                                <a href="{{route('blog.index')}}">BLOG<i class=""></i></a>

                            </li>
                            <li>
                                <a href="{{route('contact')}}">CONTACT<i class=""></i></a>

                            </li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- HEADER END -->

    <!-- CONTENT START -->
    <div class="page-content">
        @yield('content')



        <!-- FOOTER START -->
            <footer class="site-footer footer-dark">
                <!-- COLL-TO ACTION START -->
                <!-- COLL-TO ACTION START -->
                <div class="call-to-action-wrap bg-primary" style="background-image:url(images/background/bg-4.png); background-repeat:repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="call-to-action-left p-tb20 p-r50">
                                    <h4 class="text-uppercase m-b10">We are ready to build your dream tell us more about your project</h4>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse viverra mauris eget tortor.</p>
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="call-to-action-right p-tb30">
                                    <a href="contact-1.html" class="site-button-secondry text-uppercase"  style="font-weight:600;">
                                        Contact us <i class="fa fa-angle-double-right"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FOOTER BLOCKES START -->
                <div class="footer-top overlay-wraper">
                    <div class="overlay-main bg-black" style="opacity:0;"></div>
                    <div class="container">


                            <div class="col-md-3 col-sm-6  p-tb20">
                                <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                    <div class="icon-md text-primary">
                                        <span class="flaticon-placeholder"></span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                                        <p>No.123 Chalingt Gates, Supper market New York</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6  p-tb20 ">
                                <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                    <div class="icon-md text-primary">
                                        <span class="flaticon-smartphone"></span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                                        <p class="m-b0">+41 555 888 9585</p>
                                        <p>+41 555 888 9585</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6  p-tb20">
                                <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                    <div class="icon-md text-primary">
                                        <span class="flaticon-fax"></span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Fax</h5>
                                        <p class="m-b0">FAX: (123) 123-4567</p>
                                        <p>FAX: (123) 123-4567</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6 p-tb20">
                                <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                    <div class="icon-md text-primary">
                                        <span class="flaticon-email"></span>
                                    </div>
                                    <div class="icon-content">
                                        <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                        <p class="m-b0">info@demo.com</p>
                                        <p>info@demo1234.com</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <!-- FOOTER COPYRIGHT -->
                <div class="footer-bottom overlay-wraper">
                    <div class="overlay-main bg-black" style="opacity:0;"></div>
                    <div class="constrot-strip"></div>
                    <div class="container p-t30">
                        <div class="row">
                            <div class="wt-footer-bot-left">
                                <span class="copyrights-text">© 2017 Your Company. All Rights Reserved. Designed By Constrot.</span>
                            </div>
                            <div class="wt-footer-bot-right">
                                <ul class="copyrights-nav pull-right">
                                    <li><a href="javascript:void(0);">Terms  & Condition</a></li>
                                    <li><a href="javascript:void(0);">Privacy Policy</a></li>
                                    <li><a href="contact-1.html">Contact Us</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            <!-- FOOTER END -->

            <!-- BUTTON TOP START -->
            <button class="scroltop" ><i class=" fa fa-arrow-up"></i></button>

    </div>




    <!-- JAVASCRIPT  FILES ========================================= -->
    <script   src="js/jquery-1.12.4.min.js"></script><!-- JQUERY.MIN JS -->
    <script   src="js/bootstrap.min.js"></script><!-- BOOTSTRAP.MIN JS -->

    <script   src="js/bootstrap-select.min.js"></script><!-- FORM JS -->
    <script   src="js/jquery.bootstrap-touchspin.min.js"></script><!-- FORM JS -->

    <script   src="js/magnific-popup.min.js"></script><!-- MAGNIFIC-POPUP JS -->

    <script   src="js/waypoints.min.js"></script><!-- WAYPOINTS JS -->
    <script   src="js/counterup.min.js"></script><!-- COUNTERUP JS -->
    <script   src="js/waypoints-sticky.min.js"></script><!-- COUNTERUP JS -->

    <script  src="js/isotope.pkgd.min.js"></script><!-- MASONRY  -->

    <script   src="js/owl.carousel.min.js"></script><!-- OWL  SLIDER  -->

    <script   src="js/stellar.min.js"></script><!-- PARALLAX BG IMAGE   -->
    <script   src="js/scrolla.min.js"></script><!-- ON SCROLL CONTENT ANIMTE   -->

    <script   src="js/custom.js"></script><!-- CUSTOM FUCTIONS  -->
    <script   src="js/shortcode.js"></script><!-- SHORTCODE FUCTIONS  -->



    <!-- REVOLUTION JS FILES -->
    <script  src="plugins/revolution/revolution/js/jquery.themepunch.tools.min.js"></script>
    <script  src="plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js"></script>

    <!-- REVOLUTION SLIDER FUNCTION  ===== -->
    <script >

        var tpj = jQuery;
        var revapi1014;

        tpj(document).ready(function() {
            if (tpj("#rev_slider_1014_1").revolution == undefined) {
                revslider_showDoubleJqueryError("#rev_slider_1014_1");
            } else {
                revapi1014 = tpj("#rev_slider_1014_1").show().revolution({
                    sliderType: "standard",
                    jsFileLocation: "revolution/js/",
                    sliderLayout: "fullwidth",
                    dottedOverlay: "none",
                    delay: 9000,
                    navigation: {
                        keyboardNavigation: "off",
                        keyboard_direction: "horizontal",
                        mouseScrollNavigation: "off",
                        mouseScrollReverse: "default",
                        onHoverStop: "off",
                        touch: {
                            touchenabled: "on",
                            swipe_threshold: 75,
                            swipe_min_touches: 1,
                            swipe_direction: "horizontal",
                            drag_block_vertical: false
                        },
                        arrows: {
                            style: "hermes",
                            enable: true,
                            hide_onmobile: false,
                            hide_onleave: false,
                            left: {
                                h_align: "left",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            },
                            right: {
                                h_align: "right",
                                v_align: "center",
                                h_offset: 0,
                                v_offset: 0
                            }
                        }
                    },
                    viewPort: {
                        enable: true,
                        outof: "pause",
                        visible_area: "80%",
                        presize: false
                    },
                    responsiveLevels: [1240, 1024, 778, 480],
                    visibilityLevels: [1240, 1024, 778, 480],
                    gridwidth: [1240, 1240, 1240, 800],
                    gridheight: [700, 700, 700, 700],
                    lazyType: "none",
                    parallax: {
                        type: "mouse",
                        origo: "slidercenter",
                        speed: 2000,
                        levels: [2, 3, 4, 5, 6, 7, 12, 16, 10, 50, 47, 48, 49, 50, 51, 55],
                        type: "mouse",
                    },
                    shadow: 0,
                    spinner: "off",
                    stopLoop: "off",
                    stopAfterLoops: -1,
                    stopAtSlide: -1,
                    shuffle: "off",
                    autoHeight: "off",
                    hideThumbsOnMobile: "off",
                    hideSliderAtLimit: 0,
                    hideCaptionAtLimit: 0,
                    hideAllCaptionAtLilmit: 0,
                    debugMode: false,
                    fallbacks: {
                        simplifyAll: "off",
                        nextSlideOnWindowFocus: "off",
                        disableFocusListener: false,
                    }
                });
            }
        }); /*ready*/
    </script>









</body>

</html>
