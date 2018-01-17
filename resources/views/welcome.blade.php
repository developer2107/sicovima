@extends('layouts.MenuAdministrador')

@section('content')

<center>
            <div class="row">
                <div class="col-lg-10">
                    <div class="ibox float-e-margins">
                        <div class="ibox-title">
                            <h5>Bienvenido a SICOVIMA</h5>
                        </div>
                        <div class="ibox-content">
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item ">
                                        <img alt="image" class="img-responsive" src="img/img-mada.jpg">
                                    </div>
                                    <div class="item active">
                                        <img alt="image"  class="img-responsive" src="img/IMG-20180108-WA0009.jpg">
                                    </div>
                                    <div class="item ">
                                        <img alt="image" class="img-responsive" src="img/IMG-20180108-WA0008.jpg">
                                    </div>

                                </div>
                                <a data-slide="prev" href="#carousel1" class="left carousel-control">
                                    <span class="icon-prev"></span>
                                </a>
                                <a data-slide="next" href="#carousel1" class="right carousel-control">
                                    <span class="icon-next"></span>
                                </a>
                            </div>
                        </div>
                    </div>
</center>

                @stop