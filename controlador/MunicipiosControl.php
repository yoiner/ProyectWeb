<?php

/**
 * Description of MunicipiosControl
 *
 * @author YOINER D VALLE MACHADO
 */
class MunicipiosControl extends Controlador  {
    //put your code here
    
     public function __construct($modelo, $accion) {
        parent::__construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    public function index() {
        try {
            $datos = $this->modelo->leerMunicipios();
            $this->vista->set('municipios', $datos);
            $this->vista->set('titulo', 'Lista de Municipios');
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
}

?>
