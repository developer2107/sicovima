<?php use SICOVIMA\departamento;
?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::open(['class'=>'form-horizontal from-label-left input_mask','route'=>'RegistroMateriaP.store', 'method'=>'post','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Registro de Materia Prima</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Materia Prima</a>
            </li>
            <li class="active">
                <strong>Registro de Materia Prima</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">

    </div>
</div>


<br>
<div id="contenido">

  <div class="row">
    <div class="col-lg-6">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5></h5>
                <div class="ibox-tools">
                    <a class="collapse-link">
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#">Config option 1</a>
                        </li>
                        <li><a href="#">Config option 2</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="ibox-content">
                <form class="form-horizontal">
                   <br>

                   <div class="form-group"><label class="col-lg-3 control-label">Nombre </label>

                    <div class="col-lg-9">
                      {!! Form::text('nombre_MP', null,['id' => 'nombre_MP','class' =>'form-control']) !!}
                  </div>
              </div>

              <div class="form-group"><label class="col-lg-3 control-label">Tipo </label>

                <div class="col-lg-5">
                  {!! Form::select('tipo_MP',\SICOVIMA\materiaPrima::arrayTipoMercaderia(),'',['placeholder'=>'Seleccionar Tipo de Materia Prima','id' => 'tipoMercaderia_Prov','class'=>'chosen-select','style'=>'width:300px']) !!}

              </div>
          </div>
          <div class="form-group"><label class="col-lg-3 control-label">Color
          </label>

          <div class="col-lg-5">
             {!! Form::text('color_MP',null,['id' => 'color_MP','class' =>'form-control']) !!}
         </div>
     </div>
     <div class="form-group"><label class="col-lg-3 control-label">Precio
     </label>
     <div class="col-lg-5">
      {!! Form::number('precio_MP',null,['class'=>'touchspin2 form-control','step'=>'any','id'=>'precio_MP']) !!}
  </div>
</div>
<div class="form-group"><label class="col-lg-3 control-label">Unidad de Medida</label>
    <div class="col-lg-5">
      {!! Form::text('unidadMedida_MP',null,['id' => 'unidadMedida_MP','class' =>'form-control']) !!}
  </div>
  </div>

</form>
<br><br>
<div class="form-group">
<div class="col-sm-5">
    {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}
</div>
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

</div>

<br><br>
{!! Form::close() !!}
@stop
