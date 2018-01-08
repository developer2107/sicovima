<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});



/* DE AQUI ABAJO ESTAN LAS RUTAS DE BRENDA*/

Route::Resource('/RegistroProveedor','ProveedoresController');
Route::Resource('/RegistroCliente','ClientesController');
Route::Resource('/MostrarListaProv','ProveedoresController@Mostrar');
Route::Resource('/MostrarListaCli','ClientesController@Mostrar');
Route::get('/VerCliente','ClientesController@Ver');
Route::match(['get','post'],'/municipio/{id}','ClientesController@municipios');
Route::match(['get','post'],'/municipio/{id}','ProveedoresController@municipios');
Route::get('/VerProveedor','ProveedoresController@verpro');
Route::get('/ModificarProv','ProveedoresController@modificarpro');
Route::get('/ModificarCli','ClientesController@ModificarCli');
Route::get('/DarBajaProv','ProveedoresController@darbajaprov');
Route::get('/DarBajaCli','ClientesController@darbajacli');

/* DE AQUI ABAJO ESTAN LAS RUTAS DE GRECIA*/

Route::Resource('Bitacora','BitacoraController');
Route::match(['get','post'],'/ModificarVenta/{id}','VentasController@Modificar');
Route::Resource('/RegistrarVenta','VentasController');
Route::Resource('/ListadeVentas','VentasController@Mostrar');
Route::match(['get','post'],'/motivo/{id}/{motivo}','VentasController@motivos');

Route::Resource('/AnularVenta','VentasController@Anular');
Route::Resource('/VerVenta','VentasController@Ver');
Route::get('RegistrarVentas/{id}','VentasController@getResponsables');
Route::resource('venta','ventasController');
Route::match(['get','post'],'/responsable/{id}','VentasController@responsables');
Route::Resource('/ListadeCompras','CompraController@Mostrar');
Route::Resource('/RegistrarCompra','CompraController');
Route::Resource('/VerCompra','CompraController@Ver');
Route::Resource('/ModificarCompra','CompraController@Modificar');
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


/* DE AQUI ABAJO ESTAN LAS RUTAS DE BENJAMIN*/


Route::get('/ControlMateriaPrima','InventarioMPController@Mostrar');
Route::Resource('/VerMateriaPrima','InventarioMPController@Ver');
Route::Resource('/RegistroMateriaP','MateriaPrimaController');
Route::get('/ControlProductosTerminados','InventarioPTController@Mostrar');
Route::Resource('/VerProductosTerminados','InventarioPTController@Ver');
Route::get('/Login','LoginController@index');
Route::get('/BuscarUsuario','SeguridadController@Buscar');
Route::get('/VerUsuario','SeguridadController@Ver');
Route::get('/ModificarUsuario','SeguridadController@Modificar');
Route::get('/RegistrarUsuario','SeguridadController@Registrar');




Route::group(['prefix' => 'admin'], function(){
      Route::resource('pedidos','PedidosController');
});

Route::group(['prefix' => 'admin'], function(){
      Route::resource('cliente','ClientesController');
});

Route::group(['prefix' => 'admin'], function(){
      Route::resource('compra','CompraController');
});

Route::group(['prefix' => 'admin'], function(){
      Route::resource('inventarioMP','InventarioMPController');
});

Route::group(['prefix' => 'admin'], function(){
      Route::resource('inventarioPT','InventarioPTController');
});

Route::group(['prefix' => 'admin'], function(){
      Route::resource('login','LoginController');
});

Route::group(['prefix' => 'admin'], function(){
      Route::resource('proveedor','ProveedoresController');
});
