@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Compras</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Compras</a>
            </li>
            <li class="active">
                <strong>Mostrar Lista</strong>
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
                          <h5>Lista de Compras</h5>
                      </div>

                      <div class="ibox-content">
                          <div class="table-responsive">
                          <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                          <table id="example" class="display" cellspacing="0" width="100%">
                            <thead>
                                           <tr>
                                                 <th align="left">Proveedor</th>
                                                 <th align="left">Fecha</th>
                                                 <th align="left">Numero de Factura</th>
                                                 <th align="left">Total</th>
                                                 <th align="left">Accion</th>

                                          </tr>
                            </thead>
                            <tbody>
                                           @foreach($compra as $com)

                                           <tr>

                                               <td align="left"><font size="4" ></font>{{$com->proveedor->nombre_Prov}}</td>
                                               <?php   $dato=explode("-",(String)$com->fecha_Com);
                                                $fecha=$dato[2]."/".$dato[1]."/".$dato[0];?>
                                               <td align="rihgt"><font size="4" ></font>{{$fecha}}</td>
                                               <td align="rihgt"><font size="4" ></font>{{$com-> numFac_Com}}</td>
                                               <td align="rihgt"><font size="4" ></font><i class="fa fa-usd"></i> {{$com-> total_Com}}</td>
                                               <td align="center">
                                                 <a href="VerCompra" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i>
                                                 </a>
                                                 <a href="ModificarCompra/{{$com->id}}" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i>
                                                 </a>
                                                 <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                                                 </a>
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
</div>

@stop
