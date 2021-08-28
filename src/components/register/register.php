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
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="../../resource/css/main.css" />
  <link rel="stylesheet" href="register.css" />
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
        <main>
          <div class="register">
            <div class="caja__trasera">
              <div class="caja__trasera-register">
                <h3>¿Ya tienes cuenta?</h3>
                <p>Inicia sesión para que puedas entrar a la página</p>
                <button id="btn__iniciar-sesion">Iniciar sesión</button>
              </div>
            </div>
            <div class="contenedor__login-register">
              <form
                action="create.php"
                method="POST"
                class="formulario__register"
              >
              <h2>Registrarse</h2>
              <div class="sms_llene_campos" id="sms_llene_campos">
                <p>Llena todos los campos.</p>
              </div>
              <div class="sms_inicie_session" id="sms_inicie_session">
                <p>Usuario encontrado. Inicia sesión, por favor!</p>
              </div>
              <div class="sms_cuenta_banco" id="sms_cuenta_banco">
                <p>Cuenta bancaria existente, por favor!</p>
              </div>
              <input 
                type="number" 
                name="rol_fk" 
                id="rol_fk" 
                value="2" 
                style="visibility: hidden;"
                >
              <input
                type="text"
                placeholder="Nombres Completos"
                name="nombres"
                autocomplete="on"
                >
              <input
                type="text"
                placeholder="Apellidos Completos"
                name="apellidos"
                autocomplete="on"
              >
              <input
                type="email"
                placeholder="Correo"
                name="email"
                autocomplete="on"
              >
              <input 
                type="password" 
                placeholder="Contraseña" 
                name="clave"
                autocomplete="on"
              >
              <input 
                type="text" 
                placeholder="Dirección" 
                name="direccion" 
                autocomplete="on"
              >
              <input 
                type="number" 
                placeholder="número de teléfono" 
                name="numero_telefono" 
                autocomplete="on"
              >
              <input 
                type="number" 
                placeholder="número de identificación" 
                name="numero_identificacion" 
                autocomplete="on"
              >
              <label 
              class="label_checkbox"
              ><input
                class="input_checkbox" 
                type="checkbox" 
                id="cbox_cuenta_banco" 
                value="true"
              >¿Agregar una cuenta bancaria?
              </label><br>
              <div id="content_cuenta_banco" class="content_cuenta_banco">
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
                    <?php 
                  }
                  ?>
                <!--  -->
              </select>
              <input 
              type="number" 
              placeholder="número cuenta" 
              name="numero_cuenta" 
              autocomplete="on"
              >
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
              <!--  -->
            </select>
              </div>
              <button>Registrarse</button>
              </form>
            </div>
          </div>
        </main>
      </div>
      <!-- finish content -->
      
      <!-- footer -->
      <?php
        include '../footer/footer.php';
        ?>
      <!-- footer -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="register.js"></script>
</body>
</html>
