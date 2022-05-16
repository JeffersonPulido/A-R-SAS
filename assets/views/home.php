<?php
    // session_start();
    // if (isset($_SESSION['username'])) {
    //     $usuarioingresado = $_SESSION['username'];
    // }
    // if (isset($_GET['username'])) {
    //     $usuarioingresado = $_SESSION['username'] = $_GET['username'];
    // }

    // if ($_SESSION['username'] == null) {
    //     echo "<script>alert('Por favor logueate antes');</script>";
    //     header("Refresh:0 , url=../../index.html");
    //     exit();
    // }
?>
<!--LANDING PAGE GENERAL-->
<html>
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
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-warning">
            <div class="container-fluid">
                <a class="navbar-brand" href="">Alejandra Rodríguez S.A.S</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#"><i class="fas fa-dollar-sign"></i> PLANES Y PRECIOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-users"></i> INTERESADOS</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#"><i class="fas fa-search"></i> CONSULTAS</a>
                    </li>
                </ul>
                <form class="d-flex">
                    <a class="btn btn-outline-success" href="../../index.html"><i class="fas fa-sign-out-alt"></i> <?php session_destroy(); ?> SALIR</a>
                </form>
                </div>
            </div>
        </nav>
        <h1>Hola <?php echo $usuarioingresado ?></h1>
        <footer class="footer-text">
            <a href="#" class="float-left"><i class="fab fa-instagram"></i> ARSAS</a>
            <a href="https://www.instagram.com/ceso.tecco/" target="_blank" class="">© Diseñado por CesoTecCo</a>
            <a href="#" class="float-right"><i class="fab fa-whatsapp"></i> +57 (310) 215 62 05</a>
        </footer>
    </body>
</html>