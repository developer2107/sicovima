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
                            <br>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Tipo</label>
                                    <div class="col-lg-5 input-group m-b">
                                        {!! Form::text('tipo_Prod',$producto->tipo_Prod,['class'=>'form-control','readonly'=>'readonly'])!!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Estilo</label>
                                    <div class="col-lg-5 input-group m-b">
                                        {!! Form::text('estilo_Prod',$producto->estilo_Prod,['class'=>'form-control','readonly'=>'readonly'])!!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Color</label>
                                    <div class="col-lg-5 input-group m-b">
                                        {!! Form::text('color_Prod',$producto->color_Prod,['class'=>'form-control','readonly'=>'readonly'])!!}
                            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Precio</label>
                                    <div class="col-lg-3 input-group m-b">
                                        <span class="input-group-addon">$</span>
                                        {!! Form::number('precio_Prod',$producto->precio_Prod,['class'=>'touchspin2 form-control','step'=>'.01','readonly'=>'readonly'])!!}
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Talla</label>
                                    <div class="col-lg-3 input-group m-b">
                                        {!! Form::text('talla_Prod',$producto->talla_Prod,['class'=>'form-control','readonly'=>'readonly'])!!}
                            
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Descripcion</label>
                                    <div class="col-lg-6 input-group m-b">
                                        {!! Form::textarea('descripcion_Prod',$producto->descripcion_Prod,['class' => 'note-codable','size' => '40x3','readonly'=>'readonly'])!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Existencias</label>
                                    <div class="col-lg-6 input-group m-b">
                                        {!! Form::text('existencias',null,['class'=>'form-control','readonly'=>'readonly'])!!}
                                        
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Estado1</label>
                                    <div class="col-lg-6 input-group m-b">
                                        {!! Form::text('estado1',$producto->estado_Prod,['class'=>'form-control','readonly'=>'readonly'])!!}   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Estado2</label>
                                    <div class="col-lg-6 input-group m-b">
                                        {!! Form::text('estado2',$producto->estado2_Prod,['class'=>'form-control','readonly'=>'readonly'])!!}   
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Detalle</label>
                                    <div class="col-lg-6 input-group m-b">
                                        {!! Form::textarea('descripcion_DPT',null,['class' => 'note-codable','size' => '40x3','readonly'=>'readonly'])!!}
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
                                    <img alt="image" class="img-responsive" src="../img/Mada-Denim-Blanco-Larga.jpg">
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