{{--
@extends('templates.layout.admin')
@section('conteudo')
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <section id="login">
                        <div class="row">
                            <div class="col-xs-12 col-md-5 col-md-offset-3 col-sm-6 col-sm-offset-3">
                                <center><h1>FAZER LOGIN</h1></center>
                                <form role="form" action="{{route('/login')}}" method="post" id="login-form" autocomplete="off">
                                    {{ csrf_field() }}
                                    <div class="form-group ">
                                        <label for="email" class="sr-only">Email</label>
                                        <input type="email" name="email" id="email" class="form-control" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="key" class="sr-only">Password</label>
                                        <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha">
                                    </div>
                                    <input type="submit" id="btn-login" class="btn btn-custom btn-lg btn-block" value="Entrar">
                                </form>
                                <center>
                                    <a href="javascript:;" class="forget">Esqueceu a senha ?</a>
                                </center>
                            </div>
                        </div> <!-- /.row -->
                </section>
            </div>
        </div>
    </div>

    <hr>
@endsection--}}

        <!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap Login Form Template</title>

    <!-- CSS -->
    <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
    <link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/form-elements.css')}}" rel="stylesheet" type="text/css">
    <link href="{{asset('css/style.css')}}" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Favicon and touch icons -->
    <link rel="shortcut icon" href="{{asset('img/ico/favicon.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('img/ico/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('img/ico/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('img/ico/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('img/ico/apple-touch-icon-57-precomposed.png')}}">

</head>

<body>

<!-- Top content -->
<div class="top-content">

    <div class="inner-bg">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2 text">
                    <h1><strong>Tutorial Amador</strong> Formulário de Login</h1>
                    <div class="description">
                        <p>
                            This is a free responsive login form made with Bootstrap.
                            Download it on <a href="http://azmind.com"><strong>AZMIND</strong></a>, customize and use it as you like!
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6 col-sm-offset-3 form-box">
                    <div class="form-top">
                        <div class="form-top-left">
                            <h3>Fazer login no Site</h3>
                            <p>Entre com seu usuário e senha para fazer login: </p>
                        </div>
                        <div class="form-top-right">
                            <i class="fa fa-key"></i>
                        </div>
                    </div>
                    <div class="form-bottom">
                        <form role="form" action="{{route('/login')}}" method="post" id="login-form" autocomplete="off"action="" method="post" class="login-form">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label class="sr-only" for="email">Email</label>
                                <input type="text" name="email" placeholder="Email" class="form-username form-control" id="form-username">
                            </div>
                            <div class="form-group">
                                <label class="sr-only" for="senha">Senha</label>
                                <input type="password" name="senha" placeholder="Senha" class="form-password form-control" id="form-password">
                            </div>
                            <button type="submit" class="btn">Login</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>


<!-- Javascript -->
<script src="{{asset('vendor/jquery/jquery.js')}}"></script>
<link href="{{asset('vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
<script src="{{asset('vendor/jquery/jquery.backstretch.min.js')}}"></script>
<script src="{{asset('js/scripts.js')}}"></script>
<!--[if lt IE 10]>
<script src="{{asset('js/placeholder.js')}}"></script>
<![endif]-->

</body>

</html>