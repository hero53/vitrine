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
    <link rel="icon" href="{{asset('images/TEST1.jpg')}}" type="image/x-icon" />
    <link rel="shortcut icon" type="/image/x-icon" href="{{asset('images/logo.jpg')}}" />

    <!-- PAGE TITLE HERE -->
    <title>{{$title}} - BHEX</title>

    <!-- MOBILE SPECIFIC -->
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- [if lt IE 9]>
    <script src="js/html5shiv.min.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif] -->

    <!-- BOOTSTRAP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap.min.css')}}">
    <!-- FONTAWESOME STYLE SHEET -->
    <!-- FONTAWESOME STYLE SHEET -->
    {{----}}
    <link rel="stylesheet" type="text/css" href="{{asset('css/fontawesome/css/font-awesome.min.css')}}" />
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">

    <!-- FLATICON STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/flaticon.min.css')}}">
    <!-- ANIMATE STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/animate.min.css')}}">
    <!-- OWL CAROUSEL STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/owl.carousel.min.css')}}">
    <!-- BOOTSTRAP SELECT BOX STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/bootstrap-select.min.css')}}">
    <!-- MAGNIFIC POPUP STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/magnific-popup.min.css')}}">
    <!-- LOADER STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/loader.min.css')}}">
    <!-- MAIN STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/style.css')}}">
    <!-- THEME COLOR CHANGE STYLE SHEET -->
    <link rel="stylesheet" class="skin" type="text/css" href="{{asset('css/skin/skin-1.css')}}">
    <!-- CUSTOM  STYLE SHEET -->
    <link rel="stylesheet" type="text/css" href="{{asset('css/custom.css')}}">



    <!-- REVOLUTION SLIDER CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/settings.css')}}">
    <!-- REVOLUTION NAVIGATION STYLE -->
    <link rel="stylesheet" type="text/css" href="{{asset('plugins/revolution/revolution/css/navigation.css')}}">

    <!-- GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,300italic,400italic,500,500italic,700,700italic,900italic,900' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,800italic,800,700italic' rel='stylesheet' type='text/css'>

    <!-- Main -->
    <link rel="stylesheet" href="{{asset('css/main.css')}}">
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
                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                            <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                        </ul>
                        <ul class="list-unstyled e-p-bx pull-right">
                            <li><i class="fa fa-envelope"></i>info.bhex@gmail.com</li>
                            <li><i class="fa fa-phone"></i>(+225) 58 83 46 11/(+225) 44 50 75 22</li>
                        </ul>

                    </div>
                </div>
            </div>
        </div>
        <!-- MAIN BAR START -->
        <div class="sticky-header main-bar-wraper">
            <div class="main-bar bg">
                <div class="container">
                    <!-- SITE LOGO -->
                    <div class="logo-header ">
                        <a href="{{route('home.public')}}">
                            <img src="{{asset('images/logo.jpg')}}" width="230" height="67" alt="" />
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

                    <!-- MAIN NAV -->
                    <div class="header-nav navbar-collapse collapse ">
                        <ul class=" nav navbar-nav">
                            <li class="tbg">
                                <a href="{{route('home.public')}}">Accueil<i class=""></i></a>
                            </li>
                            <li class="sub-menu">
                                <a href="{{route('team.index')}}">A propos<i class=""></i></a>
                            </li>

                            <li class="ok">
                                <a href="{{route('service')}}">SERVICES<i class=""></i></a>
                           
                            </li>

                            <li>
                                <a href="{{route('projet.index')}}">Nos realisation<i class=""></i></a>
 
                            </li>

                            <li class="submenu-direction">
                                <a href="{{route('blog.index')}}">Actualites<i class=""></i></a>

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
                <div class="call-to-action-wrap bg-primary " style="background-image:url({{asset('images/Blue-Hill-Exploration.jpg')}}); background-repeat:repeat;">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-8 col-sm-8">
                                <div class="call-to-action-left p-tb20 p-r50">
                                    
                                </div>
                            </div>

                            <div class="col-md-3">
                                <div class="call-to-action-right p-tb30">
                                    <a href="{{route('contact')}}" class="site-button-secondry text-uppercase"  style="font-weight:600;">
                                        NOUS CONTACTER  <i class="fa fa-angle-double-right"></i>
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
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 ">

                                <div class="col-md-4 col-sm-6  p-tb20">
                                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                        <div class="icon-md text-white">
                                            <span class="flaticon-placeholder"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Address</h5>
                                            <p>Abidjan, Yopougon Attié </p>
                                        </div>
                                        <br>
                                        <br>
                                        <br>
                                    </div>

                                </div>
                                <div class="col-md-4 col-sm-6  p-tb20 ">
                                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix ">
                                        <div class="icon-md text-white">
                                            <span class="flaticon-smartphone"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Phone</h5>
                                            <p class="m-b0">+225 58 83 46 11 </p>
                                            <p class="m-b0">+225 44 50 75 22</p>
                                            <p class="m-b0">+226 78 52 33 65 </p>
                                            <p class="m-b0">+226 70 78 29 80</p>



                                        </div>
                                    </div>
                                </div>
                                <!--  <div class="col-md-3 col-sm-6  p-tb20">
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
                                 </div> -->
                                <div class="col-md-4 col-sm-6 p-tb20">
                                    <div class="wt-icon-box-wraper left  bdr-1 bdr-gray-dark p-tb15 p-lr10 clearfix">
                                        <div class="icon-md text-white">
                                            <span class="flaticon-email"></span>
                                        </div>
                                        <div class="icon-content">
                                            <h5 class="wt-tilte text-uppercase m-b0">Email</h5>
                                            <p class="m-b0 ">info.bhex@gmail.com</p>
                                            <br>
                                            <br>
                                            <br>

                                        </div>
                                    </div>
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
                            <div class="text-center">
                                <span class="copyrights-text ">Copyright &copy; Developed by Soft-univers 2020</span>
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
    <script   src="{{asset('js/jquery-1.12.4.min.js')}}"></script><!-- JQUERY.MIN JS -->
    <script   src="{{asset('js/bootstrap.min.js')}}"></script><!-- BOOTSTRAP.MIN JS -->

    <script   src="{{asset('js/bootstrap-select.min.js')}}"></script><!-- FORM JS -->
    <script   src="{{asset('js/jquery.bootstrap-touchspin.min.js')}}"></script><!-- FORM JS -->

    <script   src="{{asset('js/magnific-popup.min.js')}}"></script><!-- MAGNIFIC-POPUP JS -->

    <script   src="{{asset('js/waypoints.min.js')}}"></script><!-- WAYPOINTS JS -->
    <script   src="{{asset('js/counterup.min.js')}}"></script><!-- COUNTERUP JS -->
    <script   src="{{asset('js/waypoints-sticky.min.js')}}"></script><!-- COUNTERUP JS -->

    <script  src="{{asset('js/isotope.pkgd.min.js')}}"></script><!-- MASONRY  -->

    <script   src="{{asset('js/owl.carousel.min.js')}}"></script><!-- OWL  SLIDER  -->

    <script   src="{{asset('js/stellar.min.js')}}"></script><!-- PARALLAX BG IMAGE   -->
    <script   src="{{asset('js/scrolla.min.js')}}"></script><!-- ON SCROLL CONTENT ANIMTE   -->

    <script   src="{{asset('js/custom.js')}}"></script><!-- CUSTOM FUCTIONS  -->
    <script   src="{{asset('js/shortcode.js')}}"></script><!-- SHORTCODE FUCTIONS  -->



    <!-- REVOLUTION JS FILES -->
    <script  src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.tools.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/jquery.themepunch.revolution.min.js')}}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS  (Load Extensions only on Local File Systems !  The following part can be removed on Server for On Demand Loading) -->
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.actions.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.carousel.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.kenburn.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.layeranimation.min.js')}}"></script>
    <script  src="plugins/revolution/revolution/js/extensions/revolution.extension.migration.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.navigation.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.parallax.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.slideanims.min.js')}}"></script>
    <script  src="{{asset('plugins/revolution/revolution/js/extensions/revolution.extension.video.min.js')}}"></script>

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
