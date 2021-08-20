<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="../../resource/css/main.css" />
    <link rel="stylesheet" href="dashboard.css" />
    <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
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
        <div class="content">
          <div class="container_carrucel" id="container_carrucel">
            <div class="carrucel">
              <div class="slider_element">
                <div class="element-1">
                  <div class="blur_1">
                    <p>Encuetra los mejores planes</p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-2">
                  <div class="blur_2">
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-3">
                  <div class="blur_3">
                    <p>Tenemos planes que se ajustan a usted</p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-4">
                  <div class="blur_4">
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-5">
                  <div class="blur_5">
                    <p>Tenemos los mejores planes</p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-6">
                  <p class="blur_6"></p>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-7">
                  <div class="blur_7">
                    <p>Encontrará más de los que busca</p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-8">
                  <div class="blur_8">
                    <p></p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-9">
                  <div class="blur_9">
                    <p>Compra con un solo click</p>
                  </div>
                </div>
              </div>
              <div class="slider_element">
                <div class="element-10">
                  <div class="blur_10">
                    <p></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="info_dashboard" id="info_dashboard">
            <img src="../../resource/img/info_dashboard.jpg" alt="">
            <p>
              Ofrecemos planes desde cinco dolares, 
              para que siempre estes conectado con las personas que amas.
            </p>
          </div>
        </div>
        <!-- finish content -->

      </div>
      <!-- footer -->
      <?php
        include '../../components/footer/footer.php';
      ?>
      <!-- footer -->
    </div>

    <script src="../dashboard/script_dashboard.js"></script>
  </body>
</html>