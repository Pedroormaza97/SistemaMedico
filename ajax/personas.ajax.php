<?php

require_once "../controladores/personas.controlador.php";
require_once "../modelos/personas.modelo.php";


class ajaxPersonas{

/**
 * EDITAR PERSONA
 */

public $cedula;
public function ajaxEditarPersona(){
	$item = "cedula";
	$valor = $this->cedula;

	$respuesta = ControladorPersonas::ctrMostrarPersona($item,$valor);

	echo json_encode($respuesta);




	}


}

/**
 * EDITAR USUARIO
 */
if(isset($_POST["cedula"])){

$editar = new ajaxPersonas();
$editar -> cedula = $_POST["cedula"];
$editar -> ajaxEditarPersona();


}