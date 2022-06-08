@extends('layouts.master')

@section('content')
    <header class="page-header" data-background="{{asset('./src/kiralik.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">
            <h1 style="display: block; font-size: 30px; margin-left: 50px;"></h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Anasayfa' : 'Home'}}</a></li>
                <li class="breadcrumb-item active" aria-current="page">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Portföylerimiz' : 'Property'}}</li>
            </ol>
        </div>
        <!-- end container -->
    </header>
    <!-- end page-header -->
    <section class="facilities">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12">

                    <div class="select-type">
                        <div class="active">
                            <a href="#">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Kiralık' : 'For Rent'}}</a>
                        </div>
                        <div class="default">
                            <a href="{{route('saleBodrum')}}">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Satılık' : 'For Sale'}}</a>
                        </div>
                    </div>

                    <div class="search">
                        <form action="{{ route('rentBodrum') }}" method="get" >
                            <input placeholder="{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Referans' : 'Referance'}} No" name="referans_no" type="text">
                            <select name="lokasyon" id="lokasyon">
                                <option selected>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Lokasyon' : 'Location'}}</option>
                                <option value="Merkez">Merkez</option>
                                <option value="Akyarlar">Akyarlar</option>
                                <option value="Bağla">Bağla</option>
                                <option value="Bitez">Bitez</option>
                                <option value="Bodrumiçi">Bodrumiçi</option>
                                <option value="Gümbet">Gümbet</option>
                                <option value="Gümüşlük">Gümüşlük</option>
                                <option value="Gündoğan">Gündoğan</option>
                                <option value="Hebilköy">Hebilköy</option>
                                <option value="Konacık">Konacık</option>
                                <option value="Küçükbük">Küçükbük</option>
                                <option value="Turgutreis">Turgutreis</option>
                                <option value="Türkbükü">Türkbükü</option>
                                <option value="Yahşi">Yahşi</option>
                                <option value="Yalıkavak">Yalıkavak</option>
                                <option value="Yokuşbaşı">Yokuşbaşı</option>
                            </select>
                            <select name="gayrimenkul_tipi">
                                <option selected>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Gayrimenkul Tipi' : 'Property Type'}}</option>
                                <option value="Apartman">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Apartman' : 'Apartment'}}</option>
                                <option value="Rezidans">Rezidans</option>
                                <option value="Villa">Villa</option>
                                <option value="Ofis">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ofis' : 'Office'}}</option>
                            </select>
                            <input class="price" placeholder="Min ₺" name="min_price" type="text">
                            <div> <span> - </span></div>
                            <input class="price" placeholder="Max ₺" name="max_price" type="text">
                            <input type="submit" value="{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ara' : 'Search'}}"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
               @foreach($rents as $rent)
               <div class="col-lg-4 col-md-4">
                    <a href="rent/{{$rent->slug}}">
                        <figure style="position:relative; height: 65%;">
                            <div style="padding-top:100%; position:relative">
                                <img style="position:absolute; top:0; left:0; width:100%;height:65%;"
                                     src="{{asset('storage/'.json_decode($rent->image,true)[0])}}" alt="Image">

                            </div>
                            <figcaption style="position:absolute; bottom: -35px; width: 100%;">
                                <div>
                                    <p style="text-align: left">Kiralık</p>
                                    <p style="text-align: left"><span>{{$rent->oda}}<i style="margin-left: 3px" class="fa-solid fa-bed"></i></span> <span style="margin-left: 5px">{{$rent->banyo}}<i style="margin-left: 3px" class="fa-solid fa-bath"></i>
                                    </span> <span style="margin-left: 5px">{{$rent->metrekare_sayisi}}<span style="font-weight: 600">m <sup>2</sup></span> </span>
                                    </p>
                                </div>
                                <div>
                                    <p style="text-align: right">{{$rent->gayrimenkul_tipi}}, {{$rent->lokasyon_ilce}}</p>
                                    <p style="text-align: right">{{$rent->fiyat}}₺ </p>

                                </div>
                            </figcaption>
                        </figure>
                    </a>
                </div>
                @endforeach()

            </div>
            <!-- end row -->
        </div>
        <!-- end container -->
    </section>

@endsection