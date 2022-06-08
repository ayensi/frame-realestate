@extends('layouts.master')

@section('content')

    <header class="page-header" data-background="images/slide01.jpg" data-stellar-background-ratio="1.15">
        <div class="container">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Anasayfa' : 'Home'}}</a></li>
                <li class="breadcrumb-item" aria-current="page">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Portföylerimiz' : 'Property'}}</li>
                <li class="breadcrumb-item active" aria-current="page">{{$rent->baslik}}</li>
            </ol>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="apartment">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                                <div style="margin-left:auto; margin-right:auto;" class="gallery-slider">
                                    <div class="swiper gallery-container">
                                        <div class="swiper-wrapper">
                                            @foreach(json_decode($rent->image, true) as $image)
                                            <div style="position:relative; padding-bottom:100%" class="swiper-slide"><img style="position:absolute; top:0; left:0; width:100%; height:100%; object-fit: scale-down;" src="{{asset('storage/'.$image)}}" alt="Image"></div>
                                            @endforeach
                                        </div>
                                        <!-- add swiper-wrapper -->
                                        <div class="gallery-pagination"></div>
                                        <!-- end gallery-pagination -->
                                         <div style="background-color:#dc2133" class="swiper-button-next"></div>
                                        <div style="background-color:#dc2133" class="swiper-button-prev"></div>
                                    </div>
                                    <div style="overflow:hidden; border-top: 2px solid white;"
                                         class="swiper gallery-container-thumb">
                                        <div class="swiper-wrapper">
                                            @foreach(json_decode($rent->image, true) as $image)
                                                <div class="swiper-slide"><img style="width:115px; height:86px; object-fit:scale-down; background:#26282b" src="{{asset('storage/'.$image)}}" alt="Image"></div>
                                            @endforeach
                                        </div>
                                        <!-- add swiper-wrapper -->
                                        <div class="gallery-pagination"></div>
                                        <!-- end gallery-pagination -->
                                    </div>

                                    <!-- end gallery-container -->
                                </div>

                            </div>

                        </div>

                        <!-- end col-12 -->
                    </div>


                </div>
                <div class="col-lg-6">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-12">
                               <p style="font-size: 25px; color: #000000; font-weight: bold">{{$rent->baslik}} </p>
                            </div>
                              <div class="col-lg-12">
                                <p class="portfoy-header">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Portföy Özellikleri' : 'Property Features'}}</p>
                                <ul class="">
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Referans No: ' : 'Referance No: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->referans_no}}</span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Lokasyon: ' : 'Location: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->lokasyon_il}}/{{$rent->lokasyon_ilce}}</span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Oda / Salon: ' : 'Room: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->oda}}</span>
                                    </li>

                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Banyo: ' : 'Bathroom: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->banyo}}</span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Bina Yaşı: ' : 'Building Age: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->bina_yasi}}</span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Kat Sayısı: ' : 'Number of floor: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->kat_sayisi}}</span>
                                    </li>
                                      <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Bulunuğu Kat: ' : 'Number of floor: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->bulundugu_kat}}</span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Kullanım Durumu: ' : 'Status: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->kullanim_durumu}}</span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Tapu Durumu: ' : 'Tapu Durumu: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->tapu_durumu}} </span>
                                    </li>
                                    <li style="list-style: none;">
                                        <span style="font-weight:bold;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Fiyat: ' : 'Price: '}} </span>
                                        <span style="margin-left: 15px;">{{$rent->fiyat}} ₺</span>
                                    </li>
                                </ul>

                            </div>
                            <div class="col-lg-12">
                                <p class="portfoy-header">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Portföy Açıklaması' : 'Property Description'}}</p>
                                <p>{!!$rent->aciklama!!} </p>
                            </div>
                          
                        </div>
                    </div>
                </div>
                <section style="padding: 0; border:none" class="sales-team">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <figure style="margin: 0"><img style="margin-top:-168px" src="{{asset('storage/'.$rent->author->avatar)}}" alt="Image">
                                    <figcaption style="padding-left: 10px;">
                                        <h4>{{$rent->author->name}}</h4>
                                        <small>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Portföy Yöneticisi' : 'Property Manager'}}</small>
                                        <ul>
                                            <li><a href="#"><span>mobil:</span> +90 {{$rent->author->phone}}</a></li> <br>
                                            <li><a href="#"><span>office:</span> +90 212 323 39 39</a></li>
                                            <li><a href="#"><span>e-mail:</span> {{$rent->author->email}}</a></li>
                                            <li><a href="mailto:{{$rent->author->email}}"
                                                   style="background-color: #DC2133; color: white; padding-left: 5px; padding-right: 5px;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'E-Posta Gönder' : 'Send E-Mail'}}</a></li>
                                        </ul>
                                    </figcaption>
                                </figure>
                            </div>
                            <div class="col-md-6">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-md-6"><a class="randevu-button randevubtn" style="color:#FFFFFF; cursor: pointer">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Randevu Al' : 'Make an Appointment: '}}</a></div>
                                        <div class="col-md-6"><a class="randevu-button" href="tel:{{$rent->author->phone}}">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Bize Ulaşın' : 'Contact Us: '}}</a></div>
                                    </div>
                                </div>
                                <img style="width: 40%; margin-left: 185px;margin-top: 50px" src="{{asset('./src/frame_imza.png')}}" alt="">
                            </div>
                        </div>

                        <!-- end row -->
                    </div>
                    <!-- end container -->
                </section>
                <section class="randevu-al @if(session()->get('message')) active @else hidden @endif">
                    <div class="close-btn">X</div>
                    <div id="v-cal">
                        <div class="vcal-header">
                            <button class="vcal-btn" data-calendar-toggle="previous">
                                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M20,11V13H8L13.5,18.5L12.08,19.92L4.16,12L12.08,4.08L13.5,5.5L8,11H20Z"></path>
                                </svg>
                            </button>

                            <div class="vcal-header__label" data-calendar-label="month">
                                March 2017
                            </div>

                            <button class="vcal-btn" data-calendar-toggle="next">
                                <svg height="24" version="1.1" viewbox="0 0 24 24" width="24" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M4,11V13H16L10.5,18.5L11.92,19.92L19.84,12L11.92,4.08L10.5,5.5L16,11H4Z"></path>
                                </svg>
                            </button>
                        </div>

                        <div class="vcal-week">
                            <span>Pzt</span> <span>Sal</span><span>Çar</span> <span>Per</span> <span>Cum</span> <span>Cmt</span> <span>Paz</span>
                        </div>
                        <div class="vcal-body" data-calendar-area="month"></div>
                    </div>
                    <p class="demo-picked">
                        Date picked:
                        <span data-calendar-label="picked"></span>
                    </p>
                  <div class="randevu-al-form">
                      @if(session()->get('message'))
                          <div  class="alert alert-success wow fadeInUp" role="alert"> Randevunuz Alınmıştır! En kısa zamanda sizinle iletişime geçeceğiz. </div>
                      @endif
                      <form action="" method="post">
                          @csrf
                          <div style="display: none">
                              <input type="text" id="selectedDateInput" name="tarih" value="">
                          </div>
                        <div>
                            <span>Saat</span>
                            <input type="time" id="appt" name="saat"
                                   min="09:00" max="18:00" required>
                        </div>
                          <div>
                              <span>Ad Soyad</span>
                              <input type="text" id="appt" name="ad_soyad"
                                     min="09:00" max="18:00" required>
                          </div>
                          <div>
                              <span>Telefon Numarası</span>
                              <input type="text" id="appt" name="telefon"
                                     min="09:00" max="18:00" required>
                          </div>
                          <div>
                              <span>E-Mail</span>
                              <input type="text" id="appt" name="email"
                                     min="09:00" max="18:00" required>
                          </div>
                          <div>
                              <input type="submit">
                          </div>
                      </form>
                  </div>

                </section>
            </div>
        </div>
        <!-- end container -->

    </section>


@endsection
