<?php
/**
 * Description of CitasControl
 *
 * @author WDAM
 */
class CitasControl extends Controlador{
    
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerCitasMedicas();
            $this->vista->set('CitasMed', $datos);
            $this->vista->set('titulo', 'Lista de Citas Medicas');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
}

?>
