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
        <?php
            include '../navegation/navegation.php';
          ?>
        <!-- navegation -->

        <!-- http://localhost/proyect/client/src/components/factura/factura.php -->
        <div class="content_general">
          <div class="btn_print">
            <a href="javascript:window.print()">Imprimir</a>
          </div>

          <div class="paper">
            <header class="row">
              <div class="logoholder text-center">
                <img src="../../resource/img/logo.jpg" />
              </div>
              <!--.logoholder-->
    
              <div class="me">
                <p contenteditable>
                  <strong>Start Platinum S.A. de C.V.</strong><br />
                  234/90, New York Street<br />
                  United States.<br />
                </p>
              </div>
              <!--.me-->
    
              <div class="info">
                <p contenteditable>
                  Web: <a href="http://volkerotto.net">www.sistemasweb.la</a><br />
                  E-mail: <a href="mailto:info@obedalvarado.pw">info@obedalvarado.pw</a
                  ><br />
                  Tel: +456-345-908-559<br />
                  Twitter: @alvarado_obed
                </p>
              </div>
              <!-- .info -->
    
              <div class="bank">
                <p contenteditable>
                  Datos bacarios: <br />
                  Titular de la cuenta: <br />
                  IBAN: <br />
                  BIC:
                </p>
              </div>
              <!--.bank-->
            </header>
    
            <div class="row section">
              <div class="col-2">
                <h1 contenteditable>Factura</h1>
              </div>
              <!--.col-->
    
              <div class="col-2 text-right details">
                <p contenteditable>
                  Fecha: <input type="text" class="datePicker" /><br />
                  Factura #: <input type="text" value="100" /><br />
                  Vence: <input class="twoweeks" type="text" />
                </p>
              </div>
              <!--.col-->
    
              <div class="col-2">
                <p contenteditable class="client">
                  <strong>Facturar a</strong><br />
                  [Nombre cliente]<br />
                  [Nombre emmpresa]<br />
                  [Dirección empresa]<br />
                  [Tel empresa]
                </p>
              </div>
              <!--.col-->
    
              <div class="col-2">
                <p contenteditable class="client">
                  <strong>Enviar a</strong><br />
                  [Nombre cliente]<br />
                  [Nombre emmpresa]<br />
                  [Dirección empresa]<br />
                  [Tel empresa]
                </p>
              </div>
              <!--.col-->
            </div>
            <!--.row-->
    
            <div class="row section" style="margin-top: -1rem">
              <div class="col-1">
                <table style="width: 100%">
                  <thead contenteditable>
                    <tr class="invoice_detail">
                      <th width="25%">Vendedor</th>
                      <th width="25%">Orden de compra</th>
                      <th width="20%">Enviar por</th>
                      <th width="30%">Términos y condiciones</th>
                    </tr>
                  </thead>
                  <tbody contenteditable>
                    <tr class="invoice_detail">
                      <td width="25%">John Doe</td>
                      <td width="25%">#PO-2020</td>
                      <td width="20%">DHL</td>
                      <td width="30%">Pago al contado</td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
            <!--.row-->
    
            <div class="invoicelist-body">
              <table>
                <thead contenteditable>
                  <th width="5%">Código</th>
                  <th width="60%">Descripción</th>
    
                  <th width="10%">Cant.</th>
                  <th width="15%">Precio</th>
                  <th class="taxrelated">IVA</th>
                  <th width="10%">Total</th>
                </thead>
                <tbody>
                  <tr>
                    <td width="5%">
                      <a class="control removeRow" href="#">x</a>
                      <span contenteditable>12345</span>
                    </td>
                    <td width="60%"><span contenteditable>Descripción</span></td>
                    <td class="amount"><input type="text" value="1" /></td>
                    <td class="rate"><input type="text" value="99" /></td>
                    <td class="tax taxrelated"></td>
                    <td class="sum"></td>
                  </tr>
                </tbody>
              </table>
              <a class="control newRow" href="#">+ Nueva fila</a>
            </div>
            <!--.invoice-body-->
    
            <div class="invoicelist-footer">
              <table contenteditable>
                <tr class="taxrelated">
                  <td>IVA:</td>
                  <td id="total_tax"></td>
                </tr>
                <tr>
                  <td><strong>Total:</strong></td>
                  <td id="total_price"></td>
                </tr>
              </table>
            </div>
    
            <div class="note" contenteditable>
              <h2>Nota:</h2>
            </div>
            <!--.note-->
    
            <footer class="row">
              <div class="col-1 text-center">
                <p class="notaxrelated" contenteditable>
                  El monto de la factura no incluye el impuesto sobre las ventas.
                </p>
              </div>
            </footer>
          </div>
        </div>
        <!-- finish content -->
        <!-- footer -->
        <?php
            include '../footer/footer.php';
          ?>
        <!-- footer -->
      </div>
    </div>
      <!-------------------------------------------------------------------------------->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-U1DAWAznBHeqEIlVSCgzq+c9gqGAJn5c/t99JyeKa9xxaYpSvHU5awsuZVVFIhvj" crossorigin="anonymous"></script>
    <script src="factura.js"></script>
    <!-------------------------------------------------------------------------------->
  </body>
</html>
