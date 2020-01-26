<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>

        <div class="flex-center position-ref full-height">
            {{-- @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif --}}

            <div class="content">
                <section class="homeperfil">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-4 col-md-8 mb-3 mb-lg-0 mx-auto">
                                <a href="/snippets/" class="card-destaque border-0 shadow-lg">
                                    <img class="card-img img-fluid" src="images/home/imagemperfishomepage.png">
                                    <div class="d-flex text-center flex-column border-0 card-img-overlay">
                                        <p class="card-text textodestaques">ESTUDANTE</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-8 mb-3 mb-lg-0 mx-auto">
                                <a href="/snippets/" class="card-destaque border-0 shadow-lg">
                                    <img class="card-img img-fluid" src="images/home/imagemperfishomepage.png">
                                    <div class="d-flex text-center flex-column border-0 card-img-overlay">
                                        <p class="card-text textodestaques">ENCARREGADO DE EDUCAÇÃO</p>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-4 col-md-8 mb-3 mb-lg-0 mx-auto">
                                <a href="/snippets/" class="card-destaque border-0 shadow-lg">
                                    <img class="card-img img-fluid" src="images/home/imagemperfishomepage.png">
                                    <div class="d-flex text-center flex-column border-0 card-img-overlay">
                                        <p class="card-text textodestaques">PROFESSOR</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </body>
    @endsection
</html>
