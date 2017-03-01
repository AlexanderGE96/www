<?php
$conexion = mysqli_connect('localhost','id703830_paola','memoria8','id703830_proline');
if(!$conexion){
 echo 'Error al conectarse a la base de datos';
}
else{
echo 'Conexion exitosa';
}
