<?php

/**
 * Description of CitasMedicas
 *
 * @author yoiner valle
 */
class Citas extends Modelo {
    //put your code here
    
    private $idCitas;
    private $idPaciente;
    private $idMedico;
    private $Fecha;
    private $Hora;
    
    public function __construct() {
        parent::__construct();
    }
 private function mapearCitas(Citas $Citas, array $props) {
        if (array_key_exists('idCitas', $props)) {
            $Citas->setIdCitas($props['idCitas']);
        }
        if (array_key_exists('idPaciente', $props)) {
            $Citas->setIdPaciente($props['idPaciente']);
        }
        if (array_key_exists('idMedico', $props)) {
            $Citas->setIdMedico($props['idMedico']);
        }
         if (array_key_exists('Fecha', $props)) {
            $Citas->setFecha(self::crearFecha($props['Fecha']));
        }
         if (array_key_exists('Hora', $props)) {
            $Citas->setHora($props['Hora']);
        }
         }
         private function  getParametros (Citas $Citas ){
       
             $parametros = array(
                 ':idCitas' =>$Citas ->getIdCitas(),
                 ':idPaciente'  =>$Citas ->getIdPaciente(),
                 ':idMedico' =>$Citas ->getIdMedico(),
                 ':Fecha'  =>  $this->formatearFecha($Citas ->getFecha()),
                 ':Hora' =>$Citas ->getHora()
             );
             return $parametros;
         }           
     
         
      // Getter y setter 
     
      public function getIdCitas() {
          return $this->idCitas;
      }

      public function setIdCitas($idCitas) {
          $this->idCitas = $idCitas;
      }

      public function getIdPaciente() {
          return $this->idPaciente;
      }

      public function setIdPaciente($idPaciente) {
          $this->idPaciente = $idPaciente;
      }

      public function getIdMedico() {
          return $this->idMedico;
      }

      public function setIdMedico($idMedico) {
          $this->idMedico = $idMedico;
      }

      public function getFecha() {
          return $this->Fecha;
      }

      public function setFecha($Fecha) {
          $this->Fecha = $Fecha;
      }

      public function getHora() {
          return $this->Hora;
      }

      public function setHora($Hora) {
          $this->Hora = $Hora;
      }

       //Funciones CRUD

    public function crearCitas (Citas $Citas) {
        $sql = "INSERT INTO citas (idCitas, idPaciente, idMedico, Fecha,Hora) VALUES (?,?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Citas));
    }

    public function leerCitasMedicas() {
        $sql = "SELECT idCitas, idPaciente, idMedico,  Fecha, Hora  FROM citas";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $CitasMed = array();
        foreach ($resultado as $fila) {
            $Citas = new Citas();
            $this->mapearCitas($Citas, $fila);
            $CitasMed[$Citas->getIdCitas()] = $Citas;
        }
        return $CitasMed;
    }

    public function actualizarCitasMedicas(Citas $Citas) {
        $sql = "UPDATE citas SET  idPaciente=?,  idMedico=?, Fecha=?, Hora=? WHERE IdCitas=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Citas));
    }
    
    public function eliminarCitasMedicas(Citas $Citas) {
        $sql = "DELETE citas where idCitas=?";
        $this->__setSql($sql);
        $param = array(':idCitas' => $Citas->getIdCitas());
        $this->ejecutar($param);        
    }
         
}

?>
