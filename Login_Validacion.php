<?php
include('Conexion_config.php');
if (isset($_POST['username']) && isset($_POST['password'])) {

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM usuarios WHERE usuario = :username AND password = :password";

    $stmt = $pdo->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);

    if ($stmt->execute()) {
        // Si hay un resultado, el usuario existe y la contraseña es correcta. 
        if ($stmt->rowCount() > 0) {
            // Iniciar sesión o hacer lo que sea necesario. 
            echo "<script>alert('¡Usuario y contraseña Correctos!'); window.location = 'Index_Home.php';</script>";
            exit;
        } else {
            // El usuario no existe o la contraseña es incorrecta. 
            echo "<script>alert('¡Usuario y contraseña incorrectos!'); window.location = 'Login.php?error=1';</script>";
            exit;
        }
    } else {
        echo "<script>alert('¡Error al validar el usuario y/o contraseña!'); window.location = 'index.php?error=1';</script>";
        exit;
    }
}
