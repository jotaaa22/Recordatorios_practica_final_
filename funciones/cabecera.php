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
    <script src="https://cdn.jsdelivr.net/npm/fullcalendar@6.1.15/index.global.min.js"></script>
    <script src="/../recordatorios/recursos/js/calendar.js"></script>
</head>
<body>
    <header>
        <img src="/../recordatorios/recursos/imagenes/osvaldo.png" width="100px" height="100px">
        <div id="menu-user">
            <p>Hola <?php echo $_SESSION['email'];?></p>
            <a href="desconectarse.php" id="logout-link">Cerrar sesión</a>
        </div>
    </header>