<?php

    session_start();

    //-------------------------------------------------//
    // VERIFICAMSO SI ESTAN LLENOS LOS CAMPOS DEL FORM //
    //-------------------------------------------------//
    if ($_POST["correo"] != null && $_POST["pass"] != null) {
        $data = [
        "correo" => $_POST["correo"],
        "pass" => $_POST["pass"]
        ];
        include '../../../environment/environment_api_connection.php';
        include '../../../environment/environment_api.php';
        $result = CurlHelper::perform_http_request(
            'POST',
            $base . "/clientes/login",
            $data
        );
        //---------------------------------------------//
        // VERIFICAMSO SI HAY DATOS EN EL CAMPO ROL_FK //
        //---------------------------------------------//
        $result = json_decode($result, true);
        $_SESSION['id_user'] = $result['id'];
        if (isset($result['rol_fk'])) {
            if ($result['rol_fk'] == 1) {
                header("Location: ../productos/productos.php");
            } if ($result['rol_fk'] == 2) {
                header("Location: ../compra/compra.php");
            }
        }
        echo "<script>
            localStorage.setItem('login', '2');
            window.location = 'login.php';
            </script>";
        exit();
    } else {
        echo "<script>
            localStorage.setItem('login', '1');
            window.location = 'login.php';
            </script>";
        exit();
    }
?>
