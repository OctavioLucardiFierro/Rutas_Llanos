<?php
    include("conexion.php");

<<<<<<< HEAD
=======

>>>>>>> 9cd9560e8aa17caf8bda1daf81edaf4c70db2e86
	    
        $nombre = trim($_POST['nombre']);
	    $com    = trim($_POST['comentario']);
	   
	    $consulta  = "INSERT INTO `comentarios`(`usuarios`, `comentario`, `fecha_comentario`) VALUES ('$nombre','$com', NOW())";
	    
	    $resultado = mysqli_query($conex,$consulta);
<<<<<<< HEAD
=======

>>>>>>> 9cd9560e8aa17caf8bda1daf81edaf4c70db2e86

?>