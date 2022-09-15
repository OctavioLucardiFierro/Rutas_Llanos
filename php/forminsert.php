<!DOCTYPE html>
<html>
<head>
	
		<h1>Registrar Obras</h1>
		<meta charset="utf-8">
		<a href="index.php"><button>VOLVE PAPA</button></a>
		<link rel = "stylesheet" href = "../css/css_tabla.css">
<br><br>

</head>
<body>

    <form method="post">
    	<input type="text"   name="nombre"      placeholder="Nombre">
    	<input type="text"   name="descripcion" placeholder="Descripcion">
    	<input type="text"   name="sucur"       placeholder="Sucursal">
    	<input type="text"   name="zona"        placeholder="zona">
   		<input type="text"   name="piso"        placeholder="piso"> 
    	<input type="submit" name="boton">
    </form>
	

    <?php
	include("insert.php");
    include("MostrarObras.php");
    ?>

</body>
