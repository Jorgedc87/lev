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
        <section class="roster-lol">
        <div class="roster__lol">
            <div class="contenedor-teams roster__valorant--juego">
                <div class="roster__valorant--game"><img src="img/teams/lol-arg/LOL.png" alt="valorant logo"></div>
                <div class="roster__valorant--separacion"><img src="img/teams/lol-arg/separacion.png" alt="separacion logo"></div>
                <div class="roster__valorant--rooster"><img src="img/teams/lol-arg/ROSTERoficial.png" alt="roster logo"></div>
            </div>
            <div class="contenedor-teams roster__valorant--jugadores">
                <div class="roster__valorant--jugador">
                    <a href="team-lol.php?jugador=1">
                    <img src="img/teams/valorant/face1.png" alt="jugador logo">
                    <div class="id__jugador"><b>KNZY</b></div>
                    <div class="nombre__jugador">SOVA IGL</div>
                    </a>
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-lol.php?jugador=2">
                    <img src="img/teams/valorant/face2.png" alt="jugador logo">
                    <div class="id__jugador"><b>BULLZ</b></div>
                    <div class="nombre__jugador">CYPHER</div>
                    </a>        
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-lol.php?jugador=3">
                    <img src="img/teams/valorant/face3.png" alt="jugador logo">
                    <div class="id__jugador"><b>SAFIRO</b></div>
                    <div class="nombre__jugador">JETT</div>
                    </a>        
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-lol.php?jugador=4"> 
                    <img src="img/teams/valorant/face4.png" alt="jugador logo">
                    <div class="id__jugador"><b>KATAX</b></div>
                    <div class="nombre__jugador">REYNA</div>
                    </a>          
                </div>
                <div class="roster__valorant--jugador">
                    <a href="team-lol.php?jugador=5">
                    <img src="img/teams/valorant/face5.png" alt="jugador logo">
                    <div class="id__jugador"><b>KARDASH</b></div>
                    <div class="nombre__jugador">BRIMSTONE</div>
                    </a>
                </div>
            </div>
            <div class="contenedor-teams roster__valorant--staff">
                <div class="roster__valorant--game"><img src="img/teams/valorant/headcoach.png" alt="head logo"></div>
                <div class="roster__valorant--separacion"><img src="img/teams/valorant/logoleviatan.png" alt="leviatan logo"></div>
                <div class="roster__valorant--rooster"><img src="img/teams/valorant/manager.png" alt="manager logo"></div>
            </div>
        </div>
        
    </section>

    <div class="separacion"></div>

    <section class="calendario">
        <h3>PRÓXIMAS <b>COMPETENCIAS</b></h3>
        <p>Podés alentarnos en las siguientes fechas:</p>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>MAR 2/3 - 21:00HS</span><br>VS River Plate Gaming</b></div>
            <div class="vivo"></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/unity-league.png" alt="liga-master"></div>
            <div class="rival"><b><span>MIE 3/3 - 21:00HS</span><br>VS Stone Esports</b></div>
            <div class="vivo"><i class="fas fa-circle"></i> <span>EN VIVO</span></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>JUE 4/3 - 23:00HS</span><br>VS Naguara</b></div>
            <div class="vivo"><i class="fas fa-circle"></i> <span>EN VIVO</span></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>VIE 5/3 - 23:50HS</span><br>VS Savage esports</b></div>
            <div class="vivo"></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>MAR 2/3 - 21:00HS</span><br>VS River Plate Gaming</b></div>
            <div class="vivo"></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/unity-league.png" alt="liga-master"></div>
            <div class="rival"><b><span>MIE 3/3 - 21:00HS</span><br>VS Stone Esports</b></div>
            <div class="vivo"><i class="fas fa-circle"></i> <span>EN VIVO</span></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
            <div class="separacion-vert"></div>
            <div class="logo-torneo"><img src="img/competencias/liga-master.png" alt="liga-master"></div>
            <div class="rival"><b><span>JUE 4/3 - 23:00HS</span><br>VS Naguara</b></div>
            <div class="vivo"><i class="fas fa-circle"></i> <span>EN VIVO</span></div>
        </div>
        <div class="partida wow animate__animated animate__fadeInLeft" data-wow-delay="350ms"">
            <div class="logo-juego pad-3"><img src="img/Juegos LEVIATAN/valorant.png" alt="lol"></div>
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
        ?>
            <div class="fondo-team fondo-valorant"></div>
        <?php
        $jugador = $_GET['jugador'];
        switch($jugador){
            case 1:

            ?>
            <section class="jugadores__valorant">
                <div class="jugadores__contenedor">
                    <div class="inner-header">
                        <div class="jugador__inner jugador__valorant--1">
                            <figure class="rounded">
                                <img src="img/teams/valorant/KNZYrender.png" alt="knzy render" class="animate__animated animate__fadeInLeft wow" data-wow-delay="350ms">
                            </figure>
                            <div class="jugador__detalle">
                                <span class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">
                                    Jorge Calderón
                                    <img src="img/teams/pais/argentina.png" alt="argentina bandera" style="width: 3rem; height: 1.8rem" class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms">
                                </span>
                                
                                <ul>
                                    <li style="margin-left: -2rem" class="animate__animated animate__fadeInUp wow" data-wow-delay="450ms">
                                        ganstaAHH87
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="inner-body">
                        <div class="jugador__top">
                            <div class="col col-izq detalle__izq">
                                <ul>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="250ms">Equipo Actual</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="300ms">Leviatan</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="350ms">edad</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="400ms">31</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="450ms">Rol</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="500ms">SMOKE</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jugador__bottom">
                            <div class="col col-izq textarea">
                                <div class="text-head">
                                    <h4 class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">Player Bio</h4>
                                    <ul class="jugador__rrss">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="400ms">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="450ms">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="500ms">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="scroll-wrapper scroll-outer animate__animated animate__fadeInDown wow" data-wow-delay="550ms"" style="position: relative">
                                    <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His account was suspended twice for violating Blizzard's Terms Of Use.</p>
                                </div>
                            </div>
                            <div class="col col-der">
                                <ul class="stats">
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="350ms" src="img/teams/valorant/pjs/brimstone.png" alt="brimstone">
                                    
                                    </li>
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms" src="img/teams/valorant/pjs/omen.png" alt="omen">
                                    </li>
                                    <!-- <li>
                                    <img src="img/teams/valorant/pjs/astra.png" alt="astra">
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <?php
            break;
            case 2:
                ?>
                <section class="jugadores__valorant">
                <div class="jugadores__contenedor">
                    <div class="inner-header">
                        <div class="jugador__inner jugador__valorant--1">
                            <figure class="rounded">
                                <img src="img/teams/valorant/KNZYrender.png" alt="knzy render" class="animate__animated animate__fadeInLeft wow" data-wow-delay="350ms">
                            </figure>
                            <div class="jugador__detalle">
                                <span class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">
                                    Jorge Calderón
                                    <img src="img/teams/pais/argentina.png" alt="argentina bandera" style="width: 3rem; height: 1.8rem" class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms">
                                </span>
                                
                                <ul>
                                    <li style="margin-left: -2rem" class="animate__animated animate__fadeInUp wow" data-wow-delay="450ms">
                                        ganstaAHH87
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="inner-body">
                        <div class="jugador__top">
                            <div class="col col-izq detalle__izq">
                                <ul>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="250ms">Equipo Actual</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="300ms">Leviatan</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="350ms">edad</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="400ms">31</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="450ms">Rol</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="500ms">SMOKE</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jugador__bottom">
                            <div class="col col-izq textarea">
                                <div class="text-head">
                                    <h4 class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">Player Bio</h4>
                                    <ul class="jugador__rrss">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="400ms">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="450ms">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="500ms">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="scroll-wrapper scroll-outer animate__animated animate__fadeInDown wow" data-wow-delay="550ms"" style="position: relative">
                                    <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His account was suspended twice for violating Blizzard's Terms Of Use.</p>
                                </div>
                            </div>
                            <div class="col col-der">
                                <ul class="stats">
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="350ms" src="img/teams/valorant/pjs/brimstone.png" alt="brimstone">
                                    
                                    </li>
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms" src="img/teams/valorant/pjs/omen.png" alt="omen">
                                    </li>
                                    <!-- <li>
                                    <img src="img/teams/valorant/pjs/astra.png" alt="astra">
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <?php
            break;
            case 3:
                ?>
                <section class="jugadores__valorant">
                <div class="jugadores__contenedor">
                    <div class="inner-header">
                        <div class="jugador__inner jugador__valorant--1">
                            <figure class="rounded">
                                <img src="img/teams/valorant/KNZYrender.png" alt="knzy render" class="animate__animated animate__fadeInLeft wow" data-wow-delay="350ms">
                            </figure>
                            <div class="jugador__detalle">
                                <span class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">
                                    Jorge Calderón
                                    <img src="img/teams/pais/argentina.png" alt="argentina bandera" style="width: 3rem; height: 1.8rem" class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms">
                                </span>
                                
                                <ul>
                                    <li style="margin-left: -2rem" class="animate__animated animate__fadeInUp wow" data-wow-delay="450ms">
                                        ganstaAHH87
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="inner-body">
                        <div class="jugador__top">
                            <div class="col col-izq detalle__izq">
                                <ul>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="250ms">Equipo Actual</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="300ms">Leviatan</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="350ms">edad</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="400ms">31</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="450ms">Rol</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="500ms">SMOKE</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jugador__bottom">
                            <div class="col col-izq textarea">
                                <div class="text-head">
                                    <h4 class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">Player Bio</h4>
                                    <ul class="jugador__rrss">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="400ms">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="450ms">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="500ms">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="scroll-wrapper scroll-outer animate__animated animate__fadeInDown wow" data-wow-delay="550ms"" style="position: relative">
                                    <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His account was suspended twice for violating Blizzard's Terms Of Use.</p>
                                </div>
                            </div>
                            <div class="col col-der">
                                <ul class="stats">
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="350ms" src="img/teams/valorant/pjs/brimstone.png" alt="brimstone">
                                    
                                    </li>
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms" src="img/teams/valorant/pjs/omen.png" alt="omen">
                                    </li>
                                    <!-- <li>
                                    <img src="img/teams/valorant/pjs/astra.png" alt="astra">
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <?php
            break;
            case 4:
                ?>
                <section class="jugadores__valorant">
                <div class="jugadores__contenedor">
                    <div class="inner-header">
                        <div class="jugador__inner jugador__valorant--1">
                            <figure class="rounded">
                                <img src="img/teams/valorant/KNZYrender.png" alt="knzy render" class="animate__animated animate__fadeInLeft wow" data-wow-delay="350ms">
                            </figure>
                            <div class="jugador__detalle">
                                <span class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">
                                    Jorge Calderón
                                    <img src="img/teams/pais/argentina.png" alt="argentina bandera" style="width: 3rem; height: 1.8rem" class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms">
                                </span>
                                
                                <ul>
                                    <li style="margin-left: -2rem" class="animate__animated animate__fadeInUp wow" data-wow-delay="450ms">
                                        ganstaAHH87
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="inner-body">
                        <div class="jugador__top">
                            <div class="col col-izq detalle__izq">
                                <ul>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="250ms">Equipo Actual</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="300ms">Leviatan</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="350ms">edad</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="400ms">31</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="450ms">Rol</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="500ms">SMOKE</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jugador__bottom">
                            <div class="col col-izq textarea">
                                <div class="text-head">
                                    <h4 class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">Player Bio</h4>
                                    <ul class="jugador__rrss">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="400ms">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="450ms">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="500ms">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="scroll-wrapper scroll-outer animate__animated animate__fadeInDown wow" data-wow-delay="550ms"" style="position: relative">
                                    <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His account was suspended twice for violating Blizzard's Terms Of Use.</p>
                                </div>
                            </div>
                            <div class="col col-der">
                                <ul class="stats">
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="350ms" src="img/teams/valorant/pjs/brimstone.png" alt="brimstone">
                                    
                                    </li>
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms" src="img/teams/valorant/pjs/omen.png" alt="omen">
                                    </li>
                                    <!-- <li>
                                    <img src="img/teams/valorant/pjs/astra.png" alt="astra">
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
                <?php
            break;
            case 5:
                ?>
                <section class="jugadores__valorant">
                <div class="jugadores__contenedor">
                    <div class="inner-header">
                        <div class="jugador__inner jugador__valorant--1">
                            <figure class="rounded">
                                <img src="img/teams/valorant/KNZYrender.png" alt="knzy render" class="animate__animated animate__fadeInLeft wow" data-wow-delay="350ms">
                            </figure>
                            <div class="jugador__detalle">
                                <span class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">
                                    Jorge Calderón
                                    <img src="img/teams/pais/argentina.png" alt="argentina bandera" style="width: 3rem; height: 1.8rem" class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms">
                                </span>
                                
                                <ul>
                                    <li style="margin-left: -2rem" class="animate__animated animate__fadeInUp wow" data-wow-delay="450ms">
                                        ganstaAHH87
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="inner-body">
                        <div class="jugador__top">
                            <div class="col col-izq detalle__izq">
                                <ul>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="250ms">Equipo Actual</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="300ms">Leviatan</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="350ms">edad</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="400ms">31</span>
                                    </li>
                                    <li>
                                        <span class="label animate__animated animate__fadeInUp wow" data-wow-delay="450ms">Rol</span>
                                        <span class="name animate__animated animate__fadeInUp wow" data-wow-delay="500ms">SMOKE</span>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="jugador__bottom">
                            <div class="col col-izq textarea">
                                <div class="text-head">
                                    <h4 class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">Player Bio</h4>
                                    <ul class="jugador__rrss">
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="400ms">
                                                <i class="fab fa-facebook"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="450ms">
                                                <i class="fab fa-twitter"></i>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="https://www.facebook.com/" target="_blank" class="animate__animated animate__fadeInDown wow" data-wow-delay="500ms">
                                                <i class="fab fa-instagram"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </div>

                                <div class="scroll-wrapper scroll-outer animate__animated animate__fadeInDown wow" data-wow-delay="550ms"" style="position: relative">
                                    <p>Prior to major incidents in the Overwatch League, there were known cases of controversial acts. His account was suspended twice for violating Blizzard's Terms Of Use.</p>
                                </div>
                            </div>
                            <div class="col col-der">
                                <ul class="stats">
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="350ms" src="img/teams/valorant/pjs/brimstone.png" alt="brimstone">
                                    
                                    </li>
                                    <li>
                                    <img class="animate__animated animate__fadeInRight wow" data-wow-delay="450ms" src="img/teams/valorant/pjs/omen.png" alt="omen">
                                    </li>
                                    <!-- <li>
                                    <img src="img/teams/valorant/pjs/astra.png" alt="astra">
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
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