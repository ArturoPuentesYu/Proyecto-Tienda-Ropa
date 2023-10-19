<?php
    class CrearSecciones{
        static function seccionOfertas($referencia = 0) {

            if ($referencia == 0) {
                $url = "./php/camiseta.php?id=";
                $dirImg = './imgs/';
            }
            else {
                $url = 'camiseta.php?id=';
                $dirImg = '../imgs/';
            }

            require_once "modelo.php";
            $con = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");

            $datos = $con->obtenerDatos("SELECT * FROM productos WHERE oferta = 1 LIMIT 5");
            $camisetas = $con->convertirDatos($datos);
            
            echo "<section id='ofertas' class='bg-success-subtle'>
            <div class='container-fluid'>
                <h1>Ofertas</h1>";
            
            echo "<div class='row justify-content-center'>";
            for ($i = 0; $i < count($camisetas); $i++) {
                $titulo = $camisetas[$i]->nombre;
                $precio = $camisetas[$i]->precio;
                $imagen = $camisetas[$i]->imagen;
                $descripcion = $camisetas[$i]->descripcion;
                $id = $camisetas[$i]->id;
                echo "
                
                    <div class='col-sm-2 bg-light rounded p-0 me-2 mb-2'>
                    <a href='$url$id' class='text-decoration-none'>
                        <img src='$dirImg$imagen' class='img-thumbnail rounded' alt=''>
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
            echo   '</div> 
            
            </div>
        </div>
    </section>';
        }
        static function seccionNovedades($referencia) {
            if ($referencia == 0) {
                $url = "./php/camiseta.php?id=";
                $dirImg = './imgs/';
            }
            else {
                $url = 'camiseta.php?id=';
                $dirImg = '../imgs/';
            }
                require_once "modelo.php";
                $con = new conexionBBDD("127.0.0.1:3307", "root", "", "tiendaropa");

                $datos = $con->obtenerDatos("SELECT * FROM productos ORDER BY fecha LIMIT 5");
                $camisetas = $con->convertirDatos($datos);

                echo "<section id='novedades'>
            <div class='container-fluid'>
                <h1>Novedades</h1>
                <div class='row justify-content-center'>";

                echo '<div class="row justify-content-center">';
                for ($i = 0; $i < count($camisetas); $i++) {
                    $titulo = $camisetas[$i]->nombre;
                    $precio = $camisetas[$i]->precio;
                    $imagen = $camisetas[$i]->imagen;
                    $descripcion = $camisetas[$i]->descripcion;
                    $id = $camisetas[$i]->id;
                    echo "
                    <div class='col-sm-2 bg-light rounded p-0 me-2 mb-2'>
                    <a href='$url$id' class='text-decoration-none'>
                        <img src='$dirImg$imagen' class='img-thumbnail rounded' alt=''>
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
                echo   '</div> 
            
            </div>
        </div>
    </section>';
                
        }
    }
