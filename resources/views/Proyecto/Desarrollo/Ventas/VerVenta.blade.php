@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::open(['route'=>'RegistrarCompra.store', 'method'=>'post']) !!}

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Venta</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Ventas</a>
            </li>
            <li>
                <a href="index.html">Mostrar Lista</a>
            </li>
            <li>
                <a href="index.html">Buscar</a>
            </li>
            <li class="active">
                <strong>Ver Venta</strong>
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
                    <h5>Venta</h5>
                    
                </div>


                <div class="ibox-content">
                <br>
                    <form class="form-horizontal">
                       <div class="row">
                        <div class="col-md-1">
                        </div>
                            <label class="col-lg-2 control-label">Cliente</label>
                            <div class="col-md-8">
                                {!! Form::text('nombre_Cli',null,['class'=>'form-control']) !!}
                                
                            </div>              
                        </div>
                        <div class="row">
                        <br>
                        <div class="col-md-1">
                        </div>
                            <label class="col-lg-2 control-label">Responsable</label>
                            <div class="col-lg-8">
                                {!! Form::text('nombreResponsable_CJ',null,['class'=>'form-control','placeholder' => 'Brenda del Carmen Guillen Maradiaga']) !!}
                    
                            </div>
                        </div>
                        <div class="row">
                        <br>
                        <div class="col-md-1">
                        </div>
                            <label class="col-lg-2 control-label">Fecha</label>
                            <div class="col-md-4" id="data_2">
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    {!! Form::text('fecha_Ven', '22/9/2017',['class' =>'form-control']) !!}
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <br>
                        <div class="col-md-1">
                        </div>
                            <label class="col-lg-2 control-label">Ganancia</label>
                            <div class="col-lg-4">
                                <div class="input-group m-b">
                                    <span class="input-group-addon">$</span>
                                    {!! Form::number('ganancia_Prod',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                                    
                                </div>
                            </div>  
                            <label class="col-lg-1 control-label">Total</label>
                            <div class="col-lg-4">
                                <div class="input-group m-b">
                                    <span class="input-group-addon">$</span>
                                    {!! Form::number('total_Ven',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                                    
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
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de la Venta</h5>
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
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Pantalon Jeans</td>
                        <td>2</td>
                        <td>$11.62</td>
                        <td>$6.39</td>
                        <td>$18.01</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Camisa Manga Larga</td>
                        <td>1</td>
                        <td>$7.55</td>
                        <td>$4.15</td>
                        <td>$11.70</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Producto</h5>
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
                <div class="row">
                <br>
                    <div class="form-group">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-4">
                            <label class="font-bold">Tipo</label>
                            {!! Form::text('tipo_Prod',null,['class'=>'form-control']) !!}
                            
                        </div>
                        <div class="col-sm-6">
                            <label class="font-bold">Color</label>
                            {!! Form::text('color_Prod',null,['class'=>'form-control']) !!}
                            
                        </div>
                        <div class="col-sm-1">
                        </div>
                    </div>      
                </div>  
                <div class="row">
                </div>
                <div class="row">
                 </br> 
                    <div class="form-group">
                        <div class="col-sm-1">
                        </div>
                        <div class="col-sm-5">
                            <label class="font-bold">Estilo</label>
                            
                            {!! Form::textarea('estilo_Prod', null, ['class' => 'note-codable','size' => '34x5']) !!}
                            
                        </div> 
                        <div class="col-sm-5">
                            <label class="font-bold">Descripción</label>
                            {!! Form::textarea('descripcion_Prod', null, ['class' => 'note-codable','size' => '34x5']) !!}
                            
                        </div>
                        <div class="col-sm-1">
                        </div>  
                    </div>
                </div>
                <div class="row">
                    </br>
                </div>
            </div>
        </div>
    </div> 
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles del Producto</h5>
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
                        <th>Materia Prima</th>
                        <th>Cantidad</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Tela</td>
                        <td>5 Yardas</td>
                        <td>$10.15</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Botones</td>
                        <td>8 Unidades</td>
                        <td>$1.22</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hilo</td>
                        <td>1 Cono</td>
                        <td>$0.25</td>
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
                        <a href="ModificarVenta" class="btn btn-outline btn-primary dim" type="button">Modificar</a>
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

{!! Form::close() !!}
@stop