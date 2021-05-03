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
            <div class="imagen__noticia">
                
            </div>
        </div>
        <div class="contenido__noticia">
            <div class="noticia__titulo">
                <h1>Bienvenido Maher</h1>
            </div>
            <div class="noticia__autor">
                Por Gobbero (03/05/2021)
            </div>
            <div class="noticia__copete">
                Lorem cillum mollit nostrud est sint consequat occaecat sunt commodo ut. Dolor fugiat ex labore incididunt. Nostrud tempor eiusmod deserunt id aliquip laboris veniam commodo ullamco fugiat aute fugiat. 
            </div>
            <div class="noticia__texto">
                Esse pariatur esse minim Lorem reprehenderit laboris minim ex. Commodo cillum labore reprehenderit dolore ex enim velit. Minim in et incididunt fugiat fugiat officia nulla aute incididunt culpa Lorem laboris. Anim magna incididunt Lorem qui pariatur excepteur ad eu aliqua adipisicing tempor reprehenderit.
               <br><br>
                Proident excepteur Lorem sint do nulla commodo labore aute nisi elit. Quis amet cupidatat ut Lorem dolore fugiat fugiat duis ad deserunt duis consectetur. Et et velit magna voluptate aliquip laboris anim eiusmod non eiusmod exercitation. Deserunt duis dolor enim do irure sit minim laborum quis reprehenderit. Dolor proident officia dolore commodo ut proident.
                <br><br>
                Eiusmod irure velit id esse. Amet culpa non esse adipisicing adipisicing labore aliqua do labore id culpa minim commodo. Ullamco magna esse ea nisi non velit. Esse tempor et id ex eu eiusmod anim aliqua laboris labore dolor. Velit laboris ipsum ea officia elit magna excepteur.
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