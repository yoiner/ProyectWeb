<?php
/**
 * Description of PesonalControl
 *
 * @author WDAM
 */
class PersonalControl extends Controlador{
   
 
    function __construct($modelo, $accion) {
        parent::_construct($modelo, $accion);
        $this->setModelo($modelo);
    }
 
   public function index() {
        try {
          
            $this->vista->set('titulo', 'Contratos');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }   
}

?>
