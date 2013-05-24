<?php



/**
 * Description of Departamento
 *
 * @author WDAM
 */
class Departamento extends Modelo{
  Private $CodDepart;
  Private $Nombre;
  
  //*******************************
   public function __construct() {
        parent::__construct();
    }
    //********************************
 private function mapearDepartamento(Departamento $Depart, array $props) {
        if (array_key_exists('CodDepart', $props)) {
            $Depart->setCodDepart($props['CodDepart']);
        }
        if (array_key_exists('Nombre', $props)) {
            $Depart->setNombre($props['Nombre']);
        }
      
         }  
       
private function  getParametros (Departamento $Depart ){
       
             $parametros = array(
                 ':CodDepart' =>$Depart ->setCodDepart(),
                 ':Nombre'  =>$Depart->setNombre(),
                 );
             return $parametros;
         }              
         
         // Getter y Setter   *******************************   
         public function getCodDepart() {
             return $this->CodDepart;
         }

         public function setCodDepart($CodDepart) {
             $this->CodDepart = $CodDepart;
         }

         public function getNombre() {
             return $this->Nombre;
         }

         public function setNombre($Nombre) {
             $this->Nombre = $Nombre;
         }
//**************  FUNCIONES CRUD  *************
  public function Añadirdepartamento(Departamento $Depart) {
        $sql = "INSERT INTO vallesaludss.departamentos (CodDepart, Nombre) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Depart));
    }

         public function leerDepartamentos() {
        $sql = "SELECT CodDepart, Nombre FROM vallesaludss.departamentos";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Departamentos= array();
        foreach ($resultado as $fila) {
            $depart = new Departamento();
            $this->mapearDepartamento($depart, $fila);
            $Departamentos[$depart->getCodDepart()] = $depart;
        }
        return $Departamentos;
    }
}

?>
