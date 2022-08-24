<nav class="navbar navbar-expand-lg navbar-light bg-warning">
    <div class="container-fluid">
        <a class="navbar-brand" href="home.php">Alejandra Rodríguez S.A.S</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link active" href="home.php"><i class="fas fa-home"></i> INICIO</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="initP.php"><i class="fas fa-dollar-sign"></i> PLANES Y PRECIOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="init.php"><i class="fas fa-users"></i> INTERESADOS</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="initU.php"><i class="fas fa-search"></i> USUARIOS</a>
            </li>
        </ul>
        <form class="d-flex">
            <a class="btn btn-outline-success" href="../../index.html"><i class="fas fa-sign-out-alt"></i> <?php session_destroy(); ?> SALIR</a>
        </form>
        </div>
    </div>
</nav>