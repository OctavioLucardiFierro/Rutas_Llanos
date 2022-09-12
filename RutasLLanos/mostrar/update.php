<?php
session_start();
    error_reporting(E_ERROR | E_PARSE);   
    $varsesion = $_SESSION['nombre'];
    $varsesion2 = $_SESSION['contraseña']; 
   // echo $_SESSION['nombre']  
?>

<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "../CSS/register.css">
    <title>Actualizar Usuario</title>
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
                <li class="li-a"><a class="indice" href="../eliminar_usuarios/delete.php">Eliminar tu usuario</a></li>
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
                <form method="post">
                    <main class="contenido">
                        <section>
                                <form method="post" action="" name="signup-form">

                                    <div class="form-element">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Apellido</label>
                                        <input type="text" name="apellido"  required />
                                    </div>

                                    <div class="form-element">
                                        <label>Edad</label>
                                        <input type="text" name="edad" pattern="[0-9]+" required />
                                    </div>


                                    <div class="form-element">
                                        <label>Email</label>
                                        <input type="email" name="email" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Fecha de nacimiento</label>
                                        <input type="date" name="fecha_nac" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Telefono</label>
                                        <input type="text" name="telefono" pattern="[0-9]+" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Contraseña</label>
                                        <input type="password" name="contraseña" required />
                                    </div>

                                    <button type="submit" name="Actualizar" value="Actualizar">Actualizar el usuario</button>
                                </form>
                                        <?php
                                        include("../envio_de_datos/envio_update.php");
                                        ?>
                        </section>
                    </main>
                </form>
</body>
</html>