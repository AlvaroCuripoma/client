<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resource/css/main.css" />
  <link rel="stylesheet" href="login.css" />
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
    <main>
      <!------------------------------------------------------------------------>
      <div class="caja__trasera">
        <div class="caja__trasera-register">
          <h3>¿Aún no tienes cuenta?</h3>
          <p>Registrate para que puedas Iniciar Sesión</p>
          <button id="btn__registrarse">Registrarse</button>
        </div>
      </div>
      <!-------------------------------------------------------------------------->
      <div class="contenedor__login-register">
        <form
        action="verificar.php"
        method="POST"
        class="formulario__login"
        >
        <h2>Iniciar Sesión</h2>
        <div class="msm_llenar_campso" id="cont_msm_llenar_campso">
          <p>Llena todos los campos...</p>
        </div>
        <div class="msm_no_usuario" id="cont_msm_no_usuario">
          <p>Usuario no encontrado. Registrarse, por favor!...</p>
        </div>
          <i class="fas fa-user icon">
            <input 
            type="text"
             placeholder="Correo Electronico" 
            name="correo" 
            autocomplete="on"
          /></i>

          <i class="fas fa-key icon">
            <input 
            type="password" 
            placeholder="Contraseña" 
            name="pass"
            autocomplete="on"
          /></i>

          <div align="center"></div>

          <button>Entrar</button>
        </form>
        <!------------------------------------------------------------------------>
      </div>
    </main>
    <!-- finish content -->
    <!------------------------------------------------------------------------>

  </div>
  <!-- footer -->
  <?php
      include '../footer/footer.php';
    ?>
  <!-- footer -->
  </div>
  <!-------------------------------------------------------------------------------->
  <script src="login.js"></script>
  <!-------------------------------------------------------------------------------->
</body>
</html>
