<?php 
    // GUARDAMOS SU CUENTA BANCARIA //
    session_start();
    include '../../../environment/environment_api_connection.php';
    include '../../../environment/environment_api.php';
    if (
        $_POST["tipo_cuenta_bancaria_fk"] != null && 
        $_POST["numero_cuenta"] != null && 
        $_POST["nombre_banco"] != null 
    ) {
        $data = [
            "visible" => true,
            "estado" => true,
            "tipo_cuenta_bancaria_fk" => $_POST["tipo_cuenta_bancaria_fk"],
            "numero_cuenta" => $_POST["numero_cuenta"],
            "nombre_banco" => $_POST["nombre_banco"]
        ];
        $res_cuenta_bancaria = CurlHelper::perform_http_request(
            'POST',
            $base . "/cuenta_bancaria/store",
            $data
        );
        // if (isset($res_cuenta_bancaria['id'])) {
        //     echo "<script> localStorage.setItem('cuenta_banco','3')</script>";
        //     header("Location: ../factura/factura.php");
        // }
        // if (isset($res_cuenta_bancaria['message'])) {
        //     echo "<script>localStorage.setItem('cuenta_banco','2')</script>";
        //     header("Location: carrito.php");
        // }
        $data = [
            "id"=>$_SESSION['id_user'],
            "cuenta_bancaria_fk" => $res_cuenta_bancaria
        ];
        $res_cliente = CurlHelper::perform_http_request(
            'PUT', 
            $base . "/clientes/update/".$_SESSION['id_user'], 
            $data
        );
        header("Location: ../factura/factura.php");
    } else {
        echo "<script>localStorage.setItem('cuenta_banco','1')</script>";
        header("Location: carrito.php");
        exit();  
    }
?>
