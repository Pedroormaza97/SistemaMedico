/*EDITAR USUARIO*/

$(document).on("click", ".btnEditarPersona", function(){ 
	var cedula = $(this).attr("cedula");
	//console.log("cedula", cedula);

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
	 		$("#EditarCedula").val(respuesta["cedulaPer"]);
	 		$("#EditarNombre").val(respuesta["nombrePer"]);
	 		$("#EditarApellidop").val(respuesta["apellidoPPer"]);
	 		$("#EditarApellidom").val(respuesta["apellidoMPer"]);
	 		$("#EditarEmail").val(respuesta["emailPer"]);
	 		$("#EditarTelefono").val(respuesta["telefonoPer"]);
	 		$("#EditarDireccion").val(respuesta["direccionPer"]);
	 		$("#EditarFechaNacimiento").val(respuesta["fechaNacimientoPer"]);
	 		$("#EditarNacionalidad").val(respuesta["nacionalidadPer"]);
	 		$("#EditarLugarNacimiento").val(respuesta["lugarNacimientoPer"]);
	 		$("#EditarSexo").val(respuesta["sexoPer"]);
	 		$("#EditarEtnia").val(respuesta["etniaPer"]);
	 		$("#EditarEstadocivil").val(respuesta["estadoCivilPer"]);
	 		$("#EditarTipoSangre").val(respuesta["tipoSangrePer"]);
	 		$("#EditarHijosVarones").val(respuesta["hijosVPer"]);
	 		$("#EditarHijasMujeres").val(respuesta["hijosMPer"]);
	 		$("#EditarTabaquismo").val(respuesta["tabaquismoPer"]);
	 		$("#EditarOcupacion").val(respuesta["ocupacionPer"]);
	 		$("#EditarCargo").val(respuesta["cargoPer"]);
	 		$("#EditarIdpareja").val(respuesta["idPareja"]);
	 		$("#EditarReferido").val(respuesta["referidoPer"]);
	 		$("#EditarIdFamilia").val(respuesta["idFamilia"]);
	 		$("#EditarFechaAdminPer").val(respuesta["fechaAdminPer"]);
	 		$("#EditarProvincia").val(respuesta["provinciaPer"]);
	 		$("#EditarCanton").val(respuesta["cantonPer"]);
	 		$("#EditarParroquia").val(respuesta["parroquiaPer"]);
	 		$("#EditarBarrio").val(respuesta["barrioPer"]);
	 		$("#EditarTipoSeguro").val(respuesta["tipoSeguroPer"]);

	 		



	 		}



	 });


})
	
	
/*

REVISAR SI LA CEDULA YA ESTA INGRESADA
*/	

$("#nuevaCedula").change(function(){

	var cedula =$(this).val();

	var datos = new FormData();

	datos.append("validarCedula", cedula);

	$.ajax({

		url:"ajax/personas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta){

			if(respuesta){
				//console.log("respuesta", respuesta);
				var nombre = respuesta["1"];
				var apellidop = respuesta["2"];
				var apellidom = respuesta["3"];


				$("#nuevaCedula").before('<script> Swal.fire({ title: "Error!",text: "La cedula ingresada ya existe en la base de datos y pertenece a '+nombre+' '+apellidop+' '+apellidom+'.",icon: "error",confirmButtonText: "Ok"});</script>');



				$("#nuevaCedula").val("");




			}


		}



	})



})

$("#cedulaUsuario").change(function(){

	var cedula =$(this).val();

	var datos = new FormData();

	datos.append("validarCedulaUsuario", cedula);

	$.ajax({

		url:"ajax/personas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta){

			//console.log("respuesta", respuesta);

			if(respuesta){


				
				$("#nombreUsuario").val(respuesta["1"]);
				$("#password1").val(respuesta["0"]);


				//aqui se inserta el valor del usuario en la caja de texto

			}else{


				$("#cedulaUsuario").before('<script> Swal.fire({ title: "Alerta!",text: "La cedula ingresada no existe en la base de datos, por lo cual no podrá crear el usuario.",icon: "warning",confirmButtonText: "Ok"});</script>');
				$("#cedulaUsuario").val("");
				$("#nombreUsuario").val("");
				$("#password1").val("");


			}


		}



	})



})



//Comprobar si el usaurio ya existe

$("#cedulaUsuario").change(function(){

	var cedula =$(this).val();

	var datos = new FormData();

	datos.append("validarUsuario", cedula);

	$.ajax({

		url:"ajax/personas.ajax.php",
		method: "POST",
		data: datos,
		cache: false,
		contentType: false,
		processData: false,
		dataType: "json",
		success:function(respuesta1){

			//console.log("respuesta1", respuesta1);

			var user = respuesta1["0"];

			 if(respuesta1){

				$("#cedulaUsuario").before('<script> Swal.fire({ title: "Error!",text: "La cedula ingresada ya pertenece al usuario: '+user+'",icon: "error",confirmButtonText: "Ok"});</script>');
			

			 	$("#cedulaUsuario").val("");
			 	$("#nombreUsuario").val("");
			 	$("#password1").val("");


			 }


		}



	})



})





//ELIMINAR PERSONA


$(document).on("click", ".btnEliminarPersona", function(){ 

	cedula = $(this).attr("cedula");
	//para futura eliminacion automatica de usuario al eliminar una persona
	//usuario = $(this).attr("usuario");

Swal.fire({
		title: "¿Esta seguro de eliminar esta persona?",
		text: "Si no lo está puede cancelar la accion!",
		icon: "warning",
		showCancelButton: true,
		confirmButtonColor: "#3085d6",
		cancelButtonColor: "#d33",
		cancelButtonText: "Cancelar",
		confirmButtonText: "Si, eliminar la persona"


	}).then((result)=>{
		if(result.value){
			window.location = "index.php?ruta=personas&cedula="+cedula;


		}

	})





})























			

	 		




	 	