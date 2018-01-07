@extends('layouts.MenuAdministrador')

@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-sm-4">
        <h2>Pedido</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Compras</a>
            </li>
            <li>
                <a href="index.html">Mostrar Lista</a>
            </li>
            <li>
                <a href="index.html">Buscar</a>
            </li>
            <li class="active">
                <strong>Ver Pedido</strong>
            </li>
        </ol>
    </div>
    <div class="col-sm-8">
        
    </div>
        
</div>
<br>


<div class="row">
    <div class="ibox">
        <div class="ibox-content">
            <div class="row">
            <br>
                <div class="col-xs-4">  
                </div>
                    
                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        <a href="" class="btn btn-outline btn-primary dim" type="button">Anular</a>
                    </div>
                </div>  
                <div class="col-xs-2">
                    <div class="input-group bootstrap-touchspin">
                        <button class="btn btn-outline btn-primary dim" type="button">Cancelar</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop