<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

  <title>DITLULOSERVICES</title>
  <link rel="stylesheet" type="text/css"
    href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.3/assets/owl.carousel.min.css" />
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,700|Roboto:400,700&display=swap" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>
<body class="p-3 mb-2  text-dark"   style="background-color: #e4baec"  >
    <div class="super container">
        <div class="header">
              <?php
                  include "NAVBAR.php";
              ?> 
                
        </div>


        <div class="container">
        <form action="REGSERVICIO.php" method="POST" class="row g-3 needs-validation" >
          <div class="col-md-6">
              <label for="idofertas" class="form-label">ID OFERTAS</label>
              <input type="number" name="ofer" id="cedula" require class="form-control" >
          </div>
          <div class="col-md-6">
            <label for="cargoofertas" class="form-label">CARGO OFERTAS</label>
            <input type="text" name="carg" id="nombre"  class="form-control"  >
          </div>
          <div class="col-md-6">
              <label for="precio" class="form-label">PRECIO</label>
              <input type="number" class="form-control" name="prec" id="descripcion" required>

          </div>

          <div class="col-md-6">
            <label for="ubicacion" class="form-label">UBICACION</label>
            <input type="text" class="form-control" name="ubic" id="direccion" required>

          </div>
          <div class="col-md-6">
              <label for="correo" class="form-label">CORREO</label>
              <input type="email" class="form-control" name="corr" id="telefono" value="" required>

          </div>
          <div class="col-md-6">
              <label for="telefono" class="form-label">TELEFONO</label>
              <input type="number" class="form-control" name="tele" id="telefono" value="" required>

          </div>
          <div class="col-md-6">
              <label for="descripcion" class="form-label">DESCRIPCION</label>
              <input type="text" class="form-control" name="desc" id="telefono" value="" required>

          </div>


  
          <div class="col-12">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" >
              <label class="form-check-label" for="invalidCheck">
                  Acepta terminos y condiciones
              </label>
              <div class="invalid-feedback">
                Acepta terminos y condiciones
              </div>
            </div>
          </div>
          <div class="col-12">
            <button class="btn btn-primary" type="submit">ENVIAR</button>
          </div>
        </form>



          </div>
    </div>




    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
     
</body>
</html>