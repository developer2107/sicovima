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
                    <table class="table table-striped table-bordered dataTables-example " >
                        <thead>
                        <tr>
                            <th>Nombre</th>
                         
                            <th>Tipo de Usuario</th>

                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>     
                        
                            <tr class="gradeC">
                                    <td>Benjamin Monterrosa Delgado</td>
                                    <td>Usuario</td>
                                 <td>
                                        <a class="btn btn-primary btn-circle fa fa-eye" href="VerUsuario"></a>
                                        <a class="btn btn-success btn-circle fa fa-pencil-square-o" href="ModificarUsuario"></a>
                                </td> 
                            </tr>
                            <tr class="gradeC">
                               <td>Grecia Maria López Ayala</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Zuleyma Daniela Perez López</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Carlos David Moz Martines</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Cristian Alberto Nuñez Morales</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Dinora Esmeralda Abarca Maradiaga</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Lilibeth Lorena Maravilla Angel</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Jaime Osmany Rivas Castillo</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Maria Edy Angeles Rosas</td>
                                    <td>Usuario</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>José Vidal Carrillo Martines</td>
                                    <td>Adminsitrador</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Vilma Patricia Ramirez Angel</td>
                                    <td>Adminsitrador</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                            <tr class="gradeU">
                               <td>Kevin Adonay Elias Rivas</td>
                                    <td>Adminsitrador</td>
                                 <td>
                                      <button class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i></button>
                                        <button class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i></button>
                                </td> 
                            </tr>
                        </tbody>
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