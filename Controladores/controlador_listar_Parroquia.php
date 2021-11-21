<?php
require "../Modelos/lugares.modelo.php";
$MU = new mdl_lugares();
$idCanton = $_POST['idCanton'];
$consulta = $MU->listar_parroquia($idCanton);
echo json_encode($consulta);

?>