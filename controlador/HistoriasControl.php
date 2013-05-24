<?php
/**
 * Description of HistoriasControl
 *
 * @author WDAM
 */
class HistoriasControl extends Controlador {
   
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerHistoriaClinica();
            $this->vista->set('historiasclinicas', $datos);
            $this->vista->set('titulo', 'Lista de Historias Clinicas');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
}

?>
