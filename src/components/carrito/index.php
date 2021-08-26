<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>El carrito mas perron</title>
    <link rel="stylesheet" href="../../resource/css/main.css" />
    <link rel="stylesheet" href="carrito.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
</head>
<body>
  <div class="container_page">
    <div class="content_page">
      <?php
        include '../navegation/navegation.php';
      ?>

      <div class="carrito">
      <div class="container">
        <h1>Carrito</h1>
        <hr>

        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Item</th>
              <th scope="col">Cantidad</th>
              <th scope="col">Acción</th>
              <th scope="col">Total</th>
            </tr>
          </thead>
          <tbody id="items"></tbody>
          <tfoot>
            <tr id="footer">
              <th scope="row" colspan="5">Carrito vacío - comience a comprar!</th>
            </tr>
          </tfoot>
        </table>
        <div class="row" id="cards"></div>
    </div>

    <template id="template-footer">
      <th scope="row" colspan="2">Total productos</th>
      <td>10</td>
      <td>
          <button class="btn btn-danger btn-sm" id="vaciar-carrito">
              vaciar todo
          </button>
      </td>
      <td class="font-weight-bold">$ <span>5000</span></td>
  </template>
  
  <template id="template-carrito">
    <tr>
      <th scope="row">id</th>
      <td >Café</td>
      <td>1</td>
      <td>
          <button class="btn btn-info btn-sm">
              +
          </button>
          <button class="btn btn-danger btn-sm">
              -
          </button>
      </td>
      <td>$ <span>500</span></td>
    </tr>

      </div>

     

    <!-- aqui son las tarjetas -->
 
    
  </template>
    <template id="template-card">
        <div class="col-12 mb-2 col-md-4">
          <div class="card">
            <img src="" alt="" class="card-img-top">
            <div class="card-body">
              <h5>Titulo</h5>
              <p>precio</p>
              <button class="btn btn-dark">Comprar</button>
            </div>
          </div>
        </div>
      </template>
      
      <script src="app.js"></script>
      </div>
      <!-- footer -->
      <?php
        include '../footer/footer.php';
      ?>

        
      
      <!-- footer -->
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
</body>
</html>