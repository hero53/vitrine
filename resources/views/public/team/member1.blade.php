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
                                <h3 class="wt-title m-t0"><a href="javascript:void(0);">Dr Nestor HOUSSOU</a></h3>
                                <div class="wt-member-position m-tb10">Géologue Sénior en Exploration et Mines</div>
                                <h4 class="widget-title">Information Géneral</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                       <span class="h5"><u>AFFILIATION:</u></span> Membre de la SGF (Société Géologique de France) et
                                        de l’EAGE (European Association of Geoscientists and Engineering) <br>
                                        <span class="h5"><u>NATIONALITE:</u></span> Ivoirienne <br>
                                        <span class="h5"><u>TELEPHONE:</u></span> (00225) 58 83 46 11 / 44 50 75 22 <br>
                                        <span class="h5"><u>E-MAIL:</u></span> nestor.houssou@gmail.com <br>
                                    </p>
                                </div>
                                <h4 class="widget-title">QUALIFICATIONS CLES</h4>
                                <div class="search-bx">
                                    <p>
                                        - Management de projets miniers <br>
                                        - Exécution de travaux d'Exploration jusqu'à l'Etude de faisabilité<br>
                                        - Etude de minéralisations et recommandations de travaux ultérieurs<br>
                                        - Cartographie lithostructurale et régolite<br>
                                        - Grade control, Géotechnique<br>
                                        - GIS et Gestion de base de données<br>
                                        - Formation de géologues et techniciens<br>
                                    </p>

                                </div>
                                <h4 class="widget-title">FORMATION</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">2013:</span>PhD en Sciences de la Terre et des Ressources Minières (STRM),
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB), Côte d’Ivoire option pétrologie-métallogénie.
                                        Thème : Etude pétro-structurale, géochimique et métallogénique du gisement aurifère d'Agbaou, Côte d’Ivoire.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2005:</span>Master en Sciences de la Terre et des Ressources Minières (STRM),
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB), Côte d’Ivoire. Thème : Les minéralisations aurifères
                                        dans les provinces géologiques de Sassandra et Soubré, Sud-Ouest de la Côte d’Ivoire.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2002:</span>Licence en Sciences de la Terre et des Ressources Minières,
                                        Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB), Côte d’Ivoire.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">2002:</span>Licence en Science de l’Homme et de la Société
                                        option Socio-anthropologie, ISAD, Université Félix HOUPHOUËT-BOIGNY Abidjan (UFHB).
                                    </p>
                                </div>
                                <h4 class="widget-title">EXPERIENCE PROFESSIONNELLE</h4>
                                <div class="search-bx">
                                    <p class="text-justify">
                                        <span class="h4">Depuis Juin 2019: </span>
                                        Géologue consultant sénior et Directeur Technique de BLUE-HILL EXPLORATION SARL (BHEX),
                                        Côte d’Ivoire. Groupe de consultance en exploration et Mines.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Septembre 2018 - Août 2019: </span>
                                        Géologue consultant et Représentant pays de la Compagnie Minière Canadienne PROGRESS MINERALS, Côte d’Ivoire.
                                        Conduite et suivi des travaux d’exploration sur les permis de Bobosso et de Bassawa.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Septembre - Décembre 2018:  </span>
                                        Expert consultant à la Coopération Allemande (Projet GIZ).
                                        Elaboration du Guide Minier Ivoirien, Président de la commission SIGM
                                        (Système d’Information Géologique et Minière).
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Novembre 2015 - Mai 2019:   </span>
                                        Géologue consultant à Geological Research Consulting. Société de consultance dans divers domaines des Géosciences
                                        (Exploration et Mines, Géophysique et Géotechnique, Etc.), basée en Côte d’Ivoire et au Burkina Faso.
                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Juillet 2011- Novembre 2015 :</span>
                                         Géologue consultant chez SEMS Exploration Gestion de projets miniers,
                                        cartographie lithostructurale et régolithe, étude de minéralisations et
                                        recommandations pour plusieurs compagnies minières :

                                    </p>
                                    <p class="text-justify">
                                        <span class="h4">Février – Juin 2011 : </span>
                                        Géologue senior chez Endeavour Mining Corp.
                                        Supervision de forages RC et DD pour le grade control (mine) et la recherche de
                                        ressources additionnelles autour du gisement aurifère principal de la mine de Youga
                                        (Burkina Faso; terrains birrimien et tarkwaien).
                                    </p>
                                    <p class="text-justify blockquote">
                                        <span class="h4">Septembre 2006 – Janvier 2011 : </span>
                                        Géologue de projet chez Etruscan Resources
                                        -Suivi de programmes de géochimie sol, puits et tranchées, forages DD, RC, RAB et tarière pour
                                        les travaux de développement du gisement aurifère d'Agbahou (Côte d'Ivoire), incluant les forages de stérilisation,
                                        les forages pour les tests géotechnique et métallogéniques, l'exploration de nouvelles zones potentielles, etc.
                                        <br>

                                        -Etude pétrostructurale et métallogénique du gisement aurifère d'Agbahou, Côte d’Ivoire (dans le cadre du mémoire de thèse).<br>
                                        -Participation et contribution à toutes les phases de terrain de l'étude de faisabilité du gisement aurifère d'Agbahou.<br>
                                        -Supervision de programmes de géochimie sol, de cartographie de puits, tranchées et régolite,
                                        de forages RAB sur les projets aurifères de Daoukro, Agnibilékro, Yakassé Attobrou et Tanda (Côte d'Ivoire).

                                    </p>
                                </div>
                                <h4 class="widget-title">DIVERS</h4>
                                <div class="search-bx blockquote">
                                    <p class="text-justify">
                                        <span class="h5"><u>Connaissances informatiques :</u></span>MapInfo-Discover <br>
                                        <span class="h5"><u>Langues:</u></span> bilingue (français / anglais)
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