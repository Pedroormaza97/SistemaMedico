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