@extends('layouts.master')

@section('content')
    <header class="page-header" data-background="{{asset('./src/kiralik.jpg')}}" data-stellar-background-ratio="1.15">
        <div class="container">

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
                        <div class="default">
                            <a href="{{route('rentBodrum')}}">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Kiralık' : 'For Rent'}}</a>
                        </div>
                        <div class="active">
                            <a href="">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Satılık' : 'For Sale'}}</a>
                        </div>
                    </div>

                    <div class="search">
                        <form action="">

                            <input placeholder="{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Referans' : 'Referance'}} No" type="text" name="referans_no">
                            <select name="lokasyon" id="">
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
                            <select name="gayrimenkul_tipi" id="">
                                <option selected>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Gayrimenkul Tipi' : 'Property Type'}}</option>
                                <option value="Apartman">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Apartman' : 'Apartment'}}</option>
                                <option value="Rezidans">Rezidans</option>
                                <option value="Villa">Villa</option>
                                <option value="Ofis">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ofis' : 'Office'}}</option>
                            </select>
                            <input class="price" placeholder="Min ₺" type="text">
                            <div> <span> - </span></div>
                            <input class="price" placeholder="Max ₺" type="text">
                            <input type="submit" value="{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ara' : 'Search'}}"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($sales as $sale)
                      <div class="col-lg-4 col-md-4">
                        <a href="sale/{{$sale->slug}}">
                            <figure style="position:relative; height: 65%;">
                                <div style="padding-top:100%; position:relative">
                                    <img style="position:absolute; top:0; left:0; width:100%;height:65%;"
                                         src="{{asset('storage/'.json_decode($sale->image,true)[0])}}" alt="Image">

                                </div>
                                <figcaption style="position:absolute; bottom: -35px; width: 100%;">
                                    <div>
                                        <p style="text-align: left">Satılık</p>
                                        <p style="text-align: left"><span>{{$sale->oda}}<i style="margin-left: 3px" class="fa-solid fa-bed"></i></span> <span style="margin-left: 5px">{{$sale->banyo}}<i style="margin-left: 3px" class="fa-solid fa-bath"></i>
                                    </span> <span style="margin-left: 5px">{{$sale->metrekare_sayisi}}<span style="font-weight: 600">m <sup>2</sup></span> </span>
                                        </p>
                                    </div>
                                    <div>
                                        <p style="text-align: right">{{$sale->gayrimenkul_tipi}}, {{$sale->lokasyon_ilce}}</p>
                                        <p style="text-align: right">{{$sale->fiyat}}₺ </p>

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
