@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Clientes Inactivos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Clientes</a>
            </li>
            <li class="active">
                <strong>Clientes Inactivos</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>Lista de Clientes</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered dataTables-example " >
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
                        <tfoot>
                        <tr>
                            <th>Nombre</th>

                            <th>Tipo de Cliente</th>
     
                            <th>Teléfono</th>

                           <th>Opción</th>
                        </tr>
                        </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>

   @stop