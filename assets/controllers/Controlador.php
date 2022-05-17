<?php
include_once '../models/UsuarioInt.php';
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
        $guar->Id_Usuario > 0 ? $this->MODEL->actualizarDatos($guar) : $this->MODEL->insertar($guar);
        header("location: ../views/init.php"); 
    }

    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['Id_Usuario']);
        header("location: ../views/init.php"); 
    }
}
