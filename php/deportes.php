<?php
$bd = "gosport";
$conection = new mysqli("localhost", "root", "root", $bd);
mysqli_set_charset($conection, "utf8");
if ($conection) {
    $queryCategorias = $conection->query("SELECT id_deporte,nombre FROM deportes ORDER BY nombre ASC");
    $misCategorias = [];
    while ($row = $queryCategorias->fetch_array(MYSQLI_ASSOC)) {
        array_push($misCategorias, $row);
    }
    echo json_encode($misCategorias);
}
?>
