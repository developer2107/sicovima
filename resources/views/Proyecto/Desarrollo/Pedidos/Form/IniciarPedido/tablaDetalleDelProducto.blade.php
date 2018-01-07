<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles del Producto</h5>

            </div>

            <div class="ibox-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Materia Prima</th>
                        <th>Cantidad</th>
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
                            <a class="btn btn-success btn-circle" type="button" data-toggle="modal" data-target="#myModal9"><i class="fa fa-pencil-square-o"></i>
                            </a>
                            <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                            </a>
                        </td>
                    </tr>
                  @endforeach
                  @endforeach
                    </tbody>
                </table>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-1">
                     <label class="font-bold">Costo:</label>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('costo',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                        </div>
                    </div>
                </div>
                </div>
            </div>
         </div>
    </div>
</div>
