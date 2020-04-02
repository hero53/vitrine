@extends('layouts.default',['title'=>'A propos'])
@section('content')
    <!-- INNER PAGE BANNER START -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/Blue-Hill-Exploration-20171031_131342.jpg')}});">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">APROPOS</h1>
            </div>
        </div>
    </div>
    <!-- INNER PAGE BANNER END -->

    <!-- BREADCRUMB ROW START -->
    <div class="bg-gray-light p-tb20">
        <div class="container">
            <ul class="wt-breadcrumb breadcrumb-style-1">
                <li><a href="{{route('home.public')}}">Accueil</a></li>
                <li>Notre équipe</li>
            </ul>
        </div>
    </div>
    <div class="section-full p-t80 p-b10">
        <div class="container ">
            <div class="row">
                <div class="col-12">
                    <div class="row">
                        <div class="col-md-3 col-md-offset-5">
                            <a class="btn btn-primary lang active" href="#fr">Français</a>
                            <a class="btn btn-danger lang " href="#ang">English</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>

    </div>



    <!-- BREADCRUMB ROW END -->
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container cv" id="fr">
            <div class="row">

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="wt-media wt-team-full-media m-b30">
                                <a href="#"><img src="{{asset('images/image/avatar-directeur-bhex.jpg')}}" alt="team"></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class=" m-b70">
                                <!-- TITLE START -->
                                <div class="section-head text-center">
                                    <h2 class="text-uppercase">Notre MANAGERr</h2>
                                    <div class="wt-separator-outer ">
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator style-square">
                                                <span class="separator-left bg-primary"></span>
                                                <span class="separator-right bg-primary"></span>
                                            </div>
                                        </div>
                                </div>
                                        <!-- TITLE END -->
                            </div>

                                <div class="wt-info wt-team-full-info">

                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">Dr Nestor HOUSSOU</a></h3>
                                <div class="wt-member-position m-tb10">Manager</div>
                                <p class="text-justify ">
                                    Dr Nestor HOUSSOU est géologue sénior bilingue avec 14 ans d’expériences
                                    dans l’exploration et les mines. Il est titulaire d’un Master et d’un PhD en Sciences de la Terre
                                    et Ressources Minières, option Pétrologie-Structural-Métallogénie. Nestor est l’un des géologues clés
                                    qui ont développé le gisement d’or d’Agbaou, en Côte d’Ivoire. Géologue à Etruscan Resources puis à
                                    Endeavour Mining de 2006-2011, il a conduit les travaux d’exploration sur plusieurs projets et participé à
                                    l’étude de faisabilité du gisement d’Agbaou. En Février 2011, Nestor a travaillé à la mine de Youga au Burkina Faso,
                                    où il était en charge du grade control et de l’exploration pour des ressources additionnelles. De Juillet 2011 à ce jour,
                                    il travaille en tant que Géologue Consultant. Durant cette période, Nestor a mené différents travaux d’exploration
                                    et géré plusieurs projets au Burkina (NordGold, Predictive Discovery, Acacia mining, Pan African Minerals pour Tambao, etc.),
                                    au Ghana (Chirano mine avec Kinross Gold) et en Côte d’Ivoire (Pan African Minerals sur le Fer du Mt Klahoyo,
                                    Progress Minerals, LafargeHolcim, Orca Gold, Perseus Mining, etc.). Il a de bonnes connaissances en logiciels
                                    et SIG et une notable appréciation du Management de projets miniers. DR Houssou est auteur de plusieurs publications
                                    scientifiques. Il a été Consultant pour le GIZ sur l’élaboration du guide minier ivoirien. Il assure chaque année
                                    la formation et le renforcement de plusieurs géologues pour le Ministère des Mines et des compagnies (Rangold, La Mancha, etc.).
                                    Fort de cette expérience de ce secteur, Dr Houssou et son équipe sont prêts à vous offrir un service professionnel de qualité.

                                </p>
                                <p class="text-justify"></p>
                                <p class="text-justify"></p>
                                <ul class="social-icons social-md social-square social-primary">
                                    <li><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li><a href="#" class="fab fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                            <a href="{{route('team.show1')}}" class="p-r15 site-button-secondry skew-icon-btn button-lg m-r15">
                                Voir le profil <i class="fa fa-angle-double-right"></i>
                            </a>
                    </div>

                </div>
                <!--LEFT PART END -->

                <!-- SIDE BAR START -->
                <div class="col-md-3">
                    <aside  class="side-bar">




                    </aside>
                </div>
                <!-- SIDE BAR END -->

            </div>
        </div>
    </div>
        <div class="container cv" id="ang">
            <div class="row">

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 col-sm-3">
                            <div class="wt-media wt-team-full-media m-b30">
                                <a href="#"><img src="{{asset('images/image/avatar-directeur-bhex.jpg')}}" alt="team"></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class=" m-b70">
                                <!-- TITLE START -->
                                <div class="section-head text-center">
                                    <h2 class="text-uppercase">Our MANAGER</h2>
                                    <div class="wt-separator-outer ">
                                        <div class="wt-separator-outer">
                                            <div class="wt-separator style-square">
                                                <span class="separator-left bg-primary"></span>
                                                <span class="separator-right bg-primary"></span>
                                            </div>
                                        </div>
                                </div>
                                        <!-- TITLE END -->
                            </div>

                                <div class="wt-info wt-team-full-info">

                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">Dr Nestor HOUSSOU</a></h3>
                                <div class="wt-member-position m-tb10">Manager</div>
                                <p class="text-justify ">
                                    Dr Nestor HOUSSOU is a bilingual (French / English) senior geologist with more than 14 years
                                    of experience in exploration and mining. He holds a Master and a PhD in Earth Sciences and Mineral
                                    Resources, option Petrology-Structural-Metallogeny. Nestor is one of the key geologists who developed
                                    the Agbaou gold deposit in Côte d'Ivoire. Geologist at Etruscan Resources and then at Endeavor Mining
                                    from 2006-2011, he managed exploration works on several projects and participated in the feasibility
                                    study of the Agbaou gold deposit. In February 2011, Nestor worked at the Youga mine in Burkina Faso,
                                    where he was in charge of grade control and exploration for additional resources. From July 2011 to date,
                                    he works as a Consulting Senior Geologist. During this period, Nestor carried out various exploration
                                    works and managed several projects in Burkina (NordGold, Predictive Discovery, Acacia mining,
                                    Pan African Minerals on the Manganese project of Tambao, etc.), in Ghana (Chirano mine with Kinross Gold)
                                    and in Côte d'Ivoire (Pan African Minerals on the Iron project of Mt Klahoyo, Progress Minerals,
                                    LafargeHolcim, Orca Gold, Perseus Mining, La Mancha CI, CAREM, etc.). He has good knowledge
                                    of software and GIS and a notable appreciation of the Management of mining projects.
                                    DR Houssou is the author or participated of several scientific publications.
                                    In 2019, he was a consultant for GIZ (German institution) for the development of the Ivorian mining guide.
                                    Each year, he provides training and reinforcement for several geologists for the Ministry of Mines and
                                    Geology and for some companies (Rangold, La Mancha, etc.). With this experience of 14 years in
                                    exploration and mining, Dr Houssou and his team are ready to offer you a quality professional service.


                                </p>
                                <p class="text-justify"></p>
                                <p class="text-justify"></p>
                                <ul class="social-icons social-md social-square social-primary">
                                    <li><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li><a href="#" class="fab fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                            <a href="{{route('team.show1')}}" class="p-r15 site-button-secondry skew-icon-btn button-lg m-r15">
                                show profil <i class="fa fa-angle-double-right"></i>
                            </a>
                    </div>

                </div>
                <!--LEFT PART END -->

                <!-- SIDE BAR START -->
                <div class="col-md-3">
                    <aside  class="side-bar">




                    </aside>
                </div>
                <!-- SIDE BAR END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->
    <!-- TEAM STYLE FOUR START -->
    <div class="section-full bg-gray p-t80 p-b50">
        <div class="container">

            <div class=" m-b70">
                <!-- TITLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">Notre équipe technique</h2>
                    <div class="wt-separator-outer ">
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                <!-- TITLE END -->
            </div>
            <div class="section-content">
                <div class="row">
                    <!-- COLUMNS 1 -->
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">DR FOSSOU KOUADIO JEAN-LUC HERVE</a></h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="{{route('team.show3')}}">DR TEHA KOFFI</a></h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-md-4 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fab fa-facebook-f"></a></li>
                                            <li><a href="javascript:void(0);" class="fab fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="{{route('team.show4')}}">PRIA KOSSONOU</a></h4>
                                    <p></p>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>

            </div>

        </div>
    </div>
    </div>
    <!-- TEAM STYLE FOUR END -->
        <!-- SECTION CONTENT -->
        <div class="section-full overlay-wraper  p-t80 p-b40" style="background-image:url({{asset('images/Blue-Hill-Exploration.jpg')}}); ">
            <div class="container">
                <div class="section-head text-center">
                    <h2 class="text-uppercase text-white">Blue-Hill Exploration C'EST</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square has-bg">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                </div>
                <div class="section-content">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">
                                    <span class="icon-md p-t10">
                                        <i class="fas fa-car-side"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800  m-b5"><span class="counter">3</span><b>+</b></div>
                                    <span class="text-uppercase">Véhicules </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">
                                 <span class="icon-md p-t10">
                                        <i class="fas fa-tools"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800 m-b5"><span class="counter">10</span><b>+</b></div>
                                    <span>Marteaux de géologue</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">
                             <span class="icon-md p-t10">
                                        <i class="fas fa-camera"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 m-b5">5</div>
                                    <span>Appareil photo</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">
                             <span class="icon-md p-t10">
                                        <i class="fas fa-location-arrow"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 m-b5">10</div>
                                    <span>GPS</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="overlay-main bg-black" style="opacity:0.8;"></div>
        </div>
        <!-- SECTION CONTENT END -->
        <div class="section-full p-t80 p-b50">
            <div class="container">

                <!-- TITLE START -->
                <div class="section-head text-center">
                    <h2 class="text-uppercase">NOS PARTENAIRE</h2>
                    <div class="wt-separator-outer">
                        <div class="wt-separator style-square">
                            <span class="separator-left bg-primary"></span>
                            <span class="separator-right bg-primary"></span>
                        </div>
                    </div>
                </div>
                <!-- TITLE END -->

                <!-- IMAGE CAROUSEL START -->
                <div class="section-content animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s" data-offset="100">
                    <div class="owl-carousel client-logo-carousel">
                        <!-- COLUMNS 0 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo0.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>

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
                        <!-- COLUMNS logo -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/Logo.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 4 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo4.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 5 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo5.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 6 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo6.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 7 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo7.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 8 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo8.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 9 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo9.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 10 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo10.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 11 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo11.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 12 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo12.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>

                        <!-- COLUMNS 13 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo13.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 14 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo14.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 15 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo15.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 16 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo16.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 17 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo17.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 18 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo18.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 19 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo19.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <!-- COLUMNS 20 -->
                        <div class="item">
                            <div class="ow-client-logo">
                                <div class="client-logo wt-img-effect on-color">
                                    <a href="#"><img src="{{asset('images/logo/logo20.jpg')}}" alt=""></a>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
                <!-- IMAGE CAROUSEL START -->
            </div>

        </div>
        <!-- OUR CLIENT SLIDER END -->
@endsection