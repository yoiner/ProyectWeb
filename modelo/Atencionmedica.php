<?php

/**
 * Description of AtencionMedica
 *
 * @author WDAM
 */
class Atencionmedica extends Modelo {

private $NRegistro;
private $CedPac;
private $CedMed;
private $Motivo;
private $FechaAtenc;
private $hora;
    
    public function __construct() {
        parent::__construct();
    }
 private function mapearAtencionmedica(Atencionmedica $AtMed, array $props) {
        if (array_key_exists('NRegistro', $props)) {
            $AtMed->setNRegistro($props['NRegistro']);
        }
        if (array_key_exists('CedPac', $props)) {
            $AtMed->setCedPac($props['CedPac']);
        }
        if (array_key_exists('CedMed', $props)) {
            $AtMed->setCedMed($props['CedMed']);
        }
         if (array_key_exists('Motivo', $props)) {
            $AtMed->setMotivo($props['Motivo']);
        }
         if (array_key_exists('FechaAtenc', $props)) {
            $AtMed->setFechaAtenc(self::crearFecha($props['FechaAtenc']));
        }
         if (array_key_exists('hora', $props)) {
            $AtMed->setHora($props['hora']);
        }
         }
         
         private function  getParametros (Atencionmedica $AtenMe ){
       
             $parametros = array(
                 ':NRegistro' =>$AtenMe ->getNRegistro(),
                 ':CedPac'  =>$AtenMe ->getCedPac(),
                 ':CedMed' =>$AtenMe ->getCedMed(),
                 ':Motivo'  =>$AtenMe ->getMotivo(),
                 ':FechaAtenc' =>$this->formatearFecha($AtenMe ->getFechaAtenc()), 
                 ':hora' =>$AtenMe ->getHora()
             );
             return $parametros;
         }    
         
     // Getter Y Setter
         
     public function getNRegistro() {
         return $this->NRegistro;
     }

     public function setNRegistro($NRegistro) {
         $this->NRegistro = $NRegistro;
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

     public function getMotivo() {
         return $this->Motivo;
     }

     public function setMotivo($Motivo) {
         $this->Motivo = $Motivo;
     }

     public function getFechaAtenc() {
         return $this->FechaAtenc;
     }

     public function setFechaAtenc($FechaAtenc) {
         $this->FechaAtenc = $FechaAtenc;
     }

     public function getHora() {
         return $this->hora;
     }

     public function setHora($hora) {
         $this->hora = $hora;
     }

//FUNCIONES CRUD  
     
   public function CrearAtencion (Login $Logi) {
        $sql = "INSERT INTO atencionmedica (NRegistro, CedPac, CedMed, Motivo, FechaAtenc,hora) VALUES (?,?,?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Logi));
    }

    public function leerAtendidos() {
        $sql = "SELECT NRegistro, CedPac, CedMed, Motivo, FechaAtenc,hora FROM atencionmedica";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Atendidos = array();
        foreach ($resultado as $fila) {
            $AtMed = new Atencionmedica();
            $this->mapearAtencionmedica($AtMed, $fila);
            $Atendidos[$AtMed->getIdLogin()] = $AtMed;
        }
        return $Atendidos;
    }

    public function actualizarAtencion(Atencionmedica $AtMed) {
        $sql = "UPDATE atencionmedica SET CedMed=?, Motivo=?, FechaAtenc=?,hora=? WHERE NRegistro=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($AtMed));
    }                
}

?>
