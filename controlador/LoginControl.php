<?php

/**
 * Description of LoginControl
 *
 * @author WDAM
 */
class LoginControl extends Controlador{
   
    function __construct($modelo, $accion) {
        parent::_construct($modelo, $accion);
           $this->setModelo($modelo);
    }

    public function index() {
        try {
          session_start();
            if (!isset($_SESSION['usuario.id'])) {
                 $this->setVista('usuarionoregistrado');
                 $this->vista->set('titulo', 'No registrado');
                return $this->vista->imprimir();
            } 
            $this->vista->set('titulo', 'ValleSalud-SS');
            $this->vista->set('mensaje', '');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
                      echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
     public function recordar() {
        try {
         
            $this->vista->set('titulo', 'Recuperar Contraseña');
            $this->vista->set('mensaje', '');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
                      echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
      public function menuafiliado() {
        $this->vista->set('titulo', 'ValleSalud-SS');
        return $this->vista->imprimir();
}
  public function menuadmin() {
        $this->vista->set('titulo', 'Menu Administrador');
          return $this->vista->imprimir();
       }
       
  public function enviarcorreo() {
               
         if (isset($_POST['acept'])) {
             
            $user= isset($_POST['ident']) ? $_POST['ident'] : NULL;
            $correo= isset($_POST['email"']) ? $_POST['email"']:NULL; 
            $busc= $this->modelo->buscarLogin($user, $correo);
            if ($busc==NULL){
                $this->setVista('recordar');
                $this->vista->set('titulo', 'Recuperar Contraseña');
                $this->vista->set('mensaje', 'Usuario o Correo Electronico Incorrecto'); 
                           
              }  
            else{
                $this->setVista('enviarcorreo');
            }
          }
         
        sleep(1);
          return $this->vista->imprimir();
       }  
 //--------------------------------      
       public function nuevapassword() {
           $this->vista->set('titulo', 'Nueva Contraseña'); 
           $this->vista->set('mensaje', ''); 
        //   sleep(1);
          return $this->vista->imprimir();
       }
  //-------- acceder a la aplicacion     
 Public function acceso(){
        if (isset($_POST['Entrar'])) {
              $user= isset($_POST['usuario']) ? $_POST['usuario'] : NULL;
              $pass= isset($_POST['password']) ? $_POST['password']:NULL;
              $busc= $this->modelo->buscarLogin($user, $pass);
             if ($busc == null){
                $this->setVista('index');
                $this->vista->set('titulo', 'ValleSalud-SS');
                $this->vista->set('mensaje', 'Usuario o Contraseña Incorrecta');
                  
             }
             else
             {
               $nivel = $busc->getNivel();
                    if ($nivel == 1) {
                        // vista de administrador
                        $this->setVista('menuadmin');
                        }
                     else if ($nivel == 2){
                       // vista de usuario paciente
                      $this->setVista('menuafiliado');     
                     }         
                  
             session_start();
            $_SESSION['usuario.id'] = $busc->getIdentificacion();
           }
      return $this->vista->imprimir();
      
      }
 }
 public function  salir () {
         $this->vista->set('titulo', 'Salir');
           sleep(2);
         return $this->vista->imprimir();       
 }
 public function  usuarionoregistrado () {
         $this->vista->set('titulo', 'No registrado');
           sleep(2);
         return $this->vista->imprimir();       
 }
 
}

?>