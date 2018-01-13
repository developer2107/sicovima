<?php use SICOVIMA\departamento;
 ?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($proveedor,['route'=>['RegistroProveedor.update',$proveedor->id], 'method'=>'PUT']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Modificar Proveedor</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Proveedores</a>
            </li>
            <li class="active">
                <strong>Modificar Proveedor</strong>
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
                                    <h5>Proveedor</h5>
                                    
                                </div>
                                <div class="ibox-content">
                        <form class="form-horizontal">
                        <br>
                        <div class="row">
                            <div class="form-group">
                              <label class="col-lg-3 control-label">Nombre </label>
                              <div class="col-lg-9">
                                {!! Form::text('nombre_Prov', null,['id' => 'nombre_Prov','class' =>'form-control']) !!}
                              </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-lg-3 control-label">NIT</label>
                            <div class="col-md-8">
                              <div class="input-group">
                                {!! Form::text('NIT_Prov',null,['id' => 'NIT_Prov','class' =>'form-control','data-mask'=>'9999-999999-999-9']) !!}
                              </div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <label class="col-lg-3 control-label">Tipo de Mercadería</label>
                            <div class="col-md-8">
                              <div class="input-group">
                                {!! Form::select('tipoMercaderia_Prov',\SICOVIMA\materiaPrima::arrayTipoMercaderia(),'',['placeholder'=>'Seleccionar tipo de materia prima','id' => 'tipoMercaderia_Prov','class'=>'chosen-select','style'=>'width:300px']) !!}
                              </div>
                            </div>
                        </div>
                        <!-- <div class="col-lg-4">
                          <input type="text" class="form-control" id="otroMercaderia" style="Display:none" name="otroMer" >
                        </div> -->
                        <br>
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

                          <div class="row">
                              <div class="form-group">
                                <label class="col-lg-3 control-label">Dirección </label>
                              <div class="col-lg-9">
                                {!! Form::text('direccion_Prov',null,['id' => 'direccion_Prov','class' =>'form-control']) !!}
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
                                  
                                  </select>
                                </div>
                              </div>
                          </div>
                          </div>
                          </form>
                        </div>
                        <br><br>
                        <div class="col-sm-5">
                            {!! Form::submit('Modificar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        </div>
                        <div class="col-sm-7">
                            <a href="" class="btn btn-outline btn-primary dim" type="button">Cancelar</a>
                        </div>
                        <br><br>
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
</div>
{!! Form::close() !!}                             
@stop