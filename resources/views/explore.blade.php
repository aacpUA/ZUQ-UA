<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Explorar - ZUQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>
                <div class="row">
                    <div class="col-md-3 hidden-sm">
                        <div class="sidebar">
                            <!-- Search form
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search"> -->


                        <br>

                                <form class="form-inline my-2 my-lg-0">
                                    <div class="d-flex align-items-center icon-search">
                                        <i class="material-icons" style="font-size: 28px">search</i>
                                        <input class="form-control no-border-outline mr-sm-2 search" type="search" placeholder="pesquisar" aria-label="Search">
                                    </div>
                                </form>

                            <br>

                            <a href="#home">Área de Interesse
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                            <a href="#news">Região
                              <span><i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></span></a>
                            <a href="#contact">Ciclo de Estudos
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                            <a href="#about">Tipo de Estabelecimento
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                            <a href="#about">Propinas
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                        <br>
                            <br>
                            <br>


                                {{-- <button class="btn btn-circle"><i class="material-icons" style="font-size: 26px">done</i></button> --}}


                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12" style="overflow-y: scroll; max-height: 100vh">
                        @foreach ($regions as $region)
                            <div class="row">
                                <div class="col-md-12 filters-title">
                                    {{$region->name}}
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach ($institutions as $institution)
                                            @if ($institution->region_id == $region->id)
                                                <div class="col-lg-3 col-md-4 col-sm-6 col-xs-6">
                                                    <div class="card-explorar" style="background-image: url('images/home/imagemperfishomepage.png'); background-repeat:no-repeat">
                                                        <p class="text-explorar">{{$institution->name}}</p>
                                                    </div>
                                                    {{-- <a href="/snippets/" class="card-destaque border-0 shadow-lg">
                                                        <img class="card-img img-fluid" src="images/home/imagemperfishomepage.png">
                                                        <div class="d-flex text-center flex-column border-0 card-img-overlay">
                                                            <p class="card-text textodestaques">{{$institution->name}}</p>
                                                        </div>
                                                    </a> --}}
                                                </div>
                                                @else
                                                    <p style="display:none"></p>
                                            @endif
                                        @endforeach
                                    </div>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
    </body>
    @endsection
</html>
