<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="./styles.css">
</head>

<body>
    <?php
    require_once "./php/secciones.php";
    CrearSecciones::crearNav(0);
    ?>

    <main>
        <section id="videos" class="">
            <div id="carouselAutoplaying" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="video-container">
                            <video id="video" class="video" autoplay loop>
                                <source src="./videos/Gol de Andres Iniesta-España Campeon_1_1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                    <div class="carousel-item active">
                        <div class="video-container">
                            <video id="video" class="video" autoplay loop>
                                <source src="./videos/MESSI edit 4K_1.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselAutoplaying" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </section>
    </main>

    <?php
    CrearSecciones::seccionOfertas(0);
    CrearSecciones::seccionNovedades(0);
    CrearSecciones::crearFooter(0);
    ?>
</body>

</html>