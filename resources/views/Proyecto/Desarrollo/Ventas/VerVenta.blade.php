@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::model($venta,['route'=>['RegistrarVenta.update',$venta->id], 'method'=>'PUT','autocomplete'=>'off']) !!}

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Venta</h2>
        <ol class="breadcrumb">
        <li>
            <a href={!! asset('ListadeVentas') !!}>Ventas</a>
        </li>
        <li class="active">
            <strong>Ver</strong>
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
                <br><?php  if ($venta->estado_Ven!=2): ?>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Estado</label>
                    <div class="col-md-6">
                        <div class="input-group">
                          {!!Form::text('estado',"Normal",['class'=>'form-control','id'=>'estado','readonly'=>'readonly'])!!}
                        </div>
                    </div>
                </div>
                <?php else: ?>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Estado</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            {!!Form::text('estado',"Anulada",['class'=>'form-control','id'=>'estado','readonly'=>'readonly'])!!}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Motivo</label>
                    <div class="col-md-6">
                        <div class="input-group">
                            <?php $xx = SICOVIMA\Http\Controllers\VentasController::motivoss($venta->id); ?>  
                            {!! Form::textarea('motivoEstado',$xx->motivo_EstadoDoc,['class' => 'note-codable','size' => '40x3','id'=>'motivoEstado','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                </div>
                <?php endif ?>
                <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Cliente</label>
                    <div class="col-md-6">
                        <div class="input-group">
                           {!!Form::text('clientex',$cliente->nombre_Cli,['class'=>'form-control','id'=>'clientex','readonly'=>'readonly'])!!}
                        </div>
                    </div>
                </div>
                <div class="row">
                <br>
                    <div class="col-md-1">
                    </div>
                    <?php

                        $responsable = SICOVIMA\Http\Controllers\VentasController::responsables($venta->id_Cliente);
                        if ($responsable == "false") {
                            $responsable = "";
                        }else{
                            $responsable = $responsable->nombreResponsable_CJ;
                        }
                    ?>
                    <label class="col-lg-2 control-label">Responsable</label>
                    <div class="col-lg-8">
                        <div class="input-group">
                            {!! Form::text('nombreResponsable',$responsable,['id' => 'nombreResponsable','class'=>'form-control','readonly'=>'readonly','style' => 'width:300px']) !!}
                        </div>
                    </div>
                </div>
                <div class="row" id="data_2">
                <br>
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Fecha</label>
                    <div class="col-md-4">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <?php   $dato = explode("-",(String)$venta->fecha_Ven);
                                    $fecha = $dato[2]." / ".$dato[1]." / ".$dato[0];
                            ?>
                            {!! Form::text('fecha_Ven',$fecha,['class' =>'form-control']) !!}
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-2">
                        {!! Form::button('Ver Documento',['class'=>'btn btn-outline btn-primary']) !!}
                    </div>
                    <br>
                </div>
                <br>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src="img/Mada-Denim-Blanco2.jpg">
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
            </div>
            <div class="ibox-content">
                <table class="table table-bordered" id="tablaProductos">
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Ganancia</th>
                        <th>Subtotal</th>
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $total=0;
                        $indice=0;
                        foreach ($venta->detalleVenta as $key => $detalle):

                    ?>
                    <?php
                        $prod=SICOVIMA\producto::find($detalle->id_Producto);
                        $subtotal=($detalle->costoProd_DVen+$detalle->gananciaProd_DVen)*$detalle->cant_DVen;
                        $cadena='modificarDetalle('.$indice.');';
                        $icd="cd".$indice;
                        $ign="gn".$indice;
                    ?>
                        <tr>
                           <td style = "width:40%">{{$prod->tipo_Prod." ".$prod->estilo_Prod." ".$prod->color_Prod}}</td>
                           <td style = "width:10%" id="cd{{$indice}}">{{$detalle->cant_DVen}}</td>
                           <td style = "width:10%" id="ct{{$indice}}">{{$detalle->costoProd_DVen}}</td>
                           <td style = "width:10%" id="gn{{$indice}}">{{$detalle->gananciaProd_DVen}}</td>
                           <td style = "width:10%" id="st{{$indice}}">{{$subtotal}}</td>
                        </tr>
                    <?php
                        $total=$total+$subtotal;
                        $indice++;
                        endforeach
                    ?>
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-1">
                        <label class="col-lg-2 control-label">Total:</label>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('total_Ven',$total,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'totalVenta','readonly'=>'readonly','step'=>'.01']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<br>

{!! Form::close() !!}
@stop
