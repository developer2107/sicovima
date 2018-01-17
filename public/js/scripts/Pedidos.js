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
  var id_pd;
  var cantidad_pd;
  var anticipo_pd;
  var talla_pd;
  var estilo_pd;
  var color_pd;
  var descripcion_pd;
  $('#tablaFinalizarPedidos').on('click','#AddCant',function(e){
    var tabla_pd =$('#modalTablaFinalizar');
    $("#limpio").empty();
     id_pd = $(this).parents('tr').find('input:eq(0)').val();
     cantidad_pd = $(this).parents('tr').find('input:eq(1)').val();
     tipo_pd = $(this).parents('tr').find('input:eq(2)').val();
     talla_pd = $(this).parents('tr').find('input:eq(3)').val();
     estilo_pd = $(this).parents('tr').find('input:eq(4)').val();
     color_pd = $(this).parents('tr').find('input:eq(5)').val();
     descripcion_pd = $(this).parents('tr').find('input:eq(6)').val();
    var datos_pd = "<tr>"+
    "<td>"+ cantidad_pd +"</td>"+
    "<td>"+ talla_pd +"</td>"+
    "<td>"+ estilo_pd +"</td>"+
    "<td>"+ color_pd +"</td>"+
    "<td>"+ descripcion_pd +"</td>"+
    "<td>"+ "<input  type='hidden' name='idP' value='"+id_pd+"'/>" +
    "<input  type='hidden' name='cantidad_dp' value='"+cantidad_pd+"'/>" +
    "<input type='hidden' name='tipo_pd' value='"+tipo_pd+"'/>" +
    "<input  type='hidden' name='talla_pd'value='"+talla_pd+"'/>" +
    "<input  type='hidden' name='estilo_pd' value='"+ estilo_pd+"'/>" +
    "<input  type='hidden' name='color_pd' value='"+ color_pd+"'/>" +
    "<input  type='hidden' name='descripcion_pd' value='"+ descripcion_pd+"'/>" +
    "<a class='btn btn-success btn-circle' type='button' id='AddCant' data-toggle='modal' data-target='#myModal8' name='tablaFinalizarPedidosd'><i class='fa fa-pencil-square-o'></i></a>"+
    "</td>"+
    "</tr>";

      tabla_pd.append(datos_pd);


  });

$('#agregarMotivo').click(function(){
  var motivo =$("#motivo").val();
  var cant_DPT = $("#cant_DPT").val();
  var descuento_DPT = $("#descuento_DPT").val();
  var tabla_p =$('#tablaFinalizarPedidosd');
  var datos_p = "<tr>"+
  "<td>"+ id_pd +"</td>"+
  "<td>"+  tipo_pd+"</td>"+
  "<td>"+ cantidad_pd +"</td>"+
  "<td>"+ "<input  type='hidden' name='idP' value='"+id_pd+"'/>" +
  "<input  type='hidden' name='motivo' value='"+ motivo+"'/>" +
  "<input  type='hidden' name='cant_DPT' value='"+cant_DPT+"'/>" +
  "<input  type='hidden' name='condicion' value='True'/>" +
  "<input  type='hidden' name='descuento_DPT' value='"+ descuento_DPT+"'/>" +
  "<a class='btn btn-danger btn-circle' type='button' id='Eliminar'><i class='fa fa-times'></i></a>"+
  "</td>"+
  "</tr>";

    tabla_p.append(datos_p);
    motivo =$("#motivo").val(" ");
    cant_DPT = $("#cant_DPT").val(" ");
    descuento_DPT = $("#descuento_DPT").val(" ");
    var objeto=document.getElementById("cerraM");
});
$('#tablaFinalizarPedidosd').on('click','#Eliminar',function(e){
  $(this).parent('td').parent('tr').remove();
});

});

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
    "<td>"+
    "</tr>";

      tabla_p.append(datos_p);

  });

  $('#Prueba').on('click', '#AddCant',function(e){
    var id_Pr = $("input#id").val();
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
      "<input  type='hidden' name='nuevaexistenciaI[]' value='"+existencia+"'/>" +
      "<input  type='hidden' name='materiaPrimaI[]' value='"+materiaPrima_i+"'/>" +
			"<input type='hidden' name='cantidadI[]' value='"+cantidad+"'/>" +
			"<input  type='hidden' name='subtotalI[]'step='.01' value='"+subtotal_i+"'/>" +
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
  $('#tablaFinalizarPedidos').DataTable({
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
  $('#tablaDetallePedido').DataTable({
    "order":[[2,"asc"]],
    "language":{
    "lengthMenu": "Mostrar _MENU_ registro por pagina",
    "info": "Mostrando pagina _PAGE_ de _PAGE_",
      // "infoEmpty": "No hay registros disponibles",
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
  $('#tablaFinalizarPedidosd').DataTable({
    "order":[[2,"asc"]],
    "language":{
    "lengthMenu": "Mostrar _MENU_ registro por pagina",
    "info": "Mostrando pagina _PAGE_ de _PAGE_",
      // "infoEmpty": "No hay registros disponibles",
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
