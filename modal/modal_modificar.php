<form id="actualidarDatos" name="actualizarDatos">
<div class="modal fade" id="dataUpdate" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="exampleModalLabel">Actualizar Usuario</h4>
      </div>
      <div class="modal-body">
			<div id="datos_ajax"></div>

<input type="hidden" class="form-control" id="id" name="id">

<div class="form-group">
<label  class="control-label">Nombres</label>
<input type="text" class="form-control" id="nombres" name="nombres" required maxlength="100"onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label class="control-label">Apellidos</label>
<input type="text" class="form-control" id="apellidos" name="apellidos" required maxlength="100" onchange="Mayusculas(this)">
</div>

<div class="form-group">
<label  class="control-label">Usuario</label>
<input type="text" class="form-control" id="usuario" name="usuario" required maxlength="8" readonly="">
</div>

<div class="form-group">
<label  class="control-label">Contraseña:</label>
<input type="password" class="form-control" id="contrasena" name="contrasena" required
 maxlength="8">
</div>
 
<div class="form-group">
<div class="row">
<div class="col-md-4">
<label for="">Tipo</label>
<input type="text" class="form-control" id="tipo" readonly="">
</div>
<div class="col-md-8">
<label for="">Cambiar</label>
<select name="tipo" name="tipo" class="form-control" required="">
<option value="">[Seleccionar]</option>
<option value="admin">admin</option>
<option value="user">user</option>
</select>
</div>
</div>
</div>



<script>
var valor = document.getElementById("tipo").value;
document.write(valor);
</script>
        
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
        <button type="submit" class="btn btn-primary">Actualizar datos</button>
      </div>
    </div>
  </div>
</div>
</form>