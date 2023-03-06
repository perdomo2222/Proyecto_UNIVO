<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Veterinaria</title>
    <!-- Incluimos los archivos de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <!-- Barra de navegación -->
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


    <!-- Contenido principal -->
    <div class="container my-4">
        <h1>Bienvenido a nuestra Veterinaria <b>Pet rescue</b></h1>
        <p>Salvando una mascota a la vez - Pet Rescue"</p>
    </div>

    <div class="text-center">
        <img src="img/consultorio.jpg" alt="" class="mx-auto img-fluid" style="width: 900px; height: 500px;">
    </div>

    <br>


    <!-- Footer -->
    <footer class="bg-info text-white text-center py-3">
        <div class="container">
            <p>Todos los derechos reservados © 2023 Pet Rescue</p>
        </div>
    </footer>

    <!-- Incluimos los archivos de Bootstrap 5 JS -->

</body>

</html>