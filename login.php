<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Black Angus House | Carnes y Parrilla</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/login_style.css" />
</head>

<body>
  <?php include("includes/header.php"); ?>

    <!-- CONTENIDO PRINCIPAL -->
  <main>
    <!-- LOGIN -->
    <section id="form-login">
      <h2>Iniciar sesión</h2>

      <form action="database/loginUsuario.php" method="POST" id="loginForm">
        
        <label for="login-email">Correo electrónico</label>
        <input
          type="email"
          id="login-email"
          name="correo"
          placeholder="correo@ejemplo.com"
          required
        />

        <label for="login-password">Contraseña</label>
        <input
          type="password"
          id="login-password"
          name="password"
          placeholder="Tu contraseña"
          required
        />

        <a href="#recuperar">¿Olvidaste tu contraseña?</a>

        <button class="btn" type="submit">Ingresar</button>

      </form>
    </section>


    <!-- SIGNUP -->
    <section id="form-signup">
      <h2>Crear cuenta</h2>
      <form action="database/registrarUsuario.php" method="POST" id="signupForm">
        <label for="signup-nombres">Nombres</label>
        <input 
        type="text" 
        id="signup-nombres" 
        name="nombres" 
        placeholder="Nombre(s)" 
        required 
        />

        <label for="signup-apellidos">Apellidos</label>
        <input type="text" 
        id="signup-apellidos" 
        name="apellidos" 
        placeholder="Apellido(s)" 
        required 
        />

        <label for="signup-email">Correo electrónico</label>
        <input type="email" 
        id="signup-email" 
        name="correo" 
        placeholder="correo@ejemplo.com" 
        required 
        />

        <label for="signup-phone">Teléfono (opcional)</label>
        <input type="tel" 
        id="signup-phone" 
        name="telefono" 
        placeholder="+51 999 999 999" 
        />

        <label for="signup-password">Contraseña</label>
        <input type="password" 
        id="signup-password" 
        name="password" 
        placeholder="Mínimo 6 caracteres" 
        minlength="6" 
        required 
        />

        <label for="signup-confirm">Confirmar contraseña</label>
        <input type="password" 
        id="signup-confirm" 
        name="confirm" 
        placeholder="Repite tu contraseña" 
        minlength="6" 
        maxlength="16" 
        required 
        />

        <label>
          <input type="checkbox" name="terms" required />
          Acepto los <a href="terminos.html" target="_blank">términos y condiciones</a>
        </label>

        <button class="btn" type="submit">Registrarse</button>
      </form>
    </section>
  </main>

  <?php include("includes/footer.php"); ?>
</body>
</html>