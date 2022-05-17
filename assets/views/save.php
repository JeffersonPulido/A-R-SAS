<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====BOOTSTRAP===-->
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
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
        <div class="container responsive">
            <div class="row mt-3">
                <br>
                <div class="row">
                    <h3>Datos Usuario Interesado </h3>
                </div>
                <br>
                <div class="mt-3 w-100">
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
                                <input type="number" min="0" class="form-control" id="txtCelular" name="txtCelular" placeholder="Ingresa el numero celular del usuario..." required value="<?php echo  $guar->Num_Usuario; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput5">Observaciones</label>
                                <textarea class="form-control" id="txtObservacion" name="txtObservacion" placeholder="Ingresa observaciones acerca del interes del usuario..." rows="4" cols="50" required><?php echo  $guar->Observacion; ?></textarea>
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
        <!--FOOTER-->
        <?php include 'footer.php'; ?>
    </body>
</html>