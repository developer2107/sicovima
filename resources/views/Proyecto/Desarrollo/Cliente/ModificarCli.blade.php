@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($cliente,['route'=>['RegistroCliente.update',$cliente->id], 'method'=>'PUT']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Modificar Cliente</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Clientes</a>
            </li>
            <li class="active">
                <strong>Modificar Cliente</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>

<br>
<div id="contenido">
                    
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="ibox float-e-margins">
                                <div class="ibox-title">
                                    <h5></h5>
                                    
                                </div>
                                <div class="ibox-content">
                                    <form class="form-horizontal">
                                            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nombre</label>
                    <div class="col-lg-9">
                        {!! Form::text('nombre_Cli',null,['id' => 'nombreCliente','class'=>'form-control','style' => 'width:300px']) !!}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Tipo de Cliente</label>
                    <div class="col-lg-5">
                        <div class="radio radio-info radio-inline">
                        <?php if ($cliente->tipo_Cli): ?>
                            <input type="radio" id="natural" value="0" name="tipo_Cli" disable="false">
                            <label for="0"> Natural </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="juridico" value="1" name="tipo_Cli" checked="" disable="false">
                            <label for="1"> Juridico </label>
                        <?php else: ?>
                            <input type="radio" id="natural" value="0" name="tipo_Cli" checked="" disable="false">
                            <label for="0"> Natural </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="juridico" value="1" name="tipo_Cli" disable="false">
                            <label for="1"> Juridico </label>
                        <?php endif ?>

                            
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <?php if ($cliente->tipo_Cli): ?>
                <div id="datosNatural" class="row" style="display:none">
            <?php else: ?>
                <div id="datosNatural" class="row">
            <?php endif ?>
            
                <div class="form-group">
                    <label class="col-lg-3 control-label">DUI</label>
                    <?php
                    $duiC = SICOVIMA\clienteNatural::where('id_Cliente',$cliente->id)->get()->first();
                    if (count($duiC)>0) {
                        $aux = $duiC->DUI_CN;
                    } else {
                        $aux ="";
                    }
                    
                     ?>
                    <div class="col-lg-5">
                        {!! Form::text('DUI_CN',$aux,['id' => 'duiCliente','class'=>'form-control','data-mask'=>'99999999-9','style' => 'width:110px']) !!}
                    </div>
                </div>
            </div>
            <br>
            <?php if ($cliente->tipo_Cli): ?>
                <div id="datosJuridico" class="row" >
            <?php else: ?>
                <div id="datosJuridico" class="row" style="display:none">
            <?php endif ?>
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">NIT </label>
                    <?php
                    $nitC = SICOVIMA\clienteJuridico::where('id_Cliente',$cliente->id)->get()->first();
                    if (count($nitC)>0) {
                        $aux = $nitC->NIT_CJ;
                        $aux2= $nitC->RNC_CJ;
                        $aux3= $nitC->nombreResponsable_CJ;
                    } else {
                        $aux ="";
                        $aux2 ="";
                        $aux3 ="";
                    }
                    
                     ?>
                        <div class="col-lg-5">
                            {!! Form::text('NIT_CJ',$aux,['id' => 'nitCliente','class'=>'form-control','data-mask'=>'9999-999999-999-9','style' => 'width:155px']) !!}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">RNC </label>
                        <div class="col-lg-5">
                            {!! Form::text('RNC_CJ',$aux2,['id' => 'rncCliente','class'=>'form-control','data-mask'=>'999-99999-9','style' => 'width:155px']) !!}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre del Responsable </label>
                        <div class="col-lg-9">
                            {!! Form::text('nombreResponsable_CJ',$aux3,['id' => 'nombreResponsable','class'=>'form-control','style' => 'width:300px']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="idTelefonos">
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Teléfono </label>
                        <div class="col-lg-4" >
                            <?php 
                            $telefonos = $cliente->telefonoCliente;
                            foreach ($telefonos as $telefono) {
                            
                             ?>
                            {!! Form::text('tel[]',$telefono->numero_TelefonoCli,['class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
                           <?php 
                            }
                            ?>
                        </div>
                        <div class="col-lg-1">
                            <button class="btn btn-default  dim " type="button" id="AddTelefono" name="AddTelefono">
                                <i class="fa fa-plus"></i>
                            </button>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
            <br>
            <div id="idCorreos">
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Correo Electronico</label>
                    <div class="col-lg-7">
                     <?php 
                            $correos = $cliente->correoCliente;
                            foreach ($correos as $correo) {
                            
                             ?>
                        {!! Form::email('cor[]',$correo->correo_CorreoCli,['class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
                        <?php 
                            }
                            ?>
                    </div>
                    <div class="col-lg-2">
                        <button class="btn btn-default  dim " type="button" id="AddCorreo"  name="AddCorreo">
                            <i class="fa fa-plus"></i>
                        </button>
                    </div>
                </div>
            </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Dirección </label>
                    <div class="col-lg-9">
                        {!! Form::text('direccion_Cli',null,['id' => 'direccionCliente','class'=>'form-control','style' => 'width:350px']) !!}
                    </div>
                </div>
            </div>

            <br>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-3">
                    {!! Form::submit('Modificar',['class'=>'btn btn-outline btn-primary']) !!}
                </div>
                <div class="col-lg-3">
                    <button type="button" class="btn btn-outline btn-primary">Cancelar</button>
                </div>
            </div>
                                    </form>
                                </div><div class="form-group">  
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
{!! Form::close() !!}
@stop