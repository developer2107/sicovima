<?php use SICOVIMA\materiaPrima;
use SICOVIMA\proveedor; ?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::open(['route'=>'RegistrarCompra.store', 'method'=>'post','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Registro de Compra</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Compras</a>
            </li>
            <li class="active">
                <strong>Registrar</strong>
            </li>
        </ol>
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
             <?php //aqui abro el primer formulario que es del boton registrar, recordar que el ultimo boton que este ese detectara el formulario para enviarse a la routa que se especifica, como crearemos se usa el metodo post..... ?>
            <div class="ibox-content">

                <div class="row">

                    <div class="col-md-2">
                        <div class="form-group" id="data_1">
                            {!! Form::Label('Numero de factura') !!}
                            <div class="form-group">
                                {!! Form::number('numFac_Com',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        {!! Form::Label('Proveedor') !!}
                        <div class="input-group">
                            {!! Form::select('nombre_Prov',proveedor::arrayProveedores(),'',['id'=>'cambioPR','placeholder'=>'Seleccione el Proveedor','class'=>'chosen-select','data-placeholder'=>'Seleccione el Proveedor','style'=>'width:300px']) !!}

                        </div>
                    </div>

                    <div class="col-md-3">
                        <div class="form-group" id="data_2">
                             {!! Form::Label('Fecha de Compra') !!}
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                {!! Form::date('fecha_Com',null,['class'=>'form-control']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <label class="font-bold"></label>
                        <div class="input-group bootstrap-touchspin">
                            <a href="" class="btn btn-outline btn-primary dim" data-toggle="modal" data-target="#modalMateriaPrima" type="button">Agregar Materia Prima</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@include('Proyecto.Desarrollo.Compras.Form.tablaRegistroCompras')

<div class="row">
    <div class="ibox">
        <div class="ibox-content">
            <div class="row">
            <br>
                <div class="col-xs-4">
                </div>

                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}

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
@include('Proyecto.Desarrollo.Compras.Form.modalRegistroCompras')

{!! Form::close() !!} <?php //cierre del form modal ?>
@stop
