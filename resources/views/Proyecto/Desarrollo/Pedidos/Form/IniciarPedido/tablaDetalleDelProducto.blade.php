<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles del Producto</h5>

            </div>

            <div class="ibox-content">
                <table class="table table-bordered" id="tablaDetalleMateriaPrima">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Materia Prima</th>
                        <th>Existencias</th>
                        <th>Cantidad a Usar</th>
                        <th>Subtotal</th>
                        <th>Acciones</th>
                    </tr>
                    </thead>
                </table>
                <div class="row">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-1">
                     <label class="font-bold">Costo:</label>
                    </div>
                    <div class="col-lg-3">
                        <div class="input-group m-b">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('costo',0.00,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'costo']) !!}
                        </div>
                    </div>
                </div>
                </div>
            </div>
         </div>
    </div>
</div>
