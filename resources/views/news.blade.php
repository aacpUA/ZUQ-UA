<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    @extends('layouts.app')
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Noticias - ZUQ</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
    </head>

    @section('content')

    <body>
        <div class="botaopublico1">
            <button class="btn btn-lg btn-primary btn-block botaopublico" type="submit" href="https://www.publico.pt/"> <img src="../images/noticias/p-logo-original-01.svg" style="width: 25px">APP DO PÚBLICO</button>
            </div>
            <br>

            <h1 class="noticias"> NOTÍCIAS | ATUALIDADE</h1>


            <div class="scrollmenu">
                <a href="https://www.publico.pt/2020/01/09/mundo/noticia/von-der-leyen-aconselha-boris-johnson-rever-calendario-negocial-pos-brexit-1899703" class="card" style="width: 50%;">
                <img class="card-img-top cardnoticias" src="../images/noticias/boris_johnson.jpg" alt="Card image cap">
                    <div class="bottom-left" style="margin-bottom: 3px">Boris Johnson</div>
                    <div class="bottom-left" style="font-size: x-small; margin-bottom: 25px"> ◉ 5 min</div>
            </a>
                <a href="https://www.publico.pt/2019/12/12/p3/noticia/mundo-pegar-fogo-governos-estao-deixar-arder-1897077" class="card" style="width: 50%;">
                    <img class="card-img-top cardnoticias" src="../images/noticias/greenpeace.jpg" alt="Card image cap">
                    <div class="bottom-left" style="margin-bottom: 3px">Greenpeace</div>
                    <div class="bottom-left" style="font-size: x-small; margin-bottom: 25px"> ◉ 10 min</div>
                </a>
                <a href="https://www.publico.pt/2019/12/20/mundo/noticia/parlamento-europeu-reconheceu-puigdemont-eurodeputado-1898169" class="card" style="width: 50%;">
                    <img class="card-img-top cardnoticias" src="../images/noticias/Parlamento-Europeu.jpg" alt="Card image cap">
                    <div class="bottom-left" style="margin-bottom: 3px">Parlamento Europeu</div>
                    <div class="bottom-left" style="font-size: x-small; margin-bottom: 25px"> ◉ 25 min</div>
                </a>
                <a href="https://www.publico.pt/2020/01/27/sociedade/entrevista/william-bourdon-rui-pinto-orgulho-portugal-1901896" class="card" style="width: 50%;">
                    <img class="card-img-top cardnoticias" src="../images/noticias/bourdon.jpeg" alt="Card image cap">
                    <div class="bottom-left" style="margin-bottom: 3px">William Bourdon</div>
                    <div class="bottom-left" style="font-size: x-small; margin-bottom: 25px"> ◉ 30 min</div>
                </a>


            </div>

            <div class="container">
                <br>
                <h1 class="noticias"> NOTÍCIAS | EDUCAÇÃO</h1>
                <br>

            <div class="row mb-2">


                <div class="col-sm-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
            <img class="imagemnoticia"src="../images/noticias/noticia2.png">
                            <h3 class="mb-0 h3noticias">Reunião com ministro da Educação foi “uma desilusão”, afirma Stop</h3>
                            <div class="mb-1 text-muted" style="font-size: small; color: #c4c4c4; margin-top: 5px">22 Janeiro 2020</div>
                            <p class="card-text mb-auto" style="color: #686868; margin-top: 5px">Durante esta quarta-feira estão a a decorrer as primeiras reuniões desta legislatura entre os sindicatos de professores e Tiago Brandão Rodrigues.</p>
                            <a href="https://www.publico.pt/2020/01/22/sociedade/noticia/reuniao-ministro-educacao-desilusao-afirma-stop-1901341" class="stretched-link" style="font-size: small; color: #b9181c; margin-top: 5px">continuar a ler</a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <img class="imagemnoticia"src="../images/noticias/noticia1.png">
                            <h3 class="mb-0 h3noticias">Professores angariaram oito mil euros para levar Ministério da Educação ao Tribunal Europeu</h3>
                            <div class="mb-1 text-muted" style="font-size: small; color: #c4c4c4; margin-top: 5px">20 Janeiro 2020</div>
                            <p class="card-text mb-auto" style="color: #686868; margin-top: 5px">A iniciativa partiu de um grupo de professores e foi apoiada pelo Sindicato de Todos os Professores (S.T.O.P.), que anunciou terem atingido o valor necessário antes da data prevista.</p>
                            <a href="https://www.publico.pt/2020/01/26/sociedade/noticia/professores-angariaram-oito-mil-euros-levar-ministerio-educacao-tribunal-europeu-1901706" class="stretched-link" style="font-size: small; color: #b9181c; margin-top: 5px">continuar a ler</a>
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="row no-gutters border rounded overflow-hidden flex-md-row mb-4 shadow-sm h-md-250 position-relative">
                        <div class="col p-4 d-flex flex-column position-static">
                            <img class="imagemnoticia"src="../images/noticias/noticia3.png">
                            <h3 class="mb-0 h3noticias">É necessário um polígrafo em cada esquina no que toca à Educação</h3>
                            <div class="mb-1 text-muted" style="font-size: small; color: #c4c4c4; margin-top: 5px">20 Janeiro 2020</div>
                            <p class="card-text mb-auto" style="color: #686868; margin-top: 5px">Quando há rigor e organização, a escola é o sítio privilegiado para a conquista de inúmeras competências tendo a família como aliada. E este rigor e organização implica, também, definir bem os limites da escola na intervenção.</p>
                            <a href="https://www.publico.pt/2020/01/20/sociedade/opiniao/necessario-poligrafo-esquina-toca-educacao-1901050" class="stretched-link" style="font-size: small; color: #b9181c; margin-top: 5px">continuar a ler</a>
                        </div>

                    </div>
                </div>
            </div>

            </div>
    </body>
    @endsection
</html>
