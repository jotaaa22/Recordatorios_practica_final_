<?php

require_once('C:/Users/jonat/Downloads/xampp/htdocs/recordatorios/funciones/Login.class.php');
if(isset($_POST['email']) && isset($_POST['contra'])){
    $login = new Login($_POST['email'], $_POST['contra']);
}else{
    header('Location: formulario_login.php');
}
?>