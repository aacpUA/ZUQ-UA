<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recursos - ZUQ</title>

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
                        <p class="titulos">RECURSOS</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row mx-n5">
                    <div class="mx-auto">
                        <div class="row">
                            <button type="button" class="btn btn-light d-flex">
                                <i class="material-icons" style="color: #e62738">school</i>
                                <p class="text-geral">Exames Nacionais</p>
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <div class="row">
                            <button type="button" class="btn btn-light d-flex">
                                <i class="material-icons" style="color: #e62738">insert_photo</i>
                                <p class="text-geral">Infografias</p>
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <div class="row">
                            <button type="button" class="btn btn-light d-flex py-2">
                                <i class="material-icons" style="color: #e62738">calendar_today</i>
                                <p class="text-geral">Calendário</p>
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <div class="row">
                            <button type="button" class="btn btn-light d-flex">
                                <i class="material-icons" style="color: #e62738">list</i>
                                <p class="text-geral">Informações Úteis</p>
                            </button>
                        </div>
                    </div>
                    <div class="mx-auto">
                        <div class="row">
                            <button type="button" class="btn btn-light d-flex">
                                <i class="material-icons" style="color: #e62738">format_quote</i>
                                <p class="text-geral">Questões Frequentes</p>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </body>
    @endsection
</html>
