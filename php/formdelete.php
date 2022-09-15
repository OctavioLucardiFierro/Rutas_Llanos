<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
echo $_SESSION['nombre'];
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion  
$varsesion = $_SESSION['nombre'];
?>

<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "css/css_tabla.css">
		<title>Borrar una Obra</title>
		<h1>Adios a la Obra</h1>
		<meta charset="utf-8">
		<a href="index.php"><button>VOLVE PAPA</button></a>
<br><br>

</head>
<body>

	<?php
		if ($varsesion == null)
		{
			header("location: form-login.php");
		}	
	?>

    <form method="post">
		<input type= "text"   name="id"          placeholder="ID">	
		<input type="submit" name="boton">
    </form>
	

    <?php
	include("delete.php");
	include("MostrarObras.php");
    ?>

</body>
