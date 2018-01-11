<?php use SICOVIMA\departamento;
 ?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::open(['class'=>'form-horizontal from-label-left input_mask','route'=>'RegistroProveedor.store', 'method'=>'post','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Registro de Proveedores</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Proveedores</a>
            </li>
            <li class="active">
                <strong>Registro de Proveedores</strong>
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
                                <div class="ibox-tools">
                                    <a class="collapse-link">
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
                                <form class="form-horizontal">
                                     <br>

                                          <div class="form-group"><label class="col-lg-3 control-label">Nombre </label>

                                        <div class="col-lg-9">
                                          {!! Form::text('nombre_Prov', null,['id' => 'nombre_Prov','class' =>'form-control']) !!}
                                        </div>
                                    </div>

                                    <div class="form-group"><label class="col-lg-3 control-label">NIT </label>

                                        <div class="col-lg-5">
                                          {!! Form::text('NIT_Prov',null,['id' => 'NIT_Prov','class' =>'form-control','data-mask'=>'9999-999999-999-9']) !!}
                                        </div>
                                    </div>
                                    <div class="form-group"><label class="col-lg-3 control-label">Tipo de Mercadería</label>

                                        <div class="col-lg-5">
                                            {!! Form::select('tipoMercaderia_Prov',['Seleccionar tipo de materia prima',\SICOVIMA\materiaPrima::arrayTipoMercaderia()],'',['id' => 'tipoMercaderia_Prov','class'=>'chosen-select','style'=>'width:300px']) !!}
                                        </div>
                                        <div class="col-lg-4">
                                          <input type="text" class="form-control" id="otroMercaderia" style="Display:none" name="otroMer" >
                                        </div>
                                    </div>

                                  <div id="idCorreos">
                                   <div class="row">
                                       <div class="form-group">
                                           <label class="col-lg-3 control-label">Correo Electronico</label>
                                           <div class="col-lg-7">
                                               {!! Form::email('cor[]',null,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
                                           </div>
                                           <div class="col-lg-1">
                                               <button class="btn btn-default  dim " type="button" id="AddCorreo" name="AddCorreo">
                                                   <i class="fa fa-plus"></i>
                                               </button>
                                           </div>
                                       </div>
                                   </div>
                                   </div>

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

                                        <div class="form-group">
                                        <label class="col-lg-3 control-label">Dirección </label>
                                        <div class="col-lg-9">
                                          {!! Form::text('direccion_Prov',null,['id' => 'direccion_Prov','class' =>'form-control']) !!}
                                        </div>
                                      </div>

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

                                 <br>

                                </form>

                                    </div><div class="form-group">
                        </div>
                        <div class="col-sm-5">
                        {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        </div>
                        <div class="col-sm-7">
                        {!! Form::submit('Cancelar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        </div>
                </div>
                    </div>


<div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src="img/Mada-Denim-Blanco4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

 <br><br>
{!! Form::close() !!}
@stop
