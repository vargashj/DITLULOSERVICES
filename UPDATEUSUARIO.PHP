<?php 
if (isset($_POST['btn']) && isset($_POST['cedula'])){
    include ("CONEXION.php");
    $Cedula=$_POST['ced'];
    $Nombre=$_POST['nom'];
    $Apellido=$_POST['ape'];
    $Correo=$_POST['cor'];
    $Ocupacion=$_POST['ocu'];
    $Estudios=$_POST['est'];
    $Descripcion = $_POST['des'];
    $Telefono = $_POST['tel'];
    $Direccion = $_POST['dir'];
    $query="UPDATE usuarios
         SET Cedula='$Cedula',Nombre='$Nombre',Apellido='$Apellido',Correo='$Correo',Ocupacion='$Ocupacion',Estudios='$Estudios',Descripcion='$Descripcion',Celular='$Cedula',Telefono='$Telefono',Direccion='$Direccion'
        WHERE Cedula= '$Cedula'";
        $consulta = mysqli_query($conect,$query);
    
    
        if($consulta){
             echo " Registro actualizado";
             echo " <a href ='ACTUALIZARUSUARIO.php'> volver </a>";
         }else{
             echo "hay un error en la consulta";
         }


}
?>