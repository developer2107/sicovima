@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Reportes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Ventas</a>
            </li>
            <li class="active">
                <strong>Reportes de Venta</strong>
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
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
        </div>
          <div class="col-md-2">
            <label class="font-bold"></label>
            <div class="input-group bootstrap-touchspin">
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
        <h5>Lista de reportes disponibles</h5>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table class="table table-bordered" >
            <thead>
              <tr>
                <th>Reporte</th>
                <th>Desde</th>
                <th>Hasta</th>
                <th>Ver</th>
                <th>Descargar</th>
              </tr>
            </thead>
            <tbody>
<tr>
  <td align="rihgt" style = "width:30%">
    <font size="4" >Ventas por tipo de cliente</font>
  </td>
  <td align="rihgt" style = "width:17%">
    <div class="form-group" id="data_2">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          {!! Form::text('fecha_i',null,['class' =>'form-control','readonly'=>'readonly']) !!}
      </div>
    </div>
  </td>
  <td align="rihgt" style = "width:17%">
    <div class="form-group" id="data_2">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          {!! Form::text('fecha_f',null,['class' =>'form-control','readonly'=>'readonly']) !!}
      </div>
    </div>
  </td>
  <td align="rihgt" style = "width:20%"><a href="crear_reporte_ventas/1" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
  <td align="rihgt" style = "width:20%"><a href="crear_reporte_ventas/2" class="btn btn-primary btn-circle" type="button"><i class="fa fa-download"></i></a></td>
</tr>
<tr>
  {!! Form::open(['route'=>'ReportVenta.store','method'=>'post','autocomplete'=>'off']) !!}
  <td align="rihgt" style = "width:30%"><font size="4" >Ventas por cliente</font></td>
  <td align="rihgt" style = "width:17%">
    <div class="form-group" id="data_2">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          {!! Form::text('fecha_ii',null,['class' =>'form-control','readonly'=>'readonly']) !!}
      </div>
    </div>
  </td>
  
  <td align="rihgt" style = "width:17%">
    <div class="form-group" id="data_2">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          {!! Form::text('fecha_ff',null,['class' =>'form-control','readonly'=>'readonly']) !!}
      </div>
    </div>
  </td>

  <td align="rihgt" style = "width:20%"><a href="crear_reporte_ventas/1" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
  <td align="rihgt" style = "width:20%"><a href="crear_reporte_ventas/2" class="btn btn-primary btn-circle" type="button"><i class="fa fa-download"></i></a></td>
  {!! Form::close() !!}
</tr>
<tr>
  {!! Form::open(['route'=>'ReportVenta.store','method'=>'post','autocomplete'=>'off']) !!}
  <td align="rihgt" style = "width:30%"><font size="4" >Ventas por fecha (Todas)</font></td>
  <td align="rihgt" style = "width:17%">
    <div class="form-group" id="data_2">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          {!! Form::text('fecha_i',null,['class' =>'form-control','readonly'=>'readonly']) !!}
      </div>
    </div>
  </td>
  
  <td align="rihgt" style = "width:17%">
    <div class="form-group" id="data_2">
      <div class="input-group date">
        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
          {!! Form::text('fecha_f',null,['class' =>'form-control','readonly'=>'readonly']) !!}
      </div>
    </div>
  </td>

  <td align="rihgt" style = "width:20%">
    {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}
  
  </td>
  <td align="rihgt" style = "width:20%"><a href="ReporteTodasVentas/2" class="btn btn-primary btn-circle" type="button"><i class="fa fa-download"></i></a></td>
  {!! Form::close() !!}
</tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@stop