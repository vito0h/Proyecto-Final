<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">

                    <h1>Contacto </h2>
                </div>
            </div>
    <div class="container">
        <br>
        <div class="row">
            <div class="col-sm-4">
                
                <img style="height: 300px !important;width: 300px !important;" src="<?=base_url()?>imagenes/Imagencontacto.png"> 
                
            </div>
            <div class="col-sm-4">
                <h2><?=$datos[0]->nombres ?> <?=$datos[0]->apellido_paterno ?> <?=$datos[0]->apellido_materno ?></h2>
                <table class="table table-striped" align="center">
                    <tbody>
                        <tr></tr>
                        <tr>
                            <th>Estado</th>
                            <th><?=$datos[0]->estado ?></th>
                        </tr>
                        <tr>
                            <th>Correo</th>
                            <th><strong><?=$datos[0]->correo_electronico ?></strong></th>
                        </tr>
                        
                        <tr>
                            <th>Teléfono</th>
                            <th></th>
                        </tr>
                        <?php $i=1; foreach($datos as $Alumno){ ?>
                            <tr><th><?php echo $i.")";?></th>
                                <th><a><?=$Alumno->Telefono?></a></th>
                            </tr>
                        <?php $i=$i+1;}?>
                    </tbody>
                </table>    
                <form method="post" action="<?=base_url()?>index.php/Contacto/AccionContacto">
                    <input type="hidden" name="Rut" value="<?=$datos[0]->rut?>">
                    <input type="hidden" name="Telefono" value="<?=$datos[0]->Telefono?>">
                    <input type="submit" value="Agregar Telefono" name="Accion" class="btn btn-primary">
                    <a href="<?=base_url()?>index.php/contacto" class="btn btn-primary"> Volver </a>
                </form>    
                
            </div>
            <div class="col-sm-4">
                
            </div>
        </div>
    </div>
    <br>
</div>