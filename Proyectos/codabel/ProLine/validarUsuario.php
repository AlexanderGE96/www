<?php
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];

//conectar base de datos

$conexion=mysqli_connect('localhost','id703830_paola','memoria8','id703830_proline');
$consulta="SELECT * FROM Registrar WHERE '$usuario'=Usuario and '$contrasena'= Contrasena" ;
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

	
if($filas>0){
    
	header("Location:../ProLine/home.html");
     
}
else{
	echo '<script>
    alert("El usuario no existe");
    window.history.go(-1);
    </script>';
    exit;
}
	



mysqli_free_result($resultado);
mysqli_close($conexion);