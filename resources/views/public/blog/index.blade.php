@extends('layouts.default')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/blog-banner.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Blog large image with sidebar</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="javascript:void(0);">Home</a></li>
                <li>Blog large image with sidebar</li>
            </ul>
        </div>
    </div>
    <!-- BREADCRUMB ROW END -->
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50 bg-gray">
        <div class="container">
            <div class="row">

                <!-- LEFT PART START -->
                <div class="col-md-9">


                    <!-- COLUMNS 4 -->
                    <div class="blog-post blog-lg date-style-1">

                        <div class="wt-post-media wt-img-effect zoom-slow">
                            <a href="javascript:void(0);"><img src="images/blog/default/thum4.jpg" alt=""></a>
                        </div>
                        <div class="wt-post-info p-a30 p-b15  bg-white">

                            <div class="wt-post-title ">
                                <h3 class="post-title"><a href="javascript:void(0);">Post Title</a></h3>
                            </div>
                            <div class="wt-post-meta ">
                                <ul>
                                    <li class="post-date"> <i class="fa fa-calendar"></i><strong>10 Jun</strong> <span> 2018</span> </li>
                                    <li class="post-author"><i class="fa fa-user"></i><a href="javascript:void(0);">By <span>Devid</span></a> </li>
                                    <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">17  Comments</a> </li>
                                </ul>
                            </div>
                            <div class="wt-post-text">
                                <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia,</p>
                            </div>
                            <div class="wt-post-readmore">
                                <a href="javascript:void(0);" title="READ MORE" rel="bookmark" class="site-button">READ MORE</a>
                            </div>

                        </div>

                    </div>


                    <!-- PAGINATION START -->
                    <div class="pagination-bx clearfix ">
                        <ul class = "custom-pagination pagination">
                            <li><a href = "#">&laquo;</a></li>
                            <li class = "active"><a href = "#">1</a></li>
                            <li><a href = "#">2</a></li>
                            <li><a href = "#">3</a></li>
                            <li><a href = "#">4</a></li>
                            <li><a href = "#">5</a></li>
                            <li><a href = "#">&raquo;</a></li>
                        </ul>
                    </div>
                    <!-- PAGINATION END -->

                </div>
                <!-- LEFT PART END -->

                <!-- SIDE BAR START -->
                <div class="col-md-3 bg-white p-tb30">

                    <aside  class="side-bar">



                        <!-- 7. OUR CLIENT -->
                        <div class="widget">
                            <h4 class="widget-title">Our Client</h4>
                            <div class="owl-carousel widget-client p-t10">

                                <!-- COLUMNS 1 -->
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="#"><img src="images/client-logo/logo1.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="#"><img src="images/client-logo/logo2.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="#"><img src="images/client-logo/logo3.png" alt=""></a>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                    </aside>

                </div>
                <!-- SIDE BAR END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->
@endsection