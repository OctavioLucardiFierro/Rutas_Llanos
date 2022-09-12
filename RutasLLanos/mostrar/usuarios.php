<?php
session_start();
    error_reporting(E_ERROR | E_PARSE);   
    $varsesion = $_SESSION['dni'];

include ("../conexion.php");

     
?>
<!DOCTYPE html>
<html>
    <head>
    <link rel = "stylesheet" href = "../CSS/usuarios.css">
    <title>Mi usuario</title>

</head>
<body>
<main class= "barra_de_navegacion">
        <header>
            <a class="logo" href="#"><img src="../html/IBAI2.png" width="100px" height="70px"></a>
        </header>
        <nav>
            <ul class="ul-li">
            <li class="li-a"><a class="indice" href="../index.php">Inicio</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/cursos.php">Ver Cursos</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/register.php">Inscribirse</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/eliminar_usuarios/delete.php">Eliminar tu usuario</a></li>
                <li class="li-a"><a class="indice" href="login/form-login.php">Iniciar sesion</a></li>
                <li class="li-a"><a class="indice" href="Mi-usuario.php">Ver Mi usuario </a></li>
                <li class="li-a"><a class="indice" href="login/cerrar.php">Cerrar sesion</a></li>
            </ul>
            </nav>
            </main>
            <?php
    if ($varsesion != "123123456" || $varsesion = '' || $varsesion == null){
        
        ?><h1>NO tienes permisos de Administrador</h1>
        <a href="../login/form-login.php">Iniciar Sesion</a><?php
        die();
    }      
?>
            <table class = "tabla" >
			  	<thead>
						<th class = "col">Nombre</th>
						<th class = "col">Apellido</th>
                        <th class = "col">Email</th>
						<th class = "col">DNI</th>
                        <th class = "col">Fecha de Nacimiento</th>
						<th class = "col">Edad</th>
						<th class = "col">num_celular</th>

				</thead>
					<tbody>
						<?php
                        $most = "SELECT * FROM `persona`ORDER BY `persona`.`Nombre` ASC";
                        $resultado = mysqli_query($conex,$most);

                        while($row = $resultado->fetch_assoc()){?>
            	        <tr>
								<td class = "fil"><?php  echo $row['Nombre'] ?></td>
								<td class = "fil"><?php  echo $row['Apellido'] ?></td>
                                <td class = "fil"><?php  echo $row['Email'] ?></td>
								<td class = "fil"><?php  echo $row['DNI'] ?></td>
                                <td class = "fil"><?php  echo $row['FechaDeNacimiento'] ?></td>
								<td class = "fil"><?php  echo $row['Edad'] ?></td>
								<td class = "fil"><?php  echo $row['num_celular'] ?></td>
                                <td><a class="filopciones" href="#">editar</a> | <a a class="filopciones" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/eliminar_usuarios/delete.php">eliminar</a></td>
   					        <?php }mysqli_free_result($resultado);?>
						</tbody>
        </table>
</body>
</html>
