<?php

require_once "conexion.php";


 class ModeloHistorias{
  




   //CREAR HISTORIAS



    static public function mdlCrearHistorias($tabla, $datos){

    
    $stmt = Conexion::conectar()->prepare("INSERT INTO $tabla (`fechaEvento`, `lugarEvento`, `direcccionEvento`, `custodiaPolicial`, `idMot`, `obsMot`, `alientoEtilico`, `valorAlcotec`, `cedulaPer`, `condicionViaAerea`, `condicionPaciente`, `detalle`, `idHallazgo`, `presionArterial`, `frecuenciaCardiaca`, `frecuenciaRespiratoria`, `temperaturaAxilar`, `temperaturaBucal`, `peso`, `talla`, `reacPulmDerech`, `reacPulmIzquier`, `tLlenadoCapilar`, `glasgow`, `idLesion`, `idEmergencia`, `idExamenSolici`, `idDiagnosticoIngreso`,`idDiagnosticoEgreso`,`idPlanTratamiento`,`idAlta`) VALUES (:FechaEvento, :LugarEvento, :DireccionEvento, :Custodiapolicial, :IdMot, :obsMot, :AlientoEtilico, :ValorAlcotec, :Cedula, :CondicionViaAerea, :CondicionPaciente, :Detalle, :IdHallazgo, :PresionArterial, :FrecuenciaCardiaca, :FrecuenciaRespiratoria, :TemperaturaAxilar, :TemperaturaBucal, :Peso, :Talla, :ReacPulmDerech, :ReacPulmIzquier, :TLlenadoCapilar, :Glasglow, :IdLesion, :IdEmergencia, :IdExamenSolici, :IdDiagnosticoIngreso, :IdDiagnosticoEgreso, :IdPlanTratamiento, :IdAlta); ");

    
    
    

    $stmt->bindParam(":FechaEvento", $datos["arr_nuevaFechaEvento"], PDO::PARAM_STR);
    $stmt->bindParam(":LugarEvento", $datos["arr_nuevoLugarEvento"], PDO::PARAM_STR);
    $stmt->bindParam(":DireccionEvento", $datos["arr_nuevaDireccionEvento"], PDO::PARAM_STR);
    $stmt->bindParam(":Custodiapolicial", $datos["arr_nuevoCustodiapolicial"], PDO::PARAM_STR);
    $stmt->bindParam(":IdMot", $datos["arr_nuevoIdMot"], PDO::PARAM_INT);
    $stmt->bindParam(":obsMot", $datos["arr_nuevoobsMot"], PDO::PARAM_STR);
    $stmt->bindParam(":AlientoEtilico", $datos["arr_nuevoAlientoEtilico"], PDO::PARAM_STR);
    $stmt->bindParam(":ValorAlcotec", $datos["arr_nuevoValorAlcotec"], PDO::PARAM_STR);
    $stmt->bindParam(":Cedula", $datos["arr_nuevaCedula"], PDO::PARAM_STR);
    $stmt->bindParam(":CondicionViaAerea", $datos["arr_nuevaCondicionViaAerea"], PDO::PARAM_STR);
    $stmt->bindParam(":CondicionPaciente", $datos["arr_nuevaCondicionPaciente"], PDO::PARAM_STR);
    $stmt->bindParam(":Detalle", $datos["arr_nuevoDetalle"], PDO::PARAM_STR);
    $stmt->bindParam(":IdHallazgo", $datos["arr_nuevoIdHallazgo"], PDO::PARAM_INT);
    $stmt->bindParam(":PresionArterial", $datos["arr_nuevaPresionArterial"], PDO::PARAM_STR);
    $stmt->bindParam(":FrecuenciaCardiaca", $datos["arr_nuevaFrecuenciaCardiaca"], PDO::PARAM_STR);
    $stmt->bindParam(":FrecuenciaRespiratoria", $datos["arr_nuevaFrecuenciaRespiratoria"], PDO::PARAM_STR);
    $stmt->bindParam(":TemperaturaAxilar", $datos["arr_nuevaTemperaturaAxilar"], PDO::PARAM_STR);
    $stmt->bindParam(":TemperaturaBucal", $datos["arr_nuevoTemperaturaBucal"], PDO::PARAM_STR);
    $stmt->bindParam(":Peso", $datos["arr_nuevoPeso"], PDO::PARAM_STR);
    $stmt->bindParam(":Talla", $datos["arr_nuevaTalla"], PDO::PARAM_STR);
    $stmt->bindParam(":ReacPulmDerech", $datos["arr_nuevaReacPulmDerech"], PDO::PARAM_STR);
    $stmt->bindParam(":ReacPulmIzquier", $datos["arr_nuevaReacPulmIzquier"], PDO::PARAM_STR);
    $stmt->bindParam(":TLlenadoCapilar", $datos["arr_nuevoTLlenadoCapilar"], PDO::PARAM_STR);
    $stmt->bindParam(":Glasglow", $datos["arr_nuevoGlasglow"], PDO::PARAM_STR);
    $stmt->bindParam(":IdLesion", $datos["arr_nuevoIdLesion"], PDO::PARAM_INT);
    $stmt->bindParam(":IdEmergencia", $datos["arr_nuevaIdEmergencia"], PDO::PARAM_INT);
    $stmt->bindParam(":IdExamenSolici", $datos["arr_nuevoIdExamenSolici"], PDO::PARAM_INT);
    $stmt->bindParam(":IdDiagnosticoIngreso", $datos["arr_nuevoIdDiagnosticoIngreso"], PDO::PARAM_INT);
    $stmt->bindParam(":IdDiagnosticoEgreso", $datos["arr_nuevoIdDiagnosticoEgreso"], PDO::PARAM_INT);
    $stmt->bindParam(":IdPlanTratamiento", $datos["arr_nuevoIdPlanTratamiento"], PDO::PARAM_INT);
    $stmt->bindParam(":IdAlta", $datos["arr_nuevoIdAlta"], PDO::PARAM_INT);
  

    if($stmt->execute()){

      return "ok";  

    }else{

      return "error";
    
    }

    $stmt->close();
    
    

  }
  

   
  
 }//llave de cierre de clase
