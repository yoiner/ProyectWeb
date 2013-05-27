<?php
/**
 * Description of Login
 *
 * @author WDAM
 */
class Login  extends Modelo{
    Private $identificacion;
    private $Clave;
    private $Nivel;
    private $Email;

    public function __construct() {
        parent::__construct();
    }

    private function mapearLogin(Login $Logi, array $props) {
        if (array_key_exists('Identificacion', $props)) {
            $Logi->setIdentificacion($props['Identificacion']);
        }
        if (array_key_exists('Clave', $props)) {
            $Logi->setClave($props['Clave']);
        }
        if (array_key_exists('Nivel', $props)) {
            $Logi->setNivel($props['Nivel']);
        }
        if (array_key_exists('Email', $props)) {
            $Logi->setEmail($props['Email']);
        }
    }

    private function getParametros(Login $login) {

        $parametros = array(
            ':Identificacion' => $login->getIdentificacion(),
            ':Clave' => $login->getClave(),
            ':Nivel' => $login->getNivel(),
            ':Email' => $login->getEmail()
        );
        return $parametros;
    }

    // Getter y setter 
    public function getIdentificacion() {
        return $this->identificacion;
    }

    public function setIdentificacion($identificacion) {
        $this->identificacion = $identificacion;
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

    public function getEmail() {
        return $this->Email;
    }

    public function setEmail($Email) {
        $this->Email = $Email;
    }

    //Funciones CRUD

    public function crearLogin(Login $Logi) {
        $sql = "INSERT INTO vallesaludss.login (idLogin, clave, nivel) VALUES (?,?,?)";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Logi));
    }

    public function leerLogin() {
        $sql = "SELECT idLogin, clave, nivel FROM vallesaludss.login";
        $this->__setSql($sql);
        $resultado = $this->consultar($sql);
        $Logueados = array();
        foreach ($resultado as $fila) {
            $Logi = new Login();
            $this->mapearLogin($Logi, $fila);
            $Logueados[$Logi->getIdLogin()] = $Logi;
        }
        return $Logueados;
    }

    public function actualizarLogin(Login $Logi) {
        $sql = "UPDATE vallesaludss.login SET clave=?, nivel=? WHERE idLogin=?";
        $this->__setSql($sql);
        $this->ejecutar($this->getParametros($Logi));
    }

    public function eliminarLogin(Login $Logi) {
        $sql = "DELETE vallesaludss.login where idLogin=?";
        $this->__setSql($sql);
        $param = array(':idLogin' => $Logi->getIdLogin());
        $this->ejecutar($param);
    }
    
   public function buscarLogin($cod, $pas) {
        $sql =  "SELECT  Nivel, Identificacion, Clave FROM persona WHERE Identificacion='$cod' and Clave='$pas'"; 
        $param = array($cod, $pas);
        $this->__setSql($sql);
        $resultado = $this->consultar($sql, $param);
        $logueado= NULL ; 
     foreach ($resultado as $fila){
         $logueado = new Login();
         $this->mapearLogin($logueado, $fila);
     }
     return $logueado;
    } 
      
     public function leerUsuarioPorClave($usuario, $clave){
        //TODO: Hacer las funciones de encriptacion en php 
        //$clave = encriptar_sha($clave)
        
        $sql = "SELECT * FROM usuario WHERE documento=? AND clave=SHA(?)";
        $param = array($usuario,$clave);
        $this->__setSql($sql);
        $res = $this->consultar($sql, $param);
        $usuario = NULL;
        foreach ($res as $fila) {
            $usuario = new Usuario();
            $this->mapearUsuario($usuario, $fila);
        }
        return $usuario;
    }

    }
?>
