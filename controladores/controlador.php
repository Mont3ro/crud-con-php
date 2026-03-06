<?php
include_once(__DIR__ . "/../modelos/usuarios.php");

class ControladorUsuario{
    private $usuarios;

    public function __construct(){
        $this->usuarios = new Usuarios();
    }

    public function listar(){
        $listar= $this->usuarios->listar();
        return $listar;
    }
}