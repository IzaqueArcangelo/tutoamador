@extends('templates.layout.gerenciar')
@section('adm-conteudo')
    <div class="col-md-10 custom-font">
        <div class="row">
            <div class="col-md-12">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Vertical Form</div>

                        <div class="panel-options">
                            <a href="#" data-rel="collapse"><i class="glyphicon glyphicon-refresh"></i></a>
                            <a href="#" data-rel="reload"><i class="glyphicon glyphicon-cog"></i></a>
                        </div>
                    </div>
                    <div class="panel-body">
                        <form method="post" action="{{route('/salvar/tutorial')}}" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group form-group-lg {{$errors->has('titulo') ? 'has-error' : ''}}">
                                <label for="titulo">Titulo</label>
                                <input type="text" class="form-control input-lg" id="titulo" name="titulo"
                                       placeholder="Título" value="{{old('titulo')}}">
                                @if ($errors->has('titulo'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('titulo') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('descricao') ? 'has-error' : ''}}">
                                <label for="descricao">Descrição</label>
                                <input type="text" class="form-control input-lg" id="descricao" name="descricao" value="{{old('descricao')}}"
                                       placeholder="Descrição">
                                @if ($errors->has('descricao'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('descricao') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('codigo') ? 'has-error' : ''}}">
                                <label for="codigo">Código</label>
                                <input type="text" class="form-control input-lg" id="codigo" name="codigo"
                                       placeholder="Código do Tutorial" value="{{old('codigo')}}">
                                @if ($errors->has('codigo'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('codigo') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('tipo') ? 'has-error' : ''}}">
                                <label for="tipo">Tipo</label>
                                <select class="form-control input-lg" name="tipo">
                                    <option value="" selected disabled>Tipo</option>
                                    @foreach($tipos as $tipo)
                                        @if(collect(old('tipo'))->contains($tipo->id))
                                            <option value="{{$tipo->id}}" selected>{{$tipo->nome}}</option>
                                        @else
                                            <option value="{{$tipo->id}}">{{$tipo->nome}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('tipo'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('tipo') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('valor') ? 'has-error' : ''}}">
                                <label for="valor">Valor</label>
                                <input type="text" class="form-control input-lg" id="valor" name="valor" placeholder="Preço" value="{{old('valor')}}">
                                @if ($errors->has('valor'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('valor') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('categorias') ? 'has-error' : ''}}">
                                <label for="categorias">Categoria</label>
                                <select class="per-select selectpicker form-control input-lg "
                                        title="selecione uma categoria" name="categorias[]" multiple>
                                    <option value="" disabled="true">Categorias</option>
                                    @foreach($categorias as $categoria)
                                        @if(collect(old('categorias'))->contains($categoria->id))
                                            <option value="{{$categoria->id}}" selected>{{$categoria->nome}}</option>
                                        @else
                                            <option value="{{$categoria->id}}">{{$categoria->nome}}</option>
                                        @endif
                                    @endforeach
                                </select>
                                @if ($errors->has('categorias'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('categorias') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('escolherImagemCabecalho') ? 'has-error' : ''}}">
                                <label for="file" class="control-label">Imagem do Cabeçalho</label>
                                <input type="file" class="form-control input-lg" id="escolherImagemCabecalho"
                                       name="escolherImagemCabecalho">
                                @if ($errors->has('escolherImagemCabecalho'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('escolherImagemCabecalho') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="file" class="control-label">Imagem do Cabeçalho</label>
                                <div class="" align="center" title="">
                                    <img width="50%" height="50%" src="{{asset('https://png.icons8.com/monocle/p1em/1600')}}"
                                         id="imgCabecalho" class="img-centered img-responsive">
                                </div>
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('escolherImagemExibicao') ? 'has-error' : ''}}">
                                <label for="file" class="control-label">Imagem de Exibição</label>
                                <input type="file" class="form-control input-lg" id="escolherImagemExibicao"
                                       name="escolherImagemExibicao">
                                @if ($errors->has('escolherImagemExibicao'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('escolherImagemExibicao') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="file" class="control-label">Imagem de Exibição</label>
                                <div class="" align="center" title="">
                                    <img width="50%" height="50%" src="{{asset('https://png.icons8.com/monocle/p1em/1600')}}"
                                         id="imgExibicao" class="img-centered img-responsive">
                                </div>
                            </div>
                            <div class="form-group form-group-lg {{$errors->has('postagem') ? 'has-error' : ''}}"
                                 id="area-de-postagesm">
                                <label for="postagem" class="control-label">Postagem</label>
                                <textarea class="form-control input-lg" id="postagem" name="postagem" value=""
                                          rows="10">{{old('postagem')}}</textarea>
                                @if ($errors->has('postagem'))
                                    <span class="help-block">
                              <p class="help-block text-danger text-left"><strong>{{ $errors->first('postagem') }}</strong></p>
                            </span>
                                @endif
                            </div>
                            {{--<div class="form-group">
                                <label for="file" class="control-label">Imagem do Evento</label>
                                <div class="img-responsive"title="">
                                    <img src="{{asset('https://static.wixstatic.com/media/307bfb_55f6b2f05c53434b9d8724280ab5d203~mv2.jpg/v1/fill/w_400,h_400/307bfb_55f6b2f05c53434b9d8724280ab5d203~mv2.jpg')}}" id="imagemEvento" class="img-centered img-responsive">
                                </div>
                            </div>--}}


                            <button type="submit" class="btn btn-default btn-lg">Cadastrar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('estilo')
<link href="{{asset("bootstrap-select-1.12.2/css/bootstrap-select.min.css")}}" rel="stylesheet"
      type="text/css">
@endpush
@push('scripts')
<script src="{{asset("bootstrap-select-1.12.2/js/bootstrap-select.min.js")}}"></script>
<script src="{{asset("js/ckeditor.js")}}"></script>
{{--<script type="text/javascript" src="http://js.nicedit.com/nicEdit-latest.js"></script> <script type="text/javascript">
    //<![CDATA[
    bkLib.onDomLoaded(function() { nicEditors.allTextAreas() });

    //]]>
</script>--}}

<script type="text/javascript">
    CKEDITOR.replace('postagem');
</script>
<script src="{{asset("js/config.js")}}"></script>

<script type="text/javascript">

    $(window).resize(function () {
        $('.nicEdit-main').width('100%');
    });

    // TODO exportar código para arquivo externo
    $("#escolherImagemCabecalho").on('change', function () {
        //alert("ola mundo");
        imgCabecalho(this);
    });


    $("#escolherImagemExibicao").on('change', function () {
        //alert("ola mundo");
        imgExibicao(this);
    });

    function imgCabecalho(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgCabecalho').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    function imgExibicao(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#imgExibicao').attr('src', e.target.result);
                console.log('ola')
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

</script>
@endpush