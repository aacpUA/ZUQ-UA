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
        <section class="homedestaque align-items-center">
            <div class="container">
                <div class="row">
                    <div class="">
                        <p class="titulos">EXPLORAR</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mx-n5">
                    <div class="mx-auto">
                       <div class="row">
                        <button type="button" class="btn btn-light d-flex">
                                <i class="material-icons" style="color: #e62738">home_work</i>
                                <p class="text-geral">Alojamentos</p>
                        </button>
                        </div>
                    </div>
                    {{-- <div class="mx-auto">
                    <div class="row">
                        <button type="button" class="btn btn-light d-flex">
                            <i class="material-icons" style="color: #e62738">post_add</i>
                            <p class="text-geral">Curso</p>
                        </button>
                        </div>
                    </div> --}}
                    <div class="mx-auto">
                        <div class="row">
                    <button type="button" class="btn btn-light d-flex py-2" onclick="window.location='{{ route('explore') }}'">
                        <i class="material-icons" style="color: #e62738">school</i>
                        <p class="text-geral">Cursos / Instituições</p>
                    </button>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <div class="row">
                    <button type="button" class="btn btn-light d-flex">
                        <i class="material-icons" style="color: #e62738">trending_up</i>
                        <p class="text-geral">Médias</p>
                    </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    @endsection
</html>
