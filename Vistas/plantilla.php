<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="icon" href="vistas/img/plantilla/logomini.png" type="image/ico" />

    <title>Sistema Médico | </title>
    <!--*********************************************
    *                     Plugins CSS                *
    *************************************************-->
    <!-- Bootstrap -->
    <link href="vistas/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="vistas/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="vistas/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="vistas/vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="vistas/vendors/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet">
    <!-- JQVMap -->
    <link href="vistas/vendors/jqvmap/dist/jqvmap.min.css" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="vistas/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- FullCalendar -->
    <link href="vistas/vendors/fullcalendar/dist/fullcalendar.min.css" rel="stylesheet">
    <link href="vistas/vendors/fullcalendar/dist/fullcalendar.print.css" rel="stylesheet" media="print">
    <!-- bootstrap-wysiwyg -->
    <link href="vistas/vendors/google-code-prettify/bin/prettify.min.css" rel="stylesheet">
    <!-- Select2 -->
    <link href="vistas/vendors/select2/dist/css/select2.min.css" rel="stylesheet">
    <!-- Switchery -->
    <link href="vistas/vendors/switchery/dist/switchery.min.css" rel="stylesheet">
    <!-- starrr -->
    <link href="vistas/vendors/starrr/dist/starrr.css" rel="stylesheet">
    <!-- bootstrap-daterangepicker -->
    <link href="vistas/vendors/bootstrap-daterangepicker/daterangepicker.css" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="vistas/build/css/custom.css" rel="stylesheet">
  </head>


    <!--*********************************************
    *                     CUERPO DEL CODIGO         *
    *************************************************-->

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">


   <?php
      include "vistas/modulos/cabezote.php";

      if (isset($_GET["ruta"])){

        if ($_GET["ruta"] == "inicio" ||
            $_GET["ruta"] == "calendario"||
                $_GET["ruta"] == "usuarios") {
          include "vistas/modulos/".$_GET["ruta"].".php";
        }else{
          include "vistas/modulos/404.php";
        }
      }

      include "vistas/modulos/footer.php";

    ?>


    <!--*********************************************
    *                     Plugins CSS                *
    *************************************************-->
    <!-- jQuery -->
    <script src="vistas/vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="vistas/vendors/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <!-- FastClick -->
    <script src="vistas/vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="vistas/vendors/nprogress/nprogress.js"></script>
    <!-- Chart.js -->
    <script src="vistas/vendors/Chart.js/dist/Chart.min.js"></script>
    <!-- gauge.js -->
    <script src="vistas/vendors/gauge.js/dist/gauge.min.js"></script>
    <!-- bootstrap-progressbar -->
    <script src="vistas/vendors/bootstrap-progressbar/bootstrap-progressbar.min.js"></script>
    <!-- iCheck -->
    <script src="vistas/vendors/iCheck/icheck.min.js"></script>
    <!-- Skycons -->
    <script src="vistas/vendors/skycons/skycons.js"></script>
    <!-- Flot -->
    <script src="vistas/vendors/Flot/jquery.flot.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.pie.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.time.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.stack.js"></script>
    <script src="vistas/vendors/Flot/jquery.flot.resize.js"></script>
    <!-- Flot plugins -->
    <script src="vistas/vendors/flot.orderbars/js/jquery.flot.orderBars.js"></script>
    <script src="vistas/vendors/flot-spline/js/jquery.flot.spline.min.js"></script>
    <script src="vistas/vendors/flot.curvedlines/curvedLines.js"></script>
    <!-- DateJS -->
    <script src="vistas/vendors/DateJS/build/date.js"></script>
    <!-- JQVMap -->
    <script src="vistas/vendors/jqvmap/dist/jquery.vmap.js"></script>
    <script src="vistas/vendors/jqvmap/dist/maps/jquery.vmap.world.js"></script>
    <script src="vistas/vendors/jqvmap/examples/js/jquery.vmap.sampledata.js"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="vistas/vendors/moment/min/moment.min.js"></script>
    <script src="vistas/vendors/bootstrap-daterangepicker/daterangepicker.js"></script>
    <!-- FullCalendar -->
    <script src="vistas/vendors/moment/min/moment.min.js"></script>
    <script src="vistas/vendors/fullcalendar/dist/fullcalendar.min.js"></script>
    <!-- bootstrap-wysiwyg -->
    <script src="vistas/vendors/bootstrap-wysiwyg/js/bootstrap-wysiwyg.min.js"></script>
    <script src="vistas/vendors/jquery.hotkeys/jquery.hotkeys.js"></script>
    <script src="vistas/vendors/google-code-prettify/src/prettify.js"></script>
    <!-- jQuery Tags Input -->
    <script src="vistas/vendors/jquery.tagsinput/src/jquery.tagsinput.js"></script>
    <!-- Switchery -->
    <script src="vistas/vendors/switchery/dist/switchery.min.js"></script>
    <!-- Select2 -->
    <script src="vistas/vendors/select2/dist/js/select2.full.min.js"></script>
    <!-- Parsley -->
    <script src="vistas/vendors/parsleyjs/dist/parsley.min.js"></script>
    <!-- Autosize -->
    <script src="vistas/vendors/autosize/dist/autosize.min.js"></script>
    <!-- jQuery autocomplete -->
    <script src="vistas/vendors/devbridge-autocomplete/dist/jquery.autocomplete.min.js"></script>
    <!-- starrr -->
    <script src="vistas/vendors/starrr/dist/starrr.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="vistas/build/js/custom.min.js"></script>

      </div>
    </div>
  </body>
</html>
