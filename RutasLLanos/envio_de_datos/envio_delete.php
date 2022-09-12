<?php
session_start();
error_reporting(E_ERROR | E_PARSE);   
$varsesion = $_SESSION['nombre'];
$varsesion2 = $_SESSION['contraseña']; 
// echo $_SESSION['nombre']  

include("../conexion.php");
if (isset($_POST['delete'])) 
   {  
    $consulta  ="DELETE FROM persona WHERE Nombre = '$varsesion' and Contraseña = '$varsesion2' ";
	
    $resultado = mysqli_query($conex,$consulta);
      if ($resultado) {
        ?> 
        <h3 class="ok">Has eliminado tu usuario correctamente, esperamos volver a verte</h3>
       <?php
       header("Location: ../login/cerrar.php");
    }else
    {
        ?> 
        <h3 class="bad">¡Completa correctamente TODOS los campos!</h3>
       <?php
    }	
        }
       ?>