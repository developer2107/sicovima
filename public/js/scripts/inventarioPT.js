var idMotProd;

function agregarMotivoProd(id){
	idMotProd=id;
}

function agregarMotivoEstProd(){
	var descuentoProd = $("#descuento").val();
	var motivoProd = $("#motivoProd").val();
	var ruta="/github/sicovima/public/motivop/"+idMotProd+"/"+motivoProd+"/"+descuentoProd;
	// alert("prueba");
	$.get(ruta,function(res){
		location.href="/github/sicovima/public/ProductosTerminados";
	});
}