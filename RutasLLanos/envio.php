<?php

include ("conexion.php");

// Obtenemos los valores     
if (isset($_POST['register']))
{
    if (strlen($_POST['nombre']) >= 1 && strlen($_POST['apellido']) >= 1 && strlen($_POST['email']) >= 1 && strlen($_POST['dni']) >= 1 && strlen($_POST['fecha_nac']) >= 1 && strlen($_POST['edad']) >= 1 && strlen($_POST['telefono']) >= 1 && strlen($_POST['contraseña']) >= 1) 
    {
            $Nombre    =trim($_POST['nombre']);
            $Apellido  =trim($_POST['apellido']);
            $Email     =trim($_POST['email']);
            $DNI       =trim($_POST['dni']);
            $FechadeNacimiento=trim($_POST['fecha_nac']);
            $Edad      =trim($_POST['edad']);
            $Telefono  =trim($_POST['telefono']);
            $Contraseña=trim($_POST['contraseña']);

	    $consulta = "INSERT INTO persona(Nombre,Email, DNI, FechaDeNacimiento, Edad, num_celular, Apellido, Estado,Contraseña) VALUES ('$Nombre','$Email','$DNI','$FechadeNacimiento','$Edad','$Telefono','$Apellido','Cliente','$Contraseña')";
	  
      
       if($Edad >= 18){
        $resultado= mysqli_query($conex,$consulta);
	    if ($resultado) {
            ?>
	    	<h3 class="ok">¡Te has inscripto correctamente!</h3>
           <?php
           
	    }else
        {
            ?> 
	    	<h3 class="bad">¡Completa correctamente TODOS los campos!</h3>
           <?php
        }
      }else{
        ?> 
        <h3 class="bad">Muy pendejo</h3>
       <?php
      }
    }

}
?>
     