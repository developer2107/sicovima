//Brendaly Carmela
function agregarProducto(){

  var cantidad=$("#cant_DCom").val();
  var tipo=$("#tipo_MP").val();
  var medida=$("#unidadMedida_MP").val();
  var color=$("#color_MP").val();
  var nombre=$("#nombre_MP").val();
  var subTotal=$("#subTotal_DCom").val();

  var a = parseFloat(cantidad);
  var b = parseFloat(subTotal);
  var total = a*b;

  //var total1 = parseFloat(total);
  var suma1 =  parseFloat( $('#total_Com').val());
  var suma = parseFloat(total);

  var suma1 = total+suma1;
  $('#total_Com').val(suma1);


  $("#Compra_producto").append("<tr>"+
    "<td><input type='hidden' name='total[]' value='"+total+"'>"+
    "<input type='hidden' name='cantidadc[]' value='"+cantidad+"'>"+
    "<input type='hidden' name='tipoc[]' value='"+tipo+"'>"+
    "<input type='hidden' name='medidac[]' value='"+medida+"'>"+
    "<input type='hidden' name='colorc[]' value='"+color+"'>"+
    "<input type='hidden' name='nombrec[]' value='"+nombre+"'>"+
    "<input type='hidden' name='subTotalc[]' value='"+subTotal+"'>"+
    "</td><td>"+cantidad+"</td><td>"+nombre+"</td><td>"+parseFloat(total).toFixed(2)+"</td><td class='deleteCompra' style='cursor:pointer;'>Eliminar</td></tr>");
  //Limpiar campos
  $("#cant_DCom").val("");
  $("#tipo_MP").val("");
  $("#unidadMedida_MP").val("");
  $("#color_MP").val("");
  $("#nombre_MP").val("");
  $("#subTotal_DCom").val("");
}


$(document).on("click",".deleteCompra",function(){
var totalF=parseFloat($(this).parents('tr').find('td:eq(3)').html());
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


// function guardarProveedor(){
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
