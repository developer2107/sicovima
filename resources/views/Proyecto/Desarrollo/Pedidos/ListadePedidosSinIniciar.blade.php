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

                    </div>
                    <br>

                    <div class="content">
      <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                              <th align="left">ID</th>
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
                              <td align="left"><font size="4" >{{$det ->pedido->cliente-> id}}</font></td>
                              <td align="left"><font size="4" ></font>{{$det->producto->tipo_Prod}}  {{$det->producto->descripcion_Prod}}</td>
                              <td align="rihgt"><font size="4" ></font>{{$fecha}}</td>
                              <td align="center">
                            <a class="btn btn-primary btn-rounded" href="IniciarPedido/{{$det->id}}">Iniciar</a>
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
<!--<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lista de Pedidos disponibles para ser producidos</h5>

                    </div>
<div class="ibox-content">
    <div class="table-responsive">
        <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
            <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">

                  <thead>
                      <tr role="row">
                            <th align="left">&nbsp;</th>
                            <th align="left">Codigo</th>
                            <th align="left">Nombre</th>
                            <th align="left">Unidad</th>
                            <th align="left">% Ganancia</th>
                            <th align="left">Costo</th>
                            <th align="left">Cantidad</th>
                            <th align="left">&nbsp;</th>
                        </tr>
                    </thead>
                      <tbody>
                        <tr class="gradeA odd" role="row">
                            <td style="cursor:pointer">
                            <button type="button">boton</button></td>
                            <td align="left">hola</font></td>
                            <td align="left">aqui</font></td>
                            <td align="left">jaja</font></td>
                            <td align="left">loco</font></td>
                            <td align="left">jajaja</font></td>
                              <td align="left">jajaja</font></td>
                              <button type="button"></button></td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                              <th align="left">&nbsp;</th>
                              <th align="left">Codigo</th>
                              <th align="left">Nombre</th>
                              <th align="left">Unidad</th>
                              <th align="left">% Ganancia</th>
                              <th align="left">Costo</th>
                              <th align="left">Cantidad</th>
                              <th align="left">&nbsp;</th>
                            </tr>
                        </tfoot>
                </table>
                </div>
            </div>
        </div>
      </div>
      </div>
  </div>
</div>-->
</div>
@stop
