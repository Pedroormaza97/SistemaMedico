<?php
class ControladorUsuarios{
  /**
   * INGRESO DE USUARIOS
   */
    public function ctrIngresoUsuario(){

      if(isset($_POST["ingUsuario"])){
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
  			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])){
           $tabla = "usuarios";

           $item = "usuario";
           $valor = $_POST["ingUsuario"];

           $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

          if($respuesta["usuario"] == $_POST["ingUsuario"] && $respuesta["password"] == $_POST["password"]){

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

}
