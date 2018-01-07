
<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de la Venta</h5>
               
            </div>
            <div class="ibox-content">
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Producto</th>
                        <th>Cantidad</th>
                        <th>Costo</th>
                        <th>Ganancia</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                    <tbody id="ventasTabla">

                    </tbody>
                </table>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-1">
                        <h5>Total:</h5>
                    </div>    
                    <div class="col-lg-3">
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            <input type="number" id="subtotal">
                            
                            <input type="password" class="form-control" name="password" value="">
                            {!! Form::number('$total_Ven',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>