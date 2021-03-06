@extends('layouts.MenuAdministrador')

@section('content')

  <div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-6">
      <h2>Inventario de Productos Terminados</h2>
      <ol class="breadcrumb">
        <li>
          <br>
          <a href={!! asset('ProductosTerminados') !!}>Inventario</a>
        </li>
          <li class="active">
          <strong>Productos Terminados</strong>
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
                <h5>Listado de Productos Terminados</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <table id="example" class="table table-striped table-bordered display" cellspacing="100" width="100%">
                      <thead>
                        <tr>
                          <th align="left"><font size="3" >Tipo</font></th>
                          <th align="left"><font size="3" >Estilo</font></th>
                          <th align="left"><font size="3" >Precio</font></th>
                          <th align="left"><font size="3" >Talla</font></th>
                          <th align="left"><font size="3" >Existencias</font></th>
                          <th align="left"><font size="3" >Estado</font></th>
                          <th align="left"><font size="3" >Opciones</font></th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($producto as $prod)
                        <?php $cadenap='agregarMotivoProd('.$prod->id.');'; ?>
                        <?php
                          $invv = SICOVIMA\inventarioProductoTerminado::where('id_Producto',$prod->id)->get()->last();
                          if (count($invv)!=0) {
                              
                          ?>
                        <tr>
                          <td align="left"><font size="3" >{{$prod->tipo_Prod}}</font></td>
                          <td align="left"><font size="3" >{{$prod->estilo_Prod}}</font></td>
                          <td align="left"><font size="3" ><i class="fa fa-usd"></i>  {{$prod->precio_Prod}}</font></td>
                          <td align="left"><font size="3" >{{$prod->talla_Prod}}</font></td>
                          <td align="left" style = "width:10%"><font size="4" >{{$invv->nuevaExistencia_IPT}}</font></td>
                          <td align="left" style = "width:5%">
                            <?php if ($prod->estado2_Prod==1): ?>
                            <font size="4" >Dañado</font>
                            <?php else: ?>
                            <font size="4" >Bien</font></td> 
                            <?php endif ?>
                          <td style = "width:12%">
                            <a href="VerInventarioPT/{{$prod->id}}" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a>
                            <?php if ($prod->estado2_Prod==0): ?>
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
                <h4 class="modal-title">¿Producto Defectuoso?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Descuento</label>
                    <div class="col-lg-3 input-group m-b">
                      <span class="input-group-addon">$</span>
                      {!! Form::number('descuento',null,['class'=>'touchspin2 form-control','step'=>'.01','id'=>'descuento'])!!}
                    </div>
                  </div>
                </div>
                <br>
                <div class="row">
                  <div class="col-md-2">
                  </div>
                  <div class="form-group">
                    <label class="col-lg-3 control-label">Descripcion</label>
                    <div class="col-lg-3 input-group m-b">
                      {!! Form::textarea('motivoProd',null,['class' => 'note-codable','size' => '34x5','id'=>'motivoProd']) !!}
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
