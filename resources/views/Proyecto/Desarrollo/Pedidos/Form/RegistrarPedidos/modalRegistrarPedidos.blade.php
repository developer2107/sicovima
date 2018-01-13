<div class="modal inmodal" id="myModal4" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
       <div class="modal-content animated fadeIn">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                   <h4>Imagen Previsualizada</h4>
                   <output id="list"></output>
                   <br />
                   <div class="btn-group">
                     {{-- {!! Form::file('files',null ,['class' => 'btn btn-primary','id'=>'files', 'name'=>'files[]']) !!}
                     --}}
                            <input class="btn btn-primary" type="file" id="files" name="files" />
                            {{-- <input type="file" onchange="previewFile()"><br>
                            <img src="" height="200" alt="Image preview..."> --}}


                   </div>

           </div>


           <div class="modal-body">

                   <div class="row">

                             <div class="col-md-4">
                                 <div class="form-group"><label>Tipo</label>
                                     {!! Form::select('tipo_Prod', ['0' => 'Seleccionar','Camisa' => 'Camisa', 'Pantalon' => 'Pantalon', 'Chaqueta' => 'Chaqueta', 'Vestido' => 'Vestido', 'Saco' => 'Saco', 'Cuero' => 'Cuero', 'Blusa' => 'Blusa'],'' ,['class' => 'form-control m-b','style' => 'width:115px','id'=>'tipo_Prod']) !!}

                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group"><label>Talla</label>
                                     {!! Form::select('talla_Prod', ['0' => 'Seleccionar','XS' => 'XS', 'S' => 'S', 'M' => 'M', 'L' => 'L', 'XL' => 'XL', 'XXL' => 'XXL', 'XXXL' => 'XXXL'],'' ,['class' => 'form-control m-b','style' => 'width:115px','id'=>'talla_Prod']) !!}

                                 </div>
                             </div>
                             <div class="col-md-4">
                                 <div class="form-group"><label>Color</label>
                                     {!! Form::text('color_Prod',null,['class'=>'form-control','placeholder' => 'Ingrese el color', 'id'=>'color_Prod']) !!}

                                 </div>
                             </div>
                           </div>
                           <div class="row">
                             <div class="col-md-8">
                               <div class="col-md-6">
                                 <div class="form-group"><label>Cantidad</label>
                                     {!! Form::number('cantidad_DPed',null,['class'=>'form-control', 'id'=>'cantidad_DPed']) !!}

                                 </div>

                                 <div class="form-group"><label>Categoria</label>
                                     {!! Form::select('categoria_Prod', ['0' => 'Seleccionar','Niña' => 'Niña', 'Niño' => 'Niño', 'Mujer' => 'Mujer', 'Hombre' => 'Hombre'],'' ,['class' => 'form-control m-b','style' => 'width:150px','id'=>'categoria_Prod']) !!}

                                 </div>
                               </div>
                                 <div class="col-sm-6">
                                     <label class="font-bold">Estilo</label>
                                     <div class="input-group m-b">
                                       {!! Form::textarea('estilo_prod', null, ['class' => 'note-codable','size' => '40x5' , 'id'=>'estilo_prod']) !!}

                                     </div>
                                 </div>

                   </div>
                 </div>
                   <div class="row">


                       <div class="col-sm-6">
                           <label class="font-bold">Descripción</label>
                           <div class="input-group m-b">
                               {!! Form::textarea('descripcion_Prod', null, ['class' => 'note-codable','size' => '30x3','id'=>'descripcion_Prod']) !!}

                           </div>
                       </div>

                       <div class="col-sm-3">
                           <label class="font-bold">Precio unitario</label>
                           <div class="input-group m-b">
                               <span class="input-group-addon">$</span>
                               {!! Form::number('precio_Prod',null,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'precio_Prod']) !!}

                           </div>
                       </div>
                       <div class="col-sm-3">
                           <label class="font-bold">Ganancia</label>
                           <div class="input-group m-b">
                               <span class="input-group-addon">$</span>
                               {!! Form::number('ganancia',null,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'subTotal_DPed']) !!}

                           </div>
                       </div>
                   </div>

           </div>

           <div class="modal-footer">
             <input class="btn btn-primary" name="agregarPedido" id="agregarPedido" type="button" value="Agregar" />
               <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
           </div>
       </div>
   </div>
</div>
