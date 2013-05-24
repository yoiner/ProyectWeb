<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of AtendidosControl
 *
 * @author WDAM
 */
class AtendidosControl extends Controlador {
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerAtendidos();
            $this->vista->set('Atendidos', $datos);
            $this->vista->set('titulo', 'Lista de Atendidos');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
}

?>
