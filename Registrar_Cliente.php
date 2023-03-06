
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulario de registro de usuarios</title>
    <!-- Incluimos los archivos de Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    
</head>
<body>
    <div class="container">
        <h1>Registro de clientes</h1>
        <form action="registro.php" method="post">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" class="form-control" id="apellido" name="apellido" required>
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="phone">Telefono:</label>
                <input type="text" class="form-control" id="phone" name="phone" required>
            </div>
            
            <div class="form-group">
                <label for="password">Contraseña:</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-d4zZv7VjKCTsHyteLsWdxX8nQ7RYNlKj1BzYPdZpNxJUnTlFtckM1JLOxkt+elKpbMshILPzg0prAmJfq1jZtw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
</html>
