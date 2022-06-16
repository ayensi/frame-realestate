@extends('adminlte::page')
@section('content')


    <div class="container">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Portföyler</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#yeniEkle" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Yeni Portföy</span></a>
                        <a href="#CokluSilModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Sil</span></a>
                    </div>
                </div>
            </div>
            <table class="table table-striped table-hover">
                <thead>

                <tr>
                    <th>
							<span class="custom-checkbox">
								<input type="checkbox" id="selectAll">
								<label for="selectAll"></label>
							</span>
                    </th>
                    <th>İsim</th>
                    <th>İlan Sahibi</th>
                    <th>Kategori</th>
                    <th>Açıklama</th>
                    <th>Oda Sayısı</th>
                    <th>Banyo Sayısı</th>
                    <th>Bina Yaşı</th>
                    <th>Mülk Durumu</th>
                    <th>Kat Sayısı</th>
                    <th>Fiyat</th>
                    <th>İlan Durumu</th>
                    <th>Kısaltma</th>
                    <th>Alan (m^2)</th>
                    <th>İlçe</th>
                    <th>Mülk Tipi</th>
                    <th>Referans No</th>
                    <th>Tapu Durumu</th>
                    <th>Şehir</th>
                    <th>Bulunduğu Kat</th>
                    <th>İlan Dili</th>

                </tr>
                </thead>
                <tbody>
                @if(count($properties)>0)
                    @foreach($properties as $p)
                        <tr>
                            <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" data-id="{{$p->id}}" value="1">
								<label for="checkbox1"></label>
							</span>
                            </td>
                            <td>{{$p->name}}</td>
                            <td>{{$p->team->name}}</td>
                            <td>{{$p->category->name}}</td>
                            <td>{{$p->description}}</td>
                            <td>{{$p->room_number}}</td>
                            <td>{{$p->bathroom_number}}</td>
                            <td>{{$p->property_age}}</td>
                            <td>{{$p->propertyStatus->property_status}}</td>
                            <td>{{$p->floor_number}}</td>
                            <td>{{$p->value}}</td>
                            <td>{{$p->status}}</td>
                            <td>{{$p->slug}}</td>
                            <td>{{$p->area}}</td>
                            <td>{{$p->district->name}}</td>
                            <td>{{$p->estateType->estate_type}}</td>
                            <td>{{$p->ref_no}}</td>
                            <td>{{$p->register_status}}</td>
                            <td>{{$p->city->name}}</td>
                            <td>{{$p->which_floor}}</td>
                            <td>{{$p->language->name}}</td>
                            <td>
                                <a href="#DuzenleModal" id="{{$p->id}}" class="Duzenle" data-toggle="modal"><i data-toggle="tooltip" title="Duzenle" class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#SilModal" class="Sil" id="{{$p->id}}" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Sil" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>
            <div class="d-flex justify-content-center">
                {!! $properties->links() !!}
            </div>
        </div>
    </div>
    <!-- Ekle Modal HTML -->
    <div id="yeniEkle" class="modal fade">
        <div class="modal-dialog" style="width: 100%;max-width: 1200px;">
            <div class="modal-content">
                <form method="post" action="{{route('properties.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt ekle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>



                    <ul class="nav nav-tabs tabLi">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="tab" href="#tab-1">Türkçe</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="tab" href="#tab-2">İngilizce</a>
                        </li>
                    </ul>


                    <!-- Tab panes -->
                    <div class="tab-content tabContainer">
                        <div id="tab-1" class="container tab-pane active"><br>
                            <div class="form-group">
                                <label>TR İsim</label>
                                <input name="name-tr" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>TR Açıklama</label>
                                <input name="desc-tr" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>TR Kısaltma</label>
                                <input name="slug-tr" type="text" class="form-control" required>
                            </div>
                        </div>
                        <div id="tab-2" class="container tab-pane"><br>
                            <div class="form-group">
                                <label>EN İsim</label>
                                <input name="name-en" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>EN Açıklama</label>
                                <input name="desc-en" type="text" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>EN Kısaltma</label>
                                <input name="slug-en" type="text" class="form-control" required>
                            </div>
                        </div>
                    </div>





                    <div class="modal-body">
                        <div class="form-group">
                            <label>İlan Sahibi</label>
                            <select name="team_id" id="parentTeam" class="form-control">
                                @foreach($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ait Olduğu Kategori</label>
                            <select name="category_id" id="parentCategory" class="form-control">
                                @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Oda Sayısı</label>
                            <input class="form-control" type="text" name="room_number">
                        </div>
                        <div class="form-group">
                            <label>Banyo Sayısı</label>
                            <input class="form-control" type="text" name="bathroom_number">
                        </div>
                        <div class="form-group">
                            <label>Bina Yaşı</label>
                            <input class="form-control" type="text" name="property_age">
                        </div>
                        <div class="form-group">
                            <label>Mülk Durumu</label>
                            <select name="property_status" id="parentPropertyStatus" class="form-control">
                                @foreach($property_statuses as $ps)
                                    <option value="{{$ps->id}}">{{$ps->property_status}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kat Sayısı</label>
                            <input class="form-control" type="text" name="floor_number">
                        </div>
                        <div class="form-group">
                            <label>Fiyat</label>
                            <input class="form-control" type="text" name="value">
                        </div>
                        <div class="form-group">
                            <label>Alan (m^2)</label>
                            <input class="form-control" type="text" name="area">
                        </div>
                        <div class="form-group">
                            <label>Şehir</label>
                            <select name="city_id" id="city-dd" class="form-control">
                                <option selected value="0" disabled>Seçiniz: </option>
                                @foreach($cities as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>İlçe</label>
                            <select id="district-dd" name="district_id" class="form-control">
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mülk Tipi</label>
                            <select name="estate_type" id="parentPropertyStatus" class="form-control">
                                @foreach($estate_types as $et)
                                    <option value="{{$et->id}}">{{$et->estate_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Referans No</label>
                            <input class="form-control" type="text" name="ref_no">
                        </div>
                        <div class="form-group">
                            <label>Tapu Durumu</label>
                            <input class="form-control" type="text" name="register_status">
                        </div>
                        <div class="form-group">
                            <label>Bulunduğu Kat</label>
                            <input class="form-control" type="text" name="which_floor">
                        </div>
                        <div class="form-group">
                            <label>Resimler</label>
                            <input type="file" name="images[]" multiple>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Ekle">
                    </div>
                </form>
            </div>
        </div>

    </div>

    <!-- Duzenle Modal HTML -->
    <!-- Duzenle Modal HTML -->
    <div id="DuzenleModal" class="modal fade">
        <div class="modal-dialog" style="width: 100%;max-width: 1200px;">
            <div class="modal-content">
                <form method="post" action="{{route('properties.update')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt düzenle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <ul class="nav nav-tabs tabLi">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tab-3">Türkçe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tab-4">İngilizce</a>
                            </li>
                        </ul>


                        <!-- Tab panes -->
                        <div class="tab-content tabContainer">
                            <div id="tab-3" class="container tab-pane active"><br>
                                <div class="form-group">
                                    <label>TR İsim</label>
                                    <input name="name-tr" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>TR Açıklama</label>
                                    <input name="desc-tr" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>TR Kısaltma</label>
                                    <input name="slug-tr" type="text" class="form-control" required>
                                </div>
                            </div>
                            <div id="tab-4" class="container tab-pane"><br>
                                <div class="form-group">
                                    <label>EN İsim</label>
                                    <input name="name-en" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>EN Açıklama</label>
                                    <input name="desc-en" type="text" class="form-control" required>
                                </div>
                                <div class="form-group">
                                    <label>EN Kısaltma</label>
                                    <input name="slug-en" type="text" class="form-control" required>
                                </div>
                            </div>
                        </div>


                        <div class="form-group">
                            <label>İlan Sahibi</label>
                            <select name="team_id" id="updateTeam" class="form-control">
                                @foreach($teams as $t)
                                    <option value="{{$t->id}}">{{$t->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ait Olduğu Kategori</label>
                            <select name="category_id" id="updateCat" class="form-control">
                                @foreach($categories as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Oda Sayısı</label>
                            <input id="updateRoom" class="form-control" type="text" name="room_number">
                        </div>
                        <div class="form-group">
                            <label>Banyo Sayısı</label>
                            <input id="updateBath" class="form-control" type="text" name="bathroom_number">
                        </div>
                        <div class="form-group">
                            <label>Bina Yaşı</label>
                            <input id="updateAge" class="form-control" type="text" name="property_age">
                        </div>
                        <div class="form-group">
                            <label>Mülk Durumu</label>
                            <select name="property_status" id="updateProp" class="form-control">
                                @foreach($property_statuses as $ps)
                                    <option value="{{$ps->id}}">{{$ps->property_status}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Kat Sayısı</label>
                            <input id="updateFloorNumber" class="form-control" type="text" name="floor_number">
                        </div>
                        <div class="form-group">
                            <label>Fiyat</label>
                            <input id="updateValue" class="form-control" type="text" name="value">
                        </div>

                        <div class="form-group">
                            <label>Alan (m^2)</label>
                            <input id="updateArea" class="form-control" type="text" name="area">
                        </div>
                        <div class="form-group">
                            <label>Şehir</label>
                            <select name="city_id" id="updateCity" class="form-control">
                                @foreach($cities as $c)
                                    <option value="{{$c->id}}">{{$c->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>İlçe</label>
                            <select name="district_id" id="updateDistrict" class="form-control">
                                @foreach($districts as $d)
                                    <option value="{{$d->id}}">{{$d->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Mülk Tipi</label>
                            <select name="estate_type" id="updateEstate" class="form-control">
                                @foreach($estate_types as $et)
                                    <option value="{{$et->id}}">{{$et->estate_type}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Referans No</label>
                            <input id="updateRef" class="form-control" type="text" name="ref_no">
                        </div>
                        <div class="form-group">
                            <label>Tapu Durumu</label>
                            <input id="updateRegister" class="form-control" type="text" name="register_status">
                        </div>

                        <div class="form-group">
                            <label>Bulunduğu Kat</label>
                            <input id="updateFloorOn" class="form-control" type="text" name="which_floor">
                        </div>
                        <div class="form-group">
                            <label>İlan Durumu</label>
                            <input id="updateStatus" class="form-control" type="text" name="status">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <input type="hidden" name="id" id="idToUpdate">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Kaydet">
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Sil Modal HTML -->
    <div id="SilModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('properties.destroy')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt Sil</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bu kaydı silmek istediğinize emin misiniz?</p>
                    </div>
                    <div class="modal-footer">
                        <input id="idToDelete" type="hidden" name="id">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Sil">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div id="CokluSilModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('properties.destroyMany')}}" method="post">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt Sil</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <p>Bu kayıtları silmek istediğinize emin misiniz?</p>
                    </div>
                    <div class="modal-footer">
                        <input id="idsToDelete" type="hidden" name="ids[]">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-danger" value="Sil">
                    </div>
                </form>
            </div>
        </div>
    </div>



@endsection
@section('js')
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
    <script type="text/javascript">
        $(document).ready(function () {
            $('.ckeditor').ckeditor();
        });
    </script>
    <script>
        $(document).ready(function(){
            $('#city-dd').on('change', function () {
                var idCity = this.value;
                $("#district-dd").html('');
                $.ajax({
                    url: "{{route('districts.getDistricts')}}",
                    type: "POST",
                    data: {
                        city_id: idCity,
                        _token: '{{csrf_token()}}'
                    },
                    dataType: 'json',
                    success: function (result) {
                        $('#district-dd').html('<option selected disabled value="">Seçiniz: </option>');
                        $.each(result.districts, function (key, value) {
                            $("#district-dd").append('<option value="' + value
                                .id + '">' + value.name + '</option>');
                        });
                    }
                });
            });

            // Activate tooltip
            $('[data-toggle="tooltip"]').tooltip();

            // Select/Deselect checkboxes
            var checkbox = $('table tbody input[type="checkbox"]');
            $("#selectAll").click(function(){
                if(this.checked){
                    checkbox.each(function(){
                        this.checked = true;
                    });
                } else{
                    checkbox.each(function(){
                        this.checked = false;
                    });
                }
            });
            checkbox.click(function(){
                if(!this.checked){
                    $("#selectAll").prop("checked", false);
                }
            });
        });

        $('.Sil').on('click', function(evt) {
            $('#idToDelete').val($(this).attr('id'));
        });
        $('.Duzenle').on('click', function(evt) {
            $('#idToUpdate').val($(this).attr('id'));
            var property_id = $(this).attr('id');
            $.ajax({
                url: "{{route('properties.getOne')}}",
                type: "GET",
                data: {
                    property_id: property_id,
                    _token: '{{csrf_token()}}'
                },
                dataType: 'json',
                success: function (result) {
                    $('#updateName').val(result.property.name);
                    $('#updateDesc').val(result.property.description);
                    $('#updateRoom').val(result.property.room_number);
                    $('#updateBath').val(result.property.bathroom_number);
                    $('#updateAge').val(result.property.property_age);
                    $('#updateFloorNumber').val(result.property.floor_number);
                    $('#updateValue').val(result.property.value);
                    $('#updateSlug').val(result.property.slug);
                    $('#updateArea').val(result.property.area);
                    $('#updateFloorOn').val(result.property.which_floor);
                    $('#updateRef').val(result.property.ref_no);
                    $('#updateRegister').val(result.property.register_status);
                    $("#updateTeam").val(result.property.team_id).change();
                    $("#updateCat").val(result.property.category_id).change();
                    $("#updateLang").val(result.property.language_id).change();
                    $("#updateCity").val(result.property.city_id).change();
                    $("#updateDistrict").val(result.property.district_id).change();
                    $("#updateEstate").val(result.property.estate_type).change();
                    $("#updateProp").val(result.property.property_status).change();
                    $("#updateStatus").val(result.property.status).change();

                }
            });
        });
        var ids=[];
        $('#CokluSilModal').on('click',function (evt){
            $("input:checkbox[type=checkbox]:checked").each(function(){
                ids.push($(this).attr('data-id'));
            });
            $('#idsToDelete').val(ids);

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                type:'POST',
                url:"{{ route('properties.destroyMany') }}",
                data:{ids:ids},
            });
        });

    </script>
@endsection
