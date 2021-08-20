<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="../../resource/css/main.css" />
  <link rel="stylesheet" href="products.css" />
  <title><?php echo basename(__FILE__); ?></title>
</head>
<body>
  <div class="container">
    <div class="content">
      <!-- navegation -->
      <?php
        include '../navegation/navegation.php';
      ?>
      <!-- navegation -->
      
      <!-- start content -->
      <div class="container_create_products">
        <button id="opc_create" class="btn">creat product</button>
      </div>
      
      <table class="table_list_prod">
        <tr class="heder_table">
          <td class="heder_iteam">num</td>
          <td class="heder_iteam">name</td>
          <td class="heder_iteam">precio</td>
          <td class="heder_iteam">operations</td>
        </tr>
        <tr class="body_table">
          
          <td class="body_iteam">1</td>
          <td class="body_iteam">plan económico</td>
          <td class="body_iteam">$ 5.99</td>
          <td class="body_iteam">
            <button id="opc_see" class="btn">ver</button>
            <button id="opc_edit" class="btn">editar</button>
            <button id="opc_delete" class="btn">borrar</button>
          </td>
          
        </tr>
      </table>

      <div>

        <!-- start create -->
        <div id="view_create" class="overlay">
          <div class="popup">
            <div class="view_nav">
              <button id="close_create" class="btn"></button>
            </div>
            <div class="content_view">
              <h1>create</h1>
              <form action="#" method="post" class="form_create">
                <label for="tipo_producto">type product</label>
                <input type="number" name="tipo_producto" id="tipo_producto" placeholder="type product">
                <label for="tipo_producto">name</label>
                <input type="text" name="name" id="name" placeholder="type product">
                <label for="fecha_fabricacion">fecha fabricacion</label>
                <input type="datetime" name="fecha_fabricacion" id="fecha_fabricacion" placeholder="type product">
                <label for="fecha_vencimiento">type product</label>
                <input type="datetime" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="type product">
                <label for="precio">type product</label>
                <input type="number" name="precio" id="precio" placeholder="type product">
                <label for="cantidad">type product</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="type product">
                <label for="descripcion">type product</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="type product">
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
              <form action="#" method="post" class="form_create">
                <label for="tipo_producto">type product</label>
                <input type="number" name="tipo_producto" id="tipo_producto" placeholder="type product">
                <label for="tipo_producto">name</label>
                <input type="text" name="name" id="name" placeholder="type product">
                <label for="fecha_fabricacion">fecha_fabricacion</label>
                <input type="datetime" name="fecha_fabricacion" id="fecha_fabricacion" placeholder="type product">
                <label for="fecha_vencimiento">type product</label>
                <input type="datetime" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="type product">
                <label for="precio">type product</label>
                <input type="number" name="precio" id="precio" placeholder="type product">
                <label for="cantidad">type product</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="type product">
                <label for="descripcion">type product</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="type product">
                <input type="submit" id="btn_submit" class="btn" value="send">
              </form>
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
                <label for="tipo_producto">type product</label>
                <input type="number" name="tipo_producto" id="tipo_producto" placeholder="type product">
                <label for="tipo_producto">name</label>
                <input type="text" name="name" id="name" placeholder="type product">
                <label for="fecha_fabricacion">fecha_fabricacion</label>
                <input type="datetime" name="fecha_fabricacion" id="fecha_fabricacion" placeholder="type product">
                <label for="fecha_vencimiento">type product</label>
                <input type="datetime" name="fecha_vencimiento" id="fecha_vencimiento" placeholder="type product">
                <label for="precio">type product</label>
                <input type="number" name="precio" id="precio" placeholder="type product">
                <label for="cantidad">type product</label>
                <input type="number" name="cantidad" id="cantidad" placeholder="type product">
                <label for="descripcion">type product</label>
                <input type="text" name="descripcion" id="descripcion" placeholder="type product">
                <input type="submit" id="btn_submit" class="btn" value="send">
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
  
  <script src="products.js"></script>
</body>
</html>