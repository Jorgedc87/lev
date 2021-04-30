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

    if(isset($_GET['creador'])){
        $creador = $_GET['creador'];
        ?>
            <div class="fondo-creadores">
                <?php
                    switch($creador){
                        case 1:
                            ?>
                                <div class="creador">Maher</div>

                                <div class="separacion"></div>
                            <?php
                            break;
                        case 2:
                            ?>
                                <div class="creador">dani biondi</div>

                                <div class="separacion"></div>
                            <?php
                            break;
                        case 3:
                            ?>
                                <div class="creador">maanuhd</div>

                                <div class="separacion"></div>
                            <?php
                            break;
                    }
                ?>
            </div>
        <?php
        

        switch($creador){

            case 1:
                ?>
                <section class="creadores">
                    <div class="creadores__contenedor">
                        <div class="columna-img padding-top">
                            <img src="img/creadores/pruebaimg1.jpg" alt="prueba imagen">
                        </div>
                        <div class="columna-texto padding-top">
                            <div class="creadores__titulo">
                                José 'Maher' Perez
                            </div>
                            <div class="creadores__copete">
                            "Lorem ipsum dolor sit amet consectetur adipiscing elit tellus penatibus et justo, vel leo sapien sed parturient cubilia pulvinar rhoncus dui netus posuere, commodo curabitur duis quisque est primis nisi habitasse sollicitudin cum."
                            </div>
                            <div class="creadores__texto">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis lectus sem risus vel habitasse viverra, libero pellentesque elementum magnis dictumst duis conubia velit scelerisque per aliquam odio litora. Gravida quisque nisl purus laoreet per nec lobortis montes class nibh in eget suspendisse, massa nam odio pharetra habitasse arcu eros mi risus cum justo. Dui libero enim sollicitudin nec fusce felis euismod nisl curabitur aenean, tincidunt vitae consequat pulvinar suscipit morbi quam purus hendrerit dapibus, duis cursus id rhoncus volutpat vulputate a vel tempus. Id donec gravida magnis dictumst porttitor quisque venenatis dictum parturient molestie montes, imperdiet erat nisl maecenas ut cras vehicula volutpat tincidunt aliquam.
                            <br><br>
                            Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.
                            </div>
                        </div>
                        <div class="columna-texto padding-top">
                            
                            <div class="creadores__texto">
                            <h5>Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.</h5>
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis lectus sem risus vel habitasse viverra, libero pellentesque elementum magnis dictumst duis conubia velit scelerisque per aliquam odio litora. Gravida quisque nisl purus laoreet per nec lobortis montes class nibh in eget suspendisse, massa nam odio pharetra habitasse arcu eros mi risus cum justo. Dui libero enim sollicitudin nec fusce felis euismod nisl curabitur aenean, tincidunt vitae consequat pulvinar suscipit morbi quam purus hendrerit dapibus, duis cursus id rhoncus volutpat vulputate a vel tempus. Id donec gravida magnis dictumst porttitor quisque venenatis dictum parturient molestie montes, imperdiet erat nisl maecenas ut cras vehicula volutpat tincidunt aliquam.


                            </div>
                        </div>
                        <div class="columna-img padding-top">
                            <img src="img/creadores/pruebaimg1.jpg" alt="prueba imagen">
                        </div>
                    </div>
                </section>
                <div class="separacion"></div>
                <div class="separador-creadores">
                    <div class="creador">
                        <div class="">Creador</div>
                    </div>

                </div>
                <div class="separacion"></div>
                <section class="creadores">
                    
                <div class="creadores__contenedor2">
                        <div class="columna-texto padding-top">
                            <div class="creadores__titulo">
                                LOREM IPSUM
                            </div>
                            
                            <div class="creadores__texto">
                            <h5>Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.</h5>
                            </div>
                        </div>
                        
                        <div class="columna-img padding-bottom">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/YrlRcRC-Kr4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>

                <?php
                break;
            case 2:
                ?>
                <section class="creadores">
                    <div class="creadores__contenedor">
                        <div class="columna-img padding-top">
                            <img src="img/creadores/pruebaimg1.jpg" alt="prueba imagen">
                        </div>
                        <div class="columna-texto padding-top">
                            <div class="creadores__titulo">
                                Daniel Biondi
                            </div>
                            <div class="creadores__copete">
                            "Lorem ipsum dolor sit amet consectetur adipiscing elit tellus penatibus et justo, vel leo sapien sed parturient cubilia pulvinar rhoncus dui netus posuere, commodo curabitur duis quisque est primis nisi habitasse sollicitudin cum."
                            </div>
                            <div class="creadores__texto">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis lectus sem risus vel habitasse viverra, libero pellentesque elementum magnis dictumst duis conubia velit scelerisque per aliquam odio litora. Gravida quisque nisl purus laoreet per nec lobortis montes class nibh in eget suspendisse, massa nam odio pharetra habitasse arcu eros mi risus cum justo. Dui libero enim sollicitudin nec fusce felis euismod nisl curabitur aenean, tincidunt vitae consequat pulvinar suscipit morbi quam purus hendrerit dapibus, duis cursus id rhoncus volutpat vulputate a vel tempus. Id donec gravida magnis dictumst porttitor quisque venenatis dictum parturient molestie montes, imperdiet erat nisl maecenas ut cras vehicula volutpat tincidunt aliquam.
                            <br><br>
                            Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.
                            </div>
                        </div>
                        <div class="columna-texto padding-top">
                            
                            <div class="creadores__texto">
                            <h5>Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.</h5>
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis lectus sem risus vel habitasse viverra, libero pellentesque elementum magnis dictumst duis conubia velit scelerisque per aliquam odio litora. Gravida quisque nisl purus laoreet per nec lobortis montes class nibh in eget suspendisse, massa nam odio pharetra habitasse arcu eros mi risus cum justo. Dui libero enim sollicitudin nec fusce felis euismod nisl curabitur aenean, tincidunt vitae consequat pulvinar suscipit morbi quam purus hendrerit dapibus, duis cursus id rhoncus volutpat vulputate a vel tempus. Id donec gravida magnis dictumst porttitor quisque venenatis dictum parturient molestie montes, imperdiet erat nisl maecenas ut cras vehicula volutpat tincidunt aliquam.


                            </div>
                        </div>
                        <div class="columna-img padding-top">
                            <img src="img/creadores/pruebaimg1.jpg" alt="prueba imagen">
                        </div>
                    </div>
                </section>
                <div class="separacion"></div>
                <div class="separador-creadores">
                    <div class="creador">
                        <div class="">Creador</div>
                    </div>

                </div>
                <div class="separacion"></div>
                <section class="creadores">
                    
                <div class="creadores__contenedor2">
                        <div class="columna-texto padding-top">
                            <div class="creadores__titulo">
                                LOREM IPSUM
                            </div>
                            
                            <div class="creadores__texto">
                            <h5>Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.</h5>
                            </div>
                        </div>
                        
                        <div class="columna-img padding-bottom">
                            <iframe src="https://www.youtube.com/embed/YrlRcRC-Kr4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>

                <?php
                break;
            case 3:
                ?>
                <section class="creadores">
                    <div class="creadores__contenedor">
                        <div class="columna-img padding-top">
                            <img src="img/creadores/pruebaimg1.jpg" alt="prueba imagen">
                        </div>
                        <div class="columna-texto padding-top">
                            <div class="creadores__titulo">
                                Manuel 'Manuuhd' Rodriguez
                            </div>
                            <div class="creadores__copete">
                            "Lorem ipsum dolor sit amet consectetur adipiscing elit tellus penatibus et justo, vel leo sapien sed parturient cubilia pulvinar rhoncus dui netus posuere, commodo curabitur duis quisque est primis nisi habitasse sollicitudin cum."
                            </div>
                            <div class="creadores__texto">
                            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis lectus sem risus vel habitasse viverra, libero pellentesque elementum magnis dictumst duis conubia velit scelerisque per aliquam odio litora. Gravida quisque nisl purus laoreet per nec lobortis montes class nibh in eget suspendisse, massa nam odio pharetra habitasse arcu eros mi risus cum justo. Dui libero enim sollicitudin nec fusce felis euismod nisl curabitur aenean, tincidunt vitae consequat pulvinar suscipit morbi quam purus hendrerit dapibus, duis cursus id rhoncus volutpat vulputate a vel tempus. Id donec gravida magnis dictumst porttitor quisque venenatis dictum parturient molestie montes, imperdiet erat nisl maecenas ut cras vehicula volutpat tincidunt aliquam.
                            <br><br>
                            Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.
                            </div>
                        </div>
                        <div class="columna-texto padding-top">
                            
                            <div class="creadores__texto">
                            <h5>Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.</h5>
                            <br><br>
                            Lorem ipsum dolor sit amet consectetur adipiscing elit facilisis lectus sem risus vel habitasse viverra, libero pellentesque elementum magnis dictumst duis conubia velit scelerisque per aliquam odio litora. Gravida quisque nisl purus laoreet per nec lobortis montes class nibh in eget suspendisse, massa nam odio pharetra habitasse arcu eros mi risus cum justo. Dui libero enim sollicitudin nec fusce felis euismod nisl curabitur aenean, tincidunt vitae consequat pulvinar suscipit morbi quam purus hendrerit dapibus, duis cursus id rhoncus volutpat vulputate a vel tempus. Id donec gravida magnis dictumst porttitor quisque venenatis dictum parturient molestie montes, imperdiet erat nisl maecenas ut cras vehicula volutpat tincidunt aliquam.


                            </div>
                        </div>
                        <div class="columna-img padding-top">
                            <img src="img/creadores/pruebaimg1.jpg" alt="prueba imagen">
                        </div>
                    </div>
                </section>
                <div class="separacion"></div>
                <div class="separador-creadores">
                    <div class="creador">
                        <div class="">Creador</div>
                    </div>

                </div>
                <div class="separacion"></div>
                <section class="creadores">
                    
                <div class="creadores__contenedor2">
                        <div class="columna-texto padding-top">
                            <div class="creadores__titulo">
                                LOREM IPSUM
                            </div>
                            
                            <div class="creadores__texto">
                            <h5>Massa praesent potenti quisque nibh sem congue volutpat facilisis rhoncus, semper faucibus augue in elementum fermentum ornare. Ultrices dis etiam faucibus leo accumsan sem imperdiet orci ullamcorper himenaeos, cursus egestas montes aenean justo cum sagittis mus curae dictum senectus.</h5>
                            </div>
                        </div>
                        
                        <div class="columna-img padding-bottom">
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/YrlRcRC-Kr4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </section>

                <?php
                break;


        }
    }
    ?>

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