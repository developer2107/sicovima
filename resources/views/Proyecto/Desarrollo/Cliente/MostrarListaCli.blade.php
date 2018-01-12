@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Lista de Clientes</h2>
    <ol class="breadcrumb">
      <li>
        <a href="index.html">Clientes</a>
      </li>
      <li class="active">
        <strong>Lista de Clientes</strong>
      </li>
    </ol>
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
                  <th align="left">Telefono</th>
                  <th align="left">Tipo de Cliente</th>
                  <th align="left">Opciones</th>
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
                        <a href="VerCliente/{{$cli->id}}" class="btn btn-primary btn-circle" type="button">
                          <i class="fa fa-eye"></i>
                        </a>
                        <a href="ModificarCli/{{$cli->id}}" class="btn btn-success btn-circle" type="button">
                          <i class="fa fa-pencil-square-o"></i>
                        </a>
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
@stop
