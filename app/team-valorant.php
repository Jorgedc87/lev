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

    <?php
    if(!isset($_GET['jugador'])){
        ?>
        <section class="roster">
        <div class="roster__valorant">
            <div class="contenedor-teams roster__valorant--juego">
                <div class="roster__valorant--game"><img src="img/teams/valorant/valorantlogo.png" alt="valorant logo"></div>
                <div class="roster__valorant--separacion"><img src="img/teams/valorant/separacion.png" alt="separacion logo"></div>
                <div class="roster__valorant--rooster"><img src="img/teams/valorant/roster.png" alt="roster logo"></div>
            </div>
            <div class="contenedor-teams roster__valorant--jugadores">
                <div class="roster__valorant--jugador">
                    <a href="team-valorant.php?jugador=1">
                    <img src="img/teams/valorant/face1.png" alt="jugador logo">
                    <div class="id__jugador"><b>KNZY</b></div>
                    <div class="nombre__jugador">SOVA IGL</div>
                    </a>
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-valorant.php?jugador=2">
                    <img src="img/teams/valorant/face2.png" alt="jugador logo">
                    <div class="id__jugador"><b>BULLZ</b></div>
                    <div class="nombre__jugador">CYPHER</div>
                    </a>        
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-valorant.php?jugador=3">
                    <img src="img/teams/valorant/face3.png" alt="jugador logo">
                    <div class="id__jugador"><b>SAFIRO</b></div>
                    <div class="nombre__jugador">JETT</div>
                    </a>        
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-valorant.php?jugador=4"> 
                    <img src="img/teams/valorant/face4.png" alt="jugador logo">
                    <div class="id__jugador"><b>KATAX</b></div>
                    <div class="nombre__jugador">REYNA</div>
                    </a>          
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-valorant.php?jugador=5">
                    <img src="img/teams/valorant/face5.png" alt="jugador logo">
                    <div class="id__jugador"><b>KARDASH</b></div>
                    <div class="nombre__jugador">BRIMSTONE</div>
                    </a>
                </div>
            </div>
            <div class="contenedor-teams roster__valorant--juego">
                <div class="roster__valorant--game"><img src="img/teams/valorant/headcoach.png" alt="valorant logo"></div>
                <div class="roster__valorant--separacion"><img src="img/teams/valorant/logoleviatan.png" alt="separacion logo"></div>
                <div class="roster__valorant--rooster"><img src="img/teams/valorant/manager.png" alt="roster logo"></div>
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
    <?php
    }
    
    ?>
    

    <!-- <div class="separacion"></div> -->

    <?php

    if(isset($_GET['jugador'])){
        $jugador = $_GET['jugador'];
        switch($jugador){
            case 1:

            ?>
            <section class="jugador__valorant jugador__valorant--1">
                
            <div class="jugador__render">
                <img class="animate__animated animate__fadeInLeft wow" src="img/teams/valorant/KNZYrender.png" alt="knzy render" data-wow-delay="300ms">
            </div>

            <!-- <div class="jugador-borde">
                <div class="contenedor-jugador-derecha">

                    <div class="info-jugador">
                        <div class="datos">
                            <div class="bandera"><img src="img/teams/pais/argentina.png" alt="argentina"></div>
                            <div class="idNombrePoss">
                                <div class="id">Sunblast</div>
                                <div class="nombre">Juan Manuel Chapacu - <span>TOP</span></div>    
                            </div>
                            
                            
                        </div>
                        <div class="separacion"></div>
                        <div class="estadisticas">
                            <div class="texto"><b>Temporada</b></div>

                            <div class="texto__temporada">34/28/75 - 3,9 KDA</div>
                        </div>
                        <div class="separacion"></div>
                        <div class="campeones">
                            <div class="texto"><b>Campeones más usados</b></div>
                            <div class="campeones__grid">
                                <div class="campeon">
                                    <img src="img/teams/champs/Gnar.png" alt="gnar">
                                    <div class="campeon__datos">
                                    <div><span>Gnar</span></div>
                                        <div>6 veces jugado</div>
                                        <div>100% WR</div>
                                        <div>17/2/37
                                        </div>
                                    
                                    </div>
                                </div>
                                <div class="campeon">
                                    <img src="img/teams/champs/Renekton.png" alt="renekton">
                                    <div class="campeon__datos">
                                        <div><span>Renekton</span></div>
                                        <div>6 veces jugado</div>
                                        <div>100% WR</div>
                                        <div>17/2/37
                                        </div>
                                    
                                    </div>
                                </div>
                                
                                <div class="campeon">
                                    <img src="img/teams/champs/Akali.png" alt="akali">
                                    <div class="campeon__datos">
                                        <div><span>Akali</span></div>
                                        <div>3 veces jugado</div>
                                        <div>33.33% WR</div>
                                        <div>7/7/7
                                        </div>
                                    
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                

                </div>
            </div> -->

            </section>
            <?php
            break;
            case 2:
                ?>
                <section class="jugador__valorant jugador__valorant--2">

                    <div class="jugador__render">
                        <img class="animate__animated animate__fadeInLeft wow" src="img/teams/valorant/BULLZrender.png" alt="knzy render" data-wow-delay="300ms">
                    </div>
                        
                </section>
                <?php
            break;
            case 3:
                ?>
                <section class="jugador__valorant jugador__valorant--3">

                    <div class="jugador__render">
                        <img class="animate__animated animate__fadeInLeft wow" src="img/teams/valorant/SAFIROrender.png" alt="knzy render" data-wow-delay="300ms">
                    </div>

                </section>
                <?php
            break;
            case 4:
                ?>
                <section class="jugador__valorant jugador__valorant--4">

                <div class="jugador__render">
                    <img class="animate__animated animate__fadeInLeft wow" src="img/teams/valorant/KATAXrender.png" alt="knzy render" data-wow-delay="300ms">
                </div>

                </section>
                <?php
            break;
            case 5:
                ?>
                <section class="jugador__valorant jugador__valorant--5">
                    
                    <div class="jugador__render">
                        <img class="animate__animated animate__fadeInLeft wow" src="img/teams/valorant/KARDASHrender.png" alt="knzy render" data-wow-delay="300ms">
                    </div>
                    
                </section>
            <?php
            break;
        }
    }
    ?>

    <!-- <div class="separacion"></div> -->

    

    <!-- <div class="separacion"></div> -->

    <!-- <div class="separacion"></div>-->

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