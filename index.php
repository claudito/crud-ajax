<?php  
include('config.php');
include('bd/conexion.php');

 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
     <title>Consulta</title>
    <?php include('enlaces/principal.php'); ?>
	<?php include('enlaces/datatables.php'); ?>
    <?php include('enlaces/sweetalert.php'); ?>
  </head>
  <body>
  <?php include("modal/modal_agregar.php");?>
  <?php include("modal/modal_modificar.php");?>
  <?php include("modal/modal_eliminar.php");?>
    <div class="container-fluid">
    <br>
     <div class="row">
     <div class="col-md-12">
    <div class="pull-right">
     <div class="form-group">
     <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#dataRegister"><i class='glyphicon glyphicon-user'></i> Agregar Usuario</button>
     </div>
    </div>
     </div>
     </div>
		
	  <div class="row">
		<div class="col-xs-12">
		<div class="panel panel-default">
			<div class="panel-heading">
		    Lista de Usuarios
			</div>
			<div class="panel-body">

			<div id="loader" class="text-center"> <img src="img/loader.gif"></div>
			<div class="datos_ajax"></div><!-- Datos ajax Final -->
			<div class="outer_div"></div><!-- Datos ajax Final -->
			
			</div>
		</div>
		</div>
	  </div>


	</div>

	<script src="js/app.js"></script>
	<script>
		$(document).ready(function(){
			load(1);
		});
	</script>
 </body>
</html>