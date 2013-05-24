<?php

/**
 * Description of Persona
 *
 * @author WDAM <WENDELL DANIEL ARIAS MARTINEZ>
 */
class Persona  extends Modelo{
  private $Nafilia;
  private $FecAfilia;
  private $TipoDoc;
  private $Identificacion;
  private $Nombre;
  private $Apellidos;
  private $FecNac;
  private $sexo;
  private $EstaCivil;
  private $Municipio;
  private $Barrio;
  private $Direccion;
  private $Telefono;
  private $Email;
  private $Estrato;
  private $Estado;
  private $Clave;
  private $Nivel;
 
  //............-----------------------------------
  
    public function __construct() {
        parent::__construct();
    }
   
  private function mapearPersona(Persona $Afil, array $props) {
        if (array_key_exists('Identificacion', $props)) {
            $Afil->setIdentificacion($props['Identificacion']);
        }
        if (array_key_exists('TipoDoc', $props)) {
            $Afil->setTipoDoc($props['TipoDoc']);
        }
        if (array_key_exists('Nafilia', $props)) {
            $Afil->setNafilia($props['Nafilia']);
        }
        if (array_key_exists('FecAfilia', $props)) {
            $Afil->setFecAfilia(self:: crearFecha($props['FecAfilia']));
        }
        if (array_key_exists('Nombre', $props)) {
            $Afil->setNombre($props['Nombre']);
        }
        if (array_key_exists('Apellidos', $props)) {
            $Afil->setApellidos($props['Apellidos']);
        }
        if (array_key_exists('FecNac', $props)) {
            $Afil->setFecNac(self:: crearFecha($props['FecNac']));
        }
        if (array_key_exists('Sexo', $props)) {
            $Afil->setSexo($props['Sexo']);
        }
        
          if (array_key_exists('EstaCivil', $props)) {
            $Afil->setEstaCivil($props['EstaCivil']);
         } 
          
          if (array_key_exists('Municipio', $props)) {
            $Afil->setMuni_Fk($props['Municipio']);
         } 
          if (array_key_exists('Barrio', $props)) {
            $Afil->setBarrio($props['Barrio']);
         } 
          if (array_key_exists('Direccion', $props)) {
            $Afil->setDireccion($props['Direccion']);
         } 
          if (array_key_exists('Telefono', $props)) {
            $Afil->setTelefono($props['Telefono']);
         } 
          if (array_key_exists('Email', $props)) {
            $Afil->setEmail($props['Email']);
         } 
          if (array_key_exists('Estrato', $props)) {
            $Afil->setEstrato($props['Estrato']);
            } 
          if (array_key_exists('Estado', $props)) {
            $Afil->setEstado($props['Estado']);
            } 
 
            if (array_key_exists('Clave', $props)) {
            $Afil->setClave($props['Clave']);
            } 
            if (array_key_exists('Nivel', $props)) {
            $Afil->setNivel($props['Nivel']);
            } 
         }  
   private function  getParametros (Persona $afiliado ){
       
             $parametros = array(
                 ':Nafilia' =>$afiliado ->getNafilia(),
                 ':TipoDoc'  =>$afiliado ->getTipoDoc(),
                 ':Identificacion' =>$afiliado ->getIdentificacion(),
                 ':Nombre' =>$afiliado ->getNombre(),
                 ':Apellidos' =>$afiliado->getApellidos(),
                 ':FecNac'  =>$this->formatearFecha($afiliado ->getFecNac()),
                 ':FecAfilia'  =>$this->formatearFecha($afiliado ->getFecAfilia()),
                 ':sexo' =>$afiliado ->getSexo(),
                 ':Ocupacion'  =>$afiliado ->getOcupacion(),
                 ':EstaCivil' =>$afiliado ->getEstaCivil(), 
                 ':Municipio' =>$afiliado ->getMunicipio(),
                 ':Barrio' =>$afiliado->getBarrio(),
                 ':Dire'  =>$afiliado ->getDire(),
                 ':Tele' =>$afiliado ->getTele(),
                 ':Email'  =>$afiliado ->getEmail(),
                 ':Estrato' =>$afiliado ->getEstrato(), 
                 ':Estado' =>$afiliado ->getEstado(),
                 ':Clave' =>$afiliado ->getClave(),
                 ':Nivel' =>$afiliado ->getNivel()    
             );
             return $parametros;
 
   }
//GETTER Y SETTER 
  
  public function getNafilia() {
      return $this->Nafilia;
  }

  public function setNafilia($Nafilia) {
      $this->Nafilia = $Nafilia;
  }

  public function getFecAfilia() {
      return $this->FecAfilia;
  }

  public function setFecAfilia($FecAfilia) {
      $this->FecAfilia = $FecAfilia;
  }

  public function getTipoDoc() {
      return $this->TipoDoc;
  }

  public function setTipoDoc($TipoDoc) {
      $this->TipoDoc = $TipoDoc;
  }

  public function getIdentificacion() {
      return $this->Identificacion;
  }

  public function setIdentificacion($Identificacion) {
      $this->Identificacion = $Identificacion;
  }

  public function getNombre() {
      return $this->Nombre;
  }

  public function setNombre($Nombre) {
      $this->Nombre = $Nombre;
  }

  public function getApellidos() {
      return $this->Apellidos;
  }

  public function setApellidos($Apellidos) {
      $this->Apellidos = $Apellidos;
  }

  public function getFecNac() {
      return $this->FecNac;
  }

  public function setFecNac($FecNac) {
      $this->FecNac = $FecNac;
  }

  public function getSexo() {
      return $this->sexo;
  }

  public function setSexo($sexo) {
      $this->sexo = $sexo;
  }

  public function getEstaCivil() {
      return $this->EstaCivil;
  }

  public function setEstaCivil($EstaCivil) {
      $this->EstaCivil = $EstaCivil;
  }

  public function getMunicipio() {
      return $this->Municipio;
  }

  public function setMunicipio($Municipio) {
      $this->Municipio = $Municipio;
  }

  public function getBarrio() {
      return $this->Barrio;
  }

  public function setBarrio($Barrio) {
      $this->Barrio = $Barrio;
  }

  public function getDireccion() {
      return $this->Direccion;
  }

  public function setDireccion($Direccion) {
      $this->Direccion = $Direccion;
  }

  public function getTelefono() {
      return $this->Telefono;
  }

  public function setTelefono($Telefono) {
      $this->Telefono = $Telefono;
  }

  public function getEmail() {
      return $this->Email;
  }

  public function setEmail($Email) {
      $this->Email = $Email;
  }

  public function getEstrato() {
      return $this->Estrato;
  }

  public function setEstrato($Estrato) {
      $this->Estrato = $Estrato;
  }

  public function getEstado() {
      return $this->Estado;
  }

  public function setEstado($Estado) {
      $this->Estado = $Estado;
  }

  public function getClave() {
      return $this->Clave;
  }

  public function setClave($Clave) {
      $this->Clave = $Clave;
  }

  public function getNivel() {
      return $this->Nivel;
  }

  public function setNivel($Nivel) {
      $this->Nivel = $Nivel;
  }
  
  
  // FUNCIONES CRUD
 public function crearAfiliados (Persona$afil) {
        $sql = "INSERT INTO persona
     ( Nafilia, TipoDoc, Identificacion,   TipoAfilia, Nombre, Apellidos, FecNac,  FecAfilia,  Sexo,
    Ocupacion, EstaCivil, Municipio, Barrio, Direccion, Telefono, Email, Estrato, Estado, Clave, Nivel)
      VALUES (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($afil));
    }

    public function leerAfiliados() {
        $sql = "SELECT * FROM persona";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $personas= array();
        foreach ($resultado as $fila) {
            $afil = new Persona();
            $this->mapearPersona($afil, $fila);
            $personas[$afil->getIdentificacion()] = $afil;
        }
        return $personas;
    }

    public function actualizarAfiliados(Persona $afil) {
        $sql = "UPDATE persona SET  
    TipoDoc=?, Identificacion=?,   TipoAfilia=?, Nombre=?, Apellidos=?,FecNac=?,  FecAfilia=?,  Sexo=?,  Ocupacion=?, EstaCivil=?,
    Muni_Fk=?, Barrio=?, Direccion=?, Telefono=?, Email=?, Estrato=?, Estado=?, Clave=?, Nivel=? WHERE Identificacion=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($afil));
    }
    
    public function eliminarAfiliados(Persona $afil) {
        $sql = "UPDATE persona SET  Estado='Inactivo'  where Identificacion=?";
        $this->__setSql($sql);
        $param = array(':Identificacion' => $afil->getIdentificacion());
        $this->ejecutar($param);        
    }     
    

}

?>
