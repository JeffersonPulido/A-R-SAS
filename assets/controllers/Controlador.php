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
        $guar->Id = $_POST['txtId'];
        $guar->Nombre = $_POST['txtNombre'];
        $guar->Duracion = $_POST['txtDuracion'];
        $guar->Profesor = $_POST['txtProfesor'];
        $guar->Id > 0 ? $this->MODEL->actualizarDatos($guar) : $this->MODEL->insertar($guar);
        header("location: ../views/init.php"); 
    }

    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['Id']);
        header("location: ../views/init.php"); 
    }
}
