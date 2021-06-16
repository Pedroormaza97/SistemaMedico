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
                        "arr_dir_domicilio" => $_POST["nuevaDireccion"],
                        "arr_sexo" => $_POST["nuevoSexo"],
                        "arr_etnia" => $_POST["nuevaEtnia"],
                        "arr_estadocivil" => $_POST["nuevoEstadocivil"],
                        "arr_fecha_naci" => $_POST["nuevaFechaNacimiento"],
                        "arr_t_sangre" => $_POST["nuevoTiposangre"],
                        "arr_hijosv" => $_POST["nuevosHijosvarones"],
                        "arr_hijosm" => $_POST["nuevasHijasmujeres"],
                        "arr_tabaquismo" => $_POST["nuevoTabaquismo"],
                       "arr_ocupacion" => $_POST["nuevaOcupacion"],
                       "arr_cargo" => $_POST["nuevoCargo"],
                       "arr_idpareja" => $_POST["nuevoIdpareja"]);
          

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
              window.location = "personas";
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
              window.location = "personas";
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
    }