<?php
class ControladorPersonas{
  /**
   * INGRESO PERSONAS
   */
       static public function ctrCrearPersona(){
    if(isset($_POST["nuevaCedula"])){
        if(preg_match('/^[a-zA-Z0-9 ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevaCedula"])){

           $tabla = "usuarios";


           $datos = array("nombre" => $_POST["nuevoNombre"],
                        "apellidop" => $_POST["nuevoApellidop"],
                        "apellidom" => $_POST["nuevoApellidom"],
                        "direccion" => $_POST["nuevaDireccion"],
                        "sexo" => $_POST["nuevoSexo"],
                        "etnia" => $_POST["nuevaEtnia"],
                        "estadocivil" => $_POST["nuevoEstadocivil"],
                        "fecha_nacimiento" => $_POST["nuevaFechaNacimiento"],
                        "hijosv" => $_POST["nuevoHijosvarones"],
                        "hijasm" => $_POST["nuevasHijasmujeres"],
                        "tabaquismo" => $_POST["nuevoTabaquismo"],
                       "ocupacion" => $_POST["nuevaOcupacion"],
                       "cargo" => $_POST["nuevoCargo"],
                       "id_pareja" => $_POST["nuevoIdpareja"]);
          

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