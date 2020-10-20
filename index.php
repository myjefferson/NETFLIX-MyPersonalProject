<!DOCTYPE html>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta http-equiv="cache-control" content="max-age=0"/>

		<!--STYLE DESKTOP-->
		<link rel="stylesheet" href="assets/css/style_conteudos.css">
		<link rel="stylesheet" href="assets/css/nav_principal.css">
		<link rel="stylesheet" href="assets/css/serie_selected.css">
		<link rel="stylesheet" href="lib/materialize/icons_materialize.css">
		<link rel="stylesheet" href="lib/bootstrap/css/bootstrap.min.css">
		<link rel="sortcut icon" href="assets/images/interface/icon.png" type="image/x-icon"> 
		<link href="assets/css/style_videoFilme.css" rel="stylesheet">

        <!--SCRIPT-->
        <script src="assets/scripts/functions.js"></script>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" ></script>
		<title>NETFLIX</title>
	</head>
    <body style="background: #0A0A0A" class="index">   
        <img id="bg_img_filme" src="assets/images/interface/background.jpg"> 

        <!--NAV-->
        <nav class="nav">      
            <div id="controls">
                <!--LOGOTIPO-->
                <div id="logo_sobre">
                    <p id="align_logo"><img  onclick="load_page('home_inicio.php')" src="assets/images/interface/logo.png" id="logo"><p>
                    <div id="sobre">
                        <a href="javascript:void(0)" onclick="sobre()">!</a>
                    </div>
                </div>
                
                <div class="nav_collection">
                    <ul>
                        <li><a href="javascript:void(0)" onclick="load_page('home_inicio.php')" id="inicio" class="" > INÍCIO</a></li>
                        <li><a href="javascript:void(0)" onclick="load_page('home_filmes.html')" id="filmes" class="" > FILMES</a></li>
                        <li><a href="javascript:void(0)" onclick="load_page('home_series.php')" id="series" class=""> SÉRIES</a></li>                      
                    </ul>
                </div>
            </div>
        </nav>

        <div class="mobileStyle">
            <!--CARREGAMENTO-->
            <div id="loading">
                <img src="assets/images/interface/logo.png">
                <p><img src="assets/images/interface/loading.gif"></p>
            </div>

            <script type="text/javascript">  
                $(document).ready(function(){
                    $(".info_filme").hide();
                    $(".news-carousel").show();
                });
            </script>

            <!--MODAL VISUALIZAR CONTEUDO-->
            <div class="modal_video modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="background-color: #606060; width: 100vw;">
                        <div class="modal-header">
                            <button type="button" class="close" onclick="fechar_video();" data-dismiss="modal" aria-label="Close">
                                <span class="fechar_video" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <iframe id="video_src" src="" width="100%" height="100%"></iframe>
                    </div>
                </div>
            </div>
            
            <!--MODAL SOBRE-->
            <div class="sobre modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content" style="width: 100vw;">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span class="fechar_video" aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <p id="img"><img src="assets/images/interface/logo.png" id="logo_sobre"></p>
                        <p id="version">Versão 1.5.0</p>
                        <p>NETFLIX - 2020 Todos os direitos reservados.</p>
                        <p>by Jefferson Carvalho.</p>
                        <p>Atenção: Este projeto é apenas para estudos em programação, design UI e UX!</p>
                    </div>
                </div>
            </div>
            
            <div class="container">
                <div class="row">
                    <!--INFORMAÇÕES DO CONTEUDO-->
                    <div class="info col-md-5 position-fixed">
                        <!--CAROUSEL DE NOTÍCIAS FILMES-->
                        <div class="news-carousel">
                            <div id="carousel" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="img_desk d-block w-100" src="assets/images/interface/welcome_netflix.png" alt="First slide">
                                        <img class="img_mobile d-block w-100" src="assets/images/interface/welcome_netflix_mobile.png" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <a href="javascript:void(0)" onclick="load_video('https://www.youtube.com/embed/rcV1I-397Wg', 'Enola Rolmes');">
                                            <img class="img_desk d-block w-100" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/riYInlsq2kf1AWoGm80JQW5dLKp.jpg">
                                            <img class="img_mobile d-block w-100" src="assets/images/movies-capa/enola_rolmes_bg.jpg">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="javascript:void(0)" onclick="load_video('https://www.youtube.com/embed/hhvbJNaRUIM', 'Bright');">
                                            <img class="img_desk d-block w-100" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/wfWmA2k03GDWQmrcjusUcqBiYWT.jpg">
                                            <img class="img_mobile d-block w-100" src="assets/images/movies-capa/bright_bg.jpg">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="javascript:void(0)" onclick="load_video('https://www.youtube.com/embed/LhgfYpj_4_Q', 'A Baba a Rainha da Morte');">
                                            <img class="img_desk d-block w-100" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/1JnolYGDrhgo5y3rOb0S1VErF4f.jpg">
                                            <img class="img_mobile d-block w-100" src="assets/images/movies-capa/a_baba_a_rainha_da_morte_bg.jpg">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="javascript:void(0)" onclick="load_video('https://www.youtube.com/embed/tdwLRHGQVG8', 'Por Lugares Incríveis');">
                                            <img class="img_desk d-block w-100" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/4SafxuMKQiw4reBiWKVZJpJn80I.jpg">
                                            <img class="img_mobile d-block w-100" src="assets/images/movies-capa/por_lugares_incriveis_bg.jpg">
                                        </a>
                                    </div>
                                    <div class="carousel-item">
                                        <a href="javascript:void(0)" onclick="load_video('https://www.youtube.com/embed/uaaC57tcci0', 'O Dilema das Redes');">
                                            <img class="img_desk d-block w-100" src="https://image.tmdb.org/t/p/w600_and_h900_bestv2/gM1cZkaeplUxt33Rhb9FUMhR7mj.jpg">
                                            <img class="img_mobile d-block w-100" src="assets/images/movies-capa/o_dilema_das_redes_bg.jpg">
                                        </a>
                                    </div>                           
                                </div>
                                <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>        
                        </div>
                        
                        <div class="info_filme"> 
                            <div class="clas_gen_ano">
                                <h1 id="nome"></h1>
                                <div id="idi-ano">
                                    <img src="" id="idade"></img>
                                    <li id="genero"></li>
                                    <ul>                                      
                                        <div id="border">
                                            <li id="idioma"></li>
                                            <li id="ano"></li>
                                        </div>   
                                    </ul>                                   
                                </div>         
                            </div>
                            <p id="desc"></p>
                            <img id="capa" src="">
                        </div>
                    </div>
                    
                    <div class="conteudos" id="conteudos">        
                    <!--Apresentação dos conteúdos-->  
                    </div>

                    <script>
                        //Load div containers
                        $(".conteudos").load('home_inicio.php').fadeIn();

                        //Loading
                        $(window).load(function(){
                            $('#loading').delay(3000).fadeOut('slow');
                            $("#box_audio_intro").load(`<embed loop='false' src='pos-loading-netflix.mp3' hidden='true' autoplay='true'>`);
                        });
                    </script>
                </div>
            </div>
        </div>
    </body>
</html>