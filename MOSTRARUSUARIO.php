<?php
include "CONEXION.php";
$query = "SELECT * FROM usuarios";
$conect = mysqli_query($conect, $query);
?>
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

<body style="background-color:white;">
    <div class="super container">
        <div class="header">
            <?php
            include "NAVBAR.php";
            ?>

        </div>


            <form class="d-flex">
                <input name="buscar" class="form-control me-2" type="search" placeholder="buscar" aria-label="Search">
                <button name="btntbuscar" class="btn btn-outline-success" type="submit"> BUSCAR </button>
            </form>
            <table class="table" style="color:blue;">

                <h2 style="text-align: center; color:blue;">SERVICIOS</h2>
                <tr>
                    <th>IDUSUARIO</th>
                    <th>NOMBRE APELLIDO</th>
                    <th>CARGO</th>
                    <th>ESTUDIO</th>
                    <th>HUBICACION</th>
                    <th>TELEFONO</th>                   
                    <th>CORREO</th>
                    <th>DESCRIPCION</th>
                   
                </tr>
                <?php

                    while ($vec = mysqli_fetch_array($conect)) { ?>
                    

                        <tr>
                            <td><?php echo $vec[0]; ?></td>
                            <td><?php echo $vec[1]; ?></td>
                            <td><?php echo $vec[2]; ?></td>
                            <td><?php echo $vec[3]; ?></td>
                            <td><?php echo $vec[4]; ?></td>
                            <td><?php echo $vec[5]; ?></td>
                            <td><?php echo $vec[6]; ?></td>
                            <td><?php echo $vec[7]; ?></td>
                            
                            

                            <td>
                                <a href='ACTUALIZARUSUARIO.php?cedula=<?php echo $vec[0] ?>'><i class="fa-solid fa-pen-to-square"></i></a>
                                 <a href="ELIMINARUSUARIO.php?doc=<?php echo $vec[0] ?>"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                                          
                            </td>
                        </tr>
                <?php
                    }
                

                ?>
            </table>
    </div>
                        <scripts src="js/bootstraps"></scripts>
                        <scripts src="COMFIRMACION.js"></scripts>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="js/bootstrap.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js" integrity="sha384-mQ93GR66B00ZXjt0YO5KlohRA5SY2XofN4zfuZxLkoj1gXtW8ANNCe9d5Y3eG5eD" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c36cb32bff.js" crossorigin="anonymous"></script>




</body>

</html>