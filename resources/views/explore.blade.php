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
                    <div class="col-md-3">
                        <div class="filters-sidebar hide-sm-custom">
                            <div class="filters-title sm-hide md-hide" style="margin: 0">
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
                            <form role="form" method="GET" enctype="multipart/form-data" action="{{ route('explore.find') }}">
                            {{-- <form role="form" method="POST" action="{{ route('institution.find') }}"> --}}

                                <div class="filters-categories">
                                    <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-1" aria-expanded="false" aria-controls="category-menu-1">
                                        <p>Área de Interesse</p>
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </button>
                                    <div class="category-menu collapse" id="category-menu-1">
                                        <div class="card-body">
                                            @foreach ($areas as $area)
                                                <div class="filters-categories-check">
                                                    <label for="{{$area->name}}">{{$area->name}}</label>
                                                    <input type="checkbox" name="areas[{{$area->id}}]" id="{{$area->name}}">
                                                    <span class="filters-check-selection">+</span>
                                                    <span class="background"></span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-2" aria-expanded="false" aria-controls="category-menu-2">
                                        <p>Tipo de Estabelecimento</p>
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </button>
                                    <div class="category-menu collapse" id="category-menu-2">
                                        <div class="card-body">
                                            @foreach ($types as $type)
                                                <div class="filters-categories-check">
                                                    <label for="{{$type->name}}">{{$type->name}}</label>
                                                    <input type="checkbox" name="types[{{$type->id}}]" id="{{$type->name}}">
                                                    <span class="filters-check-selection">+</span>
                                                    <span class="background"></span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-3" aria-expanded="false" aria-controls="category-menu-3">
                                        <p>Ciclo de Estudos</p>
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </button>
                                    <div class="category-menu collapse" id="category-menu-3">
                                        <div class="card-body">
                                            @foreach ($cycles as $cycle)
                                                <div class="filters-categories-check">
                                                    <label for="{{$cycle->name}}">{{$cycle->name}}</label>
                                                    <input type="checkbox" name="cycles[{{$cycle->id}}]" id="{{$cycle->name}}">
                                                    <span class="filters-check-selection">+</span>
                                                    <span class="background"></span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>

                                    <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-4" aria-expanded="false" aria-controls="category-menu-4">
                                        <p>Região</p>
                                        <i class="material-icons">keyboard_arrow_right</i>
                                    </button>
                                    <div class="category-menu collapse" id="category-menu-4">
                                        <div class="card-body">
                                            @foreach ($regions as $region)
                                                <div class="filters-categories-check">
                                                    <label for="{{$region->name}}">{{$region->name}}</label>
                                                    <input type="checkbox" name="regions[{{$region->id}}]" id="{{$region->name}}">
                                                    <span class="filters-check-selection">+</span>
                                                    <span class="background"></span>
                                                </div>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="filters-button">
                                        <button type="submit" class="btn">
                                            ok
                                        </button>
                                    </div>

                                </div>
                            </form>
                                {{-- <button class="btn btn-circle"><i class="material-icons" style="font-size: 26px">done</i></button> --}}
                        </div>
                        <div class="show-sm-custom" style="padding: 10px">
                            <button class="btn btn-lg btn-block botao-filtros" data-toggle="modal" data-target="#filtersModal" type="submit">Filtros</button>
                        </div>

                        <div class="modal fade" id="filtersModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Filtros</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                    <div class="filters-sidebar">
                                        <div style="width: 90%">
                                            <form class="form-inline filters-search-bar">
                                                <input class="form-control" type="search" placeholder="pesquisar" aria-label="Search">
                                                <i class="material-icons" style="font-size: 28px">search</i>
                                            </form>
                                        </div>
                                        <!-- Search form
                                        <input class="form-control" type="text" placeholder="Search" aria-label="Search"> -->
                                        <form role="form" method="GET" enctype="multipart/form-data" action="{{ route('explore.find') }}">
                                        {{-- <form role="form" method="POST" action="{{ route('institution.find') }}"> --}}

                                            <div class="filters-categories">
                                                <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-1" aria-expanded="false" aria-controls="category-menu-1">
                                                    <p>Área de Interesse</p>
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                </button>
                                                <div class="category-menu collapse" id="category-menu-1">
                                                    <div class="card-body">
                                                        @foreach ($areas as $area)
                                                            <div class="filters-categories-check">
                                                                <label for="{{$area->name}}">{{$area->name}}</label>
                                                                <input type="checkbox" name="areas[{{$area->id}}]" id="{{$area->name}}">
                                                                <span class="filters-check-selection">+</span>
                                                                <span class="background"></span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-2" aria-expanded="false" aria-controls="category-menu-2">
                                                    <p>Tipo de Estabelecimento</p>
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                </button>
                                                <div class="category-menu collapse" id="category-menu-2">
                                                    <div class="card-body">
                                                        @foreach ($types as $type)
                                                            <div class="filters-categories-check">
                                                                <label for="{{$type->name}}">{{$type->name}}</label>
                                                                <input type="checkbox" name="types[{{$type->id}}]" id="{{$type->name}}">
                                                                <span class="filters-check-selection">+</span>
                                                                <span class="background"></span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-3" aria-expanded="false" aria-controls="category-menu-3">
                                                    <p>Ciclo de Estudos</p>
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                </button>
                                                <div class="category-menu collapse" id="category-menu-3">
                                                    <div class="card-body">
                                                        @foreach ($cycles as $cycle)
                                                            <div class="filters-categories-check">
                                                                <label for="{{$cycle->name}}">{{$cycle->name}}</label>
                                                                <input type="checkbox" name="cycles[{{$cycle->id}}]" id="{{$cycle->name}}">
                                                                <span class="filters-check-selection">+</span>
                                                                <span class="background"></span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>

                                                <button class="category collapsed" type="button" data-toggle="collapse" data-target="#category-menu-4" aria-expanded="false" aria-controls="category-menu-4">
                                                    <p>Região</p>
                                                    <i class="material-icons">keyboard_arrow_right</i>
                                                </button>
                                                <div class="category-menu collapse" id="category-menu-4">
                                                    <div class="card-body">
                                                        @foreach ($regions as $region)
                                                            <div class="filters-categories-check">
                                                                <label for="{{$region->name}}">{{$region->name}}</label>
                                                                <input type="checkbox" name="regions[{{$region->id}}]" id="{{$region->name}}">
                                                                <span class="filters-check-selection">+</span>
                                                                <span class="background"></span>
                                                            </div>
                                                        @endforeach
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="filters-button">
                                                    <button type="submit" class="btn">
                                                        ok
                                                    </button>
                                                </div>

                                            </div>
                                        </form>
                                            {{-- <button class="btn btn-circle"><i class="material-icons" style="font-size: 26px">done</i></button> --}}
                                    </div>
                                </div>
                                <div class="modal-footer">
                                </div>
                              </div>
                            </div>
                    </div>


                    </div>
                    <div class="col-md-9 col-sm-12" style="overflow-y: scroll; max-height: 100vh">
                        @foreach ($primary as $primary_key)
                            <div class="row" style="padding: 0 15px">
                                <div class="col-md-12 filters-title">
                                    {{$primary_key->name}}
                                </div>
                                <div class="col-md-12">
                                    <div class="row">
                                        @foreach ($secondary as $secondary_key)
                                        @if ($view === 1)

                                            @if ($secondary_key->region_id == $primary_key->id)
                                                <div class="col-lg-3 col-md-4 col-sm-6 card-explorar-col">
                                                    <div class="card-explorar" style="background-image: url({{$secondary_key->image}}); background-repeat:no-repeat; background-position: center;  background-size: cover">
                                                        <p class="text-explorar" style="background-color: rgba(0,0,0,0.40)">{{$secondary_key->name}}</p>
                                                    </div>
                                                </div>
                                            @else
                                                <p style="display:none"></p>
                                            @endif
                                        @else
                                            @if ($secondary_key->institution_id == $primary_key->id)
                                                <div class="col-lg-3 col-md-4 col-sm-6 card-explorar-col" onclick="window.location='{{ route('cursos.show',['id' => $secondary_key->id]) }}'">
                                                    <div class="card-explorar" style="background-image: url('../images/home/imagemperfishomepage.png'); background-repeat:no-repeat">
                                                        <p class="text-explorar">{{$secondary_key->name}}</p>
                                                    </div>
                                                </div>
                                            @else
                                                <p style="display:none"></p>
                                            @endif
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
