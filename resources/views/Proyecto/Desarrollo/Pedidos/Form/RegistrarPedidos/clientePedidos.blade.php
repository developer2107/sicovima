<div class="row">
    <div class="col-lg-5">
        <div class="ibox-content">
            <div class="carousel slide" id="carousel1">
                <div class="carousel-inner">

                    <div class="item active">
                        <img alt="image" class="img-responsive" src="../img/mada.jpg">
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


                    <div class="form-group">
                        {!! Form::label('nombre_Cli', 'Cliente', ['class' => 'col-lg-4 control-label']) !!}
                        <div class="col-md-6">
                            <div class="input-group">
                                {!! Form::select('clienteRegPed', ['0' => 'Seleccionar','1' => 'Lisbeth Eunice Hernandez Castillo', '2' => 'Juan Antonio Bautista Perez'],'' ,['class' => 'chosen-select','style' => 'width:300px']) !!}

                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                    {!! Form::label('nomresponsable', 'Responsable', ['class' => 'col-lg-4 control-label']) !!}

                        <div class="col-lg-8">
                            <div class="input-group">
                                {!! Form::select('nombreResponsable_CJ', ['0' => 'Seleccionar','1' => 'Andrea Stefany Alegria Fuentes', '2' => 'Benjamin Monterrosa Delgado'],'' ,['class' => 'chosen-select','style' => 'width:300px']) !!}
                            </div>
                        </div>
                    </div>

                    <div class="form-group"  id="data_2">
                        {!! Form::label('fecha', 'Fecha', ['class' => 'col-lg-4 control-label']) !!}
                        <div class="col-md-6">
                            <div class="input-group date">
                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>

                                {!! Form::text('fecha_Ped', '2017-11-22',['class' =>'form-control']) !!}

                            </div>
                        </div>
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
