@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($proveedor,['route'=>['RegistroProveedor.update',$proveedor->id], 'method'=>'PUT','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Ver Proveedores</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Proveedores</a>
            </li>
            <li class="active">
                <strong>Ver Proveedor</strong>
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
                            <h5>Proveedor</h5>
                        </div>
                      <div class="ibox-content">
                      <form class="form-horizontal">
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Nombre</label>
                          <div class="col-md-8">
                            <div class="input-group">
                             {!! Form::text('nombre_Prov',$proveedor->nombre_Prov,['class'=>'form-control','id'=>'nombre_Prov','readonly'=>'readonly']) !!} 
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">NIT</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              {!! Form::text('NIT_Prov',$proveedor->NIT_Prov,['class'=>'form-control','id'=>'nombre_NIT','readonly'=>'readonly']) !!} 
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Tipo de Mercadería</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              {!! Form::text('tipoMercaderia_Prov',$proveedor->tipoMercaderia_Prov,['class'=>'form-control','id'=>'tipoMercaderia_Prov','readonly'=>'readonly']) !!} 
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Teléfono</label>
                          <div class="col-md-8">
                           <?php 
                                 $telefonos=$cliente->telefonoCliente;
                            ?>
                                 <?php foreach ($telefonos as $telefono): ?>
                            <div class="input-group">
                              {!! Form::text('tipoMercaderia_Prov',null,['class'=>'form-control','id'=>'tipoMercaderia_Prov']) !!} 
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Correo Electronico</label>
                          <div class="col-md-8">
                            <div class="input-group">
                               {!! Form::text('tipoMercaderia_Prov',null,['class'=>'form-control','id'=>'tipoMercaderia_Prov']) !!} 
                            </div>
                          </div>
                      </div>                
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Dirección</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              {!! Form::text('direccion_Prov',$proveedor->direccion_Prov,['class'=>'form-control','id'=>'direccion_Prov','readonly'=>'readonly']) !!} 
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Departamento</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              <!-- {!! Form::text('tipoMercaderia_Prov',null,['class'=>'form-control','id'=>'tipoMercaderia_Prov']) !!} --> 
                            </div>
                          </div>
                      </div>
                      <br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-3 control-label">Municipio</label>
                          <div class="col-md-8">
                            <div class="input-group">
                              <!-- {!! Form::text('tipoMercaderia_Prov',null
                              ,['class'=>'form-control','id'=>'tipoMercaderia_Prov']) !!} -->
                            </div>
                          </div>
                      </div>
                      <br><br>
                      <div class="row">
                        <div class="col-md-1">
                        </div>
                          <label class="col-lg-4 control-label"></label>
                          <div class="col-md-4">
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
                                           <img alt="image" class="img-responsive" src="../img/Mada-Denim-Blanco4.jpg">
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
