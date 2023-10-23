<?php
class CrearSecciones
{
    static function seccionOfertas($referencia = 0)
    {

        if ($referencia == 0) {
            $url = "./php/camiseta.php?id=";
            $dirImg = './imgs/';
        } else {
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
    static function seccionNovedades($referencia)
    {
        if ($referencia == 0) {
            $url = "./php/camiseta.php?id=";
            $dirImg = './imgs/';
        } else {
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

    static function crearNav($referencia)
    {
        if ($referencia == 0) {
            $url = "index.php";
            $url2 = './php/login.php';
            $url3 = './php/registro.php';
        } else {
            $url = '../index.php';
            $url2 = 'login.php';
            $url3 = 'registro.php';
        }

        if (isset($_SESSION['nombre'])) {
            $user = $_SESSION['nombre'];
            echo "
            <nav class='navbar navbar-expand-lg navbar-light bg-light bg-gradient'><div class='container-fluid'>
            <!-- Logo a la izquierda -->
            <a class='navbar-brand' href='$url'>Logo<img src='tu-logo.png' alt=''></a>
        
            <!-- Botón para colapsar el navbar en pantallas pequeñas -->
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        
            <!-- Contenido del navbar -->
            <div class='collapse navbar-collapse' id='navbarNav'>
                <!-- Barra de búsqueda en el centro -->
                <form class='d-flex my-2 my-lg-0 mx-auto'>
                    <input class='form-control' type='search' placeholder='Buscar' aria-label='Buscar'>
                    <button class='btn btn-outline-success' type='submit'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='26' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                            <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'></path>
                        </svg></button>
                </form>
                        <ul class='navbar-nav ml-auto'>
                        <li class='nav-item dropdown'>
                            <a class='nav-link dropdown-toggle' href='#' id='profileDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
                            <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-person-circle' viewBox='0 0 16 16'>
                              <path d='M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z'/>
                              <path fill-rule='evenodd' d='M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z'/>
                            </svg>
                                $user
                            </a>
                            <div class='dropdown-menu' aria-labelledby='profileDropdown'>
                                <a class='dropdown-item' href='#'>My Profile</a>
                                <a class='dropdown-item' href='#'>Orders</a>
                                <div class='dropdown-divider'></div>
                                <a class='dropdown-item' href='#'>Logout</a>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
            ";
        } else {

            echo "
            <nav class='navbar navbar-expand-lg navbar-light bg-light bg-gradient'><div class='container-fluid'>
            <!-- Logo a la izquierda -->
            <a class='navbar-brand' href='$url'>Logo<img src='tu-logo.png' alt=''></a>
        
            <!-- Botón para colapsar el navbar en pantallas pequeñas -->
            <button class='navbar-toggler' type='button' data-bs-toggle='collapse' data-bs-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
                <span class='navbar-toggler-icon'></span>
            </button>
        
            <!-- Contenido del navbar -->
            <div class='collapse navbar-collapse' id='navbarNav'>
                <!-- Barra de búsqueda en el centro -->
                <form class='d-flex my-2 my-lg-0 mx-auto'>
                    <input class='form-control' type='search' placeholder='Buscar' aria-label='Buscar'>
                    <button class='btn btn-outline-success' type='submit'><svg xmlns='http://www.w3.org/2000/svg' width='16' height='26' fill='currentColor' class='bi bi-search' viewBox='0 0 16 16'>
                            <path d='M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z'></path>
                        </svg></button>
                </form>
                <!-- Botones de la derecha -->
                <ul class='navbar-nav ml-auto'>
                    <li class='nav-item'>
                        <!-- Button trigger modal -->
                        <button type='button' class='btn btn-outline-success me-md-2 mb-sm-2 mb-lg-0' data-bs-toggle='modal' data-bs-target='#acceso'>
                            Acceso
                        </button>
        
                        <!-- Modal acceso -->
                        <div class='modal fade' id='acceso' tabindex='-1' aria-labelledby='accesoLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h1 class='modal-title fs-5' id='accesoLabel'>Acceso clientes</h1>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <!-- Form acceso -->
                                        <form method='post' id='loginForm' action='$url2'>
                                            <div class='mb-3'>
                                                <label for='loginEmail' class='form-label'>Correo electrónico</label>
                                                <input type='email' class='form-control' id='loginEmail' aria-describedby='emailHelp'>
                                            </div>
                                            <div class='mb-3'>
                                                <label for='loginPass' class='form-label'>Contraseña</label>
                                                <input type='password' class='form-control' id='loginPass'>
                                            </div>
                                            <button type='submit' class='btn btn-primary'>Acceder</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class='nav-item'>
                        <!-- Button trigger modal -->
                        <button type='button' class='btn btn-success' data-bs-toggle='modal' data-bs-target='#registrarse'>
                            Registrarse
                        </button>
        
                        <!-- Modal Registro -->
                        <div class='modal fade' id='registrarse' tabindex='-1' aria-labelledby='registrarseLabel' aria-hidden='true'>
                            <div class='modal-dialog'>
                                <div class='modal-content'>
                                    <div class='modal-header'>
                                        <h1 class='modal-title fs-5' id='registrarseLabel'>Registro de Usuario</h1>
                                        <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                                    </div>
                                    <div class='modal-body'>
                                        <!-- Form registro -->
                                        <form id='registroForm' action='$url3' method='POST'>
                                            <div class='form-group mb-2'>
                                                <label for='registroCorreo'>Correo:</label>
                                                <input type='email' class='form-control' id='registroCorreo' name='registroCorreo' required=''>
                                                <div id='emailHelp' class='form-text'>ejemplo@ejemplo.ej</div>
                                            </div>
                                            <div class='form-group mb-2'>
                                                <label for='registroPass'>Contraseña:</label>
                                                <input type='password' class='form-control' id='registroPass' name='registroPass' required=''>
                                                <span id='passwordHelpInline' class='form-text'>
                                                    Debe ser entre 8-20 caracteres de largo.
                                                </span>
                                            </div>
                                            <div class='form-group mb-2'>
                                                <label for='registroNombre'>Nombre:</label>
                                                <input type='text' class='form-control' id='registroNombre' name='registroNombre' required=''>
                                            </div>
                                            <div class='form-group mb-2'>
                                                <label for='registroApellidos'>Apellidos:</label>
                                                <input type='text' class='form-control' id='registroApellidos' name='registroApellidos' required=''>
                                            </div>
                                            <div class='form-group mb-2'>
                                                <label for='registroDir'>Dirección:</label>
                                                <input type='text' class='form-control' id='registroDir' name='registroDir'>
                                            </div>
                                            <div class='form-group mb-2'>
                                                <label for='registroTel'>Teléfono:</label>
                                                <input type='tel' class='form-control' id='registroTel' name='registroTel'>
                                            </div>
                                            <div class='form-group mb-2'>
                                                <label for='dni'>DNI:</label>
                                                <input type='text' class='form-control' id='dni' name='dni' required=''>
                                            </div>
                                            <button type='submit' class='btn btn-primary'>Registrarse</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div></nav>
            ";
        }



        /*
            <!-- Botones de la derecha -->
            <ul class="navbar-nav ms-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="profileDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <img src="profile-picture.jpg" alt="Profile Picture" width="30" height="30" class="rounded-circle">
            John Doe
        </a>
        <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="profileDropdown">
            <li><a class="dropdown-item" href="#">Mi perfil</a></li>
            <li><a class="dropdown-item" href="#">Pedidos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Cerrar sesión</a></li>
        </ul>
    </li>
</ul>
*/
    }

    static function crearFooter($referencia)
    {

        if ($referencia == 0) {
            $url = "./php/sobre_nosotros.php";
            $url2 = './php/trabaja_con_nosotros.php';
            $url3 = './php/contacto.php';
        } else {
            $url = 'sobre_nosotros.php';
            $url2 = 'trabaja_con_nosotros.php';
            $url3 = 'contacto.php';
        }

        echo "<footer class='bg-dark text-white text-center py-3'><div class='container'>
        <div class='row'>
            <div class='col-md-4'>
                <h5>Quiénes somos</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <a href='$url' class='btn btn-outline-light'>Más información</a>
            </div>
            <div class='col-md-4'>
                <h5>Trabaja con nosotros</h5>
                <p>¿Quieres ser parte de nuestro equipo? ¡Únete a nosotros!</p>
                <a href='$url2' class='btn btn-outline-light'>Ver oportunidades</a>
            </div>
            <div class='col-md-4'>
                <h5>Contacto</h5>
                <address>
                    <p>Dirección: 123 Calle Principal</p>
                    <p>Teléfono: (123) 456-7890</p>
                    <p>Email: info@example.com</p>
                </address>
                <a href='$url3' class='btn btn-outline-light'>Enviar mensaje</a>
            </div>
        </div>
    </div>
    <div class='container'>
        <p>© 2023 Tu Sitio Web. Todos los derechos reservados.</p>
    </div></footer>";
    }
}
