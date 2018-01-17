<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.*/



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


//Rutas de login
Route::get('/cerrar', 'Auth\AuthController@cerrar');
Route::get('/login', 'Auth\AuthController@login');
Route::get('/logout', 'LoginController@logout');
Route::post('/authenticate', 'Auth\AuthController@authenticate');
Route::get('/logoutB', 'LoginController@logoutB');

/*------------------------------------------------------------------*/

Route::match(['get','post'],'/correo','ClientesController@Correo');


/*------------------------------------------------------------------*/


<<<<<<< HEAD
 Route::group(['middleware' => 'admin'], function(){
=======
Route::group(['middleware' => 'admin'], function(){
>>>>>>> 9b4fec5b694403aff4c9326929c3f09b7b8e4566

  Route::get('/', function () {
    return view('welcome');
  });

  Route::Resource('/TipoMercaderia','TipoMercaderiaController');
  Route::match(['get','post'],'/EliminarTM/{id}','TipoMercaderiaController@eliminar');
  //Route::match(['get','post'],'/cambiarTM/{id}','TipoMercaderiaController@cambio');

  Route::Resource('/RegistroProveedor','ProveedoresController');
  Route::Resource('/MostrarListaProv','ProveedoresController@Mostrar');
  Route::match(['get','post'],'/darBajaProv/{id}','ProveedoresController@bajaProv');
  Route::match(['get','post'],'/darAltaProv/{id}','ProveedoresController@altaProv');
  Route::Resource('/DarBajaProv','ProveedoresController@MostrarPI');
  Route::match(['get','post'],'/municipio/{id}','ProveedoresController@municipios');
  Route::match(['get','post'],'/VerProveedor/{id}','ProveedoresController@Ver');
  Route::match(['get','post'],'/ModificarProv/{id}','ProveedoresController@Modificar');
  Route::Resource('/ReportesProveedor','ProveedoresController@Reportes');
  Route::match(['get','post'],'/proveedoresActR/{id}','ProveedoresController@ReportesProveedor');
  Route::match(['get','post'],'/proveedoresInaR/{id}','ProveedoresController@ReportesProv');

  Route::Resource('/RegistroCliente','ClientesController');
  Route::Resource('/MostrarListaCli','ClientesController@Mostrar');
  Route::match(['get','post'],'/darBajaCli/{id}','ClientesController@bajaCli');
  Route::match(['get','post'],'/darAltaCli/{id}','ClientesController@altaCli');
  Route::match(['get','post'],'/VerCliente/{id}','ClientesController@Ver');
  Route::match(['get','post'],'/municipio/{id}','ClientesController@municipios');
  Route::match(['get','post'],'/ModificarCli/{id}','ClientesController@Modificar');
  Route::Resource('/DarBajaCli','ClientesController@MostrarCI');
  Route::Resource('/ReportesCliente','ClientesController@Reportes');
  Route::match(['get','post'],'/clientesActR/{id}','ClientesController@ReportesCliente');
  Route::match(['get','post'],'/clientesInaR/{id}','ClientesController@ReportesCli');
  Route::match(['get','post'],'/clientesNaturales/{id}','ClientesController@ReportesNat');
  Route::match(['get','post'],'/clientesJuridicos/{id}','ClientesController@ReportesJur');

  Route::match(['get','post'],'/ModificarCompra/{id}','CompraController@Modificar');
  Route::Resource('/RegistrarCompra','CompraController');
  Route::match(['get','post'],'/EliminarCompra/{id}','CompraController@destroy');
  Route::match(['get','post'],'/VerCompra/{id}','CompraController@Ver');
  Route::Resource('/ListadeCompras','CompraController@Mostrar');
  Route::Resource('/ReportesCompra','CompraController@Reportes');
  Route::match(['get','post'],'/comprasFecha/{id}','CompraController@comprasFecha');

  Route::match(['get','post'],'/ModificarMateriaPrima/{id}','MateriaPrimaController@Modificar');
  Route::Resource('/ControlMateriaPrima','InventarioMPController@Mostrar');
  Route::match(['get','post'],'/VerInventarioMP/{id}','InventarioMPController@Ver');
  Route::Resource('/RegistroMateriaP','MateriaPrimaController');
<<<<<<< HEAD
  Route::match(['get','post'],'/CambioEstadoMP/{id}','InventarioMPController@Cambio');
  Route::Resource('/ReportesVenta','VentasController@Reportes');
  Route::Resource('/ReportesIPT','InventarioPTController@Reportes');
  Route::match(['get','post'],'/ReporteInventario/{id}','InventarioPTController@ReporteInventario');
  Route::match(['get','post'],'/ReportePB/{id}','InventarioPTController@ReportePB');
  Route::match(['get','post'],'/ReportePD/{id}','InventarioPTController@ReportePD');
=======
  //Route::match(['get','post'],'/CambioEstadoMP/{id}','InventarioMPController@Cambio');
  Route::match(['get','post'],'/motivom/{idMotMat}/{motivoMat}','InventarioMPController@motivosMat');
>>>>>>> 9b4fec5b694403aff4c9326929c3f09b7b8e4566

  Route::Resource('Bitacora','BitacoraController');
  Route::Resource('Reportes','BitacoraController@Reportes');
  Route::Resource('Tour','BitacoraController@Tour');
  Route::Resource('Reporte','BitacoraController@Reporte');
  Route::match(['get','post'],'/ModificarVenta/{id}','VentasController@Modificar');
  Route::match(['get','post'],'/VerVenta/{id}','VentasController@Ver');
  Route::match(['get','post'],'/VerInventarioPT/{id}','InventarioPTController@Ver');
  Route::Resource('/RegistrarVenta','VentasController');
<<<<<<< HEAD
  Route::Resource('/ReportVenta','FechaController@store');
  Route::Resource('/ReportBitacora','BitacoraController');
  Route::match(['get','post'],'/ReporteBitacoras/{id}','BitacoraController@ReporteBitacoras');
=======
  Route::Resource('/ReportesVenta','VentasController@Reportes');
>>>>>>> 9b4fec5b694403aff4c9326929c3f09b7b8e4566
  Route::Resource('/ListadeVentas','VentasController@Mostrar');

  Route::match(['get','post'],'/Factura/{tipo}/{idVenta}','VentasController@Factura');
  Route::match(['get','post'],'/FacturaCF/{tipo}/{idVenta}','VentasController@FacturaCF');
  Route::match(['get','post'],'/ReporteTodasVentas/{id}','VentasController@ReporteTodasVentas');
  Route::match(['get','post'],'/ReporteVentaCN/{id}','VentasController@ReporteVentaCN');
  Route::match(['get','post'],'/ReporteVentaCJ/{id}','VentasController@ReporteVentaCJ');
  Route::match(['get','post'],'/ReporteVentasA/{id}','VentasController@ReporteVentasA');

  Route::match(['get','post'],'/motivov/{idMot}/{motivo}','VentasController@AddMotivoVenta');
  Route::match(['get','post'],'/motivop/{idMotProd}/{motivoProd}/{descuentoProd}','InventarioPTController@motivosProd');
  Route::get('RegistrarVentas/{id}','VentasController@getResponsables');
  Route::resource('venta','ventasController');
  Route::match(['get','post'],'/responsable/{id}','VentasController@responsables');
  Route::Resource('/ProductosTerminados','InventarioPTController@Mostrar');
  Route::Resource('/VerProductosTerminados','InventarioPTController@Ver');

  Route::Resource('/ListadePedidos','PedidosController@Mostrar');
  Route::Resource('/IniciarPedido','PedidosController@Iniciar');
  Route::Resource('/FinalizarPedido','PedidosController@Finalizar');//este
  Route::Resource('/VerPedido','PedidosController@Ver');
  Route::Resource('/ModificarPedido','PedidosController@Modificar');
  Route::Resource('/EntregarPedido','PedidosController@Entregar');
  Route::Resource('/ListadePedidosaEntregar','PedidosController@ListaaEntregar');
  Route::Resource('/ListadePedidosSinIniciar','PedidosController@ListaSinIniciar');
  Route::Resource('/ListadePedidosaFinalizar','PedidosController@ListaaFinalizar');


  Route::Resource('/IniciarPedido','PedidosController@IniciarPedido');
  Route::Resource('Pedidos','PedidosController');
  Route::Resource('RegistrarPedidos','PedidosController@Registrar');
  Route::Resource('Usuario','SeguridadController');
  Route::Resource('/RegistrarUsuario','SeguridadController@create');
  Route::Resource('/BuscarUsuario','SeguridadController@Buscar');

  Route::get('backup', 'BackupController@index');
  Route::get('backup/create', 'BackupController@create');
  Route::get('backup/download/{file_name}', 'BackupController@download');
  Route::get('backup/delete/{file_name}', 'BackupController@delete');

  Route::match(['get','post'],'/buscarTipoMercaderia/{id}','TipoMercaderiaController@buscar');


<<<<<<< HEAD
 });
=======
});
>>>>>>> 9b4fec5b694403aff4c9326929c3f09b7b8e4566

Route::group(['middleware' => 'comun'], function(){

  Route::get('/', function () {
    return view('welcome');
  });

  Route::Resource('/TipoMercaderia','TipoMercaderiaController');
  Route::match(['get','post'],'/EliminarTM/{id}','TipoMercaderiaController@eliminar');
  //Route::match(['get','post'],'/cambiarTM/{id}','TipoMercaderiaController@cambio');

  Route::Resource('/MostrarListaProv','ProveedoresController@Mostrar');
  Route::match(['get','post'],'/municipio/{id}','ProveedoresController@municipios');
  Route::match(['get','post'],'/VerProveedor/{id}','ProveedoresController@Ver');
  Route::Resource('/DarBajaProv','ProveedoresController@MostrarPI');
  Route::Resource('/ReportesProveedor','ProveedoresController@Reportes');
  Route::match(['get','post'],'/proveedoresActR/{id}','ProveedoresController@ReportesProveedor');
  Route::match(['get','post'],'/proveedoresInaR/{id}','ProveedoresController@ReportesProv');

  Route::Resource('/RegistroCliente','ClientesController');
  Route::Resource('/MostrarListaCli','ClientesController@Mostrar');
  Route::match(['get','post'],'/VerCliente/{id}','ClientesController@Ver');
  Route::match(['get','post'],'/municipio/{id}','ClientesController@municipios');
  Route::Resource('/DarBajaCli','ClientesController@MostrarCI');
  Route::Resource('/ReportesCliente','ClientesController@Reportes');
  Route::match(['get','post'],'/clientesActR/{id}','ClientesController@ReportesCliente');
  Route::match(['get','post'],'/clientesInaR/{id}','ClientesController@ReportesCli');
  Route::match(['get','post'],'/clientesNaturales/{id}','ClientesController@ReportesNat');
  Route::match(['get','post'],'/clientesJuridicos/{id}','ClientesController@ReportesJur');

  Route::match(['get','post'],'/VerCompra/{id}','CompraController@Ver');
  Route::Resource('/ListadeCompras','CompraController@Mostrar');
  Route::Resource('/ReportesCompra','CompraController@Reportes');
  Route::match(['get','post'],'/comprasFecha/{id}','CompraController@comprasFecha');

  Route::match(['get','post'],'/ModificarMateriaPrima/{id}','MateriaPrimaController@Modificar');
  Route::Resource('/ControlMateriaPrima','InventarioMPController@Mostrar');
  Route::match(['get','post'],'/VerInventarioMP/{id}','InventarioMPController@Ver');
  Route::Resource('/RegistroMateriaP','MateriaPrimaController');

  Route::match(['get','post'],'/VerVenta/{id}','VentasController@Ver');
  Route::match(['get','post'],'/VerInventarioPT/{id}','InventarioPTController@Ver');
  Route::Resource('/RegistrarVenta','VentasController');
  Route::Resource('/ReportesVenta','VentasController@Reportes');
  Route::Resource('/ListadeVentas','VentasController@Mostrar');
  Route::match(['get','post'],'/Factura/{tipo}/{idVenta}','VentasController@Factura');
  Route::match(['get','post'],'/FacturaCF/{tipo}/{idVenta}','VentasController@FacturaCF');
  Route::match(['get','post'],'/ReporteTodasVentas/{id}','VentasController@ReporteTodasVentas');

  Route::match(['get','post'],'/motivov/{idMot}/{motivo}','VentasController@AddMotivoVenta');
  Route::match(['get','post'],'/motivop/{idMotProd}/{motivoProd}/{descuentoProd}','InventarioPTController@motivosProd');
  Route::get('RegistrarVentas/{id}','VentasController@getResponsables');
  Route::resource('venta','ventasController');
  Route::match(['get','post'],'/responsable/{id}','VentasController@responsables');
  Route::Resource('/ProductosTerminados','InventarioPTController@Mostrar');
  Route::Resource('/VerProductosTerminados','InventarioPTController@Ver');

  Route::Resource('/ListadePedidos','PedidosController@Mostrar');
  Route::Resource('/IniciarPedido','PedidosController@Iniciar');
  Route::Resource('/FinalizarPedido','PedidosController@Finalizar');//este
  Route::Resource('/VerPedido','PedidosController@Ver');
  Route::Resource('/ModificarPedido','PedidosController@Modificar');
  Route::Resource('/EntregarPedido','PedidosController@Entregar');
  Route::Resource('/ListadePedidosaEntregar','PedidosController@ListaaEntregar');
  Route::Resource('/ListadePedidosSinIniciar','PedidosController@ListaSinIniciar');
  Route::Resource('/ListadePedidosaFinalizar','PedidosController@ListaaFinalizar');


  Route::Resource('/IniciarPedido','PedidosController@IniciarPedido');
  Route::Resource('Pedidos','PedidosController');
  Route::Resource('RegistrarPedidos','PedidosController@Registrar');

  Route::match(['get','post'],'/buscarTipoMercaderia/{id}','TipoMercaderiaController@buscar');

});
