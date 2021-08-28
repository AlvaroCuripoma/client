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
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resource/css/main.css" />
    
    <link rel="stylesheet" href="carrito.css" />
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
        <div class="content_general">
          <div class="container_titulo">
            <h1>CARRITO</h1>
            <p>C O M P R A S</p>
          </div>

          <div class="container_comprar" id="btn_comprar">
            <button class="btn_anadir_mas">añadir más</button>
          </div>
          <div class="container">
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">número</th>
                  <th scope="col">tipo</th>
                  <th scope="col">nombre</th>
                  <th scope="col">precio</th>
                  <th scope="col">cantidad</th>
                  <th scope="col">descripción</th>
                  <th scope="col">operaciones</th>
                </tr>
              </thead>
              <tbody id="fila">
              </tbody>
            </table>
            <div class="container">
              <button type="button" class="my_btn" id="hacer_factura" type="button">Hacer factura</button>
            </div>
            <div class="elegir_productos" id="elegir_productos">
              <button type="button" class="my_btn" id="btn_elegir_producto">Elegir producto</button>
            </div>
          </div>
        </div>
        <!-- finish content -->
        
        <!-- footer -->
        <?php
        include '../../components/footer/footer.php';
        ?>
        <!-- footer -->
      </div>
    </div>
    <script src="carrito.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
      
  </body>
</html>
<!-- boton de ir haci arriva-->
