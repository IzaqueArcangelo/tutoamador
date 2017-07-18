@extends('templates.layout.admin')
@section('header')
    <div class="sub-nav">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <h1>EDITAR PERFIL</h1>
                    {{--<p>Descrição das atividades</p>--}}
                </div>
            </div>
        </div>
    </div>
@endsection
@section('conteudo')
    {{--@include('templates.messages.mensagens')--}}
    <div class="container">
        <div class="row">
         <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
             <form>
                 <div class="form-group form-group-lg">
                     <label for="nome">Nome</label>
                     <input type="text" class="form-control my-input-lg" id="nome" name="nome" placeholder="Nome completo">
                 </div>
                 <div class="form-group form-group-lg">
                     <label for="dataNascimento">Data Nascimento</label>
                     <input type="date" class="form-control my-input-lg" id="dataNascimento" name="dataNascimento" placeholder="Data de nascimento">
                 </div>
                 <div class="form-group form-group-lg">
                     <label for="CPF">CPF</label>
                     <input type="text" class="form-control my-input-lg" id="CPF" name="CPF" placeholder="CPF">
                 </div>
                 <div class="form-group form-group-lg">
                     <label for="email">Sexo</label>
                     <select class="form-control my-input-lg">
                         <option value="" selected disabled="true">Opção Sexual</option>
                         <option>M</option>
                         <option>F</option>
                     </select>
                 </div>
                 <legend>INFORMAÇÕES DE LOGIN</legend>
                 <div class="form-group form-group-lg">
                     <label for="nomeUsuario">Nome de Usuário</label>
                     <input type="text" class="form-control my-input-lg" id="nomeUsuario" name="nomeUsuario" placeholder="Nome de Usuário">
                 </div>
                 <div class="form-group form-group-lg">
                     <label for="email">E-mail</label>
                     <input type="email" class="form-control my-input-lg" id="email" name="email" placeholder="E-mail">
                 </div>
                 <div class="form-group form-group-lg">
                     <label for="nome">Senha</label>
                     <input type="password" class="form-control my-input-lg" id="senha" name="senha" placeholder="Senha">
                 </div>

                 <button type="submit" class="btn btn-default btn-lg">Atualizar</button>
             </form>
           </div>
        </div>
    </div>
@endsection
