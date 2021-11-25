<?php
require "../Modelos/lugares.modelo.php";
$MU = new mdl_lugares();
$consulta = $MU->listar_provincias();
echo json_encode($consulta);

?>