//===========================================================================//
// + IMPRIMIENDO FACTURA
//===========================================================================//
function imprimir_factura(id) {
  var paper = document.getElementById(id);
  paper.className = paper.className.replace("noprint", "printme");
  window.print();
}
//===========================================================================//
// - IMPRIMIENDO FACTURA
//===========================================================================//
