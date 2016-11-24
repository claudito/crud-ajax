<?php

	# conectare la base de datos
    include('../config.php');
    include('../bd/conexion.php');
    $db = new Conexion();
    
    $id         = addslashes($_POST['id']);
    $nombres    = addslashes($_POST['nombres']);
    $apellidos  = addslashes($_POST['apellidos']);
    $usuario    = addslashes($_POST['usuario']);
    $contrasena = addslashes($_POST['contrasena']);
    $tipo       = addslashes($_POST['tipo']); 
	


	 $query   = "UPDATE usuarios SET nombres='".$nombres."',apellidos='".$apellidos."',
                 pass='".$contrasena."',tipo='".$tipo."'
                 WHERE idusuarios='".$id."'";
     $result  = $db->query($query);
     if($result)
     if($result)
     echo '<script>swal("Buen Trabajo", "Información Actualizada", "success")</script>';
     else
     echo '<script>sweetAlert("Ocurrio un error", "Consulte al área de soporte", "error");</script>';


			

?>