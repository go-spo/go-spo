<?php

$bd = "gosport";
$conection = new mysqli("localhost", "root", "root", $bd);
mysqli_set_charset($conection, "utf8");

if ($conection) {
   if(isset($_GET["value"])){
     
   $valor = $_GET["value"];
    $misCiudades = [];
   
    $queryCiudades = $conection->query("SELECT DISTINCT provincia FROM centros where id_centro in(select id_centro from alquiler_deporte_centro where id_deporte = $valor );");
    while ($fila =$queryCiudades->fetch_array(MYSQLI_ASSOC)) {
        array_push($misCiudades, $fila);
}}}
    
     echo json_encode($misCiudades);