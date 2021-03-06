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

    <div class="fondo-contacto">
        
    </div>

    <section class="contacto">
        <div class="contactos__contenedor">
            <div class="inner-header">
                <div class="contacto__inner imagen__contacto">
                    
                    <div class="jugador__detalle">
                        <span class="animate__animated animate__fadeInDown wow" data-wow-delay="350ms">
                            Contactate con nosotros
                        </span>
                    </div>
                </div>
            </div>
            <div class="inner-body">
                <div class="recuadro__superior">
                    <div class="texto__superior">
                        Envíanos tus dudas, nuestro equipo se pondrá en contacto con vos lo más pronto posible.
                    </div>
                </div>
                <div class="recuadro__inferior">
                    <label for="">Nombre</label> 
                    <input type="text" placeholder="Nombre">
                    <label for="">E-mail</label> 
                    <input type="email" placeholder="Correo Electronico">
                    <label for="">Mensaje</label> 
                    <textarea rows="10"></textarea>
                    <button class="enviar">Enviar</button>
                </div>
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