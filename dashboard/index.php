<?php require_once "vistas/parte_superior.php"?>

<div class="container">
    

    <div style="float: left; width: 60%;">
        <h1 style="float: left; width: 60%;">Jugadores
        </h1>
        <button style="margin-top: 10px;" type="button" class="btn btn-primary" id="btnSubContratadoNuevo"><i
                class="fas fa-plus"></i> Agregar nuevo elemento</button>
        <hr>
        <table id="tablaJugadores" class="table table-sm table-striped table-bordered table-condensed">
            <thead>
                <tr>
                    <th>id</th>
                    <th>Nombre PJ</th>
                    <th>raza y clase</th>
                    <th>partidas</th>
                    <th>semanas</th>
                    <th>Oro</th>
                    <th>Estado</th>

                </tr>
            </thead>
            <tbody>
                
                <?php /* foreach ($subcontratados as $subcontratado) {
                    $idSubContratado = $subcontratado['idSubContratado'];
                    $direccion = "indexdb.php?table=personal&idSubContratado=" . $idSubContratado;
                    $nombreSubcontratado = $subcontratado['nombre'];

                    ?>
                    <tr>
                        <td style="width:15px"><?php echo $subcontratado['idSubContratado'] ?></td>
                        <td><?php echo '<a  href="' . $direccion . '">' . $nombreSubcontratado . '</a> ' ?></td>
                        <td><?php echo $subcontratado['rfc'] ?></td>
                        <td><?php echo $subcontratado['inss'] ?></td>
                        <td><?php echo $subcontratado['ine'] ?></td>
                        <td><?php echo $subcontratado['curp'] ?></td>
                        <td><?php echo $subcontratado['estado'] ?></td>

                    </tr>
                <?php }*/ ?>

                <tr>
                    <td>kiki290 </td>
                    <td>Clank</td>
                    <td>Plasmoid warlock</td>
                    <td>2</td>
                    <td>4</td>
                    <td>2</td>
                    <td>20</td>

                </tr>


            </tbody>
        </table>
    </div>
    <div style="float: right; width: 35%; margin-left: 20px;">
        <h1><i class="fa fa-info" aria-hidden="true"></i>nformacion</h1>
        <div class="card">
            <div class="card-header">
                <div style="float: left; width: 60%;">
                    <h5 class="card-title">Clank</h5>
                    <h6 class="card-subtitle">Warlock plasmoid</h6>
                </div>
                <div style="float: right;">
                    <?php /*
                    if (!isset($_GET['edit'])) {

                        echo '<a class="fas fa-edit" href="indexdb.php?table=personal&edit=true&idSubContratado=' . $_GET['idSubContratado'] . '"></a> <!-- Icono de editar -->';

                    } else {
                        echo '<a class="fas fa-edit" href="indexdb.php?table=personal&idSubContratado=' . $_GET['idSubContratado'] . '"></a> <!-- Icono de editar -->';
                    }

                    if (!isset($_GET['edit'])) {

                        echo '<i class="fas fa-download"></i> <!-- Icono de descarga -->';

                    } else {
                        echo '<i class="fas fa-upload"></i> <!-- Icono de descarga -->';
                    }

                    */?>

                    <div style="float: right;">


                        <div class="dropdown" style="margin-top: 4px; margin-left: 4px;">
                            <i class="fas fa-cog dropdown-toggle" id="dropdownMenuButton" data-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false"></i>
                            <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a id="btnEliminarPersonal" class="dropdown-item" href="#"><i class="fas fa-trash"></i> Eliminar</a>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body" style="line-height: .8;">

                <?php
                if (!isset($_GET['edit'])) {




                    ?>

                    <h5><strong>Informacion del jugador</strong><i class="fas fa-download"></i></h5>
                    <p><strong>Nombre del pj bien chido </strong></p>
                    <p><strong>ID Discord: </strong> kiki290</p>
                    <p><strong>Raza y clase: </strong>Warlock plasmoid</p>
                    <p><strong>Objeto magico: </strong>Enspelled staff</p>
                    <hr>
                    <h5><strong>Datos de jugador</strong></h5>
                    <p><strong>Partidas jugadas: </strong>2</p>
                    <p><strong>Nivel: </strong>4</p>
                    <p><strong>Semanas: </strong>2</p>
                    <p><strong>Oro: </strong>20</p>
                    <hr>
                    <h5><strong>Datos de cuenta</strong></h5>
                    <p><strong>Nombre: </strong>kiki</p>
                    <p><strong>Contraseña: </strong>contraseña mamalona</p>
                    <?php
                } else {
                    ?>
                    <h5><strong>Informacion de SubContratado </strong><i class="fas fa-upload"></i></h5>
                    <p><strong>Nombre:<input type="text" id="personalNombre"
                                value="<?php echo $subContratadoSeleccionado['nombre'] ?>"> </strong></p>
                    <p><strong>RFC: </strong><input type="text" id="personalRFC"
                            value="<?php echo $subContratadoSeleccionado['rfc'] ?>"></p>
                    <p><strong>INSS: </strong><input type="text" id="personalInss"
                            value="<?php echo $subContratadoSeleccionado['inss'] ?>"></p>
                    <p><strong>INE: </strong><input type="text" id="personalIne"
                            value="<?php echo $subContratadoSeleccionado['ine'] ?>"></p>
                    <p><strong>CURP: </strong><input type="text" id="personalCurp"
                            value="<?php echo $subContratadoSeleccionado['curp'] ?>"></p>
                    <p><strong>Estado: </strong>
                        <select name="estado" id="personalEstado">
                            <option value="activo" <?php if ($subContratadoSeleccionado['estado'] == 'activo')
                                echo 'selected'; ?>>Activo</option>
                            <option value="inactivo" <?php if ($subContratadoSeleccionado['estado'] == 'inactivo')
                                echo 'selected'; ?>>Inactivo</option>
                        </select>
                    </p>
                    <button type="submit" id="btnActualizarPersonal" class="btn btn-primary">Guardar</button>
                    <?php
                }

                $conexion = null;
                ?>





            </div>
        </div>
    </div>
</div>


<!--FIN del cont principal-->
<?php require_once "vistas/parte_inferior.php"?>