<?php
// Comprueba si se han enviado datos de inicio de sesión
if (isset($_POST['loginEmail']) && isset($_POST['loginPass'])) {
    $loginEmail = $_POST['loginEmail'];
    $loginPass = $_POST['loginPass'];

    // Conexión a la base de datos (reemplaza con tus propios valores)
    $conexion = new mysqli("localhost", "usuario_db", "contraseña_db", "mydatabase");

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error de conexión a la base de datos: " . $conexion->connect_error);
    }

    // Consulta SQL para buscar el usuario por correo
    $sql = "SELECT * FROM usuarios WHERE loginEmail = ?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $loginEmail);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $usuario = $result->fetch_assoc();

        if ($usuario) {
            // Verifica la contraseña
            if (password_verify($loginPass, $usuario['loginPass'])) {
                // Inicio de sesión exitoso
                echo "Inicio de sesión exitoso";
            } else {
                // Contraseña incorrecta
                echo "Contraseña incorrecta";
            }
        } else {
            // Usuario no encontrado
            echo "Usuario no encontrado";
        }
    } else {
        echo "Error en la consulta: " . $stmt->error;
    }

    // Cierra la conexión
    $stmt->close();
    $conexion->close();
} else {
    echo "Faltan datos de inicio de sesión";
}
?>