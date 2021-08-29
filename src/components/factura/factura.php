<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <link rel="stylesheet" href="../../resource/css/main.css" />
    <link rel="icon" href="../../resource/img/logo.jpg" type="image/x-icon">
    <link rel="stylesheet" href="factura.css">
    <title><?php echo basename(__FILE__); ?></title>
  </head>
  <body>
    <div class="container_page">
      <div class="content_page">
        <!-- navegation -->
        <div class="noprint">
        <?php
            include '../navegation/navegation.php';
          ?>
        </div>
        <!-- navegation -->
        <!-- http://localhost/proyect/client/src/components/factura/factura.php -->
        <div class="content_general">

          <div class="btn_factura">
            <a class="my_btn noprint" href="../carrito/carrito.php">Editar carrito</a>
            <a class="my_btn noprint" onclick="imprimir_factura('paper_to_print')">Imprimir</a>
          </div>
        
          <div class="paper" id="paper_to_print">

            <!-- + Encabezado de la factura -->
            <header class="printthis">
              <div class="logoholder text-center">
                <img src="../../resource/img/logo.jpg" />
              </div>
    
              <div class="me">
                  <strong>Start Platinum S.A. de C.V.</strong><br/>
                  234/90, Pichincha - Quito<br/>
                  Ecuador<br/>
              </div>
    
              <div class="info">
                  Web: <a href="http://localhost/proyect/client/src/components/dashboard/dashboard.php">www.StartPlatinum.ec</a>
                  <p id="emai"></p>
                  <p id="telefono"></p>
              </div>
              <div class="bank">
                <strong>Datos bacarios</strong>
                <p id="titular_cuenta"></p>
                <p id="iban"></p>
              </div>
            </header>
            <!-- - Encabezado de la factura -->
    
            <!-- + Datos generales de la factura -->
            <table class="table my_table">
              <thead>
                <tr>
                  <th><h1>Factura</h1></th>
                  <th><h1></h1></th>
                </tr>
              </thead>
              <tbody>
                <td>
                  <p id="fecha"></p>
                  <p id="num_factura"></p>
                  <p id="vence_factura"></p>
                </td>
                <td>
                  <p id="nombre_cliente"></p>
                  <p id="nombre_empresa"></p>
                  <p id="direccion_empresa"></p>
                  <p id="telefono_empresa"></p>
                </td>
              </tbody>
            </table>
            <!-- - Datos generales de la factura -->
    
            <!-- + detalle productos comprados -->
            <div class="invoicelist-body my_table">
              <table>
                <thead>
                  <th>Número</th>
                  <th>Cantidad</th>
                  <th>Nombre</th>
                  <th>Precio unitario</th>
                  <th>Tipo</th>
                  <th>Descripción</th>
                </thead>
                <tbody  id="productos_factura">
                </tbody>
              </table>
            </div>
            <!-- + detalle productos comprados -->
    
            <!-- + pie de página -->
            <div class="invoicelist-footer my_table">
              <table>
                <tr id="iva"></tr>
                <tr id="total"></tr>
              </table>
            </div>
            
            <div class="note my_table">
              <p id="nota"></p>
            </div>
    
            <footer class="row my_table">
              <p>
                El monto de la factura no incluye el impuesto sobre las ventas.
              </p>
            </footer>
          </div>
        </div>
        <!-- - pie de página -->
        <!-- - content -->
        <!-- + footer -->
        <div class="noprint">
        <?php
            include '../footer/footer.php';
          ?>
        </div>
        <!-- - footer -->
      </div>
    </div>
      <!-------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="factura.js"></script>
    <!-------------------------------------------------------------------------------->
  </body>
</html>
