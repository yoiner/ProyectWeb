<?php

/**
 * Description of TipoPersonal
 *
 * @author WDAM
 */
class Nivel extends Modelo{
  Private $idNivel;
  Private $Nivel;
  
 
  public function __construct() {
        parent::__construct();
    }
 private function mapearTipoPers(Nivel $Tper, array $props) {
        if (array_key_exists('idNivel', $props)) {
            $Tper->setIdNivel($props['idNivel']);
        }
        if (array_key_exists('Nivel', $props)) {
            $Tper->setNivel($props['Nivel']);
        }
      }
private function  getParametros (Nivel $Tpers ){
            $parametros = array(
                 ':idNivel' =>$Tpers ->getIdNivel(),
                 ':Nivel'  =>$Tpers ->getNivel(),
                );
             return $parametros;
         }           
     // GETTER Y SETTER
         
     public function getIdNivel() {
         return $this->idNivel;
     }

     public function setIdNivel($idNivel) {
         $this->idNivel = $idNivel;
     }

     public function getNivel() {
         return $this->Nivel;
     }

     public function setNivel($Nivel) {
         $this->Nivel = $Nivel;
     }

         
     //Funciones CRUD

    public function crearTipoPerso(Nivel $Tper) {
        $sql = "INSERT INTO nivel (idNivel,  Nivel) VALUES (?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Tper));
    }

    public function leerTipoPerso() {
        $sql = "SELECT idNivel,  Descripcion FROM nivel";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Tpersonal = array();
        foreach ($resultado as $fila) {
            $Tper = new Nivel();
            $this->mapearTipoPers($Tper, $fila);
            $Tpersonal[$Tper->getIdNivel()] = $Tper;
        }
        return $Tpersonal;
    }
}

?>
