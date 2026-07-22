<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Angus House | Carnes y Parrilla</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/reservar_style.css">
</head>

<body>
  <?php include("includes/header.php"); ?>

  <?php
    include("database/connection.php");

    $sql = "SELECT id_local, titulo FROM local WHERE estado = 'activo' ORDER BY titulo ASC";
    $resultado = $conn->query($sql);

    // Si venimos de locales.php con ?local=ID, lo preseleccionamos
    $localPreseleccionado = isset($_GET['local']) ? (int)$_GET['local'] : null;
  ?>

  <!-- CONTENIDO PRINCIPAL -->
  <main>
      <div id="reservas">
      <h2> RESERVAS </h2>
          <form id="reservas-form" action="database/crearReserva.php" method="POST">
              <div id="reservas-form-local">
                  <label for="local">Escoge un local:</label>

                  <select name="id_local" id="local" required>
                    <?php if ($resultado && $resultado->num_rows > 0): ?>
                      <?php while ($local = $resultado->fetch_assoc()): ?>
                        <option value="<?php echo $local['id_local']; ?>"
                          <?php echo ($localPreseleccionado === (int)$local['id_local']) ? 'selected' : ''; ?>>
                          <?php echo htmlspecialchars($local['titulo']); ?>
                        </option>
                      <?php endwhile; ?>
                    <?php endif; ?>
                  </select>
              </div>

              <div id="reservas-form-fecha">
                  <label for="fecha">Fecha de reserva:</label>
                  <input type="date" id="fecha" name="fecha" min="<?php echo date('Y-m-d'); ?>" required/>
              </div>

              <div id="reservas-form-hora">
                  <label for="hora">Hora de reserva:</label>
                  <input type="time" id="hora" name="hora" min="08:00" max="22:00" required/>
              </div>
              
              <div id="reservas-form-personas">
                  <label for="personas">Número de personas:</label>
                  <input type="number" id="personas" name="personas" value="1" min="1" max="20" required/>
              </div>
              <button id="reservas-form-submit" type="submit">Realizar Reserva</button>

          </form>
      </div>
  </main>

  <div id="toast" class="toast"></div>

  <script>
    const params = new URLSearchParams(window.location.search);
    const toast = document.getElementById("toast");

    function mostrarToast(texto, tipo) {
      toast.textContent = texto;
      toast.className = "toast show " + tipo;
      setTimeout(() => toast.classList.remove("show"), 4000);
    }

    if (params.get("reserva") === "exito") {
      mostrarToast("¡Reserva realizada con éxito!", "exito");
    } else if (params.get("reserva") === "error") {
      mostrarToast(params.get("msg") || "Hubo un error al reservar.", "error");
    }
  </script>

  <?php include("includes/footer.php"); ?>


</body>
</html>