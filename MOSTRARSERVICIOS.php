<?php
include "CONEXION.php";
$query = "SELECT * FROM ofertas";
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
<body>
    <div class="super container-fluid">
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


                <h2 style="text-align: center; color:blue;">OFERTAS</h2>
                <tr>
                    <th>ID OFERTAS</th>
                    <th>CARGO OFERTAS</th>
                    <th>PRECIO</th>
                    <th>UBICACION</th>
                    <th>CORREO</th>
                    <th>TELEFONO</th>
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

                            
                            <td>
                                <a href='ACTUALIZARUSUARIO.php?cedula=<?php echo $vec[0] ?>'><i class="fa-solid fa-pen-to-square"></i></a>
                                 <a href="ELIMINARSERVICIO.php?doc=<?php echo $vec[0] ?>"><i class="fa-sharp fa-solid fa-trash"></i></a>
                                                          
                            </td>

                        </tr>
                <?php
                    }

                ?>
            </table>



    </div>    

    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html>