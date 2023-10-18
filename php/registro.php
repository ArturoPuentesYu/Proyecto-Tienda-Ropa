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
    require_once "modelo.php";
    $conexion = new conexionBBDD('127.0.0.1:3307', 'root', '', 'tiendaropa');

    $conexion->registrarUsuario($email, $pass, $nombre, $apellidos, $dirr, $tel, $dni);

} else {
    echo "Solicitud no válida";
}
?>
