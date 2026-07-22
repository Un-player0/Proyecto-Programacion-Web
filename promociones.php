<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Angus House | Carnes y Parrilla</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/menu_style.css" />
  <title>Black Angus House | Carnes y Parrilla</title>
</head>

<body>
  <?php include("includes/header.php"); ?>

  <!-- CONTENIDO PRINCIPAL -->
  <main>
    <div class="menu-navbar">
      <ul class="nav-links">
        <li><a href="menu.php">Volver al menu</a></li>
      </ul>
    </div>
    <div class="menu-container">
    <div class="menu-container">
      
        <!-- MENU -->

        <div id="platillos-intro">
          <h1 class="platillos__title">Promociones Espectaculares</h1>
        </div>
        <section id="platillos-lista">

          <div class="platillos__grid">

              <!-- SECCIÓN: ENTRADAS -->
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/Causa.jpg" alt="Imagen de platillo Causa"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Causa</span>
                  <p class="card__description"> Incluye salsa huancaína. </p>
                  <p class="card__description"> Precio: S/ 14 </p>
                </div>
              </article>
            
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/Chorizo_Casero.jpeg" alt="Imagen de platillo Chorizo casero"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Chorizo casero</span>
                  <p class="card__description"> 3 chorizos caseros </p>
                  <p class="card__description"> Precio: S/ 12 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/Tequenos_de_Queso.jpg" alt="Imagen de platillo Tequeños de queso"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Tequeños de queso</span>
                  <p class="card__description"> 6 tequeños rellenos de queso con crema de palta. </p>
                  <p class="card__description"> Precio: S/ 16 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/anticucho.png" alt="Imagen de platillo Anticucho de corazón Clásico"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Anticucho de corazón Clásico</span>
                  <p class="card__description"> Corazón de res marinado en ají panca, vinagre y comino. Servido con choclo y papa sancochada. </p>
                  <p class="card__description"> Precio: S/ 18 </p>
                </div>
              </article>
            
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/anticucho-mixto.jpg" alt="Imagen de platillo Anticucho mixto"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Anticucho mixto</span>
                  <p class="card__description"> Combinación de corazón, pollo y chorizo especial. Acompañado de salsa criolla y ají amarillo. </p>
                  <p class="card__description"> Precio: S/ 24 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/anticuchos-de-pollo.webp" alt="Imagen de platillo Anticucho de pollo"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Anticucho de pollo</span>
                  <p class="card__description"> Pechuga de pollo en marinada de ají amarillo y limón. Suave, jugoso y muy aromático. </p>
                  <p class="card__description"> Precio: S/ 16 </p>
                </div>
              </article>

            </div>
        </section>
      </div>
  </main>

  <?php include("includes/footer.php"); ?>
</body>
</html>