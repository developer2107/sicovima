<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Detalles de Pedido</h5>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered" id="tablaDetallePedido">
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
                          <?php   $dato=explode("-",(String)$detallePedido->pedido->fecha_Ped);
                          $fecha =$dato[2]."/".$dato[1]."/".$dato[0];?>

                            <td>{{$detallePedido->cantidad_DPed}}</td>
                            <td>{{$detallePedido->producto->tipo_Prod}}</td>
                            <td>{{$detallePedido->producto->tipo_Prod}}</td>
                            <td>{{$fecha}}</td>
                            <td>
                                <input  type='hidden' name='id' value={{ $detallePedido ->id}}/>
                                <input  type='hidden' name='cantidad' value='{{ $detallePedido->cantidad_DPed }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido->producto->tipo_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido->producto->talla_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido->producto->estilo_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido->producto->color_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido->producto->descripcion_Prod }}'/>
                                <input  type='hidden' name='fecha' value={{ $fecha }}/>

                                <a class="btn btn-primary btn-circle" id="AddCant" type="button" data-toggle="modal" data-target="#myModal7"><i class="fa fa-eye"></i>
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
