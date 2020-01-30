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
                <div class="row lato">
                    <div class="col-md-3 hidden-sm">
                        <div class="filters-sidebar">
                            <div class="filters-title" style="margin: 0">
                                Filtros
                            </div>
                            <div style="width: 90%">
                                <form class="form-inline filters-search-bar">
                                    <input class="form-control" type="search" placeholder="pesquisar" aria-label="Search">
                                    <i class="material-icons" style="font-size: 28px">search</i>
                                </form>
                            </div>
                            <!-- Search form
                            <input class="form-control" type="text" placeholder="Search" aria-label="Search"> -->

                            <div class="filters-categories">
                                <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-1" aria-expanded="false" aria-controls="category-menu-1">
                                    <p>Área de Interesse</p>
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </button>
                                <div class="category-menu collapse" id="category-menu-1">
                                    <div class="card-body">
                                        <div class="form-check">
                                            <label class="form-check-label category-menu-list-item" for="check1">Agricultura</label>
                                            <input type="checkbox" class="" id="check1">
                                        </div>
                                    </div>
                                </div>

                                <div class="category collapsed" >
                                    <p>Curso</p>
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </div>
                                <div class="category collapsed">
                                    <p>Instituição</p>
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </div>
                                <div class="category collapsed">
                                    <p>Modalidade</p>
                                    <i class="material-icons">keyboard_arrow_down</i>
                                </div>
                               {{-- <a href="#home">Área de Interesse
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                            <a href="#news">Região
                              <span><i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></span></a>
                            <a href="#contact">Ciclo de Estudos
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                            <a href="#about">Tipo de Estabelecimento
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a>
                            <a href="#about">Propinas
                                <i class="material-icons iconfiltroazul" style="font-size: 22px">keyboard_arrow_right</i></a> --}}
                            </div>





                                {{-- <button class="btn btn-circle"><i class="material-icons" style="font-size: 26px">done</i></button> --}}
                        </div>
                    </div>
                    <div class="col-md-9 col-sm-12" style="overflow-y: scroll; max-height: 100vh">
                        @foreach ($regions as $region)
                            <div class="row" style="padding: 0 15px">
                                <div class="col-md-12 filters-title">
                                    {{$region->name}}
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach ($institutions as $institution)
                                            @if ($institution->region_id == $region->id)
                                                <div class="col-lg-3 col-md-4 col-sm-6 card-explorar-col">
                                                    <div class="card-explorar" style="background-image: url('images/home/imagemperfishomepage.png'); background-repeat:no-repeat">
                                                        <p class="text-explorar">{{$institution->name}}</p>
                                                    </div>
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
