<?php

// Cómo subir el archivo
$fichero = $_FILES["file"];

// Cargando el fichero en la carpeta "subidas"
move_uploaded_file($fichero["tmp_name"], "subidas/".$fichero["name"]);

// Redirigiendo hacia atrás
include_once '../views/adjuntos.php';
?>