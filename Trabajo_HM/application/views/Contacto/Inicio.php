<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-8">

                    <h1>Contacto </h2>
                </div>
            </div>
    <div class="container">
        
        <nav class="navbar navbar-default">
            <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">Buscar Contacto</a>
                </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                    <form class="navbar-form navbar-left" method="post" action="<?=base_url()?>index.php/contacto/filtro">
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Nombre</span>
                            <input name="Rut" type="text" class="form-control" placeholder="ni puntos ni digito veri">
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Tipo</span>
                            <select name="Tipo" class="form-control" id="Estado">
                                  <option value="Elija">Elija</option>
                                  <option value="Profesor">Profesor</option>
                                  <option value="Alumno">Alumno</option>
                            </select>
                        </div>
                        <div class="input-group">
                            <span class="input-group-addon" id="basic-addon1">Numero</span>
                            <input name="Numero" type="TEXT" class="form-control" placeholder="ni puntos ni digito veri">
                        </div>
                        <input type="submit" class="btn btn-default" value="Buscar">
                    </form>

                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <nav class="navbar navbar-default">
        <div class="container">
          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            
          </div>
          <div class="navbar-collapse collapse">
            <ul class="nav navbar-nav">
                <form action="<?=base_url()?>index.php/contacto/Letra" method="post">
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="A" class="btn btn-xs btn-link">A</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="B" class="btn btn-xs btn-link">B</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="C" class="btn btn-xs btn-link">C</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="D" class="btn btn-xs btn-link">D</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="E" class="btn btn-xs btn-link">E</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="F" class="btn btn-xs btn-link">F</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="G" class="btn btn-xs btn-link">G</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="H" class="btn btn-xs btn-link">H</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="I" class="btn btn-xs btn-link">I</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="J" class="btn btn-xs btn-link">J</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="K" class="btn btn-xs btn-link">K</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="L" class="btn btn-xs btn-link">L</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="M" class="btn btn-xs btn-link">M</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="N" class="btn btn-xs btn-link">N</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="Ñ" class="btn btn-xs btn-link">Ñ</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="O" class="btn btn-xs btn-link">O</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="P" class="btn btn-xs btn-link">P</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="Q" class="btn btn-xs btn-link">Q</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="R" class="btn btn-xs btn-link">R</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="S" class="btn btn-xs btn-link">S</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="T" class="btn btn-xs btn-link">T</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="U" class="btn btn-xs btn-link">U</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="V" class="btn btn-xs btn-link">V</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="W" class="btn btn-xs btn-link">W</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="X" class="btn btn-xs btn-link">X</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="Y" class="btn btn-xs btn-link">Y</button></a>
                    <a class="navbar-brand" href=""><button type="submit" name="Letra" value="Z" class="btn btn-xs btn-link">Z</button></a>
                </form>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>
        <table class="table table-condensed">
            
            <thead>
                <th>Nombre / <button type="button" class="btn btn-xs btn-primary">V</button></th>
                <th>Correo / <button href="" type="button" class="btn btn-xs btn-primary">V</button></th>
                <th>Telefonos / <button href="" type="button" class="btn btn-xs btn-primary">V</button></th>
                <th>Tipo</th>
                <th>Acción </th>                
            </thead>
            <tbody>
                <?php if($datos!=FALSE){ foreach($datos as $Alumno){ ?>
                <tr>
                    <td><?=$Alumno->nombres?> <?=$Alumno->apellido_paterno?> <?=$Alumno->apellido_materno?></td>
                    <td><?=$Alumno->correo_electronico?></td>
                    <td><?=$Alumno->Telefono?></td>
                    <td><?php if($Alumno->Parte==1){echo "Funcionario";}else{echo "Alumno";} ?> <?=$Alumno->estado?></td>
                    <td><form method="post" action="<?=base_url()?>index.php/Contacto/AccionContacto">
                        <input type="hidden" value="<?=$Alumno->Telefono?>" name="Telefono">
                        <input type="hidden" value="<?=$Alumno->rut?>" name="Rut">
                        <input type="hidden" value="<?=$Alumno->Parte?>" name="Tipo">
                        <button type="submit" value="Ver" name="Accion" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
                        <?php if($Alumno->Telefono!=''){ ?>
                        <button type="submit" value="Borrar" name="Accion" class="btn btn-danger"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></button>
                        <button type="submit" value="Modificar" name="Accion" class="btn btn-primary"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></button>
                        <?php }?>
                        <button type="submit" value="Agregar Telefono" name="Accion" class="btn btn-success"><span class="glyphicon glyphicon-plus" aria-hidden="true"></span></button>
                        </form>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
        <?php }else{?>
                    <div class="alert alert-info" role="alert">
        <strong>No hay contactos!</strong>
      </div>
                
                <?php }?>
    </div>    

</div>