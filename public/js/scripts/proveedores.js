var contadorTelefono=0;
var contadorCorreo=0;
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

  $('#AddTelefono').click(function(){

		var telCliente ='';
		var telefono = $("#idTelefonos");
		var cadena="<div class='row' id='r"+contadorTelefono+"'><div class='form-group'><label class='col-lg-3 control-label'></label><div class='col-lg-4' ><input type='text' class='form-control' data-mask='(+999) 9999-9999' placeholder='(+      )         -     ' style='width:140px' name='tel[]' value='"+telCliente+"'/></div><div class='col-lg-1'><button class='btn btn-default  dim' type='button' onclick='deleteTelefono("+contadorTelefono+")' ><i class='fa fa-minus'></i></button></div></div><br></div>";
		contadorTelefono=contadorTelefono+1;
		telefono.append(cadena);

	});

	$('#AddCorreo').click(function(){

		var correoCliente='';
		var correo = $("#idCorreos");
		var cadena1="<div class='row'><div class='form-group'><label class='col-lg-3 control-label'></label><div class='col-lg-7' ><input type='email' class='form-control' placeholder='JuanPerez@ejemplo.com' style = 'width:300px' name='cor[]' value='"+correoCliente+"'/></div><div class='col-lg-1'><button class='btn btn-default  dim' type='button' onclick='deleteCorreo("+contadorCorreo+")' ><i class='fa fa-minus'></i></button></div></div><br></div>";

		correo.append(cadena1);

	});

	// $('#tipoMercaderia_Prov').on('change',function(e){
	// 		var obtener=$('#tipoMercaderia_Prov').find('option:selected');
  //
	// 		if (obtener.val() == '0') {
	// 			$('#otroMercaderia').css("display","block");
	// 		}else{
	// 			$('#otroMercaderia').css("display","none");
	// 		}
	// });

});

function deleteTelefono(contador){
	console.log(contador);
	$("#r"+contador).remove();

}

function deleteCorreo(contador){
	console.log(contador);
	$("#r"+contador).remove();
}
