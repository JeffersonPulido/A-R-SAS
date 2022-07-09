<?php 
include_once '../controllers/Controlador.php';
include_once '../config/Conexion.php';
$Controller = new ControlP();
if(!isset($_REQUEST['c'])){
    $Controller->index();
}else{
    $action = $_REQUEST['c'];
    call_user_func(array($Controller,$action));
}


?>
