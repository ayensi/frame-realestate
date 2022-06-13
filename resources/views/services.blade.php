@extends('layouts.master')

@section('content')
    <header class="page-header" data-background="{{asset('storage/'.$services[0]->header_image)}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1 style="display: block; font-size: 30px; margin-left: 50px;">{{__('services')}}</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{__('home')}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{__('services')}}</li>
            </ol>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="press-relases">
        <div class="container">
            <div class="row">
                @forelse($services as $service)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                        <figure data-stellar-ratio="1.07"> <a href= data-fancybox><img
                                    src="{{asset('images/'.$service->image)}}" alt="Image"></a>
                            <figcaption>
                                <h5>{{__($service->title)}}</h5>
                            </figcaption>
                        </figure>
                    </div>
                    <!-- end col-4 -->
                @empty
                    yok
                @endforelse


                <div style="margin-top: 20px;" class="col-lg-12 col-md-6 wow fadeInUp" data-wow-delay="0s">
                    <div style="font-size: 13px;" class="text-center">
                        {{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Hizmetlerimiz hakkında detaylı bilgi almak için lütfen bizimle iletişime geçiniz.' : 'Please contact us for detailed information about our services.
       '}}<br> <br>
                        <img style="width: 131px; height: 58px"  src="{{ asset('src/logoFooter.png') }}" alt="">
                        Reşitpaşa Mah. Kongre Cad. No:16 Sarıyer/İSTANBUL <br>
                        +90 212 323 39 39 <br>
                        info@framegayrimenkul.com
                    </div>
                </div>

                <!-- end col-4 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>
@endsection
