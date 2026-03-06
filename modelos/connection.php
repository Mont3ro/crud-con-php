<?php
    class conexion{
        private $host;
        private $user;
        private $password;
        private $database;
        private $con;

        public function __construct($host = 'localhost', $user = 'root', $password = '', $database = 'usuario'){
            $this->host = 'localhost';
            $this->user = 'root';
            $this->password = '';
            $this->database = 'usuario';
            $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
            if(mysqli_errno($this->con)){
                echo "Error al conectar a la base de datos $this->database " . mysqli_error($this->con);}
                else{
                    echo "Conexion exitosa a la base de datos $this->database";
                }

        } //finalizacion del constructor

        public function consultaSimple($sql){
            mysqli_query($this->con, $sql);
        }
        public function consultaRetorno($sql){
            return mysqli_query($this->con, $sql);
        }
    } // finalizacion de la clase conexion

    // $miConexion = new conexion('localhost', 'root', '', 'usuario');




?>