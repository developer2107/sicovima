@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-6">
    <h2>Control de Inventario Materia Prima</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Inventario</a>
      </li>
      <li class="active">
        <strong>Mostrar Lista de Materia Prima</strong>
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
              <h5>Listado de Materia Prima</h5>
            </div>

            <div class="ibox-content">
              <div class="table-responsive">
                <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                  <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                      <tr>
                        <th align="left">Nombre de Materia Prima</th>
                        <th align="left">Existencias</th>
                        <th align="left">Tipo de mercaderia</th>
                        <th align="left">Opciones</th>
                      </tr>
                    </thead>
                    <tbody>
                      @foreach($materiaPrima as $mat)
                      <?php $cadenap='agregarMotivoProd('.$mat->id.');'; ?>
                      <?php
                      $inv = SICOVIMA\inventarioMateriaPrima::where('id_MateriaPrima',$mat->id)->get()->last();
                      if ($inv->nuevaExistencia_IMP!=0) {
                              # code...
                        ?>
                        <tr>
                          <td align="left"><font size="4" >{{$mat-> nombre_MP." ".$mat-> color_MP}}</font></td>
                          <td align="left"><font size="4" >{{$mat-> obtenerCantidad($mat-> id)}}</font></td>

                          <td align="left"><font size="4" >{{$mat-> tipoMercaderia->nombre_TM}}</font></td>
                          <td align="center">
                            <a href="VerInventarioMP/{{$mat->id}}" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a>
                            <a href="ModificarMateriaPrima/{{$mat->id}}" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></a>
                            <?php if ($mat->estado_MP==0): ?>
                            <a class="btn btn-danger btn-circle" data-toggle="modal" type="button" data-target="#myModalAnularp" onclick="{{$cadenap}}"><i class="fa fa-times"></i></a>
                            <?php else: ?>
                            <?php endif ?>          
                          </td>
                        </tr>
                        <?php } ?>
                        @endforeach
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

  <div class="modal inmodal" id="myModalAnularp" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content animated fadeIn">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">X</span><span class="sr-only">Close</span></button>
          <i class="fa fa-clipboard modal-icon"></i>
          <h4 class="modal-title">¿Materia Prima Defectuosa?</h4>
          <small></small>
        </div>
        <div class="modal-body">
          <br>
          <div class="row">
            <div class="col-md-2">
            </div>
            <div class="form-group">
              <label class="col-lg-3 control-label">Descripción</label>
              <div class="col-lg-3 input-group m-b">
                {!! Form::textarea('motivoMat',null,['class' => 'note-codable','size' => '34x5','id'=>'motivoMat']) !!}
              </div>
            </div>
          </div>
        </div>
        <div class="modal-footer">
          {!! Form::button('Agregar',['class'=>'btn btn-primary','id'=>'agregarMotivoEstProd','type'=>'button', 'value'=>'Agregarp','onclick'=>'agregarMotivoEstProd()','data-dismiss'=>'modal']) !!}
          <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
        </div>
      </div>
    </div>
  </div>

  @stop
