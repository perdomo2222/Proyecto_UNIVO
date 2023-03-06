<?php
//require_once 'Conexion_config.php';

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

// Comprobar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperar valores del formulario
    $nombre = $_POST["nombre_C"];
    $apellidos = $_POST["apellidos_C"];
    $telefono = $_POST["telefono_C"];
    $dui = $_POST["dui_C"];
    $correo = $_POST["correo_C"];
    $direccion = $_POST["direccion_C"];

    // Insertar los valores en la base de datos
    $sql = "INSERT INTO cliente (nombre, apellidos, telefono, dui, email, direccion) VALUES ('$nombre', '$apellidos', '$telefono', '$dui', '$correo', '$direccion')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Cliente registrado correctamente!'); window.location = 'Clientes.php';</script>";;
    } else {
        echo "Error al registrar al cliente: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
