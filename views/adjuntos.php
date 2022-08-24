<?php
    $_SESSION['Nombre_Usuario'] = @$_GET['Nombre_Usuario'];
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <!--====META===-->
        <meta charset="UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!--===TITLE====-->
        <title>Adjuntos | Alejandra Rodríguez S.A.S</title>
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
        <?php include 'navbar.php'; ?>
        <!--CRUD-->
        <div class="container responsive">
            <div class="row mt-3">
                <hr>
                <h1 class="titulo">Archivos - <b><?php echo $_SESSION['Nombre_Usuario'] ?></b></h1>
                <hr>
                <div class="w-100">
                    <a href="" class="btn btn-block  btn btn-success my-3 shadow-lg btn-sm" data-toggle="modal" data-target="#exampleModal"><i class="fas fa-file-medical"></i> Cargar</a>
                    <br>
                </div>
            </div>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Carga Archivos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="CargarFicheros.php" enctype="multipart/form-data">
                            <input type="file" name="file" class="form-control"><hr>
                            <input type="submit" value="Cargar Archivos" class="btn btn-outline-success">
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!--tabla-->
        <h3 class="titulo">Descargas Disponibles</h3>     
        <table id="TablaDat" class="table table-sm" style="width:100%">
            <thead class="table-dark" >
                <th scope="col">#</th>
                <th scope="col">Nombre del Archivo</th>
                <th scope="col">Visualizar</th>
                <th scope="col">Eliminar</th>
            </thead>
            <tbody>
                <?php
                    $archivos = scandir("subidas");
                    $num=0;
                    for ($i=2; $i<count($archivos); $i++)
                    {$num++;
                ?>              
                <tr>
                    <td scope="row"><?php echo $num;?></td>
                    <td><?php echo $archivos[$i]; ?></td>
                    <td><a title="Ver Archivo" href="subidas/<?php echo $archivos[$i]; ?>" download="<?php echo $archivos[$i]; ?>" style="color: gray; font-size:18px;"> <i class="fas fa-eye"></i></a></td>
                    <td><a title="Eliminar Archivo" href="Eliminar.php?name=subidas/<?php echo $archivos[$i]; ?>" style="color: red; font-size:18px;" onclick="return confirm('Esta seguro de eliminar el archivo?');"> <i class="fas fa-trash-alt"></i> </a></td>
                </tr>
                <?php }?> 
            </tbody>
        </table>
        <!-- Fin tabla--> 
        <script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.6.3/js/bootstrap-select.min.js"></script>
    </body>
</html>