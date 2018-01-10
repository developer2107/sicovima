@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Productos Terminados</h2>
        <ol class="breadcrumb">
            <li>
                <a href={!! asset('ProductosTerminados') !!}>Lista de Productos Terminados</a>
            </li>
            <li class="active">
                <strong>Ver Producto Terminado</strong>
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
                                    <div class="col-lg-2 input-group m-b">
                                        {!! Form::text('existencias',$exis->nuevaExistencia_IPT,['class'=>'form-control','readonly'=>'readonly'])!!}
                                        
                                    </div>
                                </div>

                                
<!--#########################--><?php if (($producto->estado_Prod==0)&&($producto->estado2_Prod==0)): ?>
                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Estado</label>
                                    <div class="col-lg-7 input-group m-b">
                                    {!! Form::text('estado1',"En pedido y En buenas condiciones",['class'=>'form-control','readonly'=>'readonly'])!!}
                                    </div>
                                </div>
<!--#########################--><?php else: ?>
<!--#########################-->    <?php if (($producto->estado_Prod==1)&&($producto->estado2_Prod==0)): ?>
                                    <div class="form-group">
                                        <label class="col-lg-4 control-label">Estado</label>
                                        <div class="col-lg-7 input-group m-b">
                                            {!! Form::text('estado1',"Disponible para vender y En buenas condiciones",['class'=>'form-control','readonly'=>'readonly'])!!}
                                        </div>
                                    </div>
<!--#########################-->    <?php else: ?>
<!--#########################-->        <?php if (($producto->estado_Prod==0)&&($producto->estado2_Prod==1)): ?>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Estado</label>
                                            <div class="col-lg-7 input-group m-b">
                                                {!! Form::text('estado1',"En pedido y Dañado",['class'=>'form-control','readonly'=>'readonly'])!!}
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-lg-4 control-label">Detalle</label>
                                            <div class="col-lg-7 input-group m-b">
                                                {!! Form::textarea('descripcion_DPT',null,['class' => 'note-codable','size' => '40x3','readonly'=>'readonly'])!!}
                                            </div>
                                        </div>
<!--#########################-->        <?php else: ?>
<!--#########################-->            <?php if (($producto->estado_Prod==1)&&($producto->estado2_Prod==1)): ?>
                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Estado</label>
                                                <div class="col-lg-7 input-group m-b">
                                                    {!! Form::text('estado1',"Disponible para vender y Dañado",['class'=>'form-control','readonly'=>'readonly'])!!}
                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-lg-4 control-label">Detalle</label>
                                                <div class="col-lg-7 input-group m-b">
                                                    {!! Form::textarea('descripcion_DPT',$defec->descripcion_DPT,['class' => 'note-codable','size' => '40x3','readonly'=>'readonly'])!!}
                                                </div>
                                            </div>
<!--#########################-->            <?php endif ?>
<!--#########################-->        <?php endif ?>
<!--#########################-->    <?php endif ?>
<!--#########################--><?php endif ?>                             
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