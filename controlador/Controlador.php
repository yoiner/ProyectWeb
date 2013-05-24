<?php

/**
 * Clase para manejar los controladores en la aplicacion
 * @author Wilman Vega <wilmanvega@gmail.com>
 *
 */
class Controlador {

    protected $modelo;
    protected $controlador;
    protected $accion;
    protected $vista;
    protected $nombreModelo;

    public function _construct($modelo, $accion) {
        $this->controlador = ucwords(__CLASS__);
        $this->accion = $accion;
        $this->nombreModelo = $modelo;
        $this->vista = new Vista(HOME . DS . 'vista' . DS . strtolower($this->nombreModelo) . DS . $accion . '.tpl');
    }

    protected function setModelo($nombreModelo) {
               $this->modelo = new $nombreModelo();
    }

    protected function setVista($nombreVista) {
        $this->vista = new Vista(HOME . DS . 'vista' . DS . strtolower($this->nombreModelo) . DS . $nombreVista . '.tpl');
    }
}

?>
