// para muestrar las ventanitas
const opc_create = document.getElementById("opc_create");
const opc_see = document.getElementById("opc_see");
const opc_edit = document.getElementById("opc_edit");
const opc_delete = document.getElementById("opc_delete");

// para cerrar las ventanitas
const close_create = document.getElementById("close_create");
const close_see = document.getElementById("close_see");
const close_edit = document.getElementById("close_edit");
const close_delete = document.getElementById("close_delete");

// ------------- muestra ventanita
opc_create.addEventListener("click", function () {
  document.getElementById("view_create").classList.add("visible");
});
opc_see.addEventListener("click", function () {
  document.getElementById("view_see").classList.add("visible");
});
opc_edit.addEventListener("click", function () {
  document.getElementById("view_edit").classList.add("visible");
});
opc_delete.addEventListener("click", function () {
  document.getElementById("view_delete").classList.add("visible");
});
// ------------- muestra ventanita

// ------------- cierra ventanita
close_create.addEventListener("click", function () {
  document.getElementById("view_create").classList.remove("visible");
});
close_see.addEventListener("click", function () {
  document.getElementById("view_see").classList.remove("visible");
});
close_edit.addEventListener("click", function () {
  document.getElementById("view_edit").classList.remove("visible");
});
close_delete.addEventListener("click", function () {
  document.getElementById("view_delete").classList.remove("visible");
});
// ------------- cierra ventanita
