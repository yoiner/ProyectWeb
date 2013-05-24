<?php
/**
 * Este archivo prepara el inicio de la aplicacion
 * recibe los parametros del punto de entrada (index) y genera el controlador 
 * adecuado dependiendo de la llamada que se realice.
 *
 * @author Wilman Vega <wilmanvega@gmail.com>
 */
$controlador = "Login";
$accion = "index";
$consulta = null;

$regURI = isset($_GET['load']) ? $_GET['load']: NULL;
       
if(! (preg_match("/\.css$/", $regURI) || preg_match("/\.js$/", $regURI) || preg_match("/\.gif$/", $regURI)
|| preg_match("/\.jpg$/", $regURI))) {
    if (isset($regURI)) {
        $parametros = array();
        $parametros = explode("/", $_GET['load']); //explode: divide en varias cadenas la cadena de consulta. 
        $controlador = ucwords($parametros[0]); //ucwords: Convierte a mayúsculas el primer caracter de cada palabra en una cadena

        if (isset($parametros[1]) && !empty($parametros[1])) {
            $accion = $parametros[1]; //variable de variable
        }

        if (isset($parametros[2]) && !empty($parametros[2])) {
            $consulta = $parametros[2]; //variable de variable
        }
    }

    $modelo = $controlador;
    $controlador .='Control';
    $carga = new $controlador($modelo, $accion); //variable de variables

    if (method_exists($carga, $accion)) {
        $carga->$accion($consulta);
    } else {
        die('Metodo no valido. por favor verificar la URL');
    }
}
?>