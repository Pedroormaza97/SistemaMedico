<?php
class ControladorPersonas{
  /**
   * INGRESO PERSONAS
   */
       static public function ctrCrearPersona(){
    if(isset($_POST["nuevaCedula"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevaCedula"])){

           $tabla = "persona";


           $datos = array("arr_cedula" => $_POST["nuevaCedula"],
                        "arr_nombre" => $_POST["nuevoNombre"],
                        "arr_apellido_p" => $_POST["nuevoApellidop"],
                        "arr_apellido_m" => $_POST["nuevoApellidom"],
                        "arr_email" => $_POST["nuevoEmail"],
                        "arr_telefono" => $_POST["nuevoTelefono"],
                        "arr_direccion" => $_POST["nuevaDireccion"],
                        "arr_fechanacimiento" => $_POST["nuevaFechaNacimiento"],
                        "arr_nacionalidad" => $_POST["nuevaNacionalidad"],
                        "arr_lugarnacimiento" => $_POST["nuevoLugarNacimiento"],
                        "arr_sexo" => $_POST["nuevoSexo"],
                        "arr_etnia" => $_POST["nuevaEtnia"],
                        "arr_estadocivil" => $_POST["nuevoEstadocivil"],
                        "arr_t_sangre" => $_POST["nuevoTiposangre"],
                        "arr_hijosv" => $_POST["nuevosHijosvarones"],
                        "arr_hijosm" => $_POST["nuevasHijasmujeres"],
                        "arr_tabaquismo" => $_POST["nuevoTabaquismo"],
                       "arr_ocupacion" => $_POST["nuevaOcupacion"],
                       "arr_cargo" => $_POST["nuevoCargo"],
                       "arr_idpareja" => $_POST["nuevoIdpareja"],
                       "arr_referido" => $_POST["nuevoReferido"],
                       "arr_id_cont_fam" => $_POST["nuevoid_cont_fam"],
                       "arr_barrio" => $_POST["nuevoBarrio"],
                       "arr_parroquia" => $_POST["nuevaParroquia"],
                       "arr_canton" => $_POST["nuevoCanton"],
                       "arr_provincia" => $_POST["nuevaProvincia"],
                       "arr_tiposeguro" => $_POST["nuevotiposeguro"],);
          

           $respuesta = ModeloPersonas::mdlCrearPersonas($tabla, $datos);

           if($respuesta == "ok"){
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "Los datos de la nueva persona fueron ingresados.",
            icon: "success",
           confirmButtonText: "Ok",
           closeOnConfirm: false}).then((result)=>{

            if(result.value){
              window.location = "ingresarpersonas";
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
              window.location = "ingresarpersonas";
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
              window.location = "ingresarpersonas";
            }


            });
            </script>';


          }

          
         }
       }//llave de metodo


       /**
   * MOSTRAR USUARIOS
   */
    static public function ctrMostrarPersona($item, $valor){
      $tabla = "persona";

      $respuesta = ModeloPersonas::mdlMostrarPersonas($tabla, $item, $valor);

      return $respuesta;


    }
    /**
   * CREAR NOMBRE DE USUARIO
   */


    static public function ctrCrearNombreUsuario($item, $valor){
      $tabla = "persona";

      $respuesta = ModeloPersonas::mdlCrearNombreUsuario($tabla, $item, $valor);

      return $respuesta;


    }

     /**
   * ELIMINAR PERSONA
   */


    static public function ctrEliminarPersona(){

      if(isset($_GET["cedula"])){
        $tabla = "persona";
        $datos = $_GET["cedula"];


        $respuesta = ModeloPersonas::mdlEliminarPersona($tabla, $datos);


        if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "La persona con cedula '.$_GET["cedula"].' a sido eliminada de los registros correctamente.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "ingresarpersonas";
            }


            });
            </script>';

             
           }else if($respuesta == "error"){
            
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudo eliminar la persona de los registros ya que la cedula cuenta con un usuario en el sistema, elimine primero el usuario e intentelo denuevo.",
            icon: "warning",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "ingresarpersonas";
            }


            });
            </script>';

           //}
            
           

         

          }





      }



    }



     /**
   * EDITAR USUARIOS
   */
    static public function ctrEditarPersona(){

      if(isset($_POST["EditarCedula"])){
        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["EditarNombre"]) &&
          preg_match('/^[a-zA-Z0-9 ]/', $_POST["EditarApellidop"])  &&
           preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["EditarApellidom"])){



        $tabla = "persona";



       $datos = array("arr_cedula" => $_POST["EditarCedula"],
                        "arr_nombre" => $_POST["EditarNombre"],
                        "arr_apellido_p" => $_POST["EditarApellidop"],
                        "arr_apellido_m" => $_POST["EditarApellidom"],
                        "arr_email" => $_POST["EditarEmail"],
                        "arr_telefono" => $_POST["EditarTelefono"],
                        "arr_direccion" => $_POST["EditarDireccion"],
                        "arr_fechanacimiento" => $_POST["EditarFechaNacimiento"],
                        "arr_nacionalidad" => $_POST["EditarNacionalidad"],
                        "arr_lugarnacimiento" => $_POST["EditarLugarNacimiento"],
                        "arr_sexo" => $_POST["EditarSexo"],
                        "arr_etnia" => $_POST["EditarEtnia"],
                        "arr_estadocivil" => $_POST["EditarEstadocivil"],
                        "arr_t_sangre" => $_POST["EditarTipoSangre"],
                        "arr_hijosv" => $_POST["EditarHijosVarones"],
                        "arr_hijosm" => $_POST["EditarHijasMujeres"],
                        "arr_tabaquismo" => $_POST["EditarTabaquismo"],
                       "arr_ocupacion" => $_POST["EditarOcupacion"],
                       "arr_cargo" => $_POST["EditarCargo"],
                       "arr_idpareja" => $_POST["EditarIdpareja"],
                       "arr_referido" => $_POST["EditarReferido"],
                       "arr_id_cont_fam" => $_POST["EditarIdFamilia"],
                       "arr_barrio" => $_POST["EditarBarrio"],
                       "arr_parroquia" => $_POST["EditarParroquia"],
                       "arr_canton" => $_POST["EditarCanton"],
                       "arr_provincia" => $_POST["EditarProvincia"],
                       "arr_tiposeguro" => $_POST["EditarTipoSeguro"],);

       $respuesta = ModeloPersonas::mdlEditarPersona($tabla, $datos);

       

       if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "El Usuario a sido modificado correctamente.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "ingresarpersonas";
            }


            });
            </script>';

             
           }else if($respuesta == "error"){
            
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudieron modificar los datos en la base de datos, intentelo denuevo.",
            icon: "error",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "ingresarpersonas";
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
              window.location = "personas";
            }


            });
            </script>';


          }

    }
  }





    }// llave de clase