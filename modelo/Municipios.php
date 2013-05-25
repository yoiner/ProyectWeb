<?php

/**
 * Description of Municipios
 *
 * @author yoiner valle
 */
class Municipios  extends Modelo{
    
    private $idMuni;
    private $idDepart;
    private $munic;
    private $depto;


    public function __construct() {
        parent::__construct();
    }
 private function mapearMunicipios(Municipios $Muni, array $props) {
        if (array_key_exists('idMuni', $props)) {
            $Muni->setIdMuni($props['idMuni']);
        }
        if (array_key_exists('CodDepart', $props)) {
            $Muni->setIdDepart($props['CodDepart']);
        }
        if (array_key_exists('munic', $props)) {
            $Muni->setMunic($props['munic']);
        }
        if (array_key_exists('departamento', $props)) {
            $Muni->setDepto($props['departamento']);
        }
         }
         private function  getParametros (Municipios $muni ){
       
             $parametros = array(
                 ':idMuni' =>$muni ->getIdMunicipios(),
                 ':munic'  =>$muni ->getMunic(),
                 ':CodDepart' =>$muni ->getIdDepart(),
                 ':depto' =>$muni ->getIdDepart()    
             );
             return $parametros;
         }           
     
         
      // Getter y setter 
      public function getIdMuni() {
          return $this->idMuni;
      }

      public function setIdMuni($idMuni) {
          $this->idMuni = $idMuni;
      }

      public function getMunic() {
          return $this->munic;
      }

      public function setMunic($munic) {
          $this->munic = $munic;
      }

      public function getIdDepart() {
          return $this->idDepart;
      }

      public function setIdDepart($idDepart) {
          $this->idDepart = $idDepart;
      }

      public function getDepto() {
          return $this->depto;
      }

      public function setDepto($depto) {
          $this->depto = $depto;
      }


 //Funciones CRUD

    public function crearMunicipios (Municipios $Muni) {
        $sql = "INSERT INTO vallesaludss.Municipios 
     (idMuni, Nombre, CodDepart) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Muni));
    }

    public function leerMunicipios($departamento='') {
        $sql = "SELECT m.idMuni, m.CodDepart, m.Nombre as munic, d.Nombre as depto FROM municipios m, departamentos d WHERE m.CodDepart=$departamento";
       // $sql.= empty($departamento) ? $departamento : 'AND d.CodDepart= '.$departamento;
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $municipios = array();
        foreach ($resultado as $fila) {
            $Muni = new Municipios();
            $this->mapearMunicipios($Muni, $fila);
            $municipios[$Muni->getIdMuni()] = $Muni;
        } 
        return $municipios;
    }
     public function leerDepartamento(){
        $sql = "SELECT CodDepart, Nombre as departamento FROM departamentos";
        $this->__setSql($sql);
        $res = $this->consultar($sql);
        $deptos = array();
        return $res;
    }


    public function actualizarMunicipios(Municipios $Muni) {
        $sql = "UPDATE municipios SET  idMuni=?, Nombre=?, CodDepart=? WHERE idMuni=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Muni));
    }
    
    public function eliminarMunicipios(Municipios $Muni) {
        $sql = "DELETE municipios where idMuni=?";
        $this->__setSql($sql);
        $param = array(':idMuni' => $Muni->getIdMuni());
        $this->ejecutar($param);        
    }
         
}

?>
