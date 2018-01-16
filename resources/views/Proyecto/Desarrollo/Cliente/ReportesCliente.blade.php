@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Reportes</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Clientes</a>
            </li>
            <li class="active">
                <strong>Reportes de Cliente</strong>
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
        <h5>Lista de reportes disponibles</h5>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table class="table table-bordered" >
            <thead>
              <tr>
                <th>Reporte</th>
                <th>Ver</th>
                <th>Descargar</th>
              </tr>
            </thead>
            <tbody>
<!-- <tr>
  <td align="rihgt" style = "width:30%"><font size="4" >Ventas por tipo de cliente</font></td>
  <td align="rihgt" style = "width:20%"><a href="crear_reporte_ventas/1" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
  <td align="rihgt" style = "width:20%"><a href="crear_reporte_ventas/2" class="btn btn-primary btn-circle" type="button"><i class="fa fa-download"></i></a></td>
</tr> -->
<tr>
  <td align="rihgt" style = "width:30%"><font size="4" >Clientes Activos</font></td>
  <td align="rihgt" style = "width:20%"><a href="clientesActR/1" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
  <td align="rihgt" style = "width:20%"><a href="clientesActR/2" class="btn btn-primary btn-circle" type="button"><i class="fa fa-download"></i></a></td>
</tr>
<tr>
  <td align="rihgt" style = "width:30%"><font size="4" >Clientes Inactivos</font></td>
  <td align="rihgt" style = "width:20%"><a href="clientesInaR/1" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
  <td align="rihgt" style = "width:20%"><a href="clientesInaR/2" class="btn btn-primary btn-circle" type="button"><i class="fa fa-download"></i></a></td>
</tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

@stop