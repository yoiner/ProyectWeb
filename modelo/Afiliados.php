<?php

/**
 * Description of Afiliados
 *
 * @author WDAM
 */
class Afiliados extends Modelo{
    
    private $Identificacion;
    Private $TipoAfilia; 
     
    public function __construct() {
        parent::__construct();
    }
   
  private function mapearAfiliados(Afiliados $Afil, array $props) {
        if (array_key_exists('Identificacion', $props)) {
            $Afil->setIdentificacion($props['Identificacion']);
        }
            if (array_key_exists('TipoAfilia', $props)) {
            $Afil->setTipoAfi($props['TipoAfilia']);
            } 
         }  
   private function  getParametros (Afiliados $afiliado ){
       
             $parametros = array(
                 ':Identificacion' =>$afiliado ->getIdentificacion(),
                 ':TipoAfilia' =>$afiliado ->getTipoAfilia()
                   
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

    public function getTipoAfilia() {
        return $this->TipoAfilia;
    }

    public function setTipoAfilia($TipoAfilia) {
        $this->TipoAfilia = $TipoAfilia;
    }    

   //FUNCIONES CRUD   
  public function crearAfiliados (Afiliados $afil) {
        $sql = "INSERT INTO afiliados  (Identificacion,   TipoAfilia) VALUES (?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($afil));
    }

    public function leerAfiliados() {
        $sql = "SELECT  Identificacion,  TipoAfilia FROM afiliados";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $afiliados= array();
        foreach ($resultado as $fila) {
            $afil = new Afiliados();
            $this->mapearAfiliados($afil, $fila);
            $afiliados[$afil->getIdentificacion()] = $afil;
        }
        return $afiliados;
    }

    public function actualizarAfiliados(Afiliados $afil) {
        $sql = "UPDATE afiliados SET  Identificacion=?,   TipoAfilia=? WHERE Identificacion=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($afil));
    }
    
    public function eliminarAfiliados(Afiliados $afil) {
        $sql = "UPDATE afiliados SET  Estado='Inactivo'  where Identificacion=?";
        $this->__setSql($sql);
        $param = array(':Identificacion' => $afil->getIdentificacion());
        $this->ejecutar($param);        
    }     
    }
?>
