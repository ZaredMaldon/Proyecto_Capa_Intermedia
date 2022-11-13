<?php
//Aqui van las recuperaciones de datos para el usuario de la base de datos
require_once("../Model/Conexion.php");
require_once("../Model/Usuario.php");
class UsuarioDao{
    
    public function agregar($Usuario,$_Email,$_Nombres,$_APat,$_AMat,$_Password){
        
        $conexion=new Conectar();
        $msql=$conexion->conectar();
        $statement=$msql->prepare("CALL sp_Usuario(?,?,?,?,?,?,?,?,?,?,?,?);");
        $statement->bind_param(1,null,$Usuario,$_Password,2/*Rol*/,$_Email,null/*Imagen*/,$_Nombres,$_APat,$_AMat,null/*nacimiento*/,1/*sexo*/);
        $statement->execute();
        $statement->close();
        $msql->close();
        echo json_encode("Se registro exitosamente el Usuario");
    }

    public function eliminar($_id){
        $conexion=new Conectar();
        $msql=$conexion->conectar();
        $statement=$msql->prepare("CALL sp_Usuario(?,?,?,?,?,?,?,?,?,?,?,?);");
        $statement->bind_param(2,$_id,null,null,null,null,null,null,null,null,null);
        $statement->execute();
        $statement->close();
        $msql->close();
    }

    public function editar(){
        $Usuario = $_POST['UsuarioM'];
        $Email = $_POST['EmailM'];
        $Imagen = $_POST['ImagenUsuarioM'];
        $Nombres = $_POST['NombreM'];
        $APat = $_POST['APatM'];
        $AMat = $_POST['ApMatM'];
        $Fecha_Nacimiento = $_POST['FechaNacimientoM'];
        $Sexo = $_POST['SexoM'];
        $Rol=$_POST['RolM'];

        $conexion=new Conectar();
        $msql=$conexion->conectar();
        $statement=$msql->prepare("CALL sp_Usuario(?,?,?,?,?,?,?,?,?,?,?);");
        $statement->bind_param(3,null,$Usuario,$Email,$Imagen,$Nombres,$APat,$AMat,$Fecha_Nacimiento,$Sexo,$Rol);
        $statement->execute();
        $statement->close();
        $msql->close();
    }

    /*public function get_User($_id){
        $conexion=new Conectar();
        $msql=$conexion->conectar();
        $msql->prepare("SELECT * FROM Users where id=$_id");
        $msql->close();
        $usuarioNow=new Usuario($img,$nom,$apP,$apM,$usu,$password,$roll,$genero,$correo,$fNac,$fIn);
        return $usuarioNow;
    }*/
}

?>