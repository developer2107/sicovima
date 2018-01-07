
<div class="modal inmodal" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cuantos desea llevar?</h4>
                <small></small>
            </div>
   

            <div class="modal-body">
                    
                    <div class="row">
                    <div class="col-md-2"> 
                       </div> 
                        <div class="col-md-3"> 
                            <div class="form-group"><label>Cantidad</label>
                                {!! Form::number('cantidadMCarPed',null,['class'=>'form-control','id'=>'cantidad']) !!}
                                
                            </div>
                        </div>
                        <div class="col-md-4">
                            <label class="font-bold">Ganancia por unidad</label>
                            <div class="input-group m-b">
                                <span class="input-group-addon">$</span>
                                {!! Form::text('ganancia_Prod',null,['class'=>'form-control','id'=>'gananciau']) !!}
                                
                            </div>
                        </div>                                         
                    </div>
            </div>
        
             <div class="modal-footer">
             <input class="btn btn-primary" name="agregarVentas" id="agregarVentas" type="button" value"Agregar" onClick="agregarVentas()"/>
                <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
             </div>
        </div>
    </div>
</div>
