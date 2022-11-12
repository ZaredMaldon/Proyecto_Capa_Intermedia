<?php
require_once("Conexion.php"); 

//Recibo todos los datos del formulario
$Usuario = $_POST['UsuarioRegister'];
$Email = $_POST['Email'];
$Imagen = $_POST['ImagenUsuario'];
$Nombres = $_POST['Nombre'];
$APat = $_POST['APat'];
$AMat = $_POST['ApMat'];
$Fecha_Nacimiento = $_POST['FechaNacimiento'];
$Sexo = $_POST['Sexo'];
$Rol=$_POST['Rol'];

$conexion=new Conectar();
$msql=$conexion->conectar();
$msql->query("CALL registrarUsuario($Usuario,$Email,$Imagen,$Nombres,$APat,$AMat,$Fecha_Nacimiento,$Sexo,$Rol)");
mysqli_close($msql);
?>