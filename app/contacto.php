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

    

    <section class="sponsors wow">
        <div class="logos-sponsors">
            <img src="img/sponsors/cultura-geek.png" alt="cultura geek" class="wow animate__animated animate__fadeInUp" data-wow-delay="400ms">
            <img src="img/sponsors/aftech2.png" alt="aftech" class="wow animate__animated animate__fadeInUp" data-wow-delay="700ms">
            <img src="img/sponsors/iRobot-sponsor.png" alt="iRobot" class="wow animate__animated animate__fadeInUp" data-wow-delay="500ms">
        </div>
    </section>

    

    <div class="separacion"></div>
        
    <section class="redes">
        <h3>Redes <b>Sociales</b></h3>

        <div class="contenido-redes">
            <div class="red-social wow animate__animated animate__fadeInUp" data-wow-delay="350ms"><a href="https://www.facebook.com/LeviatanGG "><img src="img/social/fb.png" alt="fb"></a></div>
            <div class="red-social wow animate__animated animate__fadeInUp" data-wow-delay="250ms"><a href="https://twitter.com/leviatangg"><img src="img/social/twitter.png" alt="fb"></a></div>
            <div class="red-social wow animate__animated animate__fadeInUp" data-wow-delay="550ms"><a href="https://www.youtube.com/channel/UCBxiTChY1AtBDfoNOQAQnEw"><img src="img/social/yt.png" alt="fb"></a></div>
            <div class="red-social wow animate__animated animate__fadeInUp" data-wow-delay="250ms"><a href="https://www.twitch.tv/LeviatanLIVE"><img src="img/social/twitch.png" alt="fb"></a></div>
            <div class="red-social wow animate__animated animate__fadeInUp" data-wow-delay="450ms"><a href="https://www.instagram.com/leviatangg/"><img src="img/social/instagram.png" alt="fb"></a></div>
            <div class="red-social wow animate__animated animate__fadeInUp" data-wow-delay="250ms"><a href="https://www.linkedin.com/in/fernando-diez-1a40954b/"><img src="img/social/in.png" alt="fb"></a></div>
            
        </div>
    </section>

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