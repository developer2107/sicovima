
var id_MP;
var nombre_MP;
var precio_MP;
var color_MP;

$(document).on('ready',function(){

$('#tablaMateriaPrima').on('click','#AddCant',function(e){
  nombre_MP=$(this).parents('tr').find('input:eq(0)').val();
  precio_MP=$(this).parents('tr').find('input:eq(2)').val();
  color_MP=$(this).parents('tr').find('input:eq(1)').val();
  id_MP=$(this).parents('tr').find('input:eq(3)').val();
  $("#agregarCompras").val("Agregar");
  $("#cantidad").val("");
});

$('#agregarCompras').click(function(){
  var total = parseFloat($("#total_Com").val());
  var accion = $("#agregarCompras").val();
  if (accion == "Agregar") {
    var cantidad=$("#cantidad").val();
    var c = parseFloat(cantidad)*parseFloat(precio_MP);
    total = total + c;
    $("#total_Com").val(parseFloat(total).toFixed(2));

    $("#Compra_producto").append("<tr>"+
      "<td>"+cantidad+"</td>"+
      "<td>"+nombre_MP+" "+color_MP+"</td>"+
      "<td>"+parseFloat(precio_MP).toFixed(2)+"</td>"+
      "<td>"+parseFloat(c).toFixed(2)+"</td>"+
      "<td>"+
      "<input type='hidden' name='cantidadc[]' value='"+cantidad+"'>"+
      "<input type='hidden' name='idc[]' value='"+id_MP+"'>"+
      "<input type='hidden' name='subTotalc[]' value='"+c+"'>"+
      "<input type='hidden' name='id[]' value=''>"+
      "<a class='btn btn-danger btn-circle' type='button' id='Eliminar'><i class='fa fa-times'></i></a>"+
      "</td></tr>");
  }else{
      var totalT = parseFloat($("#total_Com").val());
      var precio = parseFloat(subtotalg)/parseFloat(cantidadg);
      can =  $("#cantidad").val();
      $('#cd'+indiceg).text(can);
      var totalp=precio*parseFloat(can);
      $('#st'+indiceg).text( totalp.toFixed(2));
      var resta = totalT - parseFloat(subtotalg) + totalp;
      $("#total_Com").val(resta.toFixed(2));
      $('#cdh'+indiceg).val(can);
      $('#sth'+indiceg).val(totalp.toFixed(2));

  }
});
$('#tablaMateria').on('click','#Eliminar',function(e){
  var totalF=parseFloat($(this).parents('tr').find('input:eq(2)').val());
console.log(totalF);
$(this).parent('td').parent('tr').remove();

var total=parseFloat($("#total_Com").val());
    total=total-(totalF);
     document.getElementById("total_Com").value=total.toFixed(2);
});
  
});

function modificarDetalleMP(indice){
	console.log(indice);
	indiceg=indice;
	cantidadg = $('#cd'+indice).text();
	subtotalg = $('#st'+indice).text();
  console.log(cantidadg+subtotalg);
	$("#cantidad").val(cantidadg);
	$("#agregarCompras").val("Modificar");

}
