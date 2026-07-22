<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Angus House | Carnes y Parrilla</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/locales_style.css" />
</head>

<body>
  <?php include("includes/header.php"); ?>

  <?php
    include("database/connection.php");

    $sql = "SELECT id_local, titulo, imagen, direccion, telefono, horario, link_maps
            FROM local
            WHERE estado = 'activo'
            ORDER BY titulo ASC";
    $resultado = $conn->query($sql);
  ?>

    <!-- CONTENIDO PRINCIPAL -->
    <main>
        <!-- LISTA DE LOCALES -->
        <section id="locales-lista">
          <div id="locales-intro">
            <h1 class="locales__title">Nuestros Locales</h1>
          </div>

            <div class="locales__grid">

              <?php if ($resultado && $resultado->num_rows > 0): ?>

                <!-- bucle for -->

                <?php while ($local = $resultado->fetch_assoc()): ?>
                  
                  <article class="card">
                    <!-- IMAGEN -->
                    <div class="card__image-wrapper">
                      <div class="card__image-placeholder">
                        <img src="<?php echo htmlspecialchars($local['imagen'] ?? 'images/default_local.jpg'); ?>"
                             alt="Imagen de <?php echo htmlspecialchars($local['titulo']); ?>"/>
                      </div>
                    </div>
                    <!-- CONTENIDO -->
                    <div class="card__body">
                      <!-- TITULO -->
                      <span class="card__title"><?php echo htmlspecialchars($local['titulo']); ?></span>
                      <!-- DESCRIPCION -->
                      <p class="card__description">
                        <strong>Dirección:</strong> <?php echo htmlspecialchars($local['direccion']); ?>
                      </p>
                      <!-- TELEFONO -->
                      <?php if (!empty($local['telefono'])): ?>
                        <p class="card__description">
                          <strong>Teléfono:</strong>
                          <a href="tel:+51<?php echo htmlspecialchars($local['telefono']); ?>">
                            <?php echo htmlspecialchars($local['telefono']); ?>
                          </a>
                        </p>
                      <?php endif; ?>
                      <!-- HORARIO -->
                      <p class="card__description">
                        <strong>Horario:</strong> <?php echo htmlspecialchars($local['horario']); ?>
                      </p>
                      <!-- RESERVA -->
                      <button class="btn">
                        <a href="reservar.php?local=<?php echo (int)$local['id_local']; ?>">Reservar en esta sucursal</a>
                      </button>
                      <!-- LINK MAPS -->
                      <?php if (!empty($local['link_maps'])): ?>
                        <button class="btn">
                          <a href="<?php echo htmlspecialchars($local['link_maps']); ?>" target="_blank">Ver sucursal en Google Maps</a>
                        </button>
                      <?php endif; ?>
                    </div>
                  </article>

                <?php endwhile; ?>
              <?php else: ?>
                <p>No hay locales disponibles en este momento.</p>
              <?php endif; ?>

            </div>
        </section>

    </main>

  <?php include("includes/footer.php"); ?>
</body>
</html>