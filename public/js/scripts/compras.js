
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

$('#cambioPR').on('change',function(e){
    tabla=$("#tablaMateriaPrima");
    tabla.empty();
    id=$('#cambioPR').val();
    var ruta="/github/sicovima/public/buscarTipoMercaderia/"+id;   
$.get(ruta,function(res){
      $(res).each(function(key,value){
          cadena="<tr><th>Nombre </th><th>Tipo </th><th>Color</th><th>Precio</th><th>Unidad de Medida</th><th>Opciones</th>"+
          "</tr>"+
          "<tr>"+
          "<td align='left' id='estilo'><font size='4' >"+value.nombre_MP+"</font></td>"+
          "<td align='left'><font size='4' >"+value.tipo_mercaderia.nombre_TM+"</font></td>"+
          "<td align='rihgt'><font size='4' >"+value.color_MP+"</font></td>"+
          "<td align='rihgt'><font size='4' >"+parseFloat(value.precio_MP).toFixed(2)+"</font></td>"+
          "<td align='rihgt'><font size='4' >"+value.unidadMedida_MP+"</font></td>"+
          "<td align='center'>"+
            "<input type='hidden' value='"+value.nombre_MP+"'>"+
            "<input type='hidden' value='"+value.color_MP+"'>"+
            "<input type='hidden' value='"+value.precio_MP+"'>"+
            "<input type='hidden' value='"+value.id+"'>"+
            "<input type='hidden' name='prueba' value='100'/>"+
            "<a class='btn btn-success btn-circle' type='button' id='AddCant' data-dismiss='modal' data-toggle='modal' data-target='#myModal6'>"+
            "<i class='fa fa-pencil-square-o'></i>"+
            "</a>"+
            "</td>"+
          "</tr>";
          tabla.append(cadena);
      });
    });
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
