<?php
session_start();
include '../../../environment/environment_api_connection.php';
include '../../../environment/environment_api.php';
if (isset($_SESSION['id_user'])) {
  $result = CurlHelper::perform_http_request(
    'GET',
    $base . "/clientes/show/". $_SESSION['id_user'],
  );
  $result = json_decode($result, true);
}
?>

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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="icon" href="../../resource/img/logo.jpg" type="image/x-icon">
    <title><?php echo basename(__FILE__); ?></title>
  </head>
  <body>
    <div class="container_page">
      <div class="content_page">
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
                placeholder="Buscar por precio"
              />
            </form>
            <div class="categorias" id="categorias">
              <a href="#" class="activo">Todos</a>
              <a href="#">Combo_$25.00</a>
              <a href="#">Combo_$20.00</a>
              <a href="#">Combo_$10.00</a>
              <a href="#">Combo_$5.00</a>
            </div>
          </header>

          <section class="grid" id="grid">
            <?php
              include '../../../environment/environment_api.php';
              $action = "GET";
              $url = $base . "/productos";
              $result = CurlHelper::perform_http_request($action, $url, $parameters='');
              $result = json_decode($result, true);
              foreach ($result as $result_one) {
            ?>
            <div
              class="item"
              data-categoria="<?php echo 'combo_$'.$result_one['precio']?>"
              data-etiquetas="<?php echo $result_one['precio']?>"
              data-descripcion="
              <?php echo 'Nombre: '.$result_one['nombre'] ?> <br>
              <?php echo'Precio: '.$result_one['precio']?> <br>
              <?php echo'Cantidad: '.$result_one['cantidad']?> <br>
              <?php echo'Fecha_fabricacion: '.$result_one['fecha_fabricacion']?> <br>
              <?php echo'Fecha_vencimiento: '.$result_one['fecha_vencimiento']?> <br>
              <?php echo'Descripcion: '.$result_one['descripcion']?> <br>
              "
              >
              <div class="item-contenido">
                  <img src="imaMetodos/5.PNG" alt="" />
                  <div class="detalle_producto">
                    <p>Nombre: <?php echo $result_one['nombre']?></p>
                    <p>Precio: <?php echo $result_one['precio']?></p>
                  </div>
              </div>
            </div>
            <?php
              }
            ?>
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="buy.js"></script>
  </body>
</html>
