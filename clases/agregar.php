<?php

	# conectare la base de datos
    include('../config.php');
    include('../bd/conexion.php');
    $db = new Conexion();
    		
    $nombres    = addslashes($_POST['nombres']);
    $apellidos  = addslashes($_POST['apellidos']);
    $usuario    = addslashes($_POST['usuario']);
    $contrasena = addslashes($_POST['contrasena']);
    $tipo       = addslashes($_POST['tipo']); 
		

    $query   = "SELECT * FROM usuarios WHERE user='".$usuario."'";
    $result  = $db->query($query);
    $numfila = $result->num_rows;
	if ($numfila>0) 
	{
	  echo '<script>sweetAlert("El usuario ya esta registrado", "Intente de Nuevo", "error");</script>';
	}
	else
	{
	 $query   = "INSERT INTO usuarios(nombres,apellidos,user,pass,tipo)
	 VALUES('".$nombres."','".$apellidos."','".$usuario."','".$contrasena."','".$tipo."')";
     $result  = $db->query($query);
     if($result)
     echo '<script>swal("Buen Trabajo", "Registro exitoso", "success")</script>';
     else
     echo '<script>sweetAlert("Ocurrio un error", "Consulte al área de soporte", "error");</script>';
	}

			

?>