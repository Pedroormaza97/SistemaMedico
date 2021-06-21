/*SUBIENDO IMAGEN DEL USUARIO*/

$(".nuevaFoto").change(function(){

	var imagen = this.files[0];

	//Validar el formato de la imagen

	if(imagen["type"] != "image/jpeg" && imagen["type"] != "image/png"){

		$(".nuevaFoto").val("");

		Swal.fire({
            title: "Error!",
            text: "La Imagen debe ser JPG o PNG.",
            icon: "error",
           confirmButtonText: "Ok"});
		


	}else if(imagen["size"] > 2000000){
		$(".nuevaFoto").val("");
		Swal.fire({
            title: "Error!",
            text: "La Imagen no debe pesar mas de 5 MB.",
            icon: "error",
           confirmButtonText: "Ok"});
		
		}else{

			var datosImagen = new FileReader;
			datosImagen.readAsDataURL(imagen);

			$(datosImagen).on("load", function(event){
				var rutaImagen = event.target.result;
				$(".previsualizar").attr("src", rutaImagen);

			})
		}
	

})


/*EDITAR USUARIO*/

$(".btnEditarUsuario").click(function(){
	var idUsuario = $(this).attr("idUsuario");
	console.log("idUsuario", idUsuario);

	var datos = new FormData();
	datos.append("idUsuario", idUsuario);

	$.ajax({
		url:"ajax/usuarios.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType:false,
		processData: false,
		dataType: "json",
		success: function(respuesta){
			$("#editarUsuario").val(respuesta["userUsuario"]);
			$("#passwordActual").val(respuesta["passUsuario"]);
			$("#editarPerfil").html(respuesta["rol_idrol"]);
			$("#editarPerfil").val(respuesta["rol_idrol"]);
			$("#fotoActual").val(respuesta["FotoPerfilUsuario"]);
			$("#editarCedulap").val(respuesta["cedulaP"]);

			if(respuesta["FotoPerfilUsuario"] != ""){


				$(".previsualizar").attr("src", respuesta["FotoPerfilUsuario"]);
			}else{
				$(".previsualizar").attr("src", "vistas/img/usuarios/imguser.png");

			}
			//$("#editarFotoPerfil").val(respuesta["FotoPerfilUsuario"]);
			//$("#editarEstado").val(respuesta["Estado"]);

			console.log("respuesta", respuesta);




		}



	});





})

