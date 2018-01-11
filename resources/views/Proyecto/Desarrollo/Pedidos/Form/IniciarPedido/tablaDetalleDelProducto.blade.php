<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">

            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                  <div class="ibox-title">
                      <h5>Detalles del Producto</h5>

                  </div>
                    <br>
                <!-- <div class="ibox-content">
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
                                            <td class="sorting_1">Brenda Gillen Maradiaga</td>
                                            <td>15/02/17</td>
                                            <td class="center">
                                                <a class="btn btn-primary btn-rounded" href="IniciarPedido">Iniciar</a>
                                            </td>
                                        </tr>
                                        <tr class="gradeA even" role="row">
                                            <td class="sorting_1">Juan Antonio Bautista Perez</td>
                                            <td>15/02/2016</td>
                                            <td class="center">
                                                <a class="btn btn-primary btn-rounded" href="IniciarPedido">Iniciar</a>
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
                    </div>-->
                    <div class="content">
      <table id="example" class="display" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                          <th>ID</th>
                          <th>Materia Prima</th>
                          <th>Existencias</th>
                          <th>Subtotal</th>
                          <th>Acciones</th>

                          </tr>
                      </thead>
                      <tbody>
                        @foreach($inventarioMateriaPrima as $inventarioMateriaPrima)
                        @foreach($detallePedido as $detallePedido)
                      <tr>
                        <td>{{$detallePedido->producto->id}}</td>
                        <td>{{$inventarioMateriaPrima->materiaPrima->nombre_MP}}</td>
                          <td>{{$detallePedido->cantidad_DPed}}</td>
                          <td>{{$detallePedido->subtotal_DPed}}</td>
                          <td>
                            <a class="btn btn-info btn-circle" type="button" id="AddCant" data-dismiss="modal" data-toggle="modal" data-target="#myModal6">
                            <i class="fa fa-check"></i>
                            </a>
                          </td>
                      </tr>
                    @endforeach
                    @endforeach
                      </tbody>
                  </table>
                  </div>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal inmodal" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cuantos desea Agregar?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md-2">
                    </div>
                    <div class="col-md-3">
                        <div class="form-group"><label>Cantidad</label>
                            {!! Form::number('cantidadMCarPed',null,['class'=>'form-control','id'=>'cantidad']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <input class="btn btn-primary" name="agregarPedidoIniciado" id="agregarPedidoIniciado" type="button" value="Agregar" data-dismiss="modal"/>
                <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
            </div>
        </div>
    </div>
</div>
