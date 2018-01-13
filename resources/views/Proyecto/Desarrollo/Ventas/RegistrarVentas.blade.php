@extends('layouts.MenuAdministrador')
@section('content')
{!! Form::open(['route'=>'RegistrarVenta.store','method'=>'post','autocomplete'=>'off']) !!}

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Registro de Venta</h2>
        <ol class="breadcrumb">
        <li>
            <a href={!! asset('ListadeVentas') !!}>Ventas</a>
        </li>
        <li class="active">
            <strong>Registrar</strong>
        </li>
        </ol>
    </div>
    <div class="col-sm-6">
    </div>
    <div class="col-sm-2">
        <div class="p-sm">
        <br>
        <div class=" m-t-sm">
            <a href="#" class="btn btn-primary startTour1"><i class="fa fa-info-circle" id="step1"></i>  Ayuda</a>
        </div>
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Venta</h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <button class="btn btn-default btn-circle startTour2" type="button"><i class="fa fa-info"></i></button>
            </div>
            <div class="ibox-content">
                <div class="p-sm">
                    <br>
                <div class="row">
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Cliente</label>
                    <div class="col-md-6">
                        <div class="input-group" id="step01">
                           <select class = "chosen-select" name = "clientes" id = "clientes"  style="width:300px">
                                <option value="0">Seleccione</option>
                                @foreach ($cliente as $v)
                                <option value={{$v->id}}>{{$v -> nombre_Cli}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row">
                <br>
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Responsable</label>
                    <div class="col-lg-7">
                        <div class="input-group" id="step2">
                            {!! Form::text('nombreResponsable',null,['id' => 'nombreResponsable','class'=>'form-control','readonly'=>'readonly','style' => 'width:300px']) !!}
                        </div>
                    </div>
                </div>
                <div class="row" id="data_2">
                <br>
                    <div class="col-md-1">
                    </div>
                    <label class="col-lg-2 control-label">Fecha</label>
                    <div class="col-md-4" id="step3">
                        <div class="input-group date">
                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                            {!! Form::text('fecha_Ven',null,['class' =>'form-control','readonly'=>'readonly']) !!}
                        </div>
                    </div>
                    <div class="col-md-1">
                        <div class="input-group bootstrap-touchspin">
                             <a type="button" class="btn btn-outline btn-primary dim" data-toggle="modal" data-target="#myModalTabla" id="step4">Agregar producto</a>
                        </div>
                    </div>
                    <br>
                </div>
                <br>
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src="img/Mada-Denim-Blanco4.jpg">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

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
                            {!! Form::number('total_Ven',0.00,['class'=>'touchspin2 form-control','step'=>'any', 'id'=>'totalVenta','readonly'=>'readonly','step'=>'.01']) !!}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-2">
    </div>
    <div class="col-lg-8">
        <div class="ibox">
            <div class="ibox-title">
                <h5></h5>
            </div>
            <div class="ibox-content">
                <div class="row">
                    <div class="col-md-3">
                        <label class="font-bold">Documento</label>
                        <div class="input-group bootstrap-touchspin">
                            {!! Form::select('tipo_Doc', ['0' => 'Factura', '1' => 'Recibo'],'Seleccionar' ,['class' => 'form-control m-b','data-placeholder'=>'Seleccionar']) !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <label class="font-bold">Numero</label>
                        <div class="input-group bootstrap-touchspin">
                            {!! Form::number('numeroDoc',null,['id' => 'numeroDoc','class'=>'form-control','style' => 'width:150px']) !!}
                        </div>
                    </div>
                    <div class="col-md-1">
                    </div>
                    <div class="col-md-2">
                        <label class="font-bold">              </label>
                        <div class="input-group bootstrap-touchspin">
                            {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}
                        </div>
                    </div>
                    <div class="col-md-2">
                     <label class="font-bold">              </label>
                        <div class="input-group bootstrap-touchspin" id="CancelarRegistroVenta"><a class='btn btn-outline btn-primary dim'>Cancelar</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<div class="modal inmodal fade" id="myModalTabla" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-lg">
        <div class="modal-content animated fadeIn">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">×</span><span class="sr-only">Close</span></button>
                <i class="fa fa-clipboard modal-icon"></i>
                <h4 class="modal-title">¿Cual desea llevar?</h4>
                <small></small>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins">
                            <div class="ibox-title">
                                <h5>Productos</h5>
                            </div>
                            <div class="ibox-content">
                                <div class="table-responsive">
                                    <div id="DataTables_Table_0_wrapper" class="dataTables_wrapper form-inline dt-bootstrap">
                                    <table cellspacing="0" width="100%" class="table table-striped table-bordered display dataTables-example" id="tablaProductosTerm">
                                        <thead>
                                          <tr>
                                            <th>Estilo</th>
                                            <th>Talla</th>
                                            <th>Existencias</th>
                                            <th>Color</th>
                                            <th>Descripción</th>
                                            <th>Precio</th>
                                            <th>Opción</th>
                                          </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ( $productos as $prod )
                                                <?php
                                                $inv=SICOVIMA\inventarioProductoTerminado::where('id_Producto',$prod->id)->get()->last();
                                                ?>
                                            <tr>
                                                <td align="left" id="estilo"><font size="4" >{{$prod-> tipo_Prod}} {{$prod-> estilo_Prod}}</font></td>
                                                <td align="left"><font size="4" >{{$prod-> talla_Prod}}</font></td>
                                                <td align="left"><font size="4" >{{$inv->nuevaExistencia_IPT}}</font></td>
                                                <td align="rihgt"><font size="4" >{{$prod->color_Prod}}</font></td>
                                                <td align="rihgt"><font size="4" >{{$prod->descripcion_Prod}}</font></td>
                                                <td align="rihgt" id="precio" step=".01" style = "width:15%"><font size="4" ><i class="fa fa-usd"></i>  {{$prod->precio_Prod}}</font></td>
                                                <td align="center">
                                                    <input type="hidden" value='{{$prod->tipo_Prod." ".$prod->estilo_Prod." ".$prod->color_Prod}}'>
                                                    <input type="hidden" value='{{$inv->nuevaExistencia_IPT}}'>
                                                    <input type="hidden" step=".01" value='{{$prod->precio_Prod}}'>
                                                    <input type="hidden" value='{{$prod->id}}'>
                                                    <input type="hidden" name="prueba" value="100"/>
                                                    <a class="btn btn-info btn-circle" type="button" id="AddCant" data-dismiss="modal" data-toggle="modal" data-target="#myModal6">
                                                    <i class="fa fa-check"></i>
                                                    </a>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
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
                            {!! Form::number('ganancia_Prod',null,['class'=>'form-control','id'=>'gananciau','step'=>'.01']) !!}
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal-footer">
                <input class="btn btn-primary" name="agregarVentas" id="agregarVentas" type="button" value="Agregar" data-dismiss="modal"/>
                <button type="button" class="btn btn-white" data-dismiss="modal" id="cerrarM">Cerrar</button>
            </div>
        </div>
    </div>
</div>
<!-- Bootstrap Tour -->
    <script src="js/plugins/bootstrapTour/bootstrap-tour.min.js"></script>
<!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>
    <script src="js/plugins/datapicker/bootstrap-datepicker.js"></script>

<!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

<script>

    $(document).ready(function (){

        // Instance the tour
        var tour1 = new Tour({
            steps: [{
                    element: "#step1",
                    title: "Ayuda",
                    content: "Para abrir el servicio de ayuda pulse el boton con el icono de informacion 'i' para iniciar en cada panel correspondiente.",
                    placement: "bottom",
                    backdrop: true,
                    backdropContainer: '#wrapper',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                }
            ]});

        // Initialize the tour
        tour1.init();

        $('.startTour1').click(function(){
            tour1.restart();

            // Start the tour
            // tour.start();
        })

    });

</script>
<script>

    $(document).ready(function (){

        // Instance the tour
        var tour2 = new Tour({
            steps: [{
                    element: "#step01",
                    title: "Selección de cliente",
                    content: "Seleccione el cliente al cual realizará la venta, en esta lista se le muestran todos los clientes jurídicos y naturales.",
                    placement: "top"
                },
                {

                    element: "#step2",
                    title: "Presentación de encargado",
                    content: "Si en el paso anterior se seleccionó un cliente jurídico, en este panel se carga el responsable de dicho cliente, si seleccionó un cliente natural, no se mostrará nada en el panel, ya que éste tipo de cliente no posee responsable.",
                    placement: "top"
                },
                {
                    element: "#step3",
                    title: "Elección de fecha",
                    content: "Elegir del calendario la fecha en la que se realiza la venta, seleccionando en primer lugar el mes, y luego el día.",
                    placement: "bottom"
                },
                {
                    element: "#step4",
                    title: "Agregar producto",
                    content: "Al presionar este botón, se despliega una ventana, en la cual podemos elegir el producto que se quiere vender.",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                },
                {
                    element: "#step5",
                    title: "Title of my step",
                    content: "Content of my step",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                },
                {

                    element: "#step6",
                    title: "Title of my step",
                    content: "Introduce new users to your product by walking them through it step by step.",
                    placement: "top"
                },
                {
                    element: "#step7",
                    title: "Title of my step",
                    content: "Introduce new users to your product by walking them through it step by step.",
                    placement: "top"
                },
                {
                    element: "#step8",
                    title: "Title of my step",
                    content: "Introduce new users to your product by walking them through it step by step.",
                    placement: "top"
                }
            ]});

        // Initialize the tour
        tour2.init();

        $('.startTour2').click(function(){
            tour2.restart();

            // Start the tour
            // tour.start();
        })

    });

</script>

{!! Form::close() !!}
@stop
