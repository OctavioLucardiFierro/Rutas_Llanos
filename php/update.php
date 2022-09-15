<?php
    include("conexion.php");

if (isset($_POST['boton'])) {

    if (strlen($_POST['id']) >= 1 && strlen($_POST['nombre']) >= 1 && strlen($_POST['descripcion']) >= 1 && strlen($_POST['sucur']) >= 1 && strlen($_POST['zona']) >= 1 && strlen($_POST['piso'])) {
		
		$id     = trim($_POST['id']);
        $nombre = trim($_POST['nombre']);
	    $des    = trim($_POST['descripcion']);
	    $sucur  = trim($_POST['sucur']);
	    $zona   = trim($_POST['zona']);
   		$piso   = trim($_POST['piso']);
	    $consulta  = "UPDATE `obras` SET `nombre_de_la_obra`='$nombre',`descripsion`='$des',`sucursal_museo`='$sucur',`zona`='$zona',`piso`='$piso'  WHERE id = '$id'  ";
	   
	    $resultado = mysqli_query($conex,$consulta);
	}
}

?>