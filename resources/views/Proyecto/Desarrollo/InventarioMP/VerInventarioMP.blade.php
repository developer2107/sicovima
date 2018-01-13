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

                    <br>
                    <br>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-3 control-label">Nombre</label>
                        <div class="col-md-6">
                          <!-- <div class="input-group"> -->
                            {!! Form::text('nombre_MP',$materiaPrima->nombre_MP,['class'=>'form-control','readonly'=>'readonly'])!!}
                          <!-- </div> -->
                        </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-3 control-label">Color</label>
                        <div class="col-md-8">
                          <div class="input-group">
                            {!! Form::text('color_MP',$materiaPrima->color_MP,['class'=>'form-control','readonly'=>'readonly'])!!}
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
                            {!! Form::text('tipo_MP',$materiaPrima->tipo_MP,['class'=>'form-control','readonly'=>'readonly'])!!}
                          </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-3 control-label">Existencia</label>
                        <div class="col-md-8">
                          <div class="input-group">
                            {!! Form::text('existencias_IMP',$existencia,['class'=>'form-control','readonly'=>'readonly'])!!}
                          </div>
                        </div>
                    </div>
                    <br>
                    <?php  if ($materiaPrima->estado_MP==1): ?>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-3 control-label">Estado</label>
                        <div class="col-md-8">
                          <div class="input-group">
                            {!! Form::text('descripcion_DMP',"Bueno",['class'=>'form-control','readonly'=>'readonly'])!!}
                          </div>
                        </div>
                    </div>
                    <?php else: ?>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-3 control-label">Estado</label>
                        <div class="col-md-8">
                          <div class="input-group">
                            {!! Form::text('descripcion_DMP',"Defectuoso",['class'=>'form-control','readonly'=>'readonly'])!!}
                          </div>
                        </div>
                    </div>
                    <?php endif ?>
                    <br>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-3 control-label">Precio</label>
                        <div class="col-md-4">
                          <div class="input-group">
                            <span class="input-group-addon">$</span>
                            {!! Form::number('totalVIMP',$materiaPrima->precio_MP,['class'=>'form-control','readonly'=>'readonly']) !!}
                          </div>
                        </div>
                    </div>
                    <br><br>
                    <div class="row">
                      <div class="col-md-1">
                      </div>
                        <label class="col-lg-4 control-label"></label>
                        <div class="col-md-4">
                          <div class="input-group m-b">
                            <a href="/github/sicovima/public/CambioEstadoMP/{{$materiaPrima->id}}" class="btn btn-outline btn-primary dim">Modificar Estado</a>
                            
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
                        <img alt="image" class="img-responsive" src="../img/Mada-Denim-Blanco4.jpg">
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
