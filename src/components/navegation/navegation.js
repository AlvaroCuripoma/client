//_____________ INICIO LINKS _____________
const btn_dashboard = document.getElementById("btn_dashboard");
const btn_register = document.getElementById("btn_register");
const btn_carrito = document.getElementById("btn_carrito");
const btn_login = document.getElementById("btn_login");
const btn_logout = document.getElementById("btn_logout");
const ver_comprar_productos = document.getElementById("ver_comprar_productos");
const btn_crear_roles = document.getElementById("btn_crear_roles");
const btn_crear_tipo_producto = document.getElementById(
  "btn_crear_tipo_producto"
);
const btn_crear_tipo_cuenta_bancaria = document.getElementById(
  "btn_crear_tipo_cuenta_bancaria"
);

const btn_crear_productos = document.getElementById("btn_crear_productos");

btn_dashboard.addEventListener("click", function () {
  window.location.replace("../dashboard/dashboard.php");
});
if (btn_register && btn_login) {
  btn_register.addEventListener("click", function () {
    window.location.replace("../register/register.php");
  });
  btn_login.addEventListener("click", function () {
    window.location.replace("../login/login.php");
  });
}
btn_carrito.addEventListener("click", function () {
  window.location.replace("../carrito/carrito.php");
});
if (btn_logout) {
  btn_logout.addEventListener("click", function () {
    localStorage.removeItem("id_usuario");
    localStorage.removeItem("carrito_compra");
    window.location.replace("../navegation/logout.php");
  });
}
ver_comprar_productos.addEventListener("click", function () {
  window.location.replace("../compra/compra.php");
});
if (
  btn_crear_roles &&
  btn_crear_productos &&
  btn_crear_tipo_producto &&
  btn_crear_tipo_cuenta_bancaria
) {
  btn_crear_roles.addEventListener("click", function () {
    window.location.replace("../roles/roles.php");
  });
  btn_crear_productos.addEventListener("click", function () {
    window.location.replace("../productos/productos.php");
  });
  btn_crear_tipo_producto.addEventListener("click", function () {
    window.location.replace("../tipo_producto/tipo_producto.php");
  });
  btn_crear_tipo_cuenta_bancaria.addEventListener("click", function () {
    window.location.replace("../tipo_cuenta_bancaria/tipo_cuenta_bancaria.php");
  });
}
//_____________ FIN LINKS _____________
