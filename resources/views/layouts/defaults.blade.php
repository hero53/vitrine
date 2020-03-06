<!DOCTYPE html>
<html lang="en">

<head>
    <title>Engineers &mdash; Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,700|Muli:300,400" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('fonts/public/icomoon/style.css')}}">

    <link rel="stylesheet" href="{{asset('css/public/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/public/jquery-ui.css')}}">
    <link rel="stylesheet" href="{{asset('css/public/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/public/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/public/owl.theme.default.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/public/jquery.fancybox.min.css')}}">

    <link rel="stylesheet" href="{{asset('css/public/bootstrap-datepicker.css')}}">

    <link rel="stylesheet" href="{{asset('fonts/public/flaticon/font/flaticon.css')}}">

    <link rel="stylesheet" href="{{asset('css/public/aos.css')}}">
    <link href="{{asset('css/public/jquery.mb.YTPlayer.min.css')}}" media="all" rel="stylesheet" type="text/css')}}">

    <link rel="stylesheet" href="{{asset('css/public/style.css')}}">



</head>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

<div class="site-wrap">

    <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
            <div class="site-mobile-menu-close mt-3">
                <span class="icon-close2 js-menu-toggle"></span>
            </div>
        </div>
        <div class="site-mobile-menu-body"></div>
    </div>



    <div class="header-top bg-light">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-6 col-lg-3">
                    <a href="index.blade.php">
                        <img src="{{asset('img/public/logo.png')}}" alt="Image" class="img-fluid">
                    </a>
                </div>
                <div class="col-lg-3 d-none d-lg-block">

                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-placeholder text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">San Francisco</span>
                            <span class="caption-text">Mountain View, Fake st., CA</span>
                        </div>
                    </div>

                </div>
                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-call text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">000 209 392 312</span>
                            <span class="caption-text">Toll free</span>
                        </div>
                    </div>
                </div>

                <div class="col-lg-3 d-none d-lg-block">
                    <div class="quick-contact-icons d-flex">
                        <div class="icon align-self-start">
                            <span class="flaticon-email text-primary"></span>
                        </div>
                        <div class="text">
                            <span class="h4 d-block">info@gmail.com</span>
                            <span class="caption-text">Gournadi, 1230 Bariasl</span>
                        </div>
                    </div>
                </div>

                <div class="col-6 d-block d-lg-none text-right">
                    <a href="#" class="d-inline-block d-lg-none site-menu-toggle js-menu-toggle text-black"><span
                                class="icon-menu h3"></span></a>
                </div>
            </div>
        </div>




        <div class="site-navbar py-2 js-sticky-header site-navbar-target d-none pl-0 d-lg-block" role="banner">

            <div class="container">
                <div class="d-flex align-items-center">

                    <div class="mr-auto">
                        <nav class="site-navigation position-relative text-right" role="navigation">
                            <ul class="site-menu main-menu js-clone-nav mr-auto d-none pl-0 d-lg-block">
                                <li class="active">
                                    <a href="{{route('home')}}" class="nav-link text-left">ACCUEIL</a>
                                </li>
                                <li>
                                    <a href="{{route('about')}}" class="nav-link text-left">A PROPOS DE NOUS</a>
                                </li>

                                <li><a href="{{route('blog.index')}}" class="nav-link text-left">Blog</a></li>
                                <li>
                                    <a href="{{route('devi')}}" class="nav-link text-left">Contact</a>
                                </li>
                            </ul>                                                                                                                                                                                                                                                                                          </ul>
                        </nav>

                    </div>

                </div>
            </div>

        </div>

    </div>

    {{--content--}}
<div>
    @yield('content');
</div>


    <div class="py-5 bg-primary block-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <h3 class="text-white">Subscribe To Newsletter</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nesciunt, reprehenderit!</p>
                </div>
                <div class="col-lg-6">
                    <form action="#" class="form-subscribe d-flex">
                        <input type="text" class="form-control form-control-lg">
                        <input type="submit" class="btn btn-secondary px-4" value="Subcribe">
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <p class="mb-4"><img src="{{asset('img/public/logo2.png')}}" alt="Image" class="img-fluid"></p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Beatae nemo minima qui dolor, iusto iure.</p>
                    <p><a href="#">Learn More</a></p>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Our Company</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">About</a></li>
                        <li><a href="#">News</a></li>
                        <li><a href="#">Services</a></li>
                        <li><a href="#">Our Team</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Projects</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Our Services</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Industrial</a></li>
                        <li><a href="#">Construction</a></li>
                        <li><a href="#">Remodeling</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h3 class="footer-heading"><span>Contact</span></h3>
                    <ul class="list-unstyled">
                        <li><a href="#">Help Center</a></li>
                        <li><a href="#">Support Community</a></li>
                        <li><a href="#">Press</a></li>
                        <li><a href="#">FAQ</a></li>
                        <li><a href="#">Our Partners</a></li>
                    </ul>
                </div>
            </div>

            <div class="row">
                <div class="col-12">
                    <div class="copyright">
                        <p>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>
<!-- .site-wrap -->


<!-- loader -->
<div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#ff5e15"/></svg></div>

<script src="{{asset('js/public/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('js/public/jquery-migrate-3.0.1.min.js')}}"></script>
<script src="{{asset('js/public/jquery-ui.js')}}"></script>
<script src="{{asset('js/public/popper.min.js')}}"></script>
<script src="{{asset('js/public/bootstrap.min.js')}}"></script>
<script src="{{asset('js/public/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/public/jquery.stellar.min.js')}}"></script>
<script src="{{asset('js/public/jquery.countdown.min.js')}}"></script>
<script src="{{asset('js/public/bootstrap-datepicker.min.js')}}"></script>
<script src="{{asset('js/public/jquery.easing.1.3.js')}}"></script>
<script src="{{asset('js/public/aos.js')}}"></script>
<script src="{{asset('js/public/jquery.fancybox.min.js')}}"></script>
<script src="{{asset('js/public/jquery.sticky.js')}}"></script>
<script src="{{asset('js/public/jquery.mb.YTPlayer.min.js')}}"></script>




<script src="{{asset('js/public/main.js')}}"></script>

</body>

</html>