<?php

/**
 * Description of Cum
 *
 * @author WDAM
 */
class Cum extends Modelo{
  Private $idCum;
  Private $Expediente;
  Private $Producto;
  Private $RegistroSanitario;
  Private $Vencimiento;
  Private $EstadoRegistro;
  Private $Presentacion;
  Private $Cantidad;
  Private $Unidad;
  Private $Fabricante;
  

 public function __construct() {
        parent::__construct();
    }
 private function mapearCum(Cum $cumed, array $props) {
        if (array_key_exists('idCum', $props)) {
            $cumed->setIdCum($props['idCum']);
        }
        if (array_key_exists('Expediente', $props)) {
            $cumed->setExpediente($props['Expediente']);
        }
        if (array_key_exists('Producto', $props)) {
            $cumed->setProducto($props['Producto']);
        }
         if (array_key_exists('RegistroSanitario', $props)) {
            $cumed->setRegistroSanitario ($props['RegistroSanitario']);
        }
        if (array_key_exists('Vencimiento', $props)) {
            $cumed->setVencimiento($props['Vencimiento']);
        }
        if (array_key_exists('EstadoRegistro', $props)) {
            $cumed->setEstadoRegistro($props['EstadoRegistro']);
        }
         if (array_key_exists('Presentacion', $props)) {
            $cumed->setPresentacion($props['Presentacion']);
        }
        if (array_key_exists('Cantidad', $props)) {
            $cumed->setCantidad($props['Cantidad']);
        }
        if (array_key_exists('Unidad', $props)) {
            $cumed->setUnidad($props['Unidad']);
        }
         if (array_key_exists('Fabricante', $props)) {
            $cumed->setFabricante($props['Fabricante']);
        }
         }
         private function  getParametros (Cum $cum){
       
             $parametros = array(
                 ':idCum' =>$cum ->getIdCum(),
                 ':Expediente'  =>$cum ->getExpediente(),
                 ':Producto' =>$cum ->getProducto(),
                 ':RegistroSanitario' =>$cum ->getRegistroSanitario(),
                 ':Vencimiento'  =>$cum ->getVencimiento(),
                 ':EstadoRegistro' =>$cum ->getEstadoRegistro(),
                 ':Presentacion' =>$cum ->getPresentacion(),
                 ':Cantidad'  =>$cum ->getCantidad(),
                 ':Unidad' =>$cum ->getUnidad(),
                 ':Fabricante'=> $cum->getFabricante()    
             ); 
             return $parametros;
         }            
 
// GETTER Y SETTER 
  
  public function getIdCum() {
      return $this->idCum;
  }

  public function setIdCum($idCum) {
      $this->idCum = $idCum;
  }

  public function getExpediente() {
      return $this->Expediente;
  }

  public function setExpediente($Expediente) {
      $this->Expediente = $Expediente;
  }

  public function getProducto() {
      return $this->Producto;
  }

  public function setProducto($Producto) {
      $this->Producto = $Producto;
  }

  public function getRegistroSanitario() {
      return $this->RegistroSanitario;
  }

  public function setRegistroSanitario($RegistroSanitario) {
      $this->RegistroSanitario = $RegistroSanitario;
  }

  public function getVencimiento() {
      return $this->Vencimiento;
  }

  public function setVencimiento($Vencimiento) {
      $this->Vencimiento = $Vencimiento;
  }

  public function getEstadoRegistro() {
      return $this->EstadoRegistro;
  }

  public function setEstadoRegistro($EstadoRegistro) {
      $this->EstadoRegistro = $EstadoRegistro;
  }

  public function getPresentacion() {
      return $this->Presentacion;
  }

  public function setPresentacion($Presentacion) {
      $this->Presentacion = $Presentacion;
  }

  public function getCantidad() {
      return $this->Cantidad;
  }

  public function setCantidad($Cantidad) {
      $this->Cantidad = $Cantidad;
  }

  public function getUnidad() {
      return $this->Unidad;
  }

  public function setUnidad($Unidad) {
      $this->Unidad = $Unidad;
  }

  public function getFabricante() {
      return $this->Fabricante;
  }

  public function setFabricante($Fabricante) {
      $this->Fabricante = $Fabricante;
  }
// FUNCIONES CRUD
  
   //idCum, Expediente, Producto, RegistroSanitario,  Vencimiento, EstadoRegistro , Presentacion, Cantidad, Unidad, Fabricante
 public function crearCum (Cum $cumed) {
        $sql = "INSERT INTO vallesaludss.cum (idCum, Expediente, Producto, 
            RegistroSanitario,  Vencimiento, EstadoRegistro , Presentacion, 
            Cantidad, Unidad, Fabricante) VALUES (?,?,?,?,?,?,?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($cumed));
    }

    public function leerCum() {
        $sql = "SELECT idCum, Expediente, Producto, RegistroSanitario, 
            Vencimiento, EstadoRegistro , Presentacion, Cantidad, Unidad, 
            Fabricante FROM vallesaludss.cum";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Cumedi = array();
        foreach ($resultado as $fila) {
            $cumed = new Cum();
            $this->mapearCum($cumed, $fila);
            $Cumedi[$cumed->getIdCum()] = $cumed;
        }
        return $Cumedi;
    }

    public function actualizarCum(Cum $cuned) {
        $sql = "UPDATE vallesaludss.cum SET Expediente=?, Producto=?, RegistroSanitario=?, 
            Vencimiento=?, EstadoRegistro =?, Presentacion=?, Cantidad=?, Unidad=?, 
            Fabricante = ? WHERE idCum=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($cuned));
    }
    
    public function eliminarCum(Cum $cumed) {
        $sql = "DELETE vallesaludss.cum where idCum=?";
        $this->__setSql($sql);
        $param = array(':idCum' => $cumed->getIdCum());
        $this->ejecutar($param);        
    }
    
  }

?>
