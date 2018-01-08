<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de la Venta</h5>
            </div>
            <div class="ibox-content">
                <table class="table table-bordered" id="tablaProductos">
                    <thead>
                    <tr>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Ganancia</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                </table>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-1">
                        <h5>Total:</h5>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('total_pedido',0.00,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'totalEnPedido','readonly'=>'readonly','step'=>'.01']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
