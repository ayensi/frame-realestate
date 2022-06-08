@extends('layouts.master')

@section('content')

    <header class="page-header" data-background="./src/iletisimheader.jpg" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1 style="display: block; font-size: 30px; margin-left: 50px;">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'İLETİŞİM' : 'CONTACT US'}}</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Anasayfa' : 'Home'}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'İletişim' : 'Contact Us'}}</li>
            </ol>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="contact">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 wow fadeInUp">
                    <h4><span>Frame</span> {{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Gayrimenkul Danışmanlık' : 'Real Estate'}}</h4>
                    <small>Frame Your Style</small>
                </div>
                <!-- end col-6 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <!---   <strong>Visit Us</strong> -->
                        Reşitpaşa mah. Kongre cad. <br>
                        No 16 Sarıyer/Istanbul
                    </address>
                </div>
                <!-- end col-3 -->
                <div class="col-lg-3 col-md-6 wow fadeInUp">
                    <address>
                        <!---   <strong>Visit Us</strong> -->
                        <p><a href="#">info@framegayrimenkul.com</a> <br>
                            +90 212 323 39 39</p>
                    </address>
                </div>
                <!-- end col-3 -->
            </div>
            <!-- end row -->
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="map">

                        <!-- end pattern-bg -->
                        <div class="holder" data-stellar-ratio="1.07">
                            <iframe
                                src="https://www.google.com/maps/embed/v1/place?q=Reşitpaşa+mah.+Kongre+cad.+No+16+Sarıyer/Istanbul&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8"
                                allowfullscreen></iframe>
                        </div>
                        <!-- end holder -->
                    </div>
                    <!-- end map -->
                </div>
                <!-- end col-6 -->
                <div class="col-lg-6">
                    <div class="contact-form">

                        <form action="{{route('contact')}}" id="contact" name="contact" method="post">
                            @csrf
                            <div class="form-group">
                                <input type="text" name="name" id="name" autocomplete="off" required>
                                <span>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ad Soyad' : 'Name Surname'}}</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="email" id="email" autocomplete="off" required>
                                <span>E-Mail</span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" id="phone" autocomplete="off" required>
                                <span>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Telefon Numarası' : 'Phone Number'}}</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <input type="text" name="subject" id="subject" autocomplete="off" required>
                                <span>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Konu' : 'Subject'}}</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <textarea name="message" id="message" autocomplete="off" required></textarea>
                                <span>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Mesajınız' : 'Message'}}</span>
                            </div>
                            <!-- end form-group -->
                            <div class="form-group">
                                <button id="submit" type="submit" name="submit">
                                    {{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Gönder' : 'Send'}}
                                </button>
                            </div>
                            <!-- end form-group -->
                        </form>
                        <!-- end form -->
                        <div class="form-group">
                            @if(session()->get('message'))

                            <div  class="alert alert-success wow fadeInUp" role="alert"> Mesajınız bize
                                ulaştı! En kısa zamanda sizinle iletişime geçeceğiz. </div>
                           @endif
                            <!-- end success -->
                            <div id="error" class="alert alert-danger wow fadeInUp" role="alert"> Bir sorun oluştu.
                                Lütfen daha sonra tekrar deneyin </div>
                            <!-- end error -->
                        </div>
                        <!-- end form-group -->
                    </div>
                    <!-- end contact-form -->
                </div>
                <!-- end col-6 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection
