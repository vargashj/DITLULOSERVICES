<?php
include "CONEXION.php";
$cedula = $_GET['cedula'];
$query = "SELECT * FROM usuarios WHERE Cedula=$cedula";
$consulta = mysqli_query($conect, $query);
$vec = mysqli_fetch_array($consulta);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
  <div class="super container">
    <div class="header">
      <?php
      include "NAVBAR.php";
      ?>
    </div>
    <div class="container">
      <form action="UPDATEUSUARIO.php" method="POST" class="row g-3 needs-validation">
        <div class="col-md-12">
          <label for="cedula" class="form-label">CEDULA</label>
          <input type="number" name="ced" id="cedula" require class="form-control" required value="<?php echo $vec[0] ?>">
        </div>
        <div class="col-md-12">
          <label for="nombre" class="form-label">NOMBRE</label>
          <input type="text" name="nom" id="nombre" class="form-control" required value="<?php echo $vec[1] ?>">
        </div>
        <div class="col-md-12">
          <label for="apellido" class="form-label">Apellido</label>
          <input type="text" name="ape" id="apellido" class="form-control" required value="<?php echo $vec[2] ?>">
        </div>
        <div class="col-md-12">
          <label for="exampleInputEmail1" class="form-label">CORREO </label>
          <input type="email" class="form-control" name="cor" id="correo" aria-describedby="emailHelp" required value="<?php echo $vec[3] ?>">
          <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="col-md-12">
          <label for="validationCustom01" class="form-label">CELULAR</label>
          <input type="number" class="form-control" name="cel" id="celular" required value="<?php echo $vec[4] ?>">

        </div>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">DIRECCION</label>
          <input type="text" class="form-control" name="dir" id="direccion" required value="<?php echo $vec[5] ?>">

        </div>
        <div class="col-md-12">
          <label for="validationCustom01" class="form-label">TELEFONO</label>
          <input type="number" class="form-control" name="tel" id="telefono" required value="<?php echo $vec[6] ?>">

        </div>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">OCUPACION</label>
          <input type="text" class="form-control" name="ocu" id="ocupacion" required value="<?php echo $vec[7] ?>">

        </div>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">ESTUDIO</label>
          <input type="text" class="form-control" name="est" id="estudio" required value="<?php echo $vec[8] ?>">

        </div>
        <div class="col-md-12">
          <label for="validationCustom03" class="form-label">DESCRIPCION</label>
          <input type="text" class="form-control" name="des" id="descripcion" required value="<?php echo $vec[9] ?>">

        </div>

        <div class="col-12">
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="invalidCheck">
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

  <?php



  if ($consulta) {
    echo " se inseerto el Usuarios en la base de datos";
    echo " <a href ='MOSTARUSUARIO.php'> volver </a>";
  } else {
    echo "hay un error en la consulta";
  }
  ?>

</body>

</html>