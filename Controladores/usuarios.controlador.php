<?php
class ControladorUsuarios{
  /**
   * INGRESO DE USUARIOS
   */
     static public function ctrIngresoUsuario(){

      if(isset($_POST["ingUsuario"])){
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
  			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])){
           $tabla = "usuarios";

           $item = "UserUsuario";
           $valor = $_POST["ingUsuario"];

           $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

          if($respuesta["userUsuario"] == $_POST["ingUsuario"] && $respuesta["passUsuario"] == $_POST["password"]){

             //echo '<div class="alert -success">Bienvenido al Sistema</div>';
            $_SESSION["iniciarsesion"] = "ok";

            echo '<script>

              window.location = "inicio";

            </script>';

           }else{
             echo '<br><div class="alert alert-danger">Error al ingresar, vuelve a intentarlo</div>';
           }
         }
       }
    }

  /**
   * REGISTRO DE USUARIOS
   */
   static public function ctrCrearUsuario(){
    if(isset($_POST["nuevoUsuario"])){

        if(preg_match('/^[a-zA-Z0-9 ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["nuevoNombre"]) &&
          preg_match('/^[a-zA-Z0-9]/', $_POST["nuevoUsuario"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPassword"]) &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevoPerfil"])){

           $tabla = "usuarios";


           $datos = array("nombre" => $_POST["nuevoNombre"],
                        "usuario" => $_POST["nuevoUsuario"],
                        "password" => $_POST["nuevoPassword"],
                        "perfil" => $_POST["nuevoPerfil"]);
          

           $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

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
 

