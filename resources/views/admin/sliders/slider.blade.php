@extends('adminlte::page')
@section('content')


    <div style="padding: 15px">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>Menü</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#yeniEkle" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Yeni Slider</span></a>
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
                    <th>Resim</th>
                    <th>Welcome Text</th>
                    <th>Slider Text</th>
                    <th>Durum</th>
                </tr>
                </thead>
                <tbody>
                @if(count($sliders)>0)
                    @foreach($sliders as $s)

                            <tr>
                                <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" data-id="{{$s->id}}" value="1">
								<label for="checkbox1"></label>
							</span>
                                </td>
                               <td>{{$s->image}}</td>
                               <td>{{$s->welcome_text}}</td>
                               <td>{{$s->slider_text}}</td>
                               <td>{{$s->status}}</td>
                                <td>
                                    <a href="#DuzenleModal" id="{{$s->id}}" class="Duzenle" data-toggle="modal"><i data-toggle="tooltip" title="Duzenle" class="fa fa-edit" aria-hidden="true"></i></a>
                                    <a href="#SilModal" class="Sil" id="{{$s->id}}" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Sil" aria-hidden="true"></i></a>
                                </td>

                    @endforeach
                @endif

                </tbody>
            </table>

        </div>
    </div>
    <!-- Ekle Modal HTML -->
    <div id="yeniEkle" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('sliders.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt ekle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Welcome Text</label>
                            <input name="welcometext" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Slider Text</label>
                            <input name="slidertext" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>

                    <div class="modal-footer">
                        <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                        <input type="submit" class="btn btn-success" value="Ekle">
                    </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- Duzenle Modal HTML -->
    <div id="DuzenleModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('sliders.update')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt düzenle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Welcome Text</label>
                            <input name="welcometext" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Slider Text</label>
                            <input name="slidertext" type="text" class="form-control" >
                        </div>
                        <div class="form-group">
                            <input type="file" name="image" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Durum seçin: </label>
                            <select name="status" id="status">
                                    <option value="1">Aktif</option>
                                    <option value="0">Pasif</option>
                            </select>
                        </div>
                        <div class="modal-footer">
                            <input type="hidden" name="id" id="idToUpdate">
                            <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                            <input type="submit" class="btn btn-success" value="Kaydet">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>
    <!-- Sil Modal HTML -->
    <div id="SilModal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <form action="{{route('sliders.destroy')}}" method="post">
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
                <form action="{{route('sliders.destroyMany')}}" method="post">
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
    <script>
        $(document).ready(function(){
            $(this).siblings(".accordion-content").slideDown();








            $('#isSubCheck').change(function(){
                if( $('#isSubCheck').is(':checked') ){
                    $('#select-div').show();
                    $('#select-div').attr("required",true);
                    $('#isSubCheck').prop('checked',true);
                    $('#isSubCheckData').val(true);
                } else {
                    $('#select-div').hide();
                    $('#select-div').attr("required",false);
                    $('#isSubCheck').prop('checked',false);
                    $('#isSubCheckData').val(false);
                }
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
        var ids=[];
        $('.Duzenle').on('click',function (evt){

            $('#idToUpdate').val($(this).attr('id'));

        });

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
                url:"{{ route('sliders.destroyMany') }}",
                data:{ids:ids},
            });
        });

    </script>

@endsection
