@extends('adminlte::page')
@section('content')


<div class="container">
    <div class="table-wrapper">
        <div class="table-title">
            <div class="row">
                <div class="col-sm-6">
                    <h2><b>Diller</b></h2>
                </div>
                <div class="col-sm-6">
                    <a href="#yeniEkle" class="btn btn-success" data-toggle="modal"><i class="material-icons">&#xE147;</i> <span>Yeni Dil</span></a>
                    <a href="#SilModal" class="btn btn-danger" data-toggle="modal"><i class="material-icons">&#xE15C;</i> <span>Sil</span></a>
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
                <th>
                    Id
                </th>
                <th>İsim</th>
                <th>Kısaltma</th>
            </tr>
            </thead>
            <tbody>
            @if(count($languages)>0)
                @foreach($languages as $l)
                    <tr>
                        <td>
							<span class="custom-checkbox">
								<input type="checkbox" id="checkbox1" name="options[]" value="1">
								<label for="checkbox1"></label>
							</span>
                        </td>
                        <td>{{$l->id}}</td>
                        <td>{{$l->name}}</td>
                        <td>{{$l->slug}}</td>
                        <td>
                            <a href="#DuzenleModal" id="{{$l->id}}" class="Duzenle" data-toggle="modal"><i data-toggle="tooltip" title="Duzenle" class="fa fa-edit" aria-hidden="true"></i></a>
                            <a href="#SilModal" class="Sil" id="{{$l->id}}" data-toggle="modal"><i class="fa fa-delete" data-toggle="tooltip" title="Sil" aria-hidden="true"></i></a>
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
    <div class="modal-dialog">
        <div class="modal-content">
            <form method="post" action="{{route('languages.store')}}">
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
                        <label>Kısaltma</label>
                        <input name="slug" type="text" class="form-control" required>
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
<div id="DuzenleModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form>
                <div class="modal-header">
                    <h4 class="modal-title">Kayıt Düzenle</h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label>İsim</label>
                        <input name="name" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label>Kısaltma</label>
                        <input name="slug" type="text" class="form-control" required>
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="button" class="btn btn-default" data-dismiss="modal" value="Cancel">
                    <input type="submit" class="btn btn-info" value="Save">
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Sil Modal HTML -->
<div id="SilModal" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('languages.destroy')}}" method="post">
                @csrf
                <input name="_method" type="hidden" value="DELETE">
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




@endsection
@section('js')
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
    </script>
@endsection
