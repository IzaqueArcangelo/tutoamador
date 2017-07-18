<!-- Navigation -->
<nav id="navbar" class="navbar navbar-default navbar-custom navbar-fixed-top  {{--{{  (Route::current()->getName() == "/home") || (Route::current()->getName() == "/") ? "": "is-visible is-fixed show-nav"}}--}}  ">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header page-scroll">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                Menu <i class="fa fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('/')}}">{{ config('app.name') }}</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a href="{{route('/')}}">Home</a>
                </li>
                <li>
                    <a href="{{route('/sobre')}}">About</a>
                </li>
                @if(Auth::guest())
                    <li>
                        <a href="{{route('/registrar/usuario')}}">Cadastre-se</a>
                    </li>
                @endif
                @if(!Auth::guest())
                    <li>
                        <a href="{{route('/contato')}}">Contato <i class="fa fa-envelope" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="{{route('/admin')}}">Gerenciar <i class="fa fa-cog" aria-hidden="true"></i></a>
                    </li>
                    <li>
                        <a href="#" data-toggle="dropdown">{{ Auth::user()->nomeUsuario}}  <i class="fa fa-caret-down" aria-hidden="true"></i></a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="{{route('/editar/perfil')}}"> Perfil <i class="fa fa-user-circle" aria-hidden="true"></i></a>
                            </li>
                            <li>
                                <a href="{{ url('/logout')}}"
                                   onclick="event.preventDeroutefault();
                               document.getElementById('logout-form').submit();" class="btn-user" title="Sair">
                                    Sair
                                </a>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li>
                        <a href="{{route('/login')}}">Login</a>
                    </li>
                @endif
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
{{-- formulário de logout --}}
<form id="logout-form" action="{{ url('/logout')}}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>