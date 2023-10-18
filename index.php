<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./styles.css">
    <script src="functions.js"></script>
</head>

<body>

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

    <section id="ofertas" class="bg-success-subtle">
        <div class="container-fluid">
            <h1>Ofertas</h1>
            <?php
            require_once "./php/modelo.php";
            $con = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");

            $datos = $con->obtenerDatos("SELECT * FROM productos WHERE oferta = 1 LIMIT 5");
            $camisetas = $con->convertirDatos($datos);
            echo '<div class="row justify-content-center">';
            for ($i = 0; $i < count($camisetas); $i++) {
                $titulo = $camisetas[$i]->nombre;
                $precio = $camisetas[$i]->precio;
                $imagen = $camisetas[$i]->imagen;
                $descripcion = $camisetas[$i]->descripcion;
                $id = $camisetas[$i]->id;
                echo "
                
                    <div class='col-sm-2 bg-light rounded p-0 me-2 mb-2'>
                    <a href='./php/camiseta.php?id=$id' class='text-decoration-none'>
                        <img src='./imgs/$imagen' class='img-thumbnail rounded' alt=''>
                        <div class='container-fluid'>
                            <div class='row  align-items-center'>
                                <div class='col-xl-6'>
                                    <h5 class='text-black'> $titulo </h5>
                                </div>
                                <div class='col-xl-6'>
                                    <h6 class='text-black text-xl-end text-sm-start'>$precio €</h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>";
            }
            echo   '</div>';
            ?>
        </div>
    </section>

    <section id="novedades">
        <div class="container-fluid">
            <h1>Novedades</h1>
            <div class="row justify-content-center">
                <?php
                require_once "./php/modelo.php";
                $con = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");

                $datos = $con->obtenerDatos("SELECT * FROM productos ORDER BY fecha LIMIT 5");
                $camisetas = $con->convertirDatos($datos);
                echo '<div class="row justify-content-center">';
                for ($i = 0; $i < count($camisetas); $i++) {
                    $titulo = $camisetas[$i]->nombre;
                    $precio = $camisetas[$i]->precio;
                    $imagen = $camisetas[$i]->imagen;
                    $descripcion = $camisetas[$i]->descripcion;
                    $id = $camisetas[$i]->id;
                    echo "
                    <div class='col-sm-2 bg-light rounded p-0 me-2 mb-2'>
                    <a href='./php/camiseta.php?id=$id' class='text-decoration-none'>
                        <img src='./imgs/$imagen' class='img-thumbnail rounded' alt=''>
                        <div class='container-fluid'>
                            <div class='row  align-items-center'>
                                <div class='col-xl-6'>
                                    <h5 class='text-black'> $titulo </h5>
                                </div>
                                <div class='col-xl-6'>
                                    <h6 class='text-black text-xl-end text-sm-start'>$precio €</h6>
                                </div>
                            </div>
                        </div>
                        </a>
                    </div>";
                }
                echo   '</div>';
                ?>

            </div>
        </div>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>

</html>