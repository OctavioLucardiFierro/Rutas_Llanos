<!DOCTYPE html>
<html>
<head>
    <link rel = "stylesheet" href = "CSS/register.css">
    <title>Registro</title>
</head>
<body>

    <main class= "barra_de_navegacion">
        <header>
            <a class="logo" href="#"><img src="html/IBAI2.png" width="100px" height="70px"></a>
        </header>
        <nav>
            <ul class="ul-li">
                <li class="li-a"><a class="indice" href="index.php">Inicio</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/cursos.php">Ver Cursos</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/register.php">Inscribirse</a></li>
                <li class="li-a"><a class="indice" href="http://localhost/5-11-proyecto-2/Dynamight%20JOJO'S%20GYM/eliminar_usuarios/delete.php">Eliminar tu usuario</a></li>
                <li class="li-a"><a class="indice" href="login/form-login.php">Iniciar sesion</a></li>
                <li class="li-a"><a class="indice" href="login/cerrar.php">Cerrar sesion</a></li>
            </ul>
            </nav>
    </main>
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
                                        <label>DNI</label>
                                        <input type="text" name="dni" pattern="[0-9]+" required />
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

                                    <button type="submit" name="register" value="register">Registrar</button>
                                </form>
                                        <?php
                                        include("envio.php");
                                        ?>
                        </section>
                    </main>
                </form>
</body>
</html>
