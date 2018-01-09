
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
  var Imagen =$("#inputImage").val();
  var subTotal_DPed= $("#subTotal_DPed").val();
  var tabla=$("#tablaProductos");
  var total=parseFloat($("#totalEnPedido").val());

  // alert(Tipo);
  var total=parseFloat($("#totalEnPedido").val());
  var subtotalVenta_DPed=(parseFloat(subTotal_DPed)+parseFloat(Precio))*parseFloat(cantidad_DPed);
  var subtotal_DPed1=(parseFloat(subTotal_DPed)+parseFloat(Precio));

  alert(subtotalVenta_DPed);
  alert(subTotal_DPed1);

  var datos= "<tr>"+
  "<td><input type='hidden' name='subtotalventap[]' value='"+subtotalVenta_DPed+"'>"+
  "<input type='hidden' name='subtotalp[]' value='"+subTotal_DPed+"'>"+
  "<input type='hidden' name='imagenp[]' value='"+Imagen+"'>"+
  "<input type='hidden' name='tipop[]' value='"+Tipo+"'>"+
  "<input type='hidden' name='estilop[]' value='"+Estilo+"'>"+
  "<input type='hidden' name='cantidadp[]' value='"+Cantidad+"'>"+
  "<input type='hidden' name='categoriap[]' value='"+Categoria+"'>"+
  "<input type='hidden' name='colorp[]' value='"+Color+"'>"+
  "<input type='hidden' name='tallap[]' value='"+Talla+"'>"+
  "<input type='hidden' name='descripcionp[]' value='"+Descripcion+"'>"+
  "<input type='hidden' name='preciop[]' value='"+Precio+"'>"+
  "</td>"+
  "<td>"+Tipo+"</td>"+
  "<td>"+Cantidad+"</td>"+
  "<td>"+Precio+"</td>"+
  "<td>"+subTotal_DPed1.toFixed(2)+"</td>"+
  "<td>"+subtotalVenta_DPed.toFixed(2) +"</td>"+
  "<td class='deleteVisitador' style='cursor:pointer;'>Eliminar</td>"+
  "</tr>";

  tabla.append(datos);

  total = total + subtotal;

  $("#totalEnPedido").val(total.toFixed(2));

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
//Demas funciones

});


$(document).on("click",".deleteVisitador",function(){
var parent = $(this).parents().get(0);
$(parent).remove();
});



// function guardarPedidos(){
//     vnombre=validarNombre();
//     vcorreo=validarCorreo();
//     vtelefono=validarTelefono();
//     if(vnombre==false || vcorreo==false || vtelefono==false){
//
//     }else{
//       alert("Todo bien");
//     }
//
// }



// function validarNombre(){
//   nombre=$("#nombre").val();
//   val= true;
//     cont=0;
//
//     var errores= [];
//     if(nombre!=""){
//       $.get('/blissey/public/existeNombreProveedor/'+nombre,function(data){
//         if(data=="true"){
//
//         }
//       });
//     }
//     if(nombre==""){
//       errores[cont]="El campo drogería es obligatorio";
//
//       cont=cont+1;
//     }else if(nombre.length<5){
//       errores[cont]="El campo drogería debe contener mínimo 5 caracteres";
//       cont=cont+1;
//     }else if(nombre.length>50){
//       errores[cont]="El campo drogería debe contener máximo 50 caracteres";
//       cont=cont+1;
//     }
//     if(cont>0){
//       val= false;
//     }
//     for(a=0;a<cont;a++){
//       new PNotify({
//         title: 'Error!',
//         text: errores[a],
//         type: 'error',
//         styling: 'bootstrap3'
//       });
//     }
//     return val;
// }
//
// function validarCorreo(){
//   correo=$("#correo").val();
//   val= true;
//     cont=0;
//     var errores= [];
//     if(correo==""){
//       errores[cont]="El campo correo es obligatorio";
//       cont=cont+1;
//     }
//     if(cont>0){
//       val= false;
//     }
//     for(a=0;a<cont;a++){
//       new PNotify({
//         title: 'Error!',
//         text: errores[a],
//         type: 'error',
//         styling: 'bootstrap3'
//       });
//     }
//     return val;
// }
// function validarTelefono(){
//   telefono=$("#telefono").val();
//   val= true;
//     cont=0;
//     var errores= [];
//     if(telefono==""){
//       errores[cont]="El campo teléfono es obligatorio";
//       cont=cont+1;
//     }else if(telefono.length!=9){
//       errores[cont]="El campo teléfono debe contener 9 caracteres";
//       cont=cont+1;
//     }
//     if(cont>0){
//       val= false;
//     }
//     for(a=0;a<cont;a++){
//       new PNotify({
//         title: 'Error!',
//         text: errores[a],
//         type: 'error',
//         styling: 'bootstrap3'
//       });
//     }
//     return val;
// }
// function sleep(miliseconds) {
//    var currentTime = new Date().getTime();
//
//    while (currentTime + miliseconds >= new Date().getTime()) {
//    }
// }
