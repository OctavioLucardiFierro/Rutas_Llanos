<?php
    include("conexion.php");

if (isset($_POST['boton'])) {

    if (strlen($_POST['id']) >= 1 ) {
		
		$id     = trim($_POST['id']);
    
	    $consulta  = "DELETE FROM `obras` WHERE id = '$id' ";
	   
	    $resultado = mysqli_query($conex,$consulta);
	}
}

?>