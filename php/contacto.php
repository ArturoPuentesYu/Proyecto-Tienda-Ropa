<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contactanos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="../styles.css">
</head>

<body>
    <?php
    require_once "secciones.php";
    CrearSecciones::crearNav(1);
    ?>
    <main id="contactanos">
        <div class="container my-5 px-5">
            <h2 class="text-center">Contáctanos!</h2>
            <form id="contactoForm">
                <div class="form-group mb-3">
                    <label for="correo">Correo:</label>
                    <input type="email" class="form-control" id="correo" name="correo" required>
                </div>
                <div class="form-group mb-3">
                    <label for="text-area" class="form-label">Mensaje</label>
                    <textarea class="form-control" id="text-area" rows="7"></textarea>
                </div>
                <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
            </form>
        </div>
    </main>

    <?php
    CrearSecciones::crearFooter(1);
    ?>
</body>

</html>