<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];


?>

<!DOCTYPE html>
		<html>
		<head>
			<link rel="stylesheet" href="../css/css_general.css">
			<!--<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">-->
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
				<h1>¿Que va a hacer? <?php $_SESSION['nombre'];  ?></h1>
				<meta charset="utf-8">

		<br><br>

		</head>
		<body>

		<?php
			if ($varsesion == null)
			{
				header("location: form-login.php");
			}
		
		?>

		<div class="container1">
		<a href="obra.php"><button>Gestion de OBRAs</button></a>									
		</div>
		
		<br>

		<div class="container1">
		<a href="mapas.php"><button>Gestion de Mapas</button></a>
    	</div>

		<br>

		<div class="container1">
		<a href="turnos.php"><button>Alta de Turnos</button></a>
    	</div>

		<br>

		<div class="container1">
		
    	</div>

		<div class="container1">
		<br>
		<a href="cerrar.php"><button>CERRAR SESION</button></a>
		</div>

		</body>
</html>