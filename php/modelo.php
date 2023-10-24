<?php
class conexionBBDD
{
    private $conn;
    function __construct($servidor, $usuario, $contra, $bbdd)
    {
        $this->conn = new mysqli($servidor, $usuario, $contra, $bbdd);
        // Verifica la conexión
        if ($this->conn->connect_error) {
            die("Error de conexión a la base de datos: " . $this->conn->connect_error);
        }
    }

    function obtenerDatos($consulta)
    {
        return mysqli_query($this->conn, $consulta);
    }

    function convertirDatos($respuesta)
    {
        $arrayDatos = array();
        while ($dato = $respuesta->fetch_object()) {
            $arrayDatos[] = $dato;
        }
        return $arrayDatos;
    }
    
    function registrarUsuario($email, $pass, $nombre, $apellidos, $dirr, $tel, $dni)
    {
        // Prepara la consulta SQL para insertar los datos en la tabla "usuarios"
        $sql = "INSERT INTO usuarios (correo, contraseña, nombre, apellidos, direccion, telefono, dni, rol) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $rol = 0;
        //$passcrypted = crypt($pass, 'CRYPT_SHA512');

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssss", $email, $pass, $nombre, $apellidos, $dirr, $tel, $dni, $rol);

        if ($stmt->execute()) {
            return true;
        } else {
            echo "Error en el registro: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
    }
}
