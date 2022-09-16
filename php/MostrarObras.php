<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" href="../css/css_tabla.css">
	

</head>
<body>
<?php
$inc = include("conexion.php");

if ($inc) {
	$consulta = "SELECT * FROM `obras` ";
	$resultado = mysqli_query($conex,$consulta);
}



     ?>
     <br>
		 <table class = "tabla2" >
			 <thead>

                 <th class = "col">Id</th>
				 <th class = "col">Nombre</th>
				 <th class = "col">Descripsion</th>
                 <th class = "col">Sucursal</th>
				 <th class = "col">Zona</th>
				 <th class = "col">Piso</th>

			 </thead>
				 <tbody>
				 <?php while($row = $resultado->fetch_assoc()){    ?>
					 <tr>
						 <td class = "fil"><?php  echo $row['id'] ?></td>
						 <td class = "fil"><?php  echo $row['nombre_de_la_obra'] ?></td>
                         <td class = "fil"><?php  echo $row['descripsion'] ?></td>
						 <td class = "fil"><?php  echo $row['sucursal_museo'] ?></td>
                         <td class = "fil"><?php  echo $row['zona'] ?></td>
						 <td class = "fil"><?php  echo $row['piso'] ?></td>
				 <?php }?>
				 </tbody>
		 </table>



</body>
</html>