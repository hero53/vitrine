@extends('layouts.default')
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(images/banner/blog-banner.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Blog </h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="javascript:void(0);">Accueil</a></li>
                <li>Blog </li>
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
                    @foreach($articles as $article)
                        <div class="blog-post blog-lg date-style-1">

                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:void(0);"><img src="{{asset('storage').'/'.$article->img}}" alt="bla"></a>
                            </div>

                            <div class="wt-post-info p-a30 p-b15  bg-white">

                                <div class="wt-post-title ">
                                    <h3 class="post-title"><a href="javascript:void(0);"> {{ $article->title }} </a></h3>
                                </div>
                                <div class="wt-post-meta ">
                                    <ul>
                                        <li class="post-date"> <i class="fa fa-calendar"></i><strong>{{$article->created_at->format('d/m/y à H:m')}}</strong> <span></li>
                                        <li class="post-comment"><i class="fa fa-comments"></i> <a href="javascript:void(0);">17  Comments</a> </li>
                                    </ul>
                                </div>
                                <div class="wt-post-text">
                                    <p> {{$article->article}}</p>
                                </div>
                                <div class="wt-post-readmore">
                                    <a href="#" title="READ MORE" rel="bookmark" class="site-button">LIRE LA SUITE</a>
                                </div>

                            </div>

                        </div>
                    @endforeach



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
                            <h4 class="widget-title">Nos clients</h4>
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