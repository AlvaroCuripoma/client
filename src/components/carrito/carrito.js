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
      producto.cantidad = 1;
      var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
      if (carrito_compra[1].length === 0) {
        var carrito_compra = [
          { usuario: JSON.parse(localStorage.getItem("id_usuario")) },
          [producto],
        ];
        localStorage.setItem("carrito_compra", JSON.stringify(carrito_compra));
      } else {
        var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
        var agregar = false;
        $.each(Array.from(carrito_compra[1]), (i, producto_carrito) => {
          console.log(parseInt(id_prodc_elegido));
          console.log(producto_carrito.id);
          if (parseInt(id_prodc_elegido) === producto_carrito.id) {
            agregar = false;
          } else {
            agregar = true;
          }
        });
        if (agregar) {
          // carrito de compra
          var carrito_compra = JSON.parse(
            localStorage.getItem("carrito_compra")
          );
          carrito_compra[1].push(producto);
          localStorage.setItem(
            "carrito_compra",
            JSON.stringify(carrito_compra)
          );
          localStorage.removeItem("producto_elegido");
        }
      }
    });
}
//=============================================================//

//=============================================================//
var carrito_compra = JSON.parse(localStorage.getItem("carrito_compra"));
if (carrito_compra != null) {
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
      fila_btns.id = "fila_btns";

      fila.appendChild(columna_1);
      fila.appendChild(columna_2);
      fila.appendChild(columna_3);
      fila.appendChild(columna_4);
      fila.appendChild(columna_5);
      fila.appendChild(columna_6);
      fila.appendChild(fila_btns);
      document.getElementById("fila").insertAdjacentElement("afterbegin", fila); //beforeend

      var btn_1 = `<button onclick='subtract(${item.id})' class='btn btn-light'>restar</button>`;
      var btn_2 = `<button onclick='add(${item.id})' class='btn btn-light'>sumar</button>`;
      var btn_3 = `<button onclick='clearUp(${item.id})' class='btn btn-light'>borrar</button>`;
      document.getElementById("fila_btns").innerHTML = btn_1 + btn_2 + btn_3;
    });
  }
}

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

// ------------- start open view -------------
btn_comprar.addEventListener("click", function () {
  window.location.replace("../compra/compra.php");
});
// ------------- finish open view -------------
