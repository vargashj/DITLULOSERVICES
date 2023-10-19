<?php
$servername ="localhost";
$username ="root";
$password = "";
$dbname = "lulo";

$conect =mysqli_connect($servername,$username,$password,$dbname);
if ($conect -> connect_error)
{
    die("connect fallida:". $sconnet->connect_error);
}else {
    echo "Conexion establecida";
}



?>