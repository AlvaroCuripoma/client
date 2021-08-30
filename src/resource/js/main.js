window.onload = function () {
  $(".loader-page").css({ visibility: "hidden", opacity: "0" });
};

const registrarse = document.getElementById("registrarse");
const login = document.getElementById("login");
if (registrarse) {
  registrarse.addEventListener("click", () => {
    localStorage.removeItem("id_usuario");
    localStorage.removeItem("carrito_compra");
  });
}
if (login) {
  login.addEventListener("click", () => {
    localStorage.removeItem("id_usuario");
    localStorage.removeItem("carrito_compra");
  });
}
