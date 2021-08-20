<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap"
      rel="stylesheet"
    />
    <script src="https://kit.fontawesome.com/2c36e9b7b1.js"></script>
    <link rel="stylesheet" href="../../resource/css/main.css" />
    <link rel="stylesheet" href="buy.css" />
    <title><?php echo basename(__FILE__); ?></title>
  </head>
  <body>
    <div class="container">
      <div class="content">
        <!-- navegation -->
        <?php
          include '../navegation/navegation.php';
        ?>
        <!-- navegation -->

        <!-- start content -->
        <div class="contenedor">
          <header>
            <div class="logo">
              <h1>Productos en Ventas *w*</h1>
              <p>S T A R S -- P R O D U C T</p>
            </div>
            <form action="">
              <input
                type="text"
                class="barra-busqueda"
                id="barra-busqueda"
                placeholder="Buscar"
              />
            </form>
            <div class="categorias" id="categorias">
              <a href="#" class="activo">Todos</a>
              <a href="#">Combo_$25</a>
              <a href="#">Combo_$20</a>
              <a href="#">Combo_$10</a>
              <a href="#">Combo_$5</a>
            </div>
          </header>

          <section class="grid" id="grid">
            <div
              class="item"
              data-categoria="combo_$25"
              data-etiquetas="combo_$25"
              data-descripcion=" * WhatsApp Gratis por 30 días<br>
						 * Escucha Spotify sin consumir tus megas<br>
						 * Acumula los Gigas que no usas<br>
						 * Llamadas ilimitadas a todas las operadoras<br>
						 * 50 minutos multidestino<br>
						 * 50 SMS<br>
						 "
            >
              <div class="item-contenido">
                <img src="imaMetodos/25.png" alt="" />
              </div>
            </div>

            <div
              class="item"
              data-categoria="combo_$20"
              data-etiquetas="combo_$20"
              data-descripcion="* WhatsApp Gratis por 30 días<br>
						 * Escucha Spotify sin consumir tus megas<br>
						 * Acumula los Gigas que no usas<br>
						 * Llamadas ilimitadas entre tuentis<br>
						 * 400 minutos a todas las operadoras<br>
						 * 50 SMS<br>
						 "
            >
              <div class="item-contenido">
                <img src="imaMetodos/20.PNG" alt="" />
              </div>
            </div>

            <div
              class="item"
              data-categoria="combo_$10"
              data-etiquetas="combo_$10"
              data-descripcion="* WhatsApp Gratis por 30 días<br>
						 * Escucha Spotify sin consumir tus megas<br>
						 * Acumula los Gigas que no usas<br>
						 * Llamadas ilimitadas entre tuentis<br>
						 * 100 minutos a todas las operadoras<br>
						 * 50 SMS<br>"
            >
              <div class="item-contenido">
                <img src="imaMetodos/10.PNG" alt="" />
              </div>
            </div>

            <div
              class="item"
              data-categoria="combo_$5"
              data-etiquetas="combo_$5"
              data-descripcion="* 2 gigas <br>
					* WhatsApp Gratis por 30 días<br>
					* Escucha Spotify sin consumir tus megas<br>
					* Acumula los Gigas que no usas<br>
					* Llamadas ilimitadas entre tuentis<br>
					* 30 minutos a todas las operadoras<br>
					* 50 SMS<br>
					"
            >
              <div class="item-contenido">
                <img src="imaMetodos/5.PNG" alt="" />
              </div>
            </div>
          </section>

          <section class="overlay" id="overlay">
            <div class="contenedor-img">
              <button id="btn-cerrar-popup"><i class="fas fa-times"></i></button>
              <img src="" alt="" />
            </div>
            <p class="descripcion" style="text-align: justify"></p>
          </section>
        </div>
        <!-- finish content -->

      </div>
      <!-- footer -->
      <?php
        include '../footer/footer.php';
      ?>
      <!-- footer -->
    </div>

    <script src="https://unpkg.com/web-animations-js@2.3.2/web-animations.min.js"></script>
    <script src="https://unpkg.com/muuri@0.8.0/dist/muuri.min.js"></script>
    <script src="buy.js"></script>
  </body>
</html>
