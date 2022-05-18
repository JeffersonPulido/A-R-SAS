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
        <title>Agregar | Planes Nuevo</title>
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
                    <h3>Datos Plan Nuevo </h3>
                </div>
                <br>
                <div class="w-100">
                    <div class="container">
                        <form method="post" action="?c=guardar">
                            <div class="form-group">
                                <label for="formGroupExampleInput">Nombre Plan</label>
                                <input type="hidden" name="txtId_Plan" value="<?php echo $guar->Id_Plan; ?>">
                                <input type="text" class="form-control" id="txtNombre_Plan" name="txtNombre_Plan" placeholder="Ingresa el nombre del plan..." required value="<?php echo  $guar->Nombre_Plan; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput2">Descripcion</label>
                                <input type="text" class="form-control" id="txtDescripcion_Plan" name="txtDescripcion_Plan" placeholder="Ingresa la descripcion del plan..." required value="<?php echo  $guar->Descripcion_Plan; ?>">
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput3">Riesgo</label>
                                <select class="custom-select" id="txtRiesgo_Plan" name="txtRiesgo_Plan" placeholder="Ingresa el riesgo del plan elegido anteriormente..." required>
                                    <option value="<?php echo  $guar->Riesgo_Plan; ?>"><?php echo  $guar->Riesgo_Plan; ?></option>
                                    <optgroup label="Riesgos">
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                    </optgroup>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="formGroupExampleInput4">Valor</label>
                                <input type="number" min="50000" class="form-control" id="txtValor" name="txtValor" placeholder="Ingresa el valor del plan..." required value="<?php echo  $guar->Valor; ?>">
                            </div>
                            <div class="form-group">                       
                                <input type="submit" value="Guardar" class="btn btn-success ">                   
                                <a href="initP.php" class="btn btn-primary float-right">Volver</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>