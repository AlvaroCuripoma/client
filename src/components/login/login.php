<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="../../resource/css/main.css" />
  <link rel="icon" href="../../resource/img/logo.jpg" type="image/x-icon">
  <link rel="stylesheet" href="login.css" />
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
            id="login_form"
            >
              <h2>Iniciar Sesión</h2>
              <div class="msm_llenar_campso" id="cont_msm_llenar_campso">
                <p>Llena todos los campos...</p>
              </div>
              <div class="msm_no_usuario" id="cont_msm_no_usuario">
                <p>Usuario no encontrado. Registrarse, por favor!...</p>
              </div>
                <input 
                type="text"
                placeholder="Correo Electronico" 
                name="correo" 
                id="correo" 
                autocomplete="on"
              />
                <input 
                type="password" 
                placeholder="Contraseña" 
                name="pass"
                id="pass"
                autocomplete="on"
              />

              <button>Entrar</button>
            </form>
            <!------------------------------------------------------------------------>
          </div>
        </main>
      </div>
      <!-- finish content -->
      <!------------------------------------------------------------------------>

      <!-- footer -->
      <?php
          include '../footer/footer.php';
        ?>
      <!-- footer -->
    </div>
  </div>
  <!-------------------------------------------------------------------------------->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
  <script src="login.js"></script>
  <!-------------------------------------------------------------------------------->
</body>
</html>
