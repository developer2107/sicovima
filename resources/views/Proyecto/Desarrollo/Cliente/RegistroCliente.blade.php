@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::open(['route'=>'RegistroCliente.store', 'method'=>'post','autocomplete'=>'off']) !!}

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Registro de Clientes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Clientes</a>
            </li>
            <li class="active">
                <strong>Registro de Clientes</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
    </div>
</div>
<br>
<div id="contenido">
    {{-- <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                      <img alt="image" class="img-responsive" src="img/mada.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <div class="col-lg-7">
        <div class="ibox-title">
            <h5></h5>
        </div>
        <div class="ibox-content">
        <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Nombre</label>
                    <div class="col-lg-9">
                        {!! Form::text('nombreCliente',null,['id' => 'nombreCliente','class'=>'form-control','style' => 'width:300px']) !!}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Tipo de Cliente</label>
                    <div class="col-lg-5">
                        <div class="radio radio-info radio-inline">
                            <input type="radio" id="natural" value="0" name="tipoCliente" checked="">
                            <label for="0"> Natural </label>
                        </div>
                        <div class="radio radio-inline">
                            <input type="radio" id="juridico" value="1" name="tipoCliente">
                            <label for="1"> Juridico </label>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div id="datosNatural" class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">DUI</label>
                    <div class="col-lg-5">
                        {!! Form::text('duiCliente',null,['id' => 'duiCliente','class'=>'form-control','data-mask'=>'99999999-9','style' => 'width:110px']) !!}
                    </div>
                </div>
            </div>
            <br>
            <div id="datosJuridico" style="display:none">
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">NIT </label>
                        <div class="col-lg-5">
                            {!! Form::text('nitCliente',null,['id' => 'nitCliente','class'=>'form-control','data-mask'=>'9999-999999-999-9','style' => 'width:155px']) !!}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">RNC </label>
                        <div class="col-lg-5">
                            {!! Form::text('rncCliente',null,['id' => 'rncCliente','class'=>'form-control','data-mask'=>'999-99999-9','style' => 'width:155px']) !!}
                        </div>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Nombre del Responsable </label>
                        <div class="col-lg-9">
                            {!! Form::text('nombreResponsable',null,['id' => 'nombreResponsable','class'=>'form-control','style' => 'width:300px']) !!}
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
                            {!! Form::text('tel[]',null,['id' => 'telCliente','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
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
                        {!! Form::email('cor[]',null,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
                    </div>
                    <div class="col-lg-1">
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
                        {!! Form::text('direccionCliente',null,['id' => 'direccionCliente','class'=>'form-control','style' => 'width:350px']) !!}
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Departamento </label>
                    <div class="col-lg-9">
                        <div class="input-group">
                           <select class = "form-control" name = "departamentos" id = "departamentos">
                                <option value="0">Seleccione un Departamento</option>
                                @foreach ($departamento as $v)
                                <option value={{$v->id}}>{{$v -> nombre_Depa}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="form-group">
                    <label class="col-lg-3 control-label">Municipio </label>
                    <div class="col-lg-9">
                        <div class="input-group">
                            <select class = "form-control" name = "municipios" id = "municipios">
                                <option value="0">Seleccione un Municipio</option>
                                @foreach ($municipio as $muni)
                                <option value={{$muni->id}}>{{$muni -> nombre_Muni}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
            </div>
            <br>
            <div class="row">
                <div class="col-lg-3">
                </div>
                <div class="col-lg-3">
                    {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary']) !!}
                </div>
                <div class="col-lg-3">
                    <button type="button" class="btn btn-outline btn-primary">Cancelar</button>
                </div>
            </div>
        </div>

    </div>
    <br>

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
</div>
<br>
<br>

<div class="modal inmodal" id="myModalCorreo" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Nuevo Correo Electronico</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label>Correo</label>
                            {!! Form::email('correoCliente2',null,['id' => 'correoCliente2','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary" name="agregarCorreo" id="agregarCorreo" type="button" value="Agregar"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>



<div class="modal inmodal" id="myModalTelefono" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Nuevo Telefono</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label>Telefono</label>
                            {!! Form::text('telCliente2',null,['id' => 'telCliente2','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <input class="btn btn-primary" name="agregarTelefono" id="agregarTelefono" type="button" value="Agregar"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

{!! Form::close() !!}
@stop
