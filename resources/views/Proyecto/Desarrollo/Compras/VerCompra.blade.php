<?php use SICOVIMA\proveedor; ?>

@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::model($compra,['route'=>['RegistrarCompra.update',$compra->id], 'method'=>'PUT','autocomplete'=>'off']) !!}

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Compra</h2>
        <ol class="breadcrumb">
        <li>
            <a href={!! asset('ListadeCompras') !!}>Compras</a>
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
                <h5>Compra</h5>
            </div>
            <div class="ibox-content">
                <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-3 control-label">Numero Factura</label>
                    <div class="col-md-3">
                        <div class="input-group">
                          {!! Form::number('numFac_Com',$compra-> numFac_Com,['class'=>'form-control','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-3 control-label">Proveedor</label>
                    <div class="col-md-8">
                        {{-- <div class="input-group"> --}}
                         {!! Form::text('nombre_Prov',$proveedor->nombre_Prov,['class'=>'form-control','id'=>'nombre_Prov','readonly'=>'readonly']) !!}
                        {{-- </div> --}}
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-3 control-label">Fecha Compra</label>
                    <div class="col-md-4">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            <?php   $dato = explode("-",(String)$compra->fecha_Com);
                                    $fecha = $dato[2]." / ".$dato[1]." / ".$dato[0];
                            ?>
                            {!! Form::text('fecha_Com',$fecha,['class' =>'form-control','readonly'=>'readonly']) !!}
                        </div>
                    </div>
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
                        <img alt="image" class="img-responsive" src="../img/Mada-Denim-Blanco4.jpg">
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
                <h5>Detalles de la Compra</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-bordered" id="tablaProductos">
                    <thead>
                      <th>Cantidad</th>
                      <th>Descripción</th>
                      <th>Precio Unitario</th>
                      <th>Sub Total</th>
                    </thead>
                    <tbody>

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
                            {!! Form::number('total_Com',$compra->total_Com,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'total_Com','readonly'=>'readonly','step'=>'.01']) !!}
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
