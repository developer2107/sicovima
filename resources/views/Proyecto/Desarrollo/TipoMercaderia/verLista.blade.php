@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Lista de Tipo de Mercadería</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Tipo de Mercadería</a>
      </li>
      <li class="active">
        <strong>Lista de Tipo de Mercadería</strong>
      </li>
    </ol>
    <input class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#Modal" type="button" value="Agregar" onclick="limpiarTM()"/>
  </div>
  <div class="col-sm-8">
  </div>
</div>

<div class="row">
  <div class="col-lg-12">
    <div class="ibox float-e-margins">
      <div class="ibox-title">
        <h5>Lista de Clientes</h5>
      </div>
      <div class="ibox-content">
        <div class="table-responsive">
          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <table id="example" class="table table-bordered" cellspacing="0" width="100%" >
              <thead>
                <tr>
                  <th align="left">Nombre</th>
                  <th align="left">Estado</th>
                  <th align="left">Opciones</th>
                </tr>
              </thead>
              <tbody>
                <?php $contador=0; ?>
                @foreach($tipos as $tipo)
                  <tr>
                      <input type="hidden" id="i{{$contador}}" value="{{$tipo->id}}">
                      <td align="left"><font size="4" id="n{{$contador}}">{{$tipo->nombre_TM}}</font></td>
                      @if (!$tipo->estado_TM)
                        <?php $aux="Activar" ?>
                      @else
                        <?php $aux="Desactivar" ?>
                      @endif
                      <td align="left">
                        <a href="cambiarTM/{{$tipo->id}}" class='btn btn-info' type='button'>{{$aux}}</a>

                      </td>
                      <td align="center">
                        <a class="btn btn-success btn-circle" onclick="modificarTM({{$contador}})" data-dismiss="modal" data-toggle="modal" data-target="#Modal">
                          <i class="fa fa-pencil-square-o"></i>
                        </a>
                        <a href="EliminarTM/{{$tipo->id}}" class='btn btn-danger btn-circle' type='button'><i class='fa fa-times'></i></a>

                      </td>
                   </tr>
                   <?php $contador++; ?>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="modal inmodal" id="Modal" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
          {!! Form::open(['route'=>'TipoMercaderia.store', 'method'=>'post','autocomplete'=>'off']) !!}
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title" id="cambioT">Ingrese Tipo de Mercadería</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-8">
                        <div class="form-group"><label>Nombre</label>
                            {!! Form::text('nombre_TM',null,['class'=>'form-control','id'=>'nombre_TM']) !!}
                            <input type="hidden" name="idTipo" id="tipo" value="">
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
              {!! Form::submit('Registrar',['class'=>'btn btn-primary','id'=>'accion']) !!}
                <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
            </div>

            {!! Form::close() !!}
        </div>
    </div>
</div>
@stop
<script type="text/javascript">
    function modificarTM(indice){
      id=$('#i'+indice).val();
      nombre=$('#n'+indice).text();
      $('#tipo').val(id);
      $('#nombre_TM').val(nombre);
      $('#cambioT').text("Modificar Tipo de Mercadería");
      $('#accion').val("Modificar");
    }
    function limpiarTM(){
      $('#tipo').val("");
      $('#nombre_TM').val("");
      $('#cambioT').text("Ingrese Tipo de Mercadería");
      $('#accion').val("Registrar");
    }
</script>
