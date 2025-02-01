<?php
require_once('funciones.php');

class Register{

    private $email;
    private $contra;
    private $conn;
    private $resultado_registro;

    public function __construct($email, $contra){
        $this->email = validar($email);
        $this->contra = validar($contra);
        $this->contra = hash_contra($this->contra);
        $this->conn = conexionBD();

        try{
            if($this->validar_email()){
                $this->resultado_registro = false;
            }else{
                $this->crear_usuario();
                $this->resultado_registro = true;
            }
        }catch(Exception $e){
            die('ERROR: '. $e->getMessage());
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

    private function crear_usuario(){
            $stmt = $this->conn->prepare(
                'INSERT INTO usuarios (email, contra) VALUES (:email, :contra)'
            );
            $stmt->bindParam(':email', $this->email);
            $stmt->bindParam(':contra', $this->contra);
    
            $stmt->execute();
    }

    public function obtener_confirmacion(){
        if($this->resultado_registro){
            return "Usuario creado de manera exitosa";
        }else{
            return "El email ya está registrado";
        }
    }
}
?>