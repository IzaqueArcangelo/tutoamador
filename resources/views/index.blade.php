@extends('templates.layout.home')
@section('conteudo')
    <!-- Page Header -->
    <!-- Set your background image for this header on the line below. -->
    <header class="intro-header" style="background-image: url('{{asset('img/home-bg.jpg')}}')"
            xmlns="http://www.w3.org/1999/html">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <div class="site-heading">
                        <h1>Clean Blog</h1>
                        <hr class="small">
                        <span class="subheading">A Clean Blog Theme by Start Bootstrap</span>
                        <div id="imaginary_container">
                            <div class="input-group stylish-input-group">
                                <input type="text" class="form-control search-home" placeholder="Pesquisar">
                                <span class="input-group-addon">
                                    <button type="submit">
                                        <i class="fa fa-search" aria-hidden="true"></i>
                                    </button>
                                </span>
                                </input>
                            </div>
                        </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                @foreach($tutoriais as $tutorial)
                    <div class="post-preview">
                        <a href="{{route('/ler/tutorial', $tutorial->id)}}">
                            <h2 class="post-title">
                                {{$tutorial->nome}}
                            </h2>
                            <h3 class="post-subtitle">
                                {{$tutorial->descricao}}
                            </h3>
                        </a>
                        <p class="post-meta">Publicado por <a href="#">Start Bootstrap</a>
                            em {{$tutorial->dataPublicacao}}</p>
                    </div>
                    <hr>
            @endforeach
            {{--<hr>
            <div class="post-preview">
                <a href="post.blade.php">
                    <h2 class="post-title">
                        I believe every human has a finite number of heartbeats. I don't intend to waste any of mine.
                    </h2>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on September 18, 2014</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.blade.php">
                    <h2 class="post-title">
                        Science has not yet mastered prophecy
                    </h2>
                    <h3 class="post-subtitle">
                        We predict too much for the next year and yet far too little for the next ten.
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on August 24, 2014</p>
            </div>
            <hr>
            <div class="post-preview">
                <a href="post.blade.php">
                    <h2 class="post-title">
                        Failure is not an option
                    </h2>
                    <h3 class="post-subtitle">
                        Many say exploration is part of our destiny, but it’s actually our duty to future generations.
                    </h3>
                </a>
                <p class="post-meta">Posted by <a href="#">Start Bootstrap</a> on July 8, 2014</p>
            </div>
            <hr>--}}
            <!-- Pager -->
                <ul class="pager">
                    <li class="next">
                        <a href="#">Older Posts &rarr;</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <hr>
@endsection
@push('estilo')
<style type="text/css">

    #imaginary_container {
        margin-top: 5%;
        font-family: 'Open Sans', 'Helvetica Neue', Helvetica, Arial, sans-serif;
    }

    .search-home{
        padding: 25px;
        font-size: 25px;
    }
    /*.search-home:focus {
        border-color: #66afe9 !important;
        outline: 0 !important;
        -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6) !important;
        box-shadow: inset 0 1px 1px rgba(0,0,0,.075), 0 0 8px rgba(102,175,233,.6) !important;
    }*/
    .stylish-input-group .input-group-addon {
        background: white !important;
        font-size: 20px;
    }
    .stylish-input-group .form-control {
        border-right: 0;
        box-shadow: 0 0 0;
        border-color: #ccc;
    }

    .stylish-input-group button {
        border: 0;
        background: transparent;
    }
</style>
@endpush
