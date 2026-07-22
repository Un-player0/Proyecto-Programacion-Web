<!-- includes/header.php -->
<?php session_start(); ?>
  <nav class="navbar contain">
    <a href="index.php" class="nav-logo"><img src="images/logo_white.png" alt="Black Angus Logo" height="70"/></a>
    <input type="checkbox" id="nav-toggle" class="nav-toggle" />
    <label for="nav-toggle" class="nav-hamburger" aria-label="Abrir menú">
      <span></span>
      <span></span> 
      <span></span>
    </label>
      <ul class="nav-links">
        <li><a href="menu.php">Menu</a></li>
        <li><a href="locales.php">Locales</a></li>
        <li><a href="nosotros.php">Nosotros</a></li>
        <li><a href="reservar.php">Reservar</a></li>

        <?php if (isset($_SESSION["id_cliente"])): ?>
          <li><a href="database/logout.php">Cerrar sesión (<?php echo htmlspecialchars($_SESSION["nombres"]); ?>)</a></li>
        <?php else: ?>
          <li><a href="login.php">Ingresar</a></li>
        <?php endif; ?>
        
      </ul>
  </nav>