<?php

	# conectare la base de datos
    include('../config.php');
    include('../bd/conexion.php');
    $db = new Conexion();
    		
    $id    = addslashes($_POST['id']);

		

	 $query   = "DELETE FROM usuarios WHERE idusuarios='".$id."'";
     $result  = $db->query($query);
     if($result)
     echo '<script>swal("Buen Trabajo", "Registro Eliminado", "success")</script>';
     else
     echo '<script>sweetAlert("Ocurrio un error", "consultar al área de soporte", "error");</script>';
	

			

?>