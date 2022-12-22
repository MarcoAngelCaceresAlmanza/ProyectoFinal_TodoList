<?php
include'db.php';
$correo=$_POST['correo'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['correo']=$correo;


$conexion=mysqli_connect("localhost","root","","bd_registro");

$consulta="SELECT * FROM usuarios where  correo='$correo' and contraseña='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
  
    header("location:todo.php");

}else{
    ?>
    <?php
    include("index.php");

  ?>
  <h1 class="bad">ERROR AL INSERTAR</h1>
  <?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);