<?php 

  $conexion = mysqli_connect("localhost", "root" , "", "mydatos");

$nombre = $_POST["nombre_a"];
$password = $_POST["password_a"];
session_start();
$_SESSION['nombre_a']=$nombre;

$comparar = "SELECT*FROM tabla where nombre='$nombre' and password='$password'";
$consulta = mysqli_query($conexion , $comparar);
$filas=mysqli_num_rows($consulta);

if($filas) {
    echo "<script>alert('Hola $nombre, bienvenido'); window.location='pagina.php'</script>";
    
}else {
     echo "<script>alert('La contraseña o el nombre no coincide'); window.location='index.html'</script>";
}
mysqli_free_result($consulta);
mysqli_close($conexion);