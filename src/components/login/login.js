const btnIniciarSesion = document.getElementById("btn__registrarse");
btnIniciarSesion.addEventListener("click", () => {
  window.location.replace("../register/register.php");
});

//----------------------------------------------------------//
// MOSTRAMOS MENSAJES DE ACUERDO AL NUMERO EN LOCAL STORAGE //
//----------------------------------------------------------//
var tipo_error = localStorage.getItem("login");
switch (tipo_error) {
  case "1":
    document
      .getElementById("cont_msm_llenar_campso")
      .classList.remove("msm_llenar_campso");
    document.getElementById("cont_msm_llenar_campso").classList.add("mostrar");
    localStorage.removeItem("login");
    break;
  case "2":
    document
      .getElementById("cont_msm_no_usuario")
      .classList.remove("msm_no_usuario");
    document.getElementById("cont_msm_no_usuario").classList.add("mostrar");
    localStorage.removeItem("login");
    break;
  default:
    break;
}

//-------------------//
// VERIFICANDO LOGIN //
//-------------------//
function login() {
  const correo = document.getElementById("correo").value;
  const pass = document.getElementById("pass").value;
  async function postData(url = "", data = {}) {
    const response = await fetch(url, {
      method: "POST",
      mode: "cors",
      cache: "default",
      credentials: "same-origin",
      headers: {
        "Content-Type": "application/json",
      },
      redirect: "follow",
      referrerPolicy: "no-referrer",
      body: JSON.stringify(data),
    });
    return response.json();
  }

  postData("http://127.0.0.1:8000/api/clientes/login", {
    correo: correo,
    pass: pass,
  }).then((data) => {
    localStorage.setItem("data", JSON.stringify(data));
  });
}
