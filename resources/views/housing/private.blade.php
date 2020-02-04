<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Alojamentos Privados - ZUQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>
        <div style="text-align: center;">
            <div class="card cardalojamentosprivados" style="width: 10rem;">
                <div class="card-body ">
                    <a href="https://www.uniplaces.com/" class="card-link"><img src="../images/uniplaces.svg" style="max-width:100%; height:auto; color: #b792b0"></a>

                </div>
            </div>
            <div class="card cardalojamentosprivados" style="width: 10rem;">
                <div class="card-body">
                    <a href="https://www.airbnb.pt/?from_belo_click" class="card-link"><img class="estiloimagem" src="../images/airbnb.svg"></a>


                </div>
            </div>
            <div class="card cardalojamentosprivados" style="width: 10rem;">
                <div class="card-body ">
                    <a href="https://www.nuroa.pt/" class="card-link"> <img src="../images/nuroa.svg" style="max-width:70%; height:auto; color: #b792b0"></a>
                </div>
            </div>
            <div class="card cardalojamentosprivados" style="width: 10rem;">
                <div class="card-body ">
                    <a href="https://www.bquarto.pt/" class="card-link"><br>
                        <p class="card-text cardtextalojamentosprivados"> <b>BQuarto</b></p>
                        <br></a>


                </div>
            </div>
        </div>
    </body>
    @endsection
</html>
