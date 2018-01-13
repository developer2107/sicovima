//Gre Melina the pretty girl
var indiceg;
var gananciag;
var costog;
var subtotalg;
var idMot;
    

function modificarDetalle(indice){
	console.log(indice);
	indiceg=indice;
	cantidadg = $('#cd'+indice).text();
	costog = $('#ct'+indice).text();
	gananciag = $('#gn'+indice).text();//captura el contenido .value() captura el indice ejm en un option
	subtotalg = $('#st'+indice).text();
	console.log(cantidadg+costog+gananciag);

	$("#cantidad").val(cantidadg);
	$("#gananciau").val(gananciag);//enviar y mostrar en los input
	$("#agregarVentas").val("Modificar");

}

function agregarMotivo(id){
	idMot=id;
}

function agregarMotivoEst(){
	var motivo = $("#motivo").val();
	console.log(idMot+"  "+motivo);
	var ruta="/github/sicovima/public/motivov/"+idMot+"/"+motivo;
	console.log(idMot+"  "+motivo);
	$.get(ruta,function(res){
		location.href="/github/sicovima/public/ListadeVentas";
	});
}

