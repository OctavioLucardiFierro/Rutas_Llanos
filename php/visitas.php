<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "../css/css_tabla.css">
		<title> PROXIMAMENTE.TXT </title>
		
		<meta charset="utf-8">
		<a href="index.php"><button>VOLVE PAPA</button></a>
<br><br>

</head>
<body>

<div class="container1">

        <a href="proximamente.php"><button>Alta de Visita</button></a>
			<br>
			<br>
		<a href="proximamente.php"><button>Modificar Visita</button></a>
			<br>
			<br>
	    <a href="proximamente.php"><button>Borrar Visita</button></a>
			<br>
			<br>	


</div>



</body>