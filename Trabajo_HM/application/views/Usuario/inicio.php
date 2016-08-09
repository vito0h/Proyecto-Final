
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                
            </div>
            <div class="col-lg-4">
                
                <form class="form-signin" method="post" action="<?=base_url()?>index.php/Inicio/validar">
                    <h2 align="center" class="form-signin-heading">Ingreso</h2>
                    <CENTER><img src="<?=base_url()?>imagenes/2.gif"></CENTER>
                    <div class="form-group">
                      <label class="control-label" for="focusedInput">Rut</label>
                      <input name="Rut" class="form-control" id="focusedInput" type="number" value="" placeholder="12345678">   
                    </div>

                    <div class="form-group">
                      <label class="control-label" for="disabledInput">Contraseña</label>
                      <input name="Clave" class="form-control" id="disabledInput" type="password" placeholder="*****">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">Ingresar</button>
                </form>
            </div>    
            <div class="col-lg-4">
            
            </div>
        </div>
    </div> <!-- /container -->


    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="<?=base_url()?>/assets/js/ie10-viewport-bug-workaround.js"></script>

x