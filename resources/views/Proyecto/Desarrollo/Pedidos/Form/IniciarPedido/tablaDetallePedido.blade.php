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
                          <?php $cont=\SICOVIMA\detallePedido::all() ?>
                          @foreach($cont as $detallePedido_e)
                        <tr>
                          <?php   $dato=explode("-",(String)$detallePedido_e->pedido->fecha_Ped);
                          $fecha =$dato[2]."/".$dato[1]."/".$dato[0];?>

                            <td>{{$detallePedido_e->cantidad_DPed}}</td>
                            <td>{{$detallePedido_e->producto->tipo_Prod}}</td>
                            <td>{{$detallePedido_e->producto->tipo_Prod}}</td>
                            <td>{{$fecha}}</td>
                            <td>
                                <input  type='hidden' name='id' value={{ $detallePedido_e ->id}}/>
                                <input  type='hidden' name='cantidad' value='{{ $detallePedido_e->cantidad_DPed }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->tipo_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->talla_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->estilo_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->color_Prod }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->descripcion_Prod }}'/>
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
