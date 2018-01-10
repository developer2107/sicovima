<div class="row">
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

    <div class="col-lg-7">
        <div class="ibox float-e-margins">
            <div class="ibox-title">
                <h5>Pedido</h5>
            </div>
            <div class="ibox-content">
            <br>


            <div class="row">
                <div class="col-md-1">
                </div>
                <label class="col-lg-2 control-label">Cliente</label>
                <div class="col-md-6">
                    <div class="input-group">
                       <select class = "chosen-select" name = "clientes" id = "clientes"  style="width:300px">
                            <option value="0">Seleccione el cliente</option>
                            @foreach ($cliente as $cliente)
                            <option value={{$cliente->id}}>{{$cliente -> nombre_Cli}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
            <div class="row">
            <br>
                <div class="col-md-1">
                </div>
                <label class="col-lg-2 control-label">Responsable</label>
                <div class="col-lg-7">
                    <div class="input-group">
                        {!! Form::text('nombreResponsable',null,['id' => 'nombreResponsable','class'=>'form-control','readonly'=>'readonly','style' => 'width:300px']) !!}
                    </div>
                </div>
            </div>
            <div class="row" id="data_2">
            <br>
                <div class="col-md-1">
                </div>
                <label class="col-lg-2 control-label">Fecha</label>
                <div class="col-md-4">
                    <div class="input-group date">
                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                        {!! Form::text('fecha_Ped',null,['class' =>'form-control']) !!}
                    </div>
                </div>
                <br>
            </div>
                    <div class="row">


                                <div class="col-sm-6">
                                    <br>
                                    <label class="control-label"></label>
                                    <div class="input-group bootstrap-touchspin">
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal4">Agregar caracteristicas</button>
                                    </div>
                                </div>
                        </div>
            </div>
        </div>
    </div>
</div>
