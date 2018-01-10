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


$(document).on('ready',function(){

$('#agregarPedido').click(function(){
  // alert("aqui");
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

  // var canvas, ctx, dataURL, base64;
  //     canvas = document.createElement("canvas");
  //     ctx = canvas.getContext("2d");
  //     canvas.width = Imagen.width;
  //     canvas.height = Imagen.height;
  //     ctx.drawImage(Imagen, 0, 0);
  //     dataURL = canvas.toDataURL("image/jpg");
  //     base64 = dataURL.replace(/^data:image\/png;base64,/, "");
  //     alert(base64);

  // var Imagen = $("#files").val().replace("C:\\fakepath\\", "");

  // var Imagen = $("#files").val().replace("C:\\fakepath\\", "");
  //
  // var cod = window.btoa(unescape(encodeURIComponent(Imagen)));
  alert(codImagen);

  var total=parseFloat($("#total_Ped").val());
  var subtotalVenta_DPed= ((parseFloat(subTotal_DPed)+parseFloat(Precio))*parseFloat(Cantidad));

  // var Prueba = parseFloat(subtotalVenta_DPed);

  // alert(subtotalVenta_DPed);
  // alert(Prueba);

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

});
