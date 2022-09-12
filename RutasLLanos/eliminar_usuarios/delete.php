<?php
    session_start();
    error_reporting(E_ERROR | E_PARSE);
    $varsesion = $_SESSION['nombre'];
    $varsesion2 = $_SESSION['contraseña']; 
// Nota objetos Octavio:2C=8     A=9 
// Nota objetos Ignasio:2C=9     A=9
// Nota objetos Ivan:   2C=8     A=8
?>
<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "../CSS/delete.css">
    <title>Eliminar usuarios</title>
</head>
<body>

    <main class= "barra_de_navegacion">
        <header>
            <a class="logo" href="#"><img src="../html/IBAI2.png" width="100px" height="70px"></a>
        </header>
        <nav>
            <ul class="ul-li">
                <li class="li-a"><a class="indice" href="../index.php">Inicio</a></li>
                <li class="li-a"><a class="indice" href="../cursos.php">Ver Cursos</a></li>
                <li class="li-a"><a class="indice" href="../register.php">Inscribirse</a></li>
                <li class="li-a"><a class="indice" href="../eliminar_usuarios/delete.php">Eliminar tu usuario</a></li>
                <li class="li-a"><a class="indice" href="../login/form-login.php">Iniciar sesion</a></li>
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
                                    <h3>Pulse el boton para matarte</h3>
                                    <div class="form-element">
                                        <!---<input type="email" name="delete_email" placeholder="Email" required />
                                        <input type="text" name="delete_dni" pattern="[0-9]+" placeholder="DNI" required />
                                        <input type="text" name="delete_contraseña" placeholder="Contraseña" required />-->
                                        <p class="advertencia">¡Advertencia, si elimina el usuario no lo podra recuperar!</p>
                                        <button type="submit" name="delete" value="delete">Eliminar Usuario</button>
                                    </div>
                        </form>
                        <?php
                            include("../envio_de_datos/envio_delete.php");
                        ?>
                        </section>
                    </main>
                </form>


</body>
</html>
