<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Camiseta <?php
                    ?>></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles.css">
    <script src="/functions.js"></script>
</head>

<body>
    <?php
    if (isset($_GET["id"])) {
        require_once "modelo.php";
        $id = $_GET["id"];
        $con = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");
        $datos = $con->obtenerDatos("SELECT * FROM productos WHERE id = $id");
        $camisetas = $con->convertirDatos($datos);
        if(count($camisetas)){
            $titulo = $camisetas[0]->nombre;
            $precio = $camisetas[0]->precio;
            $imagen = $camisetas[0]->imagen;
            $descripcion = $camisetas[0]->descripcion;
        }
        else {
            $url = "error.php";
            header('Location: '.$url);
            die();
        }
    }
    ?>
</body>

</html>