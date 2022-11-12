<?php
require_once("Conexion.php"); 
$conexion=new Conectar();
$con=$conexion->conectar();
$resultado=$con->query("SELECT idUsuario,Usuario,Contrasenia FROM Usuarios;");
//$consulta="SELECT idUsuario,Usuario,Contrasenia FROM Usuarios;";
//$resultado=mysqli_query($con,$consulta);
//$filas=mysqli_num_rows($resultado);
//$filas=$con->affected_rows;
if($filas){
    echo "Conexion realizada ".$filas;
}else{
    echo "No fue posible realizar la conexion";
}
?>