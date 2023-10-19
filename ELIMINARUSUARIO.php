<?php 
include 'CONEXION.php';
$Cedula = $_GET['Cedula'];
$delete="DELETE FROM usuarios WHERE Cedula ='$Cedula'";
$consulta=mysqli_query($conect, $delete);
if($consulta){
    header("location:MOSTRARUSUARIO.php");

}else{
    echo"<script> alert ('ha ocurrido un error');
    location.href ='MOSTRARUSUARIO.php';
    </script> ";
}
 ?>


        

