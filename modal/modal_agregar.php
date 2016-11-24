<form id="guardarDatos">
<div class="modal fade" id="dataRegister" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Agregar Usuario</h4>
      </div>
      <div class="modal-body">
          <div id="datos_ajax_register"></div>
          <div class="form-group">
          <label class="control-label">Nombres:</label>
          <input type="text" class="form-control" id="nombres" name="nombres" required maxlength="100" autofocus="" onchange="Mayusculas(this)" >
          </div>

          <div class="form-group">
          <label class="control-label">Apellidos:</label>
          <input type="text" class="form-control" id="apellidos" name="apellidos" required maxlength="100" onchange="Mayusculas(this)">
          </div>

          <div class="form-group">
          <label for="moneda0" class="control-label">Usuario:</label>
          <input type="text" class="form-control" id="usuario" name="usuario" required maxlength="8">
          </div>

          <div class="form-group">
          <label  class="control-label">Contraseña:</label>
          <input type="password" class="form-control" id="contrasena" 
          name="contrasena" required maxlength="8">
          </div>

          <div class="form-group">
          <label for="">Tipo</label>
          <select name="tipo" id="idtipo" class="form-control" required="">
          <option value="">[Seleccionar]</option>
          <option value="admin">admin</option>
          <option value="user">user</option>
          </select>
          </div>

            


	
          
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Guardar datos</button>
      </div>
    </div>
  </div>
</div>
</form>