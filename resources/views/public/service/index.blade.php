@extends('layouts.default',['title'=>'Service'])
@section('content')
    <!-- CONTENT START -->
    <div class="page-content  bg-white">

        <!-- INNER PAGE BANNER -->
        <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/Blue-Hill-Exploration-person-holding-grinder-1216544.jpg')}});">
            <div class="overlay-main bg-black" style="opacity:0.5;"></div>
            <div class="container">
                <div class="wt-bnr-inr-entry">
                    <h1 class="text-white">Services</h1>
                </div>
            </div>
        </div>
        <!-- INNER PAGE BANNER END -->

        <!-- BREADCRUMB ROW -->
        <div class="bg-gray-light p-tb20">
            <div class="container">
                <ul class="wt-breadcrumb breadcrumb-style-1">
                    <li><a href="{{route('home.public')}}">Accueil</a></li>
                    <li>Services</li>
                </ul>
            </div>
        </div>
        <!-- BREADCRUMB ROW END -->

        <!-- SECTION CONTENT -->
        <div class="section-full p-t80 p-b50  ">
            <div class="container">
                <!-- TITLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Nos servises</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>

                </div>
                <!-- TITLE END -->
                <div class="section-content">
                    <div class="row">

                        <!-- COLUMNS 1 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-construction-excavator-bagger-building-site-14651.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Exploration</a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 2 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-tower-crane-during-daytime-93400.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Bâtiments et Travaux Publics </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 3 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-cable-clouds-current-electricity-414967.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Ingénierie en Electricité et Télécom </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-aerial-photo-of-excavator-road-roller-and-bulldozer-1579356.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Forage, Hydraulique et Géophysique </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-three-yellow-excavators-near-front-end-loader-1238864.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Exploitation minière et Pétrolière </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-assorted-vegetable-store-displays-2252584.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Agriculture et Agro-industrie </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-closeup-photo-of-sprout-1002703.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Eau, Sol et Environnement </a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-black-concrete-biulding-51325.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Commerce, Import-Export </a></h4>
                    
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="col-md-4 col-sm-4 p-tb15">
                            <div class="wt-box bg-white">
                                <div class="wt-media">
                                    <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-books-classroom-close-up-college-289737.jpg')}}" alt=""></a>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h4 class="wt-title m-t0"><a href="javascript:void(0);">Formation et Encadrement Technique </a></h4>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>

            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->

@endsection