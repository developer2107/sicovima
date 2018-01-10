@extends('layouts.MenuAdministrador')


@section('content')
{!!Form::open(['class' =>'form-horizontal form-label-left input_mask','route' =>'admin.Pedidos.store','method' =>'POST','files'=>true,'enctype'=>'multipart/form-data'])!!}


<div class="row wrapper border-bottom white-bg page-heading">
   <div class="col-sm-4">
       <h2>Registrar Pedido</h2>
       <ol class="breadcrumb">
           <li>
               <a href="index.html">Pedidos</a>
           </li>
           <li class="active">
               <strong>Registro de Pedidos</strong>
           </li>
       </ol>
   </div>
   <div class="col-sm-8">

   </div>
</div>
<div id="contenido" >

@include('Proyecto.Desarrollo.Pedidos.Form.RegistrarPedidos.clientePedidos')


@include('Proyecto.Desarrollo.Pedidos.Form.RegistrarPedidos.tablaRegistroPedidos')


@include('Proyecto.Desarrollo.Pedidos.Form.RegistrarPedidos.fechaPedidos')
<div class="row">
   <div class="ibox">
       <div class="ibox-content">
           <div class="row">
           <br>
               <div class="col-xs-4">
               </div>

               <div class="col-xs-2">
                   <div class="input-group bootstrap-touchspin">
                       {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}

                   </div>
               </div>
               <div class="col-xs-2">
                   <div class="input-group bootstrap-touchspin">
                       {!! Form::submit('Cancelar',['class'=>'btn btn-outline btn-primary dim']) !!}

                   </div>
               </div>
           </div>
       </div>
   </div>
</div>

</div>

@include('Proyecto.Desarrollo.Pedidos.Form.RegistrarPedidos.modalRegistrarPedidos')

<div class="modal inmodal" id="myModal5" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
   <div class="modal-dialog modal-lg">
       <div class="modal-content animated fadeIn">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <i class="fa fa-clipboard modal-icon"></i>
               <h4 class="modal-title">Caracteristicas</h4>
               <small>Seleccione las caracteristicas para su pedido</small>
           </div>


           <div class="modal-body">

                   <div class="row">
                       <div class="col-md-12">
                           <div class="col-sm-4">
                               <label class="control-label">Tipo</label>
                               {!! Form::select('tipoCar_Prod', ['0' => 'Seleccionar','1' => 'Camisa', '2' => 'Pantalon', '3' => 'Falda', '4' => 'Chaqueta'],'' ,['class' => 'form-control m-b','style' => 'width:300px']) !!}

                                </select>
                           </div>
                           <div class="col-sm-2">
                           </div>
                           <div class="col-sm-6">
                               <label class="control-label">Estilo</label>
                               <br>
                               {!! Form::textarea('estiloCar_Prod', null, ['class' => 'note-codable','size' => '30x3']) !!}

                           </div>
                       </div>
                   </div>
                   <br><br>
                   <div class="row">
                       <div class="col-md-12">
                           <table class="table table-bordered">
                       <thead>
                       <tr>
                           <th>Cantidad</th>
                           <th>Talla</th>
                           <th>Categoria</th>
                           <th>Costo</th>
                           <th>Descripcion</th>
                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>5</td>
                           <td>S</td>
                           <td>Hombre</td>
                           <td>$18.00</td>
                           <td>
                               <a class="btn btn-success btn-circle" type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-pencil-square-o"></i>
                               </a>
                               <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                               </a>
                           </td>
                       </tr>
                       <tr>
                           <td>3</td>
                           <td>M</td>
                           <td>Mujer</td>
                           <td>$11.70</td>
                           <td>
                               <a class="btn btn-success btn-circle" type="button" data-toggle="modal" data-target="#myModal6"><i class="fa fa-pencil-square-o"></i>
                               </a>
                               <a class="btn btn-warning btn-circle" type="button"><i class="fa fa-times"></i>
                               </a>
                           </td>
                       </tr>
                       </tbody>
                   </table>
                       </div>
                   </div>

           </div>

           <div class="modal-footer">
               {!! Form::submit('Modificar',['class'=>'btn btn-primary']) !!}
               <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
           </div>
       </div>
   </div>
</div>


<div class="modal inmodal" id="myModal6" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
   <div class="modal-dialog">
       <div class="modal-content animated fadeIn">
           <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
               <i class="fa fa-clipboard modal-icon"></i>
               <h4 class="modal-title">Caracteristicas</h4>
               <small>Modifique las caracteristicas para su pedido</small>
           </div>


           <div class="modal-body">

                   <div class="row">
                       <div class="col-md-3">
                           <div class="form-group"><label>Cantidad</label>
                               {!! Form::number('cantidadModCar_DPed',null,['class'=>'form-control']) !!}

                           </div>
                       </div>
                       <div class="col-md-4">
                           <div class="form-group"><label>Categoria</label>
                               {!! Form::select('categoriaModCar_Prod', ['0' => 'Seleccionar','1' => 'Niña', '2' => 'Niño', '3' => 'Mujer', '4' => 'Hombre'],'' ,['class' => 'form-control m-b','style' => 'width:150px']) !!}

                           </div>
                       </div>
                       <div class="col-md-5">
                           <div class="form-group"><label>Color</label>
                           {!! Form::text('colorModCar_Prod',null,['class'=>'form-control','placeholder' => 'Ingrese el color']) !!}

                           </div>
                       </div>
                   </div>
                   <div class="row">
                       <div class="col-md-3">
                           <div class="form-group"><label>Talla</label>
                               {!! Form::select('tallaModCar_Prod', ['0' => 'Seleccionar','1' => 'XS', '2' => 'S', '3' => 'M', '4' => 'L', '5' => 'XL', '6' => 'XXL', '7' => 'XXXL'],'' ,['class' => 'form-control m-b','style' => 'width:115px']) !!}

                           </div>
                       </div>

                       <div class="col-sm-6">
                           <label class="font-bold">Descripción</label>
                           <div class="input-group m-b">
                               {!! Form::textarea('descripcionModCar_Prod', null, ['class' => 'note-codable','size' => '30x3']) !!}

                           </div>
                       </div>

                       <div class="col-sm-3">
                           <label class="font-bold">Precio</label>
                           <div class="input-group m-b">
                               <span class="input-group-addon">$</span>
                               {!! Form::number('precioModCar_Prod',null,['class'=>'touchspin2 form-control','step'=>'any']) !!}

                           </div>
                       </div>
                   </div>

           </div>

           <div class="modal-footer">
               {!! Form::submit('Modificar',['class'=>'btn btn-primary']) !!}
               <button type="button" class="btn btn-white" data-dismiss="modal">Cerrar</button>
           </div>
       </div>
   </div>
</div>

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
                           <th>Cantidad</th>
                           <th>Talla</th>
                           <th>Categoria</th>
                           <th>Costo</th>

                       </tr>
                       </thead>
                       <tbody>
                       <tr>
                           <td>5</td>
                           <td>S</td>
                           <td>Hombre</td>
                           <td>$18.00</td>

                       </tr>
                       <tr>
                           <td>3</td>
                           <td>M</td>
                           <td>Mujer</td>
                           <td>$11.70</td>

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
{!!Form::close()!!}
@endsection
