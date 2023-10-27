<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles.css">
    <title>Zona de administrador</title>
</head>

<body>
    <?php
    require_once "secciones.php";
    CrearSecciones::crearNav(1);
    ?>
    <div class="main">
        <div class="container">
            <h1>Añadir Productos</h1>
            <form action="subirNuevo.php">
                <!-- Nombre -->
                <div class="row g-3 align-items-center my-2">
                    <div class="col-2 text-center">
                        <label for="nombre" class="col-form-label">Nombre</label>
                    </div>
                    <div class="col-10">
                        <input type="text" id="nombre" class="form-control">
                    </div>
                </div>
                <!-- Descripción -->
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-2  text-center">
                        <label for="descripcion" class="col-form-label">Descripción</label>
                    </div>
                    <div class="col-10">
                        <textarea class="form-control" id="descripcion" rows="3"></textarea>
                    </div>
                </div>
                <!-- Precio -->
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-2  text-center">
                        <label for="precio" class="col-form-label">Precio</label>
                    </div>
                    <div class="col-10">
                        <input type="" id="precio" class="form-control">
                    </div>
                </div>
                <!-- Imagen -->
                <div class="row g-3 align-items-center mb-2">
                    <div class="col-2  text-center">
                        <label for="imagen" class="col-form-label">Imagen</label>
                    </div>
                    <div class="col-auto">
                        <input type="text" id="imagen" class="form-control">
                    </div>
                </div>
                <!-- Oferta -->
                <div class="row g-3 align-items-center justify-content-center mb-2">
                    <div class="col-auto">
                        <input type="checkbox" class="btn-check" id="oferta" autocomplete="off">
                        <label class="btn btn-outline-primary" for="oferta">Oferta</label>
                    </div>
                </div>
                <div class="row align-items-center justify-content-end mb-2">
                <?php
                    if (true) {
                    } else {
                    }
                ?>
                    <div class="col-auto">
                        <button type="summit" class="btn btn-primary">Añadir</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
    CrearSecciones::crearFooter(1);
    ?>
</body>

</html>