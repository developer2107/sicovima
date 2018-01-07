@extends('layouts.MenuAdministrador')

@section('content')

  <div class="row wrapper border-bottom white-bg page-heading">
      <div class="col-sm-6">
          <h2>Control de Inventario Productos Terminados</h2>
          <ol class="breadcrumb">
              <li>
                  <br>
                  <a href="index.html">Inventario</a>
              </li>
              <li class="active">
                  <strong>Mostrar Lista de Productos Terminados</strong>
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
                            <table id="example" class="display" cellspacing="0" width="100%">
                              <thead>
                                     <tr>
                                        <th align="left">Nombre de Producto</th>
                                        <th align="left">Cantidad</th>
                                        <th align="left">Tipo de Producto</th>
                                        <th align="left">Estado</th>
                                        <th align="left">Accion</th>
                                    </tr>
                            </thead>
                            <tbody>
                                    @foreach($producto as $prod)

                                   <tr>
                                    <td align="left"><font size="4" >{{$prod-> tipo_Prod}}</font></td>
                                    {{-- <td align="left"><font size="4" >{{$prod-> cantidad_IPT}}</font></td> --}}
                                    <td align="center">
                                    <a href="VerProductosTerminados" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a>
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
