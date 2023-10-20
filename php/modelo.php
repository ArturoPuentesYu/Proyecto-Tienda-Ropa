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

    function buscarUsuarioPorCorreo($correo, $contraseña)
    {
        // Consulta SQL para buscar el usuario por correo
        $sql = "SELECT * FROM usuarios WHERE correo = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("s", $correo);

        if ($stmt->execute()) {
            $result = $stmt->get_result();
            $usuario = $result->fetch_assoc();

            if ($usuario) {
                // Verifica la contraseña
                if (password_verify($contraseña, $usuario['contraseña'])) {
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
    }

    function registrarUsuario($email, $pass, $nombre, $apellidos, $dirr, $tel, $dni)
    {
        // Prepara la consulta SQL para insertar los datos en la tabla "usuarios"
        $sql = "INSERT INTO usuarios (correo, contraseña, nombre, apellidos, direccion, telefono, dni, rol) VALUES (?, ?, ?, ?, ?, ?, ?, ?)";
        $rol = 0;
        $passcrypted = crypt($pass, 'CRYPT_SHA512');

        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ssssssss", $email, $passcrypted, $nombre, $apellidos, $dirr, $tel, $dni, $rol);

        if ($stmt->execute()) {
            echo "Registro exitoso"; // Puedes devolver cualquier mensaje que desees
        } else {
            echo "Error en el registro: " . $stmt->error;
        }

        // Cierra la conexión
        $stmt->close();
    }
}
