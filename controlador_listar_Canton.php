<?php
require "../Modelos/lugares.modelo.php";
$MU = new mdl_lugares();
$idprovincia = $_POST['idprovincia'];
$consulta = $MU->listar_canton($idprovincia);
echo json_encode($consulta);

?>