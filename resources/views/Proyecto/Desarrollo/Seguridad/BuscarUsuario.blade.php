@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Usuario</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Busqueda de Usuario</a>
            </li>
            <li class="active">
                <strong>Lista de Usuario</strong>
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
                        <h5>Lista de Usuarios del Sistema</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">

                      <table id="TablaSeguridad" class="display" cellspacing="0" width="100%">
                        <thead>
                        <tr>
                            <th>Nombre</th>
                            <th>Tipo de Usuario</th>
                            <th>Estado</th>
                            <th>Acciones</th>
                            {{-- <a class="btn btn-primary btn-circle fa fa-eye" href="VerUsuario"></a>
                            <a class="btn btn-success btn-circle fa fa-pencil-square-o" href="ModificarUsuario"></a> --}}
                        </tr>
                        </thead>
                        <tbody>
                          @foreach ($Usuario as $Usuario)
                            <tr>
                              <td>{{$Usuario->name}}</td>
                              <td>{{$Usuario->tipo}}</td>
                              <td>{{$Usuario->estado}}</td>
                              <td>
                                <a class="btn btn-primary btn-circle fa fa-eye" href="{{route('Usuario.show',$Usuario->id)}}"></a>
                                <?php
                                if ($Usuario->estado === 'Activo'){  ?>
                                <a class="btn btn-success btn-circle fa fa-pencil-square-o" href="Usuario/{{$Usuario->id}}"></a>
                              <?php
                                }
                                 ?>

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

   @stop
