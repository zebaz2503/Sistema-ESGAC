
<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>-->

    <meta charset="utf-8" />
    <title>Metronic Admin Theme #2 | Admin Dashboard 2</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin Theme #2 for statistics, charts, recent events and reports" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
        
    <link href="{{ asset('http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/global/plugins/font-awesome/css/font-awesome.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/global/plugins/simple-line-icons/simple-line-icons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet') }}" type="text/css" />
    <link href="{{ asset('public/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->

    <!-- BEGIN PAGE LEVEL PLUGINS -->
    <link href="{{ asset('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/global/plugins/morris/morris.css" rel="stylesheet" type="text/css') }}" />
    <link href="{{ asset('../assets/global/plugins/fullcalendar/fullcalendar.min.css" rel="stylesheet') }}" type="text/css" />
    <link href="{{ asset('../assets/global/plugins/jqvmap/jqvmap/jqvmap.css" rel="stylesheet" type="text/css') }}" />
    <!-- END PAGE LEVEL PLUGINS -->

    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="{{ asset('../assets/global/css/components-md.min.css') }}" rel="stylesheet" id="style_components" 
    type="text/css" />

    <link href="{{ asset('../assets/global/css/plugins-md.min.css') }}" rel="stylesheet" 
    type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="{{ asset('public/assets/layouts/layout2/css/layout.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('public/assets/layouts/layout2/css/themes/blue.min.css') }}" rel="stylesheet" type="text/css" id="style_color" />
    <link href="{{ asset('public/assets/layouts/layout2/css/custom.min.css') }}" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" /> 
</head>
<body class="page-header-fixed page-sidebar-closed-hide-logo page-container-bg-solid page-md">


    <label for="Nombre">{{'Nombre'}}</label>
    <input type="text" name="Nombre" id="Nombre" 

    value="{{ isset($razas->nombre) ? $razas->nombre:'' }}">
    <br/>

    <label for="Descripcion">{{'Descripcion'}}</label>
    <input type="text" name="Descripcion" id="Descripcion" 

    value="{{ isset($razas->descripcion) ? $razas->descripcion:'' }}">
    <br/>

    <label for="Foto">{{'Foto'}}</label>

    @if(isset($razas->foto))


    <br/>
    <img src="{{ asset('storage').'/' .$razas->foto}}" alt="" width="200">
    <br/>
    @endif

    <input type="file" name="Foto" id="Foto" value="">
    <br/>


    <input type="submit" value="{{ $Modo=='crear' ? 'Agregar':'Modificar'  }}">

    <a href="{{ url('razas') }}">Volver</a>

    
      <!-- BEGIN CORE PLUGINS -->
            <script src="{{ asset('public/assets/global/plugins/jquery.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/bootstrap/js/bootstrap.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/js.cookie.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jquery.blockui.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js') }}" type="text/javascript"></script>
            <!-- END CORE PLUGINS -->
            <!-- BEGIN PAGE LEVEL PLUGINS -->
            <script src="{{ asset('public/assets/global/plugins/moment.min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/global/plugins/bootstrap-daterangepicker/daterangepicker.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/morris/morris.min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/global/plugins/morris/raphael-min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/global/plugins/counterup/jquery.waypoints.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/counterup/jquery.counterup.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/amcharts.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/serial.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/pie.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/radar.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/themes/light.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/themes/patterns.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/amcharts/themes/chalk.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/ammap/ammap.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/amcharts/ammap/maps/js/worldLow.js') }}" type="text/javascript"></script>
            <script src="{{ asset('publicassets/global/plugins/amcharts/amstockcharts/amstock.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/fullcalendar/fullcalendar.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/horizontal-timeline/horizontal-timeline.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.resize.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/flot/jquery.flot.categories.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jquery-easypiechart/jquery.easypiechart.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('publicassets/global/plugins/jquery.sparkline.min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/jquery.vmap.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.russia.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.world.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.europe.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.germany.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/maps/jquery.vmap.usa.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/global/plugins/jqvmap/jqvmap/data/jquery.vmap.sampledata.js') }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL PLUGINS -->
            <!-- BEGIN THEME GLOBAL SCRIPTS -->
            <script src="{{ asset('public/assets/global/scripts/app.min.js') }}" type="text/javascript"></script>
            <!-- END THEME GLOBAL SCRIPTS -->
            <!-- BEGIN PAGE LEVEL SCRIPTS -->
            <script src="{{ asset('public/assets/pages/scripts/dashboard.min.js') }}" type="text/javascript"></script>
            <!-- END PAGE LEVEL SCRIPTS -->
            <!-- BEGIN THEME LAYOUT SCRIPTS -->
            <script src="{{ asset('public/assets/layouts/layout2/scripts/layout.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/layouts/layout2/scripts/demo.min.js" type="text/javascript') }}"></script>
            <script src="{{ asset('public/assets/layouts/global/scripts/quick-sidebar.min.js') }}" type="text/javascript"></script>
            <script src="{{ asset('public/assets/layouts/global/scripts/quick-nav.min.js') }}" type="text/javascript"></script>
            <!-- END THEME LAYOUT SCRIPTS -->


            <!-- rutas JS de Booststrap -->
            <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
            <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
            
            
            <script>
                $(document).ready(function()
                {
                    $('#clickmewow').click(function()
                    {
                        $('#radio1003').attr('checked', 'checked');
                    });
                })
            </script>


    </body>
</html>








