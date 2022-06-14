@extends('layouts.master')

@section('content')

    <header class="page-header" data-background="{{asset('storage/'.$teams[0]->header_image)}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1 style="display: block; font-size: 30px; margin-left: 50px;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ekibimiz' : 'Our Team'}}</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Anasayfa' : 'Home'}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ekibimiz' : 'Our Team'}}</li>
            </ol>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section style="padding-top: 139px; padding-bottom: 40px;" class="sales-team">
        <div class="container">
            <div class="row">
                @forelse($teams as $team)
                <div class="col-md-6">
                    <figure><img src={{asset('/images/'.$team->image)}} alt="Image">
                        <figcaption style="padding-left: 10px;">
                            <h4>{{$team->name}}</h4>
                            <small>{{$team->tag}}</small>
                            <ul>
                                <li><a href="#"><span>mobil:</span>{{$team->mobile}}</a></li>
                                <li><a href="#"><span>office:</span> {{$team->office}}</a></li>
                                <li><a href="#"><span>e-mail:</span> {{$team->email}}</a></li>
                                <li><a href="mailto:{{$team->team_email}}"
                                       style="background-color: #DC2133; color: white; padding-left: 5px; padding-right: 5px;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'E-Mail Gönder' : 'Send E-Mail'}}</a></li>
                            </ul>
                        </figcaption>
                    </figure>
                </div>

                <!-- end col-6 -->
                @empty
                Yok
                @endforelse
            </div>
            <div style="margin-top: 20px;" class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0s">
                <div style="font-size: 13px;" class="text-center">
                    {{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Hizmetlerimiz hakkında detaylı bilgi almak için lütfen bizimle iletişime geçiniz.' : 'Please contact us for detailed information about our services.
   '}}<br> <br>
                    <img style="width: 131px; height: 58px"  src="{{ asset('src/logoFooter.png') }}" alt=""> <br> <br>
                    Reşitpaşa Mah. Kongre Cad. No:16 Sarıyer/İSTANBUL <br>
                    +90 212 323 39 39 <br>
                    info@framegayrimenkul.com
                </div>
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection
