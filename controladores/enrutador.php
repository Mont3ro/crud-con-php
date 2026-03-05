<?php

class Enrutador{
    public function cargarVista($vista){
        switch($vista){
            case 'crear':
                include_once("vistas/crear.php");
                break;
            default:
                include_once("vistas/Error404.php");
        }
    }

    public function validarVista($variable){
        
    }

}