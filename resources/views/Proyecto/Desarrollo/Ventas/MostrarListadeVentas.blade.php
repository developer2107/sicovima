@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Ventas</h2>
        <ol class="breadcrumb">
            
            <li class="active">
                <strong>Ventas</strong>
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
      <div class="row">
        <div class="col-lg-12">
          <div class="ibox float-e-margins">
            <div class="ibox-title">
              <h5>Lista de Ventas</h5>
            </div>
            <div class="ibox-content">
              <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <table  class="table table-striped table-bordered dataTables-example display" cellspacing="100" width="100%">
                    <thead>
                      <tr>
                       <th align="left">Cliente</th>
                       <th align="left">Fecha</th>
                       <th align="left">Numero de Documento</th>
                       <th align="left">Total</th>
                       <th align="left">Estado</th>
                       <th align="left">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
<?php foreach($ventas as $ven): $cadena='agregarMotivo('.$ven->id.');'; ?>
<tr>
  <td align="left"><font size="4" ></font>{{$ven->cliente->nombre_Cli}}</td>
  <?php   
  $dato = explode("-",(String)$ven->fecha_Ven);
  $fecha = $dato[2]."/".$dato[1]."/".$dato[0];
  ?>
  <td align="rihgt" style = "width:15%"><font size="4" ></font>{{$fecha}}</td>
  <td align="rihgt" style = "width:20%"><font size="4" ></font>{{SICOVIMA\venta::numeroDocumento($ven->id)}}</td>
  <td align="rihgt" style = "width:10%"><font size="4" ></font><i class="fa fa-usd"></i>  {{$ven-> total_Ven}}</td>
  <td><?php if ($ven->estado_Ven!=2): ?>Normal<?php else: ?>Anulada<?php endif ?></td>
  <td style = "width:12%">
  <a href="VerVenta/{{$ven->id}}" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a>
  <?php if ($ven->estado_Ven!=2): ?>
  <a href="ModificarVenta/{{$ven->id}}" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></a>
  <a class="btn btn-danger btn-circle" data-toggle="modal" type="button" data-target="#myModalAnular" onclick="{{$cadena}}"><i class="fa fa-times"></i></a>
  <?php else: ?>
  <?php endif ?>
  </td>
</tr>
<?php endforeach ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div class="modal inmodal" id="myModalAnular" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cual es el motivo para anular esta venta?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label>Descripcion</label>
                            {!! Form::textarea('motivo',null,['class' => 'note-codable','size' => '34x5','id'=>'motivo']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
              {!! Form::button('Agregar',['class'=>'btn btn-primary','id'=>'agregarMotivoEst','type'=>'button', 'value'=>'Agregar','onclick'=>'agregarMotivoEst()','data-dismiss'=>'modal']) !!}
                <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@stop
