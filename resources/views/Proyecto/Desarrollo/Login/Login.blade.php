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

</head>

<body class="gray-bg">

    <div class="loginColumns animated fadeInDown">
        <div class="row">

            <div class="col-md-6">

            <div class="ibox-content">
                            <div class="carousel slide" id="carousel1">
                                <div class="carousel-inner">
                                    <div class="item active">
                                        <img alt="image" class="img-responsive" src="img/p_big3.jpg">
                                    </div>
                                    <div class="item">
                                        <img alt="image"  class="img-responsive" src="img/p_big1.jpg">
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
            <div class="col-md-6">
                <div class="ibox-content">
                        <form method="POST" action="authenticate" autocomplete="off">
                        {{ csrf_field()}}
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Username" required="">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password" required="">
                        </div>
                        <button type="submit" class="btn btn-primary block full-width m-b">Ingresar</button>

                        <a href="#">
                            <small>Forgot password?</small>
                        </a>
                        </form>
                </div>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-md-6">
                Copyright Universidad de El Salvador
            </div>
            <div class="col-md-6 text-right">
               <small>© 2017</small>
            </div>
        </div>
    </div>

</body>

</html>
