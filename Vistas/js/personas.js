/*EDITAR USUARIO*/

$(".btnEditarPersona").click(function(){ 
	var cedula = $(this).attr("cedula");
	console.log("cedula", cedula);

	 var datos = new FormData();
	 datos.append("cedula", cedula);

	 $.ajax({
	 	url:"ajax/personas.ajax.php",
	 	method: "POST",
	 	data: datos,
	 	cache: false,
	 	contentType:false,
	 	processData: false,
	 	dataType: "json",
	 	success: function(respuesta){
	 		$("#editarCedula").val(respuesta["cedula"]);
	 		$("#editarNombre").val(respuesta["nombre"]);
	 		$("#editarApellidop").val(respuesta["apellido_p"]);
	 		$("#editarApellidom").val(respuesta["apellido_m"]);
	 		$("#editarDireccion").val(respuesta["Dir_domicilio"]);
	 		$("#editarSexo").html(respuesta["Sexo"]);
	 		$("#editarSexo").val(respuesta["Sexo"]);
	 		$("#editarEtnia").val(respuesta["Etnia"]);
	 		$("#editarEstadocivil").html(respuesta["EstadoCivil"]);
	 		$("#editarEstadocivil").val(respuesta["EstadoCivil"]);
	 		$("#editarFechaNacimiento").val(respuesta["Fecha_Naci"]);
	 		$("#editarTiposangre").html(respuesta["T_sangre"]);
	 		$("#editarTiposangre").val(respuesta["T_sangre"]);
	 		$("#editarHijosvarones").val(respuesta["HijosV"]);
	 		$("#editarHijasmujeres").val(respuesta["HijosM"]);
	 		$("#editarTabaquismo").val(respuesta["Tabaquismo"]);
	 		$("#editarOcupacion").val(respuesta["Ocupacion"]);
	 		$("#editarCargo").val(respuesta["Cargo"]);
	 		$("#editarIdpareja").val(respuesta["idPareja"]);

	 		

	 		
	 		

	 		
	 		

	 		

	 		console.log("respuesta", respuesta);


	 		}



	 });


})
	
	
	// 		$("#editarPerfil").html(respuesta["rol_idrol"]);
	// 		$("#editarPerfil").val(respuesta["rol_idrol"]);
	// 		$("#fotoActual").val(respuesta["FotoPerfilUsuario"]);
	// 		$("#editarCedulap").val(respuesta["cedulaP"]);
	// 		$("#editarEstado").html(respuesta["Estado"]);
	// 		$("#editarEstado").val(respuesta["Estado"]);

			
	// 		if(respuesta["FotoPerfilUsuario"] != ""){

	// 			$(".previsualizar").attr("src", respuesta["FotoPerfilUsuario"]);

	// 		}

			
			

			
	// 		//$("#editarFotoPerfil").val(respuesta["FotoPerfilUsuario"]);
			

	 		




	 	