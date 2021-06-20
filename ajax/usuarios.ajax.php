<?php

require_once "../controladores/usuarios.controlador.php";
require_once "../modelos/usuarios.modelo.php";


class ajaxUsuarios{

/**
 * EDITAR USUARIO
 */

public $idUsuario;
public function ajaxEditarUsuario(){
	$item = "idUsuario";
	$valor = $this->idUsuario;

	$respuesta = ControladorUsuarios::ctrMostrarUsuarios($item,$valor);

	echo json_encode($respuesta);




	}


}

/**
 * EDITAR USUARIO
 */
if(isset($_POST["idUsuario"])){

$editar = new ajaxUsuarios();
$editar -> idUsuario = $_POST["idUsuario"];
$editar -> ajaxEditarUsuario();


}
