<?php
// Comprueba si se han enviado datos de inicio de sesión
if (isset($_POST['loginEmail']) && isset($_POST['loginPass'])) {
    
    require_once "modelo.php";
    $loginEmail = $_POST['loginEmail'];
    $loginPass = $_POST['loginPass'];

    // Conexión a la base de datos (reemplaza con tus propios valores)
    $conexion = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");

    $usuario = $conexion->buscarUsuarioPorCorreo($loginEmail, $loginPass);
    
    return $usuario;
} else {
    echo "Faltan datos de inicio de sesión";
}
?>