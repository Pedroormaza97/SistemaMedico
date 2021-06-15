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
            echo '<br><div class="alert alert-succes">CORRECTO!!!!</div>';


           }else if($respuesta == "error"){
            echo '<br><div class="alert alert-succes">No se ingresaron los datos a la BD</div>';

           }
            
           

         

          }else{
            echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
            /*echo '<br><script> 
            Swall.fire(
            "Error!",
            "You clicked the button!",
           "success").then((result)=>{

            if(result.value){
              window.location = "usuarios"
            }

           })
            </script>';*/


          }

          
         }
       }
    }