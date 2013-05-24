<?php



/**
 * Description of Subgrupos de las Enfermedades
 *
 * @author WDAM
 */
class Subgrupos extends Modelo{
    
 Private $Codigo;
 Private $Descripcion;
 Private $GrupoMortalidad;
 Private $Capitulo;
 Private $IdSubgrupo;
 
 public function __construct() {
        parent::__construct();
    }
 private function mapearSubGrupo(Subgrupos $Subg, array $props) {
           
       if (array_key_exists('Codigo', $props)) {
            $Subg->setCodigo($props['Codigo']);
        }
       
        if (array_key_exists('Descripcion', $props)) {
            $Subg->setDescripcion($props['Descripcion']);
        }
        if (array_key_exists('GrupoMortalidad', $props)) {
            $Subg->setGrupoMortalidad($props['GrupoMortalidad']);
        }
       if (array_key_exists('Capitulo', $props)) {
            $Subg->setCapitulo($props['Capitulo']);
        }  
        if (array_key_exists('IdSubgrupo', $props)) {
            $Subg->setIdSubgrupo($props['IdSubgrupo']);
        } 
   }
         
private function  getParametros (Subgrupos $Subgrupo ){
       
             $parametros = array(
                 ':Codigo' =>$Subgrupo->getCodigo(),
                 ':Descripcion'  =>$Subgrupo ->getDescripcion(),
                 ':GrupoMortalidad' =>$Subgrupo->getGrupoMortalidad(),
                 ':Capitulo' =>$Subgrupo->getCapitulo(), 
                 ':IdSubgrupo' =>$Subgrupo->getIdSubgrupo()
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

 public function getGrupoMortalidad() {
     return $this->GrupoMortalidad;
 }

 public function setGrupoMortalidad($GrupoMortalidad) {
     $this->GrupoMortalidad = $GrupoMortalidad;
 }

 public function getCapitulo() {
     return $this->Capitulo;
 }

 public function setCapitulo($Capitulo) {
     $this->Capitulo = $Capitulo;
 }

 public function getIdSubgrupo() {
     return $this->IdSubgrupo;
 }

 public function setIdSubgrupo($IdSubgrupo) {
     $this->IdSubgrupo = $IdSubgrupo;
 }

 //Funciones CRUD

    public function AdicionarSubGrupo (Subgrupos $Subg) {
        $sql = "INSERT INTO vallesaludss.subgrupoenfermedades (Codigo, Descripcion, GrupoMortalidad, Capitulo, IdSubgrupo) VALUES (?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Subg));
    }

    public function leerSubGrupo() {
        $sql = "SELECT Codigo, Descripcion, GrupoMortalidad, Capitulo, IdSubgrupo FROM vallesaludss.subgrupoenfermedades";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $SubGrup = array();
        foreach ($resultado as $fila) {
            $Subg = new Subgrupos();
            $this->mapearSubGrupo($Subg, $fila);
            $SubGrup[$Subg->getCodigo()] = $Subg;
        }
        return $SubGrup;
    }

    public function actualizarSubGrupo(Subgrupos $Subg) {
        $sql = "UPDATE subgrupoenfermedades SET  Descripcion, GrupoMortalidad, Capitulo, IdSubgrupo WHERE Codigo=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Subg));
    }
   
    public function eliminarSubGrupo(Subgrupos $Subg) {
        $sql = "DELETE subgrupoenfermedades where Codigo=?";
        $this->__setSql($sql);
        $param = array(':Codigo' => $Subg->getCodigo());
        $this->ejecutar($param);        
    }

}

?>
