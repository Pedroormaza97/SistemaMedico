<?php
class ControladorUsuarios{
  /**
   * INGRESO DE USUARIOS
   */
     static public function ctrIngresoUsuario(){

      if(isset($_POST["ingUsuario"])){
        if(preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingUsuario"]) &&
  			   preg_match('/^[a-zA-Z0-9]+$/', $_POST["password"])){

          $encriptar = crypt($_POST["password"], '$2a$07$usesomesillystringforsalt$');

           $tabla = "usuarios";

           $item = "userUsuario";
           $valor = $_POST["ingUsuario"];

           $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);

          if($respuesta["userUsuario"] == $_POST["ingUsuario"] && $respuesta["passUsuario"] == $encriptar){

             //echo '<div class="alert -success">Bienvenido al Sistema</div>';
            $_SESSION["iniciarsesion"] = "ok";
            $_SESSION["idUsuario"] = $respuesta["idUsuario"];
            $_SESSION["nombreUsuario"] = $respuesta["userUsuario"];
            $_SESSION["rol"] = $respuesta["rol_idrol"];
            $_SESSION["fotoUsuario"] = $respuesta["FotoPerfilUsuario"];
            

            echo '<script>

              window.location = "inicio";

            </script>';

           }else{
             
             echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "Error al ingresar, vuelve a intentarlo.",
            icon: "error",
           confirmButtonText: "Ok"


            });
            </script>';
           }
         }
       }
    }

  /*
   * REGISTRO DE USUARIOS
   */
   static public function ctrCrearUsuario(){
    if(isset($_POST["nuevoUsuario"])){

        if(preg_match('/^[a-zA-Z0-9 ]+$/', $_POST["nuevoUsuario"]) &&
          preg_match('/^[a-zA-Z0-9]/', $_POST["nuevoPassword"])  &&
           preg_match('/^[a-zA-Z0-9]+$/', $_POST["nuevaCedulap"])){
          /*
          VALIDACION DE IMAGEN
          */

          $ruta = "";

          if(isset($_FILES["nuevaFoto"]["tmp_name"])){
            list($ancho, $alto) = getimagesize($_FILES["nuevaFoto"]["tmp_name"]);
        
            $nuevoAncho = 500;
            $nuevoAlto = 500;

            //CREAR DIRECTORIO DE LA IMAGEN

            $directorio = "vistas/img/usuarios/".$_POST["nuevoUsuario"];
            mkdir($directorio, 0777);

            //DE ACUERDO A EL TIPO DE IMAGEN ES EL METODO DE INGRESO

            //SI LA IMAGEN ES JPG
            if($_FILES["nuevaFoto"]["type"] == "image/jpeg"){

              //GUARDANDO LA IMAGEN EN EL DIRECTORIO
              $aleatorio = mt_rand(100,999);
              $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".jpg";
              $origen = imagecreatefromjpeg($_FILES["nuevaFoto"]["tmp_name"]);
              $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
              imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
              imagejpeg($destino, $ruta);

            }

            //SI LA IMAGEN ES PNG
            if($_FILES["nuevaFoto"]["type"] == "image/PNG"){

              //GUARDANDO LA IMAGEN EN EL DIRECTORIO
              $aleatorio = mt_rand(100,999);
              $ruta = "vistas/img/usuarios/".$_POST["nuevoUsuario"]."/".$aleatorio.".png";
              $origen = imagecreatefrompng($_FILES["nuevaFoto"]["tmp_name"]);
              $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
              imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
              imagepng($destino, $ruta);

            }

          }

           if($_POST["nuevoEstado"] == ""){

            $_POST["nuevoEstado"] = "inactivo";


           }

           $tabla = "usuarios";

           $encriptar = crypt($_POST["nuevoPassword"], '$2a$07$usesomesillystringforsalt$');


           $datos = array("arr_usuario" => $_POST["nuevoUsuario"],
                        "arr_password" => $encriptar,
                        "arr_rol" => $_POST["nuevoRol"],
                        "arr_cedulap" => $_POST["nuevaCedulap"],
                        "arr_rutaImg" => $ruta,
                        "arr_estado" => $_POST["nuevoEstado"]);
          

           $respuesta = ModeloUsuarios::mdlIngresarUsuario($tabla, $datos);

           if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "Los datos del nuevo usuario fueron ingresados.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "usuarios";
            }


            });
            </script>';

            
          //ALGORITMO PARA FUTURAS COMPROBACIONES DE INGRESO A DE DATOS A LA BD 
           }else if($respuesta == "error"){
            
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "No se pudieron ingresar los datos a la base de datos, intentelo denuevo.",
            icon: "error",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "usuarios";
            }


            });
            </script>';

           //}
            
           

         

          }


          }else{
            
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "Usted ha ingresado caracteres especiales no permitidos, intentelo nuevamente.",
            icon: "error",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "usuarios";
            }


            });
            </script>';

          
         }
       }

     }

  /**
   * MOSTRAR USUARIOS
   */
    static public function ctrMostrarUsuarios($item, $valor){
      $tabla = "usuarios";

      $respuesta = ModeloUsuarios::MdlMostrarUsuarios($tabla, $item, $valor);
      return $respuesta;


    }

    /**
   * EDITAR USUARIOS
   */
    static public function ctrEditarUsuario(){

      if(isset($_POST["editarUsuario"])){

        /*
          VALIDACION DE IMAGEN
          */

          $ruta = $_POST["fotoActual"];

          if(isset($_FILES["editarFoto"]["tmp_name"])){
            list($ancho, $alto) = getimagesize($_FILES["editarFoto"]["tmp_name"]);
        
            $nuevoAncho = 500;
            $nuevoAlto = 500;

            //CREAR DIRECTORIO DE LA IMAGEN

            $directorio = "vistas/img/usuarios/".$_POST["editarUsuario"];


            //PRIMERO VALIDAR SI EXISTE UNA IMAGEN EN LA BD
            if(!empty($_POST["fotoActual"])){

              unlink($_POST["fotoActual"]);


            }else{

              mkdir($directorio, 0777);

            }


            //DE ACUERDO A EL TIPO DE IMAGEN ES EL METODO DE INGRESO



            //SI LA IMAGEN ES JPG
            if($_FILES["editarFoto"]["type"] == "image/jpeg"){

              //GUARDANDO LA IMAGEN EN EL DIRECTORIO
              $aleatorio = mt_rand(100,999);
              $ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".jpg";
              $origen = imagecreatefromjpeg($_FILES["editarFoto"]["tmp_name"]);
              $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
              imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
              imagejpeg($destino, $ruta);

            }

            //SI LA IMAGEN ES PNG
            if($_FILES["editarFoto"]["type"] == "image/PNG"){

              //GUARDANDO LA IMAGEN EN EL DIRECTORIO
              $aleatorio = mt_rand(100,999);
              $ruta = "vistas/img/usuarios/".$_POST["editarUsuario"]."/".$aleatorio.".png";
              $origen = imagecreatefrompng($_FILES["editarFoto"]["tmp_name"]);
              $destino = imagecreatetruecolor($nuevoAncho, $nuevoAlto);
              imagecopyresized($destino, $origen, 0, 0, 0, 0, $nuevoAncho, $nuevoAlto, $ancho, $alto);
              imagepng($destino, $ruta);

            }

          }

          $tabla = "usuarios";

          if($_POST["editarPassword"] !=""){
            if(preg_match('/^[a-zA-Z0-9]/', $_POST["editarPassword"])){

              $encriptar = crypt($_POST["editarPassword"], '$2a$07$usesomesillystringforsalt$');
          }else{
            echo '<br><script> 
            Swal.fire({
            title: "Error!",
            text: "La contraseña no debe ir vacia o llevar caracteres especiales, intentelo denuevo.",
            icon: "error",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "usuarios";
            }


            });
            </script>';

          }
       }else{

        $encriptar = $passwordActual;


       }

       if($_POST["editarEstado"] == ""){

            $_POST["editarEstado"] = "inactivo";


           }



       $datos = array("arr_usuario" => $_POST["editarUsuario"],
                        "arr_password" => $encriptar,
                        "arr_rol" => $_POST["editarRol"],
                        "arr_cedulap" => $_POST["editarCedulap"],
                        "arr_rutaImg" => $ruta,
                        "arr_estado" => $_POST["editarEstado"]);

       $respuesta = ModeloUsuarios::mdlEditarUsuario($tabla, $datos);

       if($respuesta == "ok"){
            
            echo '<script> 
            Swal.fire({
            title: "Confirmacion!",
            text: "El Usuario a sido modificado correctamente.",
            icon: "success",
           confirmButtonText: "Ok"}).then((result)=>{

            if(result.value){
              window.location = "usuarios";
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
              window.location = "usuarios";
            }


            });
            </script>';

           //}
            
           

         

          }
       

        




      }



    }










 }//llave cierre de la class

 

