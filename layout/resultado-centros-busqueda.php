<?php
session_start();
$_SESSION["deporte"] = $_POST["deportes-browser"];
$_SESSION["ciudad"] = $_POST["ciudades-browser"];
?>

<!DOCTYPE html>
<html lang="en">

    <head>

        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Gospo</title>
        <!-- FAVICON -->
        <link rel="icon" type="image/png" href="../resources/img/favicon.png" />
        <!-- Bootstrap core CSS -->
        <link href="../vendor/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css"/>
        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
        <!-- Custom styles for this template -->
        <link href="../styles/css/half-slider.css" rel="stylesheet" type="text/css"/> 
        <!-- Jquery User Interface-->
        <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
        <!-- Google Maps -->
        <link href="../styles/css/google_maps.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <!--Jquery and Jquery UI -->
        <script src="../vendor/jquery/jquery.min.js"></script>
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <!-- Bootstrap core JavaScript -->
        <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
        <!-- Data picker -->
        <script src="../vendor/jquery/components/data_picker/data_picker.js" type="text/javascript"></script>
        <!-- Font Awesome -->
        <script src="../vendor/fontawesome-all.js" type="text/javascript"></script>
        <!-- Google Maps -->
        <script async defer
                src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBiTt0JoSwwww7v-t8xbt_40Ph6MvxeTMY&callback=initMap">
        </script>
        <script src="../model/Maps/initMap.js" type="text/javascript"></script>

        <!-- Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-main-header-custom fixed-top">
            <div class="container">
                <a class="navbar-brand" href="../index.html"><img src="../resources/img/logo-3.PNG" alt=""/></a>

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home
                                <span class="sr-only">(current)</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="https://danialba96.wixsite.com/gospo">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Contact</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary nav-login" href="#">Log In</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>

        <div id="map"></div>

        <div class="nav-side-menu">
            <i class="fa fa-bars fa-2x toggle-btn" data-toggle="collapse" data-target="#menu-content"></i>

            <div class="menu-list">

                <ul id="menu-content" class="menu-content collapse out">
                    <li>
                        <a href="#"><i class="far fa-calendar-alt"></i></a>
                    </li>

                    <li  data-toggle="collapse" data-target="#products" class="collapsed active">
                        <a href="#"><i class="fa fa-dashboard fa-lg"></i></a>
                    </li>

                    <li data-toggle="collapse" data-target="#service" class="collapsed">
                        <a href="#"><i class="fas fa-camera-retro"></i></a>
                    </li>  

                    <li data-toggle="collapse" data-target="#new" class="collapsed">
                        <a href="#"><i class="fas fa-envelope"></i></a>
                    </li>
                    <li>
                        <a href="#">
                           <i class="far fa-star"></i>
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Page Content -->
        <section class="py-5">

        </section>

        <!-- Footer -->
        <footer class="footer">
            <div class="container">
                <p class="m-0 text-center text-white">&copy; Gospo 2017</p>
            </div>
            <!-- /.container -->
        </footer>
    </body>
</html>
