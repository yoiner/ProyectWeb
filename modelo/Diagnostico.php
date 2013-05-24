<?php

/**
 * Description of Diagnostico
 *
 * @author WDAM
 */
class Diagnostico extends Modelo{
   Private $idDiagn;
   Private $Nhistoria;
   Private $CedPac;
   Private $CedMed;
   Private $Fecha;        
   Private $Cap;        
   Private $CodDiag;        
   Private $NombreDiag;
   Private $Observ;
           
           
public function __construct() {
        parent::__construct();
    }
 private function mapearDiagnostico(Diagnostico $Diag, array $props) {
        if (array_key_exists('idDiagn', $props)) {
            $Diag->setIdDiagn($props['idDiagn']);
        }
        if (array_key_exists('Nhistoria', $props)) {
            $Diag->setNhistoria($props['Nhistoria']);
        }
        if (array_key_exists('CedPac', $props)) {
            $Diag->setCedPac($props['CedPac']);
        }
         if (array_key_exists('CedMed', $props)) {
            $Diag->setCedMed($props['CedMed']);
        }
        if (array_key_exists('Fecha', $props)) {
            $Diag->setFecha(self::crearFecha($props['Fecha']));
        }
        if (array_key_exists('Cap', $props)) {
            $Diag->setNivel($props['Cap']);
        }
         if (array_key_exists('CodDiag', $props)) {
            $Diag->setCap($props['CodDiag']);
        }
        if (array_key_exists('NombreDiag', $props)) {
            $Diag->setNombreDiag($props['clave']);
        }
        if (array_key_exists('Observ', $props)) {
            $Diag->setObserv($props['Observ']);
        }
         }
         private function  getParametros (Diagnostico $diagnostic ){
       
             $parametros = array(
                 ':idDiagn' =>$diagnostic->getIdDiagn(),
                 ':Nhistoria'  =>$diagnostic->getNhistoria(),
                 ':CedPac' =>$diagnostic ->getCedPac(),
                 ':CedMed' =>$diagnostic->getCedMed(),
                 ':Fecha'  =>$this->formatearFecha($diagnostic ->getClave()),
                 ':Cap' =>$diagnostic ->getCap(),
                 ':CodDiag' =>$diagnostic ->getCodDiag(),
                 ':NombreDiag'  =>$diagnostic ->getNombreDiag(),
                 ':Observ' =>$diagnostic ->getObserv()     
             );
             return $parametros;
         }           
                
     //GETTER Y SETTER
         
     public function getIdDiagn() {
         return $this->idDiagn;
     }

     public function setIdDiagn($idDiagn) {
         $this->idDiagn = $idDiagn;
     }

     public function getNhistoria() {
         return $this->Nhistoria;
     }

     public function setNhistoria($Nhistoria) {
         $this->Nhistoria = $Nhistoria;
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
         return $this->Fecha;
     }

     public function setFecha($Fecha) {
         $this->Fecha = $Fecha;
     }

     public function getCap() {
         return $this->Cap;
     }

     public function setCap($Cap) {
         $this->Cap = $Cap;
     }

     public function getCodDiag() {
         return $this->CodDiag;
     }

     public function setCodDiag($CodDiag) {
         $this->CodDiag = $CodDiag;
     }

     public function getNombreDiag() {
         return $this->NombreDiag;
     }

     public function setNombreDiag($NombreDiag) {
         $this->NombreDiag = $NombreDiag;
     }

     public function getObserv() {
         return $this->Observ;
     }

     public function setObserv($Observ) {
         $this->Observ = $Observ;
     }

 //Funciones CRUD

    public function crearDiagnostico (Diagnostico $Diag) {
        $sql = "INSERT INTO vallesaludss.detallediagnostico (idDiagn,  Nhistoria,CedPac, CedMed, Fecha,
            Cap, CodDiag, NombreDiag, Observ) VALUES (?,?,?,?,?,?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Diag));
    }

    public function leerDiagnostico() {
        $sql = "SELECT idDiagn,  Nhistoria,CedPac, CedMed, Fecha, Cap, CodDiag, 
            NombreDiag, Observ FROM vallesaludss.detallediagnostico";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $diagnosticos = array();
        foreach ($resultado as $fila) {
            $Diag = new Diagnostico();
            $this->mapearDiagnostico($Diag, $fila);
            $diagnosticos[$Diag->getIdDiagn()] = $Diag;
        }
        return $diagnosticos;
    }

    public function actualizarDianostico(Diagnostico $Diag) {
        $sql = "UPDATE vallesaludss.detallediagnostico SET    CedMed=?, Fecha=?, Cap=?,
            CodDiag=?, NombreDiag=?, Observ=? WHERE idDiagn=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Diag));
    }
    
    public function eliminarDiagnostico(Diagnostico $Diag) {
        $sql = "DELETE vallesaludss.detallediagnostico where idDiagn=?";
        $this->__setSql($sql);
        $param = array(':idDiagn' => $Diag->getIdDiagn());
        $this->ejecutar($param);        
    }
          
         
}

?>
