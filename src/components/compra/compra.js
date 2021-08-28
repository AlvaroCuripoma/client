const grid = new Muuri(".grid", {
  layout: {
    rounding: false,
  },
});

var id_prodc_elegido = null;
var iduser = null;
window.addEventListener("load", () => {
  grid.refreshItems().layout();
  document.getElementById("grid").classList.add("imagenes-cargadas");

  // Agregamos los listener de los enlaces para filtrar por categoria.
  const enlaces = document.querySelectorAll("#categorias a");
  enlaces.forEach((elemento) => {
    elemento.addEventListener("click", (evento) => {
      evento.preventDefault();
      enlaces.forEach((enlace) => enlace.classList.remove("activo"));
      evento.target.classList.add("activo");

      const categoria = evento.target.innerHTML.toLowerCase();
      categoria === "todos"
        ? grid.filter("[data-categoria]")
        : grid.filter(`[data-categoria="${categoria}"]`);
    });
  });

  // Agregamos el listener para la barra de busqueda
  document
    .querySelector("#barra-busqueda")
    .addEventListener("input", (evento) => {
      const busqueda = evento.target.value;
      grid.filter((item) =>
        item.getElement().dataset.etiquetas.includes(busqueda)
      );
    });

  // Agregamos listener para las imagenes
  const overlay = document.getElementById("overlay");
  document.querySelectorAll(".grid .item img").forEach((elemento) => {
    elemento.addEventListener("click", () => {
      const ruta = elemento.getAttribute("src");
      const descripcion = elemento.parentNode.parentNode.dataset.descripcion;

      overlay.classList.add("activo");
      document.querySelector("#overlay img").src = ruta;
      document.querySelector("#overlay .descripcion").innerHTML = descripcion;
      id_prodc_elegido = elemento.parentNode.parentNode.dataset.idproducto;
      iduser = elemento.parentNode.parentNode.dataset.iduser;
    });
  });
  // Eventlistener del boton de cerrar
  document.querySelector("#btn-cerrar-popup").addEventListener("click", () => {
    overlay.classList.remove("activo");
  });
  // Eventlistener del overlay
  overlay.addEventListener("click", (evento) => {
    evento.target.id === "overlay" ? overlay.classList.remove("activo") : "";
  });
});

// Eventlistener btn comparar
function comprar() {
  localStorage.setItem("id_usuario", JSON.stringify(iduser));
  localStorage.setItem("id_prodc_elegido", JSON.stringify(id_prodc_elegido));
  window.location.replace("../carrito/carrito.php");
}
//Boton carrito//
var button_up = document.getElementById("button-up");
button_up.addEventListener("click" , function(){
  
  var currentScroll = document.documentElement.scrollTop || document.body.scrollTop;
  if (currentScroll > 0){
      window.scrollTo (0, 0);
  }
  console.log("Hello")
  window.location.replace("../carrito/carrito.php");
});