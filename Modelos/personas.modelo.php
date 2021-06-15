<?php

require_once "conexion.php";
//MOSTRAR USUARIOS
 class ModeloPersonas{

  
    static public function mdlCrearPersonas($tabla, $datos){

    /*$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`cedula`, `nombre`, `apellido_p`, `apellido_m`, `dir_domicilio`, `sexo`, `etnia`, `estadocivil`, `fecha_naci`, `t_sangre`, `hijosv`, `hijosm`, `tabaquismo`, `ocupacion`, `cargo`, `idpareja`) VALUES (:cedula, :nombre, :apellido_p, :apellido_m, :dir_domicilio, :sexo, :etnia, :estadocivil, :fecha_naci, :t_sangre, :hijosv, :hijosm, :tabaquismo, :ocupacion, :cargo, :idpareja); ");*/
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`cedula`, `nombre`, `apellido_p`, `apellido_m`, `dir_domicilio`, `sexo`, `etnia`, `estadocivil`, `fecha_naci`, `t_sangre`, `hijosv`, `hijosm`, `tabaquismo`, `ocupacion`, `cargo`, `idpareja`) VALUES (:cedula, :nombre, :apellido_p, :apellido_m, :dir_domicilio, :sexo, :etnia, :estadocivil, :fecha_naci, :t_sangre, :hijosv, :hijosm, :tabaquismo, :ocupacion, :cargo, :idpareja); ");
    
    
    

    $stmt->bindParam(":cedula", $datos["arr_cedula"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["arr_nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_p", $datos["arr_apellido_p"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_m", $datos["arr_apellido_m"], PDO::PARAM_STR);
    $stmt->bindParam(":dir_domicilio", $datos["arr_dir_domicilio"], PDO::PARAM_STR);
    $stmt->bindParam(":sexo", $datos["arr_sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":etnia", $datos["arr_etnia"], PDO::PARAM_STR);
    $stmt->bindParam(":estadocivil", $datos["arr_estadocivil"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha_naci", $datos["arr_fecha_naci"], PDO::PARAM_STR);
    $stmt->bindParam(":t_sangre", $datos["arr_t_sangre"], PDO::PARAM_STR);
    $stmt->bindParam(":hijosv", $datos["arr_hijosv"], PDO::PARAM_INT);
    $stmt->bindParam(":hijosm", $datos["arr_hijosm"], PDO::PARAM_INT);
    $stmt->bindParam(":tabaquismo", $datos["arr_tabaquismo"], PDO::PARAM_STR);
    $stmt->bindParam(":ocupacion", $datos["arr_ocupacion"], PDO::PARAM_STR);
    $stmt->bindParam(":cargo", $datos["arr_cargo"], PDO::PARAM_STR);
    $stmt->bindParam(":idpareja", $datos["arr_idpareja"], PDO::PARAM_INT);
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    

  }
  

   
  
 }
