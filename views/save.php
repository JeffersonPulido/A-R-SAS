<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====LIBS===-->
        <script src="https://kit.fontawesome.com/c159e6bc0d.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" type="text/css" href="../libs/font-awesome/css/all.css" />
        <link rel="stylesheet" type="text/css" href="../libs/bootstrap-4.5.0/css/bootstrap.min.css" id="bootstrap-css">
        <link rel="stylesheet" type="text/css" href="../libs/DataTables/datatables.min.css" />
        <script type="text/javascript" src="../libs/jquery-v3.6.0/jquery.min.js"></script>
        <script type="text/javascript" src="../libs/popperjs/popper.min.js"></script>
        <script type="text/javascript" src="../libs/bootstrap-4.5.0/js/bootstrap.min.js"></script>
        <script type="text/javascript" src="../libs/DataTables/datatables.min.js"></script>
        <script type="text/javascript" src="../libs/DataTables/JSZip-2.5.0/jszip.min.js"></script>
        <script type="text/javascript" src="../libs/DataTables/pdfmake-0.1.36/pdfmake.min.js"></script>
        <script type="text/javascript" src="../libs/DataTables/pdfmake-0.1.36/vfs_fonts.js"></script>
        <script type="text/javascript" src="../libs/DataTables/Buttons-1.7.1/js/buttons.html5.min.js"></script>
        <script type="text/javascript" src="../libs/DataTables/Buttons-1.7.1/js/buttons.print.min.js"></script>
        <script type="text/javascript" src="../libs/font-awesome/js/all.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!--====META===-->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--===TITLE====-->
        <title>Agregar | Usuarios Interesados</title>
        <!--====ICO===-->
        <link rel="shortcut icon" href="../img/icono.ico"> 
        <!--====CSS===-->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/inicio.css">
    </head>
    <body>
        <div class="container">
            <div class="row mt-3">
                <br>
                <div class="row">
                    <h3>Datos Usuario Interesado </h3>
                </div>
                <br>
                <div class="w-100">
                    <div class="container">
                        <form method="post" action="?c=guardar">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nombre Completo</label>
                                <input type="hidden" name="txtId_Usuario" value="<?php echo $guar->Id_Usuario; ?>">
                                <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingresa el nombre del usuario..." required value="<?php echo  $guar->Nombre_Usuario; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Cedula Ciudadania</label>
                                <input type="number" min="0" class="form-control" id="txtCedula" name="txtCedula" placeholder="Ingresa el numero de cedula del usuario..." required value="<?php echo  $guar->Cedula_Usuario; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput3">Correo Electronico</label>
                                <input type="email" class="form-control" id="txtCorreo" name="txtCorreo" placeholder="Ingresa el correo electronico del usuario..." required value="<?php echo  $guar->Correo_Usuario; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput4">Numero Telefonico</label>
                                <input type="tel" pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" class="form-control" id="txtCelular" name="txtCelular" placeholder="Ingresa el numero celular del usuario... Ej. 310-221-3284" required value="<?php echo  $guar->Num_Usuario; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput5">Observaciones</label>
                                <textarea class="form-control" id="txtObservacion" name="txtObservacion" placeholder="Ingresa observaciones acerca del interes del usuario..." rows="3" cols="50" required><?php echo  $guar->Observacion; ?></textarea>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput6">Fecha</label>
                                <input type="date" class="form-control" id="txtFecha" name="txtFecha" placeholder="Ingresa fecha de registro del usuario..." required value="<?php echo  $guar->Fecha; ?>"><br>
                            </div>
                            <div class="form-group">                       
                                <input type="submit" value="Guardar" class="btn btn-success ">                   
                                <a href="init.php" class="btn btn-primary float-right">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>