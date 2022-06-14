@extends('layouts.master')

@section('content')

    <div class="vc_row wpb_row vc_row-fluid header-spacing">
        <div class="wpb_column vc_column_container vc_col-sm-12">
            <div class="vc_column-inner">
                <div class="wpb_wrapper">
                    <header class="slider">
                        <div class="slider-container swiper-container-initialized swiper-container-horizontal"
                             data-speed="" data-autoplay-delay="" data-loop="">
                            <div class="swiper-wrapper"
                                 style="transform: translate3d(-7635px, 0px, 0px); transition: all 0ms ease 0s;">
                               @forelse($sliders as $slider)
                                    <div class="swiper-slide swiper-slide-prev swiper-slide-duplicate-next"
                                         data-background="{{asset('storage/'.$slider->slider_background)}}" data-stellar-background-ratio="1.15"
                                         data-swiper-slide-index="0"
                                         style="background-image: url(./src/sliderRumeli.jpeg); ">
                                        <div class="container">
                                            <h1>
                                                {{$slider->slider_welcome}}
                                            </h1>
                                            <h4 style="color:white;">
                                             {{$slider->slider_text}}

                                            </h4>
                                            <figure><img src=""
                                                         alt="&lt;span&gt;FRAME&lt;/span&gt; LONDON REAL ESTATE"></figure>
                                        </div>
                                        <!-- end container -->
                                    </div>
                               @empty
                                   slider yok
                               @endforelse
                                <!-- end swiper-slide -->
                            </div>
                            <!-- end swiper-wrapper -->

                            <div class="inner-elements">
                                <div class="container">
                                    <div class="social-media">
                                        <h6>
                                            SOCIAL MEDIA </h6>

                                    </div>
                                    <!-- end social-media -->
                                </div>
                                <!-- end container -->
                            </div>
                            <!-- end inner-elements -->

                            <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span>
                        </div>
                        <!-- end swiper-container -->

                    </header>
                </div>
            </div>
        </div>
    </div>
    <section class="content-section no-spacing">
        <div class="container">
            <div id="rowilk" class="vc_row wpb_row vc_row-fluid rowilk vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div id="ilkfoto" class="wpb_single_image wpb_content_element vc_align_left   ilkfoto">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img
                                                                                                   width="736" height="950px" src="./src/ofisbuyuk.png"
                                                                                                   class="vc_single_image-img attachment-full" alt="" loading="lazy"
                                                                                                   sizes="(max-width: 736px) 100vw, 736px"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columniki wpb_column vc_column_container vc_col-sm-12 vc_col-md-6" id="columniki">
                    <div class="vc_column-inner vc_custom_1638444442895">
                        <div class="wpb_wrapper">
                            <div class="section-titles

			 wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;">




                                <h2><em>{{__('why')}} </em> Frame?</h2>






                            </div>
                            <div class="side-image-right wow fadeInUp"
                                 style="visibility: visible; animation-name: fadeInUp; margin-top:-20px;">
                                <p style="font-size: 15px; ">
                                    @foreach($contents as $c)
                                        @if($c->name=='why-frame')
                                            {!! $c->content !!}
                                        @endif
                                    @endforeach
                                    <br>
                                    <button id="makeAppointment" style="margin-top:20px" class="learnmorebuton">{{__('make-an-appointment')}}</button>
                                </p>

                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section no-spacing">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid slaytclient vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_images_carousel wpb_content_element vc_clearfix">
                                <div class="wpb_wrapper">
                                    <div style="margin-top: 5px;"
                                         class="vc_slide vc_images_carousel vc_per-view-more vc_per-view-3 vc_build">
                                        <div class="">
                                            <div class="" style="width: 2448px;">
                                                <div class="" style="left: -25%; display: flex;">

                                                    <div class="vc_item" style=" height: 120.812px; ">
                                                        <div class="vc_inner"><img height="1562"
                                                                                   src="./src/ofis3.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy"></div>
                                                    </div>

                                                    <div class="vc_item"
                                                         style=" height: 120.812px; margin-left: 20px;">
                                                        <div class="vc_inner"><img  height="1562"
                                                                                   src="./src/ofis2.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy"></div>
                                                    </div>
                                                    <div class="vc_item"
                                                         style=" height: 120.812px; margin-left: 20px;">
                                                        <div class="vc_inner"><img src="./src/ofis1.jpg"
                                                                                   class="attachment-full" alt="" loading="lazy"></div>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <style>
        /* The container */
        .checkBoxcontainer {
            display: block;
            position: relative;
            padding-left: 20px;
            padding-top: -5px;
            margin-bottom: 20px;
            cursor: pointer;
            font-size: 17px;
            -webkit-user-select: none;
            -moz-user-select: none;
            -ms-user-select: none;
            user-select: none;
        }

        /* Hide the browser's default radio button */
        .checkBoxcontainer input {
            position: absolute;
            opacity: 0;
            cursor: pointer;
        }

        /* Create a custom radio button */
        .checkmark {
            position: absolute;
            top: 0;
            left: 0;
            height: 15px;
            width: 15px;
            background-color: #eee;
            border-radius: 50%;
        }

        /* On mouse-over, add a grey background color */
        .checkBoxcontainer:hover input~.checkmark {
            background-color: #ccc;
        }

        /* When the radio button is checked, add a blue background */
        .checkBoxcontainer input:checked~.checkmark {
            background-color: #FFFFFF;
        }

        /* Create the indicator (the dot/circle - hidden when not checked) */
        .checkmark:after {
            content: "";
            position: absolute;
            display: none;
        }

        /* Show the indicator (dot/circle) when checked */
        .checkBoxcontainer input:checked~.checkmark:after {
            display: block;
        }

        /* Style the indicator (dot/circle) */
        .checkBoxcontainer .checkmark:after {
            top: 3.5px;
            left: 3.5px;
            width: 8px;
            height: 8px;
            border-radius: 50%;
            background: #000000;
        }
    </style>

    <section style="padding:220px 0" class="content-section">
        <div class="vc_row wpb_row vc_row-fluid vc_custom_1642545372755 vc_row-has-fill">
            <div class="wpb_column vc_column_container vc_col-sm-12">
                <div class="vc_column-inner">
                    <div class="wpb_wrapper">
                        <div style="padding: 45px" class="consultation-box wow fadeInLeftBig"
                             style="visibility: visible; animation-name: fadeInLeftBig;">

                            <h4>
                                <em>{{__('property-management')}} </em>
                            </h4>

                            <h3>
                                {{__('have-you-met-frame-summer')}}</h3>

                            @foreach($contents as $c)
                                @if($c->name=='redarea')
                                    {!! $c->content !!}
                                @endif
                            @endforeach


                            <div style="display: flex; ">
                                <div>

                                    <label class="checkBoxcontainer">{{__('buy')}}
                                        <input type="checkbox" checked="checked">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div style="margin-left: 20px;">

                                    <label class="checkBoxcontainer">{{__('rent')}}
                                        <input type="checkbox">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>

                            </div>
                            <div style="margin-top: 10px; display: flex; line-height: 0px;">
                                <a href=""><i class="fa fa-search"></i> {{__('residential')}}</a>
                                <a style="margin-left: 20px; background-color: transparent; border:2px solid #FFFFFF; color:#FFFFFF"
                                   href=""><i style="margin-right: 5px;" class="fa fa-search"></i>{{__('estate-management')}}</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section no-spacing">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1638354040062 vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1642543419625">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img style="height:371px"
                                                                                                   class="vc_single_image-img " src="./src/proprtyist.jpeg" width="500"
                                                                                                   height="600" alt="WhatsApp Image 2021-12-13 at 18.07.19"
                                                                                                   title="WhatsApp Image 2021-12-13 at 18.07.19"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columnsag frameist wpb_column vc_column_container vc_col-sm-12 vc_col-md-6" id="columnsag"
                     style="">
                    <div class="vc_column-inner vc_custom_1638444137039">
                        <div class="wpb_wrapper">
                            <div class="section-titles

			 wow fadeInRight" style="visibility: visible; animation-name: fadeInRight;">

                                <b>
                                    04 </b>



                                <h2 style="text-align: left;">Frame Gayrimenkul <em>Istanbul</em></h2>

                            </div>
                            <div class="side-image-right wow fadeInRight"
                                 style="visibility: visible; animation-name: fadeInRight;">
                                @foreach($contents as $c)
                                    @if($c->name=='frame-ist')
                                        {!! $c->content !!}
                                    @endif
                                @endforeach
                                <p><br>
                                    <a href="" style="color:white" class="learnmorebuton">{{__('properties')}}</a>
                                </p>
                                <p>&nbsp;</p>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section no-spacing">
        <div class="container">
            <div style="margin-left:-145px!important; margin-top:-157px"
                 class="vc_row wpb_row vc_row-fluid  vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_images_carousel wpb_content_element vc_clearfix">
                                <div class="wpb_wrapper">
                                    <div class="vc_slide vc_images_carousel vc_per-view-more  vc_build">
                                        <div class="vc_carousel-inner">
                                            <div class="vc_carousel-slideline" style="width: 2246px;">
                                                <div class="vc_carousel-slideline-inner" style="margin-left: -7px;">

                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/istinye.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                İstinye</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/yeniköy.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Yeniköy</p>
                                                        </div>
                                                    </div>

                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/tarabya.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Tarabya</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/bebek.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Bebek</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!--       <div class="wpb_wrapper" style=" margin-top: 14px">
                                    <div class="vc_slide vc_images_carousel vc_per-view-more  vc_build">
                                        <div class="vc_carousel-inner">
                                            <div class="vc_carousel-slideline" style="width: 2448px;">
                                                <div class="vc_carousel-slideline-inner" style="left: -25%;">
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/Basliksiz-1.jpg" class="attachment-full"
                                                                alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                İstinye</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/Basliksiz-2.jpg" class="attachment-full"
                                                                alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Yeniköy</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/Basliksiz-3.jpg" class="attachment-full"
                                                                alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Tarabya</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/5a3795b5b0bcd58c028b5863.jpg"
                                                                class="attachment-full" alt="" loading="lazy">
                                                            <p style="background-color: black; color: white;
                                                            text-align: center;"> Bebek</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/5a3795b5b0bcd58c028b5863.jpg"
                                                                class="attachment-full" alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Etiler</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/5a3795b5b0bcd58c028b5863.jpg"
                                                                class="attachment-full" alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Ulus</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><a class="vc_left vc_carousel-control"
                                        href="https://webtasarimcistanbul.com/emlak/#vc_images-carousel-1-1642852275"
                                        data-slide="prev" style=""><span class="icon-prev"></span></a><a
                                        class="vc_right vc_carousel-control"
                                        href="https://webtasarimcistanbul.com/emlak/#vc_images-carousel-1-1642852275"
                                        data-slide="next" style="display: none;"><span class="icon-next"></span></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>

    <section class="content-section no-spacing">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid solrow vc_custom_1638917861080 vc_row-o-content-middle vc_row-flex">
                <div style="margin-top: -120px;"
                     class="columnsag2 wpb_column vc_column_container vc_col-sm-12 vc_col-md-6" id="columnsag2">
                    <div style="margin-top: -215px;" class="solumnsag2ic vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-titles wow fadeInLeft"
                                 style="visibility: visible; animation-name: fadeInLeft; margin-top: 70px;">

                                <h2 style="text-align: left;">Frame Gayrimenkul <em
                                        style="color:#2E87B7!important">Bodrum</em></h2>

                            </div>
                            <div class="side-image-right wow fadeInRight"
                                 style="visibility: visible; animation-name: fadeInRight; margin-top: -29px;">

                                @foreach($contents as $c)
                                    @if($c->name=='frame-bodrum')
                                        {!! $c->content !!}
                                    @endif
                                @endforeach

                                <a href="" style=""
                                        class="bodrumbutton">{{__('properties')}}</a>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="columnsag2gorsel wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                    <div class="vc_column-inner vc_custom_1638916094168">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1639408809153">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class="vc_single_image-wrapper   vc_box_border_grey"><img style="height:371px"
                                                                                                   class="vc_single_image-img " src="./src/bodrumm.jpeg" width="500"
                                                                                                   height="600" alt="WhatsApp Image 2021-12-13 at 18.07.19"
                                                                                                   title="WhatsApp Image 2021-12-13 at 18.07.19"></div>
                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="content-section no-spacing">
        <div class="container">
            <div class="bodrumslider" style=" margin-top:-275px"
                 class="vc_row wpb_row vc_row-fluid  vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_images_carousel wpb_content_element vc_clearfix">
                                <div class="wpb_wrapper">
                                    <div class="vc_slide vc_images_carousel vc_per-view-more  vc_build">
                                        <div class="vc_carousel-inner">
                                            <div class="vc_carousel-slideline" style="width: 1993px;">
                                                <div class="vc_carousel-slideline-inner" style="margin-left: -17px;">

                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/bodrumprop.jpeg" class="attachment-full"
                                                                                   alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Türkbükü</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/cesmeprop.jpeg" class="attachment-full"
                                                                                   alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Gündoğan</p>
                                                        </div>
                                                    </div>

                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/fethiyeprop.jpeg" class="attachment-full"
                                                                                   alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Yalıkavak</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 7.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                                   src="./src/urlaprop.jpeg" class="attachment-full" alt=""
                                                                                   loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Bitez</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <!--       <div class="wpb_wrapper" style=" margin-top: 14px">
                                    <div class="vc_slide vc_images_carousel vc_per-view-more  vc_build">
                                        <div class="vc_carousel-inner">
                                            <div class="vc_carousel-slideline" style="width: 2448px;">
                                                <div class="vc_carousel-slideline-inner" style="left: -25%;">
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/Basliksiz-1.jpg" class="attachment-full"
                                                                alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                İstinye</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/Basliksiz-2.jpg" class="attachment-full"
                                                                alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Yeniköy</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/Basliksiz-3.jpg" class="attachment-full"
                                                                alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Tarabya</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/5a3795b5b0bcd58c028b5863.jpg"
                                                                class="attachment-full" alt="" loading="lazy">
                                                            <p style="background-color: black; color: white;
                                                            text-align: center;"> Bebek</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/5a3795b5b0bcd58c028b5863.jpg"
                                                                class="attachment-full" alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Etiler</p>
                                                        </div>
                                                    </div>
                                                    <div class="vc_item" style="width: 8.33333%; height: 122.812px;">
                                                        <div class="vc_inner"><img width="2340" height="1562"
                                                                src="./src/5a3795b5b0bcd58c028b5863.jpg"
                                                                class="attachment-full" alt="" loading="lazy">
                                                            <p
                                                                style="background-color: black; color: white; text-align: center;">
                                                                Ulus</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div><a class="vc_left vc_carousel-control"
                                        href="https://webtasarimcistanbul.com/emlak/#vc_images-carousel-1-1642852275"
                                        data-slide="prev" style=""><span class="icon-prev"></span></a><a
                                        class="vc_right vc_carousel-control"
                                        href="https://webtasarimcistanbul.com/emlak/#vc_images-carousel-1-1642852275"
                                        data-slide="next" style="display: none;"><span class="icon-next"></span></a>
                                </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-6">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper"></div>
                    </div>
                </div>

            </div>
        </div>

    </section>

    <!--
        <section class="content-section no-spacing">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid solrow vc_custom_1638917861080 vc_row-o-content-middle vc_row-flex">
                <div class="columnsag2 wpb_column vc_column_container vc_col-sm-12 vc_col-md-6" id="columnsag2">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="section-titles

             wow fadeInLeft" style="visibility: visible; animation-name: fadeInLeft;">

                                <b>
                                    04 </b>



                                <h2>Property Summer</h2>
                            </div>
                            <div class="side-image-right wow fadeInRight"
                                style="visibility: visible; animation-name: fadeInRight;">
                                <p>We listen and understand to all our client’s property needs.We use our in house
                                    maintenance team to deliver the best possible service 365 days a year. Above all you
                                    can expect a friendly and professional service at all times</p>
                                <p><br>
                                    <button class="learnmorebuton">Learn More </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="columnsag2gorsel wpb_column vc_column_container vc_col-sm-12 vc_col-md-6">
                    <div class="vc_column-inner vc_custom_1638916094168">
                        <div class="wpb_wrapper">
                            <div class="wpb_single_image wpb_content_element vc_align_left  vc_custom_1639408809153">

                                <figure class="wpb_wrapper vc_figure">
                                    <div class=""><img width="371px" class="vc_single_image-img "
                                            src="./src/propsummer.jpg" alt="WhatsApp Image 2021-12-13 at 18.09.50"
                                            title="WhatsApp Image 2021-12-13 at 18.09.50"></div>

                                </figure>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    -->

    <section style="margin-top: 0; padding-bottom: 0;" class="content-section">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_custom_1638915229384">
                <div class="wpb_column vc_column_container vc_col-sm-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="vc_row wpb_row vc_inner vc_row-fluid vc_custom_1638098835838">
                                <div class="wpb_column vc_column_container vc_col-sm-12">
                                    <div class="vc_column-inner">
                                        <div class="wpb_wrapper">


                                            <div class="about-content wow fadeInUp"
                                                 style="visibility: visible; animation-name: fadeInUp;">
                                                <blockquote><noscript class="ninja-forms-noscript-message">
                                                        Bildirim: Bu içerik için bir JavaScript gereklidir.</noscript>
                                                    <div id="nf-form-2-cont" class="nf-form-cont" aria-live="polite"
                                                         aria-labelledby="nf-form-title-2"
                                                         aria-describedby="nf-form-errors-2" role="form">
                                                        <span id="nf-form-title-2" class="nf-form-title">

                                                        </span>
                                                        <div class="nf-form-wrap ninja-forms-form-wrap nf-multi-cell">
                                                            <div class="nf-response-msg"></div>
                                                            <div class="nf-debug-msg"></div>
                                                            <div class="nf-before-form">
                                                                <nf-section>

                                                                </nf-section>
                                                            </div>
                                                            <div class="nf-form-layout">
                                                                <form>
                                                                    <div>
                                                                        <div class="nf-before-form-content">
                                                                            <nf-section>
                                                                                <div class="nf-form-fields-required">
                                                                                </div>

                                                                            </nf-section>
                                                                        </div>
                                                                        <div class="nf-form-content ">
                                                                            <nf-rows-wrap>
                                                                                <div class="nf-row">
                                                                                    <nf-cells>
                                                                                        <div class="nf-cell"
                                                                                             style="width: 34%;">
                                                                                            <nf-fields>
                                                                                                <nf-field>
                                                                                                    <div id="nf-field-5-container"
                                                                                                         class="nf-field-container firstname-container  label-above ">
                                                                                                        <div
                                                                                                            class="nf-before-field">
                                                                                                            <nf-section>

                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-field">
                                                                                                            <div id="nf-field-5-wrap"
                                                                                                                 class="field-wrap firstname-wrap"
                                                                                                                 data-field-id="5">



                                                                                                                <div
                                                                                                                    class="nf-field-label">
                                                                                                                    <label
                                                                                                                        for="nf-field-5"
                                                                                                                        id="nf-label-field-5"
                                                                                                                        class="">
                                                                                                                    </label>
                                                                                                                </div>


                                                                                                                <div
                                                                                                                    class="nf-field-element">
                                                                                                                    <input
                                                                                                                        type="text"
                                                                                                                        value=""
                                                                                                                        class="ninja-forms-field nf-element"
                                                                                                                        id="nf-field-5"
                                                                                                                        name="fname"
                                                                                                                        autocomplete="given-name"
                                                                                                                        placeholder="Adınız"
                                                                                                                        aria-invalid="false"
                                                                                                                        aria-describedby="nf-error-5"
                                                                                                                        aria-labelledby="nf-label-field-5">
                                                                                                                </div>


                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-after-field">
                                                                                                            <nf-section>

                                                                                                                <div
                                                                                                                    class="nf-input-limit">
                                                                                                                </div>

                                                                                                                <div id="nf-error-5"
                                                                                                                     class="nf-error-wrap nf-error"
                                                                                                                     role="alert">
                                                                                                                </div>


                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </nf-field>
                                                                                            </nf-fields>
                                                                                        </div>
                                                                                        <div class="nf-cell"
                                                                                             style="width: 33%;">
                                                                                            <nf-fields>
                                                                                                <nf-field>
                                                                                                    <div id="nf-field-7-container"
                                                                                                         class="nf-field-container email-container  label-above ">
                                                                                                        <div
                                                                                                            class="nf-before-field">
                                                                                                            <nf-section>

                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-field">
                                                                                                            <div id="nf-field-7-wrap"
                                                                                                                 class="field-wrap email-wrap"
                                                                                                                 data-field-id="7">



                                                                                                                <div
                                                                                                                    class="nf-field-label">
                                                                                                                    <label
                                                                                                                        for="nf-field-7"
                                                                                                                        id="nf-label-field-7"
                                                                                                                        class="">
                                                                                                                    </label>
                                                                                                                </div>


                                                                                                                <div
                                                                                                                    class="nf-field-element">
                                                                                                                    <input
                                                                                                                        type="email"
                                                                                                                        value=""
                                                                                                                        class="ninja-forms-field nf-element"
                                                                                                                        id="nf-field-7"
                                                                                                                        name="email"
                                                                                                                        autocomplete="email"
                                                                                                                        placeholder="Mail Adresiniz"
                                                                                                                        aria-invalid="false"
                                                                                                                        aria-describedby="nf-error-7"
                                                                                                                        aria-labelledby="nf-label-field-7">
                                                                                                                </div>


                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-after-field">
                                                                                                            <nf-section>

                                                                                                                <div
                                                                                                                    class="nf-input-limit">
                                                                                                                </div>

                                                                                                                <div id="nf-error-7"
                                                                                                                     class="nf-error-wrap nf-error"
                                                                                                                     role="alert">
                                                                                                                </div>


                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </nf-field>
                                                                                            </nf-fields>
                                                                                        </div>
                                                                                        <div class="nf-cell"
                                                                                             style="width: 33%;">
                                                                                            <nf-fields>
                                                                                                <nf-field>
                                                                                                    <div id="nf-field-8-container"
                                                                                                         class="nf-field-container submit-container  label-above  textbox-container">
                                                                                                        <div
                                                                                                            class="nf-before-field">
                                                                                                            <nf-section>

                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-field">
                                                                                                            <div id="nf-field-8-wrap"
                                                                                                                 class="field-wrap submit-wrap textbox-wrap"
                                                                                                                 data-field-id="8">
                                                                                                                <div
                                                                                                                    class="nf-field-label">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="nf-field-element">
                                                                                                                    <input
                                                                                                                        id="nf-field-8"
                                                                                                                        class="ninja-forms-field nf-element "
                                                                                                                        type="button"
                                                                                                                        value="Gönder">
                                                                                                                </div>
                                                                                                                <div
                                                                                                                    class="nf-error-wrap">
                                                                                                                </div>
                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-after-field">
                                                                                                            <nf-section>

                                                                                                                <div
                                                                                                                    class="nf-input-limit">
                                                                                                                </div>

                                                                                                                <div id="nf-error-8"
                                                                                                                     class="nf-error-wrap nf-error"
                                                                                                                     role="alert">
                                                                                                                </div>


                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </nf-field>
                                                                                            </nf-fields>
                                                                                        </div>
                                                                                    </nf-cells>
                                                                                </div>
                                                                                <div class="nf-row">
                                                                                    <nf-cells>
                                                                                        <div class="nf-cell"
                                                                                             style="width: 100%;">
                                                                                            <nf-fields>
                                                                                                <nf-field>
                                                                                                    <div id="nf-field-9-container"
                                                                                                         class="nf-field-container checkbox-container  label-right ">
                                                                                                        <div
                                                                                                            class="nf-before-field">
                                                                                                            <nf-section>

                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-field">
                                                                                                            <div id="nf-field-9-wrap"
                                                                                                                 class="field-wrap checkbox-wrap"
                                                                                                                 data-field-id="9">



                                                                                                                <div
                                                                                                                    class="nf-field-label">
                                                                                                                    <label
                                                                                                                        for="nf-field-9"
                                                                                                                        id="nf-label-field-9"
                                                                                                                        class="">I
                                                                                                                        Frame
                                                                                                                        Gayrimenkul'ün
                                                                                                                        mail
                                                                                                                        yolu
                                                                                                                        vasıtasıyla
                                                                                                                        benimle
                                                                                                                        iletişime
                                                                                                                        geçmesine
                                                                                                                        izin
                                                                                                                        veriyorum
                                                                                                                        .
                                                                                                                    </label>
                                                                                                                </div>


                                                                                                                <div
                                                                                                                    class="nf-field-element">
                                                                                                                    <input
                                                                                                                        id="nf-field-9"
                                                                                                                        name="nf-field-9"
                                                                                                                        aria-describedby="nf-error-9"
                                                                                                                        class="ninja-forms-field nf-element"
                                                                                                                        type="checkbox"
                                                                                                                        value="1"
                                                                                                                        aria-labelledby="nf-label-field-9">
                                                                                                                </div>


                                                                                                            </div>
                                                                                                        </div>
                                                                                                        <div
                                                                                                            class="nf-after-field">
                                                                                                            <nf-section>

                                                                                                                <div
                                                                                                                    class="nf-input-limit">
                                                                                                                </div>

                                                                                                                <div id="nf-error-9"
                                                                                                                     class="nf-error-wrap nf-error"
                                                                                                                     role="alert">
                                                                                                                </div>


                                                                                                            </nf-section>
                                                                                                        </div>
                                                                                                    </div>
                                                                                                </nf-field>
                                                                                            </nf-fields>
                                                                                        </div>
                                                                                    </nf-cells>
                                                                                </div>
                                                                            </nf-rows-wrap>
                                                                        </div>
                                                                        <div class="nf-after-form-content">
                                                                            <nf-section>

                                                                                <div id="nf-form-errors-2"
                                                                                     class="nf-form-errors" role="alert">
                                                                                    <nf-errors></nf-errors>
                                                                                </div>
                                                                                <div class="nf-form-hp">
                                                                                    <nf-section>
                                                                                        <label for="nf-field-hp-2"
                                                                                               aria-hidden="true">
                                                                                            Bir insan olarak bu alanı
                                                                                            görebiliyorsanız, lütfen boş
                                                                                            bırakın.
                                                                                            <input id="nf-field-hp-2"
                                                                                                   name="nf-field-hp"
                                                                                                   class="nf-element nf-field-hp"
                                                                                                   type="text" value="">
                                                                                        </label>
                                                                                    </nf-section>
                                                                                </div>
                                                                            </nf-section>
                                                                        </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                            <div class="nf-after-form">
                                                                <nf-section>

                                                                </nf-section>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- TODO: Move to Template File. -->
                                                    <script>var formDisplay = 1; var nfForms = nfForms || []; var form = []; form.id = '2'; form.settings = { "objectType": "Form Setting", "editActive": true, "title": "test", "show_title": 0, "allow_public_link": 0, "embed_form": "", "clear_complete": 1, "hide_complete": 1, "default_label_pos": "above", "wrapper_class": "", "element_class": "", "key": "", "add_submit": 0, "currency": "", "repeatable_fieldsets": "", "unique_field_error": "A form with this value has already been submitted.", "logged_in": false, "not_logged_in_msg": "", "sub_limit_msg": "The form has reached its submission limit.", "calculations": [], "container_styles_show_advanced_css": 0, "title_styles_show_advanced_css": 0, "row_styles_show_advanced_css": 0, "row-odd_styles_show_advanced_css": 0, "success-msg_styles_show_advanced_css": 0, "error_msg_styles_show_advanced_css": 0, "formContentData": [{ "order": 1, "cells": [{ "order": 0, "fields": ["name_1638199461690"], "width": 34 }, { "order": 2, "fields": ["e-mail_1638199481854"], "width": 33 }, { "order": 3, "fields": ["sign_up_now_1638199512819"], "width": 33 }] }, { "order": 2, "cells": [{ "order": 0, "fields": ["i_allow_frame_london_real_estate_to_contact_me_through_email_1638201593561"], "width": "100" }] }], "changeEmailErrorMsg": "L\u00fctfen ge\u00e7erli bir e-posta adresi girin!", "changeDateErrorMsg": "Please enter a valid date!", "confirmFieldErrorMsg": "Bu alanlar e\u015fle\u015fmelidir!", "fieldNumberNumMinError": "Minimum Say\u0131 Hatas\u0131", "fieldNumberNumMaxError": "Maksimum Say\u0131 Hatas\u0131", "fieldNumberIncrementBy": "L\u00fctfen \u015funa g\u00f6re art\u0131r\u0131n: ", "formErrorsCorrectErrors": "L\u00fctfen bu formu g\u00f6ndermeden \u00f6nce hatalar\u0131 d\u00fczeltin.", "validateRequiredField": "Bu zorunlu bir aland\u0131r.", "honeypotHoneypotError": "Honeypot Hatas\u0131", "fieldsMarkedRequired": "<span class=\"ninja-forms-req-symbol\">*<\/span> i\u015fareti olan alanlar zorunludur", "drawerDisabled": false, "ninjaForms": "Ninja Forms", "fieldTextareaRTEInsertLink": "Ba\u011flant\u0131 Yerle\u015ftir", "fieldTextareaRTEInsertMedia": "Medya Yerle\u015ftir", "fieldTextareaRTESelectAFile": "Dosya se\u00e7in", "formHoneypot": "Bir insan olarak bu alan\u0131 g\u00f6rebiliyorsan\u0131z, l\u00fctfen bo\u015f b\u0131rak\u0131n.", "fileUploadOldCodeFileUploadInProgress": "Dosya Y\u00fckleme \u0130\u015flemi Devam Ediyor.", "fileUploadOldCodeFileUpload": "DOSYA Y\u00dcKLEME", "currencySymbol": false, "thousands_sep": ".", "decimal_point": ",", "siteLocale": "tr_TR", "dateFormat": "m\/d\/Y", "startOfWeek": "1", "of": "\/", "previousMonth": "Previous Month", "nextMonth": "Next Month", "months": ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"], "monthsShort": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"], "weekdays": ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"], "weekdaysShort": ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"], "weekdaysMin": ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"], "currency_symbol": "", "beforeForm": "", "beforeFields": "", "afterFields": "", "afterForm": "" }; form.fields = [{ "objectType": "Field", "objectDomain": "fields", "editActive": false, "order": 1, "idAttribute": "id", "label": "", "type": "firstname", "key": "name_1638199461690", "label_pos": "above", "required": false, "default": "", "placeholder": "Adınız", "container_class": "", "element_class": "", "admin_label": "", "help_text": "", "custom_name_attribute": "fname", "personally_identifiable": 1, "wrap_styles_show_advanced_css": 0, "label_styles_show_advanced_css": 0, "element_styles_show_advanced_css": 0, "cellcid": "c3346", "value": "", "wrap_styles_border": "", "wrap_styles_width": "", "wrap_styles_margin": "", "wrap_styles_padding": "", "wrap_styles_float": "", "label_styles_border": "", "label_styles_width": "", "label_styles_font-size": "", "label_styles_margin": "", "label_styles_padding": "", "label_styles_float": "", "element_styles_border": "", "element_styles_width": "", "element_styles_font-size": "", "element_styles_margin": "", "element_styles_padding": "", "element_styles_float": "", "drawerDisabled": false, "cellOrder": 1, "id": 5, "beforeField": "", "afterField": "", "parentType": "firstname", "element_templates": ["firstname", "input"], "old_classname": "", "wrap_template": "wrap" }, { "objectType": "Field", "objectDomain": "fields", "editActive": false, "order": 2, "idAttribute": "id", "label": "", "type": "email", "cellcid": "c3349", "key": "e-mail_1638199481854", "label_pos": "above", "required": false, "default": "", "placeholder": "Mail Adresiniz", "container_class": "", "element_class": "", "admin_label": "", "help_text": "", "custom_name_attribute": "email", "personally_identifiable": 1, "wrap_styles_show_advanced_css": 0, "label_styles_show_advanced_css": 0, "element_styles_show_advanced_css": 0, "value": "", "cellOrder": 2, "wrap_styles_border": "", "wrap_styles_width": "", "wrap_styles_margin": "", "wrap_styles_padding": "", "wrap_styles_float": "", "label_styles_border": "", "label_styles_width": "", "label_styles_font-size": "", "label_styles_margin": "", "label_styles_padding": "", "label_styles_float": "", "element_styles_border": "", "element_styles_width": "", "element_styles_font-size": "", "element_styles_margin": "", "element_styles_padding": "", "element_styles_float": "", "drawerDisabled": false, "id": 7, "beforeField": "", "afterField": "", "parentType": "email", "element_templates": ["email", "input"], "old_classname": "", "wrap_template": "wrap" }, { "objectType": "Field", "objectDomain": "fields", "editActive": false, "order": 3, "idAttribute": "id", "label": "Gönder", "type": "submit", "cellcid": "c3351", "processing_label": "\u0130\u015fleniyor", "container_class": "", "element_class": "", "key": "sign_up_now_1638199512819", "wrap_styles_show_advanced_css": 0, "element_styles_show_advanced_css": 0, "submit_element_hover_styles_show_advanced_css": 0, "wrap_styles_border": "", "wrap_styles_width": "", "wrap_styles_margin": "", "wrap_styles_padding": "", "wrap_styles_float": "", "element_styles_border": "", "element_styles_width": "", "element_styles_font-size": "", "element_styles_margin": "", "element_styles_padding": "", "element_styles_float": "", "submit_element_hover_styles_border": "", "submit_element_hover_styles_width": "", "submit_element_hover_styles_font-size": "", "submit_element_hover_styles_margin": "", "submit_element_hover_styles_padding": "", "submit_element_hover_styles_float": "", "drawerDisabled": false, "id": 8, "beforeField": "", "afterField": "", "value": "", "label_pos": "above", "parentType": "textbox", "element_templates": ["submit", "button", "input"], "old_classname": "", "wrap_template": "wrap-no-label" }, { "objectType": "Field", "objectDomain": "fields", "editActive": false, "order": 4, "idAttribute": "id", "label": "Frame Gayrimenkulün email vasıtasıyla benimle iletişime geçmesine izin veriyorum .", "type": "checkbox", "cellcid": "c3354", "key": "i_allow_frame_london_real_estate_to_contact_me_through_email_1638201593561", "label_pos": "right", "required": false, "container_class": "", "element_class": "", "manual_key": false, "admin_label": "", "help_text": "", "default_value": "unchecked", "checked_value": "Onayland\u0131", "unchecked_value": "Onaylanmad\u0131", "checked_calc_value": "", "unchecked_calc_value": "", "wrap_styles_border": "", "wrap_styles_width": "", "wrap_styles_margin": "", "wrap_styles_padding": "", "wrap_styles_float": "", "wrap_styles_show_advanced_css": 0, "label_styles_border": "", "label_styles_width": "", "label_styles_font-size": "", "label_styles_margin": "", "label_styles_padding": "", "label_styles_float": "", "label_styles_show_advanced_css": 0, "element_styles_border": "", "element_styles_width": "", "element_styles_font-size": "", "element_styles_margin": "", "element_styles_padding": "", "element_styles_float": "", "element_styles_show_advanced_css": 0, "cellOrder": 3, "drawerDisabled": false, "id": 9, "beforeField": "", "afterField": "", "value": "", "parentType": "checkbox", "element_templates": ["checkbox", "input"], "old_classname": "", "wrap_template": "wrap" }]; nfForms.push(form);</script>
                                                    <script id="nf-tmpl-cell" type="text/template">
                                                        <nf-fields></nf-fields>
                                                    </script>

                                                    <script id="nf-tmpl-row" type="text/template">
                                                        <nf-cells></nf-cells>
                                                    </script>

                                                </blockquote>




                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container">
        <h3 >{{__('follow-us-instagram')}}  </h3><p>@framegayrimenkulrealestate</p>
        <div id="instafeed">

        </div>
    </section>
    <section style="margin-top:413px; padding:0" class="content-section">
        <div class="container">
            <div id="testimonials"
                 class="vc_row wpb_row vc_row-fluid vc_custom_1638915291978 vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-md-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <h4 style="color: #0a0a0a;text-align: center"
                                class="vc_custom_heading vc_custom_1638917950488">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Müşteri Yorumları' : 'Testimonials'}}</h4>
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <div class="testimonial-post-948">
                                        <div
                                            class="testimonial-content swiper-container testi-style-limabelas has-pagination swiper-container-initialized swiper-container-horizontal">
                                            <div class="testimonial-list swiper-wrapper"
                                                 style="transition: all 0ms ease 0s; transform: translate3d(-1573.33px, 0px, 0px);">
                                                <div class="testi-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                                     data-swiper-slide-index="2"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>What a lovely Property Management
                                                            Service recently !
                                                            We have recently been working with Frame London Real Estate
                                                            and we are really happy with the fascinating service that we
                                                            are getting. Pemra Hicsonmez loves her job and acts as if
                                                            our property is her own. She has immediate access to
                                                            plumber, electrician, painter and also the tickets for
                                                            anything we need to.
                                                            We know that we are getting the best service possible.
                                                            Many thanks for your professional expertise.
                                                        </p>
                                                        <p class="testimonialname">G.A.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-duplicate"
                                                     data-swiper-slide-index="3"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>Mrs. Hicsonmez has been managing our family's real estate in
                                                            Turkey for the last 5 years. She has assisted us to rent out
                                                            our properties three times. I confirm that we have been very
                                                            satisfied with Frame 's Consuting services. The key factor
                                                            for choosing to work with Mrs. Hicsonmez were her in-depth
                                                            market knowledge and dedication to our needs and
                                                            requirements. Throughout the years I have learned to
                                                            appreciate the high levels of service she repeatedly
                                                            provided.
                                                        </p>
                                                        <p class="testimonialname">B.O.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-duplicate"
                                                     data-swiper-slide-index="4"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>Our experience is fresh having just purchased our new place
                                                            in Battersea Power Satation, London. Pemra was extremely
                                                            helpful, friendly and responsible along the home buying
                                                            process. She understood our taste. We felt confident we were
                                                            in the best of hands. She is a good advisor. I would
                                                            recommend her to anyone. With all best !
                                                        </p>
                                                        <p class="testimonialname">S.B.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-prev"
                                                     data-swiper-slide-index="0"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>I confirm that we have worked with Frame Real Estate in
                                                            Turkey since 2015.
                                                            Every summer, we visit Turkey and stay there for at least 1
                                                            month either in our house in Istanbul or in Bodrum. Since
                                                            2015, Mrs. Hicsonmez has assisted us to rent properties in
                                                            Bodrum. We have always had the pleasure of working with Mrs
                                                            Hicsonmez. Congratulations to her intention to set up her
                                                            own property consulting business in London, UK and I would
                                                            be interested in working with her in the future.
                                                        </p>
                                                        <p class="testimonialname">K.T.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-active"
                                                     data-swiper-slide-index="1"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>Great service ! <br> For my second property in Chelsea Bridge
                                                            Wharf, I was able to find the right partner. Understandably,
                                                            fast and effective services, speed with resolution times,
                                                            and most importantly knowing to get a response each time I
                                                            need makes all the difference. I would have no hesitation in
                                                            recommending Frame London Real Estate to anybody with their
                                                            properties, specially for the cleaning side. Thanks and best
                                                            regards
                                                        </p>
                                                        <p class="testimonialname">Z.H.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-next"
                                                     data-swiper-slide-index="2"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>What a lovely Property Management Service recently !
                                                            We have recently been working with Frame London Real Estate
                                                            and we are really happy with the fascinating service that we
                                                            are getting. Pemra Hicsonmez loves her job and acts as if
                                                            our property is her own. She has immediate access to
                                                            plumber, electrician, painter and also the tickets for
                                                            anything we need to.
                                                            We know that we are getting the best service possible.
                                                            Many thanks for your professional expertise.
                                                        </p>
                                                        <p class="testimonialname">G.A.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide" data-swiper-slide-index="3"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>Mrs. Hicsonmez has been managing our family's real estate in
                                                            Turkey for the last 5 years. She has assisted us to rent out
                                                            our properties three times. I confirm that we have been very
                                                            satisfied with Frame 's Consuting services. The key factor
                                                            for choosing to work with Mrs. Hicsonmez were her in-depth
                                                            market knowledge and dedication to our needs and
                                                            requirements. Throughout the years I have learned to
                                                            appreciate the high levels of service she repeatedly
                                                            provided.
                                                        </p>
                                                        <p class="testimonialname">B.O.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide" data-swiper-slide-index="4"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>Our experience is fresh having just purchased our new place
                                                            in Battersea Power Satation, London. Pemra was extremely
                                                            helpful, friendly and responsible along the home buying
                                                            process. She understood our taste. We felt confident we were
                                                            in the best of hands. She is a good advisor. I would
                                                            recommend her to anyone. With all best !
                                                        </p>
                                                        <p class="testimonialname">S.B.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-prev"
                                                     data-swiper-slide-index="0"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>I confirm that we have worked with Frame Real Estate in
                                                            Turkey since 2015.
                                                            Every summer, we visit Turkey and stay there for at least 1
                                                            month either in our house in Istanbul or in Bodrum. Since
                                                            2015, Mrs. Hicsonmez has assisted us to rent properties in
                                                            Bodrum. We have always had the pleasure of working with Mrs
                                                            Hicsonmez. Congratulations to her intention to set up her
                                                            own property consulting business in London, UK and I would
                                                            be interested in working with her in the future.
                                                        </p>
                                                        <p class="testimonialname">K.T.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-active"
                                                     data-swiper-slide-index="1"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>Great service ! <br> For my second property in Chelsea Bridge
                                                            Wharf, I was able to find the right partner. Understandably,
                                                            fast and effective services, speed with resolution times,
                                                            and most importantly knowing to get a response each time I
                                                            need makes all the difference. I would have no hesitation in
                                                            recommending Frame London Real Estate to anybody with their
                                                            properties, specially for the cleaning side. Thanks and best
                                                            regards
                                                        </p>
                                                        <p class="testimonialname">Z.H.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="testi-item swiper-slide swiper-slide-duplicate swiper-slide-duplicate-next"
                                                     data-swiper-slide-index="2"
                                                     style="width: 363.333px; margin-right: 30px;">
                                                    <div class="testimonial-bio">
                                                        <p>What a lovely Property Management Service recently !
                                                            We have recently been working with Frame London Real Estate
                                                            and we are really happy with the fascinating service that we
                                                            are getting. Pemra Hicsonmez loves her job and acts as if
                                                            our property is her own. She has immediate access to
                                                            plumber, electrician, painter and also the tickets for
                                                            anything we need to.
                                                            We know that we are getting the best service possible.
                                                            Many thanks for your professional expertise.
                                                        </p>
                                                        <p class="testimonialname">G.A.</p>
                                                    </div>
                                                    <div class="author">
                                                        <div class="testimonial-avatar">

                                                        </div>
                                                        <div class="testimonial-name">
                                                            <h1></h1>
                                                        </div>
                                                        <div class="testimonial-job">
                                                            <span></span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="swiper-pagination swiper-pagination-clickable swiper-pagination-bullets">
                                                <span class="swiper-pagination-bullet" tabindex="0" role="button"
                                                      aria-label="Go to slide 1"></span><span
                                                    class="swiper-pagination-bullet swiper-pagination-bullet-active"
                                                    tabindex="0" role="button" aria-label="Go to slide 2"></span><span
                                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                                    aria-label="Go to slide 3"></span><span
                                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                                    aria-label="Go to slide 4"></span><span
                                                    class="swiper-pagination-bullet" tabindex="0" role="button"
                                                    aria-label="Go to slide 5"></span>
                                            </div>
                                            <!-- Add Arrows -->
                                            <div class="swiper-button-next" tabindex="0" role="button"
                                                 aria-label="Next slide"></div>
                                            <div class="swiper-button-prev" tabindex="0" role="button"
                                                 aria-label="Previous slide"></div>
                                            <span class="swiper-notification" aria-live="assertive"
                                                  aria-atomic="true"></span>
                                        </div>
                                    </div>


                                    <script>
                                        (function ($) {
                                            'use strict';

                                            $(document).ready(function () {
                                                var swiper = new Swiper('.testimonial-post-948 .swiper-container', {
                                                    slidesPerView: 3,
                                                    spaceBetween: 30,
                                                    loop: true,
                                                    speed: 2000,
                                                    breakpoints: {
                                                        480: {
                                                            slidesPerView: 1,
                                                            spaceBetween: 30,
                                                        },
                                                        640: {
                                                            slidesPerView: 1,
                                                            spaceBetween: 30,
                                                        },
                                                        1025: {
                                                            slidesPerView: 3,
                                                            spaceBetween: 30,
                                                        }
                                                    },
                                                    autoplay: {
                                                        delay: 2500,
                                                        disableOnInteraction: false,
                                                    },
                                                    navigation: {
                                                        nextEl: '.testimonial-post-948 .swiper-button-next',
                                                        prevEl: '.testimonial-post-948 .swiper-button-prev',
                                                    },
                                                    pagination: {
                                                        clickable: true,
                                                        el: '.testimonial-post-948 .swiper-pagination',
                                                    },
                                                    navigation: {
                                                        nextEl: '.testimonial-post-948 .swiper-button-next',
                                                        prevEl: '.testimonial-post-948 .swiper-button-prev',
                                                    },
                                                });
                                            });

                                        })(jQuery);
                                    </script>



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="appointmentModal" class="appointmentBox">
        <div style="position: absolute; top:-10px; right: -10px;">
            <span id="closeModal"
                  style="background-color: #000; padding:5px 10px; border-radius: 100%; font-weight: bold; cursor: pointer;">X</span>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <img style="width: 285px;" src="src/modal.jpg" alt="">
                </div>
                <div class="col-md-6">
                    <div>
                        <form action="" method="post">
                            @csrf
                            <div>
                                <label for="#">Adınız Soyadınız</label>
                                <input style="height: 31px" id="name_surname" type="text">
                            </div>
                            <div>
                                <label for="#">E-posta Adresiniz</label>
                                <input style="height: 31px" id="email" type="text">
                            </div>
                            <div>
                                <label for="#">Telefon Numaranız</label>
                                <input style="height: 31px" id="phone" type="text">
                            </div>
                            <div>
                                <label for="#">Mesajınız</label>
                                <textarea name="" id="message" cols="30" rows="10"></textarea>
                            </div>
                            <div>
                                <button  type="submit" style="background-color: #dc1e33; border:0; color: #ffffff">Gönder</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <div class="cookie-container">
        <svg class="cookie" width="98" height="98" viewBox="0 0 98 98" fill="none" xmlns="http://www.w3.org/2000/svg">
            <g id="cookies-svgrepo-com 1" clip-path="url(#clip0_1_3)">
                <g>
                    <path id="Vector"
                          d="M91.8045 47.5377L87.1455 48.4694C85.5951 48.7795 84.0369 47.9731 83.3947 46.5282L78.4042 35.2991C77.9818 34.3484 77.1449 33.6456 76.1358 33.3931L73.536 32.7433C72.0315 32.3672 70.9763 31.0157 70.9763 29.4649V11.4467C70.9763 10.6047 70.6618 9.79291 70.0947 9.17046L63.8177 2.28251C58.1584 0.490378 52.0579 -0.309126 45.7155 0.108522C21.3389 1.71442 1.59173 21.5441 0.104308 45.9279C-1.63117 74.382 20.9314 98 49.0105 98C75.7927 98 97.5423 76.5099 97.9895 49.8343L93.9787 47.829C93.3065 47.4927 92.5415 47.3903 91.8045 47.5377Z"
                          fill="#FFE6A1" />
                    <g id="Group">
                        <path id="Vector_2"
                              d="M64.2174 82.7929C63.9199 82.7929 63.6269 82.7759 63.3308 82.7706C61.4741 84.8532 58.7788 86.1722 55.7691 86.1722C51.3361 86.1722 47.5777 83.3222 46.2001 79.3585C40.1366 76.9589 34.6673 73.3888 30.0709 68.9198C29.3755 69.1294 28.6533 69.2756 27.8896 69.2756C23.6904 69.2756 20.2862 65.8715 20.2862 61.6722C20.2862 60.2057 20.7211 58.8484 21.4404 57.687C21.3889 57.5949 21.334 57.5055 21.2828 57.4131C16.0086 57.0555 11.8381 52.6752 11.8381 47.3102C11.8381 44.1484 13.2863 41.3261 15.5546 39.4668C15.3397 37.6042 15.2174 35.7135 15.2174 33.7929C15.2174 24.1558 18.0108 15.1764 22.8156 7.59824C9.11362 16.2858 0.0105286 31.5751 0.0105286 49C0.0105286 76.062 21.9486 98 49.0105 98C66.4354 98 81.7245 88.8969 90.4123 75.1949C82.8341 79.9998 73.8547 82.7929 64.2174 82.7929Z"
                              fill="#FFD796" />
                        <path id="Vector_3"
                              d="M38.0278 40.5517C40.3608 40.5517 42.252 38.6605 42.252 36.3275C42.252 33.9946 40.3608 32.1034 38.0278 32.1034C35.6949 32.1034 33.8037 33.9946 33.8037 36.3275C33.8037 38.6605 35.6949 40.5517 38.0278 40.5517Z"
                              fill="#FFD796" />
                        <path id="Vector_4"
                              d="M82.8037 68.431C85.1366 68.431 87.0278 66.5398 87.0278 64.2068C87.0278 61.8739 85.1366 59.9827 82.8037 59.9827C80.4707 59.9827 78.5795 61.8739 78.5795 64.2068C78.5795 66.5398 80.4707 68.431 82.8037 68.431Z"
                              fill="#FFD796" />
                        <path id="Vector_5"
                              d="M44.364 68.431C45.997 68.431 47.3208 67.1071 47.3208 65.4741C47.3208 63.8411 45.997 62.5173 44.364 62.5173C42.7309 62.5173 41.4071 63.8411 41.4071 65.4741C41.4071 67.1071 42.7309 68.431 44.364 68.431Z"
                              fill="#FFD796" />
                        <path id="Vector_6"
                              d="M67.1744 41.3964C68.8074 41.3964 70.1312 40.0726 70.1312 38.4395C70.1312 36.8065 68.8074 35.4827 67.1744 35.4827C65.5414 35.4827 64.2176 36.8065 64.2176 38.4395C64.2176 40.0726 65.5414 41.3964 67.1744 41.3964Z"
                              fill="#FFD796" />
                        <path id="Vector_7"
                              d="M55.3469 15.2068C56.9799 15.2068 58.3037 13.883 58.3037 12.25C58.3037 10.617 56.9799 9.29315 55.3469 9.29315C53.7138 9.29315 52.39 10.617 52.39 12.25C52.39 13.883 53.7138 15.2068 55.3469 15.2068Z"
                              fill="#FFD796" />
                    </g>
                    <g id="Group_2">
                        <path id="Vector_8"
                              d="M46.5517 43.5231L44.5984 46.7787C43.4308 48.7245 44.4752 51.2454 46.6765 51.7956L52.4907 53.2492C54.3014 53.7019 56.1362 52.6011 56.5887 50.7904L57.2538 48.1298C57.3884 47.5916 57.3884 47.0289 57.2538 46.4906L56.5506 43.6775C56.1132 41.9275 54.3783 40.8296 52.6095 41.1833L48.7868 41.9478C47.8531 42.1348 47.0417 42.7067 46.5517 43.5231Z"
                              fill="#B97850" />
                        <path id="Vector_9"
                              d="M56.3045 64.4413L54.2673 67.8365C53.2546 69.5245 53.8931 71.7174 55.6537 72.5977L62.1389 75.8403C64.0725 76.8073 66.4042 75.7347 66.9286 73.6374L67.5967 70.9654L68.3774 67.8418C68.8634 65.8979 67.5607 63.9603 65.5767 63.6768L59.6797 62.8343C58.3341 62.6421 57.0039 63.2755 56.3045 64.4413Z"
                              fill="#B97850" />
                        <path id="Vector_10"
                              d="M20.7509 44.2833L18.2648 48.4271C17.467 49.7568 17.6766 51.4588 18.7729 52.5553L22.6857 56.4683C24.1099 57.8925 26.4558 57.7625 27.7141 56.1898L31.0685 51.9966C31.7273 51.1732 31.9639 50.0893 31.708 49.066L30.9429 46.0058C30.6262 44.7387 29.6079 43.7679 28.3274 43.5116L24.3113 42.7084C22.911 42.4282 21.4857 43.0587 20.7509 44.2833Z"
                              fill="#B97850" />
                        <path id="Vector_11"
                              d="M34.5088 16.8474L32.5917 20.0427C31.4794 21.8965 32.3699 24.3036 34.4208 24.9873L38.581 26.374C39.7953 26.7787 41.134 26.4627 42.0391 25.5577L44.2784 23.3184C45.1177 22.4791 45.4552 21.2608 45.1673 20.1093L44.5816 17.7667C44.2055 16.262 42.8538 15.2066 41.303 15.2066H37.4063C36.2196 15.2068 35.1196 15.8297 34.5088 16.8474Z"
                              fill="#B97850" />
                        <path id="Vector_12"
                              d="M75.3214 42.9649L73.3655 44.9209C72.0459 46.2405 72.0459 48.3802 73.3655 49.7L74.3227 50.6572C75.3513 51.6858 76.9224 51.9408 78.2235 51.2902L83.7584 48.5228C85.175 47.8144 85.9099 46.2173 85.5257 44.6807L85.275 43.6779C84.8376 41.9279 83.1027 40.83 81.3339 41.1837L77.0485 42.0408C76.3941 42.1714 75.7933 42.4931 75.3214 42.9649Z"
                              fill="#B97850" />
                        <path id="Vector_13"
                              d="M62.7562 18.8451L60.5119 21.8375C59.6876 22.9366 59.6108 24.4257 60.3177 25.6038L62.3942 29.0646C63.3869 30.7192 65.561 31.208 67.1664 30.1379L71.383 27.3267C72.9974 26.2506 73.376 24.0393 72.212 22.4873L69.9198 19.431C69.5073 18.8811 68.9371 18.4699 68.2849 18.2527L66.5282 17.667C65.1482 17.2066 63.6288 17.6813 62.7562 18.8451Z"
                              fill="#B97850" />
                        <path id="Vector_14"
                              d="M33.8385 72.2338L31.632 74.992C30.2154 76.7627 30.9104 79.3983 33.0159 80.2407L35.9798 81.4263C36.7856 81.7486 37.6843 81.7486 38.4899 81.4263L41.8162 80.0956C43.8091 79.2986 44.5636 76.8695 43.3731 75.0835L42.8017 74.2265C42.4754 73.7371 42.0273 73.3417 41.5013 73.0785L37.989 71.3223C36.5632 70.6097 34.8338 70.9897 33.8385 72.2338Z"
                              fill="#B97850" />
                    </g>
                    <g id="Group_3">
                        <path id="Vector_15"
                              d="M26.8788 56.0669L22.9661 52.1542C21.8697 51.0578 21.6599 49.3556 22.4579 48.0261L24.9441 43.8824C25.1561 43.529 25.4364 43.2421 25.7462 42.9956L24.3115 42.7089C22.9111 42.4288 21.4857 43.0593 20.7509 44.2837L18.2648 48.4275C17.467 49.7572 17.6766 51.4592 18.7729 52.5557L22.6857 56.4685C24.0058 57.7886 26.107 57.7568 27.4105 56.4951C27.2237 56.3712 27.0438 56.2321 26.8788 56.0669Z"
                              fill="#A5694B" />
                        <path id="Vector_16"
                              d="M41.9655 25.1711L37.8052 23.7845C35.7545 23.1008 34.8637 20.6937 35.9762 18.8399L37.8933 15.6446C37.9907 15.4819 38.1195 15.3481 38.2403 15.2068H37.4062C36.2193 15.2068 35.1192 15.8297 34.5085 16.8476L32.5913 20.0427C31.4789 21.8965 32.3693 24.3036 34.4204 24.9873L38.5806 26.3741C39.7949 26.7787 41.1336 26.4627 42.0388 25.5577L42.3536 25.2429C42.2242 25.2161 42.0929 25.2136 41.9655 25.1711Z"
                              fill="#A5694B" />
                        <path id="Vector_17"
                              d="M55.6969 52.2776L49.8828 50.8241C47.6812 50.2736 46.6369 47.753 47.8047 45.8072L49.758 42.5515C49.9905 42.1639 50.2995 41.8368 50.6557 41.5744L48.7868 41.9482C47.8533 42.1348 47.0415 42.707 46.5517 43.5235L44.5984 46.7791C43.4308 48.725 44.4752 51.2458 46.6765 51.7961L52.4907 53.2496C53.7155 53.5559 54.9405 53.1401 55.7519 52.2859C55.7335 52.2813 55.7153 52.2822 55.6969 52.2776Z"
                              fill="#A5694B" />
                        <path id="Vector_18"
                              d="M65.5507 28.7724L63.4741 25.3116C62.7673 24.1335 62.844 22.6447 63.6684 21.5453L65.9127 18.553C66.1584 18.2251 66.4635 17.9683 66.7943 17.7552L66.528 17.6666C65.148 17.2067 63.6286 17.6814 62.7558 18.8449L60.5118 21.8372C59.6874 22.9364 59.6106 24.4254 60.3175 25.6035L62.394 29.0643C63.3834 30.7133 65.5457 31.2023 67.1493 30.1463C66.5068 29.8789 65.9379 29.4176 65.5507 28.7724Z"
                              fill="#A5694B" />
                        <path id="Vector_19"
                              d="M77.0347 50.4321C75.715 49.1124 75.715 46.9728 77.0347 45.6531L78.9907 43.6971C79.4623 43.2255 80.0631 42.9037 80.7176 42.773L84.3246 42.0516C83.5529 41.3181 82.4509 40.96 81.3337 41.1835L77.0483 42.0407C76.3941 42.1716 75.7933 42.4931 75.3214 42.9648L73.3655 44.9208C72.0459 46.2405 72.0459 48.38 73.3655 49.6998L74.3227 50.657C75.2876 51.6219 76.7231 51.8747 77.9718 51.3696L77.0347 50.4321Z"
                              fill="#A5694B" />
                        <path id="Vector_20"
                              d="M59.8399 72.3142C58.0794 71.434 57.4406 69.241 58.4536 67.553L60.4907 64.158C60.7579 63.713 61.1355 63.3756 61.552 63.1021L59.6801 62.8347C58.3341 62.6423 57.004 63.2755 56.3046 64.4413L54.2675 67.8365C53.2548 69.5245 53.8933 71.7174 55.6539 72.5977L62.1391 75.8403C63.4317 76.4867 64.8904 76.2076 65.8797 75.3345L59.8399 72.3142Z"
                              fill="#A5694B" />
                        <path id="Vector_21"
                              d="M39.3591 80.8615L36.3951 79.6759C34.2899 78.8339 33.5949 76.1979 35.0113 74.4272L37.2178 71.669C37.3579 71.4939 37.5153 71.3408 37.6814 71.2007C36.3213 70.6798 34.764 71.0768 33.8385 72.2339L31.632 74.992C30.2154 76.7627 30.9104 79.3984 33.0159 80.2408L35.9798 81.4263C36.7856 81.7487 37.6843 81.7487 38.4899 81.4263L39.6722 80.9534C39.5675 80.9229 39.4609 80.9023 39.3591 80.8615Z"
                              fill="#A5694B" />
                    </g>
                    <path id="Vector_22"
                          d="M13.5257 69.2741C13.2725 69.2741 13.0141 69.2165 12.7718 69.0959C11.9368 68.6785 11.5984 67.6638 12.0161 66.8289L13.7058 63.4496C14.1235 62.6147 15.1356 62.2798 15.9728 62.694C16.8078 63.1116 17.1462 64.1261 16.7285 64.961L15.0388 68.3403C14.7427 68.9325 14.1462 69.2741 13.5257 69.2741Z"
                          fill="#C98850" />
                    <path id="Vector_23"
                          d="M43.9415 91.2413H42.2518C41.3187 91.2413 40.562 90.4856 40.562 89.5515C40.562 88.6176 41.3187 87.8618 42.2518 87.8618H43.9415C44.8746 87.8618 45.6312 88.6175 45.6312 89.5515C45.6312 90.4856 44.8746 91.2413 43.9415 91.2413Z"
                          fill="#925F4A" />
                    <path id="Vector_24"
                          d="M37.1812 59.1378C36.928 59.1378 36.6696 59.0802 36.4273 58.9596C35.5924 58.542 35.254 57.5273 35.6716 56.6926L37.3613 53.3133C37.778 52.4801 38.7904 52.1435 39.6284 52.5577C40.4633 52.9753 40.8017 53.9898 40.384 54.8247L38.6943 58.204C38.3982 58.7964 37.8016 59.1378 37.1812 59.1378Z"
                          fill="#C98850" />
                    <g id="Group_4">
                        <path id="Vector_25"
                              d="M27.0434 32.1034C26.7902 32.1034 26.5318 32.0458 26.2894 31.9252L22.9102 30.2355C22.0752 29.8178 21.7368 28.8034 22.1545 27.9685C22.5712 27.1353 23.5843 26.7969 24.4215 27.2128L27.8008 28.9024C28.6357 29.32 28.9741 30.3345 28.5565 31.1694C28.2603 31.7618 27.6637 32.1034 27.0434 32.1034Z"
                              fill="#925F4A" />
                        <path id="Vector_26"
                              d="M47.321 8.4481H43.9417C43.0086 8.4481 42.252 7.69243 42.252 6.75837C42.252 5.82431 43.0086 5.06863 43.9417 5.06863H47.321C48.2541 5.06863 49.0107 5.82431 49.0107 6.75837C49.0107 7.69243 48.2541 8.4481 47.321 8.4481Z"
                              fill="#925F4A" />
                    </g>
                    <path id="Vector_27"
                          d="M54.0813 33.7929C53.4607 33.7929 52.8643 33.4515 52.5682 32.8591L50.8785 29.4798C50.4608 28.6449 50.7992 27.63 51.6341 27.2128C52.4708 26.7969 53.4846 27.1353 53.9011 27.9685L55.5909 31.3477C56.0085 32.1826 55.6701 33.1975 54.8352 33.6147C54.5925 33.7353 54.3345 33.7929 54.0813 33.7929Z"
                          fill="#C98850" />
                    <g id="Group_5">
                        <path id="Vector_28"
                              d="M7.711 42.0667C7.4838 41.9547 7.27766 41.7888 7.11324 41.5734C6.54859 40.83 6.69387 39.7702 7.43748 39.2057L10.4468 36.9211C11.1896 36.3563 12.2487 36.5029 12.8145 37.2454C13.3791 37.9888 13.2338 39.0486 12.4902 39.6131L9.48112 41.8975C8.95342 42.2979 8.26742 42.3408 7.711 42.0667Z"
                              fill="#925F4A" />
                        <path id="Vector_29"
                              d="M70.9761 60.8276C70.5437 60.8276 70.1113 60.6626 69.7815 60.3326L66.4023 56.9533C65.7423 56.2933 65.7423 55.2239 66.4023 54.564C67.0622 53.904 68.1316 53.904 68.7916 54.564L72.1709 57.9433C72.8308 58.6032 72.8308 59.6726 72.1709 60.3326C71.8407 60.6626 71.4083 60.8276 70.9761 60.8276Z"
                              fill="#925F4A" />
                    </g>
                    <path id="Vector_30"
                          d="M74.3554 77.7241C73.923 77.7241 73.4906 77.5591 73.1608 77.2292C72.5008 76.5692 72.5008 75.4998 73.1608 74.8398L74.8505 73.1501C75.5105 72.4901 76.5799 72.4901 77.2399 73.1501C77.8998 73.8101 77.8998 74.8795 77.2399 75.5394L75.5501 77.2292C75.22 77.5591 74.7878 77.7241 74.3554 77.7241Z"
                          fill="#C98850" />
                </g>
                <g id="crumbs">
                    <g id="Group_6">
                        <path id="Vector_31"
                              d="M77.7347 6.75855V11.0216C77.7347 12.2171 78.9419 13.0344 80.0518 12.5903L85.1209 10.5628C85.7623 10.3061 86.183 9.68477 86.183 8.99398V6.75855C86.183 5.82545 85.4263 5.06882 84.4932 5.06882H79.4242C78.4913 5.06882 77.7347 5.82545 77.7347 6.75855Z"
                              fill="#FFE6A1" />
                        <path id="Vector_32"
                              d="M81.3471 20.0793L80.2689 27.6272C80.0153 29.4027 81.193 31.0672 82.9514 31.4188L86.0459 32.0376C87.3888 32.3063 88.7608 31.7378 89.5205 30.5984L90.6842 28.8528C91.287 27.9484 91.4183 26.8093 91.0366 25.7918L87.5115 16.3917C87.073 15.2225 85.5733 14.8977 84.6904 15.7807L82.3031 18.1677C81.786 18.6847 81.4506 19.3556 81.3471 20.0793Z"
                              fill="#FFE6A1" />
                    </g>
                    <g id="Group_7">
                        <path id="Vector_33"
                              d="M89.818 29.0361L86.7235 28.4173C84.9649 28.0655 83.7873 26.401 84.0409 24.6258L85.1191 17.078C85.2154 16.4049 85.5293 15.7901 85.986 15.2897C85.5274 15.2666 85.0565 15.4141 84.6904 15.7801L82.303 18.1673C81.786 18.6843 81.4504 19.3552 81.3473 20.0789L80.2691 27.6266C80.0155 29.4023 81.1932 31.0666 82.9517 31.4182L86.0461 32.037C87.3888 32.3054 88.761 31.7373 89.5207 30.5978L90.5388 29.0708C90.2992 29.0756 90.0593 29.0846 89.818 29.0361Z"
                              fill="#FFD796" />
                        <path id="Vector_34"
                              d="M83.4311 9.21085C82.3211 9.65472 81.1139 8.83741 81.1139 7.64208V5.06882H79.4242C78.4911 5.06882 77.7345 5.82545 77.7345 6.75855V11.0216C77.7345 12.2171 78.9417 13.0344 80.0516 12.5903L85.1207 10.5628C85.7621 10.3061 86.1828 9.68496 86.1828 8.99398V8.11026L83.4311 9.21085Z"
                              fill="#FFD796" />
                        <path id="Vector_35"
                              d="M90.4046 36.8501L89.4059 38.8476C89.1681 39.3233 89.1681 39.8831 89.4059 40.3588L89.8616 41.2706C90.3162 42.1796 91.4644 42.4847 92.3101 41.921L95.034 40.1052C95.5041 39.7916 95.7864 39.2641 95.7864 38.6993V36.8788C95.7864 35.7256 94.6565 34.9112 93.5624 35.276L91.3814 36.0029C90.9564 36.1444 90.605 36.4491 90.4046 36.8501Z"
                              fill="#FFD796" />
                    </g>
                </g>
            </g>
            <defs>
            </defs>
        </svg>

        <div class="text">
            <h2 style="color: white; text-align: center;" class="cookie-title">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Çerez Politikası' : 'Cookie Policy'}}</h2>
            <p class="cookie-subtitle">
                {{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Kişiselleştirilmiş içerikleri göstermek ve deneyimlerinizi geliştirmek için web
                sitemizde çerezleri kullanıyoruz' : 'We use cookies to show you personalised content and improve your experience of our website.'}}
            </p>
            <button class="cookiebutton">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Onayla' : 'Accept All'}}</button>
            <a class="closeCookie" href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Seçenekleri Yönet' : 'Manage Options'}}</a>
        </div>
    </div>


@endsection
