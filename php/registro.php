<?php
// Verifica si se ha recibido una solicitud POST
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Recupera los datos enviados por la solicitud POST
    $email = $_POST['registroCorreo'];
    $pass = $_POST['registroPass'];
    $nombre = $_POST['registroNombre'];
    $apellidos = $_POST['registroApellidos'];
    $dirr = $_POST['registroDir'];
    $tel = $_POST['registroTel'];
    $dni = $_POST['dni'];

    // Conecta a la base de datos (reemplaza con tus propios valores)
    $host = 'localhost:3306';
    $usuario = 'root';
    $contrasena = '';
    $base_datos = 'tiendaropa';

    $conexion = new mysqli($host, $usuario, $contrasena, $base_datos);

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Prepara la consulta SQL para insertar los datos en la tabla "usuarios"
    $sql = "INSERT INTO usuarios (correo, contraseña, nombre, apellidos, direccion, telefono, dni) VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("sssssss", $email, $pass, $nombre, $apellidos, $dirr, $tel, $dni);

    if ($stmt->execute()) {
        echo "Registro exitoso"; // Puedes devolver cualquier mensaje que desees
    } else {
        echo "Error en el registro: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
    $conexion->close();
} else {
    echo "Solicitud no válida";
}
?>
