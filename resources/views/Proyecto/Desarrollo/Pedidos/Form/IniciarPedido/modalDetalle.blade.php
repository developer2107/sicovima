<div class="modal inmodal" id="myModal7" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Detalles</h4>
                <small></small>
            </div>


            <div class="modal-body">

                    <div class="row">
                        <div class="col-md-12">
                            <table class="table table-bordered">
                        <thead>
                        <tr>
                            <th>Cantidad</th>
                            <th>Talla</th>
                            <th>Categoria</th>
                            <th>Color</th>
                            <th>Descripcion</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>5</td>
                            <td>S</td>
                            <td>Hombre</td>
                            <td>Azul</td>
                            <td>Acampanado</td>
                            <td>
                                <a class="btn btn-success btn-circle" type="button" data-toggle="modal" data-target="#myModal8"><i class="fa fa-pencil-square-o"></i>
                                </a>
                            </td>
                        </tr>

                        </tbody>
                    </table>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>

<div class="modal inmodal fade" id="myModalTabla" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span>
                </button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cual desea Agregar?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Materia Prima</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <table cellspacing="0" width="100%" class="table table-bordered" id="tablaPedidoIniciar">
                                        <thead>
                                          <tr>
                                            <th>ID</th>
                                            <th>Materia Prima</th>
                                            <th>Existencias</th>
                                            <th>Acciones</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                          @foreach($inventarioMateriaPrima as $inventarioMateriaPrima)
                                          {{-- @foreach($detallePedido as $detallePedido) --}}
                                          @if ($inventarioMateriaPrima->tipoMovimiento_IMP == 1)
                                            @if ($inventarioMateriaPrima->existencias_IMP >= 1)


                                        <tr>
                                          <td>{{$inventarioMateriaPrima->materiaPrima->id}}</td>
                                          <td>{{$inventarioMateriaPrima->materiaPrima->nombre_MP}}</td>
                                            <td>{{$inventarioMateriaPrima->existencias_IMP}}</td>
                                            <td>
                                              <input type="hidden" name="id" value='{{$inventarioMateriaPrima->materiaPrima->id}}'/>
                                              <input type="hidden" name="materiaPrima" value='{{$inventarioMateriaPrima->materiaPrima->nombre_MP}}'/>
                                              <input type="hidden" name="existencia" value='{{$inventarioMateriaPrima->existencias_IMP}}'/>
                                              <input type="hidden" name="precio" value='{{$inventarioMateriaPrima->materiaPrima->precio_MP}}'/>
                                              <input type="hidden" name="cantidad_IMP" value='{{$inventarioMateriaPrima->cantidad_IMP}}'/>
                                              {{-- <input type="hidden" name="id" value='{{$detallePedido->producto->id}}'/>
                                              <input type="hidden" name="materiaPrima" value='{{$inventarioMateriaPrima->materiaPrima->nombre_MP}}'/>
                                              <input type="hidden" name="existencia" value='{{$detallePedido->cantidad_DPed}}'/>
                                              <input type="hidden" name="subtotal" value='{{$detallePedido->subtotal_DPed}}'/>
                                              <input type="hidden" name="prueba" value="100"/> --}}
                                              <a class="btn btn-info btn-circle" type="button" id="AddCant" data-dismiss="modal" data-toggle="modal" data-target="#myModal77">
                                              <i class="fa fa-check"></i>
                                              </a>
                                            </td>
                                        </tr>
                                      {{-- @endforeach --}}
                                      @endif
                                      @endif
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
        <div class="modal-footer">
            <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
        </div>
    </div>
</div>


<div class="modal inmodal" id="myModal77" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
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
