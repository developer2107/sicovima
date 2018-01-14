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

                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>

                          <tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>

                            <th>Tipo de Usuario</th>


                           <th>Acciones</th>
                        </tr>
                        </tfoot>
                    </table>
                        </div>

                    </div>
                </div>
            </div>
            </div>

   @stop
