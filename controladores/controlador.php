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
    public function crear($cedula, $nombre, $apellido, $correo, $direccion, $telefono, $numero_ficha, $contraseña){
        $this->usuarios->set('cedula', $cedula);
        $this->usuarios->set('nombre', $nombre);
        $this->usuarios->set('apellido', $apellido);
        $this->usuarios->set('correo', $correo);
        $this->usuarios->set('direccion', $direccion);
        $this->usuarios->set('telefono', $telefono);
        $this->usuarios->set('numero_de_ficha', $numero_ficha);
        $this->usuarios->set('contraseña', $contraseña);

        $resulstado = $this->usuarios->crear();
        return $resulstado;

 }

    public function consultar($id){
       $this->usuarios->set('id', $id);
        return $this->usuarios->consultar();
 }

      public function eliminar($id){
       $this->usuarios->set('id', $id);
        return $this->usuarios->eliminar();
}
public function editar($id, $nombre, $apellido, $correo, $direccion, $telefono, $numero_ficha, $contraseña){

    $this->usuarios->set('id', $id);
    $this->usuarios->set('nombre', $nombre);
    $this->usuarios->set('apellido', $apellido);
    $this->usuarios->set('correo', $correo);
    $this->usuarios->set('direccion', $direccion);
    $this->usuarios->set('telefono', $telefono);
    $this->usuarios->set('numero_de_ficha', $numero_ficha);
    $this->usuarios->set('contraseña', $contraseña);

    return $this->usuarios->editar();
}




}