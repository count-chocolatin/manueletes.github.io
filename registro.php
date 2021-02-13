<?php 

  $conexion = mysqli_connect("localhost", "root" , "", "mydatos");

$nombre = $_POST["nombre"];
$email = $_POST["email"];
$password = $_POST["password"];

if(!empty($_POST['nombre'])) {
    $subir = "INSERT INTO tabla(nombre, email, password) VALUES ('$nombre', '$email', '$password')";
    $consulta = mysqli_query($conexion , $subir);
    echo "<script>alert('Usuario registrado, Gracias'); window.location='index.html'</script>"; 
}

    


