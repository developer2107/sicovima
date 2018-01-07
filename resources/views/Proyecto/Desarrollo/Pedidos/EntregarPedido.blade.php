@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::open(['route'=>'EntregarPedido.store', 'method'=>'post']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Entrega Pedido</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
            </li>
            <li>
                <a href="index.html">Entregar</a>
            </li>
            <li class="active">
                <strong>Entregar</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">    
    </div>
</div>
<br>

<div class="row">
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pedido</h5>
                
            </div>


            <div class="ibox-content">
             <br>

                <form class="form-horizontal">

                    <div class="row">
                    	<div class="col-md-1">
                    	</div>
                        <label class="col-lg-2 control-label">Cliente</label>
                        <div class="col-md-9">
                            <div class="input-group">
                            	{!! Form::text('nombre_Cli',null,['class'=>'form-control']) !!}
                            	<!-- Este es no editable -->
                            </div>
                        </div>                      
                    </div>

                    <div class="row">
                    <br>
                    <div class="col-md-1">
                   	</div>
                    <label class="col-lg-2 control-label">Responsable</label>
                        <div class="col-lg-9">
                            <div class="input-group">
                            	{!! Form::text('nombreResponsable_CJ',null,['class'=>'form-control']) !!}
                            	<!-- Este es no editable -->
                            </div>
                        </div>
                    </div>

                    <div class="row"  id="data_2">
	                    <br>
	                    <div class="col-md-1">
	                    </div>
	                    <label class="col-lg-2 control-label">Fecha</label>
                        <div class="col-md-4">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {!! Form::text('fechaEntregar_Ped', null,['class'=>'form-control']) !!}
                                <!-- Este es no editable -->
                            </div>
                        </div>
                        <label class="col-lg-1 control-label">Debe</label>
                        <div class="col-lg-3">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('debe_Ped',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                                <!-- Este es no editable y es calculado siempre-->
                            </div>
                        </div>
                    </div>
                    <br>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src="img/mada.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>    
</div>

<div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <div class="row">

                        <div class="col-md-2">
                            <div class="form-group"  id="data_2">
                                <label class="font-bold">Fecha de Realización</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    {!! Form::text('fecha_Ped', 'null',['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label class="font-bold">Anticipo</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('anticipo_Ped',null,['class'=>'form-control','step'=>'any']) !!}
                            </div>
                        </div>

                        <div class="col-sm-2">
                            <label class="font-bold">Ganancia</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('ganancia_Ped',null,['class'=>'form-control','step'=>'any']) !!}
                                <!-- Este es calculado y se puede editar -->
                            </div>
                        </div>

                         <div class="col-sm-2">
                            <label class="font-bold">Total</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('total_Ped',null,['class'=>'form-control','step'=>'any']) !!}
                            </div>
                        </div>              
                        

                        <div class="col-md-2">

                            <label class="font-bold">Documento</label>
                            <div class="input-group bootstrap-touchspin">
                                {!! Form::select('tipo_Doc', ['1' => 'Factura', '2' => 'Recibo'],'Seleccionar' ,['class' => 'form-control m-b','data-placeholder'=>'Seleccionar']) !!}
                            </div>
                        </div>
                        <div class="col-md-1">
                         <label class="font-bold">              </label>
                            <div class="input-group bootstrap-touchspin">
                                <a class="btn btn-outline btn-primary dim" type="button">Generar</a>
                            </div>
                        </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Detalles de Pedido</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Producto</th>
                            <th>Cantidad</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pantalon Jeans</td>
                            <td>8</td>
                            <td>
                                <a class="btn btn-primary btn-circle" type="button" data-toggle="modal" data-target="#myModal7"><i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Camisa Manga Larga</td>
                            <td>8</td>
                            <td>
                                 <a class="btn btn-primary btn-circle" type="button" data-toggle="modal" data-target="#myModal7"><i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="ibox">
        <div class="ibox-content">
            <div class="row">
            <br>
                <div class="col-xs-5">  
                </div>
                    
                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        <a class="btn btn-outline btn-primary dim" type="button">Entregar</a>
                    </div>
                </div>  
            </div>
        </div>
    </div>
</div>
<br>
<br>

<div class="modal inmodal" id="myModal7" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Detalles</h4>
                <small></small>
            </div>
   

            <div class="modal-body">
                    
                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Talla</th>
                            <th>Categoria</th>
                            <th>Color</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>5</td>
                            <td>S</td>
                            <td>Hombre</td>
                            <td>Azul</td>
                            <td>Acampanado</td>
                            <td>
                                <a class="btn btn-success btn-circle" type="button" data-toggle="modal" data-target="#myModal8"><i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>M</td>
                            <td>Mujer</td>
                            <td>Negro</td>
                            <td>Punta estrecha</td>
                            <td>
                                <a class="btn btn-success btn-circle" type="button" data-toggle="modal" data-target="#myModal8"><i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        </tbody>
                    </table>
                        </div>
                    </div>
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="myModal8" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Materia Prima</h4>
                <small></small>
            </div>
   

            <div class="modal-body">
                 <div class="ibox-content">
                <form class="form-horizontal">
                    <br>

                    <div class="form-group"><label class="col-lg-3 control-label">Tipo</label>

                        <div class="col-lg-7">
                            {!! Form::select('tipo_MP', ['1' => 'Tela', '2' => 'Hilo', '3' => 'Zipper', '4' => 'Boton', '5' => 'Remache'],'Seleccionar' ,['class' => 'chosen-select','data-placeholder'=>'Seleccionar','style' => 'width:300px','tabindex' => '2']) !!}
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Materia Prima</label>
                        <div class="col-lg-9">
                            <div class="input-group">
                                {!! Form::select('nombre_MP', ['1' => 'Denim'],'Seleccionar' ,['class' => 'chosen-select','data-placeholder'=>'Seleccionar','style' => 'width:300px','tabindex' => '2']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Precio</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('precio_MP',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                                
                            </div>
                       </div>   
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Cantidad</label>
                        <div class="col-lg-2">
                            {!! Form::number('cant_DPed',null,['class'=>'form-control']) !!}
                        </div> 
                    </div>
                    
                    <div class="form-group"><label class="col-lg-3 control-label">Subtotal</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('subTotal_DPed',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                           
                            </div>
                       </div>   
                    </div>
                </form>
            </div>   
                    
            </div>
        
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop