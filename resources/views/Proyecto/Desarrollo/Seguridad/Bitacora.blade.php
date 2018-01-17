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
      <div class="ibox-title responsive">
        <h5>Lista de movimientos efectuados en el sistema</h5>
        <div class="input-group bootstrap-touchspin">
              &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
              <a type="button" href="ReporteBitacoras/1" target="_blank" class="btn btn-default responsive">Generar Reporte</a>
            </div>
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
            </tr>
            </tfoot>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop