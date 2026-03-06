<?php
    include_once(__DIR__ . "/connection.php");

class Usuarios{
    private $id;
    private $cedula;
    private $nombre;
    private $correo;
    private $telefono;
    private $direccion;
    private $numero_de_ficha;
    private $apellido;
    private $contraseña;

    /**********
     * METODOS
     **********/

    public function __construct () {

    $this->con = new conexion();
    } //finalizacion del constructor

    public function listar (){
        $sql = "SELECT * FROM usuario";
        $resultado = $this->con->consultaRetorno($sql);
        
    }

}//finalizacion de la clase usuarios

$miUsuario = new Usuarios();
$miUsuario->listar();

?>