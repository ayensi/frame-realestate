@extends('layouts.master')

@section('content')
    <header class="page-header" data-background="{{asset('storage/'.$menu->image)}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1 style="display: block; font-size: 30px; margin-left: 50px;">{{__('about-us')}}</h1>

            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{__('home')}}</a></li>
                <li class="breadcrumb-item"><a href="#">{{__('about-us')}}</a></li>
            </ol>
        </div>
        <!-- end container -->
    </header>
    <section style="padding-top: 139px; padding-bottom: 40px; padding-right: 20px; padding-left: 20px;" class="about-content">
        <div class="container">
            <div class="row">

                <!-- end col-12 -->
                <div class="col-lg-4">


                </div>
                <!-- en col-7 -->
                <div class="col-lg-12">
                    {!!$content->content!!}
                    <img src="./src/frame_imza.png" alt="">
                </div>
                <!-- end col-5 -->
            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection
