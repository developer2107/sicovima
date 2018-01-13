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
                            <table class="table table-bordered" id="modalTablaInicio">
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
                        <tbody id="limpio">

                        </tbody>
                    </table>
                        </div>
                    </div>
            </div>

            <div class="modal-footer">
                <a type="button" class="btn btn-white" data-dismiss="modal" id="cerrarMT" >Cerrar</a>
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

<div class="modal inmodal" id="myModal8" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Materia Prima</h4>
                <small>Agregue la materia prima necesaria para su pedido</small>
            </div>


            <div class="modal-body">
                 <div class="ibox-content">
                <form class="form-horizontal">
                    <br>

                    <div class="form-group"><label class="col-lg-3 control-label">Materia Prima</label>

                        <div class="col-lg-9">

                            <div class="input-group">
                              {{-- AQUI --}}
                              <select name="tipo_MP" id="tipo_MP" onchange="ShowSelected();">
                              <option value="" disabled selected >Seleccione una Materia Prima:</option>
                              @foreach($inventarioMateriaPrima as $inventarioMateriaPrima)
                                  <option value='{{$inventarioMateriaPrima->id}}'>{{$inventarioMateriaPrima->materiaPrima->nombre_MP}}
                                  @endforeach

                            </select>
                            </div>

                        </div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Precio</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('precio_MP',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                                <!-- Este es no editable -->
                            </div>
                       </div>
                    </div>
                    <div class="form-group"><label class="col-lg-3 control-label">Cantidad</label>
                        <div class="col-lg-2">
                            {!! Form::number('cant_DCom',null,['class'=>'form-control']) !!}
                        </div>
                    </div>

                    <div class="form-group"><label class="col-lg-3 control-label">Subtotal</label>
                        <div class="col-lg-4">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('subTotal_DCom',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                            </div>
                       </div>
                    </div>
                </form>
            </div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-primary">Agregar</button>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
