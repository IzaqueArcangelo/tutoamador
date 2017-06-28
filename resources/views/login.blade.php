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
@endsection