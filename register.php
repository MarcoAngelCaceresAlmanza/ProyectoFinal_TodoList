<?php
include ('db.php');
//$usuario=$_POST["usuario"];
$usuario=$_POST["usuario"];
$correo=$_POST["correo"];
$contraseña=$_POST["contraseña"];


$insertar="INSERT INTO usuarios(usuario,correo,contraseña)VALUES('$usuario','$correo','$contraseña')";

$resultado=mysqli_query($connexion,$insertar);

if(!$resultado){
    header("location:registrarvista.php");
    echo"usuario no regisstrado";


}else{
    header("location:index.php");
}

mysqli_close($connexion);