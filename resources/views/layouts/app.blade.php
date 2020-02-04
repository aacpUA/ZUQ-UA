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
            <nav class="navbar navbar-expand-lg" style="background-color: #b9181c; justify-content: space-between; width: 100vw">
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="/images/logozuq.png"  width="60vw" alt="Logo ZUQ">
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
                            <a class="nav-link" href="{{ url('/') }}">início</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/explorar') }}">explorar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/noticias') }}">notícias</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/recursos') }}">recursos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/soon') }}">oportunidades</a>
                        </li>
                    </ul>
                </div>
            </nav>
        @show
    {{-- @endif --}}

                @yield('content')

            @section('footer')
            <footer class="page-footer font-small stylish-color-dark pt-4 fundofooter lato">

                <!-- Footer Links -->
                <div class="container text-center text-md-left">

                    <!-- Grid row -->
                    <div class="row margem">

                        <!-- Grid column -->
                        <div class="col-md-4 mx-auto">

                            <!-- Content -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 h5footer"></h5>
                            <p class="pfooter"> <b>ZUQ</b> é um projeto do jornal <b>"Público"</b>. Uma plataforma agregadora de informação, que funciona como ferramenta de apoio para o acesso ao ensino superior. Destina-se a Alunos, Encarregados de Educação e Professores.</p>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 mx-auto">
                           <a href="https://www.publico.pt/" target="_blank"> <img src="/images/p-logo-original-01.svg" alt="logo publico" height="100" width="100"></a>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 h5footer"></h5>

                            <ul class="list-unstyled h5footer">
                                <li>
                                    <a class="h5footer" href="">EXPLORAR</a>
                                </li>
                                <li>
                                    <a class="h5footer" href="">NOTÍCIAS</a>
                                </li>
                                <li>
                                    <a class="h5footer" href="">RECURSOS</a>
                                </li>
                                <li>
                                    <a class="h5footer" href="">OPORTUNIDADES</a>
                                </li>
                            </ul>

                        </div>
                        <!-- Grid column -->

                        <hr class="clearfix w-100 d-md-none">

                        <!-- Grid column -->
                        <div class="col-md-2 mx-auto">

                            <!-- Links -->
                            <h5 class="font-weight-bold text-uppercase mt-3 mb-4 h5footer"></h5>

                            <ul class="list-unstyled h5footer">
                                <li>
                                    <a class="h5footer" href="">AJUDA</a>
                                </li>
                                <li>
                                    <a class="h5footer" href="">TERMOS E CONDIÇÕES</a>
                                </li>
                                <li>
                                    <a class="h5footer" href="">POLÍTICA DE PRIVACIDADE</a>
                                </li>
                            </ul>

                        </div>

                    </div>
                    <!-- Grid row -->

                </div>
                <!-- Footer Links -->

                <hr>

                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1">
                            <i class="fab fa-facebook-f"> <img src="/images/facebook-01.svg" alt="logo face" height="25px"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-dribbble mx-1">
                            <i class="fab fa-dribbble">  <img src="/images/instagram.svg" alt="logo insta" height="25px"> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1">
                            <i class="fab fa-twitter">  <img src="/images/twitter.svg" alt="logo twitter" height="25px"></i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn-floating btn-li mx-1">
                            <i class="fab fa-linkedin-in">  <img src="/images/linkedin.svg" alt="logo linkedin" height="25px"></i>
                        </a>
                    </li>

                </ul>
                <!-- Social buttons -->


                <hr>

                <!-- Copyright -->
                <div class="footer-copyright text-center py-3 h5footer margem">© 2020 ZUQ</div>
                <!-- Copyright -->

            </footer>
            @show
        </div>
    </body>
</html>
