<!DOCTYPE html>
<html>
<head>
    <title> INICIO DE SESIÓN </title>
</head>

<body>
    <main>
        <form action="login.php" method="POST" id="login-form">
        <h2>Inicio de sesión</h2>
            <div class="input-form">
                <label for="email">Email:</label>
                <input type="email" name="email" id="email" placeholder="Escribe tu email">
            </div>
            <div class="input-form">
                <label for="contra">Contraseña:</label>
                <input type="password" name="contra" id="contra" placeholder="Escribe tu contraseña">
            </div>
            <button type="submit" form="login-form" value="Submit">Ingresar</button>

            <p>
                Crea una cuenta en caso de no tenerla <a href="formulario_register.php" class="white">aquí</a>
            </p>
        </form>
    </main>
</body>
</html>