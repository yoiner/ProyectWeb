<?php


/**
 * Description of GrupoEnfermedad
 *
 * @author WDAM
 */
class Grupoenfermedad  extends Modelo{
  
    Private $IdGrupo;
    Private $Capitulo;
    Private $Descripcion;
    Private $Codigos;
            
            
 public function __construct() {
        parent::__construct();
    }
 private function mapearGrupoenfermedad(Grupoenfermedad $Grup, array $props) {
           
       if (array_key_exists('IdGrupo', $props)) {
            $Grup->setIdGrupo($props['IdGrupo']);
        }
        if (array_key_exists('Capitulo', $props)) {
            $Grup->setCapitulo($props['Capitulo']);
        }
        if (array_key_exists('Descripcion', $props)) {
            $Grup->setDescripcion($props['Descripcion']);
        }
        if (array_key_exists('Codigos', $props)) {
            $Grup->setCodigos($props['Codigos']);
        }
   }
         
private function  getParametros (Grupoenfermedad $Grupo ){
       
             $parametros = array(
                 ':IdGrupo' =>$Grupo->getIdGrupo(),
                 ':Capitulo' =>$Grupo->getCapitulo(),
                 ':Descripcion'  =>$Grupo ->getDescripcion(),
                 ':Codigos' =>$Grupo->getCodigos()
             );
             return $parametros;
         }     
         
 // GETTER Y SETTER        
 public function getIdGrupo() {
     return $this->IdGrupo;
 }

 public function setIdGrupo($IdGrupo) {
     $this->IdGrupo = $IdGrupo;
 }

 public function getCapitulo() {
     return $this->Capitulo;
 }

 public function setCapitulo($Capitulo) {
     $this->Capitulo = $Capitulo;
 }

 public function getDescripcion() {
     return $this->Descripcion;
 }

 public function setDescripcion($Descripcion) {
     $this->Descripcion = $Descripcion;
 }

 public function getCodigos() {
     return $this->Codigos;
 }

 public function setCodigos($Codigos) {
     $this->Codigos = $Codigos;
 }

//Funciones CRUD

    public function AdicionarGrupoEnfermedad (Grupoenfermedad $Grup) {
        $sql = "INSERT INTO vallesaludss.gruposenfermedades (IdGrupo, Capitulo, Descripcion, Codigos) VALUES (?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Grup));
    }

    public function leerGrupoEnfermedades() {
        $sql = "SELECT IdGrupo, Capitulo, Descripcion, Codigos FROM vallesaludss.gruposenfermedades";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Grupos = array();
        foreach ($resultado as $fila) {
            $Grup = new Grupoenfermedad();
            $this->mapearGrupoenfermedad($Grup, $fila);
            $Grupos[$Grup->getIdGrupo()] = $Grup;
        }
        return $Grupos;
    }

    public function actualizarGrupoEnfermedad(Grupoenfermedad $Grup) {
        $sql = "UPDATE vallesaludss.gruposenfermedades SET  Capitulo=?, Descripcion=?, Codigos=? WHERE IdGrupo=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Grup));
    }
    
    public function eliminarGrupoEnfermedad(Grupoenfermedad $Grup) {
        $sql = "DELETE vallesaludss.gruposenfermedades where IdGrupo=?";
        $this->__setSql($sql);
        $param = array(':IdGrupo' => $Grup->getIdGrupo());
        $this->ejecutar($param);        
    }
         
 
}

?>
