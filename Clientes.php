<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>
<nav class="navbar navbar-expand-lg navbar-light bg-info">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="img/perro1.png" alt="Logo" width="50px" height="50px">
            </a>
            <div>
                <h2><b>Pet rescue</b></h2>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link  " aria-current="page" href="Index_Home.php"><b>Inicio</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link " href="Clientes.php"><b>Cliente</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Consulta.php"><b>Consulta</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Expediente.php"><b>Expedientes</b></a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="Login.php"><b>Salir</b></a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <br><br><br>
    <div class="container">
        <div class="text-center">
            <h2><b> ¿Qué desea realizar en el apartado clientes? </b></h2>
            <p></p>
        </div>

        <br>

        <div class="text-center">
            <img src="img/veterinario (2).png" alt="Imagen de clientes" width="160px" height="160px">
        </div>

        <br><br>

        <div class="d-flex justify-content-center">
            <button type="button" class="btn btn-primary me-3" onclick="window.location.href='Nuevo_Cliente.php'">Nuevo Cliente</button>
            <button type="button" class="btn btn-primary me-3">Modificar Cliente</button>
        </div>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>