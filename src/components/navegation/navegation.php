<?php
  ini_set('display_errors', '1');
  include '../../../environment/environment_api.php';
  if (isset($_SESSION['id_user'])) {
    $result = CurlHelper::perform_http_request(
      'GET',
      $base . "/clientes/show/". $_SESSION['id_user'],
    );
    $result = json_decode($result, true);
  }
?>

<!-- navegation -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <!-- <div class="loader-page"></div> -->
  <nav class="navegation nav">
    <img
    class="logo_nav"
    src="../../resource/img/logo.jpg"
    alt="logo de la empresa"
    />
    <ul class="nav justify-content-end">
      <li class="nav-item"><a id="btn_carrito" class="btn">Carrito</a></li>
      <li class="nav-item"><a id="btn_dashboard" class="btn">dashboard</a></li>
      <li class="nav-item"><a id="ver_comprar_productos" class="btn">Comprar</a></li>
    
      <?php if (isset($_SESSION['id_user']) && $result['rol_fk'] == '1') {?>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Crear datos</a>
        <ul class="dropdown-menu">
          <li><button class="btn btn-light" id="btn_crear_roles">roles</button></li>
          <li><button class="btn btn-light" id="btn_crear_tipo_cuenta_bancaria">tipo cuenta bancaria</button></li>
          <li><button class="btn btn-light" id="btn_crear_tipo_producto">tipo produto</button></li>
          <li><button class="btn btn-light"id="btn_crear_productos">productos</button></li>
        </ul>
      </li>
      <?php }?>

      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">
          <?php if (empty($_SESSION['id_user']) && isset($_SESSION['id_user'])) {echo $result['nombres'];}else {echo 'usuario';}
          ?>
        </a>
        <ul class="dropdown-menu">
        <?php if (!isset($_SESSION['id_user'])) {?>
          <li><button class="btn btn-light" id="btn_register">Register</button></li>
          <li><button class="btn btn-light" id="btn_login">Login</button></li>
        <?php }else {?>
          <li><button  class="btn btn-light" id="btn_logout">Logout</button></li>
        <?php }?>
        </ul>
      </li>
    </ul>
  </nav>

<script src="../navegation/navegation.js"></script>
<!-- navegation -->
