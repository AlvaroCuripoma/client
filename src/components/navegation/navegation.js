//_____________ INICIO LINKS _____________
const btn_dashboard = document.getElementById("btn_dashboard");
const btn_register = document.getElementById("btn_register");
const btn_carrito = document.getElementById("btn_carrito");
const btn_login = document.getElementById("btn_login");
const btn_logout = document.getElementById("btn_logout");
const ver_productos = document.getElementById("ver_productos");
const btn_crear_roles = document.getElementById("btn_crear_roles");

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
  window.location.replace("../carrito/index.php");
});
if (btn_logout) {
  btn_logout.addEventListener("click", function () {
    localStorage.removeItem("data");
    window.location.replace("../navegation/logout.php");
  });
}
ver_productos.addEventListener("click", function () {
  window.location.replace("../buy/buy.php");
});
if (btn_crear_roles && btn_crear_productos) {
  btn_crear_roles.addEventListener("click", function () {
    window.location.replace("../roles/roles.php");
  });
  btn_crear_productos.addEventListener("click", function () {
    window.location.replace("../products/products.php");
  });
}
//_____________ FIN LINKS _____________

window.onload = function () {
  $(".loader-page").css({ visibility: "hidden", opacity: "0" });
};
