<?php
session_start();
include '../../../environment/environment_api_connection.php';
include '../../../environment/environment_api.php';
if (isset($_SESSION['id_user'])) {
  $usuario = CurlHelper::perform_http_request(
    'GET',
    $base . "/clientes/show/". $_SESSION['id_user'],
  );
  $usuario = json_decode($usuario, true);
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
    <div class="loader-page"></div>
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

          <?php if ($_SESSION) { ?>

            <div class="container_comprar" id="btn_comprar">
              <button class="btn_anadir_mas">Añadir más</button>
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
            </div>
          
            <div class="elegir_productos" id="elegir_productos">
              <button type="button" class="my_btn" id="btn_elegir_producto">Elegir producto</button>
            </div>
            <?php if (!isset($usuario['cuenta_bancaria_fk'])) { ?>
              <div class="container">
                <div class="pedir_cuenta_bancaria">
                  <p>! Registra una cuenta bancaria para poder comprar.</p>
                  <h3>Registrar cuenta bancaria</h3>
                </div>
                <form action="agregar_cuenta_bancaria.php" method="post" class="form_pedir_cuenta_bancaria">
                  <label for="tipo_cuenta_bancaria_fk">tipo cuenta bancaria</label>
                  <select 
                  type="number" 
                  placeholder="tipo cuenta bancaria" 
                  name="tipo_cuenta_bancaria_fk" 
                  class="opcines_tipo_cuenta"
                  autocomplete="on"
                  >
                    <!--  -->
                    <?php
                      include '../../../environment/environment_api.php';
                      $url = $base . "/tipos_cuentas_bancarias";
                      $tipos_cuentas = CurlHelper::perform_http_request(
                        'GET', 
                        $url
                      );
                      $tipos_cuentas = json_decode($tipos_cuentas, true);
                      foreach ($tipos_cuentas as $tipo_cuenta) {
                    ?>
                        <option class="opc_tipo_cuenta"><?php echo $tipo_cuenta['nombre'] ?></option>
                    <?php } ?>
                    <!--  -->
                  </select>

                  <label for="nombre_banco">banco</label>
                  <select 
                  type="number" 
                  placeholder="tipo cuenta bancaria" 
                  name="nombre_banco" 
                  class="opcines_tipo_cuenta"
                  autocomplete="on"
                  >
                      <option class="opc_tipo_cuenta">Pichincha</option>
                      <option class="opc_tipo_cuenta">Produbanco</option>
                      <option class="opc_tipo_cuenta">Banco de Guayaquil</option>
                      <option class="opc_tipo_cuenta">Banco del Pacífico</option>
                      
                  </select>
                  <label for="numero_cuenta">número de cuenta</label>
                  <input type="number" name="numero_cuenta" id="numero_cuenta">
                  <input type="submit" value="Crear" class="my_btn">
                </form>
              </div>
              <?php }  
              if (isset($usuario['cuenta_bancaria_fk'])) { ?>
              <div class="container_btn_factura">
                <button type="button" class="my_btn" id="hacer_factura" type="button">Hacer factura</button>
              </div>
              <?php } ?>
            <?php } else {?>
              <div class="sms_debes_iniciar_session">
                <p>Primero debes <a href="../login/login.php">iniciar sesión</a>.</p>
              </div>
            <?php } ?>
          </div>
        <!-- finish content -->
        
        <!-- footer -->
        <?php
        include '../../components/footer/footer.php';
        ?>
        <!-- footer -->
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="carrito.js"></script>
    <script src="../../resource/js/main.js"></script>
  </body>
</html>
<!-- boton de ir haci arriva-->
