@extends('layouts.MenuAdministrador')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Lista de Pedidos a Entregar</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Pedidos</a>
            </li>
            <li class="active">
                <strong>Entregar</strong>
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
                        <h5>Lista de pedidos disponibles para ser entregados</h5>
                        
                    </div>

                    <div class="ibox-content">
                        <div class="table-responsive">
                            <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">                                   
                                <table class="table table-striped table-bordered table-hover dataTables-example dataTable" id="DataTables_Table_0" aria-describedby="DataTables_Table_0_info" role="grid">
                                    <thead>
                                        <tr role="row">
                                            <th class="sorting_asc" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-sort="ascending" aria-label="Rendering engine: activate to sort column descending" style="width: 171px;">Cliente</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="Browser: activate to sort column ascending" style="width: 216px;">Fecha</th>
                                            <th class="sorting" tabindex="0" aria-controls="DataTables_Table_0" rowspan="1" colspan="1" aria-label="CSS grade: activate to sort column ascending" style="width: 110px;">Acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>                  
                                        <tr class="gradeA odd" role="row">
                                            <td class="sorting_1">Brenda Guillen Maradiaga</td>
                                            <td>15/02/17</td>
                                            <td class="center">
                                                <a href="EntregarPedido" class="btn btn-primary btn-rounded" href="#">Entregar</a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Juan Antonio Bautista Perez</td>
                                            <td>15/02/2016</td>
                                            <td class="center">
                                                <a href="EntregarPedido" class="btn btn-primary btn-rounded" href="#">Entregar</a>
                                            </td>
                                        </tr>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th rowspan="1" colspan="1">Cliente</th>
                                            <th rowspan="1" colspan="1">Fecha</th>
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