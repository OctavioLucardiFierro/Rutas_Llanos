<?php
    include("conexion.php");

if (isset($_POST['boton'])) {
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['comentario']) >= 1) {
	    
        $nombre = trim($_POST['nombre']);
	    $com    = trim($_POST['comentario']);
	   
	    $consulta  = "INSERT INTO `comentarios`(`usuarios`, `comentario`, `fecha_comentario`) VALUES ('$nombre','$com', NOW())";
	    
	    $resultado = mysqli_query($conex,$consulta);
    }
}

?>