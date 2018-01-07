@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Pedidos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
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
                        <h5>Lista de Pedidos</h5>

                    </div>

                    <div class="ibox-content">


                        <table id="example" class="display" cellspacing="0" width="100%">
                                      <thead>
                                          <tr>
                                                <th align="left">ID</th>
                                                <th align="left">Cliente</th>
                                                <th align="left">Fecha</th>
                                                <th align="left">Estado</th>
                                                <th align="left">Accion</th>

                                            </tr>
                                        </thead>
                                          <tbody>
                                            @foreach($estadoPedido as $est)
                                            @foreach($pedido as $ped)

                                            <tr>
                                                <td align="left"><font size="4" >{{$ped-> id}}</font></td>
                                                <td align="left"><font size="4" ></font>{{$ped->cliente->nombre_Cli}}</td>
                                                <td align="rihgt"><font size="4" ></font>{{$ped-> fecha_Ped}}</td>
                                                <td align="rihgt"><font size="4" ></font>{{$est-> tipo_EPed}}</td>
                                                <td align="center">
                                                  <a href="VerPedido" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i>
                                                  </a>
                                                  <a href="ModificarPedido" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i>
                                                  </a>
                                                  <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                                                  </a></tr>
                                                @endforeach
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
        </div>
    </div>
</div>



@stop
