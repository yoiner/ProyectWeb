<?php

/**
 * Description of Tipodocumento
 *
 * @author WDAM
 */
class Tipodocumento extends Modelo {
  Private $idTipoDoc;
  Private $Descripcion;
  
  
  public function __construct() {
        parent::__construct();
    }
 private function mapearDocumento(Tipodocumento $Docu, array $props) {
        if (array_key_exists('idTipoDoc', $props)) {
            $Docu->setIdTipoDoc($props['idTipoDoc']);
        }
        if (array_key_exists('Descripcion', $props)) {
            $Docu->setDescripcion($props['Descripcion']);
        }
      }
private function  getParametros (Tipodocumento $Documen ){
            $parametros = array(
                 ':idTipoDoc' =>$Documen ->getIdTipoDoc(),
                 ':Descripcion'  =>$Documen ->getDescripcion(),
                );
             return $parametros;
         }           
     // GETTER Y SETTER
         
     public function getIdTipoDoc() {
         return $this->idTipoDoc;
     }

     public function setIdTipoDoc($idTipoDoc) {
         $this->idTipoDoc = $idTipoDoc;
     }

          public function getDescripcion() {
         return $this->Descripcion;
     }

     public function setDescripcion($Descripcion) {
         $this->Descripcion = $Descripcion;
     }

     //Funciones CRUD

    public function crearTipoDoc (TipoAfiliado $Docu) {
        $sql = "INSERT INTO vallesaludss.tipodocumento (idTipoDoc,  Descripcion) VALUES (?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Docu));
    }

    public function leerTipoDoc() {
        $sql = "SELECT idTipoDoc,  Descripcion FROM vallesaludss.tipodocumento";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Document = array();
        return $resultado;
     /*   foreach ($resultado as $fila) {
            $Docu = new Tipodocumento();
            $this->mapearDocumento($Docu, $fila);
            $Document[$Docu->getIdTipoDoc()] = $Docu;
        } */
      
    }
}

?>
