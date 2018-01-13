<html><head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>INSPINIA | Tour</title>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="font-awesome/css/font-awesome.css" rel="stylesheet">

    <!-- Bootstrap Tour -->
    <link href="css/plugins/bootstrapTour/bootstrap-tour.min.css" rel="stylesheet">

    <link href="css/animate.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

</head>

<body class="pace-done tour-open">
    <div class="pace  pace-inactive">
        <div class="pace-progress" data-progress-text="100%" data-progress="99" style="transform: translate3d(100%, 0px, 0px);">
            <div class="pace-progress-inner"></div>
        </div>
    </div>
    <div id="wrapper">   
        <div class="wrapper wrapper-content  animated fadeInRight">
            <div class="row">
                <div class="col-md-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Bootstrap Tour</h5>
                        </div>
                        <div class="ibox-content">
                            <p>
                                Quick and easy way to build your product tours with Bootstrap Popovers.
                            </p>
                            <div class=" m-t-sm">
                                <a href="#" class="btn btn-primary startTour"><i class="fa fa-play"></i> Start Tour</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tour steps</h5>
                        </div>
                        <div class="ibox-content text-center" id="step1">
                            <div class="p-sm">
                                <h3>Step 1</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tour steps</h5>
                        </div>
                        <div class="ibox-content text-center" id="step2">
                            <div class="p-sm">
                                <h3>Step 2</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tour steps</h5>
                        </div>
                        <div class="ibox-content text-center" id="step3">
                            <div class="p-sm">
                                <h3>Step 3</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tour steps</h5>
                        </div>
                        <div class="ibox-content text-center" id="step4">
                            <div class="p-xl">
                                <h3>Step 4</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="ibox ">
                        <div class="ibox-title">
                            <h5>Tour steps</h5>
                        </div>
                        <div class="ibox-content text-center" id="step5">
                            <div class="p-xl">
                                <h3>Step 5</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        </div>
        </div>



    <!-- Mainly scripts -->
    <script src="js/jquery-2.1.1.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="js/plugins/slimscroll/jquery.slimscroll.min.js"></script>

    <!-- Custom and plugin javascript -->
    <script src="js/inspinia.js"></script>
    <script src="js/plugins/pace/pace.min.js"></script>

    <!-- Bootstrap Tour -->
    <script src="js/plugins/bootstrapTour/bootstrap-tour.min.js"></script>


<script>

    $(document).ready(function (){

        // Instance the tour
        var tour = new Tour({
            steps: [{

                    element: "#step1",
                    title: "Title of my step",
                    content: "Introduce new users to your product by walking them through it step by step.",
                    placement: "top"
                },
                {
                    element: "#step2",
                    title: "Title of my step",
                    content: "Content of my step",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                },
                {
                    element: "#step3",
                    title: "Title of my step",
                    content: "Content of my step",
                    placement: "top",
                    backdrop: true,
                    backdropContainer: '#wrapper',
                    onShown: function (tour){
                        $('body').addClass('tour-open')
                    },
                    onHidden: function (tour){
                        $('body').removeClass('tour-close')
                    }
                },
                {
                    element: "#step4",
                    title: "Title of my step",
                    content: "Introduce new users to your product by walking them through it step by step.",
                    placement: "top"
                },
                {
                    element: "#step5",
                    title: "Title of my step",
                    content: "Introduce new users to your product by walking them through it step by step.",
                    placement: "bottom"
                }
            ]});

        // Initialize the tour
        tour.init();

        $('.startTour').click(function(){
            tour.restart();

            // Start the tour
            // tour.start();
        })

    });

</script>
</body>
</html>