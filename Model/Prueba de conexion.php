<?php
require_once("Conexion.php"); 

$con=Conectar::conectar();
$consulta="SELECT idUsuario,Usuario,Contrasenia FROM Usuarios;";
$resultado=mysqli_query($con,$consulta);
$filas=mysqli_num_rows($resultado);
if($filas){
    echo "Conexion realizada ".$filas;
}
?>