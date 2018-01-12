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
                                    <th align="left">Cantidad</th>
                                    <th align="left">Tipo de mercaderia</th>
                                    <th align="left">Estado</th>
                                    <th align="left">Opciones</th>
                               </tr>
                              </thead>
                              <tbody>
                                @foreach($materiaPrima as $mat)
                            <tr>

                              <td align="left"><font size="4" >{{$mat-> nombre_MP." ".$mat-> color_MP}}</font></td>
                              <td align="left"><font size="4" >{{$mat-> obtenerCantidad($mat-> id)}}</font></td>
                              <?php if ($mat->estado_MP) {
                                $aux = "Bueno";
                              } else {
                                $aux = "Defectuoso";
                              }
                               ?>
                              <td align="left"><font size="4" >{{$mat-> tipo_MP}}</font></td>
                              <td align="left"><font size="4" >{{$aux}}</font></td>
                              <td align="center">
                              <a href="VerInventarioMP/{{$mat->id}}" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></a>
                              <a href="ModificarMateriaPrima/{{$mat->id}}" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></a>
                            </td>
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
