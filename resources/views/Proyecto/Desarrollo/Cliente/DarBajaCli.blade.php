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
                         
                            <th>Tipo de Cliente</th>

                            <th>Teléfono</th>

                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>     
                        
                            <tr class="gradeC">
                                    <td>Jazmin Yancy Morales Romero</td>
                                    <td>Natural</td>
                                    <td class="center">7913-6714</td>
                                 <td>
                                  <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeC">
                               <td>Rafael Antonio Contreras Rodriguez</td>
                                    <td>Juridico</td>
                                    <td class="center">2223-6764</td>
                                 <td>
                                     <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Saul Lenin Flores Parada</td>
                                    <td>Natural</td>
                                    <td class="center">2223-6789</td>
                                 <td>
                                     <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Griselda maria Molina Mendez</td>
                                    <td>Juridico</td>
                                    <td class="center">2221-6342</td>
                                 <td>
                                     <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Rocío Evelin Miranda Guerrero</td>
                                    <td>Natural</td>
                                    <td class="center">7623-8974</td>
                                 <td>
                                    <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>

                            <th>Tipo de Cliente</th>
     
                            <th>Teléfono</th>

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