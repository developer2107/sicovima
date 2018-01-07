@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Pedidos</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
            </li>
            <li class="active">
                <strong>Mostrar Lista</strong>
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
                        <h5>Lista de Pedidos</h5>
                        
                    </div>

                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">                                   
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 171px;">Cliente</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 216px;">Fecha</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Platform(s): activate to sort column ascending" style="width: 197px;">Estado</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>                  
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.0</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">
                                                <a href="VerPedido" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i>
                                                </a>
                                                <a href="ModificarPedido" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Gecko</td>
                                            <td>Firefox 1.5</td>
                                            <td>Win 98+ / OSX.2+</td>
                                            <td class="center">
                                                <a href="VerPedido" class="btn btn-primary btn-circle" type="button"><i class="fa fa-eye"></i>
                                                </a>
                                                <a href="ModificarPedido" class="btn btn-success btn-circle" type="button"><i class="fa fa-pencil-square-o"></i>
                                                </a>
                                                <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Cliente</th>
                                            <th rowspan="1" colspan="1">Fecha</th>
                                            <th rowspan="1" colspan="1">Estado</th>
                                            <th rowspan="1" colspan="1">Acciones</th>
                                        </tr>
                                    </tfoot>
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