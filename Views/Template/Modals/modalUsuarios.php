<!-- Modal -->
<div id="modalFormUsuario" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titleModal">Agregar usuarios</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">

                <div id="divLoading"></div>

                <form id="formUsuario" name="formUsuario" class="form-horizontal">
                    <input type="hidden" id="idUsuario" name="idUsuario" value="">
                    <p class="text-primary">Todos los campos son obligatorios.</p>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtNombre">Nombres</label>
                            <input type="text" class="form-control valid validText" id="txtNombre" name="txtNombre"
                                required="">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtApellido">Apellidos</label>
                            <input type="text" class="form-control valid validText" id="txtApellido" name="txtApellido"
                                required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtTelefono">Teléfono</label>
                            <input type="text" class="form-control valid validNumber" id="txtTelefono"
                                name="txtTelefono" required="" onkeypress="return controlTag(event);">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="txtEmail">Email</label>
                            <input type="email" class="form-control valid validEmail" id="txtEmail" name="txtEmail"
                                required="">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="listRolid">Tipo usuario</label>
                            <select class="form-control" data-live-search="true" id="listRolid" name="listRolid"
                                required>
                            </select>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="listStatus">Status</label>
                            <select class="form-control selectpicker" id="listStatus" name="listStatus" required>
                                <option value="1">Activo</option>
                                <option value="2">Inactivo</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="txtPassword">Password</label>
                            <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                                class="uil-check-circle"></i><span id="btnText"> Guardar</span>
                        </button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="#" data-bs-dismiss="modal"><i class="uil-times-circle"></i>
                            Cancelar</a>
                    </div>
                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal -->
<div id="modalViewUser" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titleModal">Datos del usuario</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">
                <table class="table table-bordered">
                    <tbody>
                        <tr>
                            <td>Identificación:</td>
                            <td id="celIdentificacion">654654654</td>
                        </tr>
                        <tr>
                            <td>Nombres:</td>
                            <td id="celNombre">Miguel</td>
                        </tr>
                        <tr>
                            <td>Apellidos:</td>
                            <td id="celApellido">Miguel</td>
                        </tr>
                        <tr>
                            <td>Teléfono:</td>
                            <td id="celTelefono">Miguel</td>
                        </tr>
                        <tr>
                            <td>Email (Usuario):</td>
                            <td id="celEmail">Miguel</td>
                        </tr>
                        <tr>
                            <td>Tipo Usuario:</td>
                            <td id="celTipoUsuario">Miguel</td>
                        </tr>
                        <tr>
                            <td>Estado:</td>
                            <td id="celEstado">Miguel</td>
                        </tr>
                        <tr>
                            <td>Fecha registro:</td>
                            <td id="celFechaRegistro">Miguel</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->