
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
      "<td><input type='hidden' name='cantidadc[]' value='"+cantidad+"'>"+
      "<input type='hidden' name='idc[]' value='"+id_MP+"'>"+
      "<input type='hidden' name='subTotalc[]' value='"+c+"'>"+
      "</td><td>"+cantidad+"</td><td>"+nombre_MP+" "+color_MP+"</td><td>"+parseFloat(precio_MP).toFixed(2)+"</td><td>"+parseFloat(c).toFixed(2)+"</td><td class='deleteCompra' style='cursor:pointer;'>Eliminar</td></tr>");
  }
});
});

$(document).on("click",".deleteCompra",function(){
var totalF=parseFloat($(this).parents('tr').find('td:eq(4)').html());
var parent = $(this).parents().get(0);

$(parent).remove();
var total=parseFloat($("#total_Com").val());
    total=total-(totalF);
     document.getElementById("total_Com").value=total.toFixed(2);
});

$(document).on("click",".edicion",function(){
var total = parseFloat($(this).parents('tr').find('input:eq(0)').val());

var cantidad = parseFloat($(this).parents('tr').find('input:eq(1)').val());
  $("#cant").val(cantidad);

  var tipoa = $("#nombreTipo");
  tipoa.empty();

var tipos = [];
tipos[1]='Tela';
tipos[2]='Hilo';
tipos[3]='Botones';
tipos[4]='Remaches';

var tipo = parseFloat($(this).parents('tr').find('input:eq(2)').val());
for (var i = 1; i < 5; i++) {

  if (tipo==i) {
    tipoa.append("<option value='"+i+"' selected='selected'>"+tipos[i]+"</option>");
  }else{
    tipoa.append("<option value='"+i+"'>"+tipos[i]+"</option>");
  }
};

var medida = $(this).parents('tr').find('input:eq(3)').val();
  $("#unidadMP").val(medida);

var color = $(this).parents('tr').find('input:eq(4)').val();
  $("#colorMP").val(color);

 var nombre = $(this).parents('tr').find('input:eq(5)').val();
  $("#nombreMP").val(nombre);


var subtotal = total/cantidad;
  $("#subTotal").val(subtotal);

});

$(document).on("click",".deleteC",function(){
var totalF=parseFloat($(this).parents('tr').find('input:eq(0)').val());
var parent = $(this).parents().get(0);
$(parent).remove();
var total=parseFloat($("#total_Com").val());
    total=total-(totalF);
     document.getElementById("total_Com").value=total.toFixed(2);
});
