window.onload = () => {
  const crearNav = () => {
    let navBar = document.createElement("nav");

    navBar.classList.add(
      "navbar",
      "navbar-expand-lg",
      "navbar-light",
      "bg-light",
      "bg-gradient"
    );

    navBar.innerHTML = `<div class="container-fluid">
          <!-- Logo a la izquierda -->
          <a class="navbar-brand" href="./index.php">Logo<img src="tu-logo.png" alt=""></a>
      
          <!-- Botón para colapsar el navbar en pantallas pequeñas -->
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
              aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
      
          <!-- Contenido del navbar -->
          <div class="collapse navbar-collapse" id="navbarNav">
              <!-- Barra de búsqueda en el centro -->
              <form class="d-flex my-2 my-lg-0 mx-auto">
                  <input class="form-control" type="search" placeholder="Buscar" aria-label="Buscar">
                  <button class="btn btn-outline-success" type="submit"><svg xmlns="http://www.w3.org/2000/svg"
                          width="16" height="26" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                          <path
                              d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                      </svg></button>
              </form>
              <!-- Botones de la derecha -->
              <ul class="navbar-nav ml-auto">
                  <li class="nav-item">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-outline-success me-md-2 mb-sm-2 mb-lg-0"
                          data-bs-toggle="modal" data-bs-target="#acceso">
                          Acceso
                      </button>
      
                      <!-- Modal acceso -->
                      <div class="modal fade" id="acceso" tabindex="-1" aria-labelledby="accesoLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="accesoLabel">Acceso clientes</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <!-- Form acceso -->
                                      <form method="post" id="loginForm">
                                          <div class="mb-3">
                                              <label for="loginEmail" class="form-label">Correo electrónico</label>
                                              <input type="email" class="form-control" id="loginEmail"
                                                  aria-describedby="emailHelp">
                                          </div>
                                          <div class="mb-3">
                                              <label for="loginPass" class="form-label">Contraseña</label>
                                              <input type="password" class="form-control" id="loginPass">
                                          </div>
                                          <button type="submit" class="btn btn-primary">Acceder</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
                  <li class="nav-item">
                      <!-- Button trigger modal -->
                      <button type="button" class="btn btn-success" data-bs-toggle="modal"
                          data-bs-target="#registrarse">
                          Registrarse
                      </button>
      
                      <!-- Modal Registro -->
                      <div class="modal fade" id="registrarse" tabindex="-1" aria-labelledby="registrarseLabel"
                          aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h1 class="modal-title fs-5" id="registrarseLabel">Registro de Usuario</h1>
                                      <button type="button" class="btn-close" data-bs-dismiss="modal"
                                          aria-label="Close"></button>
                                  </div>
                                  <div class="modal-body">
                                      <!-- Form registro -->
                                      <form id="registroForm">
                                          <div class="form-group mb-2">
                                              <label for="registroCorreo">Correo:</label>
                                              <input type="email" class="form-control" id="registroCorreo" name="registroCorreo"
                                                  required>
                                              <div id="emailHelp" class="form-text">ejemplo@ejemplo.ej</div>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="registroPass">Contraseña:</label>
                                              <input type="password" class="form-control" id="registroPass"
                                                  name="registroPass" required>
                                              <span id="passwordHelpInline" class="form-text">
                                                  Debe ser entre 8-20 caracteres de largo.
                                              </span>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="registroNombre">Nombre:</label>
                                              <input type="text" class="form-control" id="registroNombre" name="registroNombre"
                                                  required>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="registroApellidos">Apellidos:</label>
                                              <input type="text" class="form-control" id="registroApellidos" name="registroApellidos"
                                                  required>
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="registroDir">Dirección:</label>
                                              <input type="text" class="form-control" id="registroDir" name="registroDir">
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="registroTel">Teléfono:</label>
                                              <input type="tel" class="form-control" id="registroTel" name="registroTel">
                                          </div>
                                          <div class="form-group mb-2">
                                              <label for="dni">DNI:</label>
                                              <input type="text" class="form-control" id="dni" name="dni" required>
                                          </div>
                                          <button type="submit" class="btn btn-primary">Registrarse</button>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </li>
              </ul>
          </div>
      </div>`;

    document.body.insertBefore(navBar, document.body.firstChild);
  };

  const crearFooter = () => {
    let footer = document.createElement("footer");
    footer.classList.add("bg-dark", "text-white", "text-center", "py-3");

    footer.innerHTML = `<div class="container">
              <div class="row">
                  <div class="col-md-4">
                      <h5>Quiénes somos</h5>
                      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                      <a href="./paginas/sobre_nosotros.html" class="btn btn-outline-light">Más información</a>
                  </div>
                  <div class="col-md-4">
                      <h5>Trabaja con nosotros</h5>
                      <p>¿Quieres ser parte de nuestro equipo? ¡Únete a nosotros!</p>
                      <a href="#" class="btn btn-outline-light">Ver oportunidades</a>
                  </div>
                  <div class="col-md-4">
                      <h5>Contacto</h5>
                      <address>
                          <p>Dirección: 123 Calle Principal</p>
                          <p>Teléfono: (123) 456-7890</p>
                          <p>Email: info@example.com</p>
                      </address>
                      <a href="./paginas/contacto.html" class="btn btn-outline-light">Enviar mensaje</a>
                  </div>
              </div>
          </div>
          <div class="container">
              <p>&copy; 2023 Tu Sitio Web. Todos los derechos reservados.</p>
          </div>`;
    document.body.append(footer);
  };

  crearNav();
  crearFooter();

const loginForm = document.getElementById('loginForm');
const registroForm = document.getElementById('registroForm');

const loginUser = () => {
    const email = document.getElementById('loginEmail').value;
    const pass = document.getElementById('loginPass').value;

    let formData = new FormData();
    formData.append('loginEmail',email);
    formData.append('loginPass',pass);

    fetch('./php/login.php', { method: 'POST', body: formData })
    .then(response => { return response.text(); })
    .then(data => console.log(data));
}
const registerUser = () => {
    const email = document.getElementById('registroCorreo').value;
    const pass = document.getElementById('registroPass').value;
    const nombre = document.getElementById('registroNombre').value;
    const apellidos = document.getElementById('registroApellidos').value;
    const dirr = document.getElementById('registroDir').value;
    const tel = document.getElementById('registroTel').value;
    const dni = document.getElementById('dni').value;
    let formData = new FormData();
    formData.append('registroCorreo', email);
    formData.append('registroPass', pass);
    formData.append('registroNombre', nombre);
    formData.append('registroApellidos', apellidos);
    formData.append('registroDir', dirr);
    formData.append('registroTel', tel);
    formData.append('dni', dni);
    fetch('./php/registro.php', {
        method: "POST",
        body: formData
    })
        .then(response => { return response.text(); })
        .then(data => console.log(data));
}

loginForm.addEventListener('submit', e => {
    e.preventDefault();
    loginUser();
})

registroForm.addEventListener('submit', e => {
    e.preventDefault();
    registerUser();
})
//   const email = "a@a.es";
//   const pass = "2";
//   const nombre = "Arturo";
//   const apellidos = "Puentes";
//   const dirr = "123 calle principal";
//   const tel = "6666666";
//   const dni = "y9299290j";
//   let formData = new FormData();
//   formData.append("registroCorreo", email);
//   formData.append("registroPass", pass);
//   formData.append("registroNombre", nombre);
//   formData.append("registroApellidos", apellidos);
//   formData.append("registroDir", dirr);
//   formData.append("registroTel", tel);
//   formData.append("dni", dni);
//   fetch("../php/registro.php", {
//     method: "POST",
//     body: formData,
//   })
//     .then((response) => response.text())
//     .then((data) => console.log(data));


};
