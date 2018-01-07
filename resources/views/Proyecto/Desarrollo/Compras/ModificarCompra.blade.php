<?php use SICOVIMA\proveedor;
use SICOVIMA\detalleCompra;  ?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($compra,['route'=>['RegistrarCompra.update',$compra->id], 'method'=>'PUT']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Modificar Compra</h2>
    </div>
    <div class="col-sm-8">
    </div>
</div>

<br>
<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Compra</h5>
                </div>
                <div class="ibox-content">

                    <div class="row">

                        <div class="col-md-3">
                            <div class="form-group" id="data_1">
                                <label class="font-bold">Numero de Factura</label>
                                <div class="form-group">
                                    <label for="exampleInputEmail2" class="sr-only">Numero de Factura</label>
                                    {!! Form::number('numFac_Com',null,['class'=>'form-control']) !!}
                                </div>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <label class="font-bold">Proveedor</label>
                            <div class="input-group">
                                {!! Form::select('nombre_Prov',proveedor::arrayProveedores(),$compra->nombre_Prov,['class'=>'chosen-select','data-placeholder'=>'ingrese','style'=>'width:300px']) !!}
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="form-group" id="data_2">
                                <label class="font-bold">Fecha de Compra</label>
                                <div class="input-group date">
                                    <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                    {!! Form::date('fecha_Com',null,['class'=>'form-control']) !!}
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
                <h5>Detalles de Compra</h5>
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
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Subtotal</th>
                        <th>Opciones</th>

                    </tr>
                    </thead>

                    <tbody>
                      <?php
                        $detalles = detalleCompra::detalle($compra->id);
                        $total1 = 0;
                      ?>
                      @foreach ($detalles as $detalle)
                      <?php
                        $materiaP=detalleCompra::detalleM($detalle->id_MateriaPrima);
                      ?>

                    <tr>
                        <td><input type='hidden' name='total[]' value='{{$detalle->subtotal_DCom}}'>
                        <input type='hidden' name='cantidadc[]' value='{{$detalle->cant_DCom}}'>
                        <input type='hidden' name='tipoc[]' value='{{$materiaP->tipo_MP}}'>
                        <input type='hidden' name='medidac[]' value='{{$materiaP->unidadMedida_MP}}'>
                        <input type='hidden' name='colorc[]' value='{{$materiaP->color_MP}}'>
                        <input type='hidden' name='nombrec[]' value='{{$materiaP->nombre_MP}}'>
                        {{$detalle->cant_DCom}}
                        </td>
                        <td>
                        {{$materiaP->nombre_MP}}
                        </td>
                        <td>
                        {{$detalle->subtotal_DCom}}
                        </td>
                        <?php
                           $total1 = $detalle->subtotal_DCom + $total1;
                        ?>
                        <td class='edicion' style='cursor:pointer;'>
                            <a class="btn btn-success btn-circle" data-toggle="modal" data-target="#modalProducto" ><i class="fa fa-pencil-square-o"></i>
                            </a>
                            </td>
                            <td class='deleteC' style='cursor:pointer;'>
                            <a class="btn btn-warning btn-circle"><i class="fa fa-times"></i>
                            </a>
                            </td>


                    </tr>
                      @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="form-group"><label class="col-lg-1 control-label">Total</label>
                        <div class="col-xs-2">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('total_Com',$total1,['id'=>'total_Com','class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                </div>
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
                        <a href="" class="btn btn-outline btn-primary dim" type="button">Modificar</a>
                    </div>
                </div>
                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        <a href="" class="btn btn-outline btn-primary dim" type="button">Cancelar</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="modal inmodal" id="modalProducto" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Producto</h4>
                <small>Registre el producto de su compra</small>
            </div>


            <div class="modal-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group"><label>Cantidad</label>
                                {!! Form::number('cant',null,['id'=>'cant', 'class'=>'form-control','placeholder'=>'ingrese']) !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group"><label>Tipo</label>
                                {!! Form::select('nombreTipo', ['1' => 'Tela','2'=>'Hilo','3' => 'Botones','4' =>'Remaches'], null,['id'=>'nombreTipo','class'=>'form-control m-b']) !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="font-bold">Unidad de Medida</label>
                            <div class="input-group m-b">
                                {!! Form::text('unidadMP',null,['id'=>'unidadMP','class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group"><label>Color</label>
                                {!! Form::text('colorMP',null,['id'=>'colorMP','class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group"><label>Nombre</label>
                                {!! Form::text('nombreMP',null,['id'=>'nombreMP','class'=>'form-control']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label class="font-bold">SubTotal</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('subTotal',null,['id'=>'subTotal','class'=>'touchspin2 form-control','step'=>'any']) !!}
                            </div>
                        </div>
                    </div>

            </div>

            <div class="modal-footer">
                {{-- <button type="button" class="btn btn-primary">Modificar</button> --}}
                <input type="button" class="btn btn-primary" name="agregarProducto" id="agregarProducto" value="Agregar" onclick="agregarProducto()"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
{!! Form::close() !!}
@stop
