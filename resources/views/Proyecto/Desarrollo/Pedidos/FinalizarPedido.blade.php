<?php
use SICOVIMA\producto;

 ?>

@extends('layouts.MenuAdministrador')
@section('content')
{{-- {!! Form::open(['route'=>'FinalizarPedido.store', 'method'=>'post']) !!} --}}
{!! Form::open(['class'=>'form-horizontal','route'=>['Pedidos.update',$detallePedido_e->id], 'method'=>'PUT','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Finalizar Pedido - Verificar</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
            </li>
            <li class="active">
                <strong>Finalizar Pedido</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">

    </div>
</div>

<div id="contenido">
<br>


<div class="row">
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pedido</h5>
            </div>
            <div class="ibox-content">
            <br>

                    <div class="row">
                    	<div class="col-md-1">
                    	</div>
                        <label class="col-lg-2 control-label">Cliente</label>
                        <div class="col-md-3">
                            <div class="input-group">
                            	{!! Form::text('nombre_Cli',$detallePedido_e->pedido->cliente->nombre_Cli,['class'=>'form-control', 'name'=>'clientes_I','id'=>'clientes_I','disabled'=>'disabled','readonly'=>'readonly']) !!}
                            	<!-- Este es no editable -->
                            </div>
                        </div>
                    </div>

                    <div class="row">
                    <br>
                    <div class="col-md-1">
                   	</div>
                    <label class="col-lg-2 control-label">Responsable</label>
                        <div class="col-lg-8">
                            <div class="input-group">
                              <?php
                              if ($detallePedido_e->pedido->cliente->tipo_Cli === 'FALSE') {
                                # code...
                                ?>
                                {!! Form::text('nombreResponsable_I','',['class'=>'form-control','name'=>'Responsable_IN','disabled'=>'disabled','readonly'=>'readonly']) !!}
                              	<!-- Este es no editable -->
                                <?php
                              }else {
                                $Responsable=\SICOVIMA\clienteJuridico::where('id_Cliente', $detallePedido_e->pedido->cliente->id)->value('nombreResponsable_CJ');
                                // $nombre = \SICOVIMA\clienteJuridico::find($Responsable->id);

                                ?>
                                {!! Form::text('nombreResponsable_I',$Responsable,['class'=>'form-control','name'=>'Responsable_IJ','disabled'=>'disabled','readonly'=>'readonly']) !!}
                              	<!-- Este es no editable -->

                                 <?php
                                   }
                               ?>

                            </div>
                        </div>
                    </div>

                    <div class="row"  id="data_2">
                    <br>
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Fecha de Realizacion</label>
                        <div class="col-md-4">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                <?php   $dato = explode("-",(String)$detallePedido_e->pedido->fecha_Ped);
                                        $fecha = $dato[2]." / ".$dato[1]." / ".$dato[0];
                                ?>
                                {!! Form::text('fecha_Ped',$fecha ,['class'=>'form-control','name'=>'fecha_Realizacion','disabled'=>'disabled']) !!}
                                <!-- Este es no editable -->
                            </div>
                        </div>
                    </div>
                    <br>
            </div>
        </div>
    </div>



    <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src={{ asset('/img/Mada-Denim-Blanco4.jpg') }}>
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
                <h5>Detalles de Pedido</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="form-horizontal" id="motivos">

            </div>
            <div class="ibox-content">
                <table class="table table-bordered" id="tablaFinalizarPedidos">
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody >
                      <?php $cont=\SICOVIMA\detallePedido::all();
                      $cont1 = count($cont);
                      $i=1;

                      ?>
                      @foreach($cont as $detallePedido_e)
                    <tr>
                        <td>{{$i}}</td>
                        <td>{{$detallePedido_e->producto->tipo_Prod}}</td>
                        <td>{{$detallePedido_e->cantidad_DPed}}</td>
                        <td >
                          <input  type='hidden' name='id' value='{{ $detallePedido_e ->id}}'/>
                          <input  type='hidden' name='cantidad' value='{{ $detallePedido_e->cantidad_DPed }}'/>
                          <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->tipo_Prod }}'/>
                          <input  type='hidden' name='talla_Prod' value='{{ $detallePedido_e->producto->talla_Prod }}'/>
                          <input  type='hidden' name='estilo_prod' value='{{ $detallePedido_e->producto->estilo_Prod }}'/>
                          <input  type='hidden' name='color_Prod' value='{{ $detallePedido_e->producto->color_Prod }}'/>
                          <input  type='hidden' name='descripcion_Prod' value='{{ $detallePedido_e->producto->descripcion_Prod }}'/>
                          <input  type='hidden' name='fecha' value='{{ $detallePedido_e->pedido->fecha_Ped }}'/>
                            <a class="btn btn-primary btn-circle" id="AddCant" type="button" data-toggle="modal" data-target="#myModal7"><i class="fa fa-eye"></i>
                            </a>
                        </td>
                    </tr>
                    <?php $i++; ?>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de Pedido Defetuoso</h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                        <i class="fa fa-chevron-up"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ibox-content">
                <table class="table table-bordered" >
                    <thead>
                    <tr>
                        <th>#</th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody >

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<div class="row">
    <div class="ibox">
        <div class="ibox-content">
            <div class="row">
            <br>
                <div class="col-xs-4">
                </div>

                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        {!! Form::submit('Finalizar',['class'=>'btn btn-primary']) !!}
                    </div>
                </div>
              
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal" id="myModal7" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
  <div class="modal-dialog modal-lg">
      <div class="modal-content animated fadeIn">
          <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
              <i class="fa fa-clipboard modal-icon"></i>
              <h4 class="modal-title">Detalles</h4>
              <small></small>
          </div>


          <div class="modal-body">

                  <div class="row">
                      <div class="col-md-12">
                          <table class="table table-bordered" id="modalTablaFinalizar">
                      <thead>
                      <tr>
                          <th>Cantidad</th>
                          <th>Talla</th>
                          <th>Categoria</th>
                          <th>Color</th>
                          <th>Descripcion</th>
                          <th>Accion</th>
                      </tr>
                      </thead>
                      <tbody id="limpio">


                      </tbody>
                  </table>
                      </div>
                  </div>
          </div>

          <div class="modal-footer">
              <a type="button" class="btn btn-white" data-dismiss="modal" id="cerrarMT" >Cerrar</a>
          </div>
      </div>
  </div>
</div>
{!! Form::close() !!}
<div class="modal inmodal" id="myModal8" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Estado</h4>
                <small>Especifica el estado del producto terminado, unicamente cuando este se encuentre defectuoso</small>
            </div>


            <div class="modal-body">
                <div class="ibox-content">
                <form class="form-horizontal">
                    <br>
                    <div class="form-group"><label class="col-lg-3 control-label">Descripción</label>
                        <div class="col-lg-8">
                             <textarea class="note-codable" name="motivo" id="motivo" style="height: 100%; width: 100%" rows="3" cols="30"></textarea>
                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Cantidad</label>
                        <div class="col-lg-2">
                            {!! Form::number('cant_DPT',null,['class'=>'form-control', 'name'=>'cant_DPT', 'id'=>'cant_DPT']) !!}

                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-lg-3 control-label">Descuento por pieza</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('descuento_DPT',null,['class'=>'touchspin2 form-control','step'=>'any', 'name'=>'descuento_DPT', 'id'=>'descuento_DPT']) !!}
                            </div>
                        </div>
                    </div>
                    {{-- <input type="hidden" name="idDetallePedido_f" value="{{$}}"> --}}
                </form>
            </div>

            </div>

            <div class="modal-footer">

              {{-- <a class="btn btn-primary" type="button" id="AddCant" data-toggle="modal" data-target="#myModal8">Agregar</a> --}}
                {{-- <button type="button" class="btn btn-primary">Agregar</button> --}}
                <input class="btn btn-primary" name="agregarMotivo" id="agregarMotivo" type="button" value="Agregar" />
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

@stop
