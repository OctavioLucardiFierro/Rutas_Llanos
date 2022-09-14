<!DOCTYPE html>
<html>
<head>
    <title>Inicio de sesion</title>
</head>
<body>
                <form method="post">
                    <main class="contenido">
                        <section>
                                <form method="post" action="validar-login.php" name="signup-form">

                                    <div class="form-element">
                                        <label>Nombre</label>
                                        <input type="text" name="nombre" required />
                                    </div>

                                    <div class="form-element">
                                        <label>Contraseña</label>
                                        <input type="password" name="contraseña" required />
                                    </div>

                                    <button type="submit" name="sesion" value="register">Inicio Sesion</button>
                                    
                                </form>
                                        <?php
                                        include("validar-login.php");
                                        ?>
                        </section>
                    </main>
                </form>
</body>
</html>
