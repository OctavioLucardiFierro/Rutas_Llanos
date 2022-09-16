<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "../css/css_tabla.css">
		<title> Obras </title>
		
		<meta charset="utf-8">
		<a href="index.php"><button>VOLVE PAPA</button></a>
<br><br>

</head>
<body>

    <br>
    <br>
    
<div class="container1" >

        <a href="forminsert.php"><button>Alta de Obra</button></a>
			
		<a href="formupdate.php"><button>Modificar Obra</button></a>
			
	    <a href="formdelete.php"><button>Cancelar Obra</button></a>
			

</div>



</body>
