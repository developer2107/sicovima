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
                            <th>Estilo</th>
                            <th>Talla</th>
                            <th>Existencias</th>
                            <th>Color</th>
                            <th>Descripcion</th>
                            <th>Precio</th>
                            <th>Accion</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ( $inventarioProductoTerminado as $inventarioProductoTerminado )
                        @foreach ( $producto as $producto )
                        <tr>
                            <td align="left" id="estilo"><font size="4" >{{$producto-> tipo_Prod}} {{$producto-> estilo_Prod}}</font></td>
                            <td align="left"><font size="4" >{{$producto-> talla_Prod}}</font></td>
                            <td align="left"><font size="4" >{{$inventarioProductoTerminado->existencias_IPT}}</font></td>
                            <td align="rihgt"><font size="4" >{{$producto->color_Prod}}</font></td>
                            <td align="rihgt"><font size="4" >{{$producto->descripcion_Prod}}</font></td>
                            <td align="rihgt" id="precio"><font size="4" >{{$producto->precio_Prod}}</font></td>
                            <td align="center">
                               <a class="btn btn-success btn-circle" type="button" href="{{route('admin.venta.show',$producto->id)}}"><i class="fa fa-pencil-square-o"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        @endforeach


                        <tr>
                            <td id="tipo_Prod">Campesino</td>
                            <td>M</td>
                            <td>4</td>
                            <td>Azul</td>
                            <td>Acampanado</td>
                            <td id="precio_Prod">4.33</td>
                            <td>
                                <a class="btn btn-success btn-circle" type="button" data-dismiss="modal" data-toggle="modal" data-target="#myModal6"><i class="fa fa-pencil-square-o"></i>
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
