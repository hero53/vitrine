@extends('layouts.default',['title'=>'Actualités'])
@section('content')
    <!-- INNER PAGE BANNER -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/Blue-Hill-Exploration-blog-icon-information-internet-262508.jpg')}});">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Actualites </h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->
    <!-- BREADCRUMB ROW -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{route('home.public')}}">Accueil</a></li>
                <li>Actualités </li>
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

                    <div class="row">
                    <!-- COLUMNS 4 -->
                    @foreach($articles as $article)
                            <div class="col-md-4 col-sm-4">
                                <div class="blog-post latest-blog-1 date-style-3 date-skew">
                                    <div class="wt-post-media wt-img-effect zoom-slow">
                                        <a href="javascript:;"><img src="{{asset('storage').'/'.$article->img}}" alt="" style="height: 200px;"></a>
                                    </div>
                                    <div class="wt-post-info p-a30 p-b20 bg-white">
                                        <div class="wt-post-title ">
                                            <h3 class="post-title"><a href="javascript:;">{{ $article->title }}</a></h3>
                                        </div>
                                        <div class="wt-post-meta ">
                                            <ul>
                                                <li class="post-date"><i class="fa fa-calendar"></i> <strong style="color: white;">{{$article->created_at->format('d/m/y à H:m')}}</strong></li>
                                            </ul>
                                        </div>
                                        <div class="wt-post-text">
                                            <p class="text-justify">
                                                {!!Str::limit($article->article,30)!!}

                                            </p>
                                        </div>
                                        <div class="wt-post-readmore">
                                            <a href="{{route('blog.show',$article)}}" title="READ MORE" rel="bookmark" class="site-button">LIRE LA SUITE</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    @endforeach
                    </div>
           

                </div>
                <!-- LEFT PART END -->

                <!-- SIDE BAR START -->
                <div class="col-md-3 bg-white p-tb30">

                    <aside  class="side-bar">



                        <!-- 7. OUR CLIENT -->
                        <div class="widget">
                            <h4 class="widget-title">Nos partenaire</h4>
                            <div class="owl-carousel widget-client p-t10">

                                <!-- COLUMNS 1 -->
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="#"><img src="{{asset('images/logo/logo1.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 2 -->
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="#"><img src="{{asset('images/logo/logo2.jpg')}}" alt=""></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- COLUMNS 3 -->
                                <div class="item">
                                    <div class="ow-client-logo">
                                        <div class="client-logo wt-img-effect on-color">
                                            <a href="#"><img src="{{asset('images/logo/logo3.jpg')}}" alt=""></a>
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