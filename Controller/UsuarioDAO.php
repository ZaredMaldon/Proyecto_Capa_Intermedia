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

    
    public function agregar($Usuario,$Email,$Imagen,$Nombres,$APat,$AMat,$Fecha_Nacimiento,$Sexo,$Rol,$Password,$Tipo){
        try{
            $msql=$this->conexion;
            $execute=$msql->query("CALL sp_Usuario(1,null,'{$Usuario}','{$Password}',{$Rol},'{$Email}','{$Imagen}','{$Nombres}','{$APat}','{$AMat}','{$Fecha_Nacimiento}',{$Sexo},'{$Tipo}');");
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

    public function editar($_id,$Usuario,$Email,$Nombres,$APat,$AMat,$Password,$Imagen,$Rol,$Tipo){
        try{
            $msql=$this->conexion;
            $msql->query("CALL sp_Usuario(3,'{$_id}','{$Usuario}','{$Password}',{$Rol},'{$Email}','{$Imagen}','{$Nombres}','{$APat}','{$AMat}',null,null,'{$Tipo}');");
            $msql->close();
            self::update_Session($Usuario,$Password);
            echo json_encode("Se edito exitosamente el Usuario: ".$Usuario);
        }catch(Exception $e){
            echo json_encode("Excepcion: ".$e->getMessage());
        }
    }

    private function update_Session($User,$Password){
        //session_start();
        if(session_status()==PHP_SESSION_ACTIVE){
            session_destroy();
        }
        $conexion=new Conectar();
        $con=$conexion->conectar();
        $consulta="SELECT u.idUsuario,u.Usuario,u.Contrasenia,u.Tipo,u.Fk_Rol,r.Rol,u.Email,p.Imagen,p.Nombres,p.APat,p.AMat,p.Fecha_Nacimiento,p.Sexo as idSexo,s.Sexo,p.Fecha_ingreso,u.Estatus FROM Usuarios u
        INNER JOIN Personas p on u.idUsuario=p.Fk_Usuario
        INNER JOIN Roles r on u.Fk_Rol=r.idRol
        INNER JOIN Sexo s on p.Sexo=s.idSexo
        where (Usuario='$User' and Contrasenia='$Password') and (Estatus=1);";
        $resultado=$con->query($consulta);
        //$filas=mysqli_num_rows($resultado);
        session_start();
        while($fila=mysqli_fetch_array($resultado)){
            $_SESSION['userNow']= array($fila['idUsuario'],$fila['Usuario'],$fila['Contrasenia'],$fila['Tipo'],$fila['Fk_Rol'],$fila['Rol'],$fila['Email'],$fila['Imagen'],$fila['Nombres'],$fila['APat'],$fila['AMat'],$fila['Fecha_Nacimiento'],$fila['idSexo'],$fila['Sexo'],$fila['Fecha_ingreso'],$fila['Estatus']);
        }

        mysqli_free_result($resultado);
        mysqli_close($con);
    }
}

?>