@extends('adminlte::page')
@section('content')


    <div style="padding: 15px">
        <div class="table-wrapper">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-6">
                        <h2><b>İçerikler</b></h2>
                    </div>
                    <div class="col-sm-6">
                        <a href="#yeniEkle" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Yeni İçerik</span></a>
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
                    <th>Ait Olduğu Dil</th>
                    <th>Ait Olduğu Menü</th>
                    <th>İçerik</th>
                    <th>Başlık</th>
                    <th>Altmetin</th>
                </tr>
                </thead>
                <tbody>
                @if(count($contents)>0)
                    @foreach($contents as $c)
                        <tr>
                            <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" data-id="{{$c->id}}" value="1">
								<label for="checkbox1"></label>
							</span>
                            </td>
                            <td>{{$c->name}}</td>
                            <td>{{$c->language->name}}</td>
                            <td>{{$c->menu->name}}</td>
                            <td>{{\Illuminate\Support\Str::limit($c->content, $limit = 150, $end = '...')}}</td>
                            <td>{{$c->headline}}</td>
                            <td>{{$c->subtext}}</td>
                            <td>
                                <a href="#DuzenleModal" id="{{$c->id}}" class="Duzenle" data-toggle="modal"><i data-toggle="tooltip" title="Duzenle" class="fa fa-edit" aria-hidden="true"></i></a>
                                <a href="#SilModal" class="Sil" id="{{$c->id}}" data-toggle="modal"><i class="fa fa-trash" data-toggle="tooltip" title="Sil" aria-hidden="true"></i></a>
                            </td>
                        </tr>
                    @endforeach
                @endif

                </tbody>
            </table>

        </div>
    </div>
    <!-- Ekle Modal HTML -->
    <div id="yeniEkle" class="modal fade">
        <div class="modal-dialog" style="width: 100%;max-width: 1200px;">
            <div class="modal-content">
                <form method="post" action="{{route('contents.store')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt ekle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>İsim</label>
                            <input name="name" type="text" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label>Ait Olduğu Dil</label>
                            <select name="languageId" id="parentLanguage">
                                @foreach($languages as $l)
                                    <option value="{{$l->id}}">{{$l->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ait Olduğu Menü</label>
                            <select name="menuId" id="parentMenu">
                                @foreach($menus as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                                <textarea class="ckeditor form-control" name="editortext"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Başlık</label>
                            <input class="form-control" type="text" name="headline">
                        </div>
                        <div class="form-group">
                            <label>Altmetin</label>
                            <input class="form-control" type="text" name="subtext">
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
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{route('contents.update')}}">
                    @csrf
                    <div class="modal-header">
                        <h4 class="modal-title">Kayıt düzenle</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>İsim</label>
                            <input name="name" type="text" class="form-control">
                        </div>
                        <div class="form-group">
                            <label>Ait Olduğu Dil</label>
                            <select name="languageId" id="parentLanguage">
                                @foreach($languages as $l)
                                    <option value="{{$l->id}}">{{$l->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>Ait Olduğu Menü</label>
                            <select name="menuId" id="parentMenu">
                                @foreach($menus as $m)
                                    <option value="{{$m->id}}">{{$m->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="form-group">
                            <label>İçerik</label>
                            <textarea class="ckeditor form-control" name="editortext"></textarea>
                        </div>
                        <div class="form-group">
                            <label>Başlık</label>
                            <input class="form-control" type="text" name="headline">
                        </div>
                        <div class="form-group">
                            <label>Altmetin</label>
                            <input class="form-control" type="text" name="subtext">
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
                <form action="{{route('contents.destroy')}}" method="post">
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
                <form action="{{route('contents.destroyMany')}}" method="post">
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
                url:"{{ route('contents.destroyMany') }}",
                data:{ids:ids},
            });
        });

    </script>
@endsection
