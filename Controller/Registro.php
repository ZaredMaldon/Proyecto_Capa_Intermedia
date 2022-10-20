<?php
include_once('Conexion.php');

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

$conectar = Conectar::conectar();

//Usuarios
$sql = "insert into Usuarios(Usuario,Contrasenia, Fk_Rol, Email) values ('$Usuario','$Contrasenia', '$Rol', '$Email')";
//Persona
$sql2 = "insert into Personas(Fk_Usuario, Imagen, Nombres, APat, AMat, Fecha_Nacimiento, Sexo, Fecha_ingreso) values ('$Fk_Usuario', '$Imagen','$Nombres', '$APat', '$AMat', '$Fecha_Nacimiento','$Sexo',NOW())";

$result = $conectar->query($sql)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);
$result2 = $conectar->query($sql2)or trigger_error("Query failed! SQL - Error: " .mysqli_error($conectar), E_USER_ERROR);
 header("Status: 301 Moved Permanently");
 header("Location: index.php");

exit;

?>