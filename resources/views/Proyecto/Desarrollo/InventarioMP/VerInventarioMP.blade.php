@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($materiaPrima,['route'=>['RegistroMateriaP.update',$materiaPrima->id], 'method'=>'PUT','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Materia Prima</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Materia Prima</a>
            </li>
            <li>
                <a href="index.html">Mostrar Lista</a>
            </li>
            <li>
                <a href="index.html">Buscar</a>
            </li>
            <li class="active">
                <strong>Ver Materia Prima</strong>
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
                            <h5>Materia Prima</h5>

                        </div>
                        <div class="ibox-content">
                            <form class="form-horizontal">

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Numero Factura</label>
                                    <div class="col-lg-4">
                                        {!! Form::text('numFac_Com',null,['class'=>'form-control','placeholder' => '1234'])!!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Proveedor</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('nombre_Prov',null,['class'=>'form-control','placeholder' => 'Deposito de Telas'])!!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Color</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('color_MP',$materiaPrima->color_MP,['class'=>'form-control','readonly'=>'readonly'])!!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Tipo</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('tipo_MP',null,['class'=>'form-control','placeholder' => 'Lona'])!!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Fecha Compra</label>
                                    <div class="col-lg-4">
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            {!! Form::text('fecha_Com', '03/04/2014',['class' =>'form-control']) !!}

                                        </div>
                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Nombre de materia Prima</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('nombre_MP',null,['class'=>'form-control','placeholder' => 'Sincalux lona'])!!}

                                    </div>
                                </div>

                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Existencia</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('existencias_IMP',null,['class'=>'form-control','placeholder' => '89'])!!}

                                    </div>
                                </div>


                                 <div class="form-group">
                                    <label class="col-lg-4 control-label">Estado</label>
                                    <div class="col-lg-7">
                                        {!! Form::text('descripcion_DMP',null,['class'=>'form-control','placeholder' => 'Defectuoso o Bueno'])!!}

                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label">Total</label>
                                    <div class="col-lg-4">
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">$</span>
                                            {!! Form::number('totalVIMP',null,['class'=>'form-control','placeholder' => '80.45']) !!}

                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="col-lg-4 control-label"></label>
                                    <div class="col-lg-4">
                                        <div class="input-group m-b">
                                            {!! Form::submit('Modificar Estado',['class'=>'btn btn-outline btn-primary dim']) !!}

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
{!! Form::close() !!}
@stop
