const container_carrucel = document.getElementById("container_carrucel");

container_carrucel.addEventListener("mouseover", function () {
  document.getElementById("info_dashboard").style.display = "block";
});
container_carrucel.addEventListener("mouseleave", function () {
  document.getElementById("info_dashboard").style.display = "none";
});

