@extends('layouts.MenuAdministrador')

@section('content')

{{-- {!! Form::model(['route'=>['VerCompra.update'], 'method'=>'PUT']) !!} --}}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Compra</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Compras</a>
            </li>
            <li>
                <a href="index.html">Mostrar Lista</a>
            </li>
            <li>
                <a href="index.html">Buscar</a>
            </li>
            <li class="active">
                <strong>Ver Compra</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8"></div>
</div>
<br>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="row">
                <div class="col-lg-7">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Compra</h5>
                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Numero Factura</label>
                                    <div class="col-lg-4">
                                        {!! Form::number('numFac_Com',null,['class'=>'form-control','placeholder' => '1234']) !!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Proveedor</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('nombre_Prov',null,['class'=>'form-control','placeholder' => 'Deposito de Telas']) !!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Fecha Compra</label>
                                    <div class="col-lg-4">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            {!! Form::date('fecha_Com',null,['class'=>'form-control']) !!}

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Total</label>
                                    <div class="col-lg-4">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">$</span>
                                            {!! Form::number('total_Com',null,['class'=>'form-control','placeholder' => '80.45']) !!}

                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>

                <div class="col-lg-5">
                    <div class="ibox-content">
                        <div class="carousel slide" id="carousel1">
                            <div class="carousel-inner">
                                <div class="item active">
                                    <img alt="image" class="img-responsive" src="img/mada.jpg">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Detalles de Compra</h5>
                <div class="ibox-tools">
                <a class="collapse-link">
                    <i class="fa fa-chevron-up"></i>
                </a>
                <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                    <i class="fa fa-plus"></i>
                </a>
            </div>
            </div>
            <div class="ibox-content">

                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Cantidad</th>
                        <th>Descripción</th>
                        <th>$ Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>Siper Negro 10 cm</td>
                        <td>2.99</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Boton Negro</td>
                        <td>1.2</td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="ibox">
        <div class="ibox-content">
            <div class="row">
            <br>
                <div class="col-xs-4">
                </div>

            </div>
        </div>
    </div>
</div>
{{-- {!! Form::close() !!} --}}
@stop
