<style>
    /* nagiation */
.nav {
    height: auto;
    width: 100%;
    padding: 20px 0px 20px 0px;
    font-family: Dunkin;
    background-color: transparent;
  }
  .nav_left {
    height: auto;
    font-family: Dunkin;
  }
  .nav_left_opc {
    text-align: center;
    min-width: auto;
  }
  .logo_nav {
    width: 5rem;
    height: 5rem;
    border-radius: 50%;
  }
  .nav_right {
    padding: 1rem;
    height: auto;
    font-family: Dunkin;
  }
  .btns_register {
    line-height: 2.9rem;
    text-align: center;
  }
  .btn {
    background-color:transparent;
    font-family: Dunkin;
    font-size: 1.2rem;
    color: white;
    cursor: pointer;
  }
  @media screen and (min-width: 640px) {
    .nav {
      display: grid;
      grid-template-columns: repeat(2, 0.5fr);
    }
    .nav_right {
      display: flex;
      justify-content: flex-end;
    }
  }
  /*---------------------------------------------------*/
  /* OPCIONES DESPLEGABLES */
  /*---------------------------------------------------*/
  .opc_1 {
    padding: 0.5rem;
  }
  .opc_1 label {
    padding: 0.5rem;
    color: red;
  }
  #menu {
    display: flex;
    color: white;
    width: 100%;
  }
  /*---------------------------------------------------*/
  .interior{display: none;color: #A7AAFF;}
  input.checked ~ ul {display: block;}
  #menu * {list-style:none;}
  #menu li{ line-height:180%;width:100%;font-size: 1.2rem;}
  #menu li a{color:#222; text-decoration:none;}
  #menu li a:before{ content:"\025b8"; margin-right:4px;}
  #menu input[name="list"] {position: absolute;left: -1000em;}
  #menu label:before{ content:"\025b8"; margin-right:4px;}
  #menu input:checked ~ label:before{ content:"\025be";}
  #menu .interior{display: none;}
  #menu input:checked ~ ul{display:block;}
  /*---------------------------------------------------*/
  /* OPCIONES DESPLEGABLES */
  /*---------------------------------------------------*/

</style>

<!-- navegation -->
<header>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<div class="loader-page"></div>
  <nav class="nav">
    <div class="nav_left">
      <div class="nav_left_opc">
        <img
        class="logo_nav"
        src="../../resource/img/logo.png"
        alt="logo de la empresa"
        />
      </div>
    </div>
    <div class="nav_right">
      <ul id="menu">
        <li><button id="btn_dashboard"  class="btn">
                dashboard
              </button>
        </li>
        <li><input type="checkbox" name="list" id="nivel1-1" checked=""><label for="nivel1-1">Productos</label>
          <ul class="interior">
            <li><button id="ver_productos_baratos" class="btn">más baratos</button></li>
            <li><button id="ver_productos" class="btn">ver todo</button></li>
          </ul>
        </li>
        <li><input type="checkbox" name="list" id="nivel1-3"><label for="nivel1-3">crear datos</label>
          <ul class="interior">
            <li><button id="btn_crear_roles" class="btn">
                crear roles
              </button>
            </li>
            <li><button id="btn_crear_productos" class="btn">
                crear productos
              </button>
            </li>
          </ul>
        </li>
        <li><input type="checkbox" name="list" id="nivel1-2"><label for="nivel1-2">Usuario</label>
          <ul class="interior">
            <li><button id="btn_register" class="btn">
                Register
              </button>
            </li>
            <li><button id="btn_login" class="btn">
                Login
              </button>
            </li>
            <li><button id="btn_logout" class="btn">
                Logout
            </li>
          </ul>
        </li>
      </ul>
    </div>
  </nav>
</header>
<script src="../navegation/script_navegation.js"></script>
<!-- navegation -->
