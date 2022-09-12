<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $varsesion = $_SESSION['nombre'];
       
?>
<!DOCTYPE html>
<html>
    <head>

<title>Ver Cursos</title>

    <link rel = "stylesheet" href = "CSS/usuarios.css">


</head>
<body>
<main class= "barra_de_navegacion">
        <header>
            <a class="logo" href="#"><img src="html/IBAI2.png" width="100px" height="70px"></a>
        </header>
        <nav>
            <ul class="ul-li">
                <li class="li-a"><a class="indice" href="index.php">Inicio</a></li>
                <li class="li-a"><a class="indice" href="cursos.php">Ver Cursos</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/register.php">Inscribirse</a></li>
                <li class="li-a"><a class="indice" href="login/form-login.php">Iniciar sesion</a></li>
                <li class="li-a"><a class="indice" href="login/cerrar.php">Cerrar sesion</a></li>
            </ul>
       </nav>
       </main>
<form  class=busc method="post">

<input class="barra-busca" type="text"   name ="busque" placeholder="Buscar Curso">
<input class="Buton" type="submit" name ="buscar"  placeholder="Buscar">

</form>
<?php
include "conexion.php";
 error_reporting(E_ERROR | E_PARSE);
 $busqueda = $_POST['busque'];
 $consult  = "SELECT * FROM cursos WHERE Cursos LIKE '%$busqueda%'";
 $result   = mysqli_query($conex,$consult);
?>

<table class = "tabla" >
         <thead>
           <th class = "col">Curso</th>
            <th class = "col">Dias</th>
             <th class = "col">Horarios</th>

         </thead>
           <tbody>
           <?php     while($row = $result->fetch_assoc()){       ?>
             <tr>

               <td class = "fil"><?php  echo $row['Cursos'] ?></td>
                <td class = "fil"><?php  echo $row['dias'] ?></td>
                 <td class = "fil"><?php  echo $row['horario'] ?></td>

           <?php }?>
           </tbody>
       </table>

</body>
</html>
