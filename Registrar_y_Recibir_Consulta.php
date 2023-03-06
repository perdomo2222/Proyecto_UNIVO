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

// Comprobar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recuperar valores del formulario
    $nombre = $_POST["nombre_M"];
    $dueno = $_POST["dueno_M"];
    $telefono = $_POST["telefono_M"];
    $raza = $_POST["raza_M"];
    $edad = $_POST["edad_M"];
    $color = $_POST["color_M"];
    $peso = $_POST["peso_M"];
    $estatura = $_POST["estatura_M"];
    $sexo = $_POST["sexo_M"];
    $consulta = $_POST["diagnostico_M"];

    // Validar los valores ingresados (ejemplo)
    if (!is_numeric($edad)) {
        echo "La edad debe ser un número";
        exit;
    }

    // Insertar los valores en la base de datos
    $sql = "INSERT INTO consultas (nombre_mascota, dueño, telefono, raza, edad, color, peso, estatura, sexo, diagnostico_medicina) VALUES ('$nombre', '$dueno', '$telefono', '$raza', '$edad', '$color', '$peso', '$estatura', '$sexo', '$consulta')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Mascota registrada correctamente!'); window.location = 'Index_Home.php';</script>";
    } else {
        echo "Error al registrar la mascota: " . $conn->error;
    }

    // Cerrar la conexión
    $conn->close();
}
?>
