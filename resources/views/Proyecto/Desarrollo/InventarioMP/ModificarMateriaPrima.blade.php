@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Modificar Materia Prima</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Materia Prima</a>
            </li>
            <li class="active">
                <strong>Modificar Materia Prima</strong>
            </li>
        </ol>
    </div>
</div>
<br>
<div id="contenido">
    <div class="row">
        <div class="col-lg-6">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5></h5>
                </div>
                <div class="ibox-content">
                    <form class="form-horizontal">
                        <div class="form-group"><label class="col-lg-3 control-label">Nombre </label>
                            <div class="col-lg-7">
                              {!! Form::text('nombre_MP', null,['id' => 'nombre_MP','class' =>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group"><label class="col-lg-3 control-label">Tipo de Materia Prima </label>
                            <div class="col-lg-5">
                              {!! Form::text('tipo_MP',null,['id' => 'tipo_MP','class' =>'form-control']) !!}
                            </div>
                        </div>

                        <div class="form-group"><label class="col-lg-3 control-label">Color </label>
                             <div class="col-lg-5">
                               {!! Form::text('color_MP',null,['id' => 'color_MP','class' =>'form-control']) !!}
                             </div>
                        </div>

                        <div class="form-group"><label class="col-lg-3 control-label">Precio </label>
                              <div class="col-lg-5">
                               {!! Form::number('precio_MP',null,['class'=>'touchspin2 form-control','step'=>'any','id'=>'precio_MP']) !!}
                              </div>
                        </div>

                        <div class="form-group"><label class="col-lg-3 control-label">Unidad de Medida</label>
                              <div class="col-lg-5">
                                {!! Form::text('unidadMedida_MP',null,['id' => 'unidadMedida_MP','class' =>'form-control']) !!}
                              </div>
                        </div>

                         <div class="col-sm-offset-4">
                            <button class="btn btn-outline btn-primary dim" type="button">Modificar</button>
                        </div>

                      </form>
                                </div>
                                <div class="form-group"></div>
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

@stop
