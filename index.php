<?php
define('DS', DIRECTORY_SEPARATOR);
define('HOME', dirname(__FILE__));
define('APPNAME', 'ProyectWeb');

ini_set('display_erros', 1);

function manejadorErrores($code, $mensaje, $archivo, $linea, $contexto = NULL){
    if(E_RECOVERABLE_ERROR === $code){
        throw new ErrorException($mensaje, $code,1, $archivo, $linea, NULL );
    }
    return false;
}
set_error_handler('manejadorErrores');

function cargadorClases(){
    require_once './config/Configuracion.php';
    require_once './config/Db.php';
    require_once './modelo/Modelo.php';
    require_once './modelo/Login.php';
    require_once './modelo/Afiliados.php';
    require_once './modelo/Municipios.php';
    require_once './modelo/Personal.php';
    require_once './modelo/Persona.php';
    require_once './modelo/Tipodocumento.php';
    require_once './modelo/Nivel.php';
    require_once './controlador/Controlador.php';
    require_once './controlador/LoginControl.php';
    require_once './controlador/AfiliadosControl.php';
    require_once './controlador/MunicipiosControl.php';
    require_once './controlador/PersonalControl.php';
    require_once './controlador/PersonaControl.php';
    require_once './vista/Vista.php';
    require_once './utiles/class.phpmailer.php';
    require_once './utiles/class.pop3.php';
    require_once './utiles/class.smtp.php';
     
}

spl_autoload_register('cargadorClases');
    
require_once './utiles/inicio.php';
