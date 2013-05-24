<?php

/**
 * Description of Tipoafiliado
 *
 * @author WDAM
 */
class Tipoafiliado extends Modelo {
  Private $Codigo;
  Private $Descripcion;
  
  
  public function __construct() {
        parent::__construct();
    }
 private function mapearTipoAfiliado(Tipoafiliado $Afi, array $props) {
        if (array_key_exists('Codigo', $props)) {
            $Afi->setCodigo($props['Codigo']);
        }
        if (array_key_exists('Descripcion', $props)) {
            $Afi->setDescripcion($props['Descripcion']);
        }
      }
private function  getParametros (Tipoafiliado $Afil ){
            $parametros = array(
                 ':Codigo' =>$Afil ->getCodigo(),
                 ':Descripcion'  =>$Afil ->getDescripcion(),
                );
             return $parametros;
         }           
     // GETTER Y SETTER
         
     public function getCodigo() {
         return $this->Codigo;
     }

     public function setCodigo($Codigo) {
         $this->Codigo = $Codigo;
     }

     public function getDescripcion() {
         return $this->Descripcion;
     }

     public function setDescripcion($Descripcion) {
         $this->Descripcion = $Descripcion;
     }

     //Funciones CRUD

    public function crearTipoAfil (Tipoafiliado $Afi) {
        $sql = "INSERT INTO vallesaludss.tipoafiliado (Codigo,  Descripcion) VALUES (?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Afi));
    }

    public function leerTipoAfiliacion() {
        $sql = "SELECT Codigo,  Descripcion FROM vallesaludss.tipoafiliado";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Tafiliado= array();
        foreach ($resultado as $fila) {
            $Afi = new Tipoafiliado();
            $this->mapearTipoAfiliado($Afi, $fila);
            $Tafiliado[$Afi->getCodigo()] = $Afi;
        }
        return $Tafiliado;
    }
}

?>
