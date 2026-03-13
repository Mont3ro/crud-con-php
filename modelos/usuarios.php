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

    private $con;

    /**********
     * METODOS
     **********/

    public function __construct () {

    $this->con = new conexion();
    } //finalizacion del constructor

    public function listar () {
        $sql = "SELECT * FROM usuario";
        $resultado = $this->con->consultaRetorno($sql);
        return $resultado;
    }

    public function set($atributo, $valor){
        $this->$atributo = $valor;
}
    public function crear(){
        $sql2="SELECT * FROM usuario WHERE cedula = '$this->cedula'";
        echo $sql2;
        $resultado = $this->con->consultaRetorno($sql2);
        $filas=mysqli_num_rows($resultado);
        if($filas == 0){
            $sql="INSERT INTO usuario (cedula, nombre, apellido, correo, direccion, telefono, numero_ficha, contraseña) VALUES ('$this->cedula', '$this->nombre', '$this->apellido', '$this->correo', '$this->direccion', '$this->telefono', '$this->numero_de_ficha', '$this->contraseña')"; 
            $this ->con->consultaSimple($sql);
            return true;
        }else{
            return false;
            }
}


public function consultar(){
    $sql = "SELECT * FROM usuario WHERE id = '$this->id'";
    $resultado = $this->con->consultaRetorno($sql);
    $registro=mysqli_fetch_assoc($resultado);
    
    $this->id=$registro["id"];
    $this->cedula=$registro["cedula"];
    $this->nombre=$registro["nombre"];
    $this->apellido=$registro["apellido"];
    $this->correo=$registro["correo"];
    $this->direccion=$registro["direccion"];
    $this->telefono=$registro["telefono"];
    $this->numero_de_ficha=$registro["numero_ficha"];
    $this->contraseña=$registro["contraseña"];
    return $registro;
    

}//finalizacion de la clase usuarios


public function eliminar(){
    $sql = "DELETE FROM usuario WHERE id = '$this->id'";
     $this->con->consultaSimple($sql);
   
}
public function editar(){

    $sql = "UPDATE usuario 
            SET nombre='{$this->nombre}',
                apellido='{$this->apellido}',
                correo='{$this->correo}',
                direccion='{$this->direccion}',
                telefono='{$this->telefono}',
                numero_ficha='{$this->numero_de_ficha}',
                contraseña='{$this->contraseña}'
            WHERE id='{$this->id}'";

    return $this->con->consultaSimple($sql);
}
}
//$miUsuario = new Usuarios();
//$miUsuario->listar();
?>
