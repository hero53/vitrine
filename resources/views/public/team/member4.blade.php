@extends('layouts.default',['title'=>'cv'])
@section('content')
    <!-- INNER PAGE BANNER START -->
    <div class="wt-bnr-inr overlay-wraper" style="background-image:url({{asset('images/Blue-Hill-Exploration-20171031_131342.jpg')}});">
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
                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">PRIA KOFFI KOSSONOU JEAN-MARIE</a></h3>
                                <div class="wt-member-position m-tb10">Géologue Consultant</div>
                                <h4 class="widget-title">Information Géneral</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h5"><u>NATIONALITE:</u></span> Ivoirienne <br>
                                        <span class="h5"><u>TELEPHONE:</u></span>(00225) 08 58 45 48<br>
                                        <span class="h5"><u>E-MAIL:</u></span> geokosspria@gmail.com <br>
                                    </p>
                                </div>
                                <h4 class="widget-title">QUALIFICATIONS CLES</h4>
                                <div class="search-bx">
                                    -Gestion de projets miniers <br>
                                    -Coordination et gestion d’équipes  <br>
                                    -Pétrographie, Géochimie, Géologie structurale  <br>
                                    -Cartographie géologique  <br>
                                    -Géochimie sol  <br>
                                    -Bonne capacité rédactionnelle <br>
                                    -Encadrement technique <br>

                                </div>
                                <h4 class="widget-title">FORMATION</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">2020:</span>
                                        PhD en Sciences de la Terre et des Ressources Minières (STRM),
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB), Côte d’Ivoire,
                                        option pétrologie-métallogénie.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2014:</span>
                                        Master en Sciences de la Terre et des Ressources Minières (STRM),
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan-Cocody (UFHB), Côte d’Ivoire,
                                        option pétrologie-métallogénie.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2010: </span>
                                        Licence en Sciences de la Terre et des Ressources Minières,
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB), Côte d’Ivoire.
                                    </p>
                                </div>
                                <h4 class="widget-title">EXPERIENCE PROFESSIONNELLE</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">Depuis Janvier 2019:</span>
                                        Géologue Consultant à Blue-Hill Exploration (BHEX Sarl)
                                        Exécution de travaux de cartographie litho-structurale et
                                        d’évaluation du potentiel aurifère du permis (sillon Toulepleu-Ity)
                                        de Danané pour le compte de la société LA MANCHA Côte d’Ivoire (LMCI).
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Janvier 2018-Décembre 2019 : </span>
                                        Stage de thèse à l’Université l’Université Ibn Tofail de Kénitra, Maroc.
                                        Etude lithologique, structurale et microstructurale des formations de la
                                        région de Toumodi, centre de la Côte d’Ivoire.

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Janvier 2017-Février 2018  :  </span>
                                        Géologue Consultant à Geological Research Consulting <br>
                                        -Cartographie litho-structurale des permis de Brobo pour la mise
                                        en évidence de pouzzolanes en vue de l’ouverture de carrières de cimenterie,
                                        Gestion des relations communautaires et Rédaction de rapport technique pour le compte
                                        de la société LAFARGE HOLCIM. <br>
                                        -Cartographie litho-structurale des projets aurifères de Brobo-Dabakala, Géochimie sol,
                                        Gestion des relations communautaires et Rédaction de rapport technique pour le compte de
                                        la société Marocaine MANAGEM.


                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Janvier 2016-Décembre 2017:</span>
                                        Géologue à NF Consult Chargé des cours de géologie structurale,
                                        de pétrographie, de minéralogie au Groupe LOKO, à l’ESBTP,
                                        à AIST et à l’INSTITUT FAMAH.

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Aout 2015-Décembre 2015   :</span>
                                        Supervision et logging de forages RC sur le projet KODIERAN au Mali.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Mars-Mai 2016  :</span>
                                        Coordination du projet, Planiﬁcation et exécution de programmes de géochimie sol (5.000 échantillons)
                                        sur le permis de Zouan Hounien (Ouest de la Côte d’Ivoire), Gestion des relations communautaires et
                                        Rédaction de rapports pour le compte de la société PERSEUS MINING.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2014-2016:</span>
                                        Participation à l’encadrement des étudiants aux travaux pratiques de pétrographie en Licence 1 à l’UFR
                                        des Sciences de Terre et des Ressources Minières, Université Félix HOUPHOUËT-BOIGNY Abidjan-Cocody (UFHB).
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2014-2017 :</span>
                                        Moniteur d’Enseignement Participation à l’encadrement des étudiants lors des camps de terrain de Licence 3
                                        à l’UFR Sciences de Terre et des Ressources Minières, Université Félix HOUPHOUËT-BOIGNY Abidjan-Cocody (UFHB).
                                        Thème « Initiation à la cartographie et à l’étude pétro-structurale des formations géologiques de Toumodi ».

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">01 novembre 2013 au 30 novembre 2013 :</span>
                                        Etude pétro-structurale des formations géologiques de la région Est de Toumodi (centre de la Côte d’Ivoire)
                                        : Rédaction d’un mémoire de 60 pages
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">20 avril 2010 au 24 avril 2010  :</span>
                                        Etude lithologique et structurale des formations archéennes du sud-ouest de la Côte d’Ivoire
                                        (départements de Sassandra, San-Pedro, Grand-Béréby)
                                    </p>


                                </div>
                                <h4 class="widget-title">DIVERS</h4>
                                <div class="search-bx blockquote">
                                    <p class="text-justify">
                                        <span class="h5"><u>Connaissances informatiques:</u></span> MapInfo-Discover <br>
                                        <span class="h5"><u>Langues:</u></span> français (couramment) / anglais (niveau moyen)<br>
                                    </p>
                                </div>


                                <ul class="social-icons social-md social-square social-primary">
                                    <li><a href="#" class="fa fa-facebook"></a></li>
                                    <li><a href="#" class="fa fa-linkedin"></a></li>
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