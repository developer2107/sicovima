<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Detalles de Pedido</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered">
                        <thead>
                        <tr>
                          <th>cantidad</th>
                            <th>Producto</th>
                            <th>Tipo de Pedido</th>
                            <th>Fecha de Pedido</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                          @foreach($detallePedido as $detallePedido)
                        <tr>


                            <td>{{$detallePedido->cantidad_DPed}}</td>
                            <td>{{$detallePedido->producto->tipo_Prod}}</td>
                            <td>{{$detallePedido->producto->tipo_Prod}}</td>
                            <td>{{$detallePedido->pedido->fecha_Ped}}</td>
                            <td>
                                <a class="btn btn-primary btn-circle" type="button" data-toggle="modal" data-target="#myModal7"><i class="fa fa-eye"></i>
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
