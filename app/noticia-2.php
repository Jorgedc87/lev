<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="#">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/revolution/navigation.css">
    <link rel="stylesheet" href="css/revolution/settings.css">
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="css/animate.css">
    
    
    <title>Leviatan eSports</title>
</head>
<body>
    
    <header class="header-nav">
        <div class="nav-prin"><?php include('includes/menu-top.php')?></div>
        <div class="nav-prin"><?php include('includes/side-menu.php')?></div>
    </header>

    <div class="fondo-noticia">    
    </div>

    <section class="noticia__contenedor">
        
        <div class="noticia">
            <div class="imagen__noticia2">
                
            </div>
        </div>
        <div class="contenido__noticia">
            <div class="noticia__titulo">
                <h1>LVP Unity League Flow: Leviatán Esports y Coscu Army son los últimos semifinalistas del torneo</h1>
            </div>
            <div class="noticia__autor">
                Por Angel (02/05/2021)
            </div>
            <div class="noticia__copete">
                Leviatán Esports y Coscu Army son los últimos semifinalistas de la <b>Unity League Flow</b> y se enfrentarán entre ellos en la próxima fase.</div>
            <div class="noticia__texto">
                <p>Se disputaron las últimas dos series de cuartos de final de la <b>Unity League Flow</b>, por lo que se conocieron a los últimos equipos que jugarán las semifinales. <b>Leviatán Esports</b> y <b>Coscu Army</b> le ganaron a <b>Hawks</b> y a <b>Nocturns Gaming</b> respectivamente y se enfrentarán en la próxima fase para definir al segundo finalista.</p>
                <div class="tweet" style="margin: 1rem auto"><blockquote class="twitter-tweet" data-theme="dark"><p lang="es" dir="ltr">Y es asi como tenemos a nuestro 4to Semifinalista! <a href="https://twitter.com/CoscuArmyTeam?ref_src=twsrc%5Etfw">@CoscuArmyTeam</a> se enfrentará entonces a <a href="https://twitter.com/LeviatanGG?ref_src=twsrc%5Etfw">@LeviatanGG</a> la semana que viene!<a href="https://twitter.com/hashtag/UnityLeagueFlow?src=hash&amp;ref_src=twsrc%5Etfw">#UnityLeagueFlow</a> ▶️ <a href="https://t.co/DzKYJoAB3O">https://t.co/DzKYJoAB3O</a> <a href="https://t.co/4PRcVW7qsA">pic.twitter.com/4PRcVW7qsA</a></p>&mdash; Unity League Flow (@LVPargCSGO) <a href="https://twitter.com/LVPargCSGO/status/1384654290367700993?ref_src=twsrc%5Etfw">April 20, 2021</a></blockquote> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script></div>
                
                <p>El primer punto se desarrolló en <b>Dust II</b>, donde <b>Leviatán Esports</b> dominó del lado T por 12 a 3. Sin embargo, en el cambio de lado <b>Hawks</b> logró una racha con la que casi consiguen un comeback, pero los <b>Dragones Marinos</b> supieron cerrar el mapa por 16 a 12 para poner la serie por 1 a 0 con 20 asesinatos de <b>Begod</b>. La historia fue diferente para los <b>Halcones en Mirage</b>. Con un control absoluto en el lado T, <b>Hawks</b> logró ganar la primera mitad por 10 a 5, para luego cerrar el punto por 16 a 11 con un gran aporte de <b>Tomj y Juaniv.</b></p>
                
                <p>El cruce definitorio se desarrolló en Overpass. Ambos equipos se jugaban las últimas cartas para pasar a semifinales, por lo que la primera mitad de la partida fue muy igualada. El cambio de lado favoreció a Leviatán por 9 a 6, y más tarde, el mapa y la serie quedó en sus manos tras ganar por 16 a 11. 182 fue el más destacado de su escuadra, ya que finalizó con 29 asesinatos.</p>

                <img src="img/noticias/noticia-2/img2-noticia2.jpeg" alt="">

                <p><b>La Unity League Flow</b> llega de la mano de su main sponsor <b>Flow</b>. Las jornadas se desarrollarán los lunes y martes a partir de las 18:00hs, y en cada una se disputarán 5 juegos por día. Las transmisiones se podrán ver por el canal 601 de Flow y por el canal oficial de Twitch y Youtube de la Liga de Videojuegos Profesional.</p>

                
            </div>
            
        </div>
    
    </section>

    <div class="separacion"></div>
        
    <!-- REDES - INICIO-->

    <?php include('includes/redes-sociales.php');?>

    <!-- REDES - FIN-->

    <footer class="footer">
        <?php include('includes/footer.php');?>
    </footer>

    <script
        src="https://code.jquery.com/jquery-3.5.1.js"
        integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc="
        crossorigin="anonymous">
    </script>
    <script src="js/wow.min.js"></script>
    <script>
        new WOW().init();
    </script>
    <script>
        $(document).ready(function(){
            $('#icon').click(function(){
                var x = document.getElementById("nav-side");
                if (x.style.left == "-100%") {
                    x.style.left = "0";
                } else {
                    x.style.left = "-100%";
                }
            })
        })
    </script>
</body>
</html>