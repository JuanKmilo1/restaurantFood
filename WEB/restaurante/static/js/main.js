const addNavBar = document.getElementById("Navcontainer")
const addFotter = document.getElementById("footer-section")
//Se hace uso de un java script para evitar repetir en codigo en cada apartado, con esto no mas se invoca en el codigo y se mantiene de la misma manera en todos
addNavBar.innerHTML = `

<div class="container-fluid" style=" width: 100%;">
          <a class="navbar-brand" href="index.html">
            <img src="./restaurante/logos/next.png" width="150px" alt="" srcset="">
   </a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0" style=" width: 100%">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" style="color: black;" href="index.html">Inicio</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" style="color: black;" href="indexQuienesSomos.html">Quienes Somos</a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" style="color: black;" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Servicios
                </a>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" style="color: black;" href="Platillos.php">Platillos</a></li>
                  <li><a class="dropdown-item" style="color: black;" href="Categoria.php">Categorias</a></li>
                  <li><hr class="dropdown-divider"></li>
                  <li><a class="dropdown-item" style="color: black;" href="reservaciones.php">Reservaciones</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" aria-disabled="true" style="color: black;" href="indexcontactanos.php">Contactanos</a>
              </li>
            </ul>
            <!--<form class="d-flex" role="search" method="post" action="search.php">
              <input class="search-input" type="search" placeholder="Escribe algo ..." aria-label="Search">
              <button class="btn btn-outline-success" type="submit">Buscar</button>-->
            </form>
          </div>
        </div>
    `

//Se le agrego un pie de pagina
const footer = `
<div class="container">
    <p class="mb-0">© 2024 Tu Empresa. Todos los derechos reservados.</p>
    <p class="mb-0">
      <a href="#" class="text-white text-decoration-none mx-2">Política de privacidad</a> |
      <a href="#" class="text-white text-decoration-none mx-2">Términos de servicio</a>
    </p>
  </div>
`

addFotter.innerHTML = footer

