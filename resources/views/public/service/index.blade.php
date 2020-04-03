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
                <section class="project-area">
                    <div class="section-content">
                        <div class="row">
                            <!-- COLUMNS 1 -->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/GEOLOGIE.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>GEOLOGIE, EXPLORATION ET MINES</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Assistance pour l’acquisition de permis de recherche. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Planification, Budgétisation et Gestion de campagnes d’exploration. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Levés topographiques et réalisation de cartes topographiques.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Cartographie lithostructurale et de régolite.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Stream sediment, géochimie sol, puits, tranchées et mototarière.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Gestion et supervision de campagnes de forages (RAB, RC, DD).<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Logging de forages, Echantillonnage, Interprétation et Modélisation 2D et 3D.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Rédaction de rapports et Recommandations de travaux ultérieurs.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Estimation des Ressources minérales.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Gestion de programmes de grade control et de géotechnique.<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px;color: black"></i> Assistance aux relations communautaireset administratives, et règlement de litiges.<br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">GEOLOGIE, EXPLORATION ET MINES</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 2 -->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/GEOPHYSIQUE.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>GEOPHYSIQUE ET GEOTECHNIQUE</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i>électriques, sismiques, radiométriques et gravitaires et autres images. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Interprétation des propriétés physiques et structurales. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Etudes et forages géotechniques. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Rédaction de rapports et recommandations de travaux ultérieurs. <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">GEOPHYSIQUE ET GEOTECHNIQUE</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 3-->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/CARTOGRAPHIE.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>CARTOGRAPHIE, SIG ET TELEDETECTION</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Assistance dans la gestion et organisation de bases de données (Excel, Access, Oracle, etc.).
                                        <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Cartographie thématique. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Interprétation et Traitement des images (Géophysique, Landsat, Radar, Aster, etc.).
                                        <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Digitalisation des cartes (plan et section) et création de visualisation 3D. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Formation en logiciels de cartographie et divers. <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">CARTOGRAPHIE, SIG ET TELEDETECTION</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 4-->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/SOL.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>SOL, AGRICULTURE ET FORESTERIE</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Etude et cartographie des sols. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Cadastre des terres ou parcelles cultivées (plantations) et indemnisation. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Assistance et conseils aux coopératives agricoles et aux planteurs. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Aide à la certification des cultures. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Audit de plantations et recommandations <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">SOL, AGRICULTURE ET FORESTERIE</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 5-->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/HYDROGEO.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>HYDROGEOLOGIE ET HYDRAULIQUE</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Etude et Modélisation hydrologique, hydrogéologique et hydrochimique. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Implantation, Forage d’eau et Essais de pompage. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Hydraulique et Approvisionnement en eau. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Vulnérabilité et Protection des aquifères. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Gestion Intégrée des Ressources en Eau (GIRE) <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">HYDROGEOLOGIE ET HYDRAULIQUE</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 6-->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/Blue-Hill-Exploration-books-classroom-close-up-college-289737.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>CONSEILS ET INVESTISSEMENTS</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Assistance aux clients pour trouver des permis potentiels et prospectifs. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Assistance et facilitation des relations avec leMinistère et la Direction des Mines.
                                        <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Facilitation des Joint-Ventures. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Assistance pour la résolution des problèmes ou incidents avec les communautés locales.
                                        <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Traduction de documents de l’anglais au français et vis-versa. <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">CONSEILS ET INVESTISSEMENTS</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 7-->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/Blue-Hill-Exploration-closeup-photo-of-sprout-1002703.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>ENVIRONNEMENT ET DEVELOPPEMENT DURABLE</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Protection de l’Environnement incluant la faune et la flore. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Etude d’Impact Environnemental (EIE). <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Restauration et Réhabilitation de sites. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Reboisement et Aménagement paysager. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Conservation de la biodiversité et Gestion durable des ressources naturelles. <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Formation et sensibilisation sur la protection de l’Environnement <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">ENVIRONNEMENT ET DEVELOPPEMENT DURABLE</a></h5>
                                </div>
                            </div>
                            <!-- COLUMNS 8-->
                            <div class="col-md-4 col-sm-4 p-tb15 cible" >
                                <div class="single-project" style="background: url({{asset('images/service/Blue-Hill-Exploration-group.jpg')}});">
                                    <div  class="text-justify  show overlay overlay-content" id="1">
                                        <h4>FORMATION ET RENFORCEMENT DE CAPACITES</h4>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Module 1: Minéralogie et pétrographie (Etude macroscopique et microscopique). <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Module 2: Géologie structurale (Terrain, analyse structurale et microstructurale). <br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Module 3: Pratiques des activités d’exploration 1 (Cartographie lithostructurale et régolite).<br>
                                        <i class="fas fa-crosshairs" style="font-size: 15px; color: black"></i> Module 5: Pratiques HSE (Environnement-Sécurité-Santé). <br>
                                    </div>
                                </div>
                                <div class="wt-info p-a30 bg-gray">
                                    <h5 class="wt-title m-t0"><a href="javascript:void(0);">FORMATION ET RENFORCEMENT DE CAPACITES</a></h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>


            </div>
        </div>
        <!-- SECTION CONTENT END -->

    </div>
    <!-- CONTENT END -->

@endsection