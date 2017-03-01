<?php
include 'conexion.php';
$nombre = $_POST["nombre"];
$apellidos = $_POST["apellidos"];
$email = $_POST["email"];
$usuario = $_POST["usuario"];
$telefono = $_POST["telefono"];
$contrasena = $_POST["contrasena"];

$insertar = "INSERT INTO Registrar(Nombre,Apellidos,Email,Usuario,Telefono,Contrasena)
VALUES('$nombre','$apellidos','$email','$usuario','$telefono','$contrasena' )";

$verificarUsuario = mysqli_query($conexion, "SELECT * FROM Registrar WHERE Usuario = '$usuario'");
if(mysqli_num_rows($verificarUsuario) > 0){
echo '<script>
    alert("Este usuario ya existe");
    window.history.go(-1);
    </script>';
    exit;
}
$verificarCorreo = mysqli_query($conexion, "SELECT * FROM Registrar WHERE Email = '$email'");
if(mysqli_num_rows($verificarCorreo) > 0){
echo '<script>
    alert("El correo ingresado ya existe, escoje otro");
    window.history.go(-1);
    </script>';
    exit;
}

$resultado = mysqli_query($conexion, $insertar);
if(!$resultado){
echo 'error al registrarse';
}
else{
   
    header("Location:../ProLine/login.html");

    
}