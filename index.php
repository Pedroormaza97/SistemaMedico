<?php

require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";


require_once "Modelos/usuarios.modelo.php";

$plantilla = new controladorPlantilla();
$plantilla -> ctrPlantilla();
