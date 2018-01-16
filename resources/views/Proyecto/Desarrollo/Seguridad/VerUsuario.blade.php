@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Ver Usuario</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Usuario</a>
            </li>
            <li class="active">
                <strong>Ver Usuario</strong>
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

                                </div>
                                <div class="ibox-content">
                                    {!! Form::open(['route'=>['Usuario.update',$Usuarioedit->id],'class'=>'form-horizontal','method'=>'PUT','autocomplete'=>'off']) !!}
                                     <br>

                                          <div class="form-group"><label class="col-lg-3 control-label">Nombre </label>

                                            <div class="col-lg-9">
                                              <input id="name" name="name" type="text" class="form-control required" disabled="true" aria-required="true" value="{{$Usuarioedit->name}}">
                                            </div>
                                        </div>

                                        <div class="form-group"><label class="col-lg-3 control-label">Tipo de Usuario </label>

                                            <div class="col-lg-5">

                                                <input id="tipo" name="tipo" type="text" class="form-control required" disabled="true" aria-required="true" value="{{$Usuarioedit->tipo}}">
                                            </div>
                                        </div>


                                          <div class="form-group"><label class="col-lg-3 control-label">Correo Electronico </label>
                                        <div class="col-lg-9">
                                          <input type="email" name="email" class="form-control" value="{{$Usuarioedit->email}}" disabled="true">

                                        </div>

                                       </div>

                                       <div class="form-group"><label class="col-lg-3 control-label">Fecha de Registro</label>

                                            <div class="col-lg-9">
                                                <input id="fechaRegistro_Usu" name="fechaRegistro_Usu" type="date" value="{{$Usuarioedit->fechaRegistro_Usu}}" class="form-control required" disabled="true" >
                                                <input type="hidden" name="accion" value="estado">
                                                <input type="hidden" name="estado" value="{{$Usuarioedit->estado}}">
                                            </div>
                                        </div>

                                     <div class="col-sm-offset-4">
                                       {{-- {!!link_to_action('SeguridadController@edit', $title = 'Modificar', $parameters = [$Usuarioedit->id], $attributes = ['class'=>'btn btn-outline btn-primary' , 'type'=>'button']) !!} --}}

                                        <?php
                                        if ($Usuarioedit->estado === 'Activo') {

                                          $dato = 'Dar Baja';
                                          ?>
                                          <a class="btn btn-outline btn-primary dim"  type="button" href="{{route('Usuario.edit', $Usuarioedit->id)}}">Modificar</a>
                                          <?php

                                        }else {
                                          $dato = 'Dar Alta';
                                        }
                                         ?>
                                          {!! Form::submit($dato,['class'=>'btn btn-outline btn-primary']) !!}
                                    </div>

                                    {!! Form::close() !!}
                                </div><div class="form-group">
                            </div>
                        </div>
                </div>


<div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">
                    <div class="item active">
                        <img alt="image" class="img-responsive" src="{{asset('img/Mada-Denim-Blanco3.jpg')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@stop
