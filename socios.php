<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Conviertete en Socio | Black Angus House</title>
  <link rel="icon" href="images/favicon.png"/>
  <link rel="stylesheet" href="styles/global.css" />
  <link rel="stylesheet" href="styles/socios_style.css">
</head>

<body>
  <?php include("includes/header.php"); ?>

  <main>
    <section id ="discounts">
      <div>
        <h2> Descuentos exclusivos </h2>
        <p> El programa de socios recompensa a los clientes leales con descuentos especiales y beneficios únicos.</p>
        <button><a href="login.php">Unirme</a></button>
      </div>

      <div>
        <p> Como funciona: Puntos por comer </p>
        <p> El programa de socios esta diseñado para recompensarte con cada compra realizada </p>
        <p> Por cada S/5 soles de compra completada, obten 5 puntos </p>
        <p> Si realizas una reserva y la confirmas, obtienes 10 puntos adicionales </p>
        <p> Puedes acumular puntos para luego canjearlos por descuentos o combos gratis en tus futuras visitas. </p>

        <button><a href="login.php">Unirme</a></button>
        <button><a href="socios-faq.php">Preguntas frecuentes</a></button>
      </div>
    </section> 

      <div id="rewards">
        <p> Date un gustito </p>
        <p> Canjea tus puntos por descuentos exclusivos en nuestros platos más deliciosos. </p>
        <table>
          <tr>
            <th>Puntos acumulados</th>
            <th>Descuento</th>
          </tr>
          <tr>
            <td>100 puntos</td>
            <td>Bebida 1L gratis a eleccion</td>
          </tr>
          <tr>
            <td>200 puntos</td>
            <td>S/ 20 de descuento en tu próxima comida</td>
          </tr>
          <tr>
            <td>500 puntos</td>
            <td>Combo gratis (entrada + plato principal)</td>
          </tr>
          <tr>
            <td>1000 puntos</td>
            <td>Parrilla gratis para 2 personas</td>
          </tr>
          <tr>
            <td>2000 puntos</td>
            <td>Parrilla gratis familiar</td>
          </tr>
        </table>
        <p> Puedes ver los puntos acumulados en tu perfil Black Angus </p>
      </div>

      <div id="benefits">
        <p> Eso no es todo </p>
        <p> Además de los descuentos, nuestros socios disfrutan de beneficios unicos </p>
        <p> Bono cumpleañero: Hacer compras el dia de tu cumpleaños duplica los puntos ganados por compras realizadas durante todo el dia </p>
        <p> Regalo familiar: Por cada 4 personas que invites a comer, disfruta de un postre gratuito a eleccion </p>
        <p> Sorpresas por email: Recibe ofertas exclusivas y promociones especiales directamente en tu bandeja de entrada todos los meses </p>
        <button><a href="login.php">Unirme</a></button>
      </div> 

  <?php include("includes/footer.php"); ?>
</body>
</html>