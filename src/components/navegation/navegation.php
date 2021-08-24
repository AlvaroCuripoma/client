<style>
    /* nagiation */
  .navegation {
    background-color: #2874A6;
    display: flex;
    justify-content: space-between;
  }
  .logo_nav {
    width: 80px;
    height: 80px;
  }
  .nav {
    color: white;
  }
  .nav * {
    color: white;
  }
  .nav li *{
    font-family: Dunkin;
    background-color: #2874A6;
  }
  .nav li *:hover{
    color: white;
  }
  .nav li *:focus{
    color: white;
  }
  .nav li ul li *:hover{
    color: black;
  }
  .btn{ 
    padding-top: 25px;
  }
</style>

<!-- navegation -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
  <div class="loader-page"></div>
  <nav class="navegation">
    <img
    class="logo_nav"
    src="../../resource/img/logo.jpg"
    alt="logo de la empresa"
    />
    <ul class="nav nav-pills">
      <li class="nav-item"><a id="btn_dashboard" class="btn fs-5">dashboard</a></li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Productos</a>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item fs-5" id="ver_productos_baratos">más baratos</button></li>
          <li><button id="ver_productos" class="dropdown-item fs-5">ver todo</button></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Crear datos</a>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item fs-5" id="btn_crear_roles">crear roles</button></li>
          <li><button class="dropdown-item fs-5"id="btn_crear_productos">crear productos</button></li>
        </ul>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle btn fs-5" data-bs-toggle="dropdown" href="#" role="button" aria-expanded="false">Usuario</a>
        <ul class="dropdown-menu">
          <li><button class="dropdown-item fs-5" id="btn_register">Register</button></li>
          <li><button class="dropdown-item fs-5" id="btn_login">Login</button></li>
          <li><button  class="dropdown-item fs-5" id="btn_logout">Logout</button></li>
        </ul>
      </li>
    </ul>
  </nav>

<script src="../navegation/navegation.js"></script>
<!-- navegation -->
