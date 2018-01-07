function CargarOpciones(url){
	$.ajax({
		type: "get",
		url:url,
		data:{},
		success:function(datos){
			$('#contenido').html(datos);
		}
	});	
}