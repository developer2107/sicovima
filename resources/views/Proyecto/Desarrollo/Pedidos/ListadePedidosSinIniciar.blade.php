@extends('layouts.MenuAdministrador')
@section('content')
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Pedidos sin Iniciar</h2>

        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
            </li>
            <li class="active">
                <strong>Iniciar</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
    </div>
</div>
<br>
<br>
<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lista de Pedidos disponibles para ser producidos</h5>
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
                    <br>

                    <div class="content">
      <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                              <th align="left">ID</th>
                              <th align="left">Nombre del Cliente</th>
                              <th align="left">Producto</th>
                              <th align="left">Fecha</th>
                              <th align="left">Accion</th>

                          </tr>
                      </thead>
                        <tbody>

                          @foreach($detallePedido as $det)
                              <tr>
                                <?php   $dato=explode("-",(String)$det->pedido-> fechaEntregar_Ped);
                                $fecha =$dato[2]."/".$dato[1]."/".$dato[0];?>
                                  <td align="left"><font size="4" >{{$det->id}}</font></td>
                                  <td align="left"><font size="4" >{{$det->pedido->cliente->nombre_Cli}}</font></td>
                                  <td align="left"><font size="4" ></font>{{$det->producto->tipo_Prod}}  {{$det->producto->descripcion_Prod}}</td>
                                  <td align="rihgt"><font size="4" ></font>{{$fecha}}</td>
                                  <td align="center">
                                <a class="btn btn-primary btn-rounded" href="{{route('Pedidos.edit',$det->id)}}" value="Iniciar">Iniciar</a>
                                  </tr>
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
@stop
