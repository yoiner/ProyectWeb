<?php


/**
 * Description of FormulaMedica
 *
 * @author WDAM
 */
class Formulamedica extends Modelo {
    Private $idFormula;
    Private $CedPac;    
    Private $CedMed;
    Private $fecha;       
    Private $CodMedicam;
    Private $NombMed;        
    Private $Desc;
    Private $Cantidad;        
    Private $Dosis;
    Private $Duracion;         
            
            
  public function __construct() {
        parent::__construct();
    }
 private function mapearFormula(Formulamedica $form, array $props) {
        if (array_key_exists('idFormula', $props)) {
            $form->setIdFormula($props['idFormula']);
        }
        if (array_key_exists('CedPac', $props)) {
            $form->setCedPac($props['CedPac']);
        }
        if (array_key_exists('CedMed', $props)) {
            $form->setCedMed($props['CedMed']);
        }
         if (array_key_exists('fecha', $props)) {
            $form->setFecha(self:: crearFecha($props['fecha']));
        }
          if (array_key_exists('CodMedicam', $props)) {
            $form->setCodMedicam($props['CodMedicam']);
        }
        if (array_key_exists('NombMed', $props)) {
            $form->setNombMed($props['NombMed']);
        }
        if (array_key_exists('Desc', $props)) {
            $form->setDesc($props['Desc']);
        }
         if (array_key_exists('Cantidad', $props)) {
            $form->setCantidad($props['Cantidad']);
        }
      
        if (array_key_exists('Dosis', $props)) {
            $form->setDosis($props['nivel']);
        }
        if (array_key_exists('Duracion', $props)) {
            $form->setDuracion($props['Duracion']);
        }
         }
private function  getParametros (Formulamedica $formula ){
       
             $parametros = array(
                 ':idFormula' =>$formula ->getIdFormula(),
                 ':CedPac'  =>$formula ->getCedPac(),
                 ':CedMed' =>$formula ->getCedMed(),
                 ':fecha' =>$this->formatearFecha($formula ->getFecha()),
                 ':CodMedicam'  =>$formula ->getCodMedicam(),
                 ':NombMed' =>$formula ->getNombMed(),
                 ':Desc' =>$formula ->getDesc(),  
                 ':Cantidad' =>$formula ->getCantidad(),
                 ':Dosis'  =>$formula ->getDosis(),
                 ':Duracion' =>$formula ->getDuracion()
                );
             return $parametros;
         }  
         
// GETTER Y SETTER
    public function getIdFormula() {
        return $this->idFormula;
    }

    public function setIdFormula($idFormula) {
        $this->idFormula = $idFormula;
    }

    public function getCedPac() {
        return $this->CedPac;
    }

    public function setCedPac($CedPac) {
        $this->CedPac = $CedPac;
    }

    public function getCedMed() {
        return $this->CedMed;
    }

    public function setCedMed($CedMed) {
        $this->CedMed = $CedMed;
    }

    public function getFecha() {
        return $this->fecha;
    }

    public function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    public function getCodMedicam() {
        return $this->CodMedicam;
    }

    public function setCodMedicam($CodMedicam) {
        $this->CodMedicam = $CodMedicam;
    }

    public function getNombMed() {
        return $this->NombMed;
    }

    public function setNombMed($NombMed) {
        $this->NombMed = $NombMed;
    }

    public function getDesc() {
        return $this->Desc;
    }

    public function setDesc($Desc) {
        $this->Desc = $Desc;
    }

    public function getCantidad() {
        return $this->Cantidad;
    }

    public function setCantidad($Cantidad) {
        $this->Cantidad = $Cantidad;
    }

    public function getDosis() {
        return $this->Dosis;
    }

    public function setDosis($Dosis) {
        $this->Dosis = $Dosis;
    }

    public function getDuracion() {
        return $this->Duracion;
    }

    public function setDuracion($Duracion) {
        $this->Duracion = $Duracion;
    }

//Funciones CRUD

    public function crearformula (Formulamedica $form) {
        $sql = "INSERT INTO vallesaludss.formula (idFormula, CedPac, CedMed,
            fecha, CodMedicam, NombMed, Desc, Cantidad, Dosis, Duracion) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($form));
    }

    public function leerFormula() {
        $sql = "SELECT idFormula, CedPac, CedMed, fecha, CodMedicam, NombMed, Desc,
            Cantidad, Dosis, Duracion FROM vallesaludss.formula";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Formulas = array();
        foreach ($resultado as $fila) {
            $form = new Formulamedica();
            $this->mapearFormula($form, $fila);
            $Formulas[$form->getIdFormula()] = $form;
        }
        return $Formulas;
    }

    public function actualizarFormula(Formulamedica $form) {
        $sql = "UPDATE vallesaludss.formula SET CedMed=?, fecha=?, CodMedicam=?, NombMed=?,
            Desc=?, Cantidad=?, Dosis=?, Duracion=? WHERE idFormula=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($form));
    }
    
    public function eliminarFormula(Formulamedica $form) {
        $sql = "DELETE vallesaludss.formula where idFormula=?";
        $this->__setSql($sql);
        $param = array(':idFormula' => $form->getIdFormula());
        $this->ejecutar($param);        
    }
      
}

?>
