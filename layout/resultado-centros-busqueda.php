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
        <script src="../model/Maps/sideMaps/sideMaps.js" type="text/javascript"></script>

        <div class="container-grid">
            <div class="header">
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
                                    <a class="nav-link" href="../index.html">Home
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
            </div>

            <div class="sidebar left_inner">
                <!-- El div de arria existe exclusivamente para el posicionamiento del risizer-->
                <div class="container-sidebar">
                    <div class="main-img_sidebar">

                    </div>
                    <div class="content_sidebar">
                        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto. Lorem Ipsum ha sido el texto de relleno estándar de las industrias desde el año 1500, cuando un impresor (N. del T. persona que se dedica a la imprenta) desconocido usó una galería de textos y los mezcló de tal manera que logró hacer un libro de textos especimen. No sólo sobrevivió 500 años, sino que tambien ingresó como texto de relleno en documentos electrónicos, quedando esencialmente igual al original. Fue popularizado en los 60s con la creación de las hojas "Letraset", las cuales contenian pasajes de Lorem Ipsum, y más recientemente con software de autoedición, como por ejemplo Aldus PageMaker, el cual incluye versiones de Lorem Ipsum.

                        ¿Por qué lo usamos?
                        Es un hecho establecido hace demasiado tiempo que un lector se distraerá con el contenido del texto de un sitio mientras que mira su diseño. El punto de usar Lorem Ipsum es que tiene una distribución más o menos normal de las letras, al contrario de usar textos como por ejemplo "Contenido aquí, contenido aquí". Estos textos hacen parecerlo un español que se puede leer. Muchos paquetes de autoedición y editores de páginas web usan el Lorem Ipsum como su texto por defecto, y al hacer una búsqueda de "Lorem Ipsum" va a dar por resultado muchos sitios web que usan este texto si se encuentran en estado de desarrollo. Muchas versiones han evolucionado a través de los años, algunas veces por accidente, otras veces a propósito (por ejemplo insertándole humor y cosas por el estilo).


                        ¿De dónde viene?
                        Al contrario del pensamiento popular, el texto de Lorem Ipsum no es simplemente texto aleatorio. Tiene sus raices en una pieza cl´sica de la literatura del Latin, que data del año 45 antes de Cristo, haciendo que este adquiera mas de 2000 años de antiguedad. Richard McClintock, un profesor de Latin de la Universidad de Hampden-Sydney en Virginia, encontró una de las palabras más oscuras de la lengua del latín, "consecteur", en un pasaje de Lorem Ipsum, y al seguir leyendo distintos textos del latín, descubrió la fuente indudable. Lorem Ipsum viene de las secciones 1.10.32 y 1.10.33 de "de Finnibus Bonorum et Malorum" (Los Extremos del Bien y El Mal) por Cicero, escrito en el año 45 antes de Cristo. Este libro es un tratado de teoría de éticas, muy popular durante el Renacimiento. La primera linea del Lorem Ipsum, "Lorem ipsum dolor sit amet..", viene de una linea en la sección 1.10.32

                        El trozo de texto estándar de Lorem Ipsum usado desde el año 1500 es reproducido debajo para aquellos interesados. Las secciones 1.10.32 y 1.10.33 de "de Finibus Bonorum et Malorum" por Cicero son también reproducidas en su forma original exacta, acompañadas por versiones en Inglés de la traducción realizada en 1914 por H. Rackham.
                    </div>
                </div>
            </div>
            <div class="map-container">
                <div id="map"></div>
            </div>
        </div>
        <script>
                    $('.left_inner').resizable();
        </script>
    </body>
</html>
