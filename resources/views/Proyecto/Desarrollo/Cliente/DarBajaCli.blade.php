@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-6">
      <h2>Clientes Inactivos</h2>
      <ol class="breadcrumb">
        <li>
          <br>
          <a href={!! asset('DarBajaCli') !!}>Clientes</a>
        </li>
          <li class="active">
          <strong>Lista de Clientes Inactivos</strong>
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
                <h5>Listado de Clientes Inactivos</h5>
              </div>
              <div class="ibox-content">
                <div class="table-responsive">
                  <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                    <table id="example" class="table table-striped table-bordered display" cellspacing="100" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                         
                            <th>Teléfono</th>

                            <th>Tipo de Cliente</th>

                            <th>Opción</th>
                        </tr>
                        </thead>
                        <tbody>     
                        @foreach($cliente as $cli)
                      <tr>
                      <td align="left"><font size="4" >{{$cli-> nombre_Cli}}</font></td>
                      <?php
                        $telefonoC = SICOVIMA\cliente::numeroTelefonoCliente($cli->id);
                      ?>
                      <td align="rihgt"><font size="4" >{{$telefonoC-> numero_TelefonoCli}}</font></td>
                      <td align="left"><font size="4" >
                        @if ($cli-> tipo_Cli )
                          Juridico
                        @else
                          Natural
                        @endif
                      </font></td>
                      <td align="center">
                        <a href="/github/sicovima/public/darAltaCli/{{$cli->id}}" class="btn btn-primary btn-rounded">Dar de Alta</a>
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