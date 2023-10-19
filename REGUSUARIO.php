<?php
    include ("CONEXION.php"); 
    $IdUsuario=$_POST['idu'];
    $NombreApellido=$_POST['nom'];
    $Cargo=$_POST['car'];
    $Estudios=$_POST['est'];
    $Hubicacion = $_POST['hub'];
    $Telefono = $_POST['tel'];
    $Correo= $_POST['cor'];
    $Descripcion = $_POST['des'];
        $query="INSERT INTO
        usuarios(IdUsuario,NombreApellido, Cargo,Estudios,Hubicacion,Telefono,Correo,Descripcion,Rol)
        VALUES($IdUsuario,'$NombreApellido','$Cargo','$Estudios','$Hubicacion','$Telefono','$Correo','$Descripcion',2)";
        $consulta = mysqli_query($conect,$query);


        if($consulta){
            echo " se inseerto el Usuarios en la base de datos";
            echo " <a href ='FORMULARIOUSUARIO.php'> volver </a>";
        }else{ 
            echo "hay un error en la consulta";
        }

?>