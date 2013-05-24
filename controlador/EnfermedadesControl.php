<?php
/**
 * Description of EnfermedadesControl
 *
 * @author WDAM
 */
class EnfermedadesControl extends Controlador{
   
 public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerEnfermedades();
            $this->vista->set('enfermedad', $datos);
            $this->vista->set('titulo', 'Lista de Enfermedades');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }   
}

?>
