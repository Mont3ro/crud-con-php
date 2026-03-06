<?php

class Enrutador{
    public function cargarVista($vista){
        switch($vista){
            case 'crear':
                include_once(__DIR__ . "/../vistas/crear.php");
                break;
            case 'editar':
                include_once(__DIR__ . "/../vistas/editar.php");
                break;
            case 'eliminar':
                include_once(__DIR__ . "/../vistas/eliminar.php");
                break;
            case 'consultar':
                include_once(__DIR__ . "/../vistas/consultar.php");
                break;
            default:
                include_once(__DIR__ . "/../vistas/Error404.php");
        }
    } //finalizacion del metodo cargarVista

    public function validarVista($variable){
        if  (empty($variable)) {
            include_once ("../vistas/inicio.php");

        } else {
            return true;

}
}}