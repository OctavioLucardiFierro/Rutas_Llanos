<?php
    include ("../conexion.php");
    session_start();
    error_reporting(E_ERROR | E_PARSE);   
    $varsesion = $_SESSION['nombre'];
    $varsesion2 = $_SESSION['contraseña'];
    $varsesion3 = $_SESSION['dni'];


// Obtenemos los valores     
if (isset($_POST['Actualizar']))
{
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 &&  strlen($_POST['fecha_nac']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['contraseña']) >= 1) 
    {
            $Nombre2    =trim($_POST['nombre']);
            $Apellido2  =trim($_POST['apellido']);
            $Email2     =trim($_POST['email']);
            $FechadeNacimiento2=trim($_POST['fecha_nac']);
            $Edad2      =trim($_POST['edad']);
            $Telefono2  =trim($_POST['telefono']);
            $Contraseña2=trim($_POST['contraseña']);
        
            $consulta2 = "UPDATE persona SET Nombre ='$Nombre2', Email='$Email2',FechaDeNacimiento='$FechadeNacimiento2',Edad='$Edad2',num_celular='$Telefono2',Apellido='$Apellido2',Contraseña='$Contraseña2' WHERE DNI = '$varsesion3'";
            $resultado = mysqli_query($conex,$consulta2);
	    
        if ($resultado) {
           
            header("Location: ../login/cerrar.php");
           
	    }else
        {
            ?> 
            <br>
	    	<h3 class="bad">¡Completa correctamente TODOS los campos!</h3>
           <?php 
           mysqli_close($conex);
        }
    }

}
?>