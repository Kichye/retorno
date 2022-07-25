<!DOCTYPE html>
<html lang="en">

<head>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>El Retorno</title>
        <link rel="shortcut icon" href="imge/logoelretorno.png" type="image/x-icon">
        <link rel="stylesheet" href="css/estilos.css">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800&display=swap" rel="stylesheet"> 
    </head>
    
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>Panificadora - El Retorno</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
    <link href="style.css" rel="stylesheet">

    <!-- Responsive CSS -->
    <link href="css/responsive/responsive.css" rel="stylesheet">

</head>

<body>
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="imge/big_loading.gif" alt="">
            <img class="preload-2" src="imge/big_loading.gif" alt="">
            <img class="preload-3" src="imge/big_loading.gif" alt="">
        </div>
    </div>

    <!-- ***** Search Form Area 
    <div class="caviar-search-form d-flex align-items-center">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="search-close-btn" id="closeBtn">
                        <i class="pe-7s-close-circle" aria-hidden="true"></i>
                    </div>
                    <form action="#" method="get">
                        <input type="search" name="caviarSearch" id="search" placeholder="Search Your Favourite Dish ...">
                        <input type="submit" class="d-none" value="submit">
                    </form>
                </div>
            </div>
        </div>
    </div>
***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a title="Principal"  href="index.php" class="navbar-brand">
                        <img src="panel2/img/corona_titulo.png" alt="Principal"> El Retorno</a>
                        
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="#about">Quienes Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#menu">Productos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#testimonial">Identidad</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.html">Contacto</a>
                                </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Más</a>
                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="menu.php">Productos Completos</a>
                                        <a class="dropdown-item" href="servicios.html">Sucursales</a>
                                        <a class="dropdown-item" href="trabajo.html">Bolsa de Trabajo</a>
                                    </div>
                                </li>
                            </ul>
                            <!-- Search Btn -->
                            <div class="caviar-search-btn">
                                
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ****** Welcome Area Start ****** -->
    <section class="caviar-hero-area" id="home">
        <!-- Welcome Social Info -->
        <div class="welcome-social-info">
            <a href="https://www.facebook.com/Panificadoraelretorno/"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            <a href="https://www.instagram.com/panificadoraelretorno/?hl=es"><i class="fa fa-instagram" aria-hidden="true"></i></a>
            <a href="https://twitter.com/p_elretorno?lang=es"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            <a href="https://www.youtube.com/channel/UCj8GKrOr0c2D5g_e0MEfgZw/featured"><i class="fa fa-youtube" aria-hidden="true"></i></a>
        </div>




        <?php
        $conexion=mysqli_connect("localhost", "root", "", "loginret");
       
        $sql="SELECT * FROM slider";
        $query=mysqli_query($conexion,$sql);
    ?>

        <!-- Welcome Slides -->
        <div class="caviar-hero-slides owl-carousel">
            <!-- Single Slides -->
            <?php foreach ($query as $row) 
             {  ?> 
                            
                            <?php 
                                    $id = $row['id'];
                                    $nombre = $row ['nombre'];
                                    $desc = $row['descripcion'];
                                    $img =$row['img'];
                                    
                                    ?>
            <div class="single-hero-slides bg-img" style="background-image: url(panel2/<?php echo $img?>);">
                <div class="container h-100">
                    <div class="row h-100 align-items-center">
                        <div class="col-11 col-md-6 col-lg-4">
                            <div class="hero-content">
                                <h2><?php echo $nombre?></h2>
                                <p class="texto-justificado"><?php echo $desc?></p>
                               
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Slider Nav -->
                <div class="hero-slides-nav bg-img" style="background-image: url(panel2/<?php echo $img?>);"></div>
            </div>
            <?php   }   ?>
        </div>
    </section>
    <!-- ****** Welcome Area End ****** -->

    <!-- ****** About Us Area Start ****** -->
    <section class="caviar-about-us-area section-padding-150" id="about">
        <div class="container">
            <!-- About Us Single Area -->
            <div class="row align-items-center">
                <div class="col-12 col-md-6">
                    <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                        <img src="imge/bienvenido.jpg" alt="">
                    </div>
                </div>
                <div class="col-12 col-md-6 col-lg-5 ml-md-auto">
                    <div class="section-heading">
                        <h2>Bienvenido</h2>
                    </div>
                    <div class="about-us-content">
                        <span>Panificadora El Retorno</span>
                        <p class="texto-justificado">El nombre de “Retorno” proviene de la visión de su fundador de recuperar el prestigio que su abuelo había logrado en los años 40 y 60, cuando tenia la Panificadora la Reina, que se hizo famosa por el sabor de sus panes y entre otras cosas por quitarle la corteza al pan de sándwich (hogaza) o (pan de caja) y cortarlo a lo largo para elaborar los arrolladitos de carne molida que más adelante se hacen de paté de queso, hasta llegar al ya famoso sandwichon que no puede faltar en las fiestas.</p>
                    </div>
                </div>
            </div>
            <!-- About Us Single Area -->
           
                
                <div class="row align-items-center pt-200">
                    <div class="col-12 col-md-6 col-lg-5">
                        <h2>Quienes Somos</h2>
                        <div class="about-us-content">
                            <span>El Retorno</span>
                            <p class="texto-justificado">En sus inicios producía únicamente variedad de panes, elaborados por el fundador y 3 panaderos, El Retorno fue la primera panificadora en la Cd. de Mérida que estableció un horario corrido de venta al público el cual mantiene hasta el día de hoy.</p>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 ml-md-auto">
                        <div class="about-us-thumbnail wow fadeInUp" data-wow-delay="0.5s">
                            <img src="imge/historia_2.png" alt="">
                        </div>
                    </div>
                </div>
            </div>
    </section>
    <!-- ****** About Us Area End ****** -->

    <!-- ****** Dish Menu Area Start ****** -->
    <section class="caviar-dish-menu" id="menu">
        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">    
                    <div class="section-heading text-center">
                        <h2>De Temporada</h2>
                    </div>
                    <!-- btn -->
                    <a href="menu.php" class="btn caviar-btn"><span></span>Ver Productos</a>
                </div>
            </div>
           
        <div class="container-card">
        <?php
        
                                    $conexion=mysqli_connect("localhost", "root", "", "loginret");
                                   
                                    $sql="SELECT * FROM productos where categoria = 'Temporada'";
                                    $query=mysqli_query($conexion,$sql);
                                    
                                ?>
          <?php $count = 0; foreach ($query as $row) if ($count == 3) break;
          else
          {?>
                            
                            <?php 
                                    $id = $row['id'];
                                    $nombre = $row ['nombre'];
                                    $desc = $row['descripcion'];
                                    $img =$row['img'];
                                    ?>
        <div class="card">
            <figure>
                <img src="panel2/<?php echo $img?>">
            </figure>
            <div class="contenido-card">
                <h5><?php echo $nombre ?></h5>
                <p><?php echo $desc ?></p>
                
            </div>
        </div>
        <?php $count++;} 
        ?>
        
        
        </div>
        </div>
    </section>
    <!-- ****** Dish Menu Area End ****** -->

    <!-- ****** Testimonials Area Start ****** -->

<section>

        <div class="container">
            <div class="row">
                <div class="col-12 menu-heading">    
                    <div class="section-heading text-center">
                        <h2>Nuestra Identidad</h2>
                    </div>
                    <!-- btn -->
                   
                </div>
            </div>
           
            <section class="cardd" id="testimonial">
                <div class="card__perfil">
                    <div class="card__nombre">
                        <img class="imgcardd" src="imge/mision2.png" alt="">
                        <h4>Misión</h4>
                        
                    </div>
                    
                    <div class="card__descripcion">
                        <p class="texto-justificado2">En panificadora el retorno mantenemos el sabor del buen pan y la calidad de los productos y servicios para la satisfacción de nuestros clientes, mediante la mejora continua, procesos rentables y el permanente desarrollo de nuestro capital humano, para contribuir al bienestar de la comunidad.</p>
                    </div>
                    
                    
                </div>
                <div class="card__perfil">
                    <div class="card__nombre">
                        <img class="imgcardd" src="imge/vision2.png" alt="">
                        <h4>Visión</h4>
                        
                    </div>
                    
                    <div class="card__descripcion">
                        <p class="texto-justificado2">Mantener el liderazgo en la industria de la panificación en la península de Yucatán y trascender en el tiempo, a través del arte de hacer buen pan.</p>
                    </div>
                    
                   
                </div>
                <div class="card__perfil">
                    <div class="card__nombre">
                        <img class="imgcardd" src="imge/valores2.png" alt="">
                        <h4>Nuestros Valores</h4>
                        <br>
                    </div>
                   
                    <div class="card__descripcion">
                        <h6>Calidad:</h6>
                        <p class="texto-justificado2"> Mejorar continuamente nuestros procesos para ofrecer al cliente productos y servicios con valor agregado.</p>
                        <br>
                        <h6>Desarrollo humano:</h6>
                        <p class="texto-justificado2"> Crear oportunidades para el crecimiento personal y profesional de nuestra gente, en respuesta a su compromiso con la empresa.</p>
                        <br>
                        <h6>Integridad:</h6>
                        <p class="texto-justificado2"> Mantener actitudes y conductas congruentes con los valores humanos y de la empresa.</p>
                    </div>
                 
                   
                </div>
            </section>
        </div>
        </section>
            
        
            <footer class="caviar-footer-area">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="footer-text">
                                <a href="#" class="navbar-brand">El Retorno</a>
                                <p>2022. Con el Sabor de Yucatán S.A de C.V. Todos los Derechos Reservados</p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
    <!-- ****** Footer Area End ****** -->
 <!-- ***** Footer Area Start ***** -->

    <!-- Jquery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap-4 js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Active JS -->
    <script src="js/active.js"></script>
</body> 
</html>