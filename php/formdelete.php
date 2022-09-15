<!DOCTYPE html>
<html>
<head>
<link rel = "stylesheet" href = "css/css_tabla.css">

		<h1>Modifixcate la Obra</h1>
		<meta charset="utf-8">
		<a href="index.php"><button>VOLVE PAPA</button></a>
<br><br>

</head>
<body>

    <form method="post">
		<input type= "text"   name="id"          placeholder="ID">	
    </form>
	

    <?php
	include("delete.php");
	include("MostrarObras.php");
    ?>

</body>
