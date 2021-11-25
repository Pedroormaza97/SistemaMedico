function listar_provincias(){
        $.ajax({
            url:'../sistemamedico/Controladores/controlador_listar_provincia.php',
            type: 'POST'

        }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";  
            }
            $("#idProvincia").html(cadena);
            var idprovincia = $("#idProvincia").val();
            listar_canton(idprovincia);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#idProvincia").html(cadena);
        }
        })

}
function listar_canton(idprovincia){
    $.ajax({
        url:'../sistemamedico/Controladores/controlador_listar_Canton.php',
        type:'POST',
        data:{
            idprovincia:idprovincia
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";
                
            }
            $("#idCanton").html(cadena);
            var idCanton = $("#idCanton").val();
            listar_parroquia(idCanton);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#idCanton").html(cadena);
        }
    })
}
function listar_parroquia(idCanton){
    $.ajax({
        url:'../sistemamedico/Controladores/controlador_listar_Parroquia.php',
        type:'POST',
        data:{
            idCanton:idCanton
        }
    }).done(function(resp){
        var data = JSON.parse(resp);
        var cadena="";
        if(data.length>0){
            for (var i =0; i < data.length; i++) {
                cadena +="<option value='"+data[i][0]+"'>"+data[i][1]+"</option>";  
            }
            $("#idParroquia").html(cadena);
        }else{
            cadena +="<option value=''>'NO SE ENCONTRARON REGISTROS'</option>";
            $("#idParroquia").html(cadena);
        }
    })
}