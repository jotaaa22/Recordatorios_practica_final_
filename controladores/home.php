<?php
class home extends controlador
{

    public function __construct(){
        parent::__construct();
    }
    public function inicio(){
        $this->views->getViews($this, "inicio");
    }
    public function registrar(){
        print_r($POST);
    }
}