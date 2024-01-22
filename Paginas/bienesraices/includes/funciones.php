<?php


define('TEMPLATES_URL', __DIR__ . '/templates');
define('FUNCIONES_URL', __DIR__ . 'funciones.php');

function incluirTemplate( string $nombre, bool $inicio = false) {
    include  TEMPLATES_URL . "/$nombre.php";
}

function estaAutenticado() : bool {
    session_start();

    $auto = $_SESSION["login"];

    if($auto){
        return true;
    }
    
    return false;

}