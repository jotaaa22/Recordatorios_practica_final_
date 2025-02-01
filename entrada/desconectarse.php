<?php
session_start();
unset($_SESSION['email']);
unset($_SESSION['valido']);
session_destroy();

header('Location: formulario_login.php');
?>