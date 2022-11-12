<?php
//Aqui van las recuperaciones de datos para el usuario de la base de datos
require_once("Conexion.php");
require_once("../Model/Usuario.php");
class UsuarioDao{
    public $Usuario= new Usuario();
    

    public function agregar($_usuario){
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
        return true;
    }
}
?>