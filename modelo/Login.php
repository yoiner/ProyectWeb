<?php
/**
 * Description of Login
 *
 * @author WDAM
 */
class Login  extends Modelo{
Private $idLogin;
private $clave;
private $nivel;

 public function __construct() {
        parent::__construct();
    }
 private function mapearLogin(Login $Logi, array $props) {
        if (array_key_exists('idLogin', $props)) {
            $Logi->setIdLogin($props['idLogin']);
        }
        if (array_key_exists('clave', $props)) {
            $Logi->setClave($props['clave']);
        }
        if (array_key_exists('nivel', $props)) {
            $Logi->setNivel($props['nivel']);
        }
         }
         private function  getParametros ( Login $login ){
       
             $parametros = array(
                 ':idLogin' =>$login ->getIdLogin(),
                 ':clave'  =>$login ->getClave(),
                 ':nivel' =>$login ->getNivel()
             );
             return $parametros;
         }           
     
         
      // Getter y setter 
         public function getIdLogin() {
             return $this->idLogin;
         }

         public function setIdLogin($idLogin) {
             $this->idLogin = $idLogin;
         }

         public function getClave() {
             return $this->clave;
         }

         public function setClave($clave) {
             $this->clave = $clave;
         }

         public function getNivel() {
             return $this->nivel;
         }

         public function setNivel($nivel) {
             $this->nivel = $nivel;
         }

 //Funciones CRUD

    public function crearLogin (Login $Logi) {
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
        $sql =  "SELECT  Nivel FROM persona WHERE Identificacion='$cod' and Clave='$pas'"; 
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
