//=============================================================//

function subtract(id) {
  console.log(id);
  var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
  $.each(Array.from(carrito_compra[1]), (i, item) => {
    if (item.id == id) {
      if (item.cantidad > 1) {
        item.cantidad -= 1;
        localStorage.setItem("carrito_compra", JSON.stringify(carrito_compra));
      }
    }
  });
  window.location.reload(true);
}
function add(id) {
  console.log(id);
  console.log(id);
  var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
  $.each(Array.from(carrito_compra[1]), (i, item) => {
    if (item.id == id) {
      item.cantidad += 1;
      localStorage.setItem("carrito_compra", JSON.stringify(carrito_compra));
    }
  });
  window.location.reload(true);
}
function clearUp(id) {
  console.log(id);
  var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
  $.each(Array.from(carrito_compra[1]), (i, item) => {
    if (item.id == id) {
      carrito_compra[1].splice(i, 1);
      localStorage.setItem("carrito_compra", JSON.stringify(carrito_compra));
    }
  });
  window.location.reload(true);
}

//=============================================================//
const btn_comprar = document.getElementById("btn_comprar");
const btn_elegir_producto = document.getElementById("btn_elegir_producto");
btn_comprar.addEventListener("click", function () {
  window.location.replace("../compra/compra.php");
});
btn_elegir_producto.addEventListener("click", function () {
  window.location.replace("../compra/compra.php");
});

//=============================================================//
// HACER FACTURA
//=============================================================//
window.onload = function () {
  const carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
  const btn_comprar = document.getElementById("btn_comprar");
  const hacer_factura = document.getElementById("hacer_factura");
  const btn_elegir_producto = document.getElementById("btn_elegir_producto");
  if (carrito_compra[1].length === 0) {
    btn_comprar.style.visibility = "hidden";
    hacer_factura.style.visibility = "hidden";
    btn_elegir_producto.style.visibility = "visible";
  } else {
    btn_comprar.style.visibility = "visible";
    hacer_factura.style.visibility = "visible";
    btn_elegir_producto.style.visibility = "hidden";
    hacer_factura.addEventListener('click', () => {
      window.location.replace('../factura/factura.php');
    });
    //=============================================================//
    // IMPRIMIMOS DATOS EN EL CARRITO
    var carrito = Array.from(carrito_compra[1]);
    if (carrito.length != 0) {
      //=============================================================//
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
        fila_btns.id = "fila_btns";

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

        var btn_1 = `<button onclick='subtract(${item.id})' class='my_btn'>restar</button>`;
        var btn_2 = `<button onclick='add(${item.id})' class='my_btn'>sumar</button>`;
        var btn_3 = `<button onclick='clearUp(${item.id})' class='my_btn'>borrar</button>`;
        document.getElementById("fila_btns").innerHTML = btn_1 + btn_2 + btn_3;
      });
    }
    hacer_factura.addEventListener("click", () => {});
  }
};
