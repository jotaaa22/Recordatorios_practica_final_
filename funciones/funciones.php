<?php
function validar($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

function hash_contra($contra){
    return password_hash($contra, PASSWORD_DEFAULT);
}

function conexionBD(){
    $host = 'localhost';
    $nombreBD = 'recordatorios_web';
    $usuario = 'root';
    $contra = '';
    $dsn = "mysql:host=$host;dbname=$nombreBD;charset=utf8mb4";


    try {
        $conn = new PDO($dsn, $usuario, $contra);
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        return $conn;
    } catch (PDOException $e) {
        die('ERROR: '.$e->getMessage());
    }
}