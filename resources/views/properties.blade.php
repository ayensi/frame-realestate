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

                        </div>
                        <div class="active">
                            <a href="">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Satılık' : 'For Sale'}}</a>
                        </div>
                    </div>

                    <div class="search">
                        <form action="">

                            <input placeholder="{{__('reference')}} No" type="text" name="referans_no">
                            <select name="lokasyon" id="">
                                <option selected>{{__('location')}}</option>
                                <option value="Arnavutköy">Arnavutköy</option>
                                <option value="Ayazağa">Ayazağa</option>
                                <option value="Bahçeköy">Bahçeköy</option>
                                <option value="Balmumcu">Balmumcu</option>
                                <option value="Baltalimanı">Baltalimanı</option>
                                <option value="Bebek">Bebek</option>
                                <option value="Beykoz">Beykoz</option>
                                <option value="Beşiktaş">Beşiktaş</option>
                                <option value="Emirgan">Emirgan</option>
                                <option value="Etiler">Etiler</option>
                                <option value="Fulya">Fulya</option>
                                <option value="Gayrettepe">Gayrettepe</option>
                                <option value="Harbiye">Harbiye</option>
                                <option value="İstinye">İstinye</option>
                                <option value="Kandilli">Kandilli</option>
                                <option value="Kağıthane">Kağıthane</option>
                                <option value="Kuruçeşme">Kuruçeşme</option>
                                <option value="Maslak">Maslak</option>
                                <option value="Maçka">Maçka</option>
                                <option value="Nişantaşı">Nişantaşı</option>
                                <option value="Poligon">Poligon</option>
                                <option value="Reşitpasa">Reşitpasa</option>
                                <option value="Rumelihisarı">Rumelihisarı</option>
                                <option value="Sarıyer">Sarıyer</option>
                                <option value="Şişli">Şişli</option>
                                <option value="Tarabya">Tarabya</option>
                                <option value="Ulus">Ulus</option>
                                <option value="Yeniköy">Yeniköy</option>
                                <option value="Zekeriyaköy">Zekeriyaköy</option>
                            </select>
                            <select name="gayrimenkul_tipi" id="">
                                <option selected>{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Gayrimenkul Tipi' : 'Property Type'}}</option>
                                <option value="Apartman">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Apartman' : 'Apartment'}}</option>
                                <option value="Rezidans">Rezidans</option>
                                <option value="Villa">Villa</option>
                                <option value="Ofis">{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ofis' : 'Office'}}</option>
                            </select>
                            <input class="price" placeholder="Min ₺" type="text">
                            <div class="hidden-xs"> <span > - </span></div>
                            <input class="price" placeholder="Max ₺" type="text">
                            <input type="submit" value="{{\Illuminate\Support\Facades\App::getLocale() == 'tr' ? 'Ara' : 'Search'}}"></input>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                @foreach($properties as $p)
                    <div class="col-lg-4 col-md-4">
                        <a href="/detay.html"><!--sale/{{$p->slug}}-->
                            <figure style="position:relative; height: 65%;">
                                <div style="padding-top:100%; position:relative">
                                    <img style="position:absolute; top:0; left:0; width:100%;height:65%;"
                                         src="{{asset('images/'.$p->images->first()->image)}}" alt="Image">

                                </div>
                                <figcaption style="position:absolute; bottom: -35px; width: 100%;">
                                    <div>
                                        <p style="text-align: left">{{__('for_sale')}}</p>
                                        <p style="text-align: left"><span>{{$p->room_number}}<i style="margin-left: 3px" class="fa-solid fa-bed"></i></span> <span style="margin-left: 5px">{{$p->bathroom_number}}<i style="margin-left: 3px" class="fa-solid fa-bath"></i>
                                    </span> <span style="margin-left: 5px">{{$p->area}}<span style="font-weight: 600">m <sup>2</sup></span> </span>
                                        </p>
                                    </div>
                                    <div>
                                        <p style="text-align: right">{{$p->estateType->estate_type}}, {{$p->district->name}}</p>
                                        <p style="text-align: right">{{$p->value}}₺ </p>

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
