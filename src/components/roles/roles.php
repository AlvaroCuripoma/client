<?php
  // see all roles
  include '../../../environment/environment_api_connection.php';
  include '../../../environment/environment_api.php';
  $action_all = "GET";
  $url_all = $base . "/roles";
  $result_all = CurlHelper::perform_http_request($action_all, $url_all, $parameters='');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
  <link rel="stylesheet" href="../../resource/css/main.css" />
  <link rel="stylesheet" href="roles.css" />
  <link rel="icon" href="../../resource/img/logo.jpg" type="image/x-icon">
  <title><?php echo basename(__FILE__); ?></title>
</head>
<body>
  <div class="container_page">
    <div class="content_page">
      <!-- navegation -->
      <?php
        include '../navegation/navegation.php';
        ?>
      <!-- navegation -->
      
      <!-- start content -->
      <div class="container_create_products">
        <button id="opc_create" class="btn">creat rol</button>
      </div>
      
      <table class="table_list_prod">
        <tr class="heder_table">
          <tr>
            <td class="heder_iteam">num</td>
            <td class="heder_iteam">name</td>
            <td class="heder_iteam">operations</td>
          </tr>
        </tr>
        <tr class="body_table">
        <?php
          function see($id){
            include '../../../environment/environment_api.php';
            $action_see = "GET";
            $url_see = $base . "/roles" . "/show" . "/" . $id;
            return $result_see = CurlHelper::perform_http_request(
              $action_see, $url_see, $parameters=''
            );
          }
        
          $roles = json_decode($result_all, true);
          foreach($roles as $rol) {
          ?>
          <tr>
            <td class="body_iteam"><?php echo $rol['id'] ?></td>
            <td class="body_iteam"><?php echo $rol['nombre'] ?></td>
            <td class="body_iteam">
              <button onclick="see(<?php echo $rol['id'] ?>)" id="opc_see" class="btn opc_see">ver</button>
              <button onclick="edit(<?php echo $rol['id'] ?>)" id="opc_edit" class="btn opc_edit">editar</button>
              <button onclick="cleanUp(<?php echo $rol['id'] ?>)" id="opc_delete" class="btn opc_delete">borrar</button>
            </td>
          </tr>
          <?php
          }
          ?>

        </tr>
      </table>

      <div>
        <div id="valores" style="visibility: hidden;"></div>
        <!-- start create -->
        <div id="view_create" class="overlay">
          <div class="popup">
            <div class="view_nav">
              <button id="close_create" class="btn"></button>
            </div>
            <div class="content_view">
              <h1>create</h1>
              <form action="create.php" method="post" class="form_create">
                <label for="tipo_producto">name</label>
                <input type="text" name="name" id="name" placeholder="type product">
                <input type="submit" id="btn_submit" class="btn" value="send">
              </form>
            </div>
          </div>
        </div>
        <!-- finish create -->
  
        <!-- start see -->
        <div id="view_see" class="overlay">
          <div class="popup">
            <div class="view_nav">
              <button id="close_see" class="btn"></button>
            </div>
            <div class="content_view">
              <h1>see</h1>
              <div class="container_data_see">
                <div class="names_see">
                  <label for="id_see">id</label>
                  <label for="visible_see">visible</label>
                  <label for="state_see">state</label>
                  <label for="name_see">name</label>
                  <label for="created_at_see">created at</label>
                  <label for="updated_at_see">updated at</label>
                </div>
                <div class="values_see">
                  <input class="campo_see" type="number" name="data_see" id="id_see" readonly>
                  <input class="campo_see" type="number" name="data_see" id="visible_see" readonly>
                  <input class="campo_see" type="number" name="data_see" id="state_see" readonly>
                  <input class="campo_see" type="text" name="data_see" id="name_see" readonly>
                  <input class="campo_see" type="datetime" name="data_see" id="created_at_see" readonly>
                  <input class="campo_see" type="datetime" name="data_see" id="updated_at_see" readonly>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- finish see -->
        
        <!-- start edit -->
        <div id="view_edit" class="overlay">
          <div class="popup">
            <div class="view_nav">
              <button id="close_edit" class="btn"></button>
            </div>
            <div class="content_view">
              <h1>edit</h1>
              <form action="#" method="put" class="form_create">
              </form>
            </div>
          </div>
        </div>
        <!-- finish edit -->
        
        <!-- start delete -->
        <div id="view_delete" class="overlay">
          <div class="popup">
            <div class="view_nav">
              <button id="close_delete" class="btn"></button>
            </div>
            <div class="content_view">
              <h1>delete</h1>
            </div>
          </div>
        </div>
      </div>
      <!-- finish delete -->

      <!-- finish content -->
      
    </div>
    <!-- footer -->
    <?php
      include '../footer/footer.php';
      ?>
    <!-- footer -->
  </div>
  
  <script src="roles.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>
<!--

http://localhost/proyect/client/src/components/rol/index.php

-->
