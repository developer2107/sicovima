<?php use SICOVIMA\departamento;
?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($cliente,['route'=>['RegistroCliente.update',$cliente->id], 'method'=>'PUT']) !!}
<input type="hidden" id="modif" value="1">
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
         <h5>Cliente</h5>

       </div>
       <div class="ibox-content">
        <form class="form-horizontal">
          <br>
          <div class="row">
            <div class="form-group">
              <label class="col-lg-3 control-label">Nombre</label>
              <div class="col-md-8">
                <!-- <div class="input-group"> -->
                {!! Form::text('nombre_Cli',null,['id' => 'nombreCliente','class'=>'form-control','style' => 'width:300px']) !!}
                <!-- </div> -->
              </div>
            </div>
          </div>
          <br>
          <div class="row">
            <div class="form-group">
              <label class="col-lg-3 control-label">Tipo de Cliente</label>
              <div class="col-md-5">
                <?php if ($cliente->tipo_Cli): ?>
                  {!! Form::text('tipo_Cli',"Juridico",['id' => 'tipo_Cli','class'=>'form-control','style' => 'width:300px','readonly'=>'readonly']) !!}
                <?php else: ?>
                  {!! Form::text('tipo_Cli',"Natural",['id' => 'tipo_Cli','class'=>'form-control','style' => 'width:300px','readonly'=>'readonly']) !!}
                <?php endif ?>    
              </div>
            </div>

          </div>

          <br>
          <?php if ($cliente->tipo_Cli): ?>
            <div id="datosNatural" class="row" style="display:none">
            <?php else: ?>
              <div id="datosNatural" class="row">
              <?php endif ?>
                              <!-- <div class="col-md-1">
                            </div> -->
                            <label class="col-lg-3 control-label">DUI</label>
                            <?php
                            $duiC = SICOVIMA\clienteNatural::where('id_Cliente',$cliente->id)->get()->first();
                            if (count($duiC)>0) {
                              $aux = $duiC->DUI_CN;
                            } else {
                              $aux ="";
                            }
                            ?>
                            <div class="col-md-8">
                              <div class="input-group">
                                {!! Form::text('DUI_CN',$aux,['id' => 'duiCliente','class'=>'form-control','data-mask'=>'99999999-9','style' => 'width:110px']) !!}
                              </div>
                            </div>
                          </div>

                          <?php if ($cliente->tipo_Cli): ?>
                            <div id="datosJuridico" class="row" >
                            <?php else: ?>
                              <div id="datosJuridico" class="row" style="display:none">
                              <?php endif ?>
                              <!-- <div class="row"> -->
                              <div class="form-group">
                              <!-- <div class="col-md-1">
                            </div> -->
                            <label class="col-lg-3 control-label">NIT</label>
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
                            <div class="col-md-8">
                              <div class="input-group">
                                {!! Form::text('NIT_CJ',$aux,['id' => 'nitCliente','class'=>'form-control','data-mask'=>'9999-999999-999-9','style' => 'width:155px']) !!}
                              </div>
                            </div>
                          </div>
                          <!-- </div> -->
                          <br><br>
                          <!-- <div class="row"> -->
                          <div class="form-group">
                                        <!-- <div class="col-md-1">
                                      </div> -->
                                      <label class="col-lg-3 control-label">RNC </label>
                                      <div class="col-lg-8">
                                        {!! Form::text('RNC_CJ',$aux2,['id' => 'rncCliente','class'=>'form-control','data-mask'=>'999-99999-9','style' => 'width:155px']) !!}
                                      </div>
                                    </div>
                                    <!-- </div> -->
                                    <br><br>
                                    <!-- <div class="row"> -->
                                    <div class="form-group">
                                        <!-- <div class="col-md-1">
                                      </div> -->
                                      <label class="col-lg-3 control-label">Nombre Responsable </label>
                                      <div class="col-lg-8">
                                        {!! Form::text('nombreResponsable_CJ',$aux3,['id' => 'nombreResponsable','class'=>'form-control','style' => 'width:300px']) !!}
                                      </div>
                                    </div>
                                    <!-- </div> -->
                                  </div>
                                  <br>
                                  <div id="idCorreos">
                                    <?php $cuentac=0; ?>
                                    @foreach ($cliente->correoCliente as $correo)
                                    <div class="row" id='t{{$cuentac}}'>
                                      <div class="form-group">
                                        @if ($cuentac==0)
                                        <label class="col-lg-3 control-label">Correo Electrónico</label>
                                        <div class="col-lg-7">
                                         {!! Form::email('cor[]',$correo->correo_CorreoCli,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
                                       </div>
                                       <div class="col-lg-1">
                                         <button class="btn btn-default  dim " type="button" id="AddCorreo" name="AddCorreo">
                                           <i class="fa fa-plus"></i>
                                         </button>
                                       </div>
                                       @else
                                       <label class="col-lg-3 control-label"></label>
                                       <div class="col-lg-7" >
                                         {!! Form::email('cor[]',$correo->correo_CorreoCli,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}

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
                                  @foreach ($cliente->telefonoCliente as $telefono)
                                  <div class="row" id='r{{$cuenta}}'>
                                    <div class="form-group">
                                      @if ($cuenta==0)
                                      <label class="col-lg-3 control-label">Teléfono </label>
                                      <div class="col-lg-4" >
                                        {!! Form::text('tel[]',$telefono->numero_TelefonoCli,['id' => 'telCliente','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
                                      </div>
                                      <div class="col-lg-1">
                                        <button class="btn btn-default  dim " type="button" id="AddTelefono" name="AddTelefono">
                                          <i class="fa fa-plus"></i>
                                        </button>
                                      </div>
                                      @else
                                      <label class="col-lg-3 control-label"></label>
                                      <div class="col-lg-4" >
                                        {!! Form::text('tel[]',$telefono->numero_TelefonoCli,['id' => 'telCliente','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
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
                                  <label class="col-lg-3 control-label">Dirección</label>
                                    <div class="col-md-8">
                                      <!-- <div class="input-group"> -->
                                      {!! Form::text('direccion_Cli',null,['id' => 'nombreCliente','class'=>'form-control','style' => 'width:300px']) !!}
                                      <!-- </div> -->
                                    </div>
                                  </div>
                                </div>
                                <br>
                                <div class="row">
                                  <!-- <div class="col-md-1">
                                </div> -->
                                <?php
                                $municipio2 = SICOVIMA\municipio::find($cliente->id_Municipio);
                                $departamento2 = SICOVIMA\departamento::find($municipio2->id_Departamento);
                                ?>
                                <label class="col-lg-3 control-label">Departamento</label>
                                <div class="col-md-8">
                                  <!-- <div class="input-group"> -->
                                  <select class = "form-control" name = "departamentos" id = "departamentos">
                                   <option value="0">Seleccione un Departamento</option>
                                   @foreach ($departamento as $v)
                                   @if ($v->id==$departamento2->id)
                                   <option value={{$v->id}} selected>{{$v -> nombre_Depa}}</option>
                                   @else
                                   <option value={{$v->id}}>{{$v -> nombre_Depa}}</option>
                                   @endif

                                   @endforeach
                                 </select>
                                 <!-- </div> -->
                               </div>
                             </div>
                             <br>
                             <div class="row">
                                  <!-- <div class="col-md-1">
                                </div> -->
                                <label class="col-lg-3 control-label">Municipio</label>
                                <div class="col-md-8">
                                  <!-- <div class="input-group"> -->
                                  <select class = "form-control" name = "municipios" id = "municipios">
                                    <option value="0">Seleccione un Municipio</option>
                                    @foreach ($municipio as $muni)
                                    @if ($muni->id==$municipio2->id)
                                    <option value={{$muni->id}} selected>{{$muni -> nombre_Muni}}</option>
                                    @else
                                    <option value={{$muni->id}}>{{$muni -> nombre_Muni}}</option>
                                    @endif
                                    @endforeach
                                  </select>
                                  <!-- </div> -->
                                </div>
                              </div>
                              <br><br><br>
                              <div class="row">
                                <div class="col-lg-3">
                                </div>
                                <div class="col-lg-3">
                                  {!! Form::submit('Modificar',['class'=>'btn btn-outline btn-primary']) !!}
                                </div>
                                <div class="col-lg-3">
                                  <!-- <button type="button" class="btn btn-outline btn-primary">Cancelar</button> -->
                                </div>
                              </div>
                            </form>
                          </div>
                          <div class="form-group">  
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