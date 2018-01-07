@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Pedido</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
            </li>
            <li>
                <a href="index.html">Mostrar Lista</a>
            </li>
            <li>
                <a href="index.html">Buscar</a>
            </li>
            <li class="active">
                <strong>Ver Pedido</strong>
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
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Cliente</label>
                        <div class="col-md-8">
                            {!! Form::text('nombre_Cli',null,['class'=>'form-control','placeholder' => 'Del Sur']) !!}

                        </div>              
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Responsable</label>
                        <div class="col-lg-8">
                        {!! Form::text('nombreResponsable_CJ',null,['class'=>'form-control','placeholder' => 'Brenda del Carmen Guillen Maradiaga']) !!}
                               
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Total</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('total_Ped',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                               
                            </div>
                        </div>              
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Estado</label>
                        <div class="col-md-4">
                            <div class="input-group date">
                                {!! Form::text('tipo_EPed',null,['class'=>'form-control','placeholder' => 'En Proceso']) !!}
                            </div>
                        </div>
                        <label class="col-lg-1 control-label">Fecha</label>
                        <div class="col-md-4" id="data_2">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {!! Form::text('fecha_Ped', '07/01/2014',['class' =>'form-control']) !!}
                                
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src="img/p_big1.jpg">
                    </div>
                    
                </div>
               
            </div>
            <br> 
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
                        <div class="form-group" id="data_2">
                            <label class="font-bold">Fecha a Recibir</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {!! Form::text('fechaRecibir_Ped', '07/01/2014',['class' =>'form-control']) !!}
                         
                            </div>
                        </div>
                     </div>


                     <div class="col-md-2">
                        <div class="form-group" id="data_2">
                            <label class="font-bold">Fecha a Entregar</label>
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {!! Form::text('fechaEntregar_Ped', '07/01/2014',['class' =>'form-control']) !!}
                         
                            </div>
                        </div>

                     </div>


                    <div class="col-sm-2">
                        <label class="font-bold">Anticipo</label>
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('anticipo_Ped',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <label class="font-bold">Debe</label>
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('debe_Ped',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                        </div>
                    </div>

                    <div class="col-sm-2">
                        <label class="font-bold">Ganancia</label>
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('ganancia_Ped',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
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
                            <th>Costo</th>
                            <th>Ganancia</th>
                            <th>Subtotal</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>Pantalon Jeans</td>
                            <td>8</td>
                            <td>$11.62</td>
                            <td>$6.39</td>
                            <td>$18.01</td>
                            <td>
                                <a class="btn btn-primary btn-circle" type="button" data-toggle="modal" data-target="#myModal7"><i class="fa fa-eye"></i>
                                </a>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Camisa Manga Larga</td>
                            <td>8</td>
                            <td>$7.55</td>
                            <td>$4.15</td>
                            <td>$11.70</td>
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
                <div class="col-xs-4">  
                </div>
                    
                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        {!! Form::submit('Modificar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        
                    </div>
                </div>  
                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        {!! Form::submit('Eliminar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

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
                                <a class="btn btn-primary btn-circle" type="button" data-toggle="modal" data-target="#myModal8"><i class="fa fa-eye"></i>
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
                                <a class="btn btn-primary btn-circle" type="button" data-toggle="modal" data-target="#myModal8"><i class="fa fa-eye"></i>
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
                             {!! Form::select('tipo_MP', ['0' => 'Seleccionar','1' => 'Tela', '2' => 'Hilo', '3' => 'Ziper', '4' => 'Boton' , '5' => 'Remache'],'' ,['class' => 'form-control m-b','style' => 'width:150px']) !!}
                           
                        </div>
                    </div>
                    <div class="form-group">
                    <label class="col-lg-3 control-label">Materia Prima</label>
                        <div class="col-lg-9">

                            <div class="input-group">
                                {!! Form::select('nombre_MP', ['0' => 'Seleccionar'],'' ,['class' => 'chosen-select','style' => 'width:300px']) !!}
                               
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
                            {!! Form::number('cantidad_DPed',null,['class'=>'form-control']) !!}
                      
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


@stop