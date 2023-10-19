<?php
include ("CONEXION.php");
$IdOfertas=$_POST['ofer'];
$CargoOferta=$_POST['carg'];
$Precio = $_POST['prec'];
$Hubicacionl= $_POST['ubic'];
$Correo= $_POST['corr'];
$Telefono=$_POST['tele'];
$Descripcion= $_POST['desc'];


$query="INSERT INTO
    ofertas(IdOfertas,CargoOferta,Precio,Hubicacionl,Correo,Telefono,Descripcion)
    VALUES('$IdOfertas','$CargoOferta','$Precio','$Hubicacionl','$Correo','$Telefono','$Descripcion')";
    $consulta = mysqli_query($conect,$query);


    if($consulta){
         echo " se inseerto el Usuarios en la base de datos";
         echo " <a href ='MOSTRARSERVICIOS.php'> volver </a>";
     }else{
         echo "hay un error en la consulta";
     }

?>