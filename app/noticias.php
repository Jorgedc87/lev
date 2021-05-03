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
            <div class="titulos">
                <span>Novedades</span>
            </div>
            <!-- <p>Conocé los últimos acontecimientos y novedades de Leviatan</p> -->

            <div class="noticias-secundarias">
                <div class="noticia-secundaria animate__animated animate__fadeInLeft wow" data-wow-delay="600ms">
                    <a href="noticia-1.php">
                        <div class="fondo__noticia1">
                            <div class="bloque-texto">
                                <div class="titulo-noticia-secundaria">
                                    <b>GAMING</b>
                                </div>
                                <div class="descripcion-noticia-secundaria">
                                San Lorenzo venció a River Plate Games es el campeón de la Liga Master Flow.
                                </div>
                                <div class="fecha-noticia-secundaria">
                                    03 de Mayo, 2021
                                </div>
                            </div>
                        </div> 
                    </a>                   
                </div>
                <div class="noticia-secundaria animate__animated animate__fadeInLeft wow" data-wow-delay="500ms">
                    <a href="noticia-2.php">
                        <div class="fondo__noticia2">
                            <div class="bloque-texto">
                                <div class="titulo-noticia-secundaria">
                                    <b>NOTICIA</b>
                                </div>
                                <div class="descripcion-noticia-secundaria">
                                Leviatán Esports y Coscu Army son los últimos semifinalistas de la Unity League Flow
                                </div>
                                <div class="fecha-noticia-secundaria">
                                    26 de Abril, 2021
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="noticia-secundaria animate__animated animate__fadeInLeft wow" data-wow-delay="400ms">
                    <a href="noticia-3.php">
                        <div class="fondo__noticia3">
                            <div class="bloque-texto">
                                <div class="titulo-noticia-secundaria">
                                <b>NOTICIA</b>
                                </div>
                                <div class="descripcion-noticia-secundaria">
                                    Caímos 0-2 ante MetaGaming y nos quedamos a un paso del objetivo.
                                </div>
                                <div class="fecha-noticia-secundaria">
                                    24 de Abril, 2021
                                </div>
                            </div>
                        </div>
                    </a>    
                </div>
                <div class="noticia-secundaria animate__animated animate__fadeInLeft wow" data-wow-delay="300ms">
                    <a href="noticia-4.php">
                        <div class="fondo__noticia4">
                            <div class="bloque-texto">
                                <div class="titulo-noticia-secundaria">
                                <b>GAMING</b>
                                </div>
                                <div class="descripcion-noticia-secundaria">
                                    Nuestro equipo de LoL se llevó otro triunfo ante Boca Juniors en la Liga Master Flow.
                                </div>
                                <div class="fecha-noticia-secundaria">
                                    02 de Mayo, 2021
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>
                
                
            </div>
            <div class="lista_noticias"><a href="#">< 1 2 3 .. 13 ></a></div>
            
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