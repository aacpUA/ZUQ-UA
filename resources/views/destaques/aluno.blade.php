<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Estudante - ZUQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>
        <section class="homedestaque">
            <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-8 mb-3 mb-lg-0 mx-auto">
                    <a href="{{ url('/explorar/lista') }}" class="card-destaque border-0 shadow-lg">
                        <img class="card-img img-fluid" src="../images/destaques/destaque1.png">
                        <div class="d-flex flex-column border-0 card-img-overlay">
                            <p class="card-text destaqueestudante2">Encontra o teu curso!</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-8 mb-3 mb-lg-0 mx-auto">
                    <a href="/snippets/" class="card-destaque border-0 shadow-lg">
                        <img class="card-img img-fluid" src="../images/destaques/destaque2.png">
                        <div class="d-flex flex-column border-0 card-img-overlay">
                            <p class="card-text destaqueestudante2">Não percas os prazos!</p>
                        </div>
                    </a>
                </div>
                <div class="col-lg-4 col-md-8 mb-3 mb-lg-0 mx-auto">
                    <a href="/snippets/" class="card-destaque border-0 shadow-lg">
                        <img class="card-img img-fluid" src="../images/destaques/destaque3.png">
                        <div class="d-flex flex-column border-0 card-img-overlay m-4">
                            <p class="card-text destaqueestudante">Conhece todas as bolsas disponíveis em Portugal!</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>
    </body>
    @endsection
</html>
