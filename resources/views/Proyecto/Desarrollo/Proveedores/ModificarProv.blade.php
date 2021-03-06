<?php use SICOVIMA\departamento;
?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($proveedor,['route'=>['RegistroProveedor.update',$proveedor->id], 'method'=>'PUT']) !!}
<input type="hidden" id="modif" value="1">
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Modificar Proveedor</h2>
    <ol class="breadcrumb">
      <li>
        <a href="#">Proveedores</a>
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
                        <!-- <div class="col-lg-4">
                          <input type="text" class="form-control" id="otroMercaderia" style="Display:none" name="otroMer" >
                        </div> -->
                        <br>
                        <div id="idCorreos">
                          <?php $cuentac=0; ?>
                          @foreach ($proveedor->correoProveedor as $correo)
                          <div class="row" id='t{{$cuentac}}'>
                            <div class="form-group">
                              @if ($cuentac==0)
                              <label class="col-lg-3 control-label">Correo Electrónico</label>
                              <div class="col-lg-7">
                               {!! Form::email('cor[]',$correo->correo_CorreoProv,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
                             </div>
                             <div class="col-lg-1">
                               <button class="btn btn-default  dim " type="button" id="AddCorreo" name="AddCorreo">
                                 <i class="fa fa-plus"></i>
                               </button>
                             </div>
                             @else
                             <label class="col-lg-3 control-label"></label>
                             <div class="col-lg-7" >
                               {!! Form::email('cor[]',$correo->correo_CorreoProv,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}

                             </div>
                             <div class='col-lg-1'>
                               <button class='btn btn-default  dim' type='button' onclick='deleteCorreo({{$cuentac}})' >
                                 <i class='fa fa-minus'></i>
                               </button>
                             </div>
                             @endif
                           </div>
                         </div>
                         <?php $cuentac++; ?>
                         @endforeach
                         <input type="hidden" id="con" value="{{$cuentac}}">
                       </div>
                       <div id="idTelefonos">

                        <?php $cuenta=0; ?>
                        @foreach ($proveedor->telefonoProveedor as $telefono)
                        <div class="row" id='r{{$cuenta}}'>
                          <div class="form-group">
                            @if ($cuenta==0)
                            <label class="col-lg-3 control-label">Teléfono </label>
                            <div class="col-lg-4" >
                              {!! Form::text('tel[]',$telefono->numero_TelefonoProv,['id' => 'telCliente','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
                            </div>
                            <div class="col-lg-1">
                              <button class="btn btn-default  dim " type="button" id="AddTelefono" name="AddTelefono">
                                <i class="fa fa-plus"></i>
                              </button>
                            </div>
                            @else
                            <label class="col-lg-3 control-label"></label>
                            <div class="col-lg-4" >
                              {!! Form::text('tel[]',$telefono->numero_TelefonoProv,['id' => 'telCliente','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
                            </div>
                            <div class='col-lg-1'>
                              <button class='btn btn-default  dim' type='button' onclick='deleteTelefono({{$cuenta}})' >
                                <i class='fa fa-minus'></i>
                              </button>
                            </div>
                            @endif
                          </div>
                        </div>
                        <?php $cuenta++; ?>
                        @endforeach
                        <input type="hidden" id="cot" value="{{$cuenta}}">
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
                        <?php
                        $municipio1 = SICOVIMA\municipio::find($proveedor->id_Municipio);
                        $departamento1 = SICOVIMA\departamento::find($municipio1->id_Departamento);
                        ?>
                        <div class="form-group">
                          <label class="col-lg-3 control-label">Departamento </label>
                          <div class="col-lg-9">
                            <div class="input-group">
                              <select class = "form-control" name = "departamentos" id = "departamentos">
                               <option value="0">Seleccione un Departamento</option>
                               @foreach ($departamento as $v)
                               @if ($v->id==$departamento1->id)
                               <option value={{$v->id}} selected>{{$v -> nombre_Depa}}</option>
                               @else
                               <option value={{$v->id}}>{{$v -> nombre_Depa}}</option>
                               @endif

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
                              @if ($muni->id==$municipio1->id)
                              <option value={{$muni->id}} selected>{{$muni -> nombre_Muni}}</option>
                              @else
                              <option value={{$muni->id}}>{{$muni -> nombre_Muni}}</option>
                              @endif
                              @endforeach
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
                  <!-- <a href="" class="btn btn-outline btn-primary dim" type="button">Cancelar</a> -->
                </div>
                <br><br>
              </div>
            </div>

            <div class="col-lg-6">
              <div class="ibox float-e-margins">
                <div class="ibox-title">
                  <h5>Tipo de mercadería que distribuye el proveedor</h5>
                </div>
                <div class="ibox-content">
                  <table class="table table-striped">
                    <thead>
                      <tr>
                        <th align="left">Nombre</th>
                        <th align="left">Opción</th>

                      </tr>
                    </thead>
                    <tbody>
                      <?php $tipos= SICOVIMA\TipoMercaderia::get(); ?>
                      @foreach ($tipos as $tipo)
                      <?php $cuenta=SICOVIMA\proveedorTipoMercaderia::where('id_Proveedor',$proveedor->id)->where('id_tipoMercaderia',$tipo->id)->count() ?>
                      <tr>
                        <td><font size="3" >{{$tipo->nombre_TM}}</font></td>
                        <td>
                          <input type="hidden" name="cb{{$tipo->id}}" id="cb{{$tipo->id}}" value="{{$cuenta}}">
                          @if($cuenta==0)
                          <input type="checkbox"  style="width:25px; height:25px;" onclick="cambioCB({{$tipo->id}})">
                          @else
                          <input type="checkbox"  style="width:25px; height:25px;" onclick="cambioCB({{$tipo->id}})" checked>
                          @endif
                        </td>
                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        {!! Form::close() !!}
        @stop
        <script type="text/javascript">
          function cambioCB(id){
            valor=$('#cb'+id).val();
            if(valor=="1"){
              $('#cb'+id).val("0");
            }else{
              $('#cb'+id).val("1");
            }
          }
        </script>
