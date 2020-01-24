<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/components.css') }}" rel="stylesheet">

    <!-- Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body>



    <div id="app">
         {{-- @if(!Route::is('/')) --}}
         @section('header')
         <nav class="navbar navbar-expand-lg" style="background-color: #b9181c; justify-content: space-between">
             <a class="navbar-brand" href="#">
                 <img src="../logozuq.png"  width="60vw" alt="Logo ZUQ">
             </a>
             <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                 <span class="navbar-toggler-icon"></span>
             </button>

             <div class="navbar-header pull-right"  style="align-items: end" id="navbarSupportedContent">

                 <i class="material-icons" style="font-size: 28px">search</i>
                 <i class="material-icons md-48" style="font-size: 28px">account_circle</i>
             </div>
         </nav>


         <!-- Scroll lateral -->

         <nav class="navbar navbar-expand-lg menuscroll">
             <div class="navbar-scroll" id="navbarSupportedContent">
                 <ul class="navbar-nav">
                     <li class="nav-item">
                         <a class="nav-link" href="#">início</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">explorar</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">notícias</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">recursos</a>
                     </li>
                     <li class="nav-item">
                         <a class="nav-link" href="#">oportunidades</a>
                     </li>
                 </ul>
             </div>
         </nav>


    @show
 {{-- @endif --}}

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
