//Gre
var indiceg;
var gananciag;
var costog;
var subtotalg;
var idMot;

$(document).on('ready',function(){
	var a_producto;
	var a_existencia;
	var a_precio;
	var a_id;
	var productosAgregados=[];

	$('#clientes').on('change',function(e){
		var obtener=$('#clientes').find('option:selected');
		//alert(obtener.val());
		var idCliente =obtener.val();
		if (idCliente!=0) {
			var ruta="/github/sicovima/public/responsable/"+idCliente;
			$.get(ruta,function(res){
				if (res!='false') {
					$("#nombreResponsable").val(res.nombreResponsable_CJ);
				}else{
					$("#nombreResponsable").val("");
				};
			});
		}else{
			$("#nombreResponsable").val("");
		};
	});

	$('#tablaProductosTerm').on('click','#AddCant',function(e){
		a_producto=$(this).parents('tr').find('input:eq(0)').val();
		a_existencia=$(this).parents('tr').find('input:eq(1)').val();
		a_precio=$(this).parents('tr').find('input:eq(2)').val();
		a_id=$(this).parents('tr').find('input:eq(3)').val();
		$("#agregarVentas").val("Agregar");
		$("#cantidad").val("");
		$("#gananciau").val("");
		
	});

	$('#agregarVentas').click(function(){
		var accion = $("#agregarVentas").val();
		if (accion == "Agregar") {

			var cantidad=$("#cantidad").val();

		if ((parseFloat(cantidad) <= parseFloat(a_existencia))&&(!productosAgregados.includes(a_id))) {
			var total=parseFloat($("#totalVenta").val());
			var gananciau=$("#gananciau").val();
			var tabla=$("#tablaProductos");
			var subtotal=(parseFloat(gananciau)+parseFloat(a_precio))*parseFloat(cantidad);
			var detalles="<tr>"+
			"<td>"+ a_producto +"</td>"+
			"<td>"+ cantidad +"</td>"+
			"<td>"+ a_precio +"</td>"+
			"<td>"+ gananciau +"</td>"+
			"<td>"+ subtotal.toFixed(2) +"</td>"+
			"<td>"+ "<input  type='hidden' name='idV[]' value='"+a_id+"'/>" +
			"<input type='hidden' name='cantidadV[]' value='"+cantidad+"'/>" +
			"<input  type='hidden' name='costoProdV[]'step='.01' value='"+a_precio+"'/>" +
			"<input  type='hidden' name='gananciaV[]' step='.01' value='"+gananciau+"'/>" +
			"<input  type='hidden' name='id[]' value=''/>" +
			"<a class='btn btn-danger btn-circle' type='button' id='Eliminar'><i class='fa fa-times'></i></a>"+
			"</td>"+
			"</tr>";        
			total = total + subtotal;
			tabla.append(detalles);
			$("#cantidad").val("");
			$("#gananciau").val("");
			$("#totalVenta").val(total.toFixed(2));

			//$('#myModal6').modal('hide');
			var objeto=document.getElementById("cerraM");
			//$('#myModal6').setAttribute('data-dismiss','modal');
			objeto.click();
			productosAgregados.push(a_id);
			}else{
				if (!parseFloat(cantidad) <= parseFloat(a_existencia)) {
					alert("La cantidad solicitada no esta disponible");
				}else{
					alert("No puede elejir el mismo producto");
				}

		};
		}else{
			var total=parseFloat($("#totalVenta").val());
			var cantidad=$("#cantidad").val();
			var gananciau=$("#gananciau").val();
			var subtotal=(parseFloat(gananciau)+parseFloat(costog))*parseFloat(cantidad);
			console.log(indiceg+costog);
			$('#cd'+indiceg).text(cantidad);
			$('#st'+indiceg).text(subtotal);
			$('#gn'+indiceg).text(gananciau);
			$('#cdDV'+indiceg).val(cantidad);
			$('#gnDV'+indiceg).val(gananciau);
			total=total-subtotalg;
			total=total+subtotal;
			console.log(subtotalg);
			$('#totalVenta').val(total.toFixed(2));
		}

		
	});

	$('#tablaProductos').on('click','#Eliminar',function(e){
		var total=parseFloat($("#totalVenta").val());
		var cantidadE=parseFloat($(this).parents('tr').find('input:eq(1)').val());
		var gananciaE=parseFloat($(this).parents('tr').find('input:eq(3)').val());
		precio=parseFloat($(this).parents('tr').find('input:eq(2)').val());
		id_Product=parseFloat($(this).parents('tr').find('input:eq(0)').val());
		var aux = ((gananciaE+precio)*cantidadE);
		total = total - aux;
		$(this).parent('td').parent('tr').remove();
		$("#totalVenta").val(total.toFixed(2));
		var indice = productosAgregados.indexOf(id_Product);
		productosAgregados.splice(indice,1);
	});

	$('#agregarMotivo').click(function(){
		var accion = $("#agregarMotivo").val();
		if (accion == "Agregar") {
			var obtener=$('#ventasTabla').find('option:selected');
		//alert(obtener.val());
			var idCliente =obtener.val();
			var ruta="/github/sicovima/public/motivo/"+idCliente;

		}else{
			
		}

		
	});


});

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
	var ruta="/github/sicovima/public/motivo/"+idMot+"/"+motivo;
	$.get(ruta,function(res){
		location.href="/github/sicovima/public/ListadeVentas";
	});
}