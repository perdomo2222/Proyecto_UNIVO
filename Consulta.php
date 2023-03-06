<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Página principal</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body style="background: url('img/fondo3.avif') no-repeat; background-size:cover; opacity: 16.5;">

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

    <div class="container mt-5 ">
        <div class="row">
            <div class="col-md-6 mx-auto ">
                <div class="card bg-white shadow-lg rounded">
                    <div class="card-header">
                        <center>
                            <h3 class="card-title">Consulta de Mascota</h3>
                        </center>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="Registrar_y_Recibir_Consulta.php">

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Dueño:</label>
                                <input type="text" class="form-control" id="nombre" name="dueno_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Telefono:</label>
                                <input type="text" class="form-control" id="nombre" name="telefono_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="nombre" class="form-label">Nombre de la mascota:</label>
                                <input type="text" class="form-control" id="nombre" name="nombre_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="raza" class="form-label">Raza:</label>
                                <input type="text" class="form-control" id="raza" name="raza_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="edad" class="form-label">Edad:</label>
                                <input type="number" class="form-control" id="edad" name="edad_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="color" class="form-label">Color:</label>
                                <input type="text" class="form-control" id="color" name="color_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="color" class="form-label">Peso:</label>
                                <input type="text" class="form-control" id="color" name="peso_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="color" class="form-label">Estatura:</label>
                                <input type="text" class="form-control" id="color" name="estatura_M" required>
                            </div>

                            <div class="mb-3">
                                <label for="sexo" class="form-label">Sexo:</label>
                                <select class="form-select" id="sexo" name="sexo_M" required>
                                    <option value="Macho">Macho</option>
                                    <option value="Hembra">Hembra</option>
                                </select>
                            </div>

                            <div class="mb-3">
                                <label for="direccion" class="form-label">Diagnostico Y Medicamentos:</label>
                                <textarea class="form-control" id="direccion" name="diagnostico_M" rows="3" required></textarea>
                            </div>

                            <br>

                            <center>
                                <button type="submit" class="btn btn-primary" name="consultar_M">Ingresar Cosulta</button>
                            </center>

                            <br>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <br><br>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
</body>

</html>