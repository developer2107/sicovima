@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Productos Terminados</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Prodcutos Terminados</a>
            </li>
            <li>
                <a href="index.html">Mostrar Lista</a>
            </li>
            <li>
                <a href="index.html">Buscar</a>
            </li>
            <li class="active">
                <strong>Ver Productos Terminados</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8"></div>
</div>
<br>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Productos Terminados</h5>
                            
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                                
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Numero Pedidos</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('numPedVIPT',null,['class'=>'form-control','placeholder' => '1195'])!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Cliente</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('nombre_Cli',null,['class'=>'form-control','placeholder' => 'Grecia Maria'])!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Color</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('color_Prod',null,['class'=>'form-control','placeholder' => 'Café'])!!}
                            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Tipo de Producto</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('tipo_Prod',null,['class'=>'form-control','placeholder' => 'Pantalon'])!!}
                       
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Fecha Venta</label>
                                    <div class="col-lg-4">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            {!! Form::text('fecha_Ven', '21/08/2015',['class' =>'form-control']) !!}
                                            
                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Nombre de Producto Terminado</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('nombreVIPT',null,['class'=>'form-control','placeholder' => 'Pantalon Punta yuca'])!!}
                                        
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Cantidad de Producto</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('cant_DProd',null,['class'=>'form-control','placeholder' => '89'])!!}
                                        
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Estado</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('estadoVIPT',null,['class'=>'form-control','placeholder' => 'Entregado o Terminado'])!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Total</label>
                                    <div class="col-lg-4">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">$</span>
                                            {!! Form::number('totalVIPT',null,['class'=>'form-control','placeholder' => '70.23']) !!}
                                            
                                        </div>
                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Detalle</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('descripcion_Prod',null,['class'=>'form-control','placeholder' => 'pantalon con hilos dorados, botones azules'])!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label"></label>
                                    <div class="col-lg-4">
                                        <div class="input-group m-b">
                                            {!! Form::submit('Modificar Estado',['class'=>'btn btn-outline btn-primary dim']) !!}
                                            
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
        </div>
    </div>  
</div>
@stop