<div class="container serie_selected">
    <script>
        document.title = "NETFLIX - Séries";
    
        $(".news-carousel").hide(); 
        $(".info_filme").hide();  
    
        //Verifica a resolução da janela
        var resolucao = $(window).width();
        if(resolucao < 900){
            $(".news-carousel").hide();  
            $("body #conteudos").css('margin','5px 0 80px 0');
        }
        
        $(".nav").show();
        $("#filmes").removeClass("under");
        $("#inicio").removeClass("under");
        $("#series").attr("class", "under");

    </script>
    <div class="row">      
        <div id="menu_serie">
            <h2><?php echo$_GET['nome']; ?></h2>
            <h3><?php echo$_GET['ano']; ?></h3>
            <ul>
                <li><span class="material-icons">play_circle_filled</span>Próximo episódio</li>
                <li><span class="material-icons">replay</span>Começar do início</li>
                <li><span class="material-icons">video_library</span>Temporadas</li>
                <li><span class="material-icons">speaker_notes</span>Áudio e Legendas</li>
                <li><span class="material-icons">stars</span>Add à minha lista</li>
            </ul>
        </div>
    </div>
</div>

