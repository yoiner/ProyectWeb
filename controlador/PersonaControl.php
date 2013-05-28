<?php
/**
 * Description of PersonaControl
 *
 * @author FEWL
 */
class PersonaControl extends Controlador{
  
    function __construct($modelo, $accion) {
        parent::_construct($modelo, $accion);
        $this->setModelo($modelo);
    }

    
     public function index() {
        try {
         
            $this->vista->set('titulo', 'ValleSalud-SS');
            $this->vista->set('mensaje', '');
            return $this->vista->imprimir();
        } catch (Exception $exc) {
                      echo 'Error de aplicacion: '.$exc->getMessage();
        }
    }
    public function enviarcorreo() {
       
         if (isset($_POST['enviarcorreo'])) {
             $user= isset($_POST['ident']) ? $_POST['ident'] : NULL;
            $correo= isset($_POST['email']) ? $_POST['email']:NULL; 
            $persona= $this->modelo->leerPersonaPorMail($user, $correo);
            if ($persona == NULL) {
                $this->setVista('recordar');
                $this->vista->set('titulo', 'Recuperar Contraseña');
                $this->vista->set('mensaje', 'Usuario o Correo Electronico Incorrecto'); 
                return $this->vista->imprimir();
            }

            $msg1 = "Para cambiar su clave, haga clic en el siguiente enlace:<br>";
            //TODO: Mejor URL Para recuperar clave, por ejemplo, 
            //md5 o sha combinando usuario+mail+salt, etc.
            $msg1 .= "http://localhost/ProyectWeb/login/nuevapassword/" . $persona->getIdentificacion();
            $msg1 .= "<br>El administrador";

            //TODO: se puede encapsular el envio de correos en una clase, para 
            //personalizar mas facil los datos configuracion y las opciones de envio.
            $mailer = new PHPMailer();
            $mailer->SetFrom("cursoss400@gmail.com", "PROGRAMACION BAJO WEB SS400");
            $direccion = $persona->getEmail();
            $nombre = $persona->getNombre() . " " . $persona->getApellidos();
            $mailer->AddAddress($direccion, $nombre);
            $mailer->CharSet = "UTF-8";
            $mailer->SMTPDebug = true;
            $mailer->Subject = "Cambio de contraseña en la aplicación ValleSalud-SS";
            $mailer->MsgHTML($msg1);
            $mailer->IsSMTP();
            $mailer->Host = "smtp.gmail.com";
            $mailer->Port = 587;
           // $mailer->SMTPAuth = true;
            $mailer->SMTPSecure = "tls";
            $mailer->Username = "cursoss400@gmail.com";
            $mailer->Password = "curso-400";
            if (!$mailer->Send()) {
                $this->vista->set("mensaje", "Error al enviar correo! (" . $mailer->ErrorInfo . ")");
                return $this->vista->imprimir();
            } else {
                $this->vista->set('mensaje', 'Se ha enviado la informacion  de acceso a su correo.');
                // $this->setVista('enviarcorreo');
                return $this->vista->imprimir();
            }
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
}

?>
