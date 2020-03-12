@extends('layouts.default')
@section('content')
<!-- Section content -->
<div class="wt-contact-wrap row equal-wraper">

    <!-- MAP BLOCK START -->
    <div class="contact-left-part equal-col">
        <div class="gmap-outline">
            <div id="gmap_canvas" class="google-map"></div>
        </div>
    </div>
    <!-- MAP BLOCK END -->

    <!-- RIGHT PART START -->
    <div class="contact-right-part equal-col">

        <!-- CONTACT DETAIL -->
        <div class="p-a30  wt-box">
            <h4 class="text-uppercase">Contact Detail </h4>
            <div class="wt-separator-outer m-b30">
                <div class="wt-separator style-square">
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
            <div class="row">

                <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                        <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                            <span class="icon-cell text-white">
                                                <i class="fa fa-phone"></i>
                                            </span>
                        </div>
                        <div class="icon-content">
                            <h5>Téléphone</h5>
                            <p>+225 58 83 46 11 </p>
                            <p>+225 44 50 75 22 </p>

                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                        <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-envelope"></i>
                                        </span>
                        </div>
                        <div class="icon-content">
                            <h6>Email</h6>
                            <p>info.bhex@gmail.com</p>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 col-sm-12 m-b30">
                    <div class="wt-icon-box-wraper center p-a30 bdr-2 bdr-gray-light">
                        <div class="wt-icon-box-sm bg-primary m-b20 corner">
                                        <span class="icon-cell text-white">
                                            <i class="fa fa-map-marker"></i>
                                        </span>
                        </div>
                        <div class="icon-content">
                            <h5>Adresse</h5>
                            <p>Abidjan, Yopougon Attié (Keneya)</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- CONTACT FORM -->
        <div class="p-lr30">
            <h4 class="text-uppercase">FORMULAIRE DE CONTACT </h4>
            <div class="wt-separator-outer m-b30">
                <div class="wt-separator style-square">
                    <span class="separator-left bg-primary"></span>
                    <span class="separator-right bg-primary"></span>
                </div>
            </div>
        </div>
        <div class="m-a30 wt-box border-2">

            <form class="contact-form" method="post" action="{{route('contact.store')}}">
                @csrf
                <div class="row">

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input name="name" type="text" required class="form-control" placeholder="Nom">
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                <input name="contact" type="text" required class="form-control" placeholder="Contact">
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                <input name="email" type="text" class="form-control" required placeholder="Email">
                            </div>
                        </div>

                    </div>

                    <div class="col-md-12">
                        <div class="form-group">
                            <div class="input-group">
                                <span class="input-group-addon v-align-m"><i class="fa fa-pencil"></i></span>
                                <textarea name="msg" rows="4" class="form-control " required placeholder="Message" ></textarea>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-12 text-right">
                        <button name="submit" type="submit" value="Submit" class="site-button skew-icon-btn m-r15">Soumettre  <i class="fa fa-angle-double-right"></i></button>
                        <button name="Resat" type="reset" value="Reset"  class="site-button skew-icon-btn" >Réinitialiser <i class="fa fa-angle-double-right"></i></button>
                    </div>

                </div>

            </form>

        </div>

    </div>
    <!-- RIGHT PART END -->

</div>
<!-- Section content END -->
@endsection