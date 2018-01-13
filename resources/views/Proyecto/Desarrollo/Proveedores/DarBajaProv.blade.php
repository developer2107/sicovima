@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Provedores Inactivos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Proveedores</a>
            </li>
            <li class="active">
                <strong>Proveedores Inactivos</strong>
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
                        <h5>Lista de Proveedores</h5>
                    </div>
                    <div class="ibox-content">

                        <div class="table-responsive">
                    <table class="table table-striped table-bordered dataTables-example " >
                        <thead>
                        <tr>
                            <th>Nombre</th>
                         
                            <th>Tipo de Mercadería</th>

                            <th>Teléfono</th>

                            <th>Opción</th>
                        </tr>
                        </thead>
                        <tbody>     
                        @foreach($proveedor as $prov)
                            <tr>
                                <td align="left"><font size="4" >{{$prov-> nombre_Prov}}</font></td>
                                <?php
                                  $telefonoP = SICOVIMA\proveedor::numeroTelefono($prov->id);
                                ?>
                                <td align="rihgt"><font size="4" >{{$telefonoP-> numero_TelefonoProv}}</font></td>
                                <td align="left"><font size="4" >{{$prov-> tipoMercaderia_Prov}}</font></td>
                                <td align="center">
                                  <a href="/github/sicovima/public/darAltaProv/{{$prov->id}}" class="btn btn-primary btn-rounded">Dar de Alta</a>
                                </td>
                             </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>

                            <th>Tipo de Mercadería</th>
     
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