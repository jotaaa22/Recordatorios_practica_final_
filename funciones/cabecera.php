<?php
    ob_start();
    session_start();

    if(!isset($_SESSION['valido'])){
        header('Location: formulario_login.php');
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Web de recordatorios</title>
</head>
<body>
    <header>
        <img src="./recursos/imagenes/osvaldo.jpeg" width="100px" height="100px">
        <div id="menu-user">
            <p>Hola <?php echo $_SESSION['email'];?></p>
            <a href="desconectarse.php" id="logout-link">Cerrar sesión</a>
        </div>
    </header>