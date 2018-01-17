<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Login 2</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    {!! Html::script('js/jquery-2.1.1.js') !!}

</head>

<body class="gray-bg">
@if(Session::has('message'))
        <div class="alert alert-success">
           Mensaje: <a class="alert-link" href="#">{{Session::get('message')}}</a>.
        </div>
@endif
@if(Session::has('error'))
        <div class="alert alert-danger">
           Mensaje: <a class="alert-link" href="#">{{Session::get('error')}}</a>.
        </div>
@endif
    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">

            <div class="ibox-content">
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item ">
                                        <img alt="image" class="img-responsive" src="img/pantalon-hombre.jpg">
                                    </div>
                                    <div class="item active">
                                        <img alt="image"  class="img-responsive" src="img/Mada-Denim-Blanco4.jpg">
                                    </div>
                                    <div class="item ">
                                        <img alt="image" class="img-responsive" src="img/p_big2.jpg">
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
            <div class="col-md-6" id="entrada">
                <div class="ibox-content">
                        <form method="POST" action="authenticate" autocomplete="off">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Usuario" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Contraseña" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Ingresar</button>

                        <a onclick="olvidar()">
                            <small>¿Olvidaste tu contraseña?</small>
                        </a>
                        </form>
                </div>
            </div>
            <div class="col-md-6" id="olvidoContra" style="display:none">
                <div class="ibox-content">
                        <form method="POST" action="correo" autocomplete="off">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="Correo" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Recuperar</button>

                        <a onclick="regresar()">
                            <small>Regresar</small>
                        </a>
                        </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Derechos Reservados   Universidad de El Salvador
            </div>
            <div class="col-md-6 text-right">
               <small>© 2017</small>
            </div>
        </div>
    </div>

</body>

</html>
<script type="text/javascript">
    function olvidar(){
        $('#olvidoContra').css("display","block");
        $('#entrada').css("display","none");
    }

    function regresar(){
        $('#olvidoContra').css("display","none");
        $('#entrada').css("display","block");
    }
</script>
