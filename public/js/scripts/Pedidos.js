// function ShowSelected()
// {
//   var select = document.getElementById("addLocationIdReq"); /*Obtener el SELECT */
// var valor = select.options[select .selectedIndex].value; /* Obtener el valor */
//     alert(valor);
// }

// $(document).ready(function(){
// var id = $('#tipo_MP').val();    //#addLocationIdReq es el identificador
//                                           // de tu elemento
// alert(id);
// });

$(document).on('ready',function(){
  $('#tablaDetallePedido').on('click','#AddCant',function(e){
    var tabla_p =$('#modalTablaInicio');
    $("#limpio").empty();
    var id_p = $(this).parents('tr').find('input:eq(0)').val();
    var cantidad_p = $(this).parents('tr').find('input:eq(1)').val();
    var tipo_p = $(this).parents('tr').find('input:eq(2)').val();
    var talla_p = $(this).parents('tr').find('input:eq(3)').val();
    var estilo_p = $(this).parents('tr').find('input:eq(4)').val();
    var color_p = $(this).parents('tr').find('input:eq(5)').val();
    var descripcion_p = $(this).parents('tr').find('input:eq(6)').val();

    var datos_p = "<tr>"+
    "<td>"+ cantidad_p +"</td>"+
    "<td>"+ talla_p +"</td>"+
    "<td>"+ estilo_p +"</td>"+
    "<td>"+ color_p +"</td>"+
    "<td>"+ descripcion_p +"</td>"+
    "<td>"+ "<input  type='hidden' name='idP' value='"+id_p+"'/>" +
    "<input  type='hidden' name='cantidad' value='"+cantidad_p+"'/>" +
    "<input type='hidden' name='tipo_p' value='"+tipo_p+"'/>" +
    "<input  type='hidden' name='talla_p'value='"+talla_p+"'/>" +
    "<input  type='hidden' name='estilo_p' value='"+ estilo_p+"'/>" +
    "<input  type='hidden' name='color_p' value='"+ color_p+"'/>" +
    "<input  type='hidden' name='descripcion_p' value='"+ descripcion_p+"'/>" +
    "<a class='btn btn-success btn-circle' type='button' id='AddCant' data-toggle='modal' data-target='#myModalTabla'><i class='fa fa-pencil-square-o'></i></a>"+
    "</td>"+
    "</tr>";

      tabla_p.append(datos_p);

  });

  $('#Prueba').on('click', '#AddCant',function(e){
    alert("hola");
    var id_Pr = $("input#id").val();
    alert(id_Pr);
  });

});

$(document).on('ready',function(){
  var existencia_i;
  var materiaPrimaAgregada=[];
  var subtotal_i;
  var id_i;
  var materiaPrima_i;

  $('#tablaPedidoIniciar').on('click','#AddCant',function(e){
    id_i=$(this).parents('tr').find('input:eq(0)').val();
    materiaPrima_i=$(this).parents('tr').find('input:eq(1)').val();
    existencia_i=$(this).parents('tr').find('input:eq(2)').val();
    subtotal_i=$(this).parents('tr').find('input:eq(3)').val();
    $("#agregarPedidoIniciado").val("Agregar");
    $("#cantidad").val("");

  });

  $('#agregarPedidoIniciado').click(function(){
		var accion = $("#agregarPedidoIniciado").val();
		if (accion == "Agregar") {
			var cantidad=$("#cantidad").val();

		if ((parseFloat(cantidad) <= parseFloat(existencia_i))&&(!materiaPrimaAgregada.includes(id_i))) {
			var total=parseFloat($("#costo").val());
      var existencia =(parseFloat(existencia_i)-parseFloat(cantidad));
			var tabla=$("#tablaDetalleMateriaPrima");
			var subtotal=(parseFloat(subtotal_i)*parseFloat(cantidad));
			var datosinicio="<tr>"+
			"<td>"+ id_i +"</td>"+
			"<td>"+ materiaPrima_i +"</td>"+
			"<td>"+ existencia_i +"</td>"+
			"<td>"+ cantidad +"</td>"+
			"<td>"+ subtotal.toFixed(2) +"</td>"+
      "<td>"+ "<input  type='hidden' name='idI[]' value='"+id_i+"'/>" +
      "<input  type='hidden' name='nuevaexistencia[]' value='"+existencia+"'/>" +
			"<input type='hidden' name='cantidadI[]' value='"+cantidad+"'/>" +
			"<input  type='hidden' name='subtotalI[]'step='.01' value='"+subtotal_i+"'/>" +
			"<input  type='hidden' name='id[]' value=''/>" +
			"<a class='btn btn-danger btn-circle' type='button' id='Eliminar'><i class='fa fa-times'></i></a>"+
			"</td>"+
			"</tr>";
			total = total + subtotal;
			tabla.append(datosinicio);
			$("#cantidad").val("");
			$("#costo").val(total.toFixed(2));

      alert(materiaPrimaAgregada.val());

			//$('#myModal6').modal('hide');
			var objeto=document.getElementById("cerraM");
			//$('#myModal6').setAttribute('data-dismiss','modal');
			objeto.click();
			materiaPrimaAgregada.push(id_i);
			}else{
				if (!parseFloat(cantidad) <= parseFloat(existencia_i)) {
					alert("La cantidad solicitada no esta disponible");
				}else{
					alert("No puede elejir la misma materia prima");
				}

		};
		}else{

		}


	});

  $('#tablaDetalleMateriaPrima').on('click','#Eliminar',function(e){
		var total=parseFloat($("#costo").val());
		var cantidadIT=parseFloat($(this).parents('tr').find('input:eq(2)').val());
		precio=parseFloat($(this).parents('tr').find('input:eq(3)').val());
		id_Materia=parseFloat($(this).parents('tr').find('input:eq(0)').val());
		var aux = ((precio*cantidadIT));
		total = total - aux;
		$(this).parent('td').parent('tr').remove();
		$("#costo").val(total.toFixed(2));
		var indice = materiaPrimaAgregada.indexOf(id_Materia);
		materiaPrimaAgregada.splice(indice,1);
	});


  $('#CancelarInicioDePedido').click(function(){
		var tabla = $("#tablaDetalleMateriaPrima");
		tabla.remove();
    $("#costo").val("");
  });


});


$(document).on('ready',function(){


  $('#tablaPedidoIniciar').DataTable({
    "order":[[2,"asc"]],
    "language":{
    "lengthMenu": "Mostrar _MENU_ registro por pagina",
    "info": "Mostrando pagina _PAGE_ de _PAGE_",
      "infoEmpty": "No hay registros disponibles",
      "infoFiltered": "(filtrada de _MAX_ registros)",
      "loadingRecords": "Cargando...",
      "processing":     "Procesando...",
      "search": "Buscar:",
      "zeroRecords":		"No se encontraron registro coincidentes",

      "paginate": {
        "next":		"Siguiente",
        "previous":	"Anterior"
      },
    }
  });
  // $('#tablaDetalleMateriaPrima').DataTable({
  //   "order":[[2,"asc"]],
  //   "language":{
  //   "lengthMenu": "Mostrar _MENU_ registro por pagina",
  //   "info": "Mostrando pagina _PAGE_ de _PAGE_",
  //     // "infoEmpty": "No hay registros disponibles",
  //     "infoFiltered": "(filtrada de _MAX_ registros)",
  //     "loadingRecords": "Cargando...",
  //     "processing":     "Procesando...",
  //     "search": "Buscar:",
  //     "zeroRecords":		"No se encontraron registro coincidentes",
  //
  //     "paginate": {
  //       "next":		"Siguiente",
  //       "previous":	"Anterior"
  //     },
  //   }
  // });
});

$(document).on('ready',function(){

$('#agregarPedido').click(function(){
  var accion = $("#agregarPedido").val();
  if (accion == "Agregar") {

    var cantidad=$("#cantidad").val();

  var Tipo = $("#tipo_Prod").val();
  var Estilo = $("#estilo_prod").val();
  var Cantidad = $("#cantidad_DPed").val();
  var Categoria = $("#categoria_Prod").val();
  var Color = $("#color_Prod").val();
  var Talla = $("#talla_Prod").val();
  var Descripcion = $("#descripcion_Prod").val();
  var Precio = $("#precio_Prod").val();
  var subTotal_DPed= $("#subTotal_DPed").val();
  var tabla=$("#tablaPedidos");
  var total=parseFloat($("#total_Ped").val());
  // var Imagen = $("#files").val();
  var codImagen = $("#codImagen").val();

  alert(codImagen);

  var total=parseFloat($("#total_Ped").val());
  var subtotalVenta_DPed= ((parseFloat(subTotal_DPed)+parseFloat(Precio))*parseFloat(Cantidad));

  var datos= "<tr>"+
  "<td>"+Tipo+"</td>"+
  "<td>"+Cantidad+"</td>"+
  "<td>"+Precio+"</td>"+
  "<td>"+subTotal_DPed+"</td>"+
  "<td>"+subtotalVenta_DPed+"</td>"+
  "<td>"+
  "<input type='hidden' name='subtotalventap[]' value='"+subtotalVenta_DPed+"'>"+
  "<input type='hidden' name='subtotalp[]' value='"+subTotal_DPed+"'>"+
  "<input type='hidden' name='files[]' value='"+codImagen+"'>"+
  "<input type='hidden' name='tipop[]' value='"+Tipo+"'>"+
  "<input type='hidden' name='estilop[]' value='"+Estilo+"'>"+
  "<input type='hidden' name='cantidadp[]' value='"+Cantidad+"'>"+
  "<input type='hidden' name='categoriap[]' value='"+Categoria+"'>"+
  "<input type='hidden' name='colorp[]' value='"+Color+"'>"+
  "<input type='hidden' name='tallap[]' value='"+Talla+"'>"+
  "<input type='hidden' name='descripcionp[]' value='"+Descripcion+"'>"+
  "<input type='hidden' name='preciop[]' value='"+Precio+"'>"+
  "<a class='btn btn-danger btn-circle' type='button' id='Eliminar'><i class='fa fa-times'></i></a>"+
  "</td>"+
  "</tr>";

  tabla.append(datos);

  total = total + subtotalVenta_DPed;

  $("#total_Ped").val(total.toFixed(2));

  //Limpiar campos
  $("#tipo_Prod").val("");
  $("#estilo_prod").val("");
  $("#cantidad_DPed").val("");
  $("#categoria_Prod").val("");
  $("#color_Prod").val("");
  $("#talla_Prod").val("");
  $("#descripcion_Prod").val("");
  $("#precio_Prod").val("");
  $("#Resultado").val("");
  $("#subTotal_DPed").val("");
  $("#files").val("");

}else{

}

});
//Demas funciones
$('#tablaPedidos').on('click','#Eliminar',function(e){
  var total=parseFloat($("#totalEnPedido").val());
  // alert(total);
  var Eli_Cantidad=parseFloat($(this).parents('tr').find('input:eq(5)').val());
  var Eli_Ganancia=parseFloat($(this).parents('tr').find('input:eq(1)').val());
  precio=parseFloat($(this).parents('tr').find('input:eq(10)').val());
  id_Pedido=parseFloat($(this).parents('tr').find('input:eq(11)').val());
  var aux = ((Eli_Ganancia+precio)*Eli_Cantidad);
  total = total - aux;
  $(this).parent('td').parent('tr').remove();
  $("#total_Ped").val(total.toFixed(2));
  var indice = productosAgregados.indexOf(id_Pedido);
  productosAgregados.splice(indice,1);
});

});//cierre completo


function previewFile() {
  var preview = document.querySelector('img');
  var file    = document.querySelector('input[type=file]').files[0];
  var reader  = new FileReader();

  alert(reader());

  reader.onloadend = function () {
    preview.src = reader.result;
  }

  if (file) {
    reader.readAsDataURL(file);
  } else {
    preview.src = "";
  }
}
