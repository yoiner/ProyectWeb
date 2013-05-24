<?php

/**
 * Description of DiagnosticoControl
 *
 * @author WDAM
 */
class DiagnosticoControl extends Controlador{
    
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerDiagnostico();
            $this->vista->set('diagnosticos', $datos);
            $this->vista->set('titulo', 'Lista de Diagnosticos');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
}

?>
