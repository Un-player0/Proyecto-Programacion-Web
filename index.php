<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Angus House | Carnes y Parrilla</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/index_style.css" />
</head>

<!-- Toast de Confirmacion de inicio de sesion / registro -->
<div id="toast" class="toast"></div>
<script>
  const params = new URLSearchParams(window.location.search);
  const toast = document.getElementById("toast");

  function mostrarToast(texto, tipo) {
    toast.textContent = texto;
    toast.className = "toast show " + tipo;
    setTimeout(() => toast.classList.remove("show"), 4000);
  }

  if (params.get("registro") === "exito") {
    mostrarToast("¡Cuenta creada con éxito! Ya iniciaste sesión.", "exito");
  } else if (params.get("login") === "exito") {
    mostrarToast("¡Bienvenido de nuevo!", "exito");
  }
</script>

<body>

  <?php include("includes/header.php"); ?>

  <!-- CONTENIDO PRINCIPAL -->
  <main>
    <!-- BANNER -->
    <div class="banner-image">
      <div class="difuminado"></div>
      <section class="container banner-content">
        <h2>¡Disfruta de las mejores carnes y parrillas en tu restaurante favorito!</h2>
        <button><a href="reservar.php">RESERVAR</a></button>
      </section>
    </div>

    <!-- RAZON PARA ELEGIR NUESTRO RESTAURANTE -->
    <div class="container about-container">
      <section class="about-info">
        <img src="images/CarneAsada.jpeg" alt="Imagen de carne asada"/>
        <section class="about-text">
        <h2>¿Por qué elegir Black Angus House?</h2>
        <p>En Black Angus House, nos enorgullece ofrecer a nuestros clientes una experiencia culinaria excepcional. Nuestra pasión por la calidad y el sabor se refleja en cada plato que servimos.</p><br>
        <button><a href="reservar.php">Reservar</a></button>
        </section>
      </section>
    </div>

    <!-- DESTACADOS -->
    <section class="recommendations">

      <div class="recommendations__header">
        <h2 class="recommendations__title"> Platos Destacados</h2>
      </div>

      <!-- Card 1: Anticucho de corazón Clásico -->
      <div class="recommendations__grid">
        <article class="card">
          <div class="card__image-wrapper">
            <a href="menu.php#anticucho">
            <div class="card__image-placeholder">
              <img src="images/anticucho.png" alt="Imagen de anticucho"/>
            </div>
            </a>
          </div>
          <div class="card__body">
            <a href="menu.php#anticucho">
            <span class="card__title">Anticucho de corazón Clásico</span>
            </a>
            <p class="card__description"> Corazón de res marinado en ají panca, vinagre y comino. Servido con papa y choclo. </p>
            <p class="card__description"> Precio: S/ 18.00 </p>
          </div>
        </article>

        <!-- Card 2: Top Sirloin Entree -->
        <article class="card">
          <div class="card__image-wrapper">
            <a href="menu.php#parrilla">
            <div class="card__image-placeholder">
              <img src="images/Bife.jpg" alt="Imagen de bife de chorizo" />
            </div>
            </a>
          </div>
          <div class="card__body">
            <a href="menu.php#parrilla">
            <span class="card__title">Bife de Chorizo Argentino</span>
            </a>
            <p class="card__description"> Incluye porcion de papas fritas </p>
            <p class="card__description"> Precio: S/ 35.00 </p>
          </div>
        </article>

        <!-- Card 3: Filete Mignon de Pechuga -->
        <article class="card">
          <div class="card__image-wrapper">
            <a href="menu.php#parrilla">
            <div class="card__image-placeholder">
              <img src="images/filete_mignon.jpg" alt="Imagen de filete mignon" />
            </div>
            </a>
          </div>
          <div class="card__body">
            <a href="menu.php#parrilla">
            <span class="card__title">Filete Mignon de Pechuga</span>
            </a>
            <p class="card__description"> Se prepara envolviendo pechugas en tiras de tocino y champiñones</p>
            <p class="card__description"> Precio: S/ 40.00 </p>
          </div>
        </article>

        </div>
    </section>

  <section class="join-us">
        <h2>Descubre nuestros beneficios</h2>
        <p>Se parte de nuestro programa de recompensas y descubre las ofertas que tenemos para ti</p>
        <button><a href="login.php">Unirse</a></button>
        <button><a href="socios.php">Conoce más información</a></button>
  </div>
  </section>
  </main>
  
  <?php include("includes/footer.php"); ?>

</body>
</html>