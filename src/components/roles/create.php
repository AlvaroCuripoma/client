<?php

  include '../../../environment/environment_api_connection.php';
  include '../../../environment/environment_api.php';

  if ($_POST['name'] != null) {
    $url_creat_rol = $base . "/store/roles";
    // creatting data roles
    $data_create = [
      "visible" => true,
      "estado" => true,
      "nombre" => $_POST['name'],
    ];
  
    $action = "POST";
    $url = $base . "/roles/store";
    echo "Trying to reach ...";
    echo $url;
    // $parameters = array("param" => "value");
    $parameters = $data_create;
    $result = CurlHelper::perform_http_request($action, $url, $parameters);
    echo print_r($result);
  }
  header("Location: index.php");
  exit;
?>
