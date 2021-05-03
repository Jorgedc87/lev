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
                <h1>LVP Liga Master Flow: San Lorenzo Leviatán venció por 3 a 1 a River en la final y es el campeón argentino de League of Legends</h1>
            </div>
            <div class="noticia__autor">
                Por Gobbero (03/05/2021)
            </div>
            <div class="noticia__copete">
            San Lorenzo Leviatán logró imponerse ante las mejores escuadras de League of Legends de Argentina y se coronó campeón de la Liga Master Flow tras derrotar como una aplanadora a River Plate por 3 a 1, al mejor de cinco, en la final. Con Sunblast, King, Brucer, Luskka y Shmebu como protagonistas, los Cuervos plantearon un gran juego colectivo y ofensivo ante el Millonario para poder llevarse el trofeo a casa.            </div>
            <div class="noticia__texto">
                <p>Ahora la <b>Copa de la Liga Master Flow</b>, en esta renovada liga de 12 equipos, queda en manos de San Lorenzo en su campeonato debut, de la mano de la escuadra palermitana <b>Leviatán que revolucionó los esports</b>. San Lorenzo había conseguido el segundo puesto de la liga en la fase regular y ahora se corona como campeón debutante, con el objetivo en el ascenso a la <b>LLA en diciembre.</b></p>
                <img src="img/noticias/noticia-1/img1-noticia1.jpeg" alt="campeon leviatan">
                
                <p>En los primeros minutos ambas escuadras jugaron de manera pasiva, y los intercambios se dieron en las peleas por los súbditos de la jungla. Los jugadores de <b>San Lorenzo</b> dominaron en las líneas, por lo que <b>Shookz fue muy activo</b> en los carriles con su Udyr para ayudar a sus compañeros. <b>Si bien el Azulgrana dominó</b> las peleas en equipo con <b>Lusska y Shmebu</b> como figuras, <b>River Plate</b> concretó la mayoría de los objetivos.</p>
                
                <p><b>Los Cuervos</b> supieron bien cuando plantear las team fights y cuando pelear por los dragones. La igualdad predominó hasta el minuto 30, donde <b>San Lorenzo</b> se distanció en oro tras cuatro asesinatos. A pesar de esto, <b>La Banda</b> logró responder con un <b>Baron Nashor</b> con el cual consiguieron una buena presión. Finalmente, El Millonario se desposicionó al empujar el carril inferior y quedó expuesto ante un conjunto <b>Azulgrana que no solo consiguió un exterminio</b>, sino que también se llevó la <b>victoria</b>..</p>

                <img src="img/noticias/noticia-1/img2-noticia1.jpeg" alt="">

                <p>A diferencia del encuentro anterior, ambas escuadras fueron muy ofensivas en los primeros minutos. Sin embargo, <b>San Lorenzo dominó</b> la presión en las líneas y logró llevarse el primer dragón. A pesar de esto, <b>Shookz rotó muy bien con Udyr</b> y pudo despertar a su equipo. Si bien <b>River</b> se movió de forma excelente en equipo, <b>Sunblast escaló muy fácilmente en el carril superior con Gankplank</b> ya que estuvo muy solo y destruyó la primera estructura.</p>

                <p>Abanderados por el <b>Azir de Brucer</b>, <b>San Lorenzo</b> sacó muchas ventajas en las team fights y concretó un <b>Baron Nashor</b> con el cual consiguieron muchas ventajas en torres. A pesar de la amplia ventaja, <b>La Banda comenzó a dominar las peleas</b> y comenzó a igualar la partida. Como en el encuentro anterior, un exterminio por parte del <b>Azulgrana</b> le abrió las puertas al nexo rival y pusieron la serie 2 a 0.</p>
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