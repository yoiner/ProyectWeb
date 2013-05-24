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


 
    
//  public function __construct($modelo, $accion) {
    //  parent::__construct($modelo, $accion);
      // $this->setModelo($modelo);
  //}

    public function index() {
        try {
            $this->vista->set('titulo', 'Agregar Usuario');
            $muni = new Municipios(); 
            $this->vista->set('deptos',  $muni->leerDepartamento());
             return $this->vista->imprimir();
            } catch (Exception $exc) {
            echo 'Error de aplicacion: '.$exc->getMessage();
        }
       
    }
     public function menu() {
        $this->vista->set('titulo', 'Menu Usuario');
        //$muni = new Municipios(); 
       // $this->vista->set('deptos',  $muni->leerDepartamento());
        return $this->vista->imprimir();
       }
    
   public function guardar() {
        if (isset($_POST['agregarusuario'])) {

            $Nafili= isset($_POST['Nafili']) ? $_POST['Nafili'] : NULL; // Numero de afiliacion
            $Afiliacion= isset($_POST['Afil']) ? $_POST['Afil'] : NULL; // Tipo Afiliacion
            $TipDoc= isset($_POST['TipDoc']) ? $_POST['TipDoc'] : NULL; // Tipo de documento
            $ident = isset($_POST['ident']) ? $_POST['ident'] : NULL;
            $nomb = isset($_POST['nomb']) ? $_POST['nomb'] : NULL;
            $apel = isset($_POST['apel']) ? $_POST['apel'] : NULL;
            $fecha = isset($_POST['fecha']) ? $_POST['fecha'] : NULL;
            //TODO: Si se hace validacion de datos mandaria mensaje de datos no validos 
            try {
                $Afiliar = new Afiliados();
                $Afiliar->setNombre($Nafili);
                $Afiliar->setApellido($Afiliacion);
                $Afiliar->setNombre($TipDoc);
                $Afiliar->setDocumento($ident);
                $Afiliar->setDocumento($nomb);
                $Afiliar->setDocumento($apel);
                $Afiliar->setFechaNacimiento($Afiliar->crearFecha($fecha));
                $Afiliar->crearUsuario($Afiliar);
                $this->vista->set('titulo', 'Datos almacenados');
                $this->vista->set('mensaje', 'Se ha guardado la informacion de manera satisfactoria');
            } catch (Exception $ex) {
                $this->vista->set('titulo', 'Error');
                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
            } catch (ErrorException $ex) {
                $this->vista->set('titulo', 'Error');
                $this->vista->set('mensaje', 'Error al guardar los datos: ' . $ex->getMessage());
                $this->setVista('agregar');
            }
           // return $this->vista->imprimir();
        }
    }
    public function listarCiudad($departamento=''){
        $Muni = new Municipios();
        $municipios = $Muni->leerMunicipios($departamento);
        $this->vista->set('municipios',$municipios);
        //return $this->vista->imprimir();
    }
}

?>
