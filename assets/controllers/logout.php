<!--CODIGO DE EMERGENCIA PARA CERRAR SESION-->

<?php
    session_start();
    session_destroy();
    header("Location: ../../index.html");
    exit();
?>