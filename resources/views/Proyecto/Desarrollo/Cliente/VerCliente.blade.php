@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Ver Cliente</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Clientes</a>
            </li>
            <li class="active">
                <strong>Ver Cliente</strong>
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

                                        <div class="form-group"><label class="col-lg-3 control-label">Tipo de Cliente </label>

                                            <div class="col-lg-5">

                                                <div class="radio radio-info radio-inline">
                                            <input type="radio" id="inlineRadio1" value="option1" name="radioInline" >
                                            <label for="inlineRadio1"> Natural </label>
                                                </div>

                                                <div class="radio radio-inline">
                                            <input type="radio" id="inlineRadio2" value="option2" name="radioInline" checked="">
                                            <label for="inlineRadio2"> Juridico </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="form-group"><label class="col-lg-3 control-label">DUI </label>   

                                            <div class="col-lg-4"><input type="text" class="form-control"  placeholder="05022187-9" ></div>
                                        </div>

                                        <div class="form-group"><label class="col-lg-3 control-label">NIT </label>

                                            <div class="col-lg-5">
                                                <input type="text" class="form-control" placeholder="1009-070794-101-8">                                               
                                            </div>
                                        </div>

                                         <div class="form-group"><label class="col-lg-3 control-label">Nombre del Responsable </label>

                                            <div class="col-lg-9">
                                                <input id="name" name="name" type="text" class="form-control required"  aria-required="true" placeholder="Edwin de Jesus Palacios Aguilar">                                                
                                            </div>
                                        </div> 

                                        <div class="form-group"><label class="col-lg-3 control-label">Teléfono </label>

                                            <div class="col-lg-5">
                                            <input type="text" class="form-control" placeholder="7913-6714"> 

                                            </div>
                                               
                                        </div>

                                          <div class="form-group"><label class="col-lg-3 control-label">Correo Electronico </label>
                                        <div class="col-lg-9">
                                          <input type="email" placeholder="monte17@gmail.com" class="form-control">
                                          
                                        </div>

                                       </div> 

                                       <div class="form-group"><label class="col-lg-3 control-label">Dirección </label>

                                            <div class="col-lg-9">
                                                <input id="name" name="name" type="text" class="form-control required" aria-required="true" placeholder="Ave.Rubers calle El Transito">                                            
                                            </div>
                                        </div>

                                     <div class="form-group"><label class="col-lg-3 control-label">Departamento </label>

                                            <div class="col-lg-9">
                                                
                                                <select class="form-control m-b" name="account">
                                                        <option>San Salvador</option>
                                                      
                                                 </select>
                                           
                                            </div> 
                                           
                                     </div> 

                                    <div class="form-group"><label class="col-lg-3 control-label">Municipio </label>

                                            <div class="col-lg-9">
                                                
                                                <select class="form-control m-b" name="account">
                                                        <option>San Marcos</option>
                         
                                                 </select>
                                           
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