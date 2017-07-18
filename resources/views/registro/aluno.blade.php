@extends('templates.layout.admin')
@section('header')
    <!-- Page Header -->
    <div style="width: 100%; height: auto; background-color: #cccccc;">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1" align="center">
                    <h1>Cadastro de Usuário</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('conteudo')
    @include('templates.messages.mensagens')
    <div class="container">
        <form class="form-horizontal" action="{{route('/registrar/usuario')}}" method="post">
        {{ csrf_field() }}
        <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="ln">Nome</label>
                <div class="col-md-4">
                    <input id="nome" name="nome" type="text" placeholder="nome" class="form-control input-md">
                </div>
            </div>
            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="add1">CPF</label>
                <div class="col-md-4">
                    <input id="cpf" name="CPF" type="text" placeholder="CPF" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="add1">Data de Nascimento</label>
                <div class="col-md-4">
                    <input id="dataNascimento" name="dataNascimento" type="date" placeholder="Data de nascimento"
                           class="form-control input-md">

                </div>
            </div>

            <!-- Select Basic -->
            <div class="form-group">
                <label class="col-md-4 control-label" for="selectbasic">Sexo</label>
                <div class="col-md-4">
                    <select id="sexo" name="sexo" class="form-control input-md">
                        <option value="" selected disabled>Opção Sexual</option>
                        <option>M</option>
                        <option>F</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <label class="col-md-4 control-label" for="add2">Nome de Usuário</label>
                <div class="col-md-4">
                    <input id="nomeUsuario" name="nomeUsuario" type="text" placeholder="Nome de usuário ou apelido"
                           class="form-control input-md">
                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="email">Email</label>
                <div class="col-md-4">
                    <input id="email" name="email" type="text" placeholder="email" class="form-control input-md">

                </div>
            </div>

            <!-- Text input-->
            <div class="form-group">
                <label class="col-md-4 control-label" for="city">Senha</label>
                <div class="col-md-4">
                    <input id="senha" name="senha" type="password" placeholder="senha" class="form-control input-md"
                           required="">
                </div>
            </div>

            <!-- Button -->
            <div class="form-group">
                <div class="col-md-4 col-md-offset-4">
                    <button id="submit" type="submit" class="btn btn-primary">Cadastrar-se</button>
                </div>
            </div>

        </form>
    </div>

@endsection
