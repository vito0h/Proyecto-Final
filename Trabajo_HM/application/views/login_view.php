<!DOCTYPE html>
<html lang = "en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-Type" context="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="author" content="Dashboard">
    <meta name="keyword" content="Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">

    <title>Portal UCM</title>
    <meta name="description" content="">

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
    

    <script src='<?php echo base_url('assets/js/jquery.min.js') ?>'></script>
    <script src='<?php echo base_url('assets/js/bootstrap.min.js') ?>'></script>





</head>
<body>
<br>
<br>
<br>
<div class="container">
    <div class="col-md-4"></div>
    <div class="col-md-4">     

        <div class="form-login">
            <center>
            <h2 class="form-login-heading">INICIA SESIÓN</h2>
            </center>
            <center>
            <img class="img-responsive" src="./imagenes/2.gif"/ width='100' height='100'>
            </center>
            <br>
            <div class="login-wrap">
              <?php echo validation_errors();?>
              <?php echo form_open('login');?>

                

                <input type="text" name="username" class="form-control" placeholder="Rut" autofocus value="<?php echo set_value('usernamelogin'); ?>">
                <br>
                <input type="password" name="password" class="form-control" placeholder="Contraseña" value="<?php echo set_value('passwordlogin'); ?>">
                <br>
                <button class="btn btn-theme btn-block" href="index.html" type="submit"><i class="fa fa-lock"></i> Ingresar</button>
                <br>
                <p class="pull-right">¿No tienes cuenta? <a href='#' class="navbar-link">Regístrate aquí</a></p>
                <br>
                <br>
            </div>
        </div>
    </div>
    
    <?php echo form_close() ?>
</div>

</body>