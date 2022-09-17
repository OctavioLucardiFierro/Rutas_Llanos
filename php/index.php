<?php
error_reporting(E_ERROR | E_PARSE);//evita mostrar errores por si ingresamos a la paguina sin haber iniciado sesion 
session_start();
$varsesion = $_SESSION['nombre'];


?>

<!DOCTYPE html>
		<html>
		<head>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<!--<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>-->
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
			<link rel="stylesheet" href="../css/css_general.css">
			<!--<link href="https://fonts.googleapis.com/css2?family=Alfa+Slab+One&display=swap" rel="stylesheet">-->
			<link rel="preconnect" href="https://fonts.googleapis.com">
			<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
			<link href="https://fonts.googleapis.com/css2?family=Staatliches&display=swap" rel="stylesheet">
				
				<meta charset="utf-8">

		<br><br>

		</head>
		<body>
	<main class ="ponerlaEnELMedio">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/1.jpg" alt="First slide">
				</div>
				<div class="carousel-item">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/elcarno.jpg" alt="Second slide">
				</div>
				<div class="carousel-item">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/imagen1.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/imagen2.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/imagen3.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/imagen5.jpg" alt="Third slide">
				</div>
				<div class="carousel-item">
				<img id = "imgcarrusel" class="d-block w-100" src="../imagenes/logo.jpg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
	</main>
		

		<h1>¿Que va a hacer? <?php $_SESSION['nombre'];  ?></h1>
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
		<a href="formtestinsercom.php"><button>COM</button></a>
    	</div>
		<br>

		<div class="container1">
		
    	</div>

		<div class="container1">
		<br>
		<a href="cerrar.php"><button>CERRAR SESION</button></a>
		</div>
		<br><br><br>

		<h2>Comentarios de Usuarios</h2>
			<br><br>

<?php
    $inc = include("conexion.php");

 if ($inc) {
	$consulta = "SELECT * FROM `comentarios` ";
	$resultado = mysqli_query($conex,$consulta);
 }



     ?>
		<table class = "tabla2" >
			 <thead>

                 <th class = "col">Nombre</th>
				 <th class = "col">Comentario</th>
				 <th class = "col">Fecha</th>

			 </thead>
				 <tbody>
				 <?php while($row = $resultado->fetch_assoc()){    ?>
					 <tr>
						 <td class = "fil"><?php  echo $row['usuarios'] ?></td>
						 <td class = "fil"><?php  echo $row['comentario'] ?></td>
                         <td class = "fil"><?php  echo $row['fecha_comentario'] ?></td>
					
				 <?php }?>
				 </tbody>
		 </table>

		</body>
</html>