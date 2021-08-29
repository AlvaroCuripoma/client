<?php

    session_start();
    // ==================================================================== //
    // VERIFICAMOS DATOS DEL USUARIO PARA REGISTRARLO O RECORDALE SU CUENTA //
    // ==================================================================== //
    if (
        $_POST["rol_fk"] != null && 
        $_POST["nombres"] != null && 
        $_POST["apellidos"] != null && 
        $_POST["email"] != null && 
        $_POST["clave"] != null && 
        $_POST["direccion"] != null && 
        $_POST["numero_telefono"] != null && 
        $_POST["numero_identificacion"] != null 
    ) {
        include '../../../environment/environment_api_connection.php';
        include '../../../environment/environment_api.php';
        // ================================================================= //
        // GUARDAMOS SU CUENTA BANCARIA, SI ES QUE HAY DATOS EN ESOS CAMPOS //
        // ================================================================ //
        if (
            $_POST["tipo_cuenta_bancaria_fk"] != null && 
            $_POST["numero_cuenta"] != null && 
            $_POST["nombre_banco"] != null 
        ) {
            // datos de la cuenta bancaria del usuario
            $data = [
                "visible" => true,
                "estado" => true,
                "tipo_cuenta_bancaria_fk" => $_POST["tipo_cuenta_bancaria_fk"],
                "numero_cuenta" => $_POST["numero_cuenta"],
                "nombre_banco" => $_POST["nombre_banco"]
            ];
            $result = CurlHelper::perform_http_request(
                'POST',
                $base . "/cuenta_bancaria/store",
                $data
            );
            //===============================//
            // SI EXISTE ESA CUENTA BANCARIA //
            //===============================//
            if (isset($result['id'])) {
                echo "<script>
                localStorage.setItem('register', '5');
                </script>";
                header("Location: ../compra/compra.php");
                exit();
            }
            if (isset($result['message'])) {
                echo "<script>
                    localStorage.setItem('register', '4');
                    localStorage.setItem('nom_register', '');
                    window.location = 'register.php';
                    </script>";
                header("Location: register.php");
                exit();
            }
            // datos del usuario
            $data = [
                "visible" => true,
                "estado" => true,
                "rol_fk" => $_POST["rol_fk"],
                "nombres" => $_POST["nombres"],
                "apellidos" => $_POST["apellidos"],
                "correo" => $_POST["email"],
                "clave" => $_POST["clave"],
                "direccion" => $_POST["direccion"],
                "numero_telefono" => $_POST["numero_telefono"],
                "numero_identificacion" => $_POST["numero_identificacion"],
                "cuenta_bancaria_fk" => $result
            ];
            $result = CurlHelper::perform_http_request(
                'POST', 
                $base . "/clientes/store", 
                $data
            );
            $result = json_decode($result, true);
            //==================================================//
            // CUANDO EL USUARIO NO EXISTE, SE CREARÁ EL USUARIO //
            //==================================================//
            if (isset($result['id'])) {
                echo "<script>
                localStorage.setItem('register', '3');
                </script>";
                $_SESSION['id_user'] = $result['id'];
                header("Location: ../compra/compra.php");
                exit();
            }
            //============================//
            // CUAND EL USUARIO YA EXISTE //
            //============================//
            if (isset($result['nombres'])) {
                echo "<script>
                    localStorage.setItem('register', '2');
                    </script>";
                    header("Location: register.php");
                    exit();
            }
        }
        $data = [
            "visible" => true,
            "estado" => true,
            "rol_fk" => $_POST["rol_fk"],
            "nombres" => $_POST["nombres"],
            "apellidos" => $_POST["apellidos"],
            "correo" => $_POST["email"],
            "clave" => $_POST["clave"],
            "direccion" => $_POST["direccion"],
            "numero_telefono" => $_POST["numero_telefono"],
            "numero_identificacion" => $_POST["numero_identificacion"]
        ];
        
        $result = CurlHelper::perform_http_request(
            'POST', 
            $base . "/clientes/store", 
            $data
        );
        $result = json_decode($result, true);
        //===================================================//
        // CUANDO EL USUARIO NO EXISTE, SE CREARÁ EL USUARIO //
        //===================================================//
        if (isset($result['id'])) {
            echo "<script>
            localStorage.setItem('register', '3');
            </script>";
            $_SESSION['id_user'] = $result['id'];
            header("Location: ../compra/compra.php");
            exit();
        }
        //=============================//
        // CUANDO EL USUARIO YA EXISTE //
        //=============================//
        if (isset($result['nombres'])) {
            echo "<script>
            localStorage.setItem('register', '2');
            </script>";
            header("Location: register.php");
            exit();
        }
    } else {
        //=============================================//
        // CUANDO EL USUARIO NO LLENE TODOS LOS CAMPOS //
        //=============================================//
        echo "<script>
        localStorage.setItem('register', '1');
        </script>";
        header("Location: register.php");
    }
    exit();
    ?>
