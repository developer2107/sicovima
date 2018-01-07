<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de Compra</h5>

            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th></th>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>Precio</th>
                        <th>Accion</th>

                    </tr>
                    </thead>
                    <tbody id="Compra_producto">

                    </tbody>
                    <div id="ocultos">
                    </div>
                </table>

                 <div class="row">
                    <div class="col-xs-9"></div>
                    <div class="form-group"><label class="col-lg-1 control-label">Total</label>
                        <div class="col-xs-2">
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('total_Com',0,['class'=>'form-control','id'=>'total_Com']) !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
