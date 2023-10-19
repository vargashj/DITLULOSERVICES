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
    $RutaImagen ='img/'.$_FILES['foto']['name'];
    $NombreImagen=$_FILES['foto']['tmp_name'];
    move_uploaded_file($NombreImagen,$RutaImagen);

        $query="INSERT INTO
        usuarios(IdUsuario,NombreApellido, Cargo,Estudios,Hubicacion,Telefono,Correo,Descripcion,Rol,Foto)
        VALUES($IdUsuario,'$NombreApellido','$Cargo','$Estudios','$Hubicacion','$Telefono','$Correo','$Descripcion',2 ,'$RutaImagen')";
        $consulta = mysqli_query($conect,$query);


        if($consulta){
            echo " se inseerto el Usuarios en la base de datos";
            echo " <a href ='FORMULARIOUSUARIO.php'> volver </a>";
        }else{ 
            echo "hay un error en la consulta";
        }

?>