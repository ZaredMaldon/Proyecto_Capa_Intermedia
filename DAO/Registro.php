<?php
require_once("../Controller/UsuarioDAO.php");
$usuarioDao=new UsuarioDao();

$_Usuario = $_POST['UsuarioRegister'];
$_Email = $_POST['Email'];
$_Nombres = $_POST['Nombre'];
$_APat = $_POST['ApPat'];
$_AMat = $_POST['ApMat'];
$_Password=$_POST['PasswordReg'];
$_Password2=$_POST['PasswordReg2'];
$_Imagen = addslashes(file_get_contents($_FILES['ImagenUsuario']['tmp_name']));
$_Fecha_Nacimiento = $_POST['FechaNacimiento'];
$_Sexo = $_REQUEST['Sexo'];
$_Rol=$_REQUEST['Rol'];
$_Tipo=$_REQUEST['Tipo'];   

$usuarioDao->agregar($_Usuario,$_Email,$_Imagen,$_Nombres,$_APat,$_AMat,$_Fecha_Nacimiento,$_Sexo,$_Rol,$_Password,$_Tipo);
//$usuarioDao->agregar($_Usuario,$_Email,$_Nombres,$_APat,$_AMat,$_Password);

?>