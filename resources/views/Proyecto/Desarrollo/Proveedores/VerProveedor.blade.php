@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::model($proveedor,['route'=>['RegistroProveedor.update',$proveedor->id], 'method'=>'PUT','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Ver Proveedores</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Proveedores</a>
            </li>
            <li class="active">
                <strong>Ver Proveedor</strong>
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
                                    <form class="form-horizontal">
                                     <br>

                                          <div class="form-group"><label class="col-lg-3 control-label">Nombre </label>

                                            <div class="col-lg-9">
                                                <input id="name" name="name" type="text" class="form-control required" aria-required="true" placeholder="Deposito de Telas S.A. de C.V.">
                                            </div>
                                        </div>

                                        <div class="form-group"><label class="col-lg-3 control-label">NIT </label>

                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" placeholder="1089-763425-463-5">
                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">Tipo de Mercadería</label>

                                            <div class="col-lg-5">

                                                <select class="form-control m-b" name="account">
                                                        <option>Telas</option>
                                                 </select>

                                            </div>

                                        </div>

                                       <div class="form-group"><label class="col-lg-3 control-label">Correo Electronico </label>
                                         <div class="col-lg-9">
                                          <input type="text" class="form-control" placeholder="depositoTelas94@hotmail.com">

                                          </div>
                                       </div>

                                       <div class="form-group"><label class="col-lg-3 control-label">Teléfono </label>

                                            <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="2326-6453">

                                            </div>

                                        </div>

                                         <div class="form-group"><label class="col-lg-3 control-label">Dirección </label>

                                            <div class="col-lg-9">
                                                <input id="name" name="name" type="text" class="form-control required" aria-required="true" placeholder="final av. 14 de Julio Ba. Guadalupe">
                                            </div>
                                        </div>

                                     <div class="form-group"><label class="col-lg-3 control-label">Departamento </label>

                                            <div class="col-lg-9">

                                                <select class="form-control m-b" name="account">
                                                        <option>San Vicente</option>
                                                 </select>

                                            </div>

                                     </div>

                                     <div class="form-group"><label class="col-lg-3 control-label">Municipio </label>

                                            <div class="col-lg-9">

                                                <select class="form-control m-b" name="account">
                                                        <option>San Sebastián</option>
                                                 </select>

                                            </div>

                                     </div>

                                     <div class="col-sm-offset-4">
                                       <button class="btn btn-outline btn-primary dim" type="button">Dar de Baja</button>
                                    </div>

                                    </form>
                                </div><div class="form-group">
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
{!! Form::close() !!}
@stop
