<?php
    require_once "../config/Conexion.php";
    $sql_fetch_todos = "SELECT * FROM usuario_interesado ORDER BY Id_Usuario ASC";
    $query = mysqli_query($conn, $sql_fetch_todos);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====META===-->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--===TITLE====-->
        <title>Home | Alejandra Rodríguez S.A.S</title>
        <!--====ICO===-->
        <link rel="shortcut icon" href="../img/icono.ico"> 
        <!--====CSS===-->
        <link rel="stylesheet" href="../css/style.css">
        <link rel="stylesheet" href="../css/inicio.css">
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
        <script>
            $(document).ready(function() {
                $('#TablaDat').DataTable({
                    "responsive": true,
                    "paging": true,
                    "buttons": true,
                    "bLengthChange": true,
                    "lengthMenu": [ [5, 10, 15, -1], [5, 10, 15, "All"] ],
                    "paginate": true,
                    "language": {
                        "lengthMenu": "_MENU_ Registros por pagina",
                        "zeroRecords": "Registro no localizado",
                        "info": "Pagina _PAGE_ de _PAGES_  Total Registros _MAX_",
                        "infoEmpty": "No hay datos para la fecha actual",
                        "infoFiltered": "(Filtrando de _MAX_ Total Registros)",
                        "search": "Buscar",
                        "sProcessing": "Procesando...",
                        "sLengthMenu": "Mostrar _MENU_ registros",
                        "sZeroRecords": "No se encontraron resultados",
                        "sEmptyTable": "Ningún dato disponible en esta tabla",
                        "sInfo": "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
                        "sInfoEmpty": "Mostrando registros del 0 al 0 de un total de 0 registros",
                        "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
                        "sInfoPostFix": "",
                        "sSearch": "Buscar:",
                        "sUrl": "",
                        "sInfoThousands": ",",
                        "sLoadingRecords": "Cargando...",
                        "oPaginate": {
                            "sFirst": "Primero",
                            "sLast": "Último",
                            "sNext": "Siguiente",
                            "sPrevious": "Anterior"
                        }
                    },

                    dom: 'B<"float-right"f>t<"float-left"l><"float-right"p><"float-left"i><"clearfix">',
                    buttons: {
                        buttons: [{
                                extend: 'excelHtml5',
                                text: 'Excel <i class="far fa-file-excel"></i>',
                                title: 'Reporte_excel',
                                className: 'btn btn-success btn-sm',
                                filename: 'Export_File_pdf',
                            },
                            {
                                extend: 'pdf',
                                text: 'Pdf <i class="far fa-file-pdf"></i>',
                                footer: true,
                                title: 'Archivo PDF',
                                className: 'btn btn-danger btn-sm',
                                filename: 'Export_File_pdf',
                            },
                            {
                                extend: 'print',
                                text: 'Imprimir <i class="fa fa-print"></i>',
                                className: 'btn-secondary btn-sm',
                                title: 'Reporte Impresion',
                            },
                            {
                                extend: 'copy',
                                text: 'Copiar <i class="far fa-copy"></i>',
                                className: 'btn-info  btn-sm',
                                key: {
                                    key: 'c',
                                    altKey: true
                                }
                            }
                        ],
                        dom: {
                            button: {
                                className: 'btn'
                            }
                        }
                    }
                });
            });
        </script>
    </head>

    <body>
        <!--NAV BAR-->
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Alejandra Rodríguez S.A.S</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="#"><i class="fas fa-dollar-sign"></i> PLANES Y PRECIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="init.php"><i class="fas fa-users"></i> INTERESADOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i> USUARIOS</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-success" href="../../index.html"><i class="fas fa-sign-out-alt"></i> <?php session_destroy(); ?> SALIR</a>
                </form>
                </div>
            </div>
        </nav>
        <!--CRUD-->
        <div class="container responsive">
            <div class="row mt-3">
                <hr>
                <h1 id="titulo">Usuarios Interesados</h1>
                <hr>
                <div class="  mt-3 w-100">
                    <a href="?c=nuevo" class="btn btn-block  btn btn-success my-3 shadow-lg">Agregar</a>
                    <br>
                    <table id="TablaDat" class="table table-sm" style="width:90%">
                    <thead class="table-dark" >
                        <!--<th scope="col">#</th>-->
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Cedula</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Numero</th>
                        <th scope="col">Observaciones</th>
                        <th scope="col">Acciones</th>

                    </thead>
                    <tbody>
                        <?php foreach ($this->MODEL->listar() as $k) : ?>
                            <tr>
                                <td><?php echo $k->Id_Usuario; ?></td>
                                <td><?php echo $k->Nombre_Usuario; ?></td>
                                <td><?php echo $k->Cedula_Usuario; ?></td>
                                <td><?php echo $k->Correo_Usuario; ?></td>
                                <td><?php echo $k->Num_Usuario; ?></td>
                                <td><?php echo $k->Observacion; ?></td>
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