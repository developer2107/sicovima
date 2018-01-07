               <div class="ibox-content">
                 <div id="myTabContent" class="tab-content">
    <div role="tabpanel" class="tab-pane fade active in" id="tab_content1" aria-labelledby="datos-tab">
                   <table class="table table-bordered">
                       <thead>
                          <th></th>
                           <th>Producto</th>
                           <th>Cantidad</th>
                           <th>Costo</th>
                           <th>Ganancia</th>
                           <th>Subtotal</th>
                           <th>Acciones</th>
                       </thead>

                         <tbody id="pedidos">

     <!--Aqui se agregan los tr por parte de la función agregarVisitador-->
   </tbody>
   <div id="ocultos">
      <!--Aqui se agregan inputs hiddens usados de la validación unique:proveedors -->
    </div>
 </table>
 <div id="ocultos"></div>
                   <div class="row">
                       <div class="col-xs-8"></div>
                       <div class="col-xs-1">
                           <h5>Total:</h5>
                       </div>
                       <div class="col-lg-3">
                           <div class="input-group m-b">
                               <span class="input-group-addon">$</span>
                               {!! Form::number('total_Ped','22',['class'=>'touchspin2 form-control','step'=>'any']) !!}
                           </div>
                       </div>
                   </div>
