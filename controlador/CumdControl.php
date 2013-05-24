<?php



/**
 * Description of CumdControl
 *
 * @author WDAM
 */
class CumdControl extends Controlador{
 
    public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo-> leerCUM();
            $this->vista->set('Cumedi ', $datos);
            $this->vista->set('titulo', 'Lista de Medicamentos');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
    
}

?>
