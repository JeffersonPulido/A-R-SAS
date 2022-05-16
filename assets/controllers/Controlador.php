<?php
include_once '../models/Materia.php';
class Control
{
    public $MODEL;
   
    public function __construct()

    {
        $this->MODEL = new Materia();
    }
    public function index()
    {
        include_once '../views/inicio.php';
    }
    public function nuevo()
    {
        $guar = new Materia();
        if (isset($_REQUEST['Id'])) {
            $guar = $this->MODEL->cargarPersonxID($_REQUEST['Id']);
        }
        include_once '../views/save.php';
    }

    public function guardar()
    {

        $guar = new Materia();
        $guar->Id = $_POST['txtId'];
        $guar->Nombre = $_POST['txtNombre'];
        $guar->Duracion = $_POST['txtDuracion'];
        $guar->Profesor = $_POST['txtProfesor'];
        $guar->Id > 0 ? $this->MODEL->actualizarDatos($guar) : $this->MODEL->insertar($guar);
        header("location: init.php"); 
    }

    public function eliminar()
    {
        $this->MODEL->delete($_REQUEST['Id']);
        header("location: init.php"); 
    }
}
