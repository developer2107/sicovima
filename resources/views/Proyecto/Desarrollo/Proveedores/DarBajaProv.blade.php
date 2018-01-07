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

                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>     
                        
                            <tr class="gradeC">
                                    <td>Industrias Cell S.A. de C.V. </td>
                                    <td>Ziperes</td>
                                    <td class="center">2326-5642</td>
                                 <td>
                                  <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeC">
                               <td>Industrias El Hilar S.A. de C.V. </td>
                                    <td>Lona</td>
                                    <td class="center">7392-5364</td>
                                 <td>
                                  <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Industrias El Portal S.A. de C.V. </td>
                                    <td>Botones</td>
                                    <td class="center">2323-7523</td>
                                 <td>
                                  <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Industrias Fraisa S.A. de C.V. </td>
                                    <td>Remaches</td>
                                    <td class="center">2221-5428</td>
                                 <td>
                                <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Industrias Luisana S.A. de C.V.</td>
                                    <td>Tela Lino</td>
                                    <td class="center">7918-4215</td>
                                 <td>
                                <a class="btn btn-primary btn-rounded" href="#">Dar de Alta</a> 
                                </td> 
                            </tr>
                           
                        </tbody>
                        <tfoot>
                        <tr>
                            <th>Nombre</th>

                            <th>Tipo de Mercadería</th>
     
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