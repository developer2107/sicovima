@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Bitacora</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Seguridad</a>
            </li>
            <li class="active">
                <strong>Bitacora</strong>
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
        <h5></h5>
      </div>
      <div class="ibox-content">
      <div class="row">
        <div class="col-md-2">
          <div class="form-group" id="data_2">
            <label class="font-noraml">Desde</label>
            <div class="input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" class="form-control" value="08/01/2018">
            </div>
          </div>
        </div>
        <div class="col-md-2">
          <div class="form-group" id="data_2">
            <label class="font-noraml">Hasta</label>
            <div class="input-group date">
              <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
              <input type="text" class="form-control" value="08/01/2018">
            </div>
          </div>
        </div>
          <div class="col-md-2">
            <label class="font-bold"></label>
            <div class="input-group bootstrap-touchspin">
              <a href="" class="btn btn-outline btn-primary dim" data-toggle="modal" data-target="#modalProducto" type="button">Buscar</a>
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
        <h5>Lista de movimientos efectuados en el sistema</h5>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table id="example" class="table table-striped table-bordered display" cellspacing="100" width="100%"" >
            <thead>
              <tr>
                <th>Fecha</th>
                <th>Hora</th>
                <th>Acción</th>
                <th>Descripción</th>
                <th>Usuario</th>
                <th>Opción</th>
              </tr>
            </thead>
            <tbody>
<?php foreach($bitas as $bita): ?>
<tr>
  <?php   
  $dato = explode(" ",(String)$bita->created_at);
  $fecha = $dato[0];
  $hora = $dato[1];
  $datoFecha = explode("-",(String)$fecha);
  $fechaOrdenada = $datoFecha[2]."/".$datoFecha[1]."/".$datoFecha[0];
  $usu = SICOVIMA\User::find($bita->id_Usuario);


  ?>
  <td align="rihgt" style = "width:15%"><font size="4" ></font>{{$fechaOrdenada}}</td>
  <td align="rihgt" style = "width:10%"><font size="4" ></font>{{$hora}}</td>
  <td align="rihgt" style = "width:20%"><font size="4" ></font>{{$bita->accion_Bit}}</td>
  <td align="rihgt" style = "width:30%"><font size="4" ></font>{{$bita->comentario_Bit}}</td>
  <td align="rihgt" style = "width:20%"><font size="4" ></font>{{$usu->name}}</td>
  <td align="rihgt" style = "width:20%"><font size="4" ></font><a  class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
</tr>
<?php endforeach ?>
                    </tbody>
            <tfoot>
            <tr>
              <th>Fecha</th>
              <th>Hora</th>
              <th>Acción</th>
              <th>Descripción</th>
              <th>Usuario</th>
              <th>Opción</th>
            </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop