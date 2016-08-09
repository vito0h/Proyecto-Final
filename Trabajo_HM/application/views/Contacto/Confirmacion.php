<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">

                    <h1>Contacto </h2>
                </div>
            </div>
    <div class="container">
        <div class="row">
            <div class="col-sm-2">
            
            </div>
            <div class="col-sm-6">

    <br>
    
        <legend>Desea <?=$datos->accion?> Teléfono del contacto de <br> <?= $datos->Nombre ?> ?</legend>
        
        <form class="form-horizontal" method="post" action="<?=base_url()?>index.php/contacto/<?=$datos->accion?>TelefonoContacto">
            <fieldset>
                <div class="form-group">
                    <div class="col-lg-10 col-lg-offset-2">
                        <input type="hidden" class="form-control" name="Rut" value="<?=$datos->Rut?>">
                        <input type="hidden" class="form-control" name="Tel1" value="<?=$datos->Tel1?>">
                        <input type="hidden" class="form-control" name="Tipo" value="<?=$datos->Tipo?>">
                        <input type="text" class="form-control" name="Tel2" value="<?=$datos->Tel2?>" placeholder="+569123">
                        <button name="confirmacion" value="Si" type="submit" class="btn btn-primary">Si</button>
                        <button name="confirmacion" value="No" type="submit" class="btn btn-primary">No</button>
                        <a href="<?=base_url()?>index.php/contacto" class="btn btn-primary">Volver</a>
                    </div>
                </div>
            </fieldset>
        </form>
            </div>
            <div class="col-sm-4">
            
            </div>
        </div>
    </div>
</div>