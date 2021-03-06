<?php

require_once "conexion.php";


 class ModeloPersonas{
  //MOSTRAR PERSONAS

    static public function mdlMostrarPersonas($tabla, $item, $valor){

   if($item != null){

     $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

     $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

     $stmt -> execute();

     return $stmt -> fetch();

   }else{

     $stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

     $stmt -> execute();

     return $stmt -> fetchAll();

   }


   $stmt -> close();

   $stmt = null;
   }

   //CREAR NOMBRE DE USUARIO A PARTIR DE LA CEDULA DE LA PERSONA

   static public function mdlCrearNombreUsuario($tabla, $item, $valor){

   

     $stmt = Conexion::conectar()->prepare("SELECT  `cedulaPer`, CONCAT(LOWER(LEFT(`nombrePer`, 1)), LOWER(`apellidoPPer`), substring(`cedulaPer`,7)) FROM $tabla WHERE $item = :$item;");

     $stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);


     $stmt -> execute();

     return $stmt -> fetch();

   $stmt -> close();

   $stmt = null;
   }



   //ELIMINAR USUARIO

   static public function mdlEliminarPersona($tabla, $datos){

   

     $stmt = Conexion::conectar()->prepare("DELETE FROM $tabla WHERE `cedulaPer` = :cedula");

     $stmt -> bindParam(":cedula", $datos, PDO::PARAM_INT);


     if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }


   $stmt -> close();

   $stmt = null;
   }








   //CREAR PERSONAS



    static public function mdlCrearPersonas($tabla, $datos){

   
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`cedulaPer`, `nombrePer`, `apellidoPPer`, `apellidoMPer`, `emailPer`, `telefonoPer`, `direccionPer`, `fechaNacimientoPer`, `nacionalidadPer`, `lugarNacimientoPer`, `sexoPer`, `etniaPer`, `estadoCivilPer`, `tipoSangrePer`, `hijosVPer`, `hijosMPer`, `tabaquismoPer`, `ocupacionPer`, `cargoPer`, `idPareja`, `referidoPer`, `idFamilia`, `barrioPer`, `parroquiaPer`, `cantonPer`, `provinciaPer`, `tipoSeguroPer`) VALUES (:cedula, :nombre, :apellido_p, :apellido_m, :email, :telefono, :direccion, :fecha_naci, :nacionalidad, :lugarnacimiento, :sexo, :etnia, :estadocivil, :t_sangre, :hijosv, :hijosm, :tabaquismo, :ocupacion, :cargo, :idpareja, :referido, :id_cont_fam, :barrio, :parroquia, :canton, :provincia, :tiposeguro); ");
    
    
    

    $stmt->bindParam(":cedula", $datos["arr_cedula"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["arr_nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_p", $datos["arr_apellido_p"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_m", $datos["arr_apellido_m"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["arr_email"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datos["arr_telefono"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datos["arr_direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha_naci", $datos["arr_fechanacimiento"], PDO::PARAM_STR);
    $stmt->bindParam(":nacionalidad", $datos["arr_nacionalidad"], PDO::PARAM_STR);
    $stmt->bindParam(":lugarnacimiento", $datos["arr_lugarnacimiento"], PDO::PARAM_STR);
    $stmt->bindParam(":sexo", $datos["arr_sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":etnia", $datos["arr_etnia"], PDO::PARAM_STR);
    $stmt->bindParam(":estadocivil", $datos["arr_estadocivil"], PDO::PARAM_STR);
    $stmt->bindParam(":t_sangre", $datos["arr_t_sangre"], PDO::PARAM_STR);
    $stmt->bindParam(":hijosv", $datos["arr_hijosv"], PDO::PARAM_INT);
    $stmt->bindParam(":hijosm", $datos["arr_hijosm"], PDO::PARAM_INT);
    $stmt->bindParam(":tabaquismo", $datos["arr_tabaquismo"], PDO::PARAM_STR);
    $stmt->bindParam(":ocupacion", $datos["arr_ocupacion"], PDO::PARAM_STR);
    $stmt->bindParam(":cargo", $datos["arr_cargo"], PDO::PARAM_STR);
    $stmt->bindParam(":idpareja", $datos["arr_idpareja"], PDO::PARAM_INT);
    $stmt->bindParam(":referido", $datos["arr_referido"], PDO::PARAM_STR);
    $stmt->bindParam(":id_cont_fam", $datos["arr_id_cont_fam"], PDO::PARAM_INT);
    $stmt->bindParam(":barrio", $datos["arr_barrio"], PDO::PARAM_STR);
    $stmt->bindParam(":parroquia", $datos["arr_parroquia"], PDO::PARAM_STR);
    $stmt->bindParam(":canton", $datos["arr_canton"], PDO::PARAM_STR);
    $stmt->bindParam(":provincia", $datos["arr_provincia"], PDO::PARAM_STR);
    $stmt->bindParam(":tiposeguro", $datos["arr_tiposeguro"], PDO::PARAM_STR);
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    

  }


   //EDITAR USUARIO

  static public function mdlEditarPersona($tabla, $datos){

    $stmt = Conexion::conectar()->prepare("UPDATE $tabla SET `cedulaPer`= :cedula,`nombrePer` = :nombre, `apellidoPPer` = :apellido_p, `apellidoMPer` = :apellido_m, `emailPer` = :email, `telefonoPer` = :telefono, `direccionPer`= :direccion,`fechaNacimientoPer` = :fecha_naci, `nacionalidadPer` = :nacionalidad, `lugarNacimientoPer` = :lugarnacimiento, `sexoPer` = :sexo, `etniaPer` = :etnia, `estadoCivilPer` = :estadocivil, `tipoSangrePer` = :t_sangre, `hijosVPer` = :hijosv, `hijosMPer` = :hijosm , `tabaquismoPer` = :tabaquismo, `ocupacionPer` = :ocupacion , `cargoPer` = :cargo, `idPareja` = :idpareja, `referidoPer` = :referido, `idFamilia` = :id_cont_fam, `barrioPer` = :barrio, `parroquiaPer` = :parroquia, `cantonPer` = :canton, `provinciaPer` = :provincia , `tipoSeguroPer` = :tiposeguro  WHERE `cedulaPer`=:cedula");
    

    $stmt->bindParam(":cedula", $datos["arr_cedula"], PDO::PARAM_STR);
    $stmt->bindParam(":nombre", $datos["arr_nombre"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_p", $datos["arr_apellido_p"], PDO::PARAM_STR);
    $stmt->bindParam(":apellido_m", $datos["arr_apellido_m"], PDO::PARAM_STR);
    $stmt->bindParam(":email", $datos["arr_email"], PDO::PARAM_STR);
    $stmt->bindParam(":telefono", $datos["arr_telefono"], PDO::PARAM_STR);
    $stmt->bindParam(":direccion", $datos["arr_direccion"], PDO::PARAM_STR);
    $stmt->bindParam(":fecha_naci", $datos["arr_fechanacimiento"], PDO::PARAM_STR);
    $stmt->bindParam(":nacionalidad", $datos["arr_nacionalidad"], PDO::PARAM_STR);
    $stmt->bindParam(":lugarnacimiento", $datos["arr_lugarnacimiento"], PDO::PARAM_STR);
    $stmt->bindParam(":sexo", $datos["arr_sexo"], PDO::PARAM_STR);
    $stmt->bindParam(":etnia", $datos["arr_etnia"], PDO::PARAM_STR);
    $stmt->bindParam(":estadocivil", $datos["arr_estadocivil"], PDO::PARAM_STR);
    $stmt->bindParam(":t_sangre", $datos["arr_t_sangre"], PDO::PARAM_STR);
    $stmt->bindParam(":hijosv", $datos["arr_hijosv"], PDO::PARAM_INT);
    $stmt->bindParam(":hijosm", $datos["arr_hijosm"], PDO::PARAM_INT);
    $stmt->bindParam(":tabaquismo", $datos["arr_tabaquismo"], PDO::PARAM_STR);
    $stmt->bindParam(":ocupacion", $datos["arr_ocupacion"], PDO::PARAM_STR);
    $stmt->bindParam(":cargo", $datos["arr_cargo"], PDO::PARAM_STR);
    $stmt->bindParam(":idpareja", $datos["arr_idpareja"], PDO::PARAM_INT);
    $stmt->bindParam(":referido", $datos["arr_referido"], PDO::PARAM_STR);
    $stmt->bindParam(":id_cont_fam", $datos["arr_id_cont_fam"], PDO::PARAM_INT);
    $stmt->bindParam(":barrio", $datos["arr_barrio"], PDO::PARAM_STR);
    $stmt->bindParam(":parroquia", $datos["arr_parroquia"], PDO::PARAM_STR);
    $stmt->bindParam(":canton", $datos["arr_canton"], PDO::PARAM_STR);
    $stmt->bindParam(":provincia", $datos["arr_provincia"], PDO::PARAM_STR);
    $stmt->bindParam(":tiposeguro", $datos["arr_tiposeguro"], PDO::PARAM_STR);
  
    
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    $stmt = null;

  }
  

   
  
 }//llave de cierre de clase
