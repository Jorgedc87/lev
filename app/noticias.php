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

    <section class="noticias wow">
        <div class="overlayNoticias"></div>
        <div class="contenido-noticias">
            <h3>Todas las <b>noticias</b></h3>
            <p>Conocé los últimos acontecimientos y novedades de Leviatan</p>

            <div class="not-prin">
                <div class="noticia-principal">
                    <a href="#">
                        <img src="img/noticias/Noticia-1.jpg" alt="" class="imagen-noticia-principal">
                    <div class="bloque-texto">
                        <div class="titulo-noticia-principal">
                        <b>BIENVENIDO MAHER</b>
                        </div>
                        <div class="descripcion-noticia-principal">
                            Presentamos a nuestro nuevo streamer directamente desde Brasil.
                        </div>
                    </div>
                    </a>
                </div>
            </div>
            <div class="noticias-secundarias">
                <div class="noticia-secundaria">
                    <a href="#"><img src="img/noticias/Noticia-2-Media-Day.jpg" alt="" class="imagen-noticia-secundaria">
                    <div class="bloque-texto">
                        <div class="titulo-noticia-secundaria">
                            <b>¡CÁMARAS, ACCIÓN!</b>
                        </div>
                        <div class="descripcion-noticia-secundaria">
                            Nuestros roster de LoL, Valorant, CS:GO y Staff tuvieron su Media Day.
                        </div>
                    </div></a> 
                </div>
                <div class="noticia-secundaria">
                    <a href="#"><img src="img/noticias/Noticia-3-Valorant-Challengers.jpg" alt="" class="imagen-noticia-secundaria">
                    <div class="bloque-texto">
                        <div class="titulo-noticia-secundaria">
                        <b>A  UN PASO DE LAS MASTERS</b>
                        </div>
                        <div class="descripcion-noticia-secundaria">
                            Caímos 0-2 ante MetaGaming y nos quedamos a un paso del objetivo.
                        </div>
                    </div></a>        
                </div>
                <div class="noticia-secundaria">
                    <a href="#"><img src="img/noticias/Noticia-4-LOL.jpg" alt="" class="imagen-noticia-secundaria">
                    <div class="bloque-texto">
                        <div class="titulo-noticia-secundaria">
                        <b>VICTORIA CLÁSICA</b>
                        </div>
                        <div class="descripcion-noticia-secundaria">
                            Nuestro equipo de LoL se llevó otro triunfo ante Boca Juniors en la Liga Master Flow.
                        </div>
                    </div> </a> 
                </div>
            </div>
            
        </div>
    </section>

    <div class="separacion"></div>

    <section class="sponsors wow">
        <div class="logos-sponsors">
            <img src="img/sponsors/cultura-geek.png" alt="cultura geek" class="wow animate__animated animate__fadeInUp" data-wow-delay="400ms">
            <img src="img/sponsors/aftech2.png" alt="aftech" class="wow animate__animated animate__fadeInUp" data-wow-delay="700ms">
            <img src="img/sponsors/iRobot-sponsor.png" alt="iRobot" class="wow animate__animated animate__fadeInUp" data-wow-delay="500ms">
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