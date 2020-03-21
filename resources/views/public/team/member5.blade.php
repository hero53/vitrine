@extends('layouts.default',['title'=>'cv'])
@section('content')
    <!-- INNER PAGE BANNER START -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url(https://www.bgc-ci.com/fichiers/images/main-slider/slider1/slide1.jpg);">
        <div class="overlay-main bg-black" style="opacity:0.5;"></div>
        <div class="container">
            <div class="wt-bnr-inr-entry">
                <h1 class="text-white">Notre equipe</h1>
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
                <div class="col-md-11">
                    <div class="row">
                        <div class="col-md-3 col-sm-3  ">
                            <div class="wt-media wt-team-full-media m-b30">
                                <a href="#"><img src="{{asset('images/Blue-Hill-Exploration-images.png')}}" alt="team"></a>
                            </div>
                        </div>
                        <div class="col-md-9 col-sm-9">
                            <div class="wt-info wt-team-full-info">
                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">KOUAME KOUAME ALPHONSE</a></h3>
                                <div class="wt-member-position m-tb10">Comptable et Administrateur</div>
                                <h4 class="widget-title">Information Géneral</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h5"><u>NATIONALITE:</u></span> Ivoirienne <br>
                                        <span class="h5"><u>TELEPHONE:</u></span> (00225) 48 65 24 03 <br>
                                        <span class="h5"><u>E-MAIL:</u></span> info.bhex@gmail.com <br>
                                    </p>
                                </div>
                                <h4 class="widget-title">QUALIFICATIONS CLES</h4>
                                <div class="search-bx">
                                    <p class="text-center">Comptabilité et Gestion</p>
                                    -Etats financiers <br>
                                    -Analyse de comptes <br>
                                    -Salaire et Paie <br>
                                    -Gestion de stocks et logistique <br>
                                    -Fiscalité <br>
                                    <p class="text-left">Administration du personnel</p>
                                    -Management du personne <br>
                                    -Droit du travail et des affaires sociales <br>
                                    -Gestion des relations sociales <br>
                                    <p class="text-center">Administration et Secrétariat</p>
                                    -Rédaction courriers, rapports, PV réunions <br>
                                    -Gestion des locaux, Organisation et Archivage <br>
                                    <p class="text-center">Moyens généraux</p>
                                    -Gestion matériel bureau, équipements et parc auto <br>
                                    -Organisation ateliers, séminaires <br>
                                </div>
                                <h4 class="widget-title">FORMATION</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">1999 :</span>BTS en Comptabilité et Gestion, Ecole Supérieur
                                        de Commerce et de Gestion (ESCGE), Abidjan..
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">05 au 08 Novembre 2012:</span>Séminaire de formation pédagogique
                                        sur la formation par objectif (P.P.O).
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">11 au 15 juin 2001 :</span>Séminaire de formation sur la Fiscalité Pratique des Entreprises.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">18 au 22 juin 2001  :</span>Séminaire de formation sur la Technique Comptable.
                                    </p>

                                </div>
                                <h4 class="widget-title">EXPERIENCE PROFESSIONNELLE</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">Depuis le 1er Octobre 2006 : </span>
                                        Comptable à IVOIRE AGREAGE
                                        Tenue de la comptabilité et gestion de la paie.
                                        Déclarations fiscales et sociales. Traitement des salaires.
                                        Arrêt et analyse des comptes. Etablissement des états financiers.
                                        Rédaction des courriers, des rapports et comptes rendus de réunions et/ ou séminaires.
                                        Gestion du bureau, Gestion du stock de matériel et inventaire.

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Septembre 2018 - Août 2019: </span>
                                        Géologue consultant et Représentant pays de la Compagnie Minière Canadienne PROGRESS MINERALS, Côte d’Ivoire.
                                        Conduite et suivi des travaux d’exploration sur les permis de Bobosso et de Bassawa.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Février 2000 - Octobre. 2003 :  </span>
                                        Comptable à CHALLENGER [WRANGLER]
                                        Etablissement des bordereaux de TVA et divers taxes et impôts.
                                        Déclarations fiscales et sociales. Traitement des salaires de cinq cents (500) employés.
                                        Traitement des opérations de caisse. Gestion des stocks de produits finis.

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Novembre 2015 - Mai 2019:   </span>
                                        Géologue consultant à Geological Research Consulting. Société de consultance dans divers domaines des Géosciences
                                        (Exploration et Mines, Géophysique et Géotechnique, Etc.), basée en Côte d’Ivoire et au Burkina Faso.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">19 Octobre - 31 Décembre  1998  :</span>
                                        Stagiaire à la Société Ivoirienne de Raffinage [SIR]
                                        Service Comptabilité chargé des Fournisseurs.


                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">1er Juillet - 29 Août 1997: </span>
                                        Stagiaire à la Société Ivoirienne de Raffinage [SIR]
                                        Service comptabilité chargé de la clientèle.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">1er Juillet - 29 Août 1996 : </span>
                                        Stagiaire à la Société Ivoirienne de Raffinage [SIR]
                                        Service Achat-Magasin chargé de la procédure des achats de matières.
                                    </p>
                                </div>
                                <h4 class="widget-title">DIVERS</h4>
                                <div class="search-bx blockquote">
                                    <p class="text-justify">
                                        <span class="h5"><u>Connaissances informatiques:</u></span> Bonne maîtrise du Pack Microsoft Office <br>
                                        <span class="h5"><u>Logiciel de comptabilité:</u></span> CIEL COMPTA <br>
                                        <span class="h5"><u>Logiciel de paie:</u></span> SAGE PAIE  <br>
                                        <span class="h5"><u>Langues:</u></span> Français, couramment / Anglais, niveau scolaire<br>
                                    </p>
                                </div>


                                <ul class="social-icons social-md social-square social-primary">
                                    <li><a href="javascript:void(0);" class="fa fa-facebook"></a></li>
                                    <li><a href="javascript:void(0);" class="fa fa-linkedin"></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>

                </div>
                <!--LEFT PART END -->


                <!-- SIDE BAR END -->

            </div>
        </div>
    </div>
    <!-- SECTION CONTENT END -->

@endsection