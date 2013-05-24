<?php

/**
 * Description of Enfermedades
 *
 * @author WDAM (Wendell Daniel Arias Martinez)
 */
class Enfermedades extends Modelo {
    Private $Capitulo;
    Private $Descripcion;
    Private $Codigos;
            
            
 public function __construct() {
        parent::__construct();
    }
 private function mapearEnfermedades(Enfermedades $Enfer, array $props) {
        if (array_key_exists('Capitulo', $props)) {
            $Enfer->setCapitulo($props['Capitulo']);
        }
        if (array_key_exists('Descripcion', $props)) {
            $Enfer->setDescripcion($props['Descripcion']);
        }
        if (array_key_exists('Codigos', $props)) {
            $Enfer->setCodigos($props['Codigos']);
        }
         }
         
private function  getParametros (Enfermedades $Enferm ){
       
             $parametros = array(
                 ':Capitulo' =>$Enferm->getCapitulo(),
                 ':Descripcion'  =>$Enferm ->getDescripcion(),
                 ':Codigos' =>$Enferm->getCodigos()
             );
             return $parametros;
         }           
  
         //GETTER Y SETTER
         
         public function getCapitulo() {
             return $this->Capitulo;
         }

         public function setCapitulo($Capitulo) {
             $this->Capitulo = $Capitulo;
         }

         public function getDescripcion() {
             return $this->Descripcion;
         }

         public function setDescripcion($Descripcion) {
             $this->Descripcion = $Descripcion;
         }

         public function getCodigos() {
             return $this->Codigos;
         }

         public function setCodigos($Codigos) {
             $this->Codigos = $Codigos;
         }
 //Funciones CRUD

    public function AdicionarEnfermedad (Enfermedades $Enfer) {
        $sql = "INSERT INTO vallesaludss.enfermedades (Capitulo, Descripcion, Codigos) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Enfer));
    }

    public function leerEnfermedades() {
        $sql = "SELECT Capitulo, Descripcion, Codigos FROM vallesaludss.enfermedades";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $enfermedad = array();
        foreach ($resultado as $fila) {
            $Enfer = new Enfermedades();
            $this->mapearEnfermedades($Enfer, $fila);
            $enfermedad[$Enfer->getCapitulo()] = $Enfer;
        }
        return $enfermedad;
    }

    public function actualizarEnfermedad(Enfermedades $Enfer) {
        $sql = "UPDATE vallesaludss.enfermedades SET  Descripcion=?, Codigos=? WHERE Capitulo=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Enfer));
    }
    
    public function eliminarEnfermedad(Enfermedades $Enfer) {
        $sql = "DELETE vallesaludss.enfermedades where Capitulo=?";
        $this->__setSql($sql);
        $param = array(':Capitulo' => $Enfer->getCapitulo());
        $this->ejecutar($param);        
    }
         
   
}

?>
