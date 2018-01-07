<div class="modal inmodal" id="modalProducto" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">Producto</h4>
                <small>Registre el producto de su compra</small>
            </div>

            <?php ?>
            <div class="modal-body">

                    <div class="row">
                        <div class="col-md-2">
                            <div class="form-group"><label>Cantidad</label>
                                {!! Form::number('cant_DCom',null,['class'=>'form-control','id'=>'cant_DCom']) !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <div class="form-group"><label>Tipo</label>
                                {!! Form::select('tipo_MP', ['1' => 'Tela','2'=>'Hilo','3' => 'Botones','4' =>'Remaches'], null,['class'=>'form-control m-b','id'=>'tipo_MP']) !!}
                            </div>
                        </div>
                        <div class="col-md-5">
                            <label class="font-bold">Unidad de Medida</label>
                            <div class="input-group m-b">
                                {!! Form::text('unidadMedida_MP',null,['class'=>'form-control','id' =>'unidadMedida_MP']) !!}
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="form-group"><label>Color</label>
                                {!! Form::text('color_MP',null,['class'=>'form-control','id'=>'color_MP']) !!}
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group"><label>Nombre</label>
                                {!! Form::text('nombre_MP',null,['class'=>'form-control','id'=>'nombre_MP']) !!}
                            </div>
                        </div>

                        <div class="col-sm-3">
                            <label class="font-bold">SubTotal</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::number('subTotal_DCom',null,['class'=>'touchspin2 form-control','step'=>'any','id'=>'subTotal_DCom']) !!}
                            </div>
                        </div>
                    </div>

            </div>

            <div class="modal-footer">
                <input type="button" class="btn btn-primary" name="agregarProducto" id="agregarProducto" value="Agregar" onclick="agregarProducto()"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
