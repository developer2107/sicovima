$(document).on('ready',function(){

	$('#departamentos').on('change',function(e){
		var obtener=$('#departamentos').find('option:selected');
		var municipio=$('#municipios');
		var idDepto =obtener.val();
		if (idDepto!=0) {
			var ruta="/github/sicovima/public/municipio/"+idDepto;
			$.get(ruta,function(res){
				if (res=='false') {
					municipio.empty();
				}else{
					municipio.empty();
					$(res).each(function(key,value){
						cadena = "<option value='"+value.id+"'>"+value.nombre_Muni+"</option>";
						municipio.append(cadena);
					});
				};
			});
		}else{
			municipio.empty();
		};
	});

	$('#natural').click(function(){
		$('#datosNatural').css("display","block");
		$('#datosJuridico').css("display","none");
	});

	$('#juridico').click(function(){
		$('#datosNatural').css("display","none");
		$('#datosJuridico').css("display","block");
	});

	// $('#agregarCorreo').click(function(){

	// 	var cantidad=$("#cantidad").val();

	// 	if ((parseFloat(cantidad) <= parseFloat(a_existencia))&&(!productosAgregados.includes(a_id))) {
	// 		var total=parseFloat($("#totalVenta").val());
	// 		var gananciau=$("#gananciau").val();
	// 		var tabla=$("#tablaProductos");
	// 		var subtotal=(parseFloat(gananciau)+parseFloat(a_precio))*parseFloat(cantidad);
	// 		var detalles="<tr>"+
	// 		"<td>"+ a_producto +"</td>"+
	// 		"<td>"+ cantidad +"</td>"+
	// 		"<td>"+ a_precio +"</td>"+
	// 		"<td>"+ gananciau +"</td>"+
	// 		"<td>"+ subtotal +"</td>"+
	// 		"<td>"+ "<input  type='hidden' name='idV[]' value='"+a_id+"'/>" +
	// 		"<input type='hidden' name='cantidadV[]' value='"+cantidad+"'/>" +
	// 		"<input  type='hidden' name='subtotalV[]' value='"+subtotal+"'/>" +
	// 		"<a class='btn btn-success btn-circle' type='button' id='Eliminar'><i class='fa fa-pencil-square-o'></i></a>"+
	// 		"</td>"+
	// 		"</tr>";
	// 		total = total + subtotal;
	// 		tabla.append(detalles);
	// 		$("#cantidad").val("");
	// 		$("#gananciau").val("");
	// 		$("#totalVenta").val(total);
	// 		//$('#myModal6').modal('hide');
	// 		productosAgregados.push(a_id);
	// 	}else{
	// 		if (!parseFloat(cantidad) <= parseFloat(a_existencia)) {
	// 			alert("La cantidad solicitada no esta disponible");
	// 		}else{
	// 			alert("No puede elejir el mismo producto");
	// 		}

	// 	};
	// });

	// $('#agregarTelefono').click(function(){

	// 	var cantidad=$("#cantidad").val();

	// 	if ((parseFloat(cantidad) <= parseFloat(a_existencia))&&(!productosAgregados.includes(a_id))) {
	// 		var total=parseFloat($("#totalVenta").val());
	// 		var gananciau=$("#gananciau").val();
	// 		var tabla=$("#tablaProductos");
	// 		var subtotal=(parseFloat(gananciau)+parseFloat(a_precio))*parseFloat(cantidad);
	// 		var detalles="<tr>"+
	// 		"<td>"+ a_producto +"</td>"+
	// 		"<td>"+ cantidad +"</td>"+
	// 		"<td>"+ a_precio +"</td>"+
	// 		"<td>"+ gananciau +"</td>"+
	// 		"<td>"+ subtotal +"</td>"+
	// 		"<td>"+ "<input  type='hidden' name='idV[]' value='"+a_id+"'/>" +
	// 		"<input type='hidden' name='cantidadV[]' value='"+cantidad+"'/>" +
	// 		"<input  type='hidden' name='subtotalV[]' value='"+subtotal+"'/>" +
	// 		"<a class='btn btn-success btn-circle' type='button' id='Eliminar'><i class='fa fa-pencil-square-o'></i></a>"+
	// 		"</td>"+
	// 		"</tr>";
	// 		total = total + subtotal;
	// 		tabla.append(detalles);
	// 		$("#cantidad").val("");
	// 		$("#gananciau").val("");
	// 		$("#totalVenta").val(total);
	// 		//$('#myModal6').modal('hide');
	// 		productosAgregados.push(a_id);
	// 	}else{
	// 		if (!parseFloat(cantidad) <= parseFloat(a_existencia)) {
	// 			alert("La cantidad solicitada no esta disponible");
	// 		}else{
	// 			alert("No puede elejir el mismo producto");
	// 		}

	// 	};
	// });

});
