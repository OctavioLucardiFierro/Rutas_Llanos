<?php
include('../conexion.php');    
error_reporting(E_ERROR | E_PARSE);
$nombre=$_POST['nombre'];    
$contraseña=$_POST['contraseña']; 
$DNI=$_POST['dni'];   
session_start();
$_SESSION['nombre']=$nombre;
$_SESSION['contraseña']=$contraseña;
$_SESSION['dni']=$DNI;



$consulta="SELECT*FROM persona where Nombre ='$nombre' and contraseña='$contraseña'";
$resultado=mysqli_query($conex,$consulta);

$filas=mysqli_num_rows($resultado);


if (isset($_POST['sesion']))
{
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['contraseña']) >= 1)
    {
      if($filas >= 1){
        
	    if ($resultado) {
            header("location:../index.php");           
	    }else{
              ?>
               <h1 class="bad">ERROR DE AUTENTIFICACION</h1>
              <?php
        }
        mysqli_free_result($resultado);
        mysqli_close($conex);
        }
    }
}


?>
