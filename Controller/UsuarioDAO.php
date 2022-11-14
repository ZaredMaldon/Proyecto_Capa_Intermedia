<?php
//Aqui van las recuperaciones de datos para el usuario de la base de datos
require_once("../Model/Conexion.php");
require_once("../Model/Usuario.php");
class UsuarioDao{
    private $conexion;
    function __construct()
    {   
        $this->conexion=new Conectar();
        $this->conexion=$this->conexion->conectar();
        
    }

    
    public function agregar($Usuario,$_Email,$_Nombres,$_APat,$_AMat,$_Password){
        try{
            $msql=$this->conexion;
            $msql->query("CALL sp_Usuario(1,null,'{$Usuario}','{$_Password}',2,'{$_Email}',null,'{$_Nombres}','{$_APat}','{$_AMat}',null,1);");
            // $statement=$msql->prepare("CALL sp_Usuario(?,?,'?','?',?,'?',?,'?','?','?',?,?);");
            // $statement->bind_param(1,null,$Usuario,$_Password,2/*Rol*/,$_Email,null/*Imagen*/,$_Nombres,$_APat,$_AMat,null/*nacimiento*/,1/*sexo*/);
            // $statement->execute();
            // $statement->close();
            $msql->close();
            echo json_encode("Se registro exitosamente el Usuario ".$_Password);
        }catch(Exception $e){
            echo json_encode("Excepcion: ".$e->getMessage());
        }
        
    }

    public function eliminar($_id){
        try{
            $msql=$this->conexion;
            $statement=$msql->prepare("CALL sp_Usuario(?,?,?,?,?,?,?,?,?,?,?,?);");
            $statement->bind_param(2,$_id,"null","null","null","null","null","null","null","null","null","null");
            $statement->execute();
            $statement->close();
            $msql->close();
        }catch(Exception $e){
            echo json_encode("Excepcion: ".$e->getMessage());
        }
    }

    public function editar($_id,$Usuario,$_Email,$_Nombres,$_APat,$_AMat,$_Password){
        try{
            $msql=$this->conexion;
            $msql->query("CALL sp_Usuario(3,'{$_id}','{$Usuario}','{$_Password}',2,'{$_Email}',null,'{$_Nombres}','{$_APat}','{$_AMat}',null,1);");
            $msql->close();
            echo json_encode("Se registro exitosamente el Usuario ".$_Password);
        }catch(Exception $e){
            echo json_encode("Excepcion: ".$e->getMessage());
        }
    }

    public function get_User($_id){
        $msql=$this->conexion;
        $execute=$msql->query("SELECT * FROM Users where id={$_id}");
        $usuarioNow=$execute->fetch_all(PDO::FETCH_ASSOC);
        $msql->close();
        return $usuarioNow;
    }
}

?>