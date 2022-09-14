<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "css/css_tabla.css">

		<h1>Modifixcate la Obra</h1>
		<meta charset="utf-8">

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
	include("update.php");
	include("MostrarObras.php");
    ?>

</body>
