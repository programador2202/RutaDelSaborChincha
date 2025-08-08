<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ruta del Sabor Chincha</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="stylesheet" href="public/css/index.css">
</head>
<body>
<!----MENU PRINCIPAL--->
  <header>
    <nav class="navbar navbar-expand-lg bg-body-white shadow-sm">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
        <img src="Public/img/inicio_logo.png" alt="Logo Ruta del Sabor" width="120" height="50">
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto mb-4 mb-lg-0">
          <li class="nav-item mx-3">
            <a class="nav-link active" href="#">
              <i class="fas fa-home me-1"></i> Inicio
            </a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">
              <i class="fas fa-users me-1"></i> Nosotros
            </a>
          </li>
          <li class="nav-item dropdown mx-3">
            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">
              <i class="fas fa-utensils me-1"></i> Categorías
            </a>
            <ul class="dropdown-menu">
              <li><a class="dropdown-item" href="#">Mariscos</a></li>
              <li><a class="dropdown-item" href="#">Criolla</a></li>
              <li><hr class="dropdown-divider"></li>
              <li><a class="dropdown-item" href="#">Postres</a></li>
            </ul>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">
              <i class="fas fa-wine-bottle me-1"></i> Vitinícolas
            </a>
          </li>
          <li class="nav-item mx-3">
            <a class="nav-link" href="#">
              <i class="fas fa-blog me-1"></i> Blog
            </a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#"><i class="fab fa-facebook fa-lg"></i></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#"><i class="fab fa-whatsapp fa-lg"></i></a>
          </li>
          <li class="nav-item mx-2">
            <a class="nav-link" href="#"><i class="fab fa-tiktok fa-lg"></i></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  </header>


 
<main>
<!----CONTENIDO PRINCIPAL--->
<section class="hero">
  <div class="container">
    <h1>¿Qué quieres comer hoy en Chincha?</h1>
    <div class="row justify-content-center mt-4">
      <div class="col-md-10">
        <form class="row g-2">
          <div class="col-md-3">
            <select class="form-select" name="categoria">
             <option selected disabled>Tipo de comida</option>
              </option>
            </select>
          </div>
          <div class="col-md-3">
            <select class="form-select">
              <option selected>Ordenar por</option>
              <option value="valorados">Top valorados</option>
              <option value="economico">Económico</option>
              <option value="abierto">Abierto ahora</option>
            </select>
          </div>
          <div class="col-md-3">
            <button type="submit" class="btn btn-light w-100">Buscar</button>
          </div>
          <div class="col-md-3">
            <button type="button" class="btn btn-outline-warning w-100">
              <i class="fas fa-location-arrow"></i> Usa mi ubicación
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>


<!----SECCION CATEGORIAS ---->

<section class="py-5 bg-light">
  <div class="container">
    <h2 class="text-center mb-4"><b>Explora por Categorías</b></h2>
    <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-5 g-4 justify-content-center">

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-utensils"></i></div>
          <div>Comida Oriental</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-drumstick-bite"></i></div>
          <div>Pollerías</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-pizza-slice"></i></div>
          <div>Pizzerías</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-hamburger"></i></div>
          <div>Hamburguesas</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-fish"></i></div>
          <div>Mariscos</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-coffee"></i></div>
          <div>Cafeterías</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-fire"></i></div>
          <div>Parrillas</div>
        </div>
      </div>

      <div class="col text-center">
        <div class="card border-0 shadow-sm p-3 categoria-card">
          <div class="categoria-icono"><i class="fas fa-wine-glass-alt"></i></div>
          <div>Vitivinícolas</div>
        </div>
      </div>
        </div>
    </div>
  </div>
</section>

<section>
    <section class=" home">
    <h1 class="titulo"><b>Restaurantes Mas Visitados de La Semana</b></h1>

    <div class=" my-5">
        <div class="subtitulo d-flex flex-wrap justify-content-center gap-5">
        </div>
      <div class="d-flex flex-wrap justify-content-center gap-5 my-3">

        <div class="card" style="width: 20rem; overflow: hidden;">
          <img src="public/img/causa_agresiva (2).jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><b>El Punto Marino</b></h5>
            <p class="card-text">¡Explora el Encanto del Mar en el Punto Marino!</p>
            <a href="#" class="btn  mt-auto"><b>Visitar</b></a>
          </div>
        </div>

        <div class="card" style="width: 20rem; overflow: hidden;">
          <img src="public/img/Chijaukay.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><b>Mister Wok</b></h5>
            <p class="card-text">¿Antojo de comida china? Descubre el auténtico sabor del chifa en Mister Wok</p>
            <a href="#" class="btn  mt-auto"><b>Visitar</b></a>
          </div>
        </div>

        <div class="card" style="width: 20rem; overflow: hidden;">
          <img src="public/img/el_gran_combo restaurante_chincha_c (3).jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><b>El Gran Combo</b></h5>
            <p class="card-text">Somos el lugar ideal para disfrutar de una experiencia gastronómica que celebra las ricas tradiciones culinarias.</p>
            <a href="#" class="btn  mt-auto"><b>Visitar</b></a>
          </div>
        </div>

      </div>
    </div>

    <div class=" my-1">
      <div class="destacados d-flex flex-wrap justify-content-center gap-5">
        
        <div class="card" style="width: 20rem; overflow: hidden;">
          <img src="public/img/3.jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><b>¡Daddy’s Truck’s Burger!</b></h5>
            <p class="card-text">Daddy’s Trucks Burger es un restaurante único en Chincha que se distingue por ofrecer una experiencia de comida rápida diferente</p>
            <a href="#" class="btn mt-auto"><b>Visitar</b></a>
          </div>
        </div>

        <div class="card" style="width: 20rem; overflow: hidden;">
          <img src="public/img/daito (5).jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><b>DAITO</b></h5>
            <p class="card-text">En Daito, nos enorgullecemos de ser un restaurante dedicado a presentar la exquisita cocina Nikkei,
                  mezcla de sabores que refleja la rica herencia cultural de Perú y Japón.</p>
            <a href="#" class="btn  mt-auto"><b>Visitar</b></a>
          </div>
        </div>

        <div class="card" style="width: 20rem; overflow: hidden;">
          <img src="public/img/vitivinicola_chincha_san_carlos (1).jpg" class="card-img-top" alt="...">
          <div class="card-body d-flex flex-column">
            <h5 class="card-title"><b>Viñedos San Carlos</b></h5>
            <p class="card-text">Somos una bodega ubicada en el pintoresco valle de Sunampe, Chincha, Perú. 
                Viñedos San Carlos se destaca por su dedicación a la calidad, la innovación y el respeto por el medio ambiente.</p>
            <a href="#" class="btn mt-auto"><b>Visitar</b></a>
          </div>
        </div>

      </div>
    </div>
    <br>
    <br>

  </section>


  <section class="auspiciadores my-5 mb-4">
    <h1><b>Nuestros Auspiciadores</b></h1>

    <div class="container1 my-1 mb-2">
      <div class="card-auspiciadores"><img src="public/img/logo_marino_responsivo.png" alt=""></div>
      <div class="card-auspiciadores"><img src="public/img/logo_misterwok.png" alt=""></div>
      <div class="card-auspiciadores"><img src="public/img/Marca-de-daito.png" alt=""></div>
      <div class="card-auspiciadores"><img src="public/img/logo_gran_combo.png" alt=""></div>
    </div>
  </section>
<br>
<br>
<br>
<br>

<section class="contacto ">
  <div class="row align-items-center ">
    <!-- Imagen -->
    <div class="col-md-6 text-center">
    <img src="public/img/inicio_logo.png" alt="" class="img-fluid rounded">
    </div>
    <div class="col-md-6 unete-texto">
      <h2><b>¡Únete ahora y lleva tu negocio al siguiente nivel!</b></h2>
      <p>Si tienes un restaurante, negocio de comida o una bodega de vinos en Chincha... ¡trabajemos juntos!</p>
      <p>Con nosotros lograrás un alcance más amplio, publicidad exclusiva y fotos profesionales tendrás oportunidad para destacar en el mercado.</p>
   <button type="button" class="btn btn-danger w-70 mt-3" data-bs-toggle="modal" data-bs-target="#modalUnete">
  <b>Unirme Ahora</b>
</button>
    </div>
  </div>
</section>
<!-- Modal -->
<div class="modal fade" id="modalUnete" tabindex="-1" aria-labelledby="modalUneteLabel" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="modalUneteLabel">Únete a Ruta del Sabor Chincha</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="mb-3">
            <label for="nombreNegocio" class="form-label">Nombre del negocio</label>
            <input type="text" class="form-control" id="nombreNegocio" required>
          </div>
          <div class="mb-3">
            <label for="tipoNegocio" class="form-label">Tipo (restaurante, bodega, etc.)</label>
            <input type="text" class="form-control" id="tipoNegocio" required>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label">Teléfono</label>
            <input type="tel" class="form-control" id="telefono" required>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label">Correo electrónico</label>
            <input type="email" class="form-control" id="correo" required>
          </div>
          <button type="submit" class="btn btn-danger">Enviar solicitud</button>
        </form>
      </div>
    </div>
  </div>
</div>
</main>

<footer class="bg-white text-black pt-5 pb-4 px-4 text-center text-md-start">
    <div class=" text-center text-md-start">
      <div class="row text-center text-md-start">
        <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold text-warning">Ruta del Sabor Chincha</h5>
          <p>Tu socio ideal para conectar negocios locales con nuevos clientes en Chincha.</p>
        </div>
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold text-warning">Enlaces</h5>
          <p><a href="#" class="text-black text-decoration-none">Inicio</a></p>
          <p><a href="#" class="text-black text-decoration-none">Nosotros</a></p>
          <p><a href="#" class="text-black text-decoration-none">Servicios</a></p>
          <p><a href="#" class="text-black text-decoration-none">Contacto</a></p>
        </div>
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold text-warning">Redes Sociales</h5>
          <p><a href="#" class="text-black text-decoration-none"><i class="fab fa-facebook me-2"></i>Facebook</a></p>
          <p><a href="#" class="text-black text-decoration-none"><i class="fab fa-instagram me-2"></i>Instagram</a></p>
          <p><a href="#" class="text-black text-decoration-none"><i class="fab fa-whatsapp me-2"></i>WhatsApp</a></p>
        </div>
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
          <h5 class="text-uppercase mb-4 fw-bold text-warning">Contacto</h5>
          <p><i class="fas fa-home me-2"></i> Chincha Alta, Perú</p>
          <p><i class="fas fa-envelope me-2"></i> info@larutadelsabor.com</p>
          <p><i class="fas fa-phone me-2"></i> +51 955 365 019</p>
        </div> 
      </div>
      <hr class="mb-4">
      <div class="row align-items-center">
        <div class="col-md-7 col-lg-8">
          <p>   © 2025 Todos los derechos reservados por <span class="text-warning fw-bold">Ruta del Sabor Chincha</span></p>
        </div>
        <div class="col-md-5 col-lg-4">
          <div class="text-center text-md-end">
            <a href="#" class="text-black me-4"><i class="fab fa-facebook"></i></a>
            <a href="#" class="text-black me-4"><i class="fab fa-instagram"></i></a>
            <a href="#" class="text-black me-4"><i class="fab fa-whatsapp"></i></a>
          </div>
        </div>
      </div>
    </div>
  </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<script>
  
document.addEventListener("DOMContentLoaded", function () {
  const selectCategoria = document.querySelector('select[name="categoria"]');

  fetch("http://localhost/RutadelSaborChincha/controllers/Categoria.php?task=getAll")
    .then(response => response.json())
    .then(data => {
      data.forEach(categoria => {
        const option = document.createElement("option");
        option.value = categoria.idcategoria;
        option.textContent = categoria.nombre;
        selectCategoria.appendChild(option);
      });
    })
    .catch(error => {
      console.error("Error al cargar categorías:", error);
    });
});
</script>


</body>
</html>
