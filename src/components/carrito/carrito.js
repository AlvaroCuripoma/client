//=============================================================//
// CARRITO DE COMPRAS
//=============================================================//
const base = "http://127.0.0.1:8000/api";
//=============================================================//

// traemos id del usuario logeado
var id_usuario = JSON.parse(localStorage.getItem("id_usuario"));

// traemos el carrito de compra
var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));

// traemos id de producto elegido
var id_prodc_elegido = JSON.parse(localStorage.getItem("id_prodc_elegido"));
if (id_prodc_elegido != null) {
  fetch(`${base}/productos/show/${id_prodc_elegido}`)
    .then((producto) => producto.json())
    .then((producto) => {
      localStorage.removeItem("id_prodc_elegido");
      var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
      if (carrito_compra == null) {
        var carrito_compra = [
          { usuario: JSON.parse(localStorage.getItem("id_usuario")) },
          [producto],
        ];
        localStorage.setItem("carrito_compra", JSON.stringify(carrito_compra));
      }

      // carrito de compra
      var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
      carrito_compra[1].push(producto);
      localStorage.setItem("carrito_compra", JSON.stringify(carrito_compra));
      localStorage.removeItem("producto_elegido");
    });
}
//=============================================================//

//=============================================================//
window.addEventListener("load", () => {
  var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
  var carrito = Array.from(carrito_compra[1]);
  if (carrito) {
    //=============================================================//
    // IMPRIMIMOS DATOS EN EL CARRITO

    $.each(carrito, (i, item) => {
      var fila = document.createElement("tr");

      var columna_1 = document.createElement("th");
      columna_1.className = "body_iteam";
      columna_1.scope = "row";
      columna_1.appendChild(document.createTextNode(item.id));
      var columna_2 = document.createElement("th");
      columna_2.className = "body_iteam";
      columna_2.appendChild(document.createTextNode(item.tipo_producto_fk));
      var columna_3 = document.createElement("th");
      columna_3.className = "body_iteam";
      columna_3.appendChild(document.createTextNode(item.nombre));
      var columna_4 = document.createElement("th");
      columna_4.className = "body_iteam";
      columna_4.appendChild(document.createTextNode(item.precio));
      var columna_5 = document.createElement("th");
      columna_5.className = "body_iteam";
      columna_5.appendChild(document.createTextNode(item.cantidad));
      var columna_6 = document.createElement("th");
      columna_6.className = "body_iteam";
      columna_6.appendChild(document.createTextNode(item.descripcion));

      var fila_btns = document.createElement("tr");
      fila_btns.className = "body_iteam";
      var btn_subtract = document.createElement("button");
      btn_subtract.className = "btn btn-light";
      btn_subtract.id = "opc_subtract";
      btn_subtract.onclick = `see(${item.id})`;
      btn_subtract.innerHTML = "restar";
      var btn_add = document.createElement("button");
      btn_add.className = "btn btn-light";
      btn_add.id = "opc_add";
      btn_add.onclick = `see(${item.id})`;
      btn_add.innerHTML = "sumar";
      var btn_delete = document.createElement("button");
      btn_delete.className = "btn btn-light";
      btn_delete.id = "opc_delete";
      btn_delete.onclick = `see(${item.id})`;
      btn_delete.innerHTML = "borrar";
      fila_btns.appendChild(btn_subtract);
      fila_btns.appendChild(btn_add);
      fila_btns.appendChild(btn_delete);

      fila.appendChild(columna_1);
      fila.appendChild(columna_2);
      fila.appendChild(columna_3);
      fila.appendChild(columna_4);
      fila.appendChild(columna_5);
      fila.appendChild(columna_6);
      fila.appendChild(fila_btns);
      document
        .getElementById("fila")
        .insertAdjacentElement("afterbegin", fila); //beforeend
    });
  }
});

//=============================================================//
// para muestrar las ventanitas
//=============================================================//
const btn_comprar = document.getElementById("btn_comprar");

// ------------- start open view -------------
btn_comprar.addEventListener("click", function () {
  window.location.replace("../compra/compra.php");
});
// ------------- finish open view -------------
