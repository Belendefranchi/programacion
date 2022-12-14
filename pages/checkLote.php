<?php

include("conexion3.php");

$query="SELECT nro
        FROM lotes
        ORDER BY nro DESC
        LIMIT 1";

$resultado=$base->prepare($query);
$resultado->execute();     
$lote=$resultado->fetch(PDO::FETCH_COLUMN);
$resultado->closeCursor ();

/* echo $lote; */

?>