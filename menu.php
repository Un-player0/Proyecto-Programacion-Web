<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Angus House | Carnes y Parrilla</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/menu_style.css" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <!-- CONTENIDO PRINCIPAL -->
  <main>
    <div class="menu-navbar">
      <ul class="nav-links">
        <li><a href="promociones.php">Promociones</a></li>
        <li><a href="#Entradas">Entradas</a></li>
        <li><a href="#Anticuchos">Anticuchos</a></li>
        <li><a href="#Carnes-a-la-Parrilla">Parrilla</a></li>
        <li><a href="#Combos">Combos</a></li>
        <li><a href="#Bebidas">Bebidas</a></li>
      </ul>
    </div>
    <div class="menu-container">
      
        <!-- MENU -->

        <div id="platillos-intro">
          <h1 class="platillos__title">Nuestros Platillos</h1>
        </div>
        <section id="platillos-lista">
          <div id="platillos-intro">
            <h2 id="Entradas" class="platillos__subtitle">Entradas</h2>
          </div>

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

            </div>
        </section>

        <section id="platillos-lista">
          <div id="platillos-intro">
            <h2 id="Anticuchos" class="platillos__subtitle">Anticuchos</h2>
          </div>

          <div class="platillos__grid">

              <!-- SECCIÓN: ANTICUCHOS -->
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

        <section id="platillos-lista">
          <div id="platillos-intro">
            <h2 id="Carnes-a-la-Parrilla" class="platillos__subtitle">Carnes a la Parrilla</h2>
          </div>

          <div class="platillos__grid">

              <!-- SECCIÓN: CARNES A LA PARRILLA -->
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/churrasco_de_res.jpeg" alt="Imagen de platillo Churrasco de res"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Churrasco de res </span>
                  <p class="card__description"> Corte jugoso de 300 g, a la brasa de carbón. Con papas fritas o arroz y ensalada fresca. </p>
                  <p class="card__description"> Precio: S/ 38 </p>
                </div>
              </article>
            
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/filete_mignon.jpg" alt="Imagen de platillo Filete Mignon de Pechuga"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Filete Mignon de Pechuga</span>
                  <p class="card__description"> Carne tierna y sabrosa. Se prepara envolviendo pechugas en tiras de tocino y champiñones. </p>
                  <p class="card__description"> Precio: S/ 40 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/chuleta_de_cerdo.jpg" alt="Imagen de platillo Chuleta de cerdo"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Chuleta de cerdo</span>
                  <p class="card__description"> Chuleta gruesa glaseada en miel de caña y mostaza. Con camote al horno y chimichurri. </p>
                  <p class="card__description"> Precio: S/ 32 </p>
                </div>
              </article>

            </div>
        </section>

        <section id="platillos-lista">
          <div id="platillos-intro">
            <h2 id="Combos" class="platillos__subtitle">Combos</h2>
          </div>

          <div class="platillos__grid">

              <!-- SECCIÓN: COMBOS -->
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/combo_personal.webp" alt="Imagen del Combo Personal"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Combo Personal</span>
                  <ul>
                    <li>2 anticuchos de corazón</li>
                    <li>Choclo y papas</li>
                    <li>Salsa de la casa</li>
                    <li>Gaseosa personal</li>
                  </ul>
                  <p class="card__description"> Precio: S/ 35 </p>
                </div>
              </article>
            
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/parrillada_dos.webp" alt="Imagen de Parrilla para dos"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Parrilla para dos</span>
                  <ul>
                    <li>1 churrasco de res</li>
                    <li>3 anticuchos mixtos</li>
                    <li>1 guarnición incluida</li>
                    <li>Gaseosa personal (x2)</li>
                  </ul>
                  <p class="card__description"> Precio: S/ 75 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/combo_familiar.jpg" alt="Imagen de Combo Familiar"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title">Combo Familiar</span>
                  <ul>
                    <li>6 anticuchos de corazón</li>
                    <li>2 churrascos de res</li>
                    <li>1 chuleta de cerdo</li>
                    <li>1 guarnición incluida</li>
                    <li>Gaseosa o chicha o limonada 1.5 L</li>
                  </ul>
                  <p class="card__description"> Precio: S/ 110 </p>
                </div>
              </article>

            </div>
        </section>

        <section id="platillos-lista">
          <div id="platillos-intro">
            <h2 id="Bebidas" class="platillos__subtitle">Bebidas</h2>
          </div>

          <div class="platillos__grid">

              <!-- SECCIÓN: BEBIDAS -->
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/chicha_morada.webp" alt="Imagen de Chicha Morada 1L"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title"> Chicha morada o Limonada 1L </span>
                  <p class="card__description"> Precio: S/ 8 </p>
                </div>
              </article>
            
              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/limonada.webp" alt="Imagen de Limonada 1.5L"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title"> Chicha morada o Limonada 1.5L </span>
                  <p class="card__description"> Precio: S/ 11 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/pisco_sour.jpeg" alt="Imagen de Pisco Sour"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title"> Pisco Sour </span>
                  <p class="card__description"> Precio: S/ 18 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/inca-kola.webp" alt="Imagen de Gaseosa 1L"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title"> Gaseosa 1L </span>
                  <p class="card__description"> Precio: S/ 14 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/gaseosa_personal.webp" alt="Imagen de Gaseosa personal"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title"> Gaseosa personal </span>
                  <p class="card__description"> Precio: S/ 5 </p>
                </div>
              </article>

              <article class="card">
                <div class="card__image-wrapper">
                  <div class="card__image-placeholder">
                    <img src="images/cerveza_pilsen.jpg" alt="Imagen de Cerveza Pilsen 630ml"/>
                  </div>
                </div>
                <div class="card__body">
                  <span class="card__title"> Cerveza Pilsen 630ml </span>
                  <p class="card__description"> Precio: S/ 9 </p>
                </div>
              </article>

            </div>
        </section>

      </div>
  </main>

  <?php include("includes/footer.php"); ?>
</body>
</html>