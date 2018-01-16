@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($materiaPrima,['route'=>['RegistroMateriaP.update',$materiaPrima->id], 'method'=>'PUT']) !!}
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
          <h5>Materia Prima</h5>
        </div>
        <div class="ibox-content">
          <form class="form-horizontal">
            <br>
            <div class="row">
              <div class="col-md-1">
              </div>
              <label class="col-lg-3 control-label">Nombre</label>
              <div class="col-md-8">
                <div class="input-group">
                  {!! Form::text('nombre_MP',null,['class'=>'form-control','id' => 'nombre_MP'])!!}
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-1">
              </div>
              <label class="col-lg-3 control-label">Tipo</label>
              <div class="col-md-8">
                <div class="input-group">
                  {!! Form::select('tipo_MP',\SICOVIMA\materiaPrima::arrayTipoMercaderia(),null,['placeholder'=>'Seleccionar Tipo de Materia Prima','id' => 'tipoMercaderia_Prov','class'=>'chosen-select','style'=>'width:300px']) !!}
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-1">
              </div>
              <label class="col-lg-3 control-label">Color</label>
              <div class="col-md-8">
                <div class="input-group">
                  {!! Form::text('color_MP',null,['class'=>'form-control','id' => 'color_MP'])!!}
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-1">
              </div>
              <label class="col-lg-3 control-label">Precio</label>
              <div class="col-md-8">
                <div class="input-group">
                  {!! Form::number('precio_MP',null,['class'=>'touchspin2 form-control','step'=>'any','id' => 'precio_MP','onkeypress'=>'return NumCheck(event,this)'])!!}
                </div>
              </div>
            </div>
            <br>
            <div class="row">
              <div class="col-md-1">
              </div>
              <label class="col-lg-3 control-label">Unidad de Medida</label>
              <div class="col-md-8">
                <div class="input-group">
                  {!! Form::text('unidadMedida_MP',null,['class'=>'form-control','id' => 'unidadMedida_MP'])!!}
                </div>
              </div>
            </div>

                         <!-- <div class="col-sm-offset-4">
                            <button class="btn btn-outline btn-primary dim" type="button">Modificar</button>
                          </div> -->

                        </form>
                      </div>
                      <br><br>
                      <div class="col-sm-5">
                        {!! Form::submit('Modificar',['class'=>'btn btn-outline btn-primary dim']) !!}
                      </div>
                      <div class="col-sm-7">
                        <a href="" class="btn btn-outline btn-primary dim" type="button">Cancelar</a>
                      </div>
                      <br>
                    </div>
                  </div>

                  <div class="col-lg-5">
                    <div class="ibox-content">
                      <div class="carousel slide" id="carousel1">
                        <div class="carousel-inner">
                          <div class="item active">
                            <img alt="image" class="img-responsive" src="../img/Mada-Denim-Blanco4.jpg">
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>

                </div>
              </div>
              {!! Form::close() !!}
              @stop
