    <!DOCTYPE html>
    <html lang="es">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Expediente</title>
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

        <br><br>
        
        <?php
        // Conexión a la base de datos
        $host = 'localhost';
        $dbname = 'veterinaria';
        $user = 'root';
        $password_db = '';

        $conn = new mysqli($host, $user, $password_db, $dbname);

        // Verificar conexión
        if ($conn->connect_error) {
            die("Conexión fallida: " . $conn->connect_error);
        }

        // Realizar consulta SQL para obtener los datos de los clientes
        $sql = "SELECT * FROM consultas";

        $result = $conn->query($sql);

        // Verificar si hay resultados
        if ($result->num_rows > 0) {
            // Generar la tabla HTML
            echo '<div style="text-align:center;">';
            echo '<table class="container table">';
            echo '<thead><tr><th>Dueño</th><th>Telefono</th><th>Nombre de Mascota</th><th>Raza</th><th>Edad</th><th>Color</th><th>Peso</th><th>Estatura</th><th>Sexo</th><th>Diagnostico y Medicamento</th></tr></thead>';
            echo '<tbody>';

            // Iterar sobre los resultados de la consulta
            while ($row = $result->fetch_assoc()) {
                echo '<tr>';
                echo '<td>' . $row['dueño'] . '</td>';
                echo '<td>' . $row['telefono'] . '</td>';
                echo '<td>' . $row['nombre_mascota'] . '</td>';
                echo '<td>' . $row['raza'] . '</td>';
                echo '<td>' . $row['edad'] . '</td>';
                echo '<td>' . $row['color'] . '</td>';
                echo '<td>' . $row['peso'] . '</td>';
                echo '<td>' . $row['estatura'] . '</td>';
                echo '<td>' . $row['sexo'] . '</td>';
                echo '<td>' . $row['diagnostico_medicina'] . '</td>';
                echo '</tr>';
            }

            echo '</tbody>';
            echo '</table>';
            echo '</div>';
        } else {
            echo "No se encontraron resultados";
        }

        // Cerrar la conexión
        $conn->close();
        ?>

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"></script>
    </body>

    </html>