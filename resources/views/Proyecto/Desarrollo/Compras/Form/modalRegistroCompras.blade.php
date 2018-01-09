<div class="modal inmodal" id="modalMateriaPrima" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title"></h4>
                {{-- <small>Registre el producto de su compra</small> --}}
            </div>

            <div class="modal-body">
              <div class="row">
                  <div class="col-lg-12">
      <div class="ibox float-e-margins">
          <div class="ibox-title">
              <h5>Materia Prima</h5>
          </div>
          <div class="ibox-content">
               <div class="row">
                  <div class="col-md-12">
                      <table class="table table-bordered" id="tablaMateriaPrima">
                          <thead>
                          <tr>
                              <th>Nombre </th>
                              <th>Tipo </th>
                              <th>Color</th>
                              <th>Precio</th>
                              <th>Unidad de Medida</th>
                              <th>Opciones</th>
                          </tr>
                          </thead>
                          <tbody>

                          @foreach ( $materiaPrimas as $materiaPrima )
                          <tr>
                              <td align="left" id="estilo"><font size="4" >{{$materiaPrima-> nombre_MP}}</font></td>
                              <td align="left"><font size="4" >{{$materiaPrima-> tipo_MP}}</font></td>
                              <td align="rihgt"><font size="4" >{{$materiaPrima-> color_MP}}</font></td>
                              <td align="rihgt"><font size="4" ><i class="fa fa-usd"></i> {{$materiaPrima-> precio_MP}}</font></td>
                              <td align="rihgt" ><font size="4" >{{$materiaPrima-> unidadMedida_MP}}</font></td>
                              <td align="center">
                                  <input type="hidden" value='{{$materiaPrima-> nombre_MP}}'>
                                  <input type="hidden" value='{{$materiaPrima-> color_MP}}'>
                                  <input type="hidden" value='{{$materiaPrima-> precio_MP}}'>
                                  <input type="hidden" value='{{$materiaPrima-> id}}'>
                                  <input type="hidden" name="prueba" value="100"/>
                                  <a class="btn btn-success btn-circle" type="button" id="AddCant" data-dismiss="modal" data-toggle="modal" data-target="#myModal6">
                                  <i class="fa fa-pencil-square-o"></i>
                                  </a>
                              </td>
                          </tr>
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
                <input type="button" class="btn btn-primary" name="agregarProducto" id="agregarProducto" value="Agregar" onclick="agregarProducto()"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
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
                <h4 class="modal-title">Ingrese Cantidad de Materia Prima</h4>
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
                <input class="btn btn-primary" name="agregarCompras" id="agregarCompras" type="button" value="Agregar" data-dismiss="modal"/>
                <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
            </div>
        </div>
    </div>
</div>
