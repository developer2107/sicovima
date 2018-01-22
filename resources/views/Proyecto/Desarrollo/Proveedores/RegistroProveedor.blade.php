<?php use SICOVIMA\departamento;
?>
@extends('layouts.MenuAdministrador')

@section('content')
{!! Form::open(['class'=>'form-horizontal from-label-left input_mask','route'=>'RegistroProveedor.store', 'method'=>'post','autocomplete'=>'off']) !!}
<div class="row wrapper border-bottom white-bg page-heading">
  <div class="col-sm-4">
    <h2>Registro de Proveedores</h2>
    <ol class="breadcrumb">
      <li>
        <a href="#">Proveedores</a>
      </li>
      <li class="active">
        <strong>Registro de Proveedores</strong>
      </li>
    </ol>
  </div>
  <div class="col-sm-8">

  </div>
</div>


<br>
@if (count($errors)>0)
  <div class="alert alert-danger">
    <ul>
      @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
      @endforeach
    </ul>
  </div>
@endif
<div id="contenido">

  <div class="row">
    <div class="col-lg-6">
      <div class="ibox float-e-margins">
        <div class="ibox-title">
          <h5>Registro de Proveedor</h5>
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
              {!! Form::text('nombre_Prov', null,['id' => 'nombre_Prov','class' =>'form-control']) !!}
            </div>
          </div>

          <div class="form-group"><label class="col-lg-3 control-label">NIT </label>

            <div class="col-lg-5">
              {!! Form::text('NIT_Prov',null,['id' => 'NIT_Prov','class' =>'form-control','data-mask'=>'9999-999999-999-9']) !!}
            </div>
          </div>
          <div id="idCorreos">
           <div class="row">
             <div class="form-group">
               <label class="col-lg-3 control-label">Correo Electronico</label>
               <div class="col-lg-7">
                 {!! Form::email('cor[]',null,['id' => 'correoCliente','class'=>'form-control','placeholder'=>'JuanPerez@ejemplo.com','style' => 'width:300px']) !!}
               </div>
               <div class="col-lg-1">
                 <button class="btn btn-default  dim " type="button" id="AddCorreo" name="AddCorreo">
                   <i class="fa fa-plus"></i>
                 </button>
               </div>
             </div>
           </div>
         </div>

         <div id="idTelefonos">
          <div class="row">
            <div class="form-group">
              <label class="col-lg-3 control-label">Teléfono </label>
              <div class="col-lg-4" >
                {!! Form::text('tel[]',null,['id' => 'telCliente','class'=>'form-control','data-mask'=>'(+999) 9999-9999','placeholder'=>'(+      )         -     ','style' => 'width:140px']) !!}
              </div>
              <div class="col-lg-1">
                <button class="btn btn-default  dim " type="button" id="AddTelefono" name="AddTelefono">
                  <i class="fa fa-plus"></i>
                </button>
              </div>
            </div>
            <br>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Dirección </label>
          <div class="col-lg-9">
            {!! Form::text('direccion_Prov',null,['id' => 'direccion_Prov','class' =>'form-control']) !!}
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Departamento </label>
          <div class="col-lg-9">
            <div class="input-group">
              <select class = "form-control" name = "departamentos" id = "departamentos">
                <option value="0">Seleccione un Departamento</option>
                @foreach ($departamento as $v)
                <option value={{$v->id}}>{{$v -> nombre_Depa}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <div class="form-group">
          <label class="col-lg-3 control-label">Municipio </label>
          <div class="col-lg-9">
            <div class="input-group">
              <select class = "form-control" name = "municipios" id = "municipios">
                <option value="0">Seleccione un Municipio</option>
                @foreach ($municipio as $muni)
                <option value={{$muni->id}}>{{$muni -> nombre_Muni}}</option>
                @endforeach
              </select>
            </div>
          </div>
        </div>

        <br>

      </form>

    </div><div class="form-group">
  </div>
  <div class="col-sm-5">
    {!! Form::submit('Registrar',['class'=>'btn btn-outline btn-primary dim']) !!}
  </div>
<<<<<<< HEAD
  <div class="col-sm-7">
   <!--  {!! Form::submit('Cancelar',['class'=>'btn btn-outline btn-primary dim']) !!} -->
  </div>
=======
>>>>>>> 7bf224d17e38707d9ed4291674cf2b21f717c42d
</div>
</div>


<div class="col-lg-6">
  <div class="ibox float-e-margins">
    <div class="ibox-title">
      <h5>Tipo de mercadería que distribuye el proveedor</h5>
    </div>
    <div class="ibox-content">
      <table class="table table-striped">
        <thead>
          <tr>
            <th align="left">Nombre</th>
            <th align="left">Opción</th>

          </tr>
        </thead>
        <tbody>
          <?php $tipos= SICOVIMA\TipoMercaderia::get(); ?>
          @foreach ($tipos as $tipo)
          <tr>
            <td><font size="3" >{{$tipo->nombre_TM}}</font></td>
            <td>
              <input type="hidden" name="cb{{$tipo->id}}" id="cb{{$tipo->id}}" value="0">
              <input type="checkbox"  style="width:25px; height:25px;" onclick="cambioCB({{$tipo->id}})">
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

<br><br>
{!! Form::close() !!}
@stop
<script type="text/javascript">
  function cambioCB(id){
    valor=$('#cb'+id).val();
    if(valor=="1"){
      $('#cb'+id).val("0");
    }else{
      $('#cb'+id).val("1");
    }
  }
</script>
