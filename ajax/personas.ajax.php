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



/**
 * VALIDAR CEDULA
 */

public $validarCedula;

public function ajaxValidarCedula(){

	$item = "cedula";
	$valor = $this->validarCedula;
	$respuesta = ControladorPersonas::ctrMostrarPersona($item,$valor);

	echo json_encode($respuesta);


}


/**
 * VALIDAR CEDULA
 */

public $validarCedulaUsuario;

public function ajaxCrearNombreUsuario(){

	$item = "cedula";
	$valor = $this->validarCedulaUsuario;
	$respuesta = ControladorPersonas::ctrCrearNombreUsuario($item,$valor);

	echo json_encode($respuesta);


}

}//llave de la class








/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["cedula"])){

$editar = new ajaxPersonas();
$editar -> cedula = $_POST["cedula"];
$editar -> ajaxEditarPersona();


}
/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["validarCedula"])){

	$valCedula = new ajaxPersonas();
	$valCedula -> validarCedula = $_POST["validarCedula"];
	$valCedula -> ajaxValidarCedula();

}
/**********************************************************************
 * EDITAR USUARIO
 */
if(isset($_POST["validarCedulaUsuario"])){

	$valCedula = new ajaxPersonas();
	$valCedula -> validarCedulaUsuario = $_POST["validarCedulaUsuario"];
	$valCedula -> ajaxCrearNombreUsuario();

}