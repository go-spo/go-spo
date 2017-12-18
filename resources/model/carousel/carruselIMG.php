<?php

$bd = "gosport";
$conection = new mysqli("localhost", "root", "root", $bd);
mysqli_set_charset($conection, "utf8");

if ($conection) {

    $imgCarrusel = [];

    $queryCiudades = $conection->query("SELECT * FROM imagenes where descripcion != '' ;");
    while ($row = $queryCiudades->fetch_array(MYSQLI_ASSOC)) {
        array_push($imgCarrusel, $row);
    }
}

echo json_encode($imgCarrusel);

