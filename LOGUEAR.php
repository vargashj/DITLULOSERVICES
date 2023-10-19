<?php 
if( isset($_POST['logueo'])){
    $correo = $_POST['correo'];
    $clave = $_POST['clave'];
    include 'CONEXION.php';
    $q=" SELECT * FROM  usuarios
      WHERE Correo='$correo' and Clave='$clave'";
    $c=mysqli_query($conect,$q);
    if (mysqli_num_rows($c)==1){
        $v=mysqli_fetch_array($c);
        session_start();
        $_SESSION['IdUsuario']=$v[0];
        $_SESSION['NombreAplellido']=$v[1];
        $_SESSION['Estudios']=$v[2];
        if($v['Rol']==1){
            echo "<script>alert('Bienvenido Administrador');
            window.location.href='MOSTRARUSUARIO.php';</script>";
        }else if($v['Rol']==2){ 
            echo "<script>alert('Bienvenido Usuario');
            window.location.href='index.php';</script>";
        }
    }     
}   
?>
