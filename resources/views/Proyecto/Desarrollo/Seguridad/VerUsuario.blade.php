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
                                    <form class="form-horizontal">
                                     <br>

                                          <div class="form-group"><label class="col-lg-3 control-label">Nombre </label>

                                            <div class="col-lg-9">
                                              <input id="name" name="name" type="text" class="form-control required" aria-required="true" placeholder="Benjamin Monterrosa Delgado">
                                            </div>
                                        </div>

                                        <div class="form-group"><label class="col-lg-3 control-label">Tipo de Usuario </label>

                                            <div class="col-lg-5">

                                                <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" >
                                            <label for="inlineRadio1"> Adminsitrador </label>
                                                </div>

                                                <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked="">
                                            <label for="inlineRadio2"> Standard </label>
                                                </div>

                                            </div>
                                        </div>
                                        

                                          <div class="form-group"><label class="col-lg-3 control-label">Correo Electronico </label>
                                        <div class="col-lg-9">
                                          <input type="email" placeholder="monte17@gmail.com" class="form-control">
                                          
                                        </div>

                                       </div> 

                                       <div class="form-group"><label class="col-lg-3 control-label">Contraseña </label>

                                            <div class="col-lg-9">
                                                <input id="name" name="name" type="text" class="form-control required" aria-required="true" placeholder="*********">                                            
                                            </div>
                                        </div>

                                     <div class="col-sm-offset-4">
                                        <button class="btn btn-outline btn-primary dim" type="button">Modificar</button>
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

@stop