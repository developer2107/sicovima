<!DOCTYPE html>
<head>

  <style>
        .thumb {
          height: 200px;
          border: 1px solid #000;
          margin: 10px 5px 0 0;
        }
      </style>
    {!! Html::script('js/jquery-3.1.1.min.js') !!}
    {!! Html::script('bootstrap/js/jquery.js') !!}
    {!! Html::script('bootstrap/js/bootstrap.min.js') !!}
    {!! Html::script('js/jquery.dataTables.min.js') !!}
    {!! Html::script('js/jquery.min.js') !!}


        <script type="text/javascript">
        $(document).ready(function(){
            var maxField = 3; //Input fields increment limitation
            var addButton = $('.add_button'); //Add button selector
            var zona = $('.agregar_telefono'); //Input field wrapper
            var x = 1; //Initial field counter is 1
            $(addButton).click(function(){ //Once add button is clicked
                if(x < maxField){ //Check maximum number of input fields
                    x++; //Increment field counter
                    var fieldHTML = '<div class="col-lg-4"><input type="text" class="form-control" name="field_telefono[]" data-mask="(999) 9999-9999"><a href="javascript:void(0);" class="remove_button" title="Remove field"><i class="material-icons">clear</i></a></div>'; //New input field html
                    $(zona).append(fieldHTML); // Add field html
                }
            });
            $(zona).on('click', '.remove_button', function(e){ //Once remove button is clicked
                e.preventDefault();
                $(this).parent('div').remove(); //Remove field html
                x--; //Decrement field counter
            });
        });
        </script>
 <script>
 function Iniciar(id){
            window.open("modProducto.php?id="+id,"_parent");
          }
 	$(document).ready(function(){
 		$('#example').DataTable({
 			"order":[[2,"asc"]],
 			"language":{
 			"lengthMenu": "Mostrar _MENU_ registro por pagina",
 			"info": "Mostrando pagina _PAGE_ de _PAGE_",
 				"infoEmpty": "No hay registros disponibles",
 				"infoFiltered": "(filtrada de _MAX_ registros)",
 				"loadingRecords": "Cargando...",
 				"processing":     "Procesando...",
 				"search": "Buscar:",
 				"zeroRecords":		"No se encontraron registro coincidentes",

 				"paginate": {
 					"next":		"Siguiente",
 					"previous":	"Anterior"
 				},
 			}
 		});
 	});
 		function modificar(id){
             window.open("Proyecto.Desarrollo.Pedidos.Form.IniciarPedido.blade.php?id="+id,"_parent");
           }
   function volver(){
         window.open("index.php","_parent");
       }
 </script>
 <script type="text/javascript">

 </script>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>SICOVIMA</title>

    {!! Html::style('css/bootstrap.min.css') !!}
    {!! Html::style('font-awesome/css/font-awesome.css') !!}
    {!! Html::style('css/plugins/dataTables/datatables.min.css') !!}
    {!! Html::style('css/animate.css') !!}
    {!! Html::style('css/style.css') !!}
    {!! Html::style('css/plugins/iCheck/custom.css') !!}
    {!! Html::style('css/plugins/chosen/chosen.css') !!}
    {!! Html::style('css/plugins/colorpicker/bootstrap-colorpicker.min.css') !!}
    {!! Html::style('css/plugins/cropper/cropper.min.css') !!}
    {!! Html::style('css/plugins/switchery/switchery.css') !!}
    {!! Html::style('css/plugins/jasny/jasny-bootstrap.min.css') !!}

    <!--
    {!! Html::style('css/plugins/nouslider/jquery.nouislider.css') !!}
    -->
    {!! Html::style('css/plugins/datapicker/datepicker3.css') !!}
    {!! Html::style('css/plugins/ionRangeSlider/ion.rangeSlider.skinFlat.css') !!}
    {!! Html::style('css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css') !!}
    {!! Html::style('css/plugins/clockpicker/clockpicker.css') !!}
    {!! Html::style('css/plugins/daterangepicker/daterangepicker-bs3.css') !!}
    {!! Html::style('css/plugins/select2/select2.min.css') !!}
    {!! Html::style('css/plugins/touchspin/jquery.bootstrap-touchspin.min.css') !!}

    {!! Html::script('js/scripts/ventas.js') !!}
    {!! Html::script('js/scripts/compras.js') !!}
    {!! Html::script('js/scripts/Pedidos.js') !!}
    {!! Html::script('js/scripts/clientes.js') !!}
    {!! Html::script('js/scripts/proveedores.js') !!}


<style type="text/css">.jqstooltip { position: absolute;left: 0px;top: 0px;visibility: hidden;background: rgb(0, 0, 0) transparent;background-color: rgba(0,0,0,0.6);filter:progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000);-ms-filter: "progid:DXImageTransform.Microsoft.gradient(startColorstr=#99000000, endColorstr=#99000000)";color: white;font: 10px arial, san serif;text-align: left;white-space: nowrap;padding: 5px;border: 1px solid white;z-index: 10000;}.jqsfield { color: white;font: 10px arial, san serif;text-align: left;}</style></head>
<body class=" pace-done"><div class="pace  pace-inactive"><div class="pace-progress" style="transform: translate3d(100%, 0px, 0px);" data-progress-text="100%" data-progress="99">
  <div class="pace-progress-inner"></div>
</div>
<div class="pace-activity"></div></div>
    <div id="wrapper">
   @include('Proyecto.Globales.Menu')
   <div id="page-wrapper" class="gray-bg" style="min-height: 1359px;">
       @include('Proyecto.Globales.BarraSuperior')

       <div class="wrapper wrapper-content">
        @if(Session::has('message'))
        <div class="alert alert-success">
           Mensaje: <a class="alert-link" href="#">{{Session::get('message')}}</a>.
        </div>
        @endif
           @yield('content')

           @include('Proyecto.Globales.PiePagina')
       </div>
   </div>


    <!-- Mainly scripts -->
    {!! Html::script('js/jquery-2.1.1.js') !!}
    {!! Html::script('js/bootstrap.min.js') !!}
    {!! Html::script('js/plugins/metisMenu/jquery.metisMenu.js') !!}
    {!! Html::script('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    {!! Html::script('js/plugins/jeditable/jquery.jeditable.js') !!}
    {!! Html::script('js/plugins/dataTables/datatables.min.js') !!}

    <!-- Flot -->
    {!! Html::script('js/plugins/flot/jquery.flot.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.tooltip.min.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.spline.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.resize.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.pie.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.symbol.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.time.js') !!}
    {!! Html::script('js/plugins/flot/jquery.flot.time.js') !!}

    <!-- Custom and plugin javascript -->
    {!! Html::script('js/inspinia.js') !!}
    {!! Html::script('js/plugins/pace/pace.min.js') !!}
    {!! Html::script('js/plugins/slimscroll/jquery.slimscroll.min.js') !!}
    <!-- Sparkline -->
    {!! Html::script('js/plugins/sparkline/jquery.sparkline.min.js') !!}
    <!-- Chosen -->
    {!! Html::script('js/plugins/chosen/chosen.jquery.js') !!}
    <!-- JSKnob -->
    {!! Html::script('js/plugins/jsKnob/jquery.knob.js') !!}
    <!-- Input Mask-->
    {!! Html::script('js/plugins/jasny/jasny-bootstrap.min.js') !!}
    <!-- Data picker -->
    {!! Html::script('js/plugins/datapicker/bootstrap-datepicker.js') !!}
    <!-- NouSlider -->
    <!--
    {!! Html::script('js/plugins/nouslider/jquery.nouislider.min.js') !!}
    -->
    <!-- Switchery -->
    {!! Html::script('js/plugins/switchery/switchery.js') !!}
    <!-- IonRangeSlider -->
    {!! Html::script('js/plugins/ionRangeSlider/ion.rangeSlider.min.js') !!}
    <!-- iCheck -->
    {!! Html::script('js/plugins/iCheck/icheck.min.js') !!}
    <!-- MENU -->
    {!! Html::script('js/plugins/metisMenu/jquery.metisMenu.js') !!}
    <!-- Color picker -->
    {!! Html::script('js/plugins/colorpicker/bootstrap-colorpicker.min.js') !!}
    <!-- Clock picker -->
    {!! Html::script('js/plugins/clockpicker/clockpicker.js') !!}
    <!-- Image cropper -->
    {!! Html::script('js/plugins/cropper/cropper.min.js') !!}
    <!-- Date range use moment.js same as full calendar plugin -->
    {!! Html::script('js/plugins/fullcalendar/moment.min.js') !!}
    <!-- Date range picker -->
    {!! Html::script('js/plugins/daterangepicker/daterangepicker.js') !!}
    <!-- Select2 -->
    {!! Html::script('js/plugins/select2/select2.full.min.js') !!}
    <!-- TouchSpin -->
    {!! Html::script('js/plugins/touchspin/jquery.bootstrap-touchspin.min.js') !!}

        <script>
        $(document).ready(function() {

            var sparklineCharts = function(){
                $("#sparkline1").sparkline([34, 43, 43, 35, 44, 32, 44, 52], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline2").sparkline([32, 11, 25, 37, 41, 32, 34, 42], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1ab394',
                    fillColor: "transparent"
                });

                $("#sparkline3").sparkline([34, 22, 24, 41, 10, 18, 16,8], {
                    type: 'line',
                    width: '100%',
                    height: '50',
                    lineColor: '#1C84C6',
                    fillColor: "transparent"
                });
            };

            var sparkResize;

            $(window).resize(function(e) {
                clearTimeout(sparkResize);
                sparkResize = setTimeout(sparklineCharts, 500);
            });

            sparklineCharts();




            var data1 = [
                [0,4],[1,8],[2,5],[3,10],[4,4],[5,16],[6,5],[7,11],[8,6],[9,11],[10,20],[11,10],[12,13],[13,4],[14,7],[15,8],[16,12]
            ];
            var data2 = [
                [0,0],[1,2],[2,7],[3,4],[4,11],[5,4],[6,2],[7,5],[8,11],[9,5],[10,4],[11,1],[12,5],[13,2],[14,5],[15,2],[16,0]
            ];
            $("#flot-dashboard5-chart").length && $.plot($("#flot-dashboard5-chart"), [
                        data1,  data2
                    ],
                    {
                        series: {
                            lines: {
                                show: false,
                                fill: true
                            },
                            splines: {
                                show: true,
                                tension: 0.4,
                                lineWidth: 1,
                                fill: 0.4
                            },
                            points: {
                                radius: 0,
                                show: true
                            },
                            shadowSize: 2
                        },
                        grid: {
                            hoverable: true,
                            clickable: true,

                            borderWidth: 2,
                            color: 'transparent'
                        },
                        colors: ["#1ab394", "#1C84C6"],
                        xaxis:{
                        },
                        yaxis: {
                        },
                        tooltip: false
                    }
            );

        });
    </script>
    <script>
        $(document).ready(function(){
            $('.dataTables-example').DataTable({
                dom: '<"html5buttons"B>lTfgitp',
                buttons: [
                    { extend: 'copy'},
                    {extend: 'csv'},
                    {extend: 'excel', title: 'ExampleFile'},
                    {extend: 'pdf', title: 'ExampleFile'},

                    {extend: 'print',
                     customize: function (win){
                            $(win.document.body).addClass('white-bg');
                            $(win.document.body).css('font-size', '10px');

                            $(win.document.body).find('table')
                                    .addClass('compact')
                                    .css('font-size', 'inherit');
                    }
                    }
                ]

            });

            /* Init DataTables */
            var oTable = $('#editable').DataTable();

            /* Apply the jEditable handlers to the table */
            oTable.$('td').editable( '../example_ajax.php', {
                "callback": function( sValue, y ) {
                    var aPos = oTable.fnGetPosition( this );
                    oTable.fnUpdate( sValue, aPos[0], aPos[1] );
                },
                "submitdata": function ( value, settings ) {
                    return {
                        "row_id": this.parentNode.getAttribute('id'),
                        "column": oTable.fnGetPosition( this )[2]
                    };
                },

                "width": "90%",
                "height": "100%"
            } );


        });

        function fnClickAddRow() {
            $('#editable').dataTable().fnAddData( [
                "Custom row",
                "New row",
                "New row",
                "New row",
                "New row" ] );

        }
    </script>

    <script>
        $(document).ready(function(){

            var $image = $(".image-crop > img")
            $($image).cropper({
                aspectRatio: 1.618,
                preview: ".img-preview",
                done: function(data) {
                    // Output the result data for cropping image.
                }
            });

            var $inputImage = $("#inputImage");
            if (window.FileReader) {
                $inputImage.change(function() {
                    var fileReader = new FileReader(),
                            files = this.files,
                            file;

                    if (!files.length) {
                        return;
                    }

                    file = files[0];

                    if (/^image\/\w+$/.test(file.type)) {
                        fileReader.readAsDataURL(file);
                        fileReader.onload = function () {
                            $inputImage.val("");
                            $image.cropper("reset", true).cropper("replace", this.result);
                        };
                    } else {
                        showMessage("Please choose an image file.");
                    }
                });
            } else {
                $inputImage.addClass("hide");
            }

            $("#download").click(function() {
                window.open($image.cropper("getDataURL"));
            });

            $("#zoomIn").click(function() {
                $image.cropper("zoom", 0.1);
            });

            $("#zoomOut").click(function() {
                $image.cropper("zoom", -0.1);
            });

            $("#rotateLeft").click(function() {
                $image.cropper("rotate", 45);
            });

            $("#rotateRight").click(function() {
                $image.cropper("rotate", -45);
            });

            $("#setDrag").click(function() {
                $image.cropper("setDragMode", "crop");
            });

            $('#data_1 .input-group.date').datepicker({
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                calendarWeeks: true,
                autoclose: true
            });

            $('#data_2 .input-group.date').datepicker({
                startView: 1,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                format: "dd/mm/yyyy"
            });

            $('#data_3 .input-group.date').datepicker({
                startView: 2,
                todayBtn: "linked",
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            $('#data_4 .input-group.date').datepicker({
                minViewMode: 1,
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true,
                todayHighlight: true
            });

            $('#data_5 .input-daterange').datepicker({
                keyboardNavigation: false,
                forceParse: false,
                autoclose: true
            });

            var elem = document.querySelector('.js-switch');
            var switchery = new Switchery(elem, { color: '#1AB394' });

            var elem_2 = document.querySelector('.js-switch_2');
            var switchery_2 = new Switchery(elem_2, { color: '#ED5565' });

            var elem_3 = document.querySelector('.js-switch_3');
            var switchery_3 = new Switchery(elem_3, { color: '#1AB394' });

            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green'
            });

            $('.demo1').colorpicker();

            var divStyle = $('.back-change')[0].style;
            $('#demo_apidemo').colorpicker({
                color: divStyle.backgroundColor
            }).on('changeColor', function(ev) {
                        divStyle.backgroundColor = ev.color.toHex();
                    });

            $('.clockpicker').clockpicker();

            $('input[name="daterange"]').daterangepicker();

            $('#reportrange span').html(moment().subtract(29, 'days').format('MMMM D, YYYY') + ' - ' + moment().format('MMMM D, YYYY'));

            $('#reportrange').daterangepicker({
                format: 'MM/DD/YYYY',
                startDate: moment().subtract(29, 'days'),
                endDate: moment(),
                minDate: '01/01/2012',
                maxDate: '12/31/2015',
                dateLimit: { days: 60 },
                showDropdowns: true,
                showWeekNumbers: true,
                timePicker: false,
                timePickerIncrement: 1,
                timePicker12Hour: true,
                ranges: {
                    'Today': [moment(), moment()],
                    'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                    'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                    'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                    'This Month': [moment().startOf('month'), moment().endOf('month')],
                    'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
                },
                opens: 'right',
                drops: 'down',
                buttonClasses: ['btn', 'btn-sm'],
                applyClass: 'btn-primary',
                cancelClass: 'btn-default',
                separator: ' to ',
                locale: {
                    applyLabel: 'Submit',
                    cancelLabel: 'Cancel',
                    fromLabel: 'From',
                    toLabel: 'To',
                    customRangeLabel: 'Custom',
                    daysOfWeek: ['Su', 'Mo', 'Tu', 'We', 'Th', 'Fr','Sa'],
                    monthNames: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December'],
                    firstDay: 1
                }
            }, function(start, end, label) {
                console.log(start.toISOString(), end.toISOString(), label);
                $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
            });

            $(".select2_demo_1").select2();
            $(".select2_demo_2").select2();
            $(".select2_demo_3").select2({
                placeholder: "Select a state",
                allowClear: true
            });


            $(".touchspin1").TouchSpin({
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin2").TouchSpin({
                min: 0,
                max: 100,
                step: 0.1,
                decimals: 2,
                boostat: 5,
                maxboostedstep: 10,
                postfix: '%',
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });

            $(".touchspin3").TouchSpin({
                verticalbuttons: true,
                buttondown_class: 'btn btn-white',
                buttonup_class: 'btn btn-white'
            });


        });
        var config = {
                '.chosen-select'           : {},
                '.chosen-select-deselect'  : {allow_single_deselect:true},
                '.chosen-select-no-single' : {disable_search_threshold:10},
                '.chosen-select-no-results': {no_results_text:'Oops, nothing found!'},
                '.chosen-select-width'     : {width:"95%"}
                }
            for (var selector in config) {
                $(selector).chosen(config[selector]);
            }

        $("#ionrange_1").ionRangeSlider({
            min: 0,
            max: 5000,
            type: 'double',
            prefix: "$",
            maxPostfix: "+",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_2").ionRangeSlider({
            min: 0,
            max: 10,
            type: 'single',
            step: 0.1,
            postfix: " carats",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_3").ionRangeSlider({
            min: -50,
            max: 50,
            from: 0,
            postfix: "°",
            prettify: false,
            hasGrid: true
        });

        $("#ionrange_4").ionRangeSlider({
            values: [
                "January", "February", "March",
                "April", "May", "June",
                "July", "August", "September",
                "October", "November", "December"
            ],
            type: 'single',
            hasGrid: true
        });

        $("#ionrange_5").ionRangeSlider({
            min: 10000,
            max: 100000,
            step: 100,
            postfix: " km",
            from: 55000,
            hideMinMax: true,
            hideFromTo: false
        });

        $(".dial").knob();

        /*$("#basic_slider").noUiSlider({
            start: 40,
            behaviour: 'tap',
            connect: 'upper',
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#range_slider").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });

        $("#drag-fixed").noUiSlider({
            start: [ 40, 60 ],
            behaviour: 'drag-fixed',
            connect: true,
            range: {
                'min':  20,
                'max':  80
            }
        });*/


    </script>

    <script>
              function archivo(evt) {
                  var files = evt.target.files; // FileList object

                  // Obtenemos la imagen del campo "file".
                  for (var i = 0, f; f = files[i]; i++) {
                    //Solo admitimos imágenes.
                    if (!f.type.match('image.*')) {
                        continue;
                    }

                    var reader = new FileReader();

                    reader.onload = (function(theFile) {
                        return function(e) {
                          // Insertamos la imagen
                         document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'+
                       '"<input type="hidden" name="codImagen" id="codImagen" value="'+ e.target.result +'"/>"'].join('');
                        };
                    })(f);

                    reader.readAsDataURL(f);
                  }
              }

              document.getElementById('files').addEventListener('change', archivo, false);
      </script>

</body>
</html>
