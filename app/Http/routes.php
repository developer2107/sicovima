<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.*/
Route::Resource('/TipoMercaderia','TipoMercaderiaController');
Route::match(['get','post'],'/EliminarTM','TipoMercaderiaController@eliminar');
Route::match(['get','post'],'/cambiarTM/{id}','TipoMercaderiaController@cambio');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guardarUsuario', function () {

		$para = 'ingridayala_94@hotmail.com';
		$asunto = 'Prueba de SMTP local';
		$mensaje = 'Mensaje de prueba';
		$cabeceras = 'From: brendacgmaradiaga@gmail.com' ."\r\n" .
		'Reply-To: brendacgmaradiaga@gmail.com' . "\r\n" .
		'X-Mailer: PHP/' . phpversion();

		if(mail($para, $asunto, $mensaje, $cabeceras)) {
		echo 'Correo enviado correctamente';
		} else {
		echo 'Error al enviar mensaje';
		}

});

/* DE AQUI ABAJO ESTAN LAS RUTAS DE BRENDA*/



//Rutas de login
Route::get('/cerrar', 'Auth\AuthController@cerrar');
Route::get('/login', 'Auth\AuthController@login');
Route::get('/logout', 'LoginController@logout');
Route::post('/authenticate', 'Auth\AuthController@authenticate');

/* DE AQUI ABAJO ESTAN LAS RUTAS DE GRECIA*/




/* DE AQUI ABAJO ESTAN LAS RUTAS DE BENJAMIN*/

Route::Resource('/RegistroProveedor','ProveedoresController');
Route::Resource('/RegistroCliente','ClientesController');
Route::Resource('/MostrarListaProv','ProveedoresController@Mostrar');
Route::Resource('/MostrarListaCli','ClientesController@Mostrar');
Route::match(['get','post'],'/VerCliente/{id}','ClientesController@Ver');
Route::match(['get','post'],'/municipio/{id}','ClientesController@municipios');
Route::match(['get','post'],'/municipio/{id}','ProveedoresController@municipios');
Route::match(['get','post'],'/VerProveedor/{id}','ProveedoresController@Ver');
Route::match(['get','post'],'/ModificarProv/{id}','ProveedoresController@Modificar');
Route::match(['get','post'],'/ModificarCli/{id}','ClientesController@Modificar');
Route::get('/DarBajaProv','ProveedoresController@darbajaprov');
Route::get('/DarBajaCli','ClientesController@darbajacli');


Route::match(['get','post'],'/ModificarCompra/{id}','CompraController@Modificar');
Route::Resource('/RegistrarCompra','CompraController');
Route::match(['get','post'],'/VerCompra/{id}','CompraController@Ver');
Route::match(['get','post'],'/EliminarCompra/{id}','CompraController@destroy');
Route::Resource('/ListadeCompras','CompraController@Mostrar');

// Route::get('/ModificarMateriaPrima','MateriaPrimaController@Modificar');
Route::match(['get','post'],'/ModificarMateriaPrima/{id}','MateriaPrimaController@Modificar');
Route::Resource('/ControlMateriaPrima','InventarioMPController@Mostrar');
Route::match(['get','post'],'/VerInventarioMP/{id}','InventarioMPController@Ver');
Route::Resource('/RegistroMateriaP','MateriaPrimaController');
Route::match(['get','post'],'/CambioEstadoMP/{id}','InventarioMPController@Cambio');

Route::Resource('Bitacora','BitacoraController');
Route::match(['get','post'],'/ModificarVenta/{id}','VentasController@Modificar');
Route::match(['get','post'],'/VerVenta/{id}','VentasController@Ver');
Route::match(['get','post'],'/VerInventarioPT/{id}','InventarioPTController@Ver');
Route::Resource('/RegistrarVenta','VentasController');
Route::Resource('/ListadeVentas','VentasController@Mostrar');
Route::match(['get','post'],'/motivov/{idMot}/{motivo}','VentasController@AddMotivoVenta');
Route::match(['get','post'],'/motivop/{idMotProd}/{motivoProd}/{descuentoProd}','InventarioPTController@motivosProd');
Route::get('RegistrarVentas/{id}','VentasController@getResponsables');
Route::resource('venta','ventasController');
Route::match(['get','post'],'/responsable/{id}','VentasController@responsables');
Route::Resource('/ProductosTerminados','InventarioPTController@Mostrar');
Route::Resource('/VerProductosTerminados','InventarioPTController@Ver');

Route::Resource('/ListadePedidos','PedidosController@Mostrar');
Route::Resource('/RegistrarPedido','PedidosController');
Route::Resource('/IniciarPedido','PedidosController@Iniciar');
Route::Resource('/FinalizarPedido','PedidosController@Finalizar');
Route::Resource('/VerPedido','PedidosController@Ver');
Route::Resource('/ModificarPedido','PedidosController@Modificar');
Route::Resource('/EntregarPedido','PedidosController@Entregar');
Route::Resource('/ListadePedidosaEntregar','PedidosController@ListaaEntregar');
Route::Resource('/ListadePedidosSinIniciar','PedidosController@ListaSinIniciar');
Route::Resource('/ListadePedidosaFinalizar','PedidosController@ListaaFinalizar');


Route::Resource('/IniciarPedido','PedidosController@IniciarPedido');
Route::Resource('Pedidos','PedidosController');

Route::get('/BuscarUsuario','SeguridadController@Buscar');
Route::get('/VerUsuario','SeguridadController@Ver');
Route::get('/ModificarUsuario','SeguridadController@Modificar');
Route::get('/RegistrarUsuario','SeguridadController@Registrar');

Route::group(['middleware' => 'admin'], function(){


});

Route::group(['middleware' => 'comun'], function(){


});
