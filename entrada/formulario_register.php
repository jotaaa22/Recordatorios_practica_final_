<?php 
require_once('C:/Users/jonat/Downloads/xampp/htdocs/recordatorios/funciones/Register.class.php');

if(isset($_POST['email']) && isset($_POST['contra'])){
    $registro = new Register($_POST['email'], $_POST['contra']);
    $resultado = $registro->obtener_confirmacion();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>REGISTRO</title>
</head>

<body>
    <form action="" method="POST" id="login-form">

    <?php 
    if(isset($resultado)){
        echo $resultado;
    }else{
    ?>

        <h2>Registro de usuario</h2>
        <div class="input-form">
            <label for="email">Email:</label>
            <input type="email" name="email" id="email" placeholder="Escribe tu email">
        </div>
        <div class="input-form">
            <label for="contra">Contraseña:</label>
            <input type="password" name="contra" id="contra" placeholder="Escribe tu contraseña">
        </div>
            <button type="submit" form="login-form" value="Submit">Registrarse</button>
        <?php
        }
    ?>
        <a href="formulario_login.php" class="go-back-button" >Volver al login</a>
    </form>
</body>
</html>