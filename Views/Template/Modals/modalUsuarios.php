<!--Modal-->
<div class="modal fade" id="modalFormUsuario" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header headerRegister">
                <h5 class="modal-title" id="titleModal"> Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hiden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="tile">
                    <div class="tile-body">
                        <form id="formUsuario" name="formUsuario" class="form.horizontal">
                            <input type="hidden" id="idUsuario" name="idUsuario" value="">
                            <p class="text-primary">Todos los campos son obligatorios.</p>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtIdentificacion">Identificacion</label>
                                    <input type="text" class="form-control" id="txtIdentificacion" name="txtIdentificacion" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtNombre">Nombres</label>
                                    <input type="text" class="form-control" id="txtNombre" name="txtNombre" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txtApellidos">Apellidos</label>
                                    <input type="text" class="form-control" id="txtApellidos" name="txtApellidos" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtTelefono">Telefono</label>
                                    <input type="text" class="form-control" id="txtTelefono" name="txtTelefono" required="">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="txtEmail">Email</label>
                                    <input type="text" class="form-control" id="txtEmail" name="txtEmail" required="">
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="listRolid">Tipo Usuario</label>
                                    <select class="form-control" id="listRolid" name="listRolid" required></select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="listStatus">Estado</label>
                                    <select class="form-control" id="listStatus" name="listStatus" required>
                                        <option value="1">Activo</option>
                                        <option value="2">Inactivo</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="txtPassword">Contraseña</label>
                                    <input type="password" class="form-control" id="txtPassword" name="txtPassword">
                                </div>
                            </div>
                            
                            <div class="tile-footer">
                                <button id="btnActionForm" class="btn btn-primary" type="submit"><i class="fa fa-fw fa-lg fa-check-circle"></i>Guardar</button>&nbsp;&nbsp;&nbsp;
                                <button class="btn btn-danger" type="button" data-dismiss="modal"><i class="fa fa-fw fa-lg fa-check-circle"></i>Cerrar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>