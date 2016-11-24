<?php 
include('../config.php');
include('../bd/conexion.php');
$db     = new Conexion();
$query  = "SELECT * FROM usuarios";
$result = $db->query($query);
 ?>

 <div class="table-responsive">
 	<table id="consulta" class="table table-bordered table-condensed">
 		<thead>
 			<tr>
 				<th>Código</th>
 				<th>Nombre</th>
 				<th>Apellidos</th>
 				<th>Usuario</th>
 				<th>Contraseña</th>
 				<th>Tipo</th>
 				<th>Acciones</th>
 			</tr>
 		</thead>
 		<tbody>
 		<?php 
        while ($row = mysqli_fetch_array($result))
         {
        ?>
		<tr>
		<td><?php echo $row['idusuarios']; ?></td>
		<td><?php echo $row['nombres']; ?></td>
		<td><?php echo $row['apellidos']; ?></td>
		<td><?php echo $row['user']; ?></td>
		<td><?php echo substr(md5($row['pass']),0,10); ?></td>
		<td><?php echo $row['tipo']; ?></td>
		<td>
		<button type="button" class="btn btn-info btn-sm" data-toggle="modal" data-target="#dataUpdate" data-id="<?php echo $row['idusuarios']?>" data-nombres="<?php echo $row['nombres']?>" data-apellidos="<?php echo $row['apellidos']?>" data-usuario="<?php echo $row['user']?>" data-contrasena="<?php echo $row['pass']?>" data-tipo="<?php echo $row['tipo']?>"><i class='glyphicon glyphicon-edit'></i> Modificar</button>
		<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#dataDelete" data-id="<?php echo $row['idusuarios']?>"  ><i class='glyphicon glyphicon-trash'></i> Eliminar</button>
		</td>
		</tr>
        <?php
         }
 		 ?>
 		</tbody>
 	</table>
 </div>

 <script>
 $(document).ready(function() {
    $('#consulta').DataTable();
} );
 </script>