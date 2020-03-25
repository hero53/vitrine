@extends('layouts.default',['title'=>'Accueil'])
@section('content')
    <!-- SLIDER START -->
    <div class="main-slider style-two default-banner">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <!-- START REVOLUTION SLIDER 5.4.1 -->
                <div id="rev_slider_1014_1_wrapper" class="rev_slider_wrapper fullscreen-container" data-alias="typewriter-effect" data-source="gallery">
                    <div id="rev_slider_1014_1" class="rev_slider fullscreenbanner" style="display:none;" data-version="5.4.1">
                        <ul>
                            <!-- SLIDE 1 -->
                            <li data-index="rs-1000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1//slide1.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{asset('images/Blue-Hill Exploration-group.jpg')}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper"
                                     id="slide-100-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme"
                                     id="slide-100-layer-2"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                     data-fontsize="['60','60','60','50']"
                                     data-lineheight="['70','70','70','60']"
                                     data-width="['700','700','700','700']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: #273447;
                                        border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'Roboto' ; color: #f5f4ff"><span>Travaux d’exploration </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme"
                                     id="slide-100-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                     data-fontsize="['18','18','18','30']"
                                     data-lineheight="['30','30','30','40']"
                                     data-width="['650','650','650','650']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">

                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme"
                                     id="slide-100-layer-4"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"
                                     data-lineheight="['none','none','none','none']"
                                     data-width="['300','300','300','300']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{route('service')}}" class="site-button-secondry button-lg skew-icon-btn m-r15">Voir plus <i class="fa fa-angle-double-right"></i></a>
                                </div>

                            </li>

                            <!-- SLIDE 2 -->
                            <li data-index="rs-2000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1//slide2.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{asset('images/Blue-Hill-Exploration-20180906_1100403.jpg')}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper "
                                     id="slide-200-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme"
                                     id="slide-200-layer-2"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                     data-fontsize="['60','60','60','50']"
                                     data-lineheight="['70','70','70','60']"
                                     data-width="['700','700','700','700']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'Roboto' ; color: #f5f4ff"><span>Exploitation minière et Pétrolière </span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme"
                                     id="slide-200-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                     data-fontsize="['18','18','18','30']"
                                     data-lineheight="['30','30','30','40']"
                                     data-width="['650','650','650','650']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">
                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme"
                                     id="slide-200-layer-4"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"
                                     data-lineheight="['none','none','none','none']"
                                     data-width="['300','300','300','300']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{route('service')}}" class="site-button-secondry button-lg skew-icon-btn m-r15">Voir plus <i class="fa fa-angle-double-right"></i></a>
                                </div>

                                <!-- LAYER NR. 5 [ for botton ] -->
                                <div class="tp-caption tp-resizeme"
                                     id="slide-200-layer-5"
                                     data-x="['left','left','left','left']" data-hoffset="['230','230','230','230']"
                                     data-y="['top','top','top','top']" data-voffset="['490','490','490','600']"
                                     data-fontsize="['none','none','none','none']"
                                     data-lineheight="['none','none','none','none']"
                                     data-width="['300','300','300','300']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13; text-transform:uppercase; font-weight:700;">
                                    <!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15" >Read More<i class="fa fa-arrow-circle-o-right"></i></a>-->
                                </div>

                            </li>

                            <!-- SLIDE 3 -->
                            <li data-index="rs-3000" data-transition="slidingoverlayhorizontal" data-slotamount="default" data-hideafterloop="0" data-hideslideonmobile="off"  data-easein="default" data-easeout="default" data-masterspeed="default"  data-thumb="images/main-slider/slider1//slide3.jpg"  data-rotate="0"  data-saveperformance="off"  data-title="Slide" data-param1="" data-param2="" data-param3="" data-param4="" data-param5="" data-param6="" data-param7="" data-param8="" data-param9="" data-param10="" data-description="">

                                <!-- MAIN IMAGE -->
                                <img src="{{asset('images/Blue-Hill-Exploration-20171031_131342.jpg')}}"  alt=""  data-bgposition="center bottom" data-bgfit="cover" data-bgrepeat="no-repeat" class="rev-slidebg" data-no-retina/>
                                <!-- LAYERS -->

                                <!-- LAYER NR. 1 [ for overlay ] -->
                                <div class="tp-caption tp-shape tp-shapewrapper "
                                     id="slide-300-layer-1"
                                     data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                                     data-y="['middle','middle','middle','middle']" data-voffset="['0','0','0','0']"
                                     data-width="full"
                                     data-height="full"
                                     data-whitespace="nowrap"
                                     data-type="shape"
                                     data-basealign="slide"
                                     data-responsive_offset="off"
                                     data-responsive="off"
                                     data-frames='[
                                        {"from":"opacity:0;","speed":1000,"to":"o:1;","delay":0,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"opacity:0;","ease":"Power4.easeOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 12;background-color:rgba(0, 0, 0, 0.5);border-color:rgba(0, 0, 0, 0);border-width:0px;">
                                </div>

                                <!-- LAYER NR. 2 [ for title ] -->
                                <div class="tp-caption   tp-resizeme"
                                     id="slide-300-layer-2"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['200','200','200','200']"
                                     data-fontsize="['60','60','60','50']"
                                     data-lineheight="['70','70','70','60']"
                                     data-width="['700','700','700','700']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13;
                                        white-space: normal;
                                        font-weight: 700;
                                        color: rgba(255, 255, 255, 1.00);
                                        border-width:0px;">
                                    <span class="text-uppercase" style="font-family:'Roboto' ; color: #f5f4ff"><span >Forage, Hydraulique et Géophysique</span>
                                </div>

                                <!-- LAYER NR. 3 [ for paragraph] -->
                                <div class="tp-caption  tp-resizeme"
                                     id="slide-300-layer-3"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['300','300','300','300']"
                                     data-fontsize="['18','18','18','30']"
                                     data-lineheight="['30','30','30','40']"
                                     data-width="['650','650','650','650']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13;
                                        font-weight: 500;
                                        color: rgba(255, 255, 255, 0.85);
                                        border-width:0px;">

                                </div>

                                <!-- LAYER NR. 4 [ for readmore botton ] -->
                                <div class="tp-caption tp-resizeme"
                                     id="slide-300-layer-4"
                                     data-x="['left','left','left','left']" data-hoffset="['30','30','30','100']"
                                     data-y="['top','top','top','top']" data-voffset="['430','430','450','500']"
                                     data-lineheight="['none','none','none','none']"
                                     data-width="['300','300','300','300']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index:13; text-transform:uppercase; font-weight:700;">
                                    <a href="{{route('service')}}" class="site-button-secondry button-lg skew-icon-btn m-r15">Voir plus <i class="fa fa-angle-double-right"></i></a>
                                </div>

                                <!-- LAYER NR. 5 [ for botton ] -->
                                <div class="tp-caption tp-resizeme"
                                     id="slide-300-layer-5"
                                     data-x="['left','left','left','left']" data-hoffset="['230','230','230','230']"
                                     data-y="['top','top','top','top']" data-voffset="['490','490','490','600']"
                                     data-fontsize="['none','none','none','none']"
                                     data-lineheight="['none','none','none','none']"
                                     data-width="['300','300','300','300']"
                                     data-height="['none','none','none','none']"
                                     data-whitespace="['normal','normal','normal','normal']"

                                     data-type="text"
                                     data-responsive_offset="on"
                                     data-frames='[
                                        {"from":"y:100px(R);opacity:0;","speed":2000,"to":"o:1;","delay":2000,"ease":"Power4.easeOut"},
                                        {"delay":"wait","speed":1000,"to":"y:-50px;opacity:0;","ease":"Power2.easeInOut"}
                                        ]'
                                     data-textAlign="['left','left','left','left']"
                                     data-paddingtop="[0,0,0,0]"
                                     data-paddingright="[0,0,0,0]"
                                     data-paddingbottom="[0,0,0,0]"
                                     data-paddingleft="[0,0,0,0]"

                                     style="z-index: 13; text-transform:uppercase; font-weight:700;">
                                    <!--<a href="javascript:;" class="site-button button-lg skew-icon-btn m-r15" >Read More<i class="fa fa-arrow-circle-o-right"></i></a>-->
                                </div>

                            </li>

                        </ul>
                        <div class="tp-bannertimer tp-bottom" style="visibility: hidden !important;"></div>
                    </div>
                </div>
                <!-- END REVOLUTION SLIDER -->
            </div>
        </div>
    </div>
    <!-- SLIDER END -->
    <!-- ABOUT COMPANY SECTION START -->
    <div class="section-full p-tb100" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about-com-pic">
                        <img src="{{asset('images/Blue-Hill-Exploration-tower-crane-during-daytime-93400.jpg')}}" alt="" class="img-responsive"/>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="section-head text-left">
                        <h2 class="text-uppercase">PRESENTATION</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p class="text-justify">
                            Blue-Hill Exploration SARL est une entreprise de consultance.
                            Elle est créée et dirigée par d’anciens chefs de projets miniers, de géologues séniors et
                            géologues de projet ayant déjà travaillé pour plusieurs entreprises minières et sur divers
                            projets en Afrique de l’Ouest et dans le monde.
                        </p>
                        <p class="text-justify">
                            Blue-Hill Exploration SARL comprend des professionnels dynamiques et expérimentés (géologues, chercheurs, ingénieurs et techniciens)
                            de domaines multidisciplinaires qui travaillent ensemble dans un esprit d’équipe pour assurer un service de qualité
                            au client.
                        </p>
                        <p class="text-justify">
                            Blue-Hill Exploration SARL regorge d’un personnel qualifié, de haut niveau avec plusieurs années d’expériences acquises dans des compagnies
                            nationales et internationales. À cet effet, BHEX a démontré sa capacité professionnelle et a convaincu ses partenaires par
                            la qualité de son travail. Cette entreprise assure également des formations dans divers domaines d’activités
                            (géologie, exploration, exploitation, SIG et logiciels, etc.) pour étudiants, diplômés et cadres d’entreprise.
                        </p>
                        <a href="{{route('service')}}" class="p-r15 site-button-secondry skew-icon-btn button-lg m-r15">
                            Nos services <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>


                </div>

            </div>
        </div>
    </div>
    <div class="section-full bg-gray p-tb100 mt-5" style="">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="section-head text-left">
                        <h2 class="text-uppercase">EXPERIENCE  </h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator style-square">
                                <span class="separator-left bg-primary"></span>
                                <span class="separator-right bg-primary"></span>
                            </div>
                        </div>
                        <p class="text-justify">
                            BHEX SARL (Blue-Hill Exploration) est une structure spécialisée dans l’Expertise et
                            la Consultance dans divers domaines des Géosciences. BHEX est basée en Côte d’Ivoire
                            et au Burkina Faso, et exerce dans toute l’Afrique de l’Ouest. BHEX fournit une gamme
                            variée de services techniques : Exploration et Mines, Géophysique et Géotechnique, Pédologie,
                            Hydrologie et Hydrogéologie, Agriculture, Cartographie et SIG, Environnement, Formation et suivi
                            des projets, Divers.
                        </p>

                        <a href="{{route('team.index')}}" class="p-r15 site-button-secondry skew-icon-btn button-lg m-r15">
                            Voir notre equipe <i class="fa fa-angle-double-right"></i>
                        </a>
                    </div>


                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about-com-pic">
                        <img src="{{asset('images/Blue-Hill-Exploration-20171031_131342.jpg')}}" alt="" class="img-responsive" />
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- WHY CHOOSE US SECTION START  -->
    <div class="section-full  p-t80 p-b50" >
        <div class="container">
            <!-- TITLE START-->
            <div class="section-head text-center">
                <h2 class="text-uppercase">EXPERIENCE PROFESSIONNELLE </h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE END-->
            <div class="section-content">
                <div class="row">

                    <!-- COLUMNS 1 -->
                    <div class="col-md-4 col-sm-6 m-b40 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s" data-offset="100">
                        <div class="wt-icon-box-wraper p-lr20 center">
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">ORCA GOLD, COTE D’IVOIRE</h5>
                                <p class="text-justify">
                                    Description de forages DD, interprétation en 2D et 3D de la minéralisation aurifères,
                                    rédaction de rapports, recommandations de travaux follow-up sur le prospect Koné du permis de Morondo.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 2 -->
                    <div class="col-md-4 col-sm-6 m-b40 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s" data-offset="100">
                        <div class="wt-icon-box-wraper p-lr20 center">
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">PROGRESS MINERAL, COTE D’IVOIRE</h5>
                                <p class="text-justify">
                                    Exécution des travaux d’exploration (géochimie sol, tranchées, forages mototarière, cartographie litho-structurale)
                                    sur les permis aurifères de Bobosso et de Bassawa (PR572 et 573), rédaction de rapports d’activités, de rapports
                                    sémestriels et annuels, gestion des relations administratives et communautaires.
                                </p>
                            </div>
                        </div>
                    </div>
                    <!-- COLUMNS 3 -->
                    <div class="col-md-4 col-sm-6 m-b40 animate" data-animate="fadeInUp" data-duration="1.0s" data-delay="0.1s" data-offset="100">
                        <div class="wt-icon-box-wraper p-lr20 center">
                            <div class="icon-content">
                                <h5 class="wt-tilte text-uppercase">LA MANCHA, COTE D’IVOIRE</h5>
                                <p class="text-justify">
                                    Mission de reconnaissance et d’évaluation du potentiel aurifère du permis PR605 de
                                    la région de Danané, Ouest de la Côte d’Ivoire. Cartographie litho-structurale, prélèvement
                                    d’échantillons spécifiques, interprétation des résultats d’analyse or,
                                    rédaction de rapports et recommandations de travaux ultérieurs et budgétisation.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
    <!-- WHY CHOOSE US SECTION END -->
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
@if(! $articles->isEmpty())
    <div class="section-full latest-blog bg-gray p-t80 p-b50">
        <div class="container">
            <!-- TITLE -->
            <div class="section-head text-center">
                <h2 class="text-uppercase">DERNIER EVENEMENTS</h2>
                <div class="wt-separator-outer">
                    <div class="wt-separator style-square">
                        <span class="separator-left bg-primary"></span>
                        <span class="separator-right bg-primary"></span>
                    </div>
                </div>
            </div>
            <!-- TITLE -->

            <div class="section-content ">
                <div class="row">
                @foreach($articles as $article)
                    <!-- COLUMNS 1 -->
                    <div class="col-md-4 col-sm-4">
                        <div class="blog-post latest-blog-1 date-style-3 date-skew">
                            <div class="wt-post-media wt-img-effect zoom-slow">
                                <a href="javascript:;"><img src="{{asset('storage').'/'.$article->img}}" alt="" style="height: 400px;"></a>
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
        </div>
    </div>
@endif
    <!-- LATEST BLOG SECTION END -->


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