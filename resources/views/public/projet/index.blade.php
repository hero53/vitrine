@extends('layouts.default')
@section('content')

    <!-- CONTENT START -->
    <div class="page-content">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/Portfolio.jpg);">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Portfolio 3</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="javascript:void(0);">Home</a></li>
                    <li>Portfolio 1</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT START -->
        <div class="section-full p-t80 p-b50">

            <!-- PAGINATION START -->
            <div class="filter-wrap p-a15">
                <ul class="masonry-filter link-style  text-uppercase">
                    <li class="active"><a data-filter="*" href="#">All</a></li>
                    <li><a data-filter=".house" href="#">House</a></li>
                    <li><a data-filter=".building" href="#">Building</a></li>
                    <li><a data-filter=".office" href="#">Office</a></li>
                    <li><a data-filter=".garden" href="#">Garden</a></li>
                    <li><a data-filter=".interior" href="#">Interior</a></li>
                </ul>
            </div>
            <!-- PAGINATION END -->

            <!-- GALLERY CONTENT START -->
            <div class="portfolio-wrap mfp-gallery no-col-gap clearfix">
                <div class="container-fluid">
                    <div class="row">
                        <!-- COLUMNS 1 -->
                        <div class="masonry-item house col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic1.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">House</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="masonry-item building col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic2.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Building</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="masonry-item office col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic3.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Office</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="masonry-item garden col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic4.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Garden</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="masonry-item interior col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic5.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Interior</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="masonry-item office col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic6.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Office</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="masonry-item building col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic7.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Building</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="masonry-item house col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic8.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">House</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="masonry-item interior col-lg-4 col-md-6 col-sm-6">
                            <div class="wt-box">
                                <div class="wt-thum-bx wt-img-overlay2 wt-img-effect zoom">
                                    <img src="images/portfolio/pic1.jpg" alt="">
                                    <div class="wt-info-has p-a20">
                                        <div class="wt-info p-tb10">
                                            <h4 class="m-a0">Interior</h4>
                                        </div>
                                        <div class="wt-info-has-text">Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC.</div>
                                        <a href="javascript:void(0);" class="site-button skew-icon-btn">More <i class="fa fa-angle-double-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- GALLERY CONTENT END -->

        </div>
        <!-- SECTION CONTENT END  -->

    </div>
@endsection