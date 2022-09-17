<?php
    include("conexion.php");

	    
        $nombre = trim($_POST['nombre']);
	    $com    = trim($_POST['comentario']);
	   
	    $consulta  = "INSERT INTO `comentarios`(`usuarios`, `comentario`, `fecha_comentario`) VALUES ('$nombre','$com', NOW())";
	    
	    $resultado = mysqli_query($conex,$consulta);

?>