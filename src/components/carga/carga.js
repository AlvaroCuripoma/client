var num = 0;
var barrita = setInterval(() => {
  num += 10;
  document.getElementById("barra").style.width = `${num}px`;
}, 100);

setTimeout(() => {
  clearInterval(barrita);
  window.location.replace("../dashboard/dashboard.php");
}, 3000);
