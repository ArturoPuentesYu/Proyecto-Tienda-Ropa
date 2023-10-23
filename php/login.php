<?php
// Comprueba si se han enviado datos de inicio de sesión
session_start();
if (isset($_POST['loginEmail']) && isset($_POST['loginPass'])) {
    
    require_once "modelo.php";
    $loginEmail = $_POST['loginEmail'];
    $loginPass = $_POST['loginPass'];

    // Conexión a la base de datos (reemplaza con tus propios valores)
    $conexion = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");

    $datos = $conexion->obtenerDatos("SELECT * FROM usuario WHERE nombre='$usuario' AND contraseña='$pass'");

    if($datos->num_rows<1){
        echo "ERROR: El usuario y la contraseña no coinciden";
    }else{
        $usuario = $conexion->convertirDatos($datos);
        $_SESSION["id"] = $usuario[0]->id;
        $_SESSION["nombre"] = $usuario[0]->nombre;
        $_SESSION["rol"] = $usuario[0]->rol;
        echo "Te has logado correctamente";
    }

} else {
    echo "Faltan datos de inicio de sesión";
}
?>