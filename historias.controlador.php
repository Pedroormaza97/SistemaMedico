<?php
class ControladorHistorias{
  /**
   * INGRESO PERSONAS
   */
       static public function ctrCrearHistoria(){
    if(isset($_POST["nuevaCedula"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaCedula"])){

           $tabla = "historiaclinica";


           $datos = array("arr_nuevaFechaEvento" => $_POST["nuevaFechaEvento"],
                        "arr_nuevoLugarEvento" => $_POST["nuevoLugarEvento"],
                        "arr_nuevaDireccionEvento" => $_POST["nuevaDireccionEvento"],
                        "arr_nuevoCustodiapolicial" => $_POST["nuevoCustodiapolicial"],
                        "arr_nuevoIdMot" => $_POST["nuevoIdMot"],
                        "arr_nuevoobsMot" => $_POST["nuevoobsMot"],
                        "arr_nuevoAlientoEtilico" => $_POST["nuevoAlientoEtilico"],
                        "arr_nuevoValorAlcotec" => $_POST["nuevoValorAlcotec"],
                        "arr_nuevaCedula" => $_POST["nuevaCedula"],
                        "arr_nuevaCondicionViaAerea" => $_POST["nuevaCondicionViaAerea"],
                        "arr_nuevaCondicionPaciente" => $_POST["nuevaCondicionPaciente"],
                        "arr_nuevoDetalle" => $_POST["nuevoDetalle"],
                        "arr_nuevoIdHallazgo" => $_POST["nuevoIdHallazgo"],
                        "arr_nuevaPresionArterial" => $_POST["nuevaPresionArterial"],
                        "arr_nuevaFrecuenciaCardiaca" => $_POST["nuevaFrecuenciaCardiaca"],
                        "arr_nuevaFrecuenciaRespiratoria" => $_POST["nuevaFrecuenciaRespiratoria"],
                        "arr_nuevaTemperaturaAxilar" => $_POST["nuevaTemperaturaAxilar"],
                       "arr_nuevoTemperaturaBucal" => $_POST["nuevoTemperaturaBucal"],
                       "arr_nuevoPeso" => $_POST["nuevoPeso"],
                       "arr_nuevaTalla" => $_POST["nuevaTalla"],
                       "arr_nuevaReacPulmDerech" => $_POST["nuevaReacPulmDerech"],
                       "arr_nuevaReacPulmIzquier" => $_POST["nuevaReacPulmIzquier"],
                       "arr_nuevoTLlenadoCapilar" => $_POST["nuevoTLlenadoCapilar"],
                       "arr_nuevoGlasglow" => $_POST["nuevoGlasglow"],
                       "arr_nuevoIdLesion" => $_POST["nuevoIdLesion"],
                       "arr_nuevaIdEmergencia" => $_POST["nuevaIdEmergencia"],
                       "arr_nuevoIdExamenSolici" => $_POST["nuevoIdExamenSolici"],
                       "arr_nuevoIdDiagnosticoIngreso" => $_POST["nuevoIdDiagnosticoIngreso"],
                       "arr_nuevoIdDiagnosticoEgreso" => $_POST["nuevoIdDiagnosticoEgreso"],
                       "arr_nuevoIdPlanTratamiento" => $_POST["nuevoIdPlanTratamiento"],
                       "arr_nuevoIdAlta" => $_POST["nuevoIdAlta"],);
          

           $respuesta = ModeloHistorias::mdlCrearHistorias($tabla, $datos);

           if($respuesta == "ok"){
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "Los datos de la nueva historia fueron ingresados.",
            icon: "success",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "historialclinico";
            }


            });
            </script>';


           }else if($respuesta == "error"){
             echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudieron ingresar los datos a la base de datos, intentelo denuevo.",
            icon: "error",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "historialclinico";
            }


            });
            </script>';
           }
            
           

         

          }else{
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "Usted ha ingresado caracteres especiales no permitidos.",
            icon: "error",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "historialclinico";
            }


            });
            </script>';


          }

          
         }
       }//llave de metodo


  //      /**
  //  * MOSTRAR USUARIOS
  //  */
  //   static public function ctrMostrarPersona($item, $valor){
  //     $tabla = "persona";

  //     $respuesta = ModeloPersonas::mdlMostrarPersonas($tabla, $item, $valor);

  //     return $respuesta;


  //   }
  //   /**
  //  * CREAR NOMBRE DE USUARIO
  //  */


  //   static public function ctrCrearNombreUsuario($item, $valor){
  //     $tabla = "persona";

  //     $respuesta = ModeloPersonas::mdlCrearNombreUsuario($tabla, $item, $valor);

  //     return $respuesta;


  //   }

  //    /**
  //  * ELIMINAR PERSONA
  //  */


  //   static public function ctrEliminarPersona(){

  //     if(isset($_GET["cedula"])){
  //       $tabla = "persona";
  //       $datos = $_GET["cedula"];


  //       $respuesta = ModeloPersonas::mdlEliminarPersona($tabla, $datos);


  //       if($respuesta == "ok"){
            
  //           echo '<script> 
  //           Swal.fire({
  //           title: "Confirmacion!",
  //           text: "La persona con cedula '.$_GET["cedula"].' a sido eliminada de los registros correctamente.",
  //           icon: "success",
  //          confirmButtonText: "Ok"}).then((result)=>{

  //           if(result.value){
  //             window.location = "personas";
  //           }


  //           });
  //           </script>';

             
  //          }else if($respuesta == "error"){
            
  //           echo '<br><script> 
  //           Swal.fire({
  //           title: "Error!",
  //           text: "No se pudo eliminar la persona de los registros ya que la cedula cuenta con un usuario en el sistema, elimine primero el usuario e intentelo denuevo.",
  //           icon: "warning",
  //          confirmButtonText: "Ok"}).then((result)=>{

  //           if(result.value){
  //             window.location = "personas";
  //           }


  //           });
  //           </script>';

  //          //}
            
           

         

  //         }





  //     }



  //   }



  //    /**
  //  * EDITAR USUARIOS
  //  */
  //   static public function ctrEditarPersona(){

  //     if(isset($_POST["editarCedula"])){
  //       if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarNombre"]) &&
  //         preg_match('/^[a-zA-Z0-9 ]/', $_POST["editarApellidop"])  &&
  //          preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["editarApellidom"])){



  //       $tabla = "persona";



  //      $datos = array("arr_cedula" => $_POST["editarCedula"],
  //                       "arr_nombre" => $_POST["editarNombre"],
  //                       "arr_Apellidop" => $_POST["editarApellidop"],
  //                       "arr_Apellidom" => $_POST["editarApellidom"],
  //                       "arr_Direccion" => $_POST["editarDireccion"],
  //                       "arr_Sexo" => $_POST["editarSexo"],
  //                       "arr_Etnia" => $_POST["editarEtnia"],
  //                       "arr_Estadocivil" => $_POST["editarEstadocivil"],
  //                       "arr_FechaNacimiento" => $_POST["editarFechaNacimiento"],
  //                       "arr_Tiposangre" => $_POST["editarTiposangre"],
  //                       "arr_Hijosvarones" => $_POST["editarHijosvarones"],
  //                       "arr_Hijasmujeres" => $_POST["editarHijasmujeres"],
  //                       "arr_Tabaquismo" => $_POST["editarTabaquismo"],
  //                       "arr_Ocupacion" => $_POST["editarOcupacion"],
  //                       "arr_Cargo" => $_POST["editarCargo"],
  //                       "arr_rIdpareja" => $_POST["editarrIdpareja"]);

  //      $respuesta = ModeloPersonas::mdlEditarPersona($tabla, $datos);

       

  //      if($respuesta == "ok"){
            
  //           echo '<script> 
  //           Swal.fire({
  //           title: "Confirmacion!",
  //           text: "El Usuario a sido modificado correctamente.",
  //           icon: "success",
  //          confirmButtonText: "Ok"}).then((result)=>{

  //           if(result.value){
  //             window.location = "personas";
  //           }


  //           });
  //           </script>';

             
  //          }else if($respuesta == "error"){
            
  //           echo '<br><script> 
  //           Swal.fire({
  //           title: "Error!",
  //           text: "No se pudieron modificar los datos en la base de datos, intentelo denuevo.",
  //           icon: "error",
  //          confirmButtonText: "Ok"}).then((result)=>{

  //           if(result.value){
  //             window.location = "personas";
  //           }


  //           });
  //           </script>';

           
            


  //         }
       

        




      

  //    }else{
  //           echo '<br><script> 
  //           Swal.fire({
  //           title: "Error!",
  //           text: "Usted ha ingresado caracteres especiales no permitidos.",
  //           icon: "error",
  //          confirmButtonText: "Ok",
  //          closeOnConfirm: false}).then((result)=>{

  //           if(result.value){
  //             window.location = "personas";
  //           }


  //           });
  //           </script>';


  //         }

  //   }
  // }





    }// llave de clase