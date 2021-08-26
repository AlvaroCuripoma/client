<?php

  include '../../../environment/environment_api_connection.php';
  include '../../../environment/environment_api.php';

  if ($_POST['id_edit'] != null &&
  $_POST['visible_edit'] != null &&
  $_POST['state_edit'] != null &&
  $_POST['name_edit'] != null
  ) {
    $data = [
        "id" => $_POST['id_edit'],
        "visible" => true,
        "estado" => true,
        "tipo_producto_fk" => $_POST['tipo_producto_edit'],
        "nombre" => $_POST['name_edit'],
        "fecha_fabricacion" => $_POST['fecha_fabricacion_edit'],
        "fecha_vencimiento" => $_POST['fecha_vencimiento_edit'],
        "precio" => $_POST['precio_edit'],
        "cantidad" => $_POST['cantidad_edit'],
        "descripcion" => $_POST['descripcion_edit']
      ];
    $result = CurlHelper::perform_http_request(
      "PUT",
      $base."/productos/update/".$_POST['id_edit'], 
      $data
    );
    header("Location: productos.php");
  }
  header("Location: productos.php");
  exit;
?>
