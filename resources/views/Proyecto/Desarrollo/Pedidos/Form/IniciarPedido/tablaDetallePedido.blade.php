<div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Detalles de Pedido</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="ibox-content">
                    <table class="table table-bordered" id="tablaDetallePedido">
                        <thead>
                        <tr>
                            <th>Producto</th>
                            <th>Descripcion de Pedido</th>
                            <th>Fotografia</th>
                            <th>Fecha de Pedido</th>
                            <th>Acciones</th>
                        </tr>
                        </thead>
                        <tbody>
                          <?php $cont=\SICOVIMA\detallePedido::all()->where('estado', false )->where('estado2', false) ?>
                          @foreach($cont as $detallePedido_e)
                        <tr>
                          <?php   $dato=explode("-",(String)$detallePedido_e->pedido->fecha_Ped);
                          $fecha =$dato[2]."/".$dato[1]."/".$dato[0];
                          $binary_data= $detallePedido_e->producto->imagen_Prod ;

                          ?>
                            <td>{{$detallePedido_e->producto->tipo_Prod}}</td>
                            <td>{{$detallePedido_e->producto->descripcion_Prod}}</td>
                            <td><img src= '{!!$binary_data!!}' width="70" height="70"/> </td>
                            <td>{{$fecha}}</td>
                            <td>
                                <input  type='hidden' name='id' value={{ $detallePedido_e ->id}}/>
                                <input  type='hidden' name='cantidad' value='{{ $detallePedido_e->cantidad_DPed }}'/>
                                <input  type='hidden' name='cantidad' value='{{ $detallePedido_e->cantidad_DPed }}'/>
                                <input  type='hidden' name='tipo_Prod' value='{{ $detallePedido_e->producto->tipo_Prod }}'/>
                                <input  type='hidden' name='talla_Prod' value='{{ $detallePedido_e->producto->talla_Prod }}'/>
                                <input  type='hidden' name='estilo_prod' value='{{ $detallePedido_e->producto->estilo_Prod }}'/>
                                <input  type='hidden' name='color_Prod' value='{{ $detallePedido_e->producto->color_Prod }}'/>
                                <input  type='hidden' name='descripcion_Prod' value='{{ $detallePedido_e->producto->descripcion_Prod }}'/>
                                <input  type='hidden' name='fecha' value={{ $fecha }}/>
                                <input  type='hidden' name='estado' value="TRUE"/>

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
