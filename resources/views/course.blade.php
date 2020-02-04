<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Curso - ZUQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>
        <div style="text-align: center; font-family: lato">
            <div class="card cardalojamentos" style="width: 18rem; border: none">
                <div class="card-body cardresultado"> <p style=" font-family: Lato; color: white; font-size: large; position: absolute; bottom: 15px; left: 36px;"></p>
                    <a href="https://www.ua.pt/" class="card-link"> <img style="width:250px; max-height:100%; border-radius: 6px" src="{{$course->image}}"> </a>
                </div>
            </div>
        </div>
        <div>
            <div>
                <i class="material-icons" style="font-size: xx-large; color: #b9181c; float: right; margin-right: 30px; margin-top: 5px">
                    bookmark_border</i>
            </div>
            <div style="font-family: Lato">
                <h1 style="color: #b9181c; font-size: medium; margin-left: 30px">{{$course->name}}</h1>
                <p style="color: #c4c4c4; font-size: x-small; margin-left: 30px; text-align: justify; margin-right: 30px ">{{$course->info}}</p>
                <p style="text-align: left; margin-left: 30px; font-size: small"> <b>média último colocado (2019)</b> <br> 1ªF - 129.0 <br>2ªF - 132.0 <br> <b>vagas -</b> 98</p>
                <p style="text-align: left; margin-left: 30px; font-size: small; color: #c4c4c4"> <b>website - </b> <a href={{$course->website}} style="color: black">{{$course->website}}</a> <br> <b>e-mail - </b> <a href="mailto:{{$course->email}}" style="color: black">{{$course->email}}</a>
                    <br> <b> telefone - </b> <a style="color: black">{{$course->phone}}</a></p>

            </div>
        </div>
    </body>
    @endsection
</html>
