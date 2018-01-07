@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::model($venta,['route'=>['RegistrarVenta.update',$venta->id], 'method'=>'PUT','autocomplete'=>'off']) !!}

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Modificar de Venta</h2>
        <ol class="breadcrumb">
        <li>
            <a href="index.html">Ventas</a>
        </li>
        <li class="active">
            <strong>Modificar</strong>
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
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Cliente</label>
                    <div class="col-md-6">
                        <div class="input-group">
                           {!!Form::select('clientes',$arrayC,$venta->id_Cliente,['class'=>'form-control','id'=>'clientes'])!!}
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
                    <div class="col-lg-7">
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
                                    $fecha = $dato[2]."/".$dato[1]."/".$dato[0];
                            ?>
                            {!! Form::text('fecha_Ven',$fecha,['class' =>'form-control']) !!}

                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="input-group bootstrap-touchspin">
                             <a type="button" class="btn btn-outline btn-primary dim" data-toggle="modal" data-target="#myModalTabla">Agregar producto</a>
                            
                        </div>
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
                        <th>Acciones</th>
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
                           <td style = "width:20%">
                            <input type="hidden" name='idV[]' id='idDV{{$indice}}' value='{{$detalle->id_Producto}}'>
                            <input type="hidden" name='cantidadV[]' id='cdDV{{$indice}}' value='{{$detalle->cant_DVen}}'>
                            <input type="hidden" name='costoProdV[]' id='ctDV{{$indice}}' value='{{$detalle->costoProd_DVen}}'>
                            <input type="hidden" name='gananciaV[]' id='gnDV{{$indice}}' value='{{$detalle->gananciaProd_DVen}}'>
                            <input type="hidden" name='id[]' id='id{{$indice}}' value='{{$detalle->id}}'>
                            <a class='btn btn-danger btn-circle' type='button' id='Eliminar'><i class='fa fa-times'></i></a>
                            <a class='btn btn-success btn-circle' type='button' id='ModificarDetalle'><i class='fa fa-pencil-square-o' data-dismiss="modal" data-toggle="modal" data-target="#myModal6" onclick="{{$cadena}}"></i></a>
                            </td> 
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
                        <h5>Total:</h5>
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


<div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
        <div class="ibox">
            <div class="ibox-title">
                <h5></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-bold">Documento</label>
                        <div class="input-group bootstrap-touchspin">
                            {!! Form::select('tipo_Doc', ['0' => 'Factura', '1' => 'Recibo'],'Seleccionar' ,['class' => 'form-control m-b','data-placeholder'=>'Seleccionar']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="font-bold">Numero</label>
                        <div class="input-group bootstrap-touchspin">
                            {!! Form::number('numeroDoc',null,['id' => 'numeroDoc','class'=>'form-control','style' => 'width:150px']) !!}
                        </div>
                    </div>
                   <div class="col-md-4">
                    <label class="font-bold">Descripcion</label>
                        <div class="input-group">
                        {!! Form::textarea('motivoEstado',null,['class' => 'note-codable','size' => '40x3','id'=>'motivoEstado','placeholder'=>'   ¿Cual es el motivo para modificar esta venta?']) !!}
                        </div>
                    </div>
                </div>
                <div class="row">
                     <label class="font-bold">              </label>
                </div>
                <div class="row">
                    <div class="col-md-3">
                    </div>   
                    <div class="col-md-3">
                        <label class="font-bold">              </label>
                        <div class="input-group bootstrap-touchspin">
                            {!! Form::submit('Modificar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label class="font-bold">              </label>
                        <div class="input-group bootstrap-touchspin"><a class='btn btn-outline btn-primary dim'>Cancelar</a>
                        </div>
                    </div>
                </div>
                <br>
                <br>
            </div>
        </div>
    </div>
</div>
<br>

<div class="modal inmodal" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cuantos desea llevar?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label>Cantidad</label>
                            {!! Form::number('cantidadMCarPed',null,['class'=>'form-control','id'=>'cantidad']) !!}
                        </div>
                    </div>
                    <div class="col-md-4">
                        <label class="font-bold">Ganancia por unidad</label>
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('ganancia_Prod',null,['class'=>'form-control','id'=>'gananciau','step'=>'.01']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <input class="btn btn-primary" name="agregarVentas" id="agregarVentas" type="button" value="Agregar" data-dismiss="modal"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal fade" id="myModalTabla" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cual desea llevar?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Productos</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table class="table table-bordered" id="tablaProductosTerm">
                                            <thead>
                                            <tr>
                                                <th>Estilo</th>
                                                <th>Talla</th>
                                                <th>Existencias</th>
                                                <th>Color</th>
                                                <th>Descripcion</th>
                                                <th>Precio</th>
                                                <th>Accion</th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            @foreach ( $productos as $prod )
                                            <?php
                                            $inv = SICOVIMA\inventarioProductoTerminado::where('id_Producto',$prod->id)->get()->last();
                                            if ($inv->nuevaExistencia_IPT!=0) {
                                                # code...
                                            ?>
                                            <tr>
                                                <td align="left" id="estilo"><font size="4" >{{$prod-> tipo_Prod}} {{$prod-> estilo_Prod}}</font></td>
                                                <td align="left"><font size="4" >{{$prod-> talla_Prod}}</font></td>
                                                <td align="left"><font size="4" >{{$inv->nuevaExistencia_IPT}}</font></td>
                                                <td align="rihgt"><font size="4" >{{$prod->color_Prod}}</font></td>
                                                <td align="rihgt"><font size="4" >{{$prod->descripcion_Prod}}</font></td>
                                                <td align="rihgt" id="precio"><font size="4" >{{$prod->precio_Prod}}</font></td>
                                                <td align="center">
                                                    <input type="hidden" value='{{$prod->tipo_Prod." ".$prod->estilo_Prod." ".$prod->color_Prod}}'>
                                                    <input type="hidden" value='{{$inv->nuevaExistencia_IPT}}'>
                                                    <input type="hidden" value='{{$prod->precio_Prod}}'>
                                                    <input type="hidden" value='{{$prod->id}}'>
                                                    <input type="hidden" name="prueba" value="100"/>
                                                    <a class="btn btn-success btn-circle" type="button" id="AddCant" data-dismiss="modal" data-toggle="modal" data-target="#myModal6">
                                                    <i class="fa fa-pencil-square-o"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            <?php } ?>
                                            @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal" id="myModalAnular" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cual es el motivo para modificar esta venta?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label>Descripcion</label>
                            {!! Form::textarea('motivoEstado',null,['class' => 'note-codable','size' => '34x5','id'=>'motivoEstado']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                {!! Form::button('Modificar',['class'=>'btn btn-outline btn-primary dim','id=>']) !!}

                <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop