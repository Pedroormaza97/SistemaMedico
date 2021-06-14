<?php

require_once "conexion.php";
//MOSTRAR USUARIOS
 class ModeloPersonas{

  
    static public function mdlCrearPersonas($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla ");
    

    /*$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":usuario", $datos["usuario"], PDO::PARAM_STR);
    $stmt->bindParam(":password", $datos["password"], PDO::PARAM_STR);
    $stmt->bindParam(":perfil", $datos["perfil"], PDO::PARAM_STR);*/
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }
  

   
  
 }
