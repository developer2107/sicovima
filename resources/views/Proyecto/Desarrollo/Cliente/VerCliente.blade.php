@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($cliente,['route'=>['RegistroCliente.update',$cliente->id], 'method'=>'PUT','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Ver Cliente</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Clientes</a>
            </li>
            <li class="active">
                <strong>Ver Cliente</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">

    </div>
</div>

<br>
<div id="contenido">

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Cliente</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Nombre</label>
                                <div class="col-md-8">
                                <!-- <div class="input-group"> -->
                                   {!! Form::text('nombre_Cli',$cliente->nombre_Cli,['class'=>'form-control','id'=>'nombre_Cli','readonly'=>'readonly']) !!} 
                                <!-- </div> -->
                                </div>
                            </div>
                            <br><?php  if ($cliente->tipo_Cli==0): ?>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Tipo de Cliente</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('tipo_Cli',"Juridico",['class'=>'form-control','id'=>'tipo_Cli','readonly'=>'readonly']) !!} 
                                </div>
                                </div>
                            </div>
                            <?php else: ?>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Tipo de Cliente</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('tipo_Cli',"Natural",['class'=>'form-control','id'=>'tipo_Cli','readonly'=>'readonly']) !!} 
                                </div>
                                </div>
                            </div>
                            <?php endif ?>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <?php
                                $dui = SICOVIMA\Http\Controllers\ClientesController::dui($cliente->id_Cliente);
                                if ($dui == "false") {
                                    $dui = "";
                                }else{
                                    $dui = $dui->DUI_CN;
                                }
                              ?>
                              <label class="col-lg-2 control-label">DUI</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('DUI_CN',$dui,['class'=>'form-control','id'=>'DUI_CN','readonly'=>'readonly']) !!} 
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">NIT</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('NIT_CJ',null,['class'=>'form-control','id'=>'NIT_CJ']) !!} 
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Nombre Responsable</label>
                                <div class="col-md-8">
                                <!-- <div class="input-group"> -->
                                   {!! Form::text('nombreResponsable_CJ',null,['class'=>'form-control','id'=>'nombreResponsable_CJ']) !!} 
                                <!-- </div> -->
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Teléfono</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('numeroTelefono_Cli',null,['class'=>'form-control','id'=>'numeroTelefono_Cli']) !!} 
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Correo Electronico</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('correo_CorreoCli',null,['class'=>'form-control','id'=>'correo_CorreoCli']) !!} 
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Dirección</label>
                                <div class="col-md-8">
                                <!-- <div class="input-group"> -->
                                   {!! Form::text('direccion_Cli',$cliente->direccion_Cli,['class'=>'form-control','id'=>'direccion_Cli','readonly'=>'readonly']) !!} 
                                <!-- </div> -->
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Departamento</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('nombre_Depa',null,['class'=>'form-control','id'=>'nombre_Depa']) !!} 
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label">Municipio</label>
                                <div class="col-md-9">
                                <div class="input-group">
                                   {!! Form::text('nombre_Muni',null,['class'=>'form-control','id'=>'nombre_Muni']) !!} 
                                </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                              <div class="col-md-1">
                              </div>
                              <label class="col-lg-2 control-label"></label>
                                <div class="col-md-9">
                                <div class="input-group m-b">
                                    {!! Form::submit('Dar de Baja',['class'=>'btn btn-outline btn-primary dim']) !!} 
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
{!! Form::close() !!}
@stop
