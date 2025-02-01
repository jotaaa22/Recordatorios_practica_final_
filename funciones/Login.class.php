<?php
require_once('funciones.php');

class Login{
    private $email;
    private $contra;
    private $conn;

    public function __construct($email, $contra){
        $this->email = validar($email);
        $this->contra = validar($contra);
        $this->conn = conexionBD();

        if($this->validar_email()){
            $contraEnBD = $this->obtener_contra_en_BD();
            $confirmar = password_verify($this->contra, $contraEnBD);
            if($confirmar){
                ob_start();
                session_start();
                $_SESSION['email'] = $this->email;
                $_SESSION['valido'] = true;
                header('Location: inicio.php');
            }else{
                header('Location: formulario_login.php');
            }
        }else{
            header('Location: formulario_login.php');
        }
    }

    private function validar_email(){
        $stmt = $this->conn->prepare('SELECT * FROM usuarios WHERE email=:email');
        $stmt->bindParam(':email',$this->email);
        $stmt->execute();
    
        $resultado = $stmt->fetch();
    
        if(isset($resultado['email'])){
            return true;
        }else{
            return false;
        }
    }

    private function obtener_contra_en_BD(){
        $stmt = $this->conn->prepare('SELECT * FROM usuarios WHERE email=:email');
        $stmt->bindParam(':email', $this->email);
        $stmt->execute();

        $resultado = $stmt->fetch();
        return $resultado['contra'];
    }
}
?>