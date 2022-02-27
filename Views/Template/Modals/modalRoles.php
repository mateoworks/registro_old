<!-- modal -->

<div id="modalFormRol" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="standard-modalLabel"
    aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title" id="titleModal">Nuevo rol</h4>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-hidden="true"></button>
            </div>

            <div class="modal-body">

                <div id="divLoading"></div>
                <form id="formRol" name="formRol">
                    <input type="hidden" id="idRol" name="idRol" value="">
                    <div class="form-group">
                        <label class="control-label">Nombre</label>
                        <input class="form-control" id="txtNombre" name="txtNombre" type="text"
                            placeholder="Nombre del rol" required="">
                    </div>
                    <div class="form-group">
                        <label class="control-label">Descripción</label>
                        <textarea class="form-control" id="txtDescripcion" name="txtDescripcion" rows="2"
                            placeholder="Descripción del rol" required=""></textarea>
                    </div>
                    <div class="form-group">
                        <label for="exampleSelect1">Estado</label>
                        <select class="form-control" id="listStatus" name="listStatus" required="">
                            <option value="1">Activo</option>
                            <option value="2">Inactivo</option>
                        </select>
                    </div>

                    <div class="modal-footer">
                        <button id="btnActionForm" class="btn btn-primary" type="submit"><i
                                class="uil-check-circle"></i><span id="btnText">Guardar</span>
                        </button>&nbsp;&nbsp;&nbsp;
                        <a class="btn btn-secondary" href="#" data-bs-dismiss="modal"><i
                                class="uil-times-circle"></i>Cancelar</a>
                    </div>

                </form>

            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->