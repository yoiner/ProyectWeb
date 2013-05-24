<?php

class Historiaclinica extends Modelo{
 
  private $IdHistoria;
  private $IdPaciente;
  private $IdMedico; 
  private $FecAtencion;
  private $Observaciones;
  private $AntPerson;
  private $AntFamilia;
  private $Edad;
  private $Peso;
  private $Talla;
  private $PreSis;
  private $PreDias;


 public function __construct() {
        parent::__construct();
    }
   
  private function mapearHistoriaclinica(Historiaclinica $histocli, array $props) {
      if (array_key_exists('IdHistoria', $props)) {
            $histocli->setIdHistoria($props['IdHistoria']);
        }
       if (array_key_exists('IdPaciente', $props)) {
            $histocli->setIdPaciente($props['IdPaciente']);
        }
        if (array_key_exists('IdMedico', $props)) {
            $histocli->setIdMedico($props['IdMedico']);
        }
        if (array_key_exists('FecAtencion', $props)) {
            $histocli->setFecAtencion(self::crearFecha($props['FecAtencion']));
        }
        if (array_key_exists('Observaciones', $props)) {
            $histocli->setObservaciones($props['Observaciones']);
        }
        if (array_key_exists('AntPerson', $props)) {
            $histocli->setAntPerson($props['AntPerson']);
        }
        if (array_key_exists('AntFamilia', $props)) {
            $histocli->setAntFamilia($props['AntFamilia']);
        }
        if (array_key_exists('Edad', $props)) {
            $histocli->setEdad($props['Edad']);
        }
         if (array_key_exists('Peso', $props)) {
            $histocli->setPeso($props['Peso']);
         } 
          if (array_key_exists('Talla', $props)) {
            $histocli->setTalla($props['Talla']);
         } 
          if (array_key_exists('PreSis', $props)) {
            $histocli->setPreSis($props['PreSis']);
         } 
          if (array_key_exists('PreDias', $props)) {
            $histocli->setPreDias($props['PreDias']);
         } 
        }
    private function  getParametros (Historiaclinica $Historia ){
       
             $parametros = array(
                 ':idHistoria' =>$Historia ->getIdHistoria(),
                 ':IdPaciente'  =>$Historia ->getIdPaciente(),
                 ':IdMedico' =>$Historia ->getIdMedico(),
                 ':FecAtencion'  =>$this->formatearFecha($Historia ->getFecAtencion()),
                 ':Observaciones' =>$Historia ->getObservaciones(), 
                 ':AntPerson' =>$Historia ->getAntPerson(),
                 ':AntFamilia' =>$Historia ->getAntFamilia(),
                 ':Edad'  =>$Historia ->getEdad(),
                 ':Peso' =>$Historia ->getPeso(),
                 ':Talla'  =>$Historia ->getTalla(),
                 ':PreSis' =>$Historia ->getPreSis(), 
                 ':PreDias' =>$Historia ->getPreDias()    
             );
             return $parametros;
         }    
              
        
       // GETTER Y SETTER
         public function getIdHistoria() {
            return $this->idHistoria;
        }
        public function setIdHistoria($IdHistoria) {
            $this->IdHistoria = $IdHistoria;
        }
        public function getIdPaciente() {
            return $this->IdPaciente;
        }

        public function setIdPaciente($IdPaciente) {
            $this->IdPaciente = $IdPaciente;
        }

        public function getIdMedico() {
            return $this->IdMedico;
        }

        public function setIdMedico($IdMedico) {
            $this->IdMedico = $IdMedico;
        }

        public function getFecAtencion() {
            return $this->FecAtencion;
        }

        public function setFecAtencion($FecAtencion) {
            $this->FecAtencion = $FecAtencion;
        }

        public function getObservaciones() {
            return $this->Observaciones;
        }

        public function setObservaciones($Observaciones) {
            $this->Observaciones = $Observaciones;
        }

        public function getAntPerson() {
            return $this->AntPerson;
        }

        public function setAntPerson($AntPerson) {
            $this->AntPerson = $AntPerson;
        }
        public function getAntFamilia() {
            return $this->AntFamilia;
        }

        public function setAntFamilia($AntFamilia) {
            $this->AntFamilia = $AntFamilia;
        }

        public function getEdad() {
            return $this->Edad;
        }

        public function setEdad($Edad) {
            $this->Edad = $Edad;
        }

        public function getPeso() {
            return $this->Peso;
        }

        public function setPeso($Peso) {
            $this->Peso = $Peso;
        }

        public function getTalla() {
            return $this->Talla;
        }

        public function setTalla($Talla) {
            $this->Talla = $Talla;
        }

        public function getPreSis() {
            return $this->PreSis;
        }

        public function setPreSis($PreSis) {
            $this->PreSis = $PreSis;
        }

        public function getPreDias() {
            return $this->PreDias;
        }

        public function setPreDias($PreDias) {
            $this->PreDias = $PreDias;
        }
 //FUNCIONES CRUD   
   public function crearHistoriaClinica (Historiaclinica $histocli) {
        $sql = "INSERT INTO vallesaludss.historiasclinicas 
   (  idHistoria, IdPaciente, IdMedico, FecAtencion, Observaciones, AntPerson, AntFamilia, Edad, Peso,Talla,
  PreSis, PreDias ) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($histocli));
    }
 public function leerHistoriaClinica() {
        $sql = "SELECT idHistoria, IdPaciente, IdMedico, FecAtencion, Observaciones, AntPerson, AntFamilia,
  Edad, Peso, Talla,  PreSis, PreDias FROM vallesaludss.historiasclinicas";
         $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $historiasclinicas= array();
        foreach ($resultado as $fila) {
            $histocli = new Historiaclinica();
            $this->mapearHistoriaclinica($histocli, $fila);
            $historiasclinicas[$histocli->getIdHistoria()] = $histocli;
        }
        return $historiasclinicas;
            }
  public function actualizarHistoriaClinica(Historiaclinica $histocli) {
        $sql = "UPDATE vallesaludss.historiasclinicas SET   IdMedico, FecAtencion,
  Observaciones, AntPerson, AntFamilia, Edad, Peso, Talla, PreSis, PreDia, WHERE IdHistoria=?";
         $this->__setSql($sql);
        $this->ejecutar($this->getParametros($histocli));
    }
      public function eliminarHistoriaClinica(Historiaclinica $histocli) {
        $sql = "DELETE vallesaludss.historiasclinicas where IdHistoria=?";
        $this->__setSql($sql);
        $param = array(':IdHistoria' => $histocli->getIdHistoria());
        $this->ejecutar($param);        
    }
  }
?>
