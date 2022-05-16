<!DOCTYPE html>
<html lang="en">

<head>
    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"/>
    <script src="https://cdn.datatables.net/1.10.23/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.23/js/dataTables.bootstrap.min.js"></script>
    <link href="https://cdn.datatables.net/1.10.23/css/dataTables.bootstrap.min.css"/>
    
    <script>
        $(document).ready(function() {
            $('#TablaDat').DataTable({
                "paging": true,
                "buttons": true,
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "TODOS"]],
                "paginate": true,
                "language": {"url": "https://cdn.datatables.net/plug-ins/1.10.22/i18n/Spanish.json"}
                    
            });
        } );
    </script>
    <style>
        #titulo {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
            font-size: 50px;
            color: #1E657A;
            font-weight: bold;
            -webkit-text-stroke: 2px black;
            text-shadow: -4px -4px 2px #000;
            text-align: center;
        }
    </style>
    <title>CONSULTA BD</title>
</head>

<body>
    <div class="container responsive">
        <div class="row mt-3">
            <hr>
            <h1 id="titulo">CONSULTA A BD CON PHP</h1>
            <hr>
            <div class="  mt-3 w-100">
                <a href="?c=nuevo" class="btn btn-block  btn btn-success my-3 shadow-lg">Agregar</a>
                <br>
                <table class="table table-reponsive table-striped table-hover text-center table-bordered" id="TablaDat">
                    <thead class="thead-dark ">
                        <tr>
                        <th>Id</th>
                        <th>Nombre</th>
                        <th>Duracion</th>
                        <th>Profesor</th>
                        <th>Acciones</th>
                        </tr>
                    </thead>
                  
                    <tbody>
                        <?php foreach ($this->MODEL->listar() as $k) : ?>
                            <tr>
                                <td><?php echo $k->Id; ?></td>
                                <td><?php echo $k->Nombre; ?></td>
                                <td><?php echo $k->Duracion; ?></td>
                                <td><?php echo $k->Profesor; ?></td>
                                <td>
                                    <a href="?c=nuevo&Id=<?php echo $k->Id ?>" class="btn btn-outline-warning"><i class="fas fa-edit"></i></a> 
                                    <a href="?c=eliminar&Id=<?php echo $k->Id ?> " class="btn btn-outline-danger"><i class="fas fa-trash-alt"></i></a>
                                </td>
                                
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
  
    </body>
</html>