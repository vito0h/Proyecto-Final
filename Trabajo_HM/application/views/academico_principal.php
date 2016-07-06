<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Portal Académicos </title> <!--Titulo pestaña-->
    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/timeline.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="<?php echo base_url(); ?>assets/dist/css/sb-admin-2.css" rel="stylesheet">


    <!-- Custom Fonts -->
    <link href="<?php echo base_url(); ?>assets/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div id="wrapper">
        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               <a class="navbar-brand" href="<?php echo base_url()?>index.php/Controlador/logueado_contador">Portal Académicos, Bienvenido !!poner Nombre profesor o secretaria  aquí!!</a>
            </div>
            <!-- /.navbar-header -->

            <ul class="nav navbar-top-links navbar-right">

                <!-- /.dropdown -->


                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li>
                            <a href="#"><i class="fa fa-user fa-fw"></i> Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                           <a href="<?php echo base_url() ?>index.php/Controlador/cerrar_sesion"><i class="fa fa-sign-out fa-fw"></i> Desconectar</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->
            <!--MODULO DERECHO AQUIIIIII ABAJO-->

       
        
            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">

                       <!--INICIO-->
                        <li>
                            <a href="#"><i class="fa fa-laptop"></i><b>Inicio </b><span class="fa arrow"></span></a>
                        </li>

                        <li>
                            <a href="#"><i class="fa fa-table fa-fw"></i><b>Ver Asistencia </b><span class="fa arrow"></span></a>
                        </li>

                        <!--opciones agenda-->
                        <li>
                            <a href="#"><i class="fa fa-edit fa-fw"></i> Agenda Telefónica <span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="#"><i class="fa fa-edit fa-fw"></i> Ingresar Número<span class="fa arrow"></span></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-search-plus"></i> Buscar Número<span class="fa arrow"></span></a>
                                </li>
                            </ul>  
                        </li>

                        <!--editar informacion academico o secetaria-->
                        <li>
                            <a href="#"><i class="fa fa-gear fa-fw"></i><b>Editar Información </b><span class="fa arrow"></span></a>
                        </li>

                       
                        <!--opciones prerequisito-->

                        <li>

                            <a href="#"><i class="fa fa-edit fa-fw"></i> Inscripción Pre-Requisito <span class="fa arrow"></span></a>

                            <ul class="nav nav-second-level">

                                <li>
                                    <a href="#"><i class="fa fa-edit fa-fw"></i> Buscar solicitud Inscripción Pre-Requisito<span class="fa arrow"></span></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-search-plus"></i> Historial Inscripción Pre-Requisito<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                        </li>

                        <!--3ero Compras-->
                        <li>
                            <a href="#"><i class="fa fa-tasks fa-fw"></i> Modificación de Inscripción<span class="fa arrow"></span></a>
                            <ul class="nav nav-second-level">
                                
                                <li>
                                    <a href="#"><i class="fa fa-edit fa-fw"></i> Buscar solicitud de Modificación <span class="fa arrow"></span></a>
                                </li>

                                <li>
                                    <a href="#"><i class="fa fa-search-plus"></i> Historial Inscripción Pre-Requisito<span class="fa arrow"></span></a>
                                </li>
                            </ul>
                        </li>

                    </ul>
                    <center>
                    <br>
                    <br>
                    <img class="img-responsive" src="./imagenes/2.gif"/ width='100' height='100'>
                    </center>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
        </nav>
    </div>
   
    <!-- /#wrapper -->
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Bienvenido al sistema de apoyo </h1>
                </div>
            </div>
               

            <div class="row"><!-- 2 -->
                <div class="col-lg-8"><!-- 3 -->
                    <div class="panel panel-default" ><!-- 4 -->

                        <div class="panel-heading">
                                Imágenes
                        </div>

                        <div class="panel-body"><!-- 6 -->
                                <img class="img-responsive" src="./imagenes/3.jpg"/>
                                           
                            
                        </div><!-- 6 -->      
                    </div><!-- 4 -->
                </div><!-- 3 -->
            </div><!-- 2 -->
        </div><!-- 1 -->

    <!-- jQuery -->
    <script src="<?php echo base_url(); ?>assets/bower_components/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/metisMenu/dist/metisMenu.min.js"></script>
    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url(); ?>assets/dist/js/sb-admin-2.js"></script>
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
        $(document).ready(function () {
            $('#dataTables-example').DataTable({
                responsive: true
            });
        });
    </script>
</body>
</html>