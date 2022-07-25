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

<body id="containercontact">
    <!-- Preloader -->
    <div id="preloader">
        <div class="caviar-load"></div>
        <div class="preload-icons">
            <img class="preload-1" src="imge/big_loading.gif" alt="">
            <img class="preload-2" src="imge/big_loading.gif" alt="">
            <img class="preload-3" src="imge/big_loading.gif" alt="">
        </div>
    </div>

    <!-- ***** Search Form Area ***** -->
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

    <!-- ***** Header Area Start ***** -->
    <header class="header_area" id="header">
        <div class="container h-100">
            <div class="row h-100">
                <div class="col-12 h-100">
                    <nav class="h-100 navbar navbar-expand-lg align-items-center">
                        <a title="Principal"  href="index.php" class="navbar-brand">
                            <img src="panel2/img/corona_titulo.png" alt="Principal">  El Retorno</a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#caviarNav" aria-controls="caviarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="fa fa-bars"></span></button>
                        <div class="collapse navbar-collapse" id="caviarNav">
                            <ul class="navbar-nav ml-auto" id="caviarMenu">
                                <li class="nav-item active">
                                    <a class="nav-link" href="index.php">Inicio<span class="sr-only">(current)</span></a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#about">Quienes Somos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#menu">Productos</a>
                                </li>
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php#testimonial">Testimonios</a>
                                </li>
                               
                                <li class="nav-item">
                                    <a class="nav-link" href="contact.php">Contacto</a>
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
                               
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Breadcumb Area Start ***** -->
    <div class="breadcumb-area bg-img bg-overlay" style="background-image: url(imge/banner_4.png)">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="breadcumb-content">
                        <h2>Contacto</h2>
                        
                        <p><i class="fa fa-map-marker" aria-hidden="true"></i>Oficinas:
                             </p>
                             <p>Calle 8 No. 540 b x 63c y 63d
                                Col. Cortés Sarmiento C.P. 97168 </p>
                            <p><i class="fa fa-phone" aria-hidden="true"></i> <a href="tel:9 29 34 13 "> 9 29 34 13 / </a> <a href="tel:9 40 17 57">9 40 17 57</a></p>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ***** Breadcumb Area End ***** -->

    <!-- ***** Contact Area Start ***** -->
    <div class="caviar-contact-area d-md-flex align-items-center" id="contact">
        <div class="contact-form-area d-flex justify-content-end">
            <div class="contact-form">
                <div class="contact-form-title">
                    
                    <div id="sugerencias"></div>
                </div>
                     
                <form class="wow fadeInUp"  method="post" >
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label >Nombre</label>
                        <input type="text" class="form-control" id="cf-name" name="nombre" >
                      </div>
                      <div class="col-md-6 mb-3">
                        <label >Asunto</label>
                        <input type="text" class="form-control" id="cf-subject" name="asunto" >
                      </div>
                    </div>
                    <div class="form-row">
                      <div class="col-md-6 mb-3">
                        <label >Teléfono</label>
                        <input type="text" class="form-control" id="cf-Tel" name="tel">
                       
                      </div>
                      <div class="col-md-6 mb-3">
                        <!-- <div class="departamento"> -->
                        <label >Departamento</label>
                        <select id="cf-dep" class="form-control col-sm-12 col-md-12" name="departamento">
                          <option selected disabled value=""></option>
                          <option>Ventas</option>
                          <option>Compras</option>
                          <option>Recursos Humanos</option>
                        </select>
                        <!-- </div> -->
                      </div>
                      <div class="col-md-12 mb-3">
                        <!-- <div class="email"> -->
                        <label>Email</label>
                        <input type="email" class="form-control" id="cf-email" name="email">
                       <!-- </div> -->
                      </div>

                        <!-- <div class="mensaje"> -->
                            <div class="col-md-12 mb-3">
                          <label for="validationTextarea">Mensaje</label>
                          <textarea class="form-control" rows="6" id="cf-message" name="mensaje" placeholder=" Escribe aquí"></textarea>
                          
                        </div>
                        <div class="btnenviar">
                    <button type="submit" class="form-control" id="cf-submit" name="submit">Enviar Mensaje</button>
                    
                </div>
                
                </form>
                <?php 
                include ("contactmail.php"); 
                ?>
                      
                </div>
            </div>
        </div>
        
        <div class="caviar-map-area wow fadeInRightBig" data-wow-delay="0.5s">
            <img src="imge/banner_3.png" alt="">
        </div>
    </div>

   
    <!-- ***** Contact Area End ***** -->

    <!-- ***** Footer Area Start ***** -->
    <footer class="caviar-footer-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="footer-text">
                        <a href="#" class="navbar-brand">El Retorno</a>
                        <p>©2022. Con el Sabor de Yucatán S.A de C.V. Todos los Derechos Reservados</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- ***** Footer Area End ***** -->

    <!-- jQuery-2.2.4 js -->
    <script src="js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/others/plugins.js"></script>
    <!-- Google Maps js -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDk9KNSL1jTv4MY9Pza6w8DJkpI_nHyCnk"></script>
    <script src="js/google-map/map-active.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
</body> 
</html>