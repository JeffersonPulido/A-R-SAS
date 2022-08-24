<?php
include_once '../models/UsuarioInt.php';
include_once '../models/Usuario.php';
include_once '../models/Planes.php';
class Control
{
    public $MODEL;
   
    public function __construct()

    {
        $this->MODEL = new UsuarioInt();
    }

    public function index()
    {
        include_once '../views/inicio.php';
    }

    public function nuevo()
    {
        $guar = new UsuarioInt();
        if (isset($_REQUEST['Id_Usuario'])) {
            $guar = $this->MODEL->cargarPersonxID($_REQUEST['Id_Usuario']);
        }
        include_once '../views/save.php';
    }

    public function guardar()
    {

        $guar = new UsuarioInt();
        $guar->Id_Usuario = $_POST['txtId_Usuario'];
        $guar->Nombre_Usuario = $_POST['txtNombre'];
        $guar->Cedula_Usuario = $_POST['txtCedula'];
        $guar->Correo_Usuario = $_POST['txtCorreo'];
        $guar->Num_Usuario = $_POST['txtCelular'];
        $guar->Observacion = $_POST['txtObservacion'];
        $guar->Fecha = $_POST['txtFecha'];
        $guar->Id_Usuario > 0 ? $this->MODEL->actualizarDatos($guar) : $this->MODEL->insertar($guar);
        header("location: ../views/init.php"); 
    }

    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['Id_Usuario']);
        header("location: ../views/init.php"); 
    }
}

class ControlU
{
    public $MODEL;
   
    public function __construct()

    {
        $this->MODEL = new Usuario();
    }
    public function index()
    {
        include_once '../views/inicioU.php';
    }

    public function adjunto()
    {
        include_once '../views/adjuntos.php';
    }

    public function nuevo()
    {
        $guar = new Usuario();
        if (isset($_REQUEST['Id_Usuario'])) {
            $guar = $this->MODEL->cargarPersonxID($_REQUEST['Id_Usuario']);
        }
        include_once '../views/saveU.php';
    }

    public function guardar()
    {

        $guar = new Usuario();
        $guar->Id_Usuario = $_POST['txtId_Usuario'];
        $guar->Nombre_Usuario = $_POST['txtNombre'];
        $guar->Cedula_Usuario = $_POST['txtCedula'];
        $guar->Correo_Usuario = $_POST['txtCorreo'];
        $guar->Num_Usuario = $_POST['txtCelular'];
        $guar->Dire_Usuario = $_POST['txtDireccion'];
        $guar->Eps_Usuario = $_POST['txtEps'];
        $guar->Pensiones_Usuario = $_POST['txtPensiones'];
        $guar->Plan_Usuario = $_POST['txtPlan'];
        $guar->Observacion = $_POST['txtObservacion'];
        $guar->Fecha = $_POST['txtFecha'];
        $guar->Id_Usuario > 0 ? $this->MODEL->actualizarDatos($guar) : $this->MODEL->insertar($guar);
        header("location: ../views/initU.php"); 
    }

    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['Id_Usuario']);
        header("location: ../views/initU.php"); 
    }
}

class ControlP
{
    public $MODEL;
   
    public function __construct()

    {
        $this->MODEL = new Planes();
    }
    public function index()
    {
        include_once '../views/inicioP.php';
    }
    public function nuevo()
    {
        $guar = new Planes();
        if (isset($_REQUEST['Id_Plan'])) {
            $guar = $this->MODEL->cargarPersonxID($_REQUEST['Id_Plan']);
        }
        include_once '../views/saveP.php';
    }

    public function guardar()
    {

        $guar = new Planes();
        $guar->Id_Plan = $_POST['txtId_Plan'];
        $guar->Nombre_Plan = $_POST['txtNombre_Plan'];
        $guar->Descripcion_Plan = $_POST['txtDescripcion_Plan'];
        $guar->Riesgo_Plan = $_POST['txtRiesgo_Plan'];
        $guar->Valor = $_POST['txtValor'];
        $guar->Id_Plan > 0 ? $this->MODEL->actualizarDatos($guar) : $this->MODEL->insertar($guar);
        header("location: ../views/initP.php"); 
    }

    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['Id_Plan']);
        header("location: ../views/initP.php"); 
    }
}
