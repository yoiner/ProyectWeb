<?php
/**
 * Description of Personal Contratado
 *
 * @author WDAM
 */
class Personal  extends Modelo{
    Private $Identificacion;
    Private $TarjetaProf; 
    private $Especialidad;
      
    public function __construct() {
        parent::__construct();
    }
   
  private function mapearPersonal(Personal $Pers, array $props) {
        if (array_key_exists('Identificacion', $props)) {
            $Pers->setIdentificacion($props['Identificacion']);
        }
        if (array_key_exists('TarjetaProf', $props)) {
            $Pers->setTarjetaProf($props['TarjetaProf']);
        }
        if (array_key_exists('Especialidad', $props)) {
            $Pers->setEspecialidad($props['Especialidad']);
        }
     }  
   private function  getParametros (Personal $persona){
       
             $parametros = array(
                 ':Identificacion' =>$persona ->getIdentificacion(),
                 ':TarjetaProf' =>$persona ->getTarjetaProf(),
                 ':Especialidad' =>$persona ->getEspecialidad()        
             );
             return $parametros;
         }           
// Getter y Setter
    public function getIdentificacion() {
        return $this->Identificacion;
    }

    public function setIdentificacion($Identificacion) {
        $this->Identificacion = $Identificacion;
    }

    public function getTarjetaProf() {
        return $this->TarjetaProf;
    }

    public function setTarjetaProf($TarjetaProf) {
        $this->TarjetaProf = $TarjetaProf;
    }

    public function getEspecialidad() {
        return $this->Especialidad;
    }

    public function setEspecialidad($Especialidad) {
        $this->Especialidad = $Especialidad;
    }


   //FUNCIONES CRUD   
  public function crearPersonal(Personal $Pers) {
        $sql = "INSERT INTO personalcontratado (Identificacion, TarjetaProf, Especialidad) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Pers));
    }

    public function leerPersonal() {
        $sql = "SELECT  Identificacion, TarjetaProf, Especialidad FROM personalcontratado";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Personas= array();
        foreach ($resultado as $fila) {
            $Pers = new Personal();
            $this->mapearPersonal($Pers, $fila);
            $Personas[$Pers->getIdentificacion()] = $Pers;
        }
        return $Personas;
    }

    public function actualizarPersonal(Personal $Pers) {
        $sql = "UPDATE personalcontratado SET  TarjetaProf, Especialidad WHERE Identificacion=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Pers));
    }
    
    public function eliminarPersonal(Personal $Pers) {
        $sql = "UPDATE personalcontratado SET  Estado='Inactivo'  where Identificacion=?";
        $this->__setSql($sql);
        $param = array(':Identificacion' => $Pers->getIdentificacion());
        $this->ejecutar($param);        
    }     
    }


?>
