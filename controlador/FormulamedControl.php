<?php

/**
 * Description of FormulaMEdControl
 *
 * @author WDAM
 */
class FormulamedControl extends Controlador {
 
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerFormula();
            $this->vista->set('Formulas', $datos);
            $this->vista->set('titulo', 'Lista de Formulas Medicas');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
    
}

?>
