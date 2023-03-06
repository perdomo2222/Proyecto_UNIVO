<?php

if (isset($_POST['register'])) {
    // Obtiene los datos enviados desde el formulario
    $usuario = $_POST['usuario'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    
    // Establece la conexión con la base de datos
    $host = 'localhost';
    $dbname = 'veterinaria';
    $user = 'root';
    $password_db = '';
    
    try {
        $pdo = new PDO("mysql:host=$host;dbname=$dbname", $user, $password_db);
    } catch (PDOException $e) {
        die('Error de conexión: ' . $e->getMessage());
    }
    
    // Prepara la consulta SQL INSERT para insertar los datos del usuario
    $sql = "INSERT INTO usuarios (usuario, email, telefono, password) VALUES (:usuario, :email, :telefono, :password)";
    $stmt = $pdo->prepare($sql);
    
    // Ejecuta la consulta SQL y verifica si se insertaron los datos correctamente
    if ($stmt->execute(array(':usuario' => $usuario, ':email' => $email, ':telefono' => $phone, ':password' => $password))) {
        
        echo "<script>alert('¡Usuario registrado correctamente!'); window.location = 'Clientes.php';</script>";
        die();
        
    } else {
        echo '<div class="alert alert-danger" role="alert">Error al registrar usuario</div>';
    }
}
?>
