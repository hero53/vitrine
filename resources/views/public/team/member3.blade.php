@extends('layouts.default',['title'=>'Cv'])
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
                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">Dr TEHA KOFFI RAOUL</a></h3>
                                <div class="wt-member-position m-tb10">Géologue Consultant</div>
                                <h4 class="widget-title">Information Géneral</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h5"><u>NATIONALITE:</u></span> Ivoirienne <br>
                                        <span class="h5"><u>TELEPHONE:</u></span> (00225) 08 91 04 24 / 65 61 23 49<br>
                                        <span class="h5"><u>E-MAIL:</u></span> rkteha@hotmail.fr <br>
                                    </p>
                                </div>
                                <h4 class="widget-title">QUALIFICATIONS CLES</h4>
                                <div class="search-bx">
                                    <p>
                                        -Gestion de projets miniers <br>
                                        -Coordination et gestion d’équipes  <br>
                                        -Pétrographie, Géochimie, Géologie structurale  <br>
                                        -Cartographie géologique  <br>
                                        -Géochimie sol  <br>
                                        -Bonne capacité rédactionnelle <br>
                                        -Encadrement technique <br>
                                    </p>


                                </div>
                                <h4 class="widget-title">FORMATION</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">2019:</span>
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
                                        <span class="h4">2009: </span>
                                        Licence en Sciences de la Terre et des Ressources Minières,
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB), Côte d’Ivoire.
                                    </p>
                                </div>
                                <h4 class="widget-title">EXPERIENCE PROFESSIONNELLE</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">Depuis Juin 2019:  </span>
                                        Géologue Consultant à Blue-Hill Exploration (BHEX Sarl)
                                        Supervision et exécution de travaux de cartographie et
                                        d’évaluation du potentiel aurifère du permis (sillon Toulepleu-Ity)
                                        de Danané pour le compte de la société LA MANCHA Côte d’Ivoire (LMCI).
                                        Gestion des relations communautaires. Rédaction de rapport technique.


                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Mars 2016-Mai 2019 : </span>
                                        Géologue Consultant à Geological Research Consulting
                                        -Septembre 2019-Coordination du projet, Cartographie litho-structurale
                                        des permis aurifères de Marahui et Laoudiba, Evaluation des potentiels en or,
                                        Rédaction de rapport technique et Gestion des relations communautaires pour le compte
                                        de la société CAREM.

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Juin-Juillet 2018 :  </span>
                                        Coordination du projet, Cartographie litho-structurale des permis de Brobo
                                        pour la découverte de pouzzolanes en vue de l’ouverture de carrières de cimenterie,
                                        Gestion des relations communautaires et Rédaction de rapport technique pour le compte
                                        de la société LAFARGE HOLCIM.

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Mai-Juin 2018:   </span>
                                        Coordination du projet, Planiﬁcation et exécution de programmes de
                                        géochimie sol et de stream sediment, Gestion des relations communautaires
                                        et Rédaction de rapport technique pour le compte de la société AWALE RESSOURCES.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Mars-Mai 2016  :</span>
                                        Coordination du projet, Planiﬁcation et exécution de programmes de géochimie sol (5.000 échantillons)
                                        sur le permis de Zouan Hounien (Ouest de la Côte d’Ivoire), Gestion des relations communautaires et
                                        Rédaction de rapports pour le compte de la société PERSEUS MINING.
                                    </p>

                                </div>
                                <h4 class="widget-title">DIVERS</h4>
                                <div class="search-bx blockquote">
                                    <p class="text-justify">
                                        <span class="h5"><u>Connaissances informatiques:</u></span> ArcGis, GEOrient, MapInfo, Oasis Montaj, Stereonet, MapSource, OpenStereo, Adobe illustrator <br>
                                        <span class="h5"><u>Langues:</u></span> français, couramment / anglais, niveau moyen<br>
                                    </p>
                                </div>


                                <ul class="social-icons social-md social-square social-primary">
                                    <li><a href="#" class="fab fa-facebook-f"></a></li>
                                    <li><a href="#" class="fab fa-linkedin"></a></li>
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