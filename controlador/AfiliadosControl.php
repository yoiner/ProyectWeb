<?php

/**
 * Description of AfiliadosControl
 *
 * @author yoiner valle
 */
class AfiliadosControl extends Controlador{

    function __construct($modelo, $accion) {
        parent::_construct($modelo, $accion);
        $this->setModelo($modelo);
        
    }
    public function index() {
        try {
            $this->vista->set('titulo', 'Agregar Usuario');
            $muni = new Municipios(); 
            $this->vista->set('deptos',  $muni->leerDepartamento());
            $doc= new Tipodocumento();
            $this->vista->set('Document', $doc->leerTipoDoc());
            $niv = new Nivel();
            $this->vista->set('Tpersonal', $niv->leerNivel());
            return $this->vista->imprimir();
            } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
       
    }
   
    
   public function guardar() {
        if (isset($_POST['agregarusuario'])) {

            $Nafili= isset($_POST['nRegistro']) ? $_POST['nRegistro'] : NULL; // Numero de afiliacion
            $Afiliacion= isset($_POST['FecAfilia']) ? $_POST['FecAfilia'] : NULL; 
            $TipDoc= isset($_POST['tipodoc']) ? $_POST['tipodoc'] : NULL; // Tipo de documento
            $ident = isset($_POST['identificacion']) ? $_POST['identificacion'] : NULL;
            $nomb = isset($_POST['nombre']) ? $_POST['nombre'] : NULL;
            $apel = isset($_POST['apellido']) ? $_POST['apellido'] : NULL;
            $fecnac = isset($_POST['fecNac']) ? $_POST['fecNac'] : NULL;
            $sex=isset($_POST['sex']) ? $_POST['sex'] : NULL; 
            $muni=isset($_POST['muni']) ? $_POST['muni'] : NULL; 
            $barrio=isset($_POST['barrio']) ? $_POST['barrio'] : NULL; 
            $direcc=isset($_POST['direcc']) ? $_POST['direcc'] : NULL; 
            $tele=isset($_POST['tele']) ? $_POST['tele'] : NULL;
            $email=isset($_POST['email']) ? $_POST['email'] : NULL; 
            $estr=isset($_POST['estr']) ? $_POST['estr'] : NULL;
            $estcivil=isset($_POST['estcivil']) ? $_POST['estcivil'] : NULL; 
            $pass=isset($_POST['pass']) ? $_POST['pass'] : NULL;
            $nivel=isset($_POST['nivel']) ? $_POST['nivel'] : NULL;                
                 
            try {
                $agregar = new Persona();
                $agregar->setNafilia($Nafili);
                $agregar->setFecAfilia($agregar->crearFecha($Afiliacion));
                $agregar->setTipoDoc($TipDoc);
                $agregar->setIdentificacion($ident);
                $agregar->setNombre($nomb);
                $agregar->setApellidos($apel);
                $agregar->setFecNac($agregar->crearFecha($fecnac));
                $agregar->setSexo($sex);
                $agregar->setMunicipio($muni);
                $agregar->setBarrio($barrio);
                $agregar->setDireccion($direcc);
                $agregar->setTelefono($tele);
                $agregar->setEmail($email);
                $agregar->setEstrato($estr);
                $agregar->setEstaCivil($estcivil);
                $agregar->setClave($pass);
                $agregar->setNivel($nivel);
                $agregar->crearPersona($agregar);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha guardado la informacion de manera satisfactoria');
            } catch (Exception $ex) {
                $this->vista->set('titulo', 'Error');
                $this->vista->set('mensaje', 'Error al guardar los datos...: ' . $ex->getMessage());
            } catch (ErrorException $ex) {
                $this->vista->set('titulo', 'Error');
                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
                $this->setVista('agregar');
            }
           return $this->vista->imprimir();
        }
    }
    public function listarmunicipios($departamento=''){
        $Muni = new Municipios();
        $this->vista->set('municipios',$Muni->leerMunicipios($departamento));
        return $this->vista->imprimir();
    }
}

?>
