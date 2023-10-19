<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>DITLULOSERVICES</title>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <div class="header">
    <?php
    include "NAVBAR.php";
    ?>

  </div>
  <form action="LOGUEAR.php" style="background-color: #508bfc;" method="POST">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-12 col-lg-8 col-xl-8">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-center">

              <h3 class="mb-5">INICIA SESION</h3>


              <div class="form-outline mb-12">
                <input type="email" id="typeEmailX-2" name="correo" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">EMAIL</label>
              </div>
              <div class="form-outline mb-12">
                <input type="password" id="typetext-1" name="clave" class="form-control form-control-lg" />
                <label class="form-label" for="typeEmailX-2">CLAVE</label>
              </div>



              <!-- Checkbox -->
              <div class="form-check d-flex justify-content-start mb-12">
                <input class="form-check-input" type="checkbox" value="" id="form1Example3" />
                <label class="form-check-label" for="form1Example3"> Recordar Contraseña </label>
              </div>

              <!-- <button class="btn btn-primary" type="submit">LOGIN</button> -->

              <div class="pt-1 mb-4">
                <button class="btn btn-success btn-lg btn-block" name="logueo" type="submit">Ingresar</button>
              </div>

              <hr class="my-12">



            </div>
          </div>
        </div>
      </div>
    </div>
  </form>



</body>

</html>