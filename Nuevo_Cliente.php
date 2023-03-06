<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Nuevo Cliente</title>
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

    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <title>Nuevo Cliente</title>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    </head>

    <body>

        <div class="container mt-5 ">
            <div class="row">
                <div class="col-md-6 mx-auto ">
                    <div class="card bg-white shadow-lg rounded">
                        <div class="card-header">
                            <center>
                                <h3 class="card-title">Nuevo Cliente</h3>
                            </center>

                        </div>
                        <div class="card-body">
                            <form method="POST" action="Registrar_y_Recibir_Cliente.php">
                                <div class="mb-3">
                                    <label for="nombre" class="form-label">Nombre:</label>
                                    <input type="text" class="form-control" id="nombre" name="nombre_C" required>
                                </div>

                                <div class="mb-3">
                                    <label for="apellidos" class="form-label">Apellidos:</label>
                                    <input type="text" class="form-control" id="apellidos" name="apellidos_C" required>
                                </div>

                                <div class="mb-3">
                                    <label for="telefono" class="form-label">Teléfono:</label>
                                    <input type="tel" class="form-control" id="telefono" name="telefono_C" required>
                                </div>

                                <div class="mb-3">
                                    <label for="dui" class="form-label">Dui:</label>
                                    <input type="tel" class="form-control" id="dui" name="dui_C" required>
                                </div>

                                <div class="mb-3">
                                    <label for="correo" class="form-label">Correo electrónico:</label>
                                    <input type="email" class="form-control" id="correo" name="correo_C" required>
                                </div>

                                <div class="mb-3">
                                    <label for="direccion" class="form-label">Dirección:</label>
                                    <textarea class="form-control" id="direccion" name="direccion_C" rows="3" required></textarea>
                                </div>

                                <br>

                                <center>
                                    <button type="submit" class="btn btn-primary" name="register_C">Registrar Cliente</button>
                                </center>

                                <br>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </body>

    </html <br><br><br>
</body>

</html