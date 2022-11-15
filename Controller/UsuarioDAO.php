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

    
    public function agregar($Usuario,$Email,$Imagen,$Nombres,$APat,$AMat,$Fecha_Nacimiento,$Sexo,$Rol,$Password){
        try{
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Usuario(1,null,'{$Usuario}','{$Password}',{$Rol},'{$Email}','{$Imagen}','{$Nombres}','{$APat}','{$AMat}','{$Fecha_Nacimiento}',{$Sexo});");
            if($execute){
                echo json_encode("1");
            }
            $msql->close();
            
            
        }catch(Exception $e){
            //echo json_encode("Excepcion: ".$e->getMessage());
            echo json_encode("0");
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

    public function editar($_id,$Usuario,$Email,$Imagen,$Nombres,$APat,$AMat,$Fecha_Nacimiento,$Sexo,$Rol,$Password){
        try{
            $msql=$this->conexion;
            $msql->query("CALL sp_Usuario(3,'{$_id}','{$Usuario}','{$Password}',{$Rol},'{$Email}','{$Imagen}','{$Nombres}','{$APat}','{$AMat}','{$Fecha_Nacimiento}',{$Sexo});");
            $msql->close();
            echo json_encode("Se edito exitosamente el Usuario ".$Usuario);
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