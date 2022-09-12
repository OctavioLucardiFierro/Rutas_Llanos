<?php
session_start();
    error_reporting(E_ERROR | E_PARSE);
    $varsesion = $_SESSION['nombre'];
    $varsesion2 = $_SESSION['contraseña'];

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
            <a class="logo" href="../index.php"><img src="../html/IBAI2.png" width="100px" height="70px"></a>
        </header>
        <nav>
            <ul class="ul-li">
                <li class="li-a"><a class="indice" href="../index.php">Inicio</a></li>
                <li class="li-a"><a class="indice" href="../cursos.php">Ver Cursos</a></li>
                <li class="li-a"><a class="indice" href="../login/cerrar.php">Cerrar sesion</a></li>
            </ul>
            </nav>
            </main>
            <?php if ($varsesion = '' || $varsesion == null){
        
        ?> <div class=content>
            <h1 class="no-inicio">Te falta alma, Inicia sesion para continuar</h1>
                <div class="btn-inicio">
                    <a  class="link"href="../login/form-login.php">Iniciar Sesion</a>
                </div>
            
        </div>
        <?php
        die();
    }  ?>
            <table class = "tabla" >
			  	<thead>
						<th class = "col">Nombre</th>
						<th class = "col">Apellido</th>
                        <th class = "col">Email</th>
						<th class = "col">DNI</th>
                        <th class = "col">Fecha de Nacimiento</th>
						<th class = "col">Edad</th>
						<th class = "col">num_celular</th>

						<?php
                        $most = "SELECT * FROM persona WHERE Contraseña = '$varsesion2'  ";
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
                                <td><a class="filopciones" href="update.php">editar</a> | <a a class="filopciones" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/eliminar_usuarios/delete.php">eliminar</a></td>
   					        <?php }?>
						</tbody>
        </table>
</body>
</html>
