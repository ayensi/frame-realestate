@extends('layouts.master')

@section('content')

<header class="page-header" data-background="{{asset('storage/'.$news[0]->header_image)}}" data-stellar-background-ratio="1">
    <div class="container">
        <h1 style="display: block; font-size: 30px; margin-left: 50px;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'MEDYA' : 'MEDIA'}}</h1>

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Anasayfa' : 'Home'}}</a></li>
            <li class="breadcrumb-item"><a href="#">Media</a></li>
        </ol>
    </div>
    <!-- end container -->
</header>
<section class="press-relases">
    <div class="container">
        <div class="row">
            <section class="press-relases">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/vatan.png') }}" data-fancybox><img
                                        src="{{ asset('src/vatan.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Vatan Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Ocak 2022</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/ahaber2.png') }}" data-fancybox><img
                                        src="{{ asset('src/ahaber2.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>A Haber</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Ocak 2022</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/mynet.png') }}" data-fancybox><img
                                        src="{{ asset('src/mynet.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Mynet Finans</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Ocak 2022</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/haberturk.png') }}" data-fancybox><img
                                        src="{{ asset('src/haberturk.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Habertürk Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Ocak 2022</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/ahaber.png') }}" data-fancybox><img
                                        src="{{ asset('src/ahaber.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>A Haber</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2021</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/posta.png') }}" data-fancybox><img
                                        src="{{ asset('src/posta.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Posta Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2021</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/takvim.png') }}" data-fancybox><img
                                        src="{{ asset('src/takvim.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Takvim Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2021</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/hurriyet.png') }}" data-fancybox><img
                                        src="{{ asset('src/hurriyet.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Hürriyet Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2021</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/yenicagri.png') }}" data-fancybox><img
                                        src="{{ asset('src/yenicagri.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Yeni Çağrı Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2021</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/sabah.png') }}" data-fancybox><img
                                        src="{{ asset('src/sabah.png') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Sabah Gazetesi</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Aralık 2021</small>
                                </figcaption>
                            </figure>
                        </div>

                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/maison2.jpeg') }}" data-fancybox><img
                                        src="{{ asset('src/maison2.jpeg') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Maison Francaise</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mart 2016</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/maison1.jpeg') }}" data-fancybox><img
                                        src="{{ asset('src/maison1.jpeg') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Maison Francaise</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2015</small>
                                </figcaption>
                            </figure>
                        </div>
                        <!-- end col-4 -->
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/hellodecor.jpeg') }}" data-fancybox><img
                                        src="{{ asset('src/hellodecor.jpeg') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>Hello Decor</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Mayıs 2015</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset('src/togbazar.jpeg') }}" data-fancybox><img
                                        src="{{ asset('src/togbazar.jpeg') }}" alt="Image"></a>
                                <figcaption>
                                    <h5>TOG Bazaar </h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Haziran 2015</small>
                                </figcaption>
                            </figure>
                        </div>
                        <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0s">
                            <figure data-stellar-ratio="1.07"> <a href="{{ asset("src/l'official.jpeg") }}" data-fancybox><img
                                        src="{{ asset("src/l'official.jpeg") }}" alt="Image"></a>
                                <figcaption>
                                    <h5>L'Official</h5>
                                    <p>Frame Gayrimenkul & Danışmanlık Röportaj</p>
                                    <small>Kasım 2015</small>
                                </figcaption>
                            </figure>
                        </div>

                    </div>
                    <!-- end row -->
                </div>
                <!-- end container -->
            </section>

        </div>
        <!-- end row -->
    </div>
    <!-- end container -->
</section>

@endsection
