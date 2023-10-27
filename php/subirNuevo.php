<?php
    // Verifica si se ha recibido una solicitud POST
    if (isset($_GET['nombre'])) {
    require_once('./modelo.php');
    // Recupera los datos enviados por la solicitud POST
    $nombre = $_GET['nombre'];
    $descripcion = $_GET['descripcion'];
    $precio = $_GET['precio'];
    $imagen = $_GET['imagen'];
    $oferta = $_GET['oferta'];
    
    // Conecta a la base de datos (reemplaza con tus propios valores)
    $conexion = new conexionBBDD('127.0.0.1:3307', 'root', '', 'tiendaropa');

    if ($conexion->registrarUsuario($email, $pass, $nombre, $apellidos, $dirr, $tel, $dni)) {
        echo("<script>history.back();</script>");
    }
} else {
    echo "Solicitud no válida";
}
?>