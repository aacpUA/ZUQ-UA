<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alojamentos - ZUQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>
        <div style="text-align: center">
            <div class="card cardalojamentos" style="width: 18rem;">
                <div class="card-body ">
                    <a href="#" class="card-link"></a>
                    <p class="card-text cardtextalojamentos"> <i class="material-icons">
                    home_work </i> <br> RESIDÊNCIAS ESCOLARES</p>
                </div>
            </div>
            <div class="card cardalojamentos" style="width: 18rem;">
                <div class="card-body " onclick="window.location='{{ url('alojamentos/privados') }}'">
                    <a href="#" class="card-link"></a>
                    <p class="card-text cardtextalojamentos"><i class="material-icons">
                        home
                    </i> <br>ALOJAMENTO PRIVADO</p>

                </div>
            </div>
            </div>
    </body>
    @endsection
</html>
