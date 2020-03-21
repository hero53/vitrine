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
    <!-- BREADCRUMB ROW END -->
    <!-- SECTION CONTENT START -->
    <div class="section-full p-t80 p-b50">
        <div class="container">
            <div class="row">

                <!-- LEFT PART START -->
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-3 col-sm-3  ">
                            <div class="wt-media wt-team-full-media m-b30">
                                <a href="#"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="team"></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="wt-info wt-team-full-info">
                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">Dr Nestor HOUSSOU</a></h3>
                                <div class="wt-member-position m-tb10">Directeur</div>
                                <p class="text-justify">
                                    Le Directeur technique de BHEX SARL, Dr Nestor HOUSSOU, est géologue sénior bilingue
                                    (anglais / Français) avec plus de 14 ans d’expériences dans l’exploration et les mines.
                                    Il est titulaire d’un Master et d’un PhD en Sciences de la Terre et des Ressources Minières,
                                    option Pétrologie-Métallogénie.
                                </p>
                                <p class="text-justify">
                                    Nestor est Membre de la SGF (Société Géologique de France) et Membre de l’EAGE
                                    (European Association of Geoscientist and Engineering). Il a travaillé sur
                                    le thème : Etude pétro-structurale, géochimique et métallogénique du gisement d’or d’Agbaou, Côte d’Ivoire.
                                     Géologue puis Chef de projet à Etruscan Resources de 2006-2011, il a conduit les travaux d’exploration et
                                    a participé à l’étude de faisabilité de la mine d’or d’Agbaou. Il a par ailleurs travaillé sur plusieurs
                                    projets aurifères dont Daoukro, Tanda, Agnibilékro et Yakassé-Attobrou. En Février 2011, Nestor est recruté
                                    à la mine de Youga au Burkina Faso, où il était en charge du grade control et de l’exploration autour
                                    de la mine pour des ressources additionnelles. De Juillet 2011 à Octobre 2015, il a travaillé en tant que Géologue consultant.
                                    Durant cette période, Nestor a mené différents travaux d’exploration incluant la cartographie lithostructurale
                                    et du régolite, les puits et tranchées, le suivi et le logging de forages en vue d’une interprétation de la minéralisation,
                                    des résultats d’analyses et y apporter des recommandations. Les rapports, le suivi de la cartographie des parcelles
                                    ou des plantations, l’indemnisation, la gestion des relations communautaires et administratives,
                                    la gestion des ouvriers, la formation de géologues et techniciens pour diverses compagnies et sur différents projets
                                    pour l’or, le manganèse et le fer en Afrique de l’Ouest : Burkina Faso (High River Gold, South Shore Group, Vitalmetals,
                                    Predictive Discovery, Diamond Cement, Crucible gold, West Africa Gold, Acacia mining, Pan African Minerals pour Tambao, etc.),
                                    Ghana (Chirano mine, Kinross Gold Corp.) et Côte d’Ivoire (Pan African Minerals pour le Mont Klahoyo) ont fait partie de ses
                                    responsabilités.
                                </p>
                                <p class="text-justify">
                                     Nestor a de bonnes connaissances en logiciels de cartographie (MapInfo-Discover, etc.)
                                    et une notable appréciation du Management de projets. Aujourd’hui, il travaille plusieurs compagnies minières
                                    en Afrique de l’Ouest et sur plusieurs projets miniers (Progress Minerals, Montage-Orca Gold, etc.). DR Nestor est également
                                    auteur de plusieurs publications scientifiques. Dr Houssou assure chaque année la formation de plusieurs géologues ivoiriens
                                    pour le Ministère des Mines et différentes compagnies minières (Rangold, La Mancha Côte d’Ivoire, etc.). Fort de plus de 14 ans
                                    d’expériences de ce secteur, Dr Houssou et son équipe sont prêts à vous offrir un service professionnel de qualité.
                                </p>
                                <p class="text-justify"></p>
                                <p class="text-justify"></p>
                                <ul class="social-icons social-md social-square social-primary">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
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
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="{{route('team.show2')}}">KOUAME KOUAME ALPHONSE</a></h4>
                                    <p>GERANT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="javascript:void(0);">DR FOSSOU KOUADIO JEAN-LUC HERVE</a></h4>
                                    <p>CONSULTANT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="{{route('team.show3')}}">DR TEHA KOFFI</a></h4>
                                    <p>CONSULTANT</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 4 -->
                    <div class="col-md-3 col-sm-6 col-xs-6 col-xs-100pc m-t30">
                        <div class="wt-team-four">
                            <div class="wt-team-media">
                                <a href="javascript:void(0);"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="" ></a>
                            </div>
                            <div class="wt-team-info">
                                <div class="wt-team-skew-block p-t10">
                                    <div class="social-icons-outer bg-primary  p-a25">
                                        <ul class="social-icons social-square social-dark white-border m-b0">
                                            <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                            <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="p-a20">
                                    <h4 class="wt-team-title text-uppercase"><a href="{{route('team.show4')}}">PRIA KOSSONOU</a></h4>
                                    <p>CONSULTANT</p>
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
                                        <i class="fas fa-truck-pickup"></i>
                                    </span>
                                <div class="icon-content">
                                    <div class="font-26 font-weight-800  m-b5"><span class="counter">3</span><b>+</b></div>
                                    <span class="text-uppercase">Véhicules </span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">

                                <div class="icon-content">
                                    <div class="font-26 font-weight-800 m-b5"><span class="counter">10</span><b>+</b></div>
                                    <span>Marteaux de géologue</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">

                                <div class="icon-content">
                                    <div class="counter font-26 font-weight-800 m-b5">5</div>
                                    <span>Appareil photo</span>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3 col-sm-6">
                            <div class="wt-icon-box-wraper left p-a10 text-white m-b30">

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
                                <a href="#"><img src="{{asset('images/logo/logo8.jpg')}}" alt=""></a>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 12 -->
                    <div class="item">
                        <div class="ow-client-logo">
                            <div class="client-logo wt-img-effect on-color">
                                <a href="#"><img src="{{asset('images/logo/logo5.jpg')}}" alt=""></a>
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