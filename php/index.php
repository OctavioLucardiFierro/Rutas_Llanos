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

		<a href="forminsert.php"><button>Alta de OBRA</button></a>
			<br>
			<br>
		<a href="formupdate.php"><button>MODIFICAR OBRA</button></a>
			<br>
			<br>
		<a href="formdelete.php"><button>BORRAR OBRA</button></a>
			<br>
			<br>
									
		</div>
		
		<br>
		<div class="container1">
		<a href="proximamente.php"><button>Alta de Turno</button></a>
			<br>
			<br>
		<a href="proximamente.php"><button>Modificar Turno</button></a>
			<br>
			<br>
	    <a href="proximamente.php"><button>Cancelar Turno</button></a>
			<br>
			<br>	
    	</div>

		<br>

		<div class="container1">
		<a href="proximamente.php"><button>Alta de Mapa</button></a>
			<br>
			<br>
		<a href="proximamente.php"><button>Modificar Mapa</button></a>
			<br>
			<br>
	    <a href="proximamente.php"><button>Borrar Mapa</button></a>
			<br>
			<br>	
    	</div>
		<br>
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
<br>
		<div class="container1">
		<br>
		<a href="cerrar.php"><button>CERRAR SESION</button></a>
		</div>

		</body>
</html>