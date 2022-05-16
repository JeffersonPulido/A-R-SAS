<!DOCTYPE html>
<html lang="en">

<head>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos | CONEXION</title>
</head>

<body>
    <div class="container responsive">
        <div class="row mt-3">
        <br>
            <div class="row">
                <h3>Datos Curso </h3>
            </div>
            <br>
            <div class="  mt-3 w-100">
            <div class="container">
                <form method="post" action="?c=guardar">
                    <div class="form-group">
                        <label for="formGroupExampleInput">Nombre</label>
                        <input type="hidden" name="txtId" value="<?php echo $guar->Id; ?>">
                        <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Bases de datos" value="<?php echo  $guar->Nombre; ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput2">Duracion</label>
                        <input type="text" class="form-control" id="txtDuracion" name="txtDuracion" placeholder="120 Horas" min="1" value="<?php echo  $guar->Duracion; ?>">
                    </div>
                    <div class="form-group">
                        <label for="formGroupExampleInput3">Profesor</label>
                        <input type="text" class="form-control" id="txtProfesor" name="txtProfesor" placeholder="Juan Paez" value="<?php echo  $guar->Profesor; ?>">
                    </div>
                    <div class="form-group">                       
                        <center>
                        <input type="submit" value="Guardar" class="btn btn-success ">
                        <br>
                        <br>                        
                        <a href="../index.php"><input type="submit" value="Volver" class="btn btn-primary"></a>
                        </center>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>