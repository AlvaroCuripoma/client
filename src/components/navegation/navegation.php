<?php
  ini_set('display_errors', '1');
  include '../../../environment/environment_api.php';
  $result = null;
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
  <nav class="nav">
    <a href="../dashboard/dashboard.php">
      <img
      class="logo_nav"
      src="../../resource/img/logo.jpg"
      alt="logo de la empresa"
      />
    </a>
    <ul class="nav justify-content-end">
      <li><a id="btn_carrito" class="my_a">Carrito</a></li>
      <li><a id="btn_dashboard" class="my_a">Dashboard</a></li>
      <li><a id="ver_comprar_productos" class="my_a">Comprar</a></li>
    
      <?php if ($result && !empty($_SESSION) && isset($_SESSION['id_user']) && $result['rol_fk'] == '1') { ?>
      <li class=" dropdown">
        <a class="dropdown-toggle my_a" data-bs-toggle="dropdown">Crear datos</a>
        <ul class="dropdown-menu">
          <li><a class="my_a" id="btn_crear_roles">Roles</a></li>
          <li><a class="my_a" id="btn_crear_tipo_cuenta_bancaria">Tipo cuenta bancaria</a></li>
          <li><a class="my_a" id="btn_crear_tipo_producto">Tipo produto</a></li>
          <li><a class="my_a"id="btn_crear_productos">Productos</a></li>
        </ul>
      </li>
      <?php } ?>

      <li class=" dropdown">
        <a class="dropdown-toggle my_a" data-bs-toggle="dropdown" >
          <?php 
            if ($result && !empty($_SESSION) && isset($_SESSION['id_user'])) {echo $result['nombres'];}else {echo 'usuario';}
          ?>
        </a>
        <ul class="dropdown-menu">
        <?php if (!isset($_SESSION['id_user'])) {?>
          <li><a class="my_a" id="btn_register">Register</a></li>
          <li><a class="my_a" id="btn_login">Login</a></li>
        <?php }else {?>
          <li><a  class="my_a" id="btn_logout">Logout</a></li>
        <?php }?>
        </ul>
      </li>
    </ul>
  </nav>

<script src="../navegation/navegation.js"></script>
<!-- navegation -->
