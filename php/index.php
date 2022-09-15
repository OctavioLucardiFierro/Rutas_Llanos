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

		<a href="forminsert.php"><button>INERTAR OBRA</button></a>
			<br>
			<br>
		<a href="formupdate.php"><button>MODIFICAR OBRA</button></a>
			<br>
			<br>
		<a href="formdelete.php"><button>BORRAR OBRA</button></a>
			<br>
			<br>
				<?php
			if ($varsesion == null || $varsesion = '')
				{
					?>
						<a href="form-login.php"><button>INICIAR SESION</button></a>
					<?php
				}
			else
				{
					?>
						<a href="cerrar.php"><button>CERRAR SESION</button></a>
					<?php
				}
			?>
		</div>
		


		</body>
</html>