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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" />
    <title>Leviatan eSports</title>
</head>
<body>
    
    <header class="header-nav">
        <div class="nav-prin"><?php include('includes/menu-top.php')?></div>
        <div class="nav-prin"><?php include('includes/side-menu.php')?></div>
    </header>
    <div class="prueba"></div>

    <section class="principal">
        <div class="imgOverlay">
            <div class="titulo">
                <a href="#"><h4>#BeLeviatán</h4></a>
            </div>
        </div>
        <div class="imgPrincipal">
            <video controlsList="nodownload noremoteplayback" autoplay muted loop>
                    <source src="video/leviatan-intro.mp4" type="video/mp4">
            </video>
        </div>        
    </section>

    <!-- <div class="separacion"></div>

    <section class="sponsors wow">
        <div class="logos-sponsors">
            <img src="img/sponsors/cultura-geek.png" alt="cultura geek" class="wow animate__animated animate__fadeInUp" data-wow-delay="400ms">
            <img src="img/sponsors/aftech2.png" alt="aftech" class="wow animate__animated animate__fadeInUp" data-wow-delay="700ms">
            <img src="img/sponsors/iRobot-sponsor.png" alt="iRobot" class="wow animate__animated animate__fadeInUp" data-wow-delay="500ms">
        </div>
    </section> -->

    <div class="separacion"></div>

    <section class="noticias wow">
        <div class="sponsors wow animate__animated animate__fadeInUp">
            <div class="logos-sponsors">
                <img src="img/sponsors/cultura-geek.png" alt="cultura geek" class="wow animate__animated animate__fadeInUp img__sponsor" data-wow-delay="400ms">
                <img src="img/teams/valorant/separacion.png" alt="separacion logo" class="img__sep">
                <img src="img/sponsors/aftech2.png" alt="aftech" class="wow animate__animated animate__fadeInUp img__sponsor" data-wow-delay="700ms">
                <img src="img/teams/valorant/separacion.png" alt="separacion logo" class="img__sep">
                <img src="img/sponsors/iRobot-sponsor.png" alt="iRobot" class="wow animate__animated animate__fadeInUp img__sponsor" data-wow-delay="500ms">
            </div>
        </div>
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
                    <a href="#">
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
                    <a href="#">
                        <div class="fondo__noticia4">
                            <div class="bloque-texto">
                                <div class="titulo-noticia-secundaria">
                                <b>GAMING</b>
                                </div>
                                <div class="descripcion-noticia-secundaria">
                                    Nuestro equipo de LoL se llevó otro triunfo ante Boca Juniors en la Liga Master Flow.
                                </div>
                                <div class="fecha-noticia-secundaria">
                                    23 de Abril, 2021
                                </div>
                            </div> 
                        </div>
                    </a>
                </div>
                
                
            </div>
            <div class="vermas"><a href="noticias.php">Ver más ></a></div>
            
        </div>
    </section>

    <div class="separacion"></div>

    <section class="documental">
        <div class="imgOverlay">
            <div class="cuadro">
                <div class="logo__lev">
                    <img src="img/documental/textLEVIATÁN.png" alt="">
                </div>
                <div class="episodio__lev">
                    <span>Ya disponible</span>
                    <p>Capitulo 2. Road to Glory</p>
                </div>
                <div class="descripcion__lev">
                    <p>Nuestro equipo de League of Legends tiene el último desafío: La final ante River Plate por la Liga Master Flow</p> 
                </div>
                
                <div class="reproducir__lev">
                    <a href="#"><p><b>Reproducir</b></p></a>
                </div>
            </div>

        </div>
        <div class="imgPrincipal">
            <video controlsList="nodownload noremoteplayback" autoplay muted loop>
                    <source src="video/preview-doc.mp4" type="video/mp4">
            </video>
        </div>        
    </section>

    <div class="separacion"></div>

    <section class="equipos contenedor__default">
        <div class="titulos">
            <span>Equipos</span>
        </div>

        <div class="botones">
            <div class="boton__equipo animate__animated animate__fadeInLeft wow" data-wow-delay="200ms"><a href="team-lol.php"><img src="img/LOL.jpg" alt="lol"></a></div>
            <div class="boton__equipo animate__animated animate__fadeInRight wow" data-wow-delay="300ms"><a href="team-csgo.php"><img src="img/CSGO.jpg" alt="csgo"></a></div>
            <div class="boton__equipo animate__animated animate__fadeInLeft wow" data-wow-delay="400ms"><a href="team-valorant.php"><img src="img/VAL.jpg" alt="valorant"></a></div>
            <div class="boton__equipo animate__animated animate__fadeInRight wow" data-wow-delay="500ms"><a href="#"><img src="img/R6.jpg" alt="rainbow six"></a></div>
            <div class="boton__equipo animate__animated animate__fadeInRight wow" data-wow-delay="600ms"><a href="#"><img src="img/LOL-WILD-RIFT.jpg" alt="wildrift"></a></div>
            <div class="boton__equipo animate__animated animate__fadeInRight wow" data-wow-delay="700ms"><a href="#"><img src="img/FREEFIRE.jpg" alt="FREEFIRE"></a></div>
        </div>
    </section>

    <div class="separacion"></div>

    <section class="shop wow">

         <div class="imgOverlay">
         <!-- <img src="img/shop/shopIndex.jpg" alt=""> -->
            <div class="contenedor__default cuadro">
                <div class="producto__lev">
                    <img class="wow animate__animated animate__fadeInUp" data-wow-delay="700ms" src="img/shop/camisetaIndex.png" alt="">
                </div>
                <div class="cuadro__comprar">
                    <div class="episodio__lev">
                        <div class="cuadro__producto">
                            <span class="wow animate__animated animate__fadeInRight" data-wow-delay="200ms">JERSEY</span>
                            <span class="wow animate__animated animate__fadeInRight" data-wow-delay="250ms">Pro Gaming</span>
                        </div>
                    </div>
                    <div class="descripcion__lev wow animate__animated animate__fadeInRight" data-wow-delay="300ms">
                        <p>Ya disponible en la tienda. <br> Lleva la piel de Leviatan</p> 
                    </div>
                    <div class="comprar__lev">
                        <a href="#"><p class="wow animate__animated animate__fadeInRight" data-wow-delay="500ms"><b>Comprar YA</b></p></a>
                        <img src="img/shop/tarjetas_credito.png" alt="" class="wow animate__animated animate__fadeInRight" data-wow-delay="600ms">
                        <span class="wow animate__animated animate__fadeInRight" data-wow-delay="700ms">* Envío gratis</span>
                    </div>
                    
                </div
            </div>

        </div>
        
    </section>

    

    <div class="separacion"></div>

    <section class="calendario">
        <h3>PRÓXIMAS <b>COMPETENCIAS</b></h3>
        <p>Podés alentarnos en las siguientes fechas:</p>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/lol-btn.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>MAR 2/3 - 21:00HS</span><br>VS River Plate Gaming</b></div>
            <div class="vivo"></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/csgo.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/unity-league.png" alt="liga-master"></div>
            <div class="rival"><b><span>MIE 3/3 - 21:00HS</span><br>VS Stone Esports</b></div>
            <div class="vivo"><i class="fas fa-circle"></i> <span>EN VIVO</span></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/lol-btn.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>JUE 4/3 - 23:00HS</span><br>VS Naguara</b></div>
            <div class="vivo"><i class="fas fa-circle"></i> <span>EN VIVO</span></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/lol-btn.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>VIE 5/3 - 23:50HS</span><br>VS Savage esports</b></div>
            <div class="vivo"></div>
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
    <script>
        $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            1000:{
                items:5
            }
        }
    })
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