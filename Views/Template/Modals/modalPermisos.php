<!-- Modal -->
<div id="modalPermisos" class="modal fade modalPermisos" tabindex="-1" role="dialog"
    aria-labelledby="standard-modalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titleModal">Permisos roles de usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">


                <form action="" id="formPermisos" name="formPermisos">
                    <input type="hidden" id="idrol" name="idrol" value="<?= $data['idrol']; ?>" required="">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Módulo</th>
                                    <th>Ver</th>
                                    <th>Crear</th>
                                    <th>Actualizar</th>
                                    <th>Eliminar</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php 
                                $no=1;
                                $modulos = $data['modulos'];
                                for ($i=0; $i < count($modulos); $i++) { 

                                    $permisos = $modulos[$i]['permisos'];
                                    $rCheck = $permisos['r'] == 1 ? " checked " : "";
                                    $wCheck = $permisos['w'] == 1 ? " checked " : "";
                                    $uCheck = $permisos['u'] == 1 ? " checked " : "";
                                    $dCheck = $permisos['d'] == 1 ? " checked " : "";

                                    $idmod = $modulos[$i]['id'];
                            ?>
                                <tr>
                                    <td>
                                        <?= $no; ?>
                                        <input type="hidden" name="modulos[<?= $i; ?>][id]" value="<?= $idmod ?>"
                                            required>
                                    </td>
                                    <td>
                                        <?= $modulos[$i]['nombre']; ?>
                                    </td>
                                    <td>
                                        <div class="toggle-flip">
                                            <label>
                                                <input type="checkbox" name="modulos[<?= $i; ?>][r]"
                                                    <?= $rCheck ?>><span class="flip-indecator" data-toggle-on="ON"
                                                    data-toggle-off="OFF"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="toggle-flip">
                                            <label>
                                                <input type="checkbox" name="modulos[<?= $i; ?>][w]"
                                                    <?= $wCheck ?>><span class="flip-indecator" data-toggle-on="ON"
                                                    data-toggle-off="OFF"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="toggle-flip">
                                            <label>
                                                <input type="checkbox" name="modulos[<?= $i; ?>][u]"
                                                    <?= $uCheck ?>><span class="flip-indecator" data-toggle-on="ON"
                                                    data-toggle-off="OFF"></span>
                                            </label>
                                        </div>
                                    </td>
                                    <td>
                                        <div class="toggle-flip">
                                            <label>
                                                <input type="checkbox" name="modulos[<?= $i; ?>][d]"
                                                    <?= $dCheck ?>><span class="flip-indecator" data-toggle-on="ON"
                                                    data-toggle-off="OFF"></span>
                                            </label>
                                        </div>
                                    </td>
                                </tr>
                                <?php 
                                $no++;
                            }
                            ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-center">
                        <button class="btn btn-success" type="submit"><i class="uil-check-circle"
                                aria-hidden="true"></i> Guardar</button>
                        <button class="btn btn-danger" type="button" data-dismiss="modal">
                            <i class="uil-times-circle" aria-hidden="true"></i>
                            Salir</button>
                    </div>
                </form>


            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->