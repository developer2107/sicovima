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
                <strong>Reportes de Inventario Productos Terminados</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">  
    </div>
</div>
<br>
<div class="row">
  <div class="col-lg-2">
  </div>
  <div class="col-lg-8">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Lista de reportes disponibles</h5>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <table class="table table-bordered" >
            <thead align="center">
              <tr align="center">
                <th align="center">Reporte</th>
                <th align="center">Opción</th>
              </tr>
            </thead>
            <tbody>
              <tr>
  <td align="center" style = "width:30%"><font size="4" >Inventario</font></td>
  <td align="center" style = "width:10%"><a href="ReporteInventario/1" target="_blank" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
</tr>
<tr>
  <td align="center" style = "width:30%"><font size="4" >Productos En Buen Estado</font></td>
  <td align="center" style = "width:10%"><a href="ReportePB/1" target="_blank" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
</tr>
<tr>
  <td align="center" style = "width:30%"><font size="4" >Productos Dañados</font></td>
  <td align="center" style = "width:10%"><a href="ReportePD/1" target="_blank" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a></td>
</tr>
              </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>


@stop